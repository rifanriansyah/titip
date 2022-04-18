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
                <img class="logo-compact" src="{{ asset('style/images/pos-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('style/images/pos-text.png') }}" alt="">
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Wizard</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Booking Locker</h4>
                                <p id="demo"></p>
                            </div>
                            <div class="card-body">
                                @include('pos/posit/locker_table')

                                <div class="col-lg-6 mb-2">
                                    <form method="POST" action="{{ url('pos/pesan') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="text-label">Locker:</label>
                                            <input type="text" id="locker" name="loker"
                                                class="form-control border border-primary text-black readonly"
                                                placeholder="Locker" required>
                                            <input type="text" id="id_loker" name="id_loker" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-label">Price:</label>
                                            <input type="text" id="harga" name="harga"
                                                class="form-control border border-primary text-black readonly"
                                                placeholder="Price" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Reserve</button>
                                        </div>
                                    </form>
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

    <script>
        $(".readonly").keydown(function(e) {
            e.preventDefault();
        });

        function addtext(isi, harga, id) {
            $("#locker").val(isi);
            $("#harga").val(harga);
            $("#id_loker").val(id);
        }
    </script>

</body>

</html>
