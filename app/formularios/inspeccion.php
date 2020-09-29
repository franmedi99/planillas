



<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Acta de Constatacion</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<br>
 


<div  style=" margin-left:2%; margin-right:2%; margin-top:1%;" >
<div class="row align-items-center">
<div class="row justify-content-center mx-auto col-md-12 align-items-center ">
<div class="card border-primary mb-12  col-md-12 mx-auto text-center offset-md-1">
  <div class="card-header"><h3>Acta de Inspeccion</h3></div>
  <div class="card-body">
    
    <form action="../controladores/inspeccion.php" method="post">

    <div class="form-row">
    <div class="form-group col-md-6 mx-auto"><label for="acta1">ACTA DE INSPECCION N°</label><input type="text" name="a1" class="form-control text-center" placeholder="ACTA DE INSPECCION N°"></div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-4 mx-auto"><label for="acta1">Opciones</label>
    <select class="custom-select form-control text-center" name="a2" class="form-control text-center">
  <option value = "Funcionamiento">FUNCIONAMIENTO</option>
  <option value = "Informe">INFORME</option>
  <option value = "Expediente">EXPEDIENTE</option>
  <option value = "Nota">NOTA</option>
  <option value = "Denuncia">DENUNCIA</option>
  <option value = "Clausura">CLAUSURA</option>
</select></div>
<div class="form-group col-md-4 mx-auto"><label for="acta1">N°</label><input type="text" name="a3" class="form-control text-center" placeholder="N°"></div>
<div class="form-group col-md-4 mx-auto"><label for="acta1">Cuenta N°</label><input type="text" name="a4" class="form-control text-center" placeholder="Cuenta N°"></div>
  </div>

<hr style="color: black; background-color: black; height: 3px;">

<div class="form-row">
    <div class="form-group col-md-4 mx-auto"><label for="a5">Fecha</label><input type="text" name="a5" class="form-control text-center" placeholder="Fecha"></div>
    <div class="form-group col-md-4 mx-auto"><label for="a6">SIENDO LAS</label><input type="time" name="a6" class="form-control text-center" placeholder="SIENDO LAS"></div>
    <div class="form-group col-md-4 mx-auto"><label for="a7">Rubro</label><input type="text" name="a7" class="form-control text-center" placeholder="Rubro"></div>
    </div>

    <div class="form-row">
 <div class="form-group col-md-6 mx-auto"><label for="a8">Domicilio</label><input type="text" name="a8" class="form-control text-center" placeholder="Domicilio"></div>
 <div class="form-group col-md-6 mx-auto"><label for="a12">Firma</label><input type="text" name="a12" class="form-control text-center" placeholder="Firma"></div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-8 mx-auto"><label for="a9">ATENDIDO POR</label><input type="text" name="a9" class="form-control text-center" placeholder="Atendido por"></div>
    <div class="form-group col-md-4 mx-auto"><label for="a10">DNI N°</label><input type="text" name="a10" class="form-control text-center" placeholder="DNI N°"></div>
      
  </div>


  <hr style="color: black; background-color: black; height: 3px;">

  <label form="32">Al momento de la inspección, se verifica:</label>
  <textarea name="a11" rows="5"  class="form-control text-center col-xl-10"  placeholder="Al momento de la inspección, se verifica:" style=" margin: auto auto;" ></textarea>

  <label class="col-form-label col-12 ml-auto">Previa lectura de este acta, se invita a firmar y recibir copia a quien atiende este procedimiento</label>


  <label class="col-form-label col-12 ">
<pre class="text-muted">_________________________________________                                   __________________________                              ___________________________________             </pre>
<pre class="text-muted">FIRMA Y CARGO                                                              SELLO                                                    INSPECTOR               </pre>
</label>




    <input type="submit" class="btn btn-lg btn-outline-info" value="Enviar Acta">
    </form>
  </div>
</div>

</div>



  </div>

  </div>

         <style> .ultimo + div{visibility:hidden;}</style>
     <div class="ultimo"></div>
</body>
</html>