



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
  <div class="card-header"><h3>Acta de Constatacion - Via Publica</h3></div>
  <div class="card-body">
    
    <form action="../controladores/constatacion_publica.php" method="post">

    <div class="form-row">
    <div class="form-group col-md-6 mx-auto"><label for="b1">Acta de Constatación N°</label><input type="text" name="b1" class="form-control text-center" placeholder="Acta de Constatacion N°"></div>
    </div>
    <hr style="color: black; background-color: black; height: 3px;">


    <div class="form-row">
    <div class="form-group col-md-12 mx-auto"><label for="b2">Mar del plata</label></div>
    <div class="form-group col-md-4 mx-auto"><input type="text" name="b2" class="form-control text-center" placeholder="N°"></div>
<div class="form-group col-md-4 mx-auto"><input type="text" name="b3" class="form-control text-center" placeholder="N°"></div>
<div class="form-group col-md-4 mx-auto"><input type="text" name="b4" class="form-control text-center" placeholder="Cuenta N°"></div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12 mx-auto"><label for="b5">Naturaleza del Hecho:</label><input type="text" name="b5" class="form-control text-center" placeholder="Naturaleza del Hecho:"></div>
    </div>


<div class="form-row">
    <div class="form-group col-md-12 mx-auto"><label for="b6">Constituye Infracción a:</label><input type="text" name="b6" class="form-control text-center" placeholder="Constituye Infracción a:"></div>
    </div>

    <div class="form-row">
 <div class="form-group col-md-10 mx-auto"><label for="b7">Lugar:</label><input type="text" name="b7" class="form-control text-center" placeholder="Lugar"></div>
 <div class="form-group col-md-2 mx-auto"><label for="b8">Hora:</label><input type="time" name="b8" class="form-control text-center" placeholder="Hora"></div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-9 mx-auto"><label for="b9">Imputado</label><input type="text" name="b9" class="form-control text-center" placeholder="Imputado"></div>
    <div class="form-group col-md-3 mx-auto"><label for="b10">DNI N°</label><input type="text" name="b10" class="form-control text-center" placeholder="DNI N°"></div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12 mx-auto"><label for="b11">Domicilio:</label><input type="text" name="b11" class="form-control text-center" placeholder="Domicilio"></div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-9 mx-auto"><label for="b12">Vehiculo</label><input type="text" name="b12" class="form-control text-center" placeholder="Vehiculo"></div>
    <div class="form-group col-md-3 mx-auto"><label for="b13">Patente</label><input type="text" name="b13" class="form-control text-center" placeholder="Patente"></div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-12 text-left"><label>
      <strong><u>CEDULA</u></strong>: a los fines previstos en el art.46 de la Ley 8751, se cita y emplaza al imputado a comparecer ante el Juzgado de Faltas, a la audiencia
    </label></div>
    <div class="form-group col-md-4 mx-auto"><label for="b14">Del dia</label><input type="text" name="b14" class="form-control text-center" placeholder="Dia"></div>
    <div class="form-group col-md-4 mx-auto"><label for="b15">de</label><input type="text" name="b15" class="form-control text-center" placeholder="Mes"></div>
    <div class="form-group col-md-4 mx-auto"><label for="b16">de</label><input type="text" name="b16" class="form-control text-center" placeholder="Año"></div>
    <div class="form-group col-md-12 text-left"><label>
    a las 9:00 hs o el dia hábil siguiente si aquel fuera sábado,domingo o feriado,bajo apercibimiento de considerar su incomparecencia injustificada como circunstancia agravante y decretar
    la clausura del establecimiento, su conduccion por la fuerza pública y/o secuestro de los elementos utilizados para la comision de la falta.Justicia Municipal de Faltas
    </label></div>

  </div>

  <label class="col-form-label col-12 ">
<pre class="text-muted" style="overflow: hidden;">_______________________________                                               ___________________________________ </pre>
<pre class="text-muted" style="overflow: hidden;">                 Firma del Imputado                                                          Firma y Sello del Inspector              </pre>
</label>



