<?php
?>
<html>
    <head>
        <title>Fire #87 - Contenido</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../styling/minDecor.css" type="text/css"/>
        <link rel="stylesheet" href="../styling/timeline.css" type="text/css"/>
        <script src="https://kit.fontawesome.com/e7c5c9bea9.js" crossorigin="anonymous"></script>
    </head>
    <body class="stdBody">
        <nav class="navb" id="navHead">
            <ul class="navl">
                <li class="navli"><a href="../content.php" class="nava">Contenido</a></li>
                <li class="navli"><a href="../profile/profile.php" class="nava">Perfil</a></li>
                <li class="navli"><a href="#" class="nava">Actividades</a></li>
                <li class="navli"><a href="#" class="nava">Bitácora</a></li>
            </ul>
        </nav>
        <h1 class="title1">Entradas</h1>
        <div></div>
        <div class="timeline">
            <div class="container left">
                <div class="content">
                <h2>18/08/2020</h2>
                <p><a href="./e180820.php" class="entryTag">Principio de anticipación (1)</a></p>
                </div>
            </div>
            <div class="container right">
                <div class="content">
                <h2>20/08/2020</h2>
                <p><a href="./e200820.php" class="entryTag">Principio de anticipación (2)</a></p>
                </div>
            </div>
            <div class="container left">
                <div class="content">
                <h2>25/08/2020</h2>
                <p><a href="./e250820.php" class="entryTag">PA->AS->FD</a></p>
                </div>
            </div>
            <div class="container right">
                <div class="content">
                <h2>27/08/2020</h2>
                <p><a href="./e270820.php" class="entryTag">Del concepto a lo profesonal</a></p>
                </div>
            </div>
            <div class="container left">
                <div class="content">
                <h2>01/09/2020</h2>
                <p><a href="./e010920.php" class="entryTag">Técnica de lectura</a></p>
                </div>
            </div>
            <div class="container right">
                <div class="content">
                <h2>03/09/2020</h2>
                <p><a href="./e030920.php" class="entryTag">Lecturas</a></p>
                </div>
            </div>
            <div class="container left">
                <div class="content">
                <h2>08/09/2020</h2>
                <p><a href="./e080920.php" class="entryTag">Lectura de entrenamiento</a></p>
                </div>
            </div>
            <div class="container right">
                <div class="content">
                <h2>10/09/2020</h2>
                <p><a href="./e100920.php" class="entryTag">Círculo de la vida</a></p>
                </div>
            </div>
            <div class="container left">
                <div class="content">
                <h2>15/09/2020</h2>
                <p><a href="./e150920.php" class="entryTag">TBD</a></p>
                </div>
            </div>
        </div>
        <div style="height:120px"></div>
        <div style="background-color:#E8B631;position:fixed;bottom:90;left:0;width:100%;height:30px;z-index:100;"><p></p></div>
        <div style="background-color:#E59D1B;position:fixed;bottom:60;left:0;width:100%;height:30px;z-index:100;"><p></p></div>
        <div style="background-color:#E08307;position:fixed;bottom:30;left:0;width:100%;height:30px;z-index:100;"><p></p></div>
        <div style="background-color:#DB6700;position:fixed;bottom:0;left:0;width:100%;height:30px;z-index:100;"><p></p></div>
        <div style="position:fixed;left:10px;bottom:0;z-index:100;">
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