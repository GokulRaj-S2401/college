<?php 

include('../controller/isAdmin.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Sankara Bhagavathi Arts and Science College</title>
    <link rel="stylesheet" href="../public/css/hod.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"  crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="sideNav ">
            <div class="head">
                <h1 id="brand" class="" >SSBAIDE</h1>
                <div>
                    <button class="isShrink" > <ion-icon name="chevron-back-sharp"></ion-icon> </button>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li > <ion-icon name="notifications-outline"></ion-icon> <a id="link" class=""  href="#">Notifications</a> </li>
                    <li class="active" > <ion-icon name="apps-outline"></ion-icon> <a id="link" class=" active" href="#"> Classes </a> </li>
                    <li> <ion-icon name="people-outline"></ion-icon> <a href="#" id="link" class="" >  Faculties </a> </li>
                    <li> <ion-icon name="alarm-outline"></ion-icon> <a href="#" id="link" class="" >  Schedule </a> </li>
                    <li> <ion-icon name="newspaper-outline"></ion-icon> <a href="#" id="link" class="" >  Activity </a> </li>
                    <li> <ion-icon name="send-outline"></ion-icon> <a href="#" id="link" class="" >  Messenger </a> </li>
                    <li> <ion-icon name="lock-open-outline"></ion-icon> <a href="#" id="link" class="" >  Logout </a> </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="header">
                <div class="btnGrp">
                </div>
                <div class="user">
                        <button> <ion-icon name="person-sharp"></ion-icon> </button>
                        <div>
                            <p> <?php echo $admin->user_email;  ?> </p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <script src="../public/js/hod.js"></script>
</body>
</html>