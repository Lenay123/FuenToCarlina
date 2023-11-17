<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .registration-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .registration-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .registration-container form label {
            font-weight: bold;
        }

        .registration-container .form-group {
            margin-bottom: 15px;
        }

        .registration-container .form-check-label {
            padding-left: 0;
        }

        .registration-container .btn-register {
            background-color: #C70039;
            color: #fff;
            border: none;
        }

        .registration-container .btn-login {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5 registration-container">
        <h2>Registration Form</h2>
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>

        <form method="POST" action="{{route('register.post')}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="middle_name">Middle Name:</label>
                <input type="text" class="form-control" name="middle_name">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <select class="form-control" name="address" required>
                    <option value="Proper Nabunturan Barili Cebu">Proper Nabunturan Barili Cebu</option>
                    <option value="Sitio San Roque Nabunturan Barili Cebu">Sitio San Roque Nabunturan Barili Cebu</option>
                    <option value="Sitio Cabinay Nabunturan Barili Cebu">Sitio Cabinay Nabunturan Barili Cebu</option>
                </select>
            </div>

            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" class="form-control" name="birthday" required>
            </div>

            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" class="form-control" name="contact_number" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" class="form-control" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn btn-primary btn-register">Register</button>
        </form>

        <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ route('login') }}" class="btn btn-link btn-login">Login</a></p>
        </div>
    </div>
</body>
</html>
