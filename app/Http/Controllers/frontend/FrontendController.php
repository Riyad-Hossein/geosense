<?php

namespace App\Http\Controllers\frontend;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\BusinessType;
use App\Models\CompanyService;
use App\Models\Location;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use App\Models\TeamMember;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function homePage(){
        $data['sliders'] = Slider::where('status', Slider::STATUS_ACTIVE)
            ->where('deleted', Slider::DELETED_NO)
            ->orderBy('id', 'desc')
            ->get();

        $data['services'] = Service::where('status', Service::STATUS_ACTIVE)
            ->where('deleted', Service::DELETED_NO)
            ->get();

        return view('frontend.pages.index')->with($data);
    }
    
    public function aboutPage(){
        return view('frontend.pages.about');
    }
}
