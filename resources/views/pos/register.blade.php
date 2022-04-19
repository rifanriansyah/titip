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
                                        <a href="index.html"><img src="images/logo-full-POSit!.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
                                    <form method="POST" enctype="multipart/form-data" action="{{ url('/regis') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Phone Number</strong></label>
                                            <input type="text" pattern="[0-9]+" class="form-control" name="nohp"
                                                placeholder="Ex:081212345678" minlength="10" maxlength="13" required>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com">
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div> -->
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign me
                                                up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Already have an account? <a class="text-white"
                                                href="{{ url('/login') }}">Sign in</a></p>
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
