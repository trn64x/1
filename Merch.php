<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
        overflow-x: hidden;
    }
    #grey, #purple{
        cursor: pointer;
  transition: transform 0.3s ease;

    }
    
    #grey.show{
        display:flex;
        rotate:-45deg;
        
        transform:translate(0px,100px);
    }
    #purple.show{
        display:flex;
        rotate:45deg;
        transform:translate(0px,100px);
    }
     #purple:hover,#grey:hover,#black:hover{
        transform: scale(1.2);
    }
    img{
        max-width: 40vw;
        max-height:100vh;
    }
    body{
        font-weight:900;
        margin:0;
        height:100dvh;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        
    }
    .baner{
        display:flex;
        align-items:center;
        justify-content:flex-start;
height:10vh;
width:100%;
background:rgb(20,20,20);
color:white;
font-size:100%;
    font-family:arial;
    }
container{
    font-size:100px;
    font-family:arial;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:row;
    gap:5vh;
    height:90vh;
    width:60vw;
    background:rgb(240,240,240);
}
</style>
</head>
<body>
    <div class="baner">
        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 6H20M4 12H14M4 18H9" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        Our merch!
    </div>
    <container>
        
        
        <img id="grey"src="grey.png">
        <img id="black" src="black.png">
        <img id="purple"src="purple.png">
    </container>
    <script>
        let black = document.getElementById("black");
        black.style.zIndex = "1";

        let grey = document.getElementById("grey");
        let purple = document.getElementById("purple");
       
        let x = grey.style;
            
            grey.classList.add("show");
        
            purple.classList.add("show");


        </script>
</body>
</html>