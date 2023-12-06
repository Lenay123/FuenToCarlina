<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Email Verification with OTP</title>
</head>
<body>
    <h1>Thanks for registering with us!</h1>
    <p>Hello {{ $name }},</p>
    
    <p>Thank you for registering with our platform. To complete the registration process, please use the following OTP (One-Time Password):</p>
    
    <p>Your OTP: <b>{{ $otp }}</b></p>
    
    <p>Please enter this OTP on the registration page to verify your email address.</p>
    
    <p>If you didn't register on our platform, please ignore this email.</p>
    
    <p>Best regards,</p>
    <p>Barangay Connect</p>
</body>
</html>

