<!DOCTYPE html>
<html lang="en">


<head>
    <title>virtual hiring</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('img/via.jpeg')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/publics/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/publics/logins.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=jost:weight500&display=swap" rel="stylesheet">
   
    </script>


</head>

<body>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('img/tst.png') }}" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>


                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
    <div class="main">

        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup" id="signupForm">
            <form id="signup_form">
                <label for="chk" aria-hidden="true">Sign Up</label>
                <!--<input type="text" name="text" placeholder="User Name" required>-->
                <input type="email" id="email" name="email" placeholder="Email" required onblur="checkEmailFormat()">
                <input type="password" name="password" placeholder="password" 
                    required onblur="checkField(this,'password')">
                    <input type="confirm_password" name="password" placeholder="password"
                     required onblur="checkField(this,'password')">
                <button id="signupButton">Sign Up</button>

            </form>
        </div>
        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Login</label>
                <input type="text" name="text" placeholder="User Name" required>
                <!--<input type="email" name="email" placeholder="Email" required>-->
                <input type="password" name="password" placeholder="password" required>
                <button>Login</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
   

function checkEmailFormat() {
    var email = document.getElementById("email").value;
  
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailRegex.test(email)) {
        
    } else {
        swal.fire("Email format is incorrect.");
    }
}

$(document).ready(function(){
            $('#signupButton').click(function(){ // Attach click event handler to signup button
                var email= $('#email').val();
                console.log(email);
            });
        });
</script>

   
</body>

</html>
