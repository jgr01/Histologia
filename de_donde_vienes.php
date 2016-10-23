<!DOCTYPE html>
<html>
    <head>
        <title>Arrastrar y Soltar</title>
        <meta charset="utf-8">
        <!-- Latest Bootstrap | compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="ddd-style.css" />-->
        <style>
            body{
                text-align: center;
                background-color: #c4e3f3;
            }
            /*Creacion de los 2 elementos*/
            .drag {
                width: 100px;
                height: 100px;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%;
                background: #3498db;
                border-style: ridge;
                padding: 10px
                /*margin: 1.5em auo 0;*/
            }
            .drop1 {
                width: 100%;
                 height: 200px;
                
                 /*
                 -moz-border-radius: 50%;
                 -webkit-border-radius: 50%;
                 border-radius: 50%;
                 background:#ecf0f1;*/
                /*margin: 1.5em auto 0;*/

            }
            img{
                width:100%;
                max-width:600px;
            }


        </style>
    </head>
    <body>
        <div class="container">
            <br>
            <button class="btn btn-block btn-info disabled" style="font-size: large;"><h2>Arrastra y Suetla donde corresponda</h2></button>
                <br>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4" align = "center">
<!--                    <div class="drag" id="drag1" draggable="true">Célula</div><br>
                    <div class="drag" id="drag2" draggable="true">Mitocondria</div><br>
                    <div class="drag" id="drag3" draggable="true">Músculo</div><br>
                    <div class="drag" id="drag4" draggable="true">Bacteria</div><br>-->
                    <br><br>
                    <div class="drag" id="drag1" draggable="true" >Célula</div><br><br><br>
                    <div class="drag" id="drag4" draggable="true" >Mitocondria</div><br><br><br>
                    <div class="drag" id="drag3" draggable="true" >Músculo</div><br><br><br>
                    <div class="drag" id="drag2" draggable="true" >Bacteria</div><br><br><br>
                </div>

                <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"></div>

                <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4" align = "center">
                    <div class="drop1" id="drop3" style="background:url('img/imagen0020.jpg'); background-size: contain; zoom: 80%; background-repeat: no-repeat"></div><br>
                    <div class="drop1" id="drop2" style="background:url('img/imagen0021.jpg'); background-size: contain; zoom: 80%; background-repeat: no-repeat"></div><br>
                    <div class="drop1" id="drop1" style="background:url('img/imagen0022.jpg'); background-size: contain; zoom: 80%; background-repeat: no-repeat"></div><br>
                    <div class="drop1" id="drop4" style="background:url('img/imagen0023.jpg'); background-size: contain; zoom: 80%; background-repeat: no-repeat"></div><br>
                </div>

                <div class="col-md-1 col-lg-1 col-xs-1 col-sm-1"></div>

            </div>
        </div>



    </body>
    <!--<script src="ddd-script.js"></script>-->
    <script>
        function DragDrop(drag, drop) {

            var drag = document.getElementById(drag);
            var drop = document.getElementById(drop);

            drag.ondragstart = function (e)
            {
                //Guardamos el id del elemento para transferirlo al elemento drop
                //Contenido es una clave que nos permitirá acceder al valor asignado
                e.dataTransfer.setData("contenido", e.target.id);
            }

            drop.ondragover = function (e) {
                //Cancelar el evento que impide que podamos soltar el elemento drag
                e.preventDefault();
            }

            drop.ondrop = function (e) {
                //Obtenemos los datos a través de la clave contenido, en este caso el id
                var id = e.dataTransfer.getData("contenido");

                if (id.substring(4) == e.target.id.substring(4)) {
                    e.target.appendChild(document.getElementById(id));
                }
            }
            
            
        }
        window.onload = function () {
            DragDrop("drag1", "drop1");
            DragDrop("drag2", "drop2");
            DragDrop("drag3", "drop3");
            DragDrop("drag4", "drop4");
        }
    </script>
</html>