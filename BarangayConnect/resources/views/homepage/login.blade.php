<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Connect</title>
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
</head>
<style>
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
</style>
<link rel="stylesheet" href="/css/login.css">
<body>
  <div class="mt-5">
    @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
</div>



  <div class="vertical-line"></div>
    <section>
        <div class="container">

         
          <div class="user signinBx">
            <div class="imgBx"><img src="{{ asset('img/image (5).png') }}" alt=""id="responsive-image"/></div>
           
            <div class="formBx">
              <form action="{{route('login.post')}}" method="POST">
                @csrf
                <h2>Sign In</h2>
                <input type="text" name="email" placeholder="Email"  required/>
                <input type="password" name="password" placeholder="Password" required />
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
      <script src="/js/login.js"></script>

      <script>
        $(document).ready(function() {
            $('.password-toggle').click(function() {
                var inputField = $(this).prev('input[type="password"]');
                var isPassword = inputField.attr('type') === 'password';

                if (isPassword) {
                    inputField.attr('type', 'text');
                    $(this).children('i').removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    inputField.attr('type', 'password');
                    $(this).children('i').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
        });
    </script>
    </body>
</html>