<div class="form-row">
    <div class="form-group col-md-12 mx-auto"><label ><strong><u>ACTA DE SECUESTRO</u></strong></label></div> 
  </div>

  <div class="form-row">
    <div class="form-group col-md-12 text-left"><label >
  De acuerdo a lo previsto en el art. 43 del Dec. Ley 8751, art.25 de la Ord. 5355 y en relacion al Acta de Constatación que antecede,se procede al secuestro de:
    </label></div> 
  </div>


  <div class="form-row">
  <div class="form-group col-md-12 text-center">
  <label form="b17">Se procede al secuestro de:</label>
  <textarea name="b17" rows="5"  class="form-control text-center col-md-12"  placeholder="Se procede al secuestro de:" style=" margin: auto auto;" ></textarea>
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12 mx-auto"><label for="b18">Los elementos detallados se encuentran depositados en:</label><input type="text" name="b18" class="form-control text-center" placeholder="Los elementos detallados se encuentran depositados en:"></div>

  </div>




<br>


  <label class="col-form-label col-12 " >
<pre class="text-muted" style="overflow: hidden" >_________________________________________                                                                ___________________________________             </pre>
<pre class="text-muted" style="overflow: hidden">          Firma del Imputado                                                                                Firma y Sello del Inspector              </pre>
</label>

<div class="form-row">
<div class="form-group col-md-12 text-center">
<table class="table table-bordered">
  <thead>
    <tr class="table-active">
      <th scope="col"><h2>TRIBUNAL MUNICIPAL DE FALTAS</h2>
<h5>Presentarse en: Juzgado de Turno</h5>
<h5>Garay 3136 - Mar del Plata - Batan</h5>
<h5>Horario de atención al público de 8.15hs a 14.30hs</h5>
</th></tr>
</thead>
</table>
</div>
</div>


 <!--Comienza la linea-->
 <div class="form-row">
 <div class="form-group col-md-12 text-left">
<label>Art. 46 Decreto ley 8751: "Dentro de las cuarenta y ocho horas de recibidas las actuaciones o labradas las denuncias, se citará al imputado"
para que comparezca ante el Juez de Faltas en la audiencia que señalará, al efecto de que formule su defensa y ofrezca y produzca en la
misma audiencia la prueba que intente valerse, bajo apercibimiento de hacerlo conducir por la fuerza pública y que se considere su
incomparecencia como circunstancia agravante. En la notificación se transcribirá este artículo. La audiencia se fijará para una fecha
comprendida entre los cinco (5) y diez (10) dias de la resolucion que la ordenara y se notificará al imputado con una antelación mínima de tres
(3) días."</label>
</div>
</div>
<!--Termina la linea -->


<!--Comienza la linea-->
<div class="form-row">
 <div class="form-group col-md-12 text-center"><label><h3><strong>CONTINUACION DE ACTA DE CONSTATACION Y/U OBSERVACIONES</strong></h3></label></div>
 <div class="form-group col-md-12 text-left"><label for="b19">OBSERVACIONES:</label>
 <textarea name="b19" rows="5"  class="form-control text-center"  placeholder="OBSERVACIONES" style=" margin: auto auto;" required ></textarea></div>
</div>
<!--Termina la linea -->


<label class="col-form-label col-12 " >
<pre class="text-muted" style="overflow: hidden" >_________________________________________                                                                _______________________________________             </pre>
<pre class="text-muted" style="overflow: hidden">          Firma del Imputado                                                                             Firma y Sello del Inspector actuante             </pre>
</label>

<!--Comienza la linea-->
<div class="form-row">
 <div class="form-group col-md-12 text-left"><label>&nbsp;&nbsp;&nbsp;&nbsp;Imprescindible presentarse con la siguiente documentacion:&nbsp;&nbsp;</label></div>
</div>
<!--Termina la linea -->


 <!--Comienza la linea-->
 <div class="form-row text-muted">
<div class="form-group col-md-12 text-left"><label>1. La presente cédula</label></div>
<div class="form-group col-md-12 text-left"><label>2. Documento de Identidad </label></div>
<div class="form-group col-md-12 text-left"><label>3. Certificado de Habilitacion o permiso correspondiente</label></div>
<div class="form-group col-md-12 text-left"><label>4. Libro de inspecciones</label></div>
<div class="form-group col-md-12 text-left"><label>5. En caso de sociedades, documentacion que acredite ser el representante legal</label></div>
  </div>

    <input type="submit" class="btn btn-lg btn-outline-info" value="Enviar Acta">
    </form>
  </div>
</div>

</div>



  </div>

  </div>
       
     </div><br>
</body>
</html>