@extends("layouts.back.base")

@section("app_main")
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">video</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">video</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--message error begin-->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!--message error end -->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Tables Widget 11-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <!-- <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">New Arrivals</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new products</span>
                        </h3> -->

                        <div class="card-toolbar">

{{--                            <a href="{{route("video.create")}}" class="btn btn-sm btn-light-primary" data-toggle="tooltip" data-placement="top" title="Add new video">--}}
{{--                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->--}}
{{--                                <span class="svg-icon svg-icon-2">--}}
{{--                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />--}}
{{--                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />--}}
{{--                                    </svg>--}}
{{--                                </span>--}}
{{--                                <!--end::Svg Icon-->--}}
{{--                                New video--}}
{{--                            </a>--}}

                        </div>

                    </div>
                    <!--end::Header-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-8">
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <!--begin::Tables Widget 1-->
                            <div class="card card-xl-stretch mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">Add videos</span>
                                        <span class="text-muted fw-semibold fs-7"></span>
                                    </h3>
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
{{--                                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">--}}
{{--                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->--}}
{{--                                            <span class="svg-icon svg-icon-2">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">--}}
{{--                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />--}}
{{--                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />--}}
{{--                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />--}}
{{--                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />--}}
{{--                                                    </g>--}}
{{--                                                </svg>--}}
{{--                                            </span>--}}
{{--                                            <!--end::Svg Icon-->--}}
{{--                                        </button>--}}
                                        <!--begin::Menu 1-->
{{--                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_632223842777f">--}}
{{--                                            <!--begin::Header-->--}}
{{--                                            <div class="px-7 py-5">--}}
{{--                                                <div class="fs-5 text-dark fw-bold">Filter Options</div>--}}
{{--                                            </div>--}}
{{--                                            <!--end::Header-->--}}
{{--                                            <!--begin::Menu separator-->--}}
{{--                                            <div class="separator border-gray-200"></div>--}}
{{--                                            <!--end::Menu separator-->--}}
{{--                                            <!--begin::Form-->--}}
{{--                                            <div class="px-7 py-5">--}}
{{--                                                <!--begin::Input group-->--}}
{{--                                                <div class="mb-10">--}}
{{--                                                    <!--begin::Label-->--}}
{{--                                                    <label class="form-label fw-semibold">Status:</label>--}}
{{--                                                    <!--end::Label-->--}}
{{--                                                    <!--begin::Input-->--}}
{{--                                                    <div>--}}
{{--                                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_632223842777f" data-allow-clear="true">--}}
{{--                                                            <option></option>--}}
{{--                                                            <option value="1">Approved</option>--}}
{{--                                                            <option value="2">Pending</option>--}}
{{--                                                            <option value="2">In Process</option>--}}
{{--                                                            <option value="2">Rejected</option>--}}
{{--                                                        </select>--}}
{{--                                                    </div>--}}
{{--                                                    <!--end::Input-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Input group-->--}}
{{--                                                <!--begin::Input group-->--}}
{{--                                                <div class="mb-10">--}}
{{--                                                    <!--begin::Label-->--}}
{{--                                                    <label class="form-label fw-semibold">Member Type:</label>--}}
{{--                                                    <!--end::Label-->--}}
{{--                                                    <!--begin::Options-->--}}
{{--                                                    <div class="d-flex">--}}
{{--                                                        <!--begin::Options-->--}}
{{--                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="1" />--}}
{{--                                                            <span class="form-check-label">Author</span>--}}
{{--                                                        </label>--}}
{{--                                                        <!--end::Options-->--}}
{{--                                                        <!--begin::Options-->--}}
{{--                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />--}}
{{--                                                            <span class="form-check-label">Customer</span>--}}
{{--                                                        </label>--}}
{{--                                                        <!--end::Options-->--}}
{{--                                                    </div>--}}
{{--                                                    <!--end::Options-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Input group-->--}}
{{--                                                <!--begin::Input group-->--}}
{{--                                                <div class="mb-10">--}}
{{--                                                    <!--begin::Label-->--}}
{{--                                                    <label class="form-label fw-semibold">Notifications:</label>--}}
{{--                                                    <!--end::Label-->--}}
{{--                                                    <!--begin::Switch-->--}}
{{--                                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />--}}
{{--                                                        <label class="form-check-label">Enabled</label>--}}
{{--                                                    </div>--}}
{{--                                                    <!--end::Switch-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Input group-->--}}
{{--                                                <!--begin::Actions-->--}}
{{--                                                <div class="d-flex justify-content-end">--}}
{{--                                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>--}}
{{--                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Actions-->--}}
{{--                                            </div>--}}
{{--                                            <!--end::Form-->--}}
{{--                                        </div>--}}
                                        <!--end::Menu 1-->
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Content-->
                                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                                            <!--begin::Form-->
                                            <form class="form" id="fileUploadForm" enctype="multipart/form-data" method="post" action="{{route('video.store')}}">
                                                @csrf
                                                <!--begin::Modal - Select Users-->
                                                    <div class="modal fade" id="kt_progress_modal" tabindex="-1" aria-hidden="true">
                                                        <!--begin::Modal dialog-->
                                                        <div class="modal-dialog mw-700px">
                                                            <!--begin::Modal content-->
                                                            <div class="modal-content">
                                                                <!--begin::Modal header-->
                                                                <div class="modal-header pb-0 border-0 d-flex justify-content-end">
                                                                    <!--begin::Close-->
                                                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                        <span class="svg-icon svg-icon-1">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Close-->
                                                                </div>
                                                                <!--end::Modal header-->
                                                                <!--begin::Modal body-->
                                                                <div class="modal-body scroll-y mx-5 mx-xl-10 pt-0 pb-15">
                                                                    <!--begin::Users-->
                                                                    <div class="mh-475px scroll-y me-n7 pe-7">
                                                                        <!--begin::User-->
                                                                        <div class="border border-hover-primary p-7 rounded mb-7">
                                                                            <!--begin::Wrapper-->
                                                                            <div class="p-0">
                                                                                <!--begin::Footer-->
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="form-group">
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--begin::Separator-->
                                                                                    <div class="separator separator-dashed border-muted my-5"></div>
                                                                                    <!--end::Separator-->
                                                                                    <!--begin::Action-->
                                                                                    <div class="d-flex flex-stack">

                                                                                        <!--begin::Progress-->
                                                                                        <div class="d-flex flex-column mw-200px">
                                                                                            <div class="d-flex align-items-center mb-2">
                                                                                                <span id="kt_percent" class="text-gray-700 fs-6 fw-semibold me-2">100%</span>
                                                                                                <span id="kt_inprogress" class="text-muted fs-8">In progress </span>
                                                                                                <span id="kt_finished" class="text-muted fs-8">Finished </span>
                                                                                                <span id="kt_video_uplaod_loder">
                                                                                                    <img src="{{asset('assets/img/Eclipse-1s-200px.svg')}}" alt="">
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end::Progress-->
                                                                                    </div>
                                                                                    <!--end::Action-->
                                                                                </div>
                                                                                <!--end::Footer-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </div>
                                                                        <!--end::User-->
                                                                    </div>
                                                                    <!--end::Users-->
                                                                </div>
                                                                <!--end::Modal Body-->
                                                            </div>
                                                            <!--end::Modal content-->
                                                        </div>
                                                        <!--end::Modal dialog-->
                                                    </div>
                                                    <!--end::Modal - Select Users-->
                                                    <!--begin::Modal - Users Search-->


                                                <!--begin::Step 1-->
                                                <div class="current" data-kt-stepper-element="content">
                                                    <div class="w-100">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">video Name</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify unique video name"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" value="{{old('videoTitle')}}" class="form-control" id="validationCustom01" name="videoTitle" placeholder="video name" required>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->

                                                    </div>
                                                </div>
                                                <!--end::Step 1-->

                                                <!--begin::Step 2-->
                                                <div class="current" data-kt-stepper-element="content">
                                                    <div class="w-100">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">video </span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Add video file"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="file" accept="video/*" value="{{old('video_file')}}" class="form-control" id="" name="video_file" placeholder="video name" required>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->

                                                    </div>
                                                </div>
                                                <!--end::Step 2-->


                                                <!--begin::Step 3-->
                                                <div class="current" data-kt-stepper-element="content">
                                                    <div class="w-100">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Trailer </span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Add Trailer"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="file" accept="video/*" value="{{old('trailer')}}" class="form-control" id="" name="trailer_file" placeholder="Trailer" required>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->

                                                    </div>
                                                </div>
                                                <!--end::Step 3-->

                                                <!--begin::Step 3-->
                                                <div class="current" data-kt-stepper-element="content">
                                                    <div class="w-100">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Thumbnail </span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Add thumbnail"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="file"   value="{{old('thumbnail')}}" class="form-control" id="" name="thumbnail_file" placeholder="Thumbnail" required>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->

                                                    </div>
                                                </div>
                                                <!--end::Step 3-->


                                                <!--begin::Col-->
                                                <div class="fv-row mb-10">
                                                    <label class="required fs-6 fw-semibold mb-2">Tag</label>

                                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a popup group" name="tag_id" required>
                                                        <option value="">Select Tag...</option>
                                                        @foreach($tags as $tag)
                                                            <option value="{{$tag->id}}" @if(old('tagName')==$tag->id ) selected @endif>{{$tag->tagName}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Actions-->
                                                <div class="d-flex flex-end pt-10">
                                                    <!--begin::Wrapper-->
                                                    <div>
                                                        <button class="btn btn-lg btn-primary" type="submit">
                                                            <span class="indicator-label">Save
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                            </span>
                                                        </button>
                                                    </div>

                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--endW::Tables Widget 1-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <!--begin::Tables Widget 2-->
                            <div class="card card-xl-stretch mb-5 mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">videos List</span>
                                        <span class="text-muted mt-1 fw-semibold fs-7"></span>
                                    </h3>
                                    <div class="card-toolbar">
                                        <!--begin::Body-->
                                        <div class="card-body py-3">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table id="table_video" class="table  border rounded align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                    <tr class="fw-bold text-muted bg-light">
                                                        <th class="ps-4 min-w-325px rounded-start">video Title</th>
                                                        <th class="min-w-150px text-center">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                    @foreach($videos as $video)
                                                        <tr>
                                                            <td>
                                                                <div class="">
                                                                    <span class="text-dark fw-bold mb-1 mx-2">{{ $video->videoTitle }}</span>
                                                                </div>
                                                            </td>

                                                            <td class="text-center">
                                                                <a href="{{ route("video.edit", $video) }}" class="btn btn-icon btn-bg-light btn-active-color-warning  me-1" data-toggle="tooltip" data-placement="top" title="edit">
                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>

                                                                <a href="{{ route('video.delete',$video->id) }}" class="btn btn-icon btn-bg-light btn-active-color-danger " data-toggle="tooltip" data-placement="top" title="delete" onclick="return confirm('Do you really want to remove this line?')">

                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>

                                                                {{-- <form   class="btn btn-icon btn-bg-light btn-active-color-danger " method="POST" action="{{ route('domain.destroy', $domaine) }}" >--}}
                                                                {{-- <!-- CSRF token -->--}}
                                                                {{-- @csrf--}}
                                                                {{-- <!-- <input type="hidden" name="_method" value="DELETE"> -->--}}
                                                                {{-- @method("DELETE")--}}
                                                                {{-- <input  class="btn btn-icon btn-bg-light btn-active-color-danger fa-vine"  type="submit" value="">--}}
                                                                {{-- </form>--}}
                                                                <!-- Formulaire pour supprimer un Post : "posts.destroy" -->
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--begin::Body-->
                                    </div>
                                </div>
                                <!--end::Header-->
                            </div>
                            <!--end::Tables Widget 2-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Tables Widget 11-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    @include('layouts.back.footer')
    <!--end::Footer-->
</div>
<!--end:::Main-->


@endsection
@section('stylesheets')


<link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />



@endsection


@section('javascripts')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}


<script type="text/javascript"></script>
{{-- <script src="dist/clipboard.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>


<script type="text/javascript">
    let Clipboard = new ClipboardJS('.clipboard-btn');
    Clipboard.on('success', function(e) {

        toastr.success('<b> copied !</b>', {
            closeButton: true,
            positionClass: "toast-top-right",
            showDuration: 1000,
            hideDuration: 10000000,
        });

        e.clearSelection();
    });
</script>
@if(Session::has('error'))
<script type="text/javascript">
    toastr.error(`<b> {{session('error') }} !</b>`, {
        closeButton: true,
        positionClass: "toast-top-right",
        showDuration: 1000,
        hideDuration: 10000000,
    });
</script>
@endif
@if(Session::has('success'))

<script type="text/javascript">
    toastr.success(`<b> {{ session('success') }} !</b>`, {
        closeButton: true,
        positionClass: "toast-top-right",
        showDuration: 1000,
        hideDuration: 10000000,
    });
</script>
@endif
<script type="text/javascript">
    $("#table_video").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });



    // $('#table_video').dataTable({
    //     "pageLength": 1,
    //     "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, 'Toutes']],
    //     "language": {
    //         "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
    //     }
    // });
</script>


    @if(count($errors) > 0)
    <script type="text/javascript">
        $('#kt_modal_create_app').modal('show');
    </script>
    @endif

{{--    progress bar star--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<script type="text/javascript">
    $(function () {
        $(document).ready(function () {
            $('#fileUploadForm').ajaxForm({
                beforeSend: function () {
                    var percentage = '0';
                    $('#kt_progress_modal').modal('show');
                    $('#kt_percent').hide();
                    $('#kt_finished').hide();
                    $('#kt_inprogress').show();
                    $('#kt_video_uplaod_loder').show();
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    var percentage = percentComplete;
                    $('.progress .progress-bar').css("width", percentage+'%', function() {
                        return $(this).attr("aria-valuenow", percentage) + "%";
                    })
                },
                complete: function (xhr) {
                    $('#kt_percent').show();
                    $('#kt_finished').show();
                    $('#kt_inprogress').hide();
                    $('#kt_video_uplaod_loder').hide();
                    console.log('File has uploaded');
                }
            });
        });
    });
</script>
{{--    progress bar end --}}

@endsection
