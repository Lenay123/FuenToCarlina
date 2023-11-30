<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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

        <form method="POST" action="{{route('register.post')}}" method="POST" enctype="multipart/form-data" >
            @csrf
             <div class="form-group">
                <label for="Photo">Profile Picture:</label>
                <input type="file" class="form-control" name="image" required>       
                 </div> 

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
                <input type="email" class="form-control" name="email" id="emailInput" required>
                <div id="emailFeedback" style="color: red;"></div>
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
                <div class="text-danger birthday-feedback"></div>
            </div>

            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="number" class="form-control" name="contact_number" required>
                <div class="text-danger contact-number-feedback"></div>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
 var existingEmails = {!! json_encode($existingEmails) !!}; // Replace with actual existing emails from the server

document.getElementById('emailInput').addEventListener('blur', function () {
    var emailInput = this.value;

    var emailFeedback = document.getElementById('emailFeedback');
    emailFeedback.innerHTML = ''; // Clear previous feedback

    // Check if the email is already taken using JavaScript
    if (existingEmails.includes(emailInput)) {
        emailFeedback.innerHTML = 'Email already taken';
    }
});



    </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Add an input event listener to perform real-time validation for the contact number
        document.querySelector('input[name="contact_number"]').addEventListener('input', function () {
            validateContactNumber(this);
        });

        // Add an input event listener to perform real-time validation for the birthday
        document.querySelector('input[name="birthday"]').addEventListener('input', function () {
            validateBirthday(this);
        });

        // Function to validate the contact number
        function validateContactNumber(inputElement) {
            var contactNumber = inputElement.value;

            // Use the provided function to validate the phone number
            var isValidFormat = validatePhoneNumber(contactNumber);

            // Update the validation message
            var feedbackElement = inputElement.nextElementSibling;
            feedbackElement.innerHTML = isValidFormat ? '' : 'Invalid phone number format';
            feedbackElement.style.color = 'red';
        }

        // Function to validate the birthday
        function validateBirthday(inputElement) {
            var birthdayValue = inputElement.value;
            var isValidDate = isValidBirthday(birthdayValue);

            // Update the validation message
            var feedbackElement = inputElement.nextElementSibling;
            feedbackElement.innerHTML = isValidDate ? '' : 'Invalid birthday';
            feedbackElement.style.color = 'red';
        }

        // Function to check if the entered birthday is valid
        function isValidBirthday(birthday) {
            var enteredDate = new Date(birthday);
            var currentDate = new Date();
            var minimumValidDate = new Date(currentDate);
            minimumValidDate.setFullYear(currentDate.getFullYear() - 15); // Minimum valid age is 15

            return !isNaN(enteredDate.getTime()) && enteredDate <= minimumValidDate;
        }

        // Function to validate the phone number format
        function validatePhoneNumber(input_str) {
            var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
            return re.test(input_str);
        }
    });
</script>




</body>
</html>
