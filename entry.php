<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="entry.css">
</head>
<body>
    <div class="main">
        <mainText>SOCIAL BATTERY</main-text>
    </div>
    <div id="main1">Social Battery is place where all introverted souls are blessed with their own place of posting, without anyone interrupting us.
        only social section are private messages which u can disable.
        <buttons>
        <a href="Rejestracja.php"><button id="style">Register</button></a>

        <a href="login.php"><button  id="style" style="--c:#E95A49">Login</button></a>
    </buttons>
        
    </div>

    <button id="btn">
        <svg id="svgIcon"fill="#ffffff" width="64px" height="64px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>alt-brightness</title> <path d="M2.016 16q0 0.832 0.576 1.44t1.408 0.576 1.408-0.576 0.608-1.44-0.608-1.408-1.408-0.576-1.408 0.576-0.576 1.408zM5.504 24.512q0 0.8 0.576 1.408t1.44 0.576 1.408-0.576 0.576-1.408-0.576-1.408-1.408-0.608-1.44 0.608-0.576 1.408zM5.504 7.52q0 0.832 0.576 1.408t1.44 0.576 1.408-0.576 0.576-1.408-0.576-1.408-1.408-0.608-1.44 0.608-0.576 1.408zM8 16q0 3.328 2.336 5.664t5.664 2.336 5.664-2.336 2.336-5.664-2.336-5.632-5.664-2.368-5.664 2.368-2.336 5.632zM12 16q0-1.632 1.184-2.816t2.816-1.184 2.816 1.184 1.184 2.816-1.184 2.848-2.816 1.152-2.816-1.152-1.184-2.848zM14.016 28q0 0.832 0.576 1.44t1.408 0.576 1.408-0.576 0.608-1.44-0.608-1.408-1.408-0.576-1.408 0.576-0.576 1.408zM14.016 4q0 0.832 0.576 1.44t1.408 0.576 1.408-0.576 0.608-1.44-0.608-1.408-1.408-0.576-1.408 0.576-0.576 1.408zM22.496 24.512q0 0.8 0.576 1.408t1.408 0.576 1.44-0.576 0.576-1.408-0.576-1.408-1.44-0.608-1.408 0.608-0.576 1.408zM22.496 7.52q0 0.832 0.576 1.408t1.408 0.576 1.44-0.576 0.576-1.408-0.576-1.408-1.44-0.608-1.408 0.608-0.576 1.408zM26.016 16q0 0.832 0.576 1.44t1.408 0.576 1.408-0.576 0.608-1.44-0.608-1.408-1.408-0.576-1.408 0.576-0.576 1.408z"></path> </g></svg>    <script>
let btn = document.getElementById("btn");
let svgIcon = document.getElementById("svgIcon");
let n = false;
let main = document.getElementById("main1");
let styles = document.querySelectorAll("#style");

btn.addEventListener("click", () => {
    if (n == false) {
        document.body.classList.add("black");
        svgIcon.setAttribute("fill", "#000");
        for(var i = 0; i < styles.length; i++){
            styles[i].style.color = "black";
        }
        btn.style.border = "none";
        main.style.background= "linear-gradient(rgb(255,255,255), rgb(240,240,240))";
        n = true;
    } else {
        document.body.classList.remove("black");
        svgIcon.setAttribute("fill", "#fff");
        for(var i = 0; i < styles.length; i++){
            styles[i].style.color = "white";
        }
        main.style.background= "linear-gradient(rgb(0,0,0), rgb(21,21,21))";
        n = false;
    }
});
    </script>
</body>
</html>