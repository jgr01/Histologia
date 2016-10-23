<?php ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <script src="js/jquery-3.1.0.min.js"></script>


        <style>
            .btzoom4 {
                margin-top: 30px;
                margin-left: 10px;

            }
            .foto {
                padding: 30px;
                margin-left: 10px;
            }
            
        </style>
        <script>
        
        

        
        </script>
    </head>
    <body>
        <form id="form1" name="form10" method="POST" action="foto_zoom.php" >
        
            <div class="col-md-1 col-lg-1 col-xs-1 col-sm-1 btzoom4">
                <input  type="submit"  name="boton" value="4 x" /></br></br>
                <input  type="submit"  name="boton1" value="10x" /></br></br>
            <input  type="submit"  name="boton2" value="40x" />
            </div>
        
            
<?php
            
            if (isset($_POST['boton'])){
                ?>        
                <div class="foto"><img  id="imagen4x"  src="img/imagen0020.jpg" style="zoom: 20%; margin-left: 20px"></div>
                <?php
            }

            
            if (isset($_POST['boton1'])){
                ?>        
                <div class="foto"><img id="imagen10x"  src="img/imagen0020.jpg" style="zoom: 30%; margin-left: 20px"></div>
                <?php
            }

            
            if (isset($_POST['boton2'])){
                ?>        
                <div class="foto"><img id="imagen40x"  src="img/imagen0020.jpg" style="zoom: 50%; margin-left: 20px"></div>
                <?php
            }
?>
            
        </form>
    </body>

</html>