<?php
?>
<html>
    <head>
        <title>Fire #87 - Log 10/09/2020</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
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
                <li class="navli"><a href="./e080920.php" class="nava">Anterior</a></li>
                <li class="navli"><a href="./elist.php" class="nava">Entradas</a></li>
                <li class="navli"><a href=".e150920.php" class="nava">Siguiente</a></li>
            </ul>
        </nav>
        <h1 class="title1">Sesión 10/09/2020</h1>
        <div></div>
        <div class="row">
            <div class="centercolumn">
                <div class="card">
                    <h2>Círculo de la vida</h2>
                    <h5>Lo holístico de lo que podemos ser</h5>
                    <p>Características del jugador de Ultimate desde lo volitivo:</p>
                    <div>
                        <canvas id="circleChart"></canvas>
                    </div>
                </div>
                <div class="card">
                    <h2>Tarea</h2>
                    <h5>Definir los conceptos del círculo de la vida para apoyar el desarrollo de la evaluación</h5>
                    <p>
                        <ul>
                            <li>Ambición: El deseo de alcanzar o lograr cosas "grandes".</li>
                            <li>Concentración: La consistencia de la atención dedicada a una actividad.</li>
                            <li>Empatía: La capacidad de comprender al otro desde sus ojos.</li>
                            <li>Humildad: La conciencia de pequeñez del ser.</li>
                            <li>Orden: La convivencia pertinente y armoniosa de las partes.</li>
                            <li>Pasión: La entrega del ser a la tarea.</li>
                            <li>Resiliencia: La consistencia de determinación a cumplir con la tarea.</li>
                            <li>Respeto: El entendimiento de la variabilidad y diferencia.</li>
                            <li>Responsabilidad: El compromiso con la promesa.</li>
                            <li>Sensibilidad: La habilidad de recibir e interpretar lo externo.</li>
                        </ul>
                    </p>
                    <p>Re evaluar los cículos de vida para lo deportivo, familiar y académico.</p>
                </div>
                <div class="Card">
                    <h2>Círculos</h2>
                    <p>Deportivo</p>
                    <div>
                        <canvas id="depChart"></canvas>
                    </div>
                    <p>Familiar</p>
                    <div>
                        <canvas id="famChart"></canvas>
                    </div>
                    <p>Académico</p>
                    <div>
                        <canvas id="acadChart"></canvas>
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
            };

            var circVida = {
                labels: ["Ambición","Concentración","Empatía","Humildad","Orden","Pasión","Resiliencia","Respeto","Responsabilidad","Sensibilidad"],
                datasets: [{
                    data: [7,7,5,7,5,9,7,7,8,9],
                    backgroundColor:["#e8b631","#e7ae29","#e6a522","#e59d1b","#e49414","#e28b0d","#e18307","#df7a03","#dd7001","#db6700"]
                }]
            };

            var circDepor = {
                labels: ["Ambición","Concentración","Empatía","Humildad","Orden","Pasión","Resiliencia","Respeto","Responsabilidad","Sensibilidad"],
                datasets: [{
                    data: [5,8,6,6,8,9,8,9,6,7],
                    backgroundColor:["#e8b631","#e7ae29","#e6a522","#e59d1b","#e49414","#e28b0d","#e18307","#df7a03","#dd7001","#db6700"]
                }]
            };

            var circFam = {
                labels: ["Ambición","Concentración","Empatía","Humildad","Orden","Pasión","Resiliencia","Respeto","Responsabilidad","Sensibilidad"],
                datasets: [{
                    data: [5,7,7,6,5,6,7,7,9,9],
                    backgroundColor:["#e8b631","#e7ae29","#e6a522","#e59d1b","#e49414","#e28b0d","#e18307","#df7a03","#dd7001","#db6700"]
                }]
            };

            var circAcad = {
                labels: ["Ambición","Concentración","Empatía","Humildad","Orden","Pasión","Resiliencia","Respeto","Responsabilidad","Sensibilidad"],
                datasets: [{
                    data: [9,6,7,5,7,7,9,7,9,7],
                    backgroundColor:["#e8b631","#e7ae29","#e6a522","#e59d1b","#e49414","#e28b0d","#e18307","#df7a03","#dd7001","#db6700"]
                }]
            };

            var ctx= document.getElementById('circleChart');
            var cirChart= new Chart(ctx,
                {
                    type:'polarArea',
                    data:circVida,
                    options: {
                        maintainAspectRatio: false,
                        legend:{display: false}
                    }
                }
            );

            var ctx= document.getElementById('depChart');
            var cirChart= new Chart(ctx,
                {
                    type:'polarArea',
                    data:circDepor,
                    options: {
                        maintainAspectRatio: false,
                        legend:{display: false}
                    }
                }
            );

            var ctx= document.getElementById('famChart');
            var cirChart= new Chart(ctx,
                {
                    type:'polarArea',
                    data:circFam,
                    options: {
                        maintainAspectRatio: false,
                        legend:{display: false}
                    }
                }
            );

            var ctx= document.getElementById('acadChart');
            var cirChart= new Chart(ctx,
                {
                    type:'polarArea',
                    data:circAcad,
                    options: {
                        maintainAspectRatio: false,
                        legend:{display: false}
                    }
                }
            );
        </script>
    </body>
</html>