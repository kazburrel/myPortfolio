@extends('admin.layouts.index')

@section('content')
    <div class="menu-item px-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
            Add Category
        </button>
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <form method="POST" action="/admin/portfolio" class="form" id="kt_account_profile_details_form">
                @csrf
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                        rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body">
                        <p>ADD A NEW PROJECT CATEGORY</p>
                    </div>

                    <div class="mx-auto">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>CATEGORY NAME</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Enter the contact's phone number (optional)."></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="cat_name" value="" />
                            @error('cat_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card card-flush h-lg-100 w-50 mx-auto p-4" id="kt_contacts_main">
        <h3 class="text-center"><span>ADD PROJECT</span></h3>
        <div class="card-body pt-5">
            <form action="/admin/portfolio" method="POST" id="kt_ecommerce_settings_general_form" class="form p-4"
                action="#" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="fv-row mb-7">
                            <select class="form-select" aria-label="Select example" name="pro_type">
                                @forelse ($category as $cat)
                                    <option>{{ $cat->cat_name }}</option>
                                @empty
                                @endforelse
                            </select>
                            @error('type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>PROJECT NAME</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Enter the contact's phone number (optional)."></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="pro_name" value="" />
                            @error('pro_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>DESCRIPTION</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="pro_des" value="" />
                            @error('percentage')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>PROJECT URL</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="pro_url"
                                value="" />
                            @error('pro_url')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>PROJECT IMAGE</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"></i>
                            </label>
                            <input type="file" class="form-control form-control-solid" name="pro_img"
                                value="" />
                            @error('pro_img')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                        Changes</button>
                </div>
            </form>

        </div>
    </div>

    {{-- Table section for portfolio --}}

    <div class="card-body py-4">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                    <th class="min-w-125px">Project Image</th>
                    <th class="min-w-125px">Project Name</th>
                    <th class="min-w-125px">URL</th>
                    <th class="min-w-125px">Project Type</th>
                    <th class="min-w-125px">Project Description</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="text-gray-600 fw-bold">
                <!--begin::Table row-->
                @forelse ($portfolios as $portfolio)
                    <tr>
                        <!--end::Checkbox-->
                        <!--begin::User=-->
                        <td class="d-flex align-items-center">
                            <!--begin:: Avatar -->
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                <a href="#">
                                    <div class="symbol-label">
                                        <img src="{{ asset('storage/' . $portfolio->pro_img) }}" alt="avatar"
                                            class="w-100" />
                                    </div>
                                </a>
                            </div>
                            <!--end::Avatar-->
                        </td>
                        <td>{{ $portfolio->pro_name }}</td>
                        <td>
                            <div class="badge badge-light fw-bolder">{{ $portfolio->pro_url }}</div>
                        </td>
                        <td>
                            <div class="badge badge-light fw-bolder">{{ Str::slug($portfolio->pro_type, '-') }}</div>
                        </td>
                        <td>{{ $portfolio->pro_des }}</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_user{{ $portfolio->id }}">
                                        Edit
                                    </a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_1{{ $portfolio->id }}"
                                        data-kt-users-table-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                    </tr>

                    <div class="modal fade" tabindex="-1" id="kt_modal_1{{ $portfolio->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content text-center">
                                <div class="modal-header">
                                    <h5 class="modal-title"></h5>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span class="svg-icon svg-icon-2x">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2"
                                                    rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <div class="modal-body">
                                    <p>Are you sure you want to delete?</p>
                                </div>

                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <x-delete href="/admin/portfolio/{{ $portfolio->id }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="kt_modal_add_user{{ $portfolio->id }}" tabindex="-1"
                        aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_user_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Update Portfolio</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2"
                                                    rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <!--begin::Form-->

                                    <form action="/admin/portfolio/{{ $portfolio->id }}" method="POST"
                                        id="kt_ecommerce_settings_general_form" class="form p-4"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="fv-row mb-7">
                                                    <select class="form-select" aria-label="Select example"
                                                        name="pro_type">
                                                        @forelse ($category as $cat)
                                                            <option value="{{ $cat->cat_name }}">{{ $cat->cat_name }}
                                                            </option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                    @error('type')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span>PROJECT NAME</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Enter the contact's phone number (optional)."></i>
                                                    </label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="pro_name" value="{{ $portfolio->pro_name }}" />
                                                    @error('pro_name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span>DESCRIPTION</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"></i>
                                                    </label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="pro_des" value="{{ $portfolio->pro_des }}" />
                                                    @error('percentage')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span>PROJECT URL</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"></i>
                                                    </label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="pro_url" value="{{ $portfolio->pro_url }}" />
                                                    @error('pro_url')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="fv-row mb-7">
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span>PROJECT IMAGE</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"></i>
                                                    </label>
                                                    <input type="file" class="form-control form-control-solid"
                                                        name="pro_img" value="{{ $portfolio->pro_img }}" />
                                                    @error('pro_img')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary"
                                                id="kt_account_profile_details_submit">Save
                                                Changes</button>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                @empty
                @endforelse
                <!--end::Table row-->
            </tbody>
            <!--end::Table body-->
        </table>
        {{ $portfolios->links() }}
        <!--end::Table-->
    </div>
@endsection
