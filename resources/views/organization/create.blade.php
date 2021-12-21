<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label"> Organization
                                    <span class="d-block text-muted pt-2 font-size-sm"> Organization Data</span></h3>
                            </div>
                            <div class="card-toolbar">
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="d-flex flex-column-fluid">
                                <!--begin::Container-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b example example-compact">
                                                <div class="card-header">
                                                    <h3 class="card-title">Create Organization</h3>
                                                </div>
                                                <!--begin::Form-->
                                                    <form class="form" id="create_organization_form"  enctype="multipart/form-data" >
                                                        @csrf
                                                    <div class="card-body">
                                                        <div class="mb-15">

                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Name</label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Organization Name" />
                                                                    <span class="form-text text-muted">Please enter organization name</span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Email</label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter Organization Email" />
                                                                    <span class="form-text text-muted">Please enter organization email</span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Phone</label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Organization Phone" />
                                                                    <span class="form-text text-muted">Please enter organization phone</span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Website</label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" name="website" id="website" class="form-control" placeholder="Enter Organization Website" />
                                                                    <span class="form-text text-muted">Please enter organization website</span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Logo</label>
                                                                <div class="col-lg-6">
                                                                    <div class="image-input image-input-outline" id="kt_image_1">
                                                                        <div class="image-input-wrapper" style="background-image: url(../assets/img/blank.png)"></div>
                                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                                            <input type="file" name="logo" id="image" accept=".png, .jpg, .jpeg, .svg" />
                                                                            <input type="hidden" name="profile_avatar_remove" />
                                                                        </label>
                                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span class="form-text text-muted">Allowed file types: png, jpg, jpeg, svg.</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-6">
                                                                <button type="submit" id="btn_create_organization" class="btn btn-success mr-2">Submit</button>
                                                                <button type="reset" id="btn_cancel" class="btn btn-secondary">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!--end::Entry-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="{{ asset('js/organization.js') }}" type="application/javascript" ></script>
<script src="{{ asset('js/scripts.bundle.js') }}" type="application/javascript" ></script>
<script src="{{ asset('js/image-input.js') }}" type="application/javascript" ></script>

