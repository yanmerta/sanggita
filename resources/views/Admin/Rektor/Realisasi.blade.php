@extends('layouts.main')
@section('content')

<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header align-items-stretch">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Aside mobile toggle-->
            <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
            </div>
            <!--end::Aside mobile toggle-->
            <!--begin::Mobile logo-->
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <a href="../../demo1/dist/index.html" class="d-lg-none">
                    <img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-30px" />
                </a>
            </div>
            <!--end::Mobile logo-->
            <!--begin::Wrapper-->
            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                <!--begin::Navbar-->
                <!--end::Navbar-->
                @include('includes.navbar')
                <!--begin::Toolbar wrapper-->
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->
    <!--begin::Tables Widget 11-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Layanan Realisasi Anggaran - Priode Tahun 2024</span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bolder text-muted bg-light">
                            <th>No</th>
                            <th>Judul Kegiatan</th>
                            <th>Total Anggaran</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Kriteria</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Pengadaan ATK</td>
                            <td>Rp. 15.000.000</td>
                            <td>31/1/2024</td>
                            <td>Urgent</td>
                            <td>Diusulkan</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-success btn-sm">
                                    <i class="bi bi-eye bi-1x"></i>
                                </a>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil bi-1x"></i>
                                </a>
                            </td>	
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Body-->
</div>
<!--end::Tables Widget 11-->
@endsection
