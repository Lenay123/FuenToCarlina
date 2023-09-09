<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Connect</title>
</head>
<link rel="stylesheet" href="/css/login.css">
<body>

  <div class="vertical-line"></div>
    <section>
        <div class="container">
          <div class="user signinBx">
            <div class="imgBx"><img src="/img/logo.png" alt="" /></div>
           
            <div class="formBx">
              <form action="" onsubmit="return false;">
                <h2>Sign In</h2>
                <input type="text" name="" placeholder="Email" />
                <input type="password" name="" placeholder="Password" />
                <input type="submit" name="" value="Login" />
                <p class="signup">
                  Don't have an account ?
                  <a href="#" onclick="toggleForm();">Sign Up.</a>
                </p>
              </form>
            </div>
          </div>
          <div class="user signupBx">
            <div class="formBx">
              <form action="" onsubmit="return false;">
                <h2>Register Here</h2>
                <div class="name-container">
                  <input type="text" name="first_name" placeholder="First Name" />
                  <input type="text" name="middle_name" placeholder="Middle Name" />
                  <input type="text" name="last_name" placeholder="Last Name" />
                </div>
                <input type="email" name="" placeholder="Email Address" />
                <input type="password" name="" placeholder="Create Password" />
                <input type="password" name="" placeholder="Confirm Password" />
                <div class="contact-container">
                  <input type="text" name="contact" placeholder="Contact number" />
                </div>
                <div class="birthday-container">
                  <label>Birthday</label>
                  <div class="birthday-dropdowns">
                    <select name="birth_year">
                      <!-- Add options for years -->
                      <option value="2023">2023</option>
                      <option value="2022">2022</option>
                      <option value="2021">2021</option>
                      
                      <!-- Add more options as needed -->
                    </select>
                    <select name="birth_month">
                      <!-- Add options for months -->
                      <option value="01">January</option>
                      <option value="02">February</option>
                      <option value="03">Marh</option>
                      <!-- Add more options as needed -->
                    </select>
                    <select name="birth_day">
                      <!-- Add options for days -->
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <!-- Add more options as needed -->
                    </select>
                  </div>
                </div>
                <div class="gender-container">
                  <label>Gender</label>
                  <div class="gender-options">
                    <label>
                      <input type="checkbox" name="gender" value="male" /> Male
                    </label>
                    <label>
                      <input type="checkbox" name="gender" value="female" /> Female
                    </label>
                  </div>
                </div>

                <input type="submit" name="" value="Sign Up" />
                <p class="signup">
                  Already have an account ?
                  <a href="#" onclick="toggleForm();">Sign in.</a>
                </p>
              </form>
            </div>
            
            <div class="imgBx"><img src="/img/logo.png" alt="" /></div>
          </div>
        </div>
        
      </section>
      <script src="/js/login.js"></script>
    </body>
</html>