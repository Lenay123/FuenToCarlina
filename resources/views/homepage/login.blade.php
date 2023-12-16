<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/image (5).png') }}" />
    <title>Barangay Connect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background: #ececec;
    }

    /*------------ Login container ------------*/

    .box-area {
        width: 930px;
    }

    /*------------ Right box ------------*/

    .right-box {
        padding: 40px 30px 40px 40px;
    }

    /*------------ Custom Placeholder ------------*/

    ::placeholder {
        font-size: 16px;
    }

    .rounded-4 {
        border-radius: 20px;
    }

    .rounded-5 {
        border-radius: 30px;
    }

    /*------------ For small screens------------*/

    @media only screen and (max-width: 768px) {
        .box-area {
            margin: 0 10px;
        }

        .left-box {
            height: 100px;
            overflow: hidden;
        }

        .right-box {
            padding: 20px;
        }
    }
</style>
<body>
    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- Left Box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #C70039;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('img/image (5).png') }}" class="img-fluid" style="width: 250px;">
                </div>
            </div>

            <!-- Right Box -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <!-- Your Form Content -->
                    @if(session('success'))
                    <script>
                        alert("{{ session('success') }}");
                    </script>
                    @endif
                    @if(session('error'))
                    <script>
                        alert("{{ session('error') }}");
                    </script>
                    @endif
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="header-text mb-4">
                            <h2>Hello, Again</h2>
                            <p>We are happy to have you back.</p>
                        </div>

                        <div class="input-group mb-3">
                            <input class="form-control form-control-lg bg-light fs-6" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required />
                            <span class="input-group-text"><i class="far fa-envelope"></i></span>
                        </div>

                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" autocomplete="current-password" required="" id="id_password" placeholder="Enter Password" />
                            <span class="input-group-text"><i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i></span>
                        </div>

                        <div class="input-group mb-5 d-flex justify-content-between">
                            <!-- Remember Me and Forgot Password -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                        </form>
                        <div class="forgot">
                            <small><a href="#" data-toggle="modal" data-target="#forgotPasswordModal">Forgot Password?</a></small>
                        </div>
                    
                            {{-- <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div> <br> <br> --}}
                            <div style="margin-top:10px" class="input-group mb-3"> 
                                <button style="background-color: #C70039;" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                            </div>
                            <div class="row">
                                <small>Don't have account? <a href="{{ route('register') }}">Sign Up</a> or 
                                    <a href="/">BACK.</a></small>
                            </div>
                        </div>
                       
                   
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap and other scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if(session('alert'))
                <script>
                    alert("{{ session('alert') }}");
                </script>
            @endif
                <!-- Forgot Password Modal Body -->
                <div class="modal-body">
                    <form action="{{ route('forget.password.post') }}" method="POST">
                        @csrf
    
                        <!-- Email Input -->
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </form>
    
                    <!-- Success Message -->
                    <div id="forgotPasswordSuccess" style="display: none;" class="alert alert-success mt-3">
                        Password reset email sent successfully. Please check your email.
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
