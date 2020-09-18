<?php
?>
<html>
    <head>
        <title>Fire #87 - Bio</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../styling/minDecor.css" type="text/css"/>
        <link rel="stylesheet" href="../styling/bioStyle.css" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/e7c5c9bea9.js" crossorigin="anonymous"></script>
    </head>
    <style>
        /*Editing bar values*/
        .backh {width:70%; background-color: #E8B631;}
        .foreh {width:85%; background-color: #E59D1B;}
        .hammr {width:80%; background-color: #E08307;}
        .scoob {width:40%; background-color: #DB6700;}
    </style>
    <body class="stdBody">
        <nav class="navb" id="navHead">
            <ul class="navl">
                <li class="navli"><a href="../content.php" class="nava">Contenido</a></li>
                <li class="navli"><a href="./profile.php" class="nava">Perfil</a></li>
                <li class="navli"><a href="#" class="nava">Actividades</a></li>
                <li class="navli"><a href="../log/elist.php" class="nava">Bitácora</a></li>
            </ul>
        </nav>
        <div></div>
        <h1 class="title1">Bio {En Construcción}</h1>
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <div class="cardVis">
                        <h2>Mamoots #00</h2>
                        <h5>Ene/2018 - Jul/2020</h5>
                        <img class="fakeimg" src="./img/mamoots.jpg">
                    </div>
                    <p>Some text..</p>
                </div>
                <div class="card">
                    <div class="cardVis">
                        <h2>Universidad de los Andes #0</h2>
                        <h5>Ago/2018 - Dic/2020</h5>
                        <img class="fakeimg" img src="./img/andes.jpg">
                    </div>
                    <p>Some text..</p>
                </div>
                <div class="card">
                    <div class="cardVis">
                        <h2>Inside #9</h2>
                        <h5>Feb/2016 - Dic/2017</h5>
                        <img class="fakeimg" src="./img/inside.jpg">
                    </div>
                    <p>Some text..</p>
                </div>
            </div>
            <div class="rightcolumn">
                <div class="card">
                    <div class="cardVis">
                        <h2>Sobre mí</h2>
                        <img class="fakeimg" src="./img/me.jpg">
                    </div>
                    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                    <div style='text-align:center;'>
                        <!--Add checked in class to increase-->
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <div class="card">
                    <div class="cardVis">
                        <h2>Hobbies</h2>
                        <img class="fakeimg" src='#'>
                    </div>
                    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                    <div style='justify-content:center;'>
                    </div>
                </div>
                <div class="card">
                    <h3>Lanzamientos</h3>
                    <div class="container">
                        <div class="skills backh">Backhand</div>
                    </div>
                    <div class="container">
                        <div class="skills foreh">Forehand</div>
                    </div>
                    <div class="container">
                        <div class="skills hammr">Hammer</div>
                    </div>
                    <div class="container">
                        <div class="skills scoob">Scoober</div>
                    </div>
                </div>
                <div class="card">
                <h3>Sígueme en:</h3>
                <div class="cardVis">
                    <a class="fab fa-facebook-square" style="color:#DB6700;font-size:25px;text-decoration:none;" href="https://www.facebook.com/OscarF.RamirezP/"></a>
                    <a href="https://github.com/cinicDiver" class="fab fa-github" style="color:#E08307;font-size:25px;text-decoration:none;"></a>
                    <a href="https://www.instagram.com/oframirez11/?hl=es-la" class="fab fa-instagram" style="color:#E59D1B;font-size:25px;text-decoration:none;"></a>
                    <a href="https://www.linkedin.com/in/oframirez1095/" class="fab fa-linkedin-in" style="color:#E8B631;font-size:25px;text-decoration:none;"></a>
                </div>
                </div>
            </div>
        </div>

        <div style="height:120px"></div>
        <div style="background-color:#E8B631;position:fixed;bottom:90;left:0;width:100%;height:30px"><p></p></div>
        <div style="background-color:#E59D1B;position:fixed;bottom:60;left:0;width:100%;height:30px"><p></p></div>
        <div style="background-color:#E08307;position:fixed;bottom:30;left:0;width:100%;height:30px"><p></p></div>
        <div style="background-color:#DB6700;position:fixed;bottom:0;left:0;width:100%;height:30px"><p></p></div>
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