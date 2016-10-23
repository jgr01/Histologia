<?php

    $puntuacion = 0;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        if ($_POST['imagenCargada'] == $_POST['respuesta'])
        {
            echo "CORRECTO";
            
            $puntuacion = $puntuacion + 1 ;
            
        }
        else 
        {
            echo "INCORRECTO";
            
        }
    }
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
            
 
</style>
    
    </head>
    <body id="body">
    <div class="container, margenes">
        <div class="row">
            <div class="col-md-3">
            
        </div>
        <form method="POST" action="adivina_quien_soy.php">
            <div class="col-md-3" >
                <img class="margenfoto" src="img\imagen0020.jpg" style="width: 300px; height: 300px;"/>
            </div>
            <div class="col-md-3" >

                Seleccione la respuesta que corresponde con la imagen:

                <br/>

                <br />
                <input id="respuesta" name="respuesta" type="radio" value="10" />Mitocondria
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="20" />Célula
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="30" />Bacteria
                <br /><br /> 
                <input id="respuesta" name="respuesta" type="radio" value="40" />Tejido
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="50" />Músculo
                <br />
                <br />
                <input type="hidden" id="imagenCargada" name="imagenCargada" value="20" />
                <input type="submit" value="Comprobar" />
                
            </div>
        </form>
        <div class="col-md-3">
            <h3>Puntuación <?php echo $puntuacion ?></h3>
        </div>
</div>
        <div class="row">
            <div class="col-md-3">
            
        </div>
        <form method="POST" action="adivina_quien_soy.php">
            <div class="col-md-3">
                <img class="margenfoto" src="img\imagen0021.jpg" style="width: 300px; height: 300px;"/>
            </div>
            <div class="col-md-3" >

                Seleccione la respuesta que corresponde con la imagen:

                <br/>

                <br />
                <input id="respuesta" name="respuesta" type="radio" value="10" />Mitocondria
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="20" />Célula
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="30" />Bacteria
                <br /><br /> 
                <input id="respuesta" name="respuesta" type="radio" value="40" />Tejido
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="50" />Músculo
                <br />
                <br />
                <input type="hidden" id="imagenCargada" name="imagenCargada" value="20" />
                <input type="submit" value="Guardar" />
                
            </div>
        </form>
        <div class="col-md-3">
           
        </div>
</div>
        <div class="row">
            <div class="col-md-3">
            
        </div>
        <form method="POST" action="adivina_quien_soy.php">
            <div class="col-md-3">
                <img class="margenfoto" src="img\imagen0022.jpg" style="width: 300px; height: 300px;"/>
            </div>
            <div class="col-md-3" >

                Seleccione la respuesta que corresponde con la imagen:

                <br/>

                <br />
                <input id="respuesta" name="respuesta" type="radio" value="10" />Mitocondria
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="20" />Célula
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="30" />Bacteria
                <br /><br /> 
                <input id="respuesta" name="respuesta" type="radio" value="40" />Tejido
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="50" />Músculo
                <br />
                <br />
                <input type="hidden" id="imagenCargada" name="imagenCargada" value="20" />
                <input type="submit" value="Guardar" />
                
            </div>
        </form>
        <div class="col-md-3">
           
        </div>
</div>
        <div class="row">
            <div class="col-md-3">
            
        </div>
        <form method="POST" action="adivina_quien_soy.php">
            <div class="col-md-3">
                <img class="margenfoto" src="img\imagen0023.jpg" style="width: 300px; height: 300px;"/>
            </div>
            <div class="col-md-3" >

                Seleccione la respuesta que corresponde con la imagen:

                <br/>

                <br />
                <input id="respuesta" name="respuesta" type="radio" value="10" />Mitocondria
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="20" />Célula
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="30" />Bacteria
                <br /><br /> 
                <input id="respuesta" name="respuesta" type="radio" value="40" />Tejido
                <br /><br />
                <input id="respuesta" name="respuesta" type="radio" value="50" />Músculo
                <br />
                <br />
                <input type="hidden" id="imagenCargada" name="imagenCargada" value="20" />
                <input type="submit" value="Guardar" />
                
            </div>
        </form>
        <div class="col-md-3">
           
        </div>
</div>
    </div>
        
        
          
       
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
