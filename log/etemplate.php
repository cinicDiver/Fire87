<?php
?>
<html>
    <head>
        <title>Fire #87 - Log date</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../styling/minDecor.css" type="text/css"/>
        <link rel="stylesheet" href="../styling/bioStyle.css" type="text/css"/>
        <link rel="stylesheet" href="../styling/tabStyling.css" type="text/css"/>
        <script src="https://kit.fontawesome.com/e7c5c9bea9.js" crossorigin="anonymous"></script>
    </head>
    <body class="stdBody">
        <nav class="navb" id="navHead">
            <ul class="navl">
                <li class="navli"><a href="../content.php" class="nava">Contenido</a></li>
                <li class="navli"><a href="#" class="nava">Anterior</a></li>
                <li class="navli"><a href="./elist.php" class="nava">Entradas</a></li>
                <li class="navli"><a href="#" class="nava">Siguiente</a></li>
            </ul>
        </nav>
        <h1 class="title1">Sesión date</h1>
        <div></div>
        <div class="row">
            <div class="centercolumn">
                <div class="card">
                    <h2>Tema</h2>
                    <h5>Título</h5>
                    <p>Cuerpo</p>
                </div>
            </div>
        </div>
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