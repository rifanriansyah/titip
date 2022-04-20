<!DOCTYPE html>
<html lang="en" class="h-100">

@include('head')

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="{{ url('/beranda') }}"><img
                                                src="{{ asset('style/images/logo-full-POSit!.png') }}" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Signin</h4>
                                    <form method="POST" enctype="multipart/form-data"
                                        action="{{ url('/proseslogin') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>No Hp</strong></label>
                                            <input type="text" class="form-control" name="nohp"
                                                placeholder="Ex:081212345678" pattern="[0-9]+" minlength="10"
                                                maxlength="13" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>PIN</strong></label>
                                            <input type="password" class="form-control" pattern="[0-9]*"
                                                inputmode="numeric" minlength="6" maxlength="6" name="pin"
                                                placeholder="******" required>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1 text-white">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="basic_checkbox_1">
                                                    <label class="custom-control-label" for="basic_checkbox_1">Remember
                                                        my preference</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a class="text-white" href="page-forgot-password.html">Forgot
                                                    Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me
                                                In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white"
                                                href="{{ url('/register') }}">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('footer')
    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif
</body>

</html>
