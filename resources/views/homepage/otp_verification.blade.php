<!DOCTYPE html>
<html>
  <head>
    <title>Barangay Connect</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="{{ asset('img/image (5).png') }}" />

  </head>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700');
*{
  border-radius: 0px !important;
  font-family: "Poppins", sans-serif;
}

body{
  background-color: #e1e1e1 !important;
  display: flex;
  align-items: center;
  height: 100vh;
}

/* .card{
  border: none !important;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
} */

.card-header{
  color: white !important;
  background: #3366FF !important;
  text-align: center;
}

.card-header > img{
  width: 180px;
}

.input-container input{
  width: 40px;
  height: 40px;
}

.form-control:focus{
  box-shadow: none !important;
  border: 1px solid #3366FF !important;
}

.verify-btn{
  border-radius: 20px !important;
  border: 0px !important;
  width: 140px;
  background-color: #3366FF !important;
}

  </style>
  <body>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="card text-center">
        <div class="card-header p-5">
          <img src="https://www.freeiconspng.com/thumbs/mobile-icon-png/mobile-icon-png-cool--mobitrends-1.png"> <br>
          <h5 class="mb-2">OTP VERIFICATION</h5>
          <div>
            <small>Code has been sent to {{ $user->email }} </small>
          </div>
        </div>
        <div class="card-body p-5 text-center">
          @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
  
      @if(session('error'))
          <div class="alert alert-danger">
              {{ session('error') }}
          </div>
      @endif
        <form method="post" action="{{ route('verify.otp', ['userId' => $user->id]) }}">
            @csrf
        <div class="input-container d-flex flex-row justify-content-center mt-2">         
            <input type="text" class="m-1 text-center form-control rounded" name="otp[]" maxlength="1" required />
            <input type="text" class="m-1 text-center form-control rounded" name="otp[]" maxlength="1" disabled />
            <input type="text" class="m-1 text-center form-control rounded" name="otp[]" maxlength="1" disabled />
            <input type="text" class="m-1 text-center form-control rounded" name="otp[]" maxlength="1" disabled />
            <input type="text" class="m-1 text-center form-control rounded" name="otp[]" maxlength="1" disabled />
            <input type="text" class="m-1 text-center form-control rounded" name="otp[]" maxlength="1" disabled />
        </div>
     
        <div> 
          <small>
            Didn't receive code? 
            <a href="{{ route('resend.code', ['userId' => $user->id]) }}">Resend</a>
         
          </small>
        </div>
        
        <div class="mt-3 mb-5 d-flex justify-content-center">
          <button type="submit" class="btn btn-success px-4 verify-btn">
              Verify
          </button>
          <a style="color: #e1e1e1" href="{{ route('register') }}" class="btn btn-success px-4 verify-btn ml-2">
              Cancel
          </a>
      </div>
      
      </form>

       
      </div>
    </div>
  </div>

        <!-- Bootstrap JS and Popper.js scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            const inputs = document.querySelectorAll(".input-container > input");
            const button = document.querySelector(".btn");
        
            window.addEventListener("load", () => inputs[0].focus());
            button.setAttribute("disabled", "disabled");
        
            inputs[0].addEventListener("paste", function (event) {
                event.preventDefault();
        
                const pastedValue = (event.clipboardData || window.clipboardData).getData("text");
                const otpLength = inputs.length;
        
                for (let i = 0; i < otpLength; i++) {
                    if (i < pastedValue.length) {
                        inputs[i].value = pastedValue[i];
                        inputs[i].removeAttribute("disabled");
                        inputs[i].focus();
                    } else {
                        inputs[i].value = ""; // Clear any remaining inputs
                        inputs[i].focus();
                    }
                }
            });
        
            inputs.forEach((input, index1) => {
                input.addEventListener("keyup", (e) => {
                    const currentInput = input;
                    const nextInput = input.nextElementSibling;
                    const prevInput = input.previousElementSibling;
        
                    if (currentInput.value.length > 1) {
                        currentInput.value = "";
                        return;
                    }
        
                    if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== "") {
                        nextInput.removeAttribute("disabled");
                        nextInput.focus();
                    }
        
                    if (e.key === "Backspace") {
                        inputs.forEach((input, index2) => {
                            if (index1 <= index2 && prevInput) {
                                input.setAttribute("disabled", true);
                                input.value = "";
                                prevInput.focus();
                            }
                        });
                    }
        
                    button.classList.remove("active");
                    button.setAttribute("disabled", "disabled");
        
                    const inputsNo = inputs.length;
                    if (!inputs[inputsNo - 1].disabled && inputs[inputsNo - 1].value !== "") {
                        button.classList.add("active");
                        button.removeAttribute("disabled");
                    }
                });
            });
        
        // Add the following code to show the modal when an error occurs
        const errorMessage = '{{ $errors->first('otp') }}';

        if (errorMessage) {
            $(document).ready(function () {
                $('#errorModal').modal('show');
            });
        }
        </script>
            <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $errors->first('otp') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

  </body>
</html>
