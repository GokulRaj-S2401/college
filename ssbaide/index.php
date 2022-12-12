<?php 

if(isset($_COOKIE['user']) || isset($_COOKIE['admin']) ){
    header("Location:views/User.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ssbaide</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./public/css/index.css">
    <script src="https://code.jquery.com/jquery-3.1.0.js"  crossorigin="anonymous"></script>
</head>
<body>
    
    <header>
        <div class="brand">
            <div class="logo">
                <button>
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
                <a href="" class="brandName">SSBAIDE</a>    
            </div>
        </div>
        <nav>
            <ul>
                <li> <a href="#">Home</a> </li>
                <li> <a href="#">Contact</a> </li>
                <li> <a href="#">SSB Website</a> </li>
                <li> <a href="#">FAQ</a> </li>
            </ul>
        </nav>
        <div class="icons">
            <ul>
                <li> <button> <ion-icon name="notifications-outline"></ion-icon> </button> </li>
                <li> <button> <ion-icon name="person-sharp"></ion-icon> </button> </li>
            </ul>
        </div>
        <script src="./public/js/index.js"></script>
    </header>

    <section class="introSection" >
        <div class="botImg">
            <!--?xml version="1.0" standalone="no"?-->              <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1">                    <defs>                         <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">                            <stop id="stop1" stop-color="rgba(255, 184.85, 10.168, 1)" offset="0%"></stop>                            <stop id="stop2" stop-color="rgba(251, 31, 120.894, 1)" offset="100%"></stop>                        </linearGradient>                    </defs>                <path fill="url(#sw-gradient)" d="M19.1,-24.2C25.3,-17.6,31.3,-12.1,33,-5.4C34.6,1.3,32,9.1,27.9,16C23.8,22.9,18.3,28.9,11.2,32C4.2,35.1,-4.4,35.3,-12.7,33.1C-21,30.8,-29.2,26.2,-34,19C-38.9,11.9,-40.4,2.2,-39,-7.1C-37.6,-16.4,-33.3,-25.4,-26.3,-32C-19.3,-38.5,-9.6,-42.6,-1.6,-40.7C6.4,-38.8,12.9,-30.9,19.1,-24.2Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"></path>              </svg>
            <img class="img" src="./public/img/chat-bot-5379962-4497578.webp" alt="">
        </div>
        <div class="content" >
            <div class="welcome">
                <p>Hey! Welcome</p>
            </div>
            <div class="des">
                <p>This is efficient aide application especially for faculties and students. I will give best interface as much as possible. If you already engage with me hit Login otherwise going towards sign up, After the sign up please wait for  confirmation.
                </p>
            </div>
            <div class="btns">
                <button class="signIn" >SignIn</button>
                <button class="signUp" >SignUp</button>
            </div>
            <div class="version">
                <p>Version 1.0</p>
            </div>
        </div>
        <div class="imageContainer">
            <img src="./public/img/5.png" alt="" srcset="">
        </div>
    </section>

    <div class="overlay"></div>

    <div class="signin">
        <div class="box">
            <button class="close" id="close" >
                <ion-icon name="close-circle-outline"></ion-icon>
            </button>
            <div align="center" >
                <h1>Sign In</h1>
            </div>  
            <label for="email">Email <span class="err emailErr">Enter Valid Email</span> </label>
            <input type="text" id="email">
            <label for="password">Password <span class="err passerr"> Password must be 6 character or more </span> </label>
            <input type="password" id="password" >
            <p class="already_exist" style="color: red;" > User doesn't exist </p>
            <button id="signinSubmission" >Sign In</button> 
        </div>
    </div>
    <div class="asignin" style="top:-100%" >
        <div class="box">
            <button class="close" id="close" >
                <ion-icon name="close-circle-outline"></ion-icon>
            </button>
            <div align="center" >
                <h1>Admin Sign In</h1>
            </div>  
            <label for="aemail">Email <span class="err asiemailerr"> Enter valid email </span> </label>
            <input type="text" id="aemail">
            <label for="apassword">Password <span class="err asipasserr ">Password must be 6 character</span> </label>
            <input type="password" id="apassword" >
            <p class="already_exist" style="color: red;" > User doesn't exist </p>
            <button id="AsigninSubmission" >Sign In</button> 
        </div>
    </div>
    <div class="signup">
        <div class="box">
            <button class="close" id="close" >
                <ion-icon name="close-circle-outline"></ion-icon>
            </button>
            <div align="center" >
                <h1>Sign Up</h1>
            </div>  
            <label for="siuname">Name <span class="err sinameerr">Enter valid name</span> </label>
            <input type="text" id="siuname" tabindex="1" style="text-transform: uppercase;" >
            <label for="siuemail">Email <span class="err siemailErr"> Enter valid email </span> </label>
            <input type="text" tabindex="2" id="siuemail">
            <label for="siupassword">Password <span class="err sipassErr"> Password must be 6 character or more </span> </label>
            <input type="password" tabindex="3" id="siupassword" >
            <label for="scpassword">Confirm Password <span class="err cpassErr ">Password must be same</span> </label>
            <input type="password" tabindex="4" id="scpassword" >
            <button tabindex="5" id="signUpSubmission" >Sign Up</button> 
            <p class="already_exist" style="color: red;" > Email already exist </p>
        </div>
    </div>
    <div class="signConfirm">
        <p> <span class="confirmMsg" >  </span> <a class="ok" href="#">Ok</a> </p>
    </div>
    <div class="superAdmin">
        <div class="box">
            <button class="close" id="close" >
                <ion-icon name="close-circle-outline"></ion-icon>
            </button>
            <div align="center" >
                <h1>Admin Sign Up</h1>
            </div>  
            <label for="asname"> Name <span class="asnameerr err" >Enter valid user name</span> </label>
            <input type="text" id="asname">
            <label for="asemail">Email <span class="asemailerr err" >Enter valid email</span> </label>
            <input type="text" id="asemail">
            <label for="aspassword">Password <span class="aspassworderr err" >password should be atleast 6 character</span> </label>
            <input type="password" id="aspassword" >
            <label for="ascpassword">Confirm Password <span class="ascpassworderr err" >password is must be same</span> </label>
            <input type="password" id="ascpassword" >
            <label for="assecret">Secret Key <span class="assecreterr err" > Invalid Secret Key </span> </label>
            <input type="password" id="assecret" >
            <p class="already_exist" style="color: red;" > Email already exist </p>
            <div class="flexBtn">
                <button id="superAdminAuth" >Sign Up</button> 
                <p class="indication" > Already have an account <a id="asign" href="#">Sign In</a> </p>
            </div>
        </div>
    </div>
    <script src="./public/js/index.js"></script>
</body>
</html>