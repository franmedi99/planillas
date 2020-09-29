<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
</head>
<body>


<nav class="navbar navbar-expand-lg  bg-primary">
  <a class="navbar-brand   offset-md-5  text-light active" href="#" >
  MGP CIUDAD DE BATAN
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
    

    </ul>
    
      
    
    
  </div>
</nav>
<br>

<div class="container mx-auto text-center">
<form action="" method="post">
    <select class="custom-select col-12 " name="opciones" >

      <option value = "1">Acta de constatacion - Via Publica</option>
      <option value = "2">Acta de constatacion</option>
      <option value = "3">Acta de Inspeccion</option>
      <option value = "4">Acta de Clausura</option>
    
    </select> 
    <br><br>
    <input type="submit" class="btn btn-success btn-lg btn-block" value="Entrar">
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style> .ultimo + div{visibility:hidden;}</style>
     <div class="ultimo"></div>
</body>
</html>




<?php 
if(isset($_POST['opciones'])){
$opciones = $_POST['opciones'];

switch($opciones){
    case 1:
      ?><META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://actamdp.000webhostapp.com/app/formularios/constatacion_publica.php"><?php
    
    break;
    case 2:
    ?><META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://actamdp.000webhostapp.com/app/formularios/constatacion.php"><?php
    break;
    case 3:
       ?><META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://actamdp.000webhostapp.com/app/formularios/inspeccion.php"><?php
  break;
  case 4:
    ?><META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://actamdp.000webhostapp.com/app/formularios/clausura.php"><?php
break;

    default:
}
}
?>