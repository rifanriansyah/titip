<!DOCTYPE html>
<html lang="en">
<?php $data = session('dataUser'); ?>

@include('head')

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                {{-- <img class="logo-compact" src="{{ asset('style/images/pos-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('style/images/pos-text.png') }}" alt=""> --}}
                <img class="logo-abbr" src="{{ asset('style/images/logo-POSit!.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span
                        class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <!-- ! delete -->
        <!--**********************************
            Chat box End
        ***********************************-->




        <!--**********************************
            Header start
        ***********************************-->
        @include('header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('../sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">My Account</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">History</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5 order-md-2 mb-4">
                                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-muted">History Pemesanan</span>
                                        </h4>

                                        <ul class="list-group mb-3">
                                            @foreach ($alldata as $item)
                                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                    <a
                                                        href="{{ url('pos/detail_pesanan/' . $item->id_user . '/' . $item->kode_pesan) }}">
                                                        <div>
                                                            <h6 class="my-0">{{ $item->kode_pesan }}</h6>
                                                            @if ($item->status == 'Sudah_bayar')
                                                                <small class="text-light badge badge-success">
                                                                    {{ $item->status }}
                                                                </small>
                                                            @else
                                                                <small class="text-light badge badge-danger">
                                                                    {{ $item->status }}
                                                                </small>
                                                            @endif
                                                        </div>
                                                    </a>
                                                    <span class="text-muted">{{ $item->waktu_pemesanan }}</span>
                                                </li>
                                            @endforeach
                                        </ul>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a target="_blank">TEETIP</a>
                    2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('footer')
    @isset($status)
        <script>
            swal("Berhasil", "{{ $status }}", "success");
        </script>
    @endisset

</body>

</html>
