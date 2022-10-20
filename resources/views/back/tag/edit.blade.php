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
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">TAG</h1>
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
                            <li class="breadcrumb-item text-muted">Tag</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                        <!--message error begin-->
                        {{-- @if ($errors->any())--}}
                        {{-- <div class="alert alert-danger">--}}
                        {{-- <ul>--}}
                        {{-- @foreach ($errors->all() as $error)--}}
                        {{-- <li>{{ $error }}</li>--}}
                        {{-- @endforeach--}}
                        {{-- </ul>--}}
                        {{-- </div>--}}
                        {{-- @endif--}}
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

                                {{--                            <a href="{{route("tag.create")}}" class="btn btn-sm btn-light-primary" data-toggle="tooltip" data-placement="top" title="Add new tag">--}}
                                {{--                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->--}}
                                {{--                                <span class="svg-icon svg-icon-2">--}}
                                {{--                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                {{--                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />--}}
                                {{--                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />--}}
                                {{--                                    </svg>--}}
                                {{--                                </span>--}}
                                {{--                                <!--end::Svg Icon-->--}}
                                {{--                                New tag--}}
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
                                            <span class="card-label fw-bold fs-3 mb-1">Edit Tags</span>
                                            <span class="text-muted fw-semibold fs-7"></span>
                                        </h3>
                                        <div class="card-toolbar">
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
                                                <form class="form" id="" method="POST" action="{{route('tag.update',$tag)}}">
                                                    @csrf
                                                    <!--begin::Step 1-->
                                                    <div class="current" data-kt-stepper-element="content">
                                                        <div class="w-100">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                    <span class="required">Tag Name</span>
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify unique tag name"></i>
                                                                </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" value="{{ $tag->tagName }}" class="form-control" id="validationCustom01" name="tagName" placeholder="Tag name" required>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                        </div>
                                                    </div>
                                                    <!--end::Step 1-->

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
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
        $("#table_tag").DataTable({
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



        // $('#table_tag').dataTable({
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

@endsection
