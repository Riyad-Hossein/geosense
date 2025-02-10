<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\BaseControllers\BackendController;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends BackendController
{
    private int $paginate_limit;
    
    public function __construct()
    {
        $this->addBreadcrumbs('Dashboard', route('dashboard'), 'ri-home-2-line');
        $this->addBreadcrumbs('Slider');

        $this->paginate_limit = config('commonData.paginate_limit');
    }

    public function index()
    {
        $this->setPageTitle("Slider");
        $this->setActiveMenu('slider');

        return  $this->view('backend.slider.index');
    }

    public function indexFiltered(Request $request)
    {
        $keyword_filtered = $request->keyword_filtered;
        $data['sliders'] = Slider::where('deleted', Slider::DELETED_NO)
            ->where('status', Slider::STATUS_ACTIVE)
            ->where(function ($q) use ($keyword_filtered){
                if ($keyword_filtered !=''){
                    $q->where('title', 'like', '%'.$keyword_filtered.'%');
                }
            })
            ->orderBy('id', 'desc')->paginate($this->paginate_limit);

        $view = $this->view('backend.slider._index_filtered')
            ->with($data)
            ->render();

        return $this->returnAjaxSuccess(['view' => $view]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
            ]);

            $check_duplicate = Slider::where('title', $request->name)
                ->where('deleted', Slider::DELETED_NO)
                ->where('status', Slider::STATUS_ACTIVE)
                ->first();

            if (!empty($check_duplicate)) {
                throw new \Exception("Slider already exists");
            }

            $imagePath = null;
            if ($request->has('image')) {
                $image = $request->input('image');
                $isBase64 = false;
                if (preg_match('/^data:image\/(\w+);base64,/', $image)) {
                    $isBase64 = true;
                }
                $uploadPath = 'team';
                if ($isBase64) {
                    $result = ImageUploadHelper::storeBase64Image($image, $uploadPath, null, 'webp');
                } else {
                    $file = $request->file('image');
                    $result = ImageUploadHelper::store($file, $uploadPath, null, 'webp');
                }

                $imagePath = $result['path'];
            }

            $team = new Slider();
            $team->title = $request->name;
            $team->description = $request->description;
            $team->image = $imagePath;
            $team->created_by = Auth::user()->id;
            $team->created_at = now();
            $team->updated_by = Auth::user()->id;
            $team->updated_at = now();
            $team->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Slider created successfully');
    }

    public function edit($id)
    {
        try {
            $data['item'] = Slider::where('id', $id)
                ->where('deleted', Slider::DELETED_NO)
                ->where('status', Slider::STATUS_ACTIVE)
                ->first();
                
            if (!$data['item']) {
                throw new \Exception('Slider not found');
            }

            $view = $this->view('backend.slider._edit_data')
                ->with($data)
                ->render();

            return $this->returnAjaxSuccess(['view' => $view]);
        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string',
            ]);

            $team = Slider::where('id', $id)
                ->where('deleted', Slider::DELETED_NO)
                ->where('status', Slider::STATUS_ACTIVE)
                ->first();
            if (!$team) {
                throw new \Exception('Slider not found');
            }

            $check_duplicate = Slider::where('title', $request->name)
                ->where('deleted', Slider::DELETED_NO)
                ->where('status', Slider::STATUS_ACTIVE)
                ->where('id', '!=', $id)
                ->first();

            if (!empty($check_duplicate)) {
                throw new \Exception("Slider already exists");
            }

            $imagePath = $team->image;
            if ($request->has('image')) {
                $image = $request->input('image');
                $isBase64 = false;
                if (preg_match('/^data:image\/(\w+);base64,/', $image)) {
                    $isBase64 = true;
                }
                $uploadPath = 'project';
                if ($isBase64) {
                    $result = ImageUploadHelper::storeBase64Image($image, $uploadPath, null, 'webp');
                } else {
                    $file = $request->file('image');
                    $result = ImageUploadHelper::store($file, $uploadPath, null, 'webp');
                }

                $imagePath = $result['path'];
            }

            $team->title = $request->name;
            $team->description = $request->description;
            $team->image = $imagePath;
            $team->created_by = Auth::user()->id;
            $team->created_at = now();
            $team->updated_by = Auth::user()->id;
            $team->updated_at = now();
            $team->save();
            
        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Slider updated successfully');
    }

    public function delete($id)
    {
        try {
            $team = Slider::where('id', $id)
                ->where('deleted', Slider::DELETED_NO)
                ->first();
            if (!$team) {
                throw new \Exception('Slider not found');
            }
            $team->deleted = Slider::DELETED_YES;
            $team->deleted_by = Auth::user()->id;
            $team->deleted_at = now();
            $team->save();

        }catch (\Exception $e) {
            return $this->returnAjaxError([],$e->getMessage());
        }
        return $this->returnAjaxSuccess([], 'Slider deleted successfully');
    }
}
