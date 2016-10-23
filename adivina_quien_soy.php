<?php
$acertado = '<img src="img\acertado.jpg" style="width: 50px; height: 50px;"/>';
$fallado = '<img src="img\fallado.jpg" style="width: 50px; height: 50px;"/>';
$puntuacion = 0;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            #body{
                background-color: #a6e1ec;
            }
            .margenes{
                padding-left: 40px;
                padding-top: 20px;
            }
            .margenfoto{
                margin-bottom: 15px;
                border: solid;
            }
            img{
                width:100%;
                /*max-width:600px;*/
            }
            .pot{
                text-align: center;

            }
            .letra{
                font-size: large;
                font-style: italic
            }


        </style>

    </head>
    <body id="body">
        <br>
        <div class="container, margenes">
            <div class="row">
                <button class="btn btn-block btn-info disabled" style="font-size: large;"><h2>Seleccione la respuesta que corresponde con la imagen:</h2></button>
                <br>
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">

                </div>
                <form method="POST" action="adivina_quien_soy.php">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" >
                        <img class="margenfoto" src="img\imagen0020.jpg"/>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3"><br><br><br>

                        <input id="respuesta1" name="respuesta1" type="radio" value="10"  /><span class="letra"> Mitocondria</span>
                        <br /><br />
                        <input id="respuesta1" name="respuesta1" type="radio" value="20" /><span class="letra"> Célula</span>
                        <br /><br />
                        <input id="respuesta1" name="respuesta1" type="radio" value="30" /><span class="letra"> Bacteria</span>
                        <br /><br /> 
                        <input id="respuesta1" name="respuesta1" type="radio" value="40" /><span class="letra"> Tejido</span>
                        <br /><br />
                        <input id="respuesta1" name="respuesta1" type="radio" value="50" /><span class="letra"> Músculo</span>
                        <br />
                        <br />
                        <input type="hidden" id="imagenCargada1" name="imagenCargada1" value="20" />
                        <!--<input type="submit" value="Comprobar" />-->

                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3"><br><br><br><br><br>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                            if (isset($_POST['respuesta1'])== TRUE) {
                                if ($_POST['imagenCargada1'] == $_POST['respuesta1']) {
                                    //echo "CORRECTO";
                                    echo $acertado;
                                    $puntuacion = $puntuacion + 1;
                                } else {
                                    //echo "INCORRECTO";
                                    echo $fallado;
                                }
                            }
                            else {
                            echo $fallado;
                        }
                        }
//            echo $puntuacion 
                        ?>

                    </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">

                </div>
                <!--        <form method="POST2" action="adivina_quien_soy.php">-->
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" >
                    <img class="margenfoto" src="img\imagen0021.jpg"/>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" >


                    <br/>

                    <br />
                    <input id="respuesta2" name="respuesta2" type="radio" value="10" /><span class="letra"> Mitocondria</span>
                    <br /><br />
                    <input id="respuesta2" name="respuesta2" type="radio" value="20" /><span class="letra"> Célula</span>
                    <br /><br />
                    <input id="respuesta2" name="respuesta2" type="radio" value="30" /><span class="letra"> Bacteria</span>
                    <br /><br /> 
                    <input id="respuesta2" name="respuesta2" type="radio" value="40" /><span class="letra"> Tejido</span>
                    <br /><br />
                    <input id="respuesta2" name="respuesta2" type="radio" value="50" /><span class="letra"> Músculo</span>
                    <br />
                    <br />
                    <input type="hidden" id="imagenCargada2" name="imagenCargada2" value="30" />
                    <!--<input type="submit" value="Comprobar" />-->

                </div>
                <!--</form>-->
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3"><br><br><br><br><br>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['respuesta1']) == TRUE) {
                            if ($_POST['imagenCargada2'] == $_POST['respuesta2']) {
                                //echo "CORRECTO";
                                echo $acertado;
                                $puntuacion = $puntuacion + 1;
                            } else {
                                //echo "INCORRECTO";
                                echo $fallado;
                            }
                        }
                        else {
                            echo $fallado;
                    }
                    }
