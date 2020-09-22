<?php
?>
<html>
    <head>
        <title>Fire #87 - Last Dance: Episodios</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <link rel="stylesheet" href="../styling/minDecor.css" type="text/css"/>
        <link rel="stylesheet" href="../styling/imgGall.css" type="text/css"/>
        <script src="https://kit.fontawesome.com/e7c5c9bea9.js" crossorigin="anonymous"></script>
    </head>
    <body class="stdBody">
        <nav class="navb" id="navHead">
            <ul class="navl">
                <li class="navli"><a href="../content.php" class="nava">Contenido</a></li>
                <li class="navli"><a href="../profile/profile.php" class="nava">Perfil</a></li>
                <li class="navli"><a href="#" class="nava">Actividades</a></li>
                <li class="navli"><a href="../log/elist.php" class="nava">Bitácora</a></li>
            </ul>
        </nav>
        <div></div>
        <h1 class="title1">Episodios:</h1>
        <ul class="imgList">
            <!--All images aquired from Netflix.com/browse, not made or taken by me. I have no credit whatsoever from its production-->
            <li><div class="gallery"><a href="./Ep1.php"><img src="./img/ep1.jpg" alt="Episode I" width="600" height="400"></a>
                <div class="desc">I</div>
            </div></li>
            <li><div class="gallery"><a href="./Ep2.php"><img src="./img/ep2.jpg" alt="Episode II" width="600" height="400"></a>
                <div class="desc">II</div>
            </div></li>
            <li><div class="gallery"><a href="./Ep3.php"><img src="./img/ep3.jpg" alt="Episode III" width="600" height="400"></a>
                <div class="desc">III</div>
            </div></li>
            <li><div class="gallery"><a href="./Ep4.php"><img src="./img/ep4.jpg" alt="Episode IV" width="600" height="400"></a>
                <div class="desc">IV</div>
            </div></li>
            <li><div class="gallery"><a href="./Ep5.php"><img src="./img/ep5.jpg" alt="Episode V" width="600" height="400"></a>
                <div class="desc">V</div>
            </div></li>
            <li><div class="gallery"><a href="./Ep6.php"><img src="./img/ep6.jpg" alt="Episode VI" width="600" height="400"></a>
                <div class="desc">VI</div>
            </div></li>
            <li><div class="gallery"><a href="./Ep7.php"><img src="./img/ep7.jpg" alt="Episode VII" width="600" height="400"></a>
                <div class="desc">VII</div>
            </div></li>
            <li><div class="gallery"><a href="./Ep8.php"><img src="./img/ep8.jpg" alt="Episode VIII" width="600" height="400"></a>
                <div class="desc">VIII</div>
            </div></li>
            <li><div class="gallery"><a href="./Ep9.php"><img src="./img/ep9.jpg" alt="Episode IX" width="600" height="400"></a>
                <div class="desc">IX</div>
            </div></li>
            <li><div class="gallery"><a href="./Ep10.php"><img src="./img/ep10.jpg" alt="Episode X" width="600" height="400"></a>
                <div class="desc">X</div>
            </div></li>
        <ul>
        <div style="height:120px"></div>
        <div style="background-color:#E8B631;position:fixed;bottom:90;left:0;width:100%;height:30px"><p></p></div>
        <div style="background-color:#E59D1B;position:fixed;bottom:60;left:0;width:100%;height:30px"><p></p></div>
        <div style="background-color:#E08307;position:fixed;bottom:30;left:0;width:100%;height:30px"><p></p></div>
        <div style="background-color:#DB6700;position:fixed;bottom:0;left:0;width:100%;height:30px"><p></p></div>
        <div style="position:fixed;left:10px;bottom:0">
                <a href="https://github.com/cinicDiver" class="fab fa-github" style="color:#F7EF8A;font-size:25px;text-decoration:none;"></a>
                <a href="https://www.instagram.com/oframirez11/?hl=es-la" class="fab fa-instagram" style="color:#F7EF8A;font-size:25px;text-decoration:none;"></a>
                <a href="https://www.linkedin.com/in/oframirez1095/" class="fab fa-linkedin-in" style="color:#F7EF8A;font-size:25px;text-decoration:none;"></a>
        </div>
        <script>
            window.onscroll = function() {myFunction()};
            var header = document.getElementById("navHead");
            var sticky = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("stickyHead");
                } else {
                    header.classList.remove("stickyHead");
                }
            }
        </script>
    </body>
</html>