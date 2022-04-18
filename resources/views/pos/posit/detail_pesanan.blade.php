<!DOCTYPE html>
<html lang="en">
<?php
$data = session()->get('dataUser');
?>
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
                {{-- <img class="brand-title" src="{{ asset('style/images/logo-text.png') }}" alt=""> --}}
                <img class="logo-abbr" src="{{ asset('style/images/logo-POSit!.png') }}" alt="">
                {{-- <img class="logo-compact" src="{{ asset('style/images/logo-text.png') }}" alt=""> --}}
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
        @include('sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">

                </div>
                <div class="row">
                    @if ($pesanan[0]->status == 'Belum_bayar')
                        <div class="col-xl-6">
                            <div class="card text-white bg-danger">
                                <div class="card-header">
                                    <h5 class="card-title text-white">Detail Pemesanan</h5>
                                </div>
                                <div class="card-body mb-0">
                                    <p class="text-uppercase">Kode Pesanan : {{ $pesanan[0]->kode_pesan }}</p>
                                    <p class="text-uppercase">Kode Locker : {{ $pesanan[0]->kode_loker }}</p>
                                    <p class="text-uppercase">Waktu Pemesanan : {{ $pesanan[0]->waktu_pemesanan }}</p>
                                    <p class="text-uppercase">Total : {{ $pesanan[0]->total_harga }}</p>
                                    <p class="text-uppercase">Status Pemesanan : {{ $pesanan[0]->status }}</p>
                                    @if ($pesanan[0]->EXPIRED == 0)
                                        <a href="{{ url('pos/detail_pesanan/' . $pesanan[0]->id_user . '/' . $pesanan[0]->kode_pesan . '/' . $pesanan[0]->waktu_pemesanan) }}"
                                            class="light btn btn-danger btn-card">Confirm
                                            Payment</a>
                                    @endif
                                </div>
                                <div class="card-footer bg-transparent border-0 text-white">
                                    Bayar Sebelum Waktu Habis <p id="demo"
                                        data-waktu="{{ $pesanan[0]->waktu_pemesanan }}"
                                        data-uniq="{{ $pesanan[0]->kode_pesan }}"
                                        data-exp="{{ $pesanan[0]->EXPIRED }}"
                                        data-kode="{{ $pesanan[0]->kode_loker }}"></p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-xl-6">
                            <div class="card text-white bg-success">
                                <div class="card-header">
                                    <h5 class="card-title text-white">Detail Pemesanan</h5>
                                </div>
                                <div class="card-body mb-0">
                                    <p class="text-uppercase">Kode Pesanan : {{ $pesanan[0]->kode_pesan }}</p>
                                    <p class="text-uppercase">Kode Locker : {{ $pesanan[0]->kode_loker }}</p>
                                    <p class="text-uppercase">Waktu Pemesanan : {{ $pesanan[0]->waktu_pemesanan }}
                                    </p>
                                    <p class="text-uppercase">Total : {{ $pesanan[0]->total_harga }}</p>
                                    <p class="text-uppercase">Status Pemesanan : {{ $pesanan[0]->status }}</p>

                                    <a type="button" class="btn btn-success light btn-card" data-toggle="modal"
                                        data-target="#exampleModalCenter">Show QR Code</a>
                                </div>

                            </div>
                        </div>
                    @endif

                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered text-center" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">QR CODE</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ QrCode::size(240)->generate($pesanan[0]) }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
        var ele = document.getElementById('demo')
        var waktu = ele.getAttribute("data-waktu");
        var minutesToAdd = 5;
        var currentDate = new Date(waktu);
        var futureDate = new Date(currentDate.getTime() + minutesToAdd * 60000);
        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = futureDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
                if (ele.getAttribute("data-exp") == "0") {
                    var exp = "1";
                    var kode_pesan = ele.getAttribute("data-uniq");
                    var waktu_pemesanan = ele.getAttribute("data-waktu");
                    var kode = ele.getAttribute("data-kode");
                    window.location.replace(kode_pesan + '/1/' + waktu_pemesanan + '/' + kode);
                }

            }
        }, 1000);
    </script>
    @isset($status)
        <script>
            swal("Berhasil", "{{ $status }}", "success");
        </script>
    @endisset


</body>

</html>