//            echo $puntuacion 
                    ?>

                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">

                </div>
                <!--<form method="POST" action="adivina_quien_soy.php">-->
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" >
                    <img class="margenfoto" src="img\imagen0022.jpg"/>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" >



                    <br/>

                    <br />
                    <input id="respuesta3" name="respuesta3" type="radio" value="10" /><span class="letra"> Mitocondria</span>
                    <br /><br />
                    <input id="respuesta3" name="respuesta3" type="radio" value="20" /><span class="letra"> Célula</span>
                    <br /><br />
                    <input id="respuesta3" name="respuesta3" type="radio" value="30" /><span class="letra"> Bacteria</span>
                    <br /><br /> 
                    <input id="respuesta3" name="respuesta3" type="radio" value="40" /><span class="letra"> Tejido</span>
                    <br /><br />
                    <input id="respuesta3" name="respuesta3" type="radio" value="50" /><span class="letra"> Músculo</span>
                    <br />
                    <br />
                    <input type="hidden" id="imagenCargada3" name="imagenCargada3" value="40" />
                    <!--<input type="submit" value="Comprobar" />-->

                </div>
                <!--</form>-->
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3"><br><br><br><br><br>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['respuesta1']) == TRUE) {
                            if ($_POST['imagenCargada3'] == $_POST['respuesta3']) {
                                //echo "CORRECTO";
                                echo $acertado;
                                $puntuacion = $puntuacion + 1;
                            } else {
                                //echo "INCORRECTO";
                                echo $fallado;
                            }
                        }
                        else {
                            echo $fallado;
                    }
                    }
//            echo $puntuacion 
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">

                </div>
                <!--<form method="POST" action="adivina_quien_soy.php">-->
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" >
                    <img class="margenfoto" src="img\imagen0023.jpg"/><br><br>

                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" >



                    <br/>

                    <br />
                    <input id="respuesta4" name="respuesta4" type="radio" value="10" /><span class="letra"> Mitocondria</span>
                    <br /><br />
                    <input id="respuesta4" name="respuesta4" type="radio" value="20" /><span class="letra"> Célula</span>
                    <br /><br />
                    <input id="respuesta4" name="respuesta4" type="radio" value="30" /><span class="letra"> Bacteria</span>
                    <br /><br /> 
                    <input id="respuesta4" name="respuesta4" type="radio" value="40" /><span class="letra"> Tejido</span>
                    <br /><br />
                    <input id="respuesta4" name="respuesta4" type="radio" value="50" /><span class="letra"> Músculo</span>
                    <br />
                    <br />
                    <input type="hidden" id="imagenCargada4" name="imagenCargada4" value="50" /><br><br>


                </div>

                <!--                </form>-->
                <!--</form>-->
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3"><br><br><br><br><br>



                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['respuesta1']) == TRUE) {
                            if ($_POST['imagenCargada4'] == $_POST['respuesta4']) {
                                //echo "CORRECTO";
                                echo $acertado;
                                $puntuacion = $puntuacion + 1;
                            } else {
                                //echo "INCORRECTO";
                                echo $fallado;
                            }
                        } else {
                            echo $fallado;
                        }
                    }
//            echo $puntuacion 
                    ?>
                </div>
            </div>
        </div>
        <div style="text-align: center; font-size: 30px ">  
            <input class="bottom btn-success" type="submit" value="Comprobar" style="border-bottom-color: #0f0f0f; font-size: larger; text-align: center;" /><br><br>

        </div>
    </form>


</body>
<?php
//    $pregunta1 = $_POST['imagen'];
//    $pregunta2 = $_POST['imagen1'];
//    $pregunta3 = $_POST['imagen2'];
//    $pregunta4 = $_POST['imagen3'];
//    
//    $totalCorrect = 0;
//
//    if ($pregunta1 == "B") { $totalCorrect++; }
//    if ($pregunta2 == "A") { $totalCorrect++; }
//    if ($pregunta3 == "C") { $totalCorrect++; }
//    if ($pregunta4 == "A") { $totalCorrect++; }
//    if ($answer5) { $totalCorrect++; }
//
//    echo "<div id='results'>$totalCorrect / 5 correct</div>";
?>
</html>
