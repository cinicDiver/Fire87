<?php
?>
<html>
    <head>
        <title>Fire #87 - 15/09/2020</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../styling/minDecor.css" type="text/css"/>
        <link rel="stylesheet" href="../styling/bioStyle.css" type="text/css"/>
        <link rel="stylesheet" href="../styling/tabStyling.css" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />
        <script src="https://kit.fontawesome.com/e7c5c9bea9.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
    </head>
    <body class="stdBody">
        <nav class="navb" id="navHead">
            <ul class="navl">
                <li class="navli"><a href="../content.php" class="nava">Contenido</a></li>
                <li class="navli"><a href="./100920.php" class="nava">Anterior</a></li>
                <li class="navli"><a href="./elist.php" class="nava">Entradas</a></li>
                <li class="navli"><a href="./170920.php" class="nava">Siguiente</a></li>
            </ul>
        </nav>
        <h1 class="title1">Sesión 15/09/2020</h1>
        <div></div>
        <div class="row">
            <div class="centercolumn">
                <div class="card">
                    <h2>Círculos del equipo</h2>
                    <h5>Tendencias en los análisis</h5>
                    <p>Los conceptos más polémicos de la socialización fueron:</p>
                    <ol>
                        <li>Humildad</li>
                        <li>Empatía</li>
                        <li>Resiliencia</li>
                    </ol>
                </div>
                <div class="card">
                    <h2>Objetivos</h2>
                    <h5>¿Si los círculos varían ucho realmente es un análisis objetivo?</h5>
                    <p>Las herramientas volutivas son transversales en los escenarios.</p>
                    <p>Las grandes diferencias entre los escenarios se concentran prncipalmente en la falta de 
                        objetivos para cada escenario que se desea evaluar para poder hablar de una herramienta 
                        totalmente desarrollada.</p>
                </div>
                <div class="card">
                    <h2>Círculo integral</h2>
                    <h5>Los promedios de los círculos anteriores son:</h5>
                    <p>Los conceptos más polémicos de la socialización fueron:</p>
                    <div>
                        <canvas id="intChart"></canvas>
                    </div>
                </div>
                <div class="card">
                    <h2>Tarea</h2>
                    <h5>Círculos de lanzamientos y acciones en la cancha:</h5>
                    <p>Seleccionar 10 para cada círculo y evaluarlo. <span style="font-weight:bold;">Inventar es 
                        válido, no sabemo qué podamos incorporar de ahí.<span></p>
                    <div>
                        <canvas id="lanzChart"></canvas>
                    </div>
                    <div>
                        <canvas id="accChart"></canvas>
                    </div>
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

            var circInt = {
                labels: ["Ambición","Concentración","Empatía","Humildad","Orden","Pasión","Resiliencia","Respeto","Responsabilidad","Sensibilidad"],
                datasets: [{
                    data: [6,7,7,6,7,7,8,8,8,8],
                    backgroundColor:["#e8b631","#e7ae29","#e6a522","#e59d1b","#e49414","#e28b0d","#e18307","#df7a03","#dd7001","#db6700"]
                }]
            };

            var ctx= document.getElementById('intChart');
            var intChart= new Chart(ctx,
                {
                    type:'polarArea',
                    data:circInt,
                    options: {
                        maintainAspectRatio: false,
                        legend:{display: false}
                    }
                }
            );

            var circAcc = {
                labels: ["Pivot","Desmarca","Barrido","Box out","Marca (on)","Marca (off)","Poaching","Switching","Layouts","Reset"],
                datasets: [{
                    data: [5,6,8,8,8,7,6,6,7,7],
                    backgroundColor:["#e8b631","#e7ae29","#e6a522","#e59d1b","#e49414","#e28b0d","#e18307","#df7a03","#dd7001","#db6700"]
                }]
            };

            var ctx= document.getElementById('accChart');
            var intChart= new Chart(ctx,
                {
                    type:'polarArea',
                    data:circInt,
                    options: {
                        maintainAspectRatio: false,
                        legend:{display: false}
                    }
                }
            );

            var circLanz = {
                labels: ["Backhand","Forehand","Hammer","Scoober","Inside","Outside","Largos","Pulls","High release","Recursos"],
                datasets: [{
                    data: [6,8,8,4,5,5,7,3,2,6],
                    backgroundColor:["#e8b631","#e7ae29","#e6a522","#e59d1b","#e49414","#e28b0d","#e18307","#df7a03","#dd7001","#db6700"]
                }]
            };

            var ctx= document.getElementById('lanzChart');
            var intChart= new Chart(ctx,
                {
                    type:'polarArea',
                    data:circInt,
                    options: {
                        maintainAspectRatio: false,
                        legend:{display: false}
                    }
                }
            );
        </script>
    </body>
</html>