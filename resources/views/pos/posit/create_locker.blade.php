<!DOCTYPE html>
<html lang="en">
<?php $data = session('dataUser'); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('style/images/favicon.png') }}">
    <!-- Form step -->
    <link href="{{ asset('style/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('style/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/style.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

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
                                <h4 class="card-title">Form step</h4>
                            </div>
                            <div class="card-body">
                                <div id="smartwizard" class="form-wizard order-create">
                                    <ul class="nav nav-wizard">
                                        <li>
                                            <a class="nav-link" href="#wizard_Service">
                                                <span>1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#wizard_Time">
                                                <span>2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#wizard_Details">
                                                <span>3</span>
                                            </a>
                                        </li>

                                    </ul>
                                    <div class="tab-content">
                                        <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                            <div class="row">

                                                @include('pos/posit/locker_table')

                                                <div class="col-lg-6 mb-2">

                                                    <div class="form-group">
                                                        <label class="text-label">Locker:</label>
                                                        <input type="text" id="locker" name="locker"
                                                            class="form-control border border-primary"
                                                            placeholder="Locker" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Company Name*</label>
                                                        <input type="text" name="firstName" class="form-control"
                                                            placeholder="Cellophane Square" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Company Email Address*</label>
                                                        <input type="email" class="form-control" id="emial1"
                                                            placeholder="example@example.com.com" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Company Phone Number*</label>
                                                        <input type="text" name="phoneNumber" class="form-control"
                                                            placeholder="(+1)408-657-9007" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Your position in
                                                            Company*</label>
                                                        <input type="text" name="place" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="wizard_Details" class="tab-pane" role="tabpanel">

                                            <div class="col-xl-4 col-lg-6 col-sm-6 d-flex justify-content-center">
                                                <div class="card" style="width: 18rem;">
                                                    {{ QrCode::size(280)->generate(json_encode($data)) }}
                                                    {{-- <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->generate()) }}"
                                                        class="card-img-top" alt="..."> --}}
                                                    <div class="card-body">
                                                        <h5 class="card-title">Locker : B5</h5>
                                                        <p class="card-text">Scan this QR Code to use your
                                                            locker, have a nice day :)</p>
                                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/"
                        target="_blank">DexignZone</a> 2020</p>
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

    <!-- Required vendors -->
    <script src="{{ asset('style/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('style/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('style/js/custom.min.js') }}"></script>
    <script src="{{ asset('style/js/deznav-init.js') }}"></script>




    <script src="{{ asset('style/vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('style/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('style/js/plugins-init/jquery.validate-init.js') }}"></script>



    <!-- Form Steps -->
    <script src="{{ asset('style/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}">
    </script>

    <script>
        $(document).ready(function() {
            // SmartWizard initialize
            $('#smartwizard').smartWizard();
            $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex,
                stepDirection) {
                console.log(nextStepIndex);
                if (nextStepIndex == 2) {
                    $(".sw-btn-next").hide();
                    $(".sw-btn-prev").hide();
                }
            });
        });


        function addtext(isi) {
            $("#locker").val(isi);
        }
    </script>

</body>

</html>
