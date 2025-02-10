
<div class="modal fade kbitech-modal" id="addServiceModal" tabindex="-1" aria-labelledby="faq-addlabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
            <form action="{{ route('admin.service.store') }}" id="serviceStoreForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="faq-addlabel">Add Service</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom-modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="label">Service Category <span class="text-danger">*</span></label>
                                <div class="form-group position-relative">
                                    <select name="service_category" id="category_id" class="form-select select2 form-control h-58 ps-5" aria-label="Default select example" required>
                                        <option selected value="" class="text-dark">Select Category</option>
                                        @foreach ($service_categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="fa-light fa-location-dot position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group ">
                                <label class="label">Service Name <span class="text-danger">*</span></label>
                                <div class="form-group position-relative">
                                    <input type="text" name="name" class="form-control text-dark ps-5" placeholder="Type Category Name" required>
                                    <i class="fa-light fa-location-dot position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="label">Thumbnail Image</label>
                                <input type="file" name="image" class="form-control text-dark" accept="image/*" />
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3">    
                            <div class="form-group">
                                <label class="label">Service Images</label>
                                <input type="file" name="service_image[]" class="form-control text-dark" multiple accept="image/*" />
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="label">Overview</label>
                                <textarea name="short_description" id="service_overview" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="label">Description</label>
                                <textarea name="long_description" id="service_description" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                </div>
            </form>
		</div>
	</div>
</div>