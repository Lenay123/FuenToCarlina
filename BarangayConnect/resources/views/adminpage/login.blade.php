<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Connect</title>
</head>
<link rel="stylesheet" href="/css/login.css">
<link rel="icon" href="{{ asset('img/image (5).png') }}">
<body>

  <div class="vertical-line"></div>
    <section>
        <div class="container">

         
          <div class="user signinBx">
            <div class="imgBx"><img src="/img/logo.png" alt="" /></div>
           
            <div class="formBx">
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
              <form action="{{route('login.post')}}" method="POST">
                @csrf
                <h2>Sign In</h2>
                <input type="text" name="email" placeholder="Email"  required/>
                <input type="password" name="password" placeholder="Password" required />
                <input type="submit" name="" value="Login" />
                <p class="signup">
                  Don't want to continue? Click 
                  <a href="/">BACK.</a>
                </p>
              </form>
            </div>
          </div>
        </div>
        
      </section>
      <script src="/js/login.js"></script>
    </body>
</html>