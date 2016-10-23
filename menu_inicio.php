<?php
//ahora session start continúa la sesion que creamos en login.php
if (!isset($_SESSION) ) {session_start();}
    
//leo lo que guardé en la variable Nombre
$nombre = $_SESSION['Nombre'];
?>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bienvenido Alumno</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="active"><a href="#"><span class="sr-only"></span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
<?php
//ejemplo de volcado de una query a un array en php
//creo el array, hago la consulta a la base de datos
$usuarios = array();
$consulta_usuarios = $mysqli -> query ("select * from usuario");
//saco el numero de usuarios que hay en la bbdd
$num_usuarios = $consulta_usuarios -> num_rows;

for ($i = 0; $i < $num_usuarios; $i++){
    $r = $consulta_usuarios -> fetch_array();
    $usuarios[$i][0] = $r['DNI']; 
    $usuarios[$i][1] = $r['Nombre'];
    $usuarios[$i][2] = $r['Apellido'];
    $usuarios[$i][3] = $r['email'];
}

//ahora voy a usar los datos en un ejemplo

?>

<table class="table table-condensed table-bordered" style="background-color: white">
    <?php 
    for ($i = 0; $i < $num_usuarios; $i++){
        echo '<tr>';
        echo '<td>'.$usuarios[$i][1].'</td>';
        echo '<td>'.$usuarios[$i][2].'</td>';
        echo '<td>'.$usuarios[$i][3].'</td>';
        echo '<td><img src = "imagenes/'.$usuarios[$i][0].'.jpg"></td>';
        
}
?>

</table>
    </div>