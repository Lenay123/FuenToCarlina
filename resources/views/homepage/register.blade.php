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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Add Bootstrap CSS and JS (make sure JS comes after jQuery) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .registration-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 3px 30px rgba(19, 3, 3, 0.1);
        }

        .registration-container h2 {
        text-align: center;
        margin-bottom: 20px;
        background-color: #a7556c; /* Add your desired background color here */
        color: #fff; /* Set the text color to contrast with the background */
        padding: 10px; /* Add padding for better visual appearance */
        border-radius: 5px; /* Optionally, add border-radius for rounded corners */
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
        @if(session('script'))
        {!! session('script') !!}
    @endif
    
    @if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif
    
        <form method="POST" action="{{route('register.post')}}" method="POST" enctype="multipart/form-data" >
            @csrf
             <div class="form-group">
                <label for="Photo">Profile Picture:<span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="image" required>       
                 </div> 

            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">First Name:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="last_name" id="last_name"value="{{ old('last_name') }}" required>
                    </div>
                </div>
            </div>
          
            <div class="form-group">
                <label for="middle_name">Middle Name:<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:<span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="emailInput" value="{{ old('email') }}" required>
                <div id="emailFeedback" style="color: red;"></div>
                
            </div>

            <div class="form-group">
                <label for="address">Address:<span class="text-danger">*</span></label>
                <select class="form-control" name="address" required>
                    <option value="Proper Nabunturan Barili Cebu" {{ old('address') == 'Proper Nabunturan Barili Cebu' ? 'selected' : '' }}>Proper Nabunturan Barili Cebu</option>
                    <option value="Sitio San Roque Nabunturan Barili Cebu" {{ old('address') == 'Sitio San Roque Nabunturan Barili Cebu' ? 'selected' : '' }}>Sitio San Roque Nabunturan Barili Cebu</option>
                    <option value="Sitio Cabinay Nabunturan Barili Cebu" {{ old('address') == 'Sitio Cabinay Nabunturan Barili Cebu' ? 'selected' : '' }}>Sitio Cabinay Nabunturan Barili Cebu</option>
                </select>
            </div>

            <div class="form-group">
                <label for="birthday">Birthday:<span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="date" class="form-control" name="birthday" required value="{{ old('birthday') }}">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="fas fa-calendar"></i>
                    </span>
                  </div>
                </div>
                <div class="text-danger birthday-feedback"></div>
              </div>
              
              
            <div class="form-group">
                <label for="contact_number">Contact Number:<span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="contact_number" required value="{{ old('contact_number') }}">
                <div class="text-danger contact-number-feedback"></div>
            </div>

            <div class="form-group">
                <label for="gender">Gender:<span class="text-danger">*</span></label>
                <select class="form-control" name="gender" required>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                 <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>

                </select>
            </div>

            <div class="form-group position-relative">
                <label for="password">Password:<span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="password" class="form-control" name="password" id="id_password" required>
                  <span class="toggle-password">
                    <i class="far fa-eye" id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                  </span>
                </div>
              </div>
              
              <div class="form-group position-relative">
                <label for="password_confirmation">Confirm Password:<span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="password" class="form-control" name="password_confirmation" id="id_password_confirmation" required>
                  <span class="toggle-password">
                    <i class="far fa-eye" id="togglePasswordConfirmation" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                  </span>
                </div>
              </div>

            <button type="submit" class="btn btn-primary btn-register">Register</button>
        </form>

        <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ route('login') }}" class="btn btn-link btn-login">Login</a></p>
        </div>
    </div>
    <!-- Your existing form and HTML content -->

<!-- Modal for displaying validation errors -->
<div class="modal fade" id="validationErrorModal" tabindex="-1" role="dialog" aria-labelledby="validationErrorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="validationErrorModalLabel">Validation Errors</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Display validation errors here -->
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        // Trigger the validation error modal if there are validation errors
        @if ($errors->any())
            $('#validationErrorModal').modal('show');
        @endif

        // Trigger the success modal if registration is successful
        @if (session()->has('success'))
            $('#successModal').modal('show');
        @endif
    });
</script>


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
            var feedbackElement = inputElement.closest('.form-group').querySelector('.birthday-feedback');
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
  
    const togglePasswordConfirmation = document.querySelector('#togglePasswordConfirmation');
    const passwordConfirmation = document.querySelector('#id_password_confirmation');
  
    togglePasswordConfirmation.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = passwordConfirmation.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordConfirmation.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('fa-eye-slash');
    });
  </script>
  



</body>
</html>