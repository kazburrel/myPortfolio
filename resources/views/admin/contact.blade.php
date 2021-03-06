@extends('admin.layouts.index')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid mx-auto" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="">
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        {{-- <div class="card-toolbar">
                        <!--begin::Modal - Add task-->
$data['cont']
                        <!--end::Modal - Add task-->
                    </div> --}}
                    </div>
                    <div class="card-body py-4">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <div class="text-center">
                                <h1>Messages</h1>
                            </div>
                            <thead>
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">

                                    <th class="min-w-125px">Name</th>
                                    <th class="min-w-125px">Email</th>
                                    <th class="min-w-125px">Message</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="text-gray-600 fw-bold">

                                @forelse ($contactMe as $contact)
                                    <tr>

                                        <td>{{ Str::headline($contact->name) }}</td>

                                        <td>{{ $contact->email }}</td>


                                        <td>
                                            <div class="badge badge-light fw-bolder">
                                                {{ Str::words($contact->message, 5, '...') }}</div>
                                        </td>
                                        {{-- {{ Str::words($resume->description, 5, '...') }} --}}
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
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_add_user-{{ $contact->id }}">
                                                        View
                                                    </a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_1{{ $contact->id }}"
                                                        data-kt-users-table-filter="delete_row">Delete</a>
                                                </div>
                                            </div>
                                            <div class="modal fade" tabindex="-1" id="kt_modal_1{{ $contact->id }}">
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
                                                            <x-delete href="/admin/contact/{{ $contact->id }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="kt_modal_add_user-{{ $contact->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header" id="kt_modal_add_user_header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bolder">
                                                                Message from : {{ $contact->name }}
                                                            </h2>
                                                            <!--end::Modal title-->
                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6"
                                                                            y="17.3137" width="16" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="7.41422" y="6"
                                                                            width="16" height="2" rx="1"
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
                                                        <div class="modal-body scroll-y mx-5  my-7">
                                                            <!--begin::Form-->

                                                            <div class="" style="float: left; text-align: left;s">
                                                                <div class="">
                                                                    <h3>EMAIL:</h3>
                                                                    <p>{{ $contact->email }}</p>
                                                                </div>

                                                                <div class="">
                                                                    <h3>MESSAGE:</h3>
                                                                    <div class=" overflow-scroll" style="height: 100px;">
                                                                        {{ $contact->message }}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--end::Form-->
                                                        </div>
                                                        <!--end::Modal body-->
                                                    </div>
                                                    <!--end::Modal content-->
                                                </div>
                                                <!--end::Modal dialog-->
                                            </div>
                                    </tr>
                                @empty
                                @endforelse
                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        {{ $contactMe->links() }}
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
