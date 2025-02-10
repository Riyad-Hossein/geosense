@extends('backend.layouts.layout')

@section('content')
    <div class="kyc-user-main-wrapper dash-card-content-wrappper bg-white">
        <div class="default-table-area recent-orders">
            <div
                class="m-cart-profile-box-wrapper d-flex flex-wrap justify-content-md-between justify-content-center align-items-center">

                <div class="mcpb-wrap">
                    <div class="d-sm-flex text-center justify-content-between align-items-center ">
                        <div class="search-box-wrapper src-form position-relative">
                            <input type="text" class="form-control" id="keyword_filtered" placeholder="Search Title">
                            <button type="submit" onclick="getData()" class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                <i data-feather="search"></i>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="mcbb-wrap">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addServiceModal" class="btn btn-primary text-white fw-semibold py-2 px-3 w-sm-100 mt-3 mt-sm-0">
                        <span class="py-1 d-block"><i class="fa-duotone fa-plus me-1"></i>Add Slider </span>
                    </a>
                </div>
            </div>

            <div class="table_wrapper" id="ajax-data-load">
                
            </div>
        </div>
    </div>
@endsection

@section('modals')
    @include('backend.slider._add_slider_modal')
    @include('backend.slider._edit_slider_modal')
@endsection

@section('css')
@endsection

@section('css_plugins')

@endsection

@section('js_plugins')

@endsection

@section('js')
    <script>
        var filterData = {
            keyword_filtered: ''
        };
        $(document).ready(function() {
            getData();

            filterData.keyword_filtered = $("#keyword_filtered").val()
            $("#keyword_filtered").on('input', function () {
                filterData.keyword_filtered = $(this).val();
            });

            $("#serviceStoreForm").on('submit', function (e) {
                var self = this;
                e.preventDefault();
                var formData = new FormData($(self)[0]);
                $(".ie-span").text("").hide();
                var url = $(self).attr('action');

                formPost(url, formData, function (res) {
                    if(res.status == 200){
                        $('#addServiceModal').modal('hide');
                        $(self)[0].reset();
                        showSuccessAlert('Success',res.message)
                        getData();
                    }else{
                        showErrorAlert('Error',res.message)
                    }
                }, 'show_input_error');
            });

            $(document).on("submit", "#partnerUpdateForm", function(e) {
                e.preventDefault();
                
                var formData = new FormData($(this)[0]);
                $(".ie-span").text("").hide();
                var url = $(this).attr('action');

                formPost(url, formData, function (res){
                    if(res.status == 200){
                        $('#editPartnerModal').modal('hide');
                        showSuccessAlert('Success',res.message)
                        getData();
                    }else{
                        showErrorAlert('Error',res.message)
                    }
                }, 'show_input_error');
            });
        });

        function getData(){
            getPaginatedListData("{{ route('admin.slider.filtered') }}", "#ajax-data-load", filterData);
        }

        function getPaginatedData(button) {
            getPaginatedListData($(button).attr('data-href'), "#ajax-data-load", filterData);
        }

        function editItem(id){
            let url = "{{route('admin.slider.edit', ':id')}}";
            url = url.replace(':id', id);
            ajaxGet(url, {}, function (response) {
                if (response.status == 200) {
                    $("#edit_partner_modal_body").html(response.view);
                    $("#editPartnerModal").modal('show');
                } else {
                    toastr.error(response.message);
                }
            }, 'default');
        }

    </script>
@endsection