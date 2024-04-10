

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Rejestracja.css">
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
</head>
<body>

<container>
    <div id="baner">
        <svg class="float" fill="#ff0000" width="100px" height="6dvh" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.96"></g><g id="SVGRepo_iconCarrier"> <title>alt-battery-1</title> <path d="M0 20q0 2.496 1.76 4.256t4.256 1.76h17.984q2.496 0 4.256-1.76t1.76-4.256h1.984v-8h-1.984q0-2.464-1.76-4.224t-4.256-1.76h-17.984q-2.496 0-4.256 1.76t-1.76 4.224v8zM4 20v-8q0-0.832 0.576-1.408t1.44-0.576h17.984q0.832 0 1.408 0.576t0.608 1.408v8q0 0.832-0.608 1.44t-1.408 0.576h-17.984q-0.832 0-1.44-0.576t-0.576-1.44zM6.016 20h1.984v-8h-1.984v8z"></path> </g></svg>
        <red>SOCIAL</red> BATTERY
    </div>
</container>
<div class="battery">
    Check Our Merch!
    <img src="https://mtek3d.com/wp-content/uploads/2018/01/image-placeholder-500x500.jpg">
    <a href="Merch.html"><input id="stream" type="submit" value="Take me there!"></a>
</div>
<div class="main">
    REGISTRATION
    <form method="POST">
        <input name="login" placeholder="Username">
        <input name="mail" placeholder="E-Mail">
        <input name="pass" type="password" placeholder="Password">
        <input name="pass1" type="password" placeholder="Repeat Password">

        <script src="https://accounts.google.com/gsi/client" async></script>
        <div id="g_id_onload"
             data-client_id="YOUR_GOOGLE_CLIENT_ID"
             data-login_uri="https://your.domain/your_login_endpoint"
             data-auto_prompt="false">
        </div>
        <div class="g_id_signin"
             data-type="standard"
             data-size="large"
             data-theme="outline"
             data-text="sign_in_with"
             data-shape="rectangular"
             data-logo_alignment="left">
        </div>
        <a href="login.html">You have account? Log In</a>

        <button id="submit">Register</button>
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $localhost = "localhost";
    $user = "root";
    $password = "";
    $dbname = "test";

    $con = mysqli_connect($localhost, $user, $password, $dbname);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($con, $_POST['login']);
    $mail = mysqli_real_escape_string($con, $_POST['mail']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    $zapytanie = "INSERT INTO `dane` (`nick`, `mail`, `pass`) VALUES ('$name', '$mail', '$hashed_password')";


    if (mysqli_query($con, $zapytanie)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $zapytanie . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
</body>
</html>