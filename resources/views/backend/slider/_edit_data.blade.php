<form action="{{ route('admin.slider.update', $item->id) }}" id="partnerUpdateForm" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="faq-addlabel">Edit Slider</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body custom-modal-body">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="form-group ">
                    <label class="label"> Name <span class="text-danger">*</span></label>
                    <div class="form-group position-relative">
                        <input type="text" value="{{ $item?->title }}" name="name" class="form-control text-dark" placeholder="Type Name" required>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="form-group">
                    <label class="label">Profile Image <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control text-dark" accept="image/*" />
                    @if($item->image)
                        <img src="{{ asset($item->image) }}" alt="Thumbnail" class="img-thumbnail mt-2" width="150">
                    @endif
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="form-group ">
                    <label class="label">Description</label>
                    <div class="form-group position-relative">
                        <input type="text" name="description" value="{{ $item?->description }}" class="form-control text-dark" placeholder="Type Description">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary text-white">Submit</button>
    </div>
</form>
