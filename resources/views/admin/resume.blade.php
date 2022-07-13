@extends('admin.layouts.index')

@section('content')
    <div class="card card-flush h-lg-100 w-50 mx-auto p-4" id="kt_contacts_main">
        <h3 class="text-center"><span>UPDATE EXPERIENCE / EDUCATION</span></h3>
        <div class="card-body pt-5">
            <form action="/admin/resume" method="POST" id="kt_ecommerce_settings_general_form" class="form p-4" action="#">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="fv-row mb-7">
                            <select class="form-select" aria-label="Select example" name="type">
                                <option value="">Open this select menu</option>
                                <option value="education">Education</option>
                                <option value="experience">Experience</option>
                            </select>
                            @error('type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>Tile</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Enter the contact's phone number (optional)."></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="title" value="" />
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>Location</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Enter the contact's phone number (optional)."></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="location" value="" />
                            @error('location')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>Description</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Enter the contact's phone number (optional)."></i>
                            </label> <br>
                            <textarea name="description" id="" rows="5" style="width: 100%"></textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>Start</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Enter the contact's phone number (optional)."></i>
                            </label>
                            <input type="number" class="form-control form-control-solid" name="start" value="" />
                            @error('start')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>End</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Enter the contact's phone number (optional)."></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="end" value="" />
                            @error('end')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                        Changes</button>
                    {{-- <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                        <span class="indicator-label">Save</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button> --}}
                </div>
            </form>

        </div>
    </div>

    {{-- Table plus Modal Update for Resume --}}
    <div class="content d-flex flex-column flex-column-fluid mx-auto" id="kt_content">

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">

                        <div class="card-toolbar">
                            <!--begin::Modal - Add task-->

                            <!--end::Modal - Add task-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                            <!--begin::Table head-->
                            <thead>

                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">

                                    <th class="min-w-125px">Type</th>
                                    <th class="min-w-125px">Title</th>
                                    <th class="min-w-125px">Location</th>
                                    <th class="min-w-125px">Description</th>
                                    <th class="min-w-125px">Start</th>
                                    <th class="min-w-125px">End</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>

                            </thead>

                            <tbody class="text-gray-600 fw-bold">

                                @forelse ($resumes as $resume)
                                    <tr>

                                        <td>{{ $resume->type }}</td>

                                        <td>{{ $resume->title }}</td>


                                        <td>
                                            <div class="badge badge-light fw-bolder">{{ $resume->location }}</div>
                                        </td>

                                        <td>
                                            <div class="badge badge-light fw-bolder">
                                                {{ Str::words($resume->description, 5, '...') }}</div>
                                        </td>

                                        <td>{{ $resume->start }}</td>
                                        <td>{{ $resume->end }}</td>

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
                                                <!--end::Svg Icon-->
                                            </a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_add_user-{{ $resume->id }}">
                                                        Edit
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_1{{ $resume->id }}"
                                                        data-kt-users-table-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->

                                            <!--end::Action=-->
                                    </tr>
                                    <div class="modal fade" tabindex="-1" id="kt_modal_1{{ $resume->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content text-center">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"></h5>

                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span class="svg-icon svg-icon-2x">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)"
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
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <x-delete href="/admin/resume/{{ $resume->id }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="kt_modal_add_user-{{ $resume->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header" id="kt_modal_add_user_header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bolder">Update Resume : {{ $profile->first_name }}
                                                        {{ $profile->last_name }}</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                        data-kt-users-modal-action="close">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)"
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

                                                    <form action="/admin/resume/{{ $resume->id }}" method="POST"
                                                        class="form p-4">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="fv-row mb-7">
                                                                    <select class="form-select"
                                                                        aria-label="Select example" name="type">
                                                                        <option value="">Open this select menu
                                                                        </option>
                                                                        <option @selected($resume->type == 'education')
                                                                            value="education">Education</option>
                                                                        <option @selected($resume->type == 'experience')
                                                                            value="experience">Experience</option>
                                                                    </select>
                                                                    @error('type')
                                                                        <p class="text-danger">{{ $type }}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="fv-row mb-7">
                                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                                        <span>Title</span>
                                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Enter the contact's phone number (optional)."></i>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        name="title" value="{{ $resume->title }}" />
                                                                    @error('title')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="fv-row mb-7">
                                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                                        <span>Location</span>
                                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Enter the contact's phone number (optional)."></i>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        name="location"
                                                                        value="{{ $resume->location }}" />
                                                                    @error('location')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="fv-row mb-7">
                                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                                        <span>Description</span>
                                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Enter the contact's phone number (optional)."></i>
                                                                    </label> <br>
                                                                    <textarea name="description" id="" rows="5" style="width: 100%">{{ $resume->description }}</textarea>
                                                                    @error('description')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="fv-row mb-7">
                                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                                        <span>Start</span>
                                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Enter the contact's phone number (optional)."></i>
                                                                    </label>
                                                                    <input type="number"
                                                                        class="form-control form-control-solid"
                                                                        name="start" value="{{ $resume->start }}" />
                                                                    @error('start')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="fv-row mb-7">
                                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                                        <span>End</span>
                                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Enter the contact's phone number (optional)."></i>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        name="end" value="{{ $resume->end }}" />
                                                                    @error('end')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex justify-content-center">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                Changes</button>
                                                            {{-- <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                                            <span class="indicator-label">Save</span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button> --}}
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
                        {{ $resumes->links() }}
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
