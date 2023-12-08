<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Connect</title>
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Poppins', sans-serif;
 }
  /* CSS styles for the alert container */
.alert-container {
    margin: 10px 0;
}

/* CSS styles for the alert messages */
.alert {
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 5px;
    margin-bottom: 10px;
}

.alert.alert-success {
    background-color: #d4edda
}
.password-container {
    position: relative;
}

.toggle-password {
    position: absolute;
    right: 10px; /* Adjust the right value to position the icon as desired */
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}

</style>
<link rel="stylesheet" href="/css/login.css">
<body>
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
    <div class="vertical-line"></div>
    <section>

        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="{{ asset('img/image (5).png') }}" alt="" id="responsive-image"/></div>
                <div class="formBx">
 
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <h2>Sign In</h2>
                        <div class="password-container">
                        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" required />
                            <span class="toggle-password">
                                <i class="far fa-envelope" style="margin-left: -30px; cursor: pointer;"></i>
                            </span>
                        </div>
                        <div class="password-container">
                            <input type="password" name="password" autocomplete="current-password" required="" id="id_password" placeholder="Enter Password"/>
                            <span class="toggle-password">
                                <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                            </span>
                        </div>
                        <input type="submit" name="" value="Login" />
                        <p class="signup">
                            Don't have an account ?
                            <a href="{{ route('register') }}">Sign Up.</a>
                            or
                            <a href="/">BACK.</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->

    <!-- Bootstrap and other scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
