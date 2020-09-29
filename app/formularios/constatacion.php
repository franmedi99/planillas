



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
  <div class="card-header"><h3>Acta de Constatacion</h3></div>
  <div class="card-body">
    <form action="../controladores/constatacion.php" method="post" >

           <!--Empieza la linea -->
   <div class="form-row">
     <div class="form-group col-md-6 text-center mx-auto">
    <label for="1"><strong>Acta de Constatacion N°</strong></label>

      <input type="text" name="1" class="form-control text-center col-6 mx-auto " placeholder="Acta de Constatacion N°" required/>
      </div>
    </div>
    <!--Termina la linea -->




       <div class="form-row ">
      <!-- <div class="form-group col-md-4 text-center "><label for="2">Localidad</label>--><input type="text" name="2" class="form-control text-center" value="Mar del Plata" placeholder="Localidad" hidden/> <!-- </div> -->
      <div class="form-group col-md-6 text-center "><label for="3">Fecha</label> <input type="text"  name="3"  class=" form-control text-center" placeholder="Fecha" required/></div>
      <div class="form-group col-md-6 text-center "><label for="4">Hora</label> <input type="time" name="4" class=" form-control text-center" placeholder="Hora" required/></div>
  </div>
      
  <div class="form-row ">
      <div class="form-group col-md-7 text-center"><label for="5">Lugar del hecho</label><input type="text" name="5" class="form-control text-center" placeholder="Lugar del Hecho" required/></div>
      <div class="form-group col-md-2 text-center"><label for="6">N°</label> <input type="text" name="6" class=" form-control text-center" placeholder="N°" required/></div>
      <div class="form-group col-md-3 text-center"><label for="7">Local</label> <input type="text" name="7" class="form-control text-center" placeholder="Local" required/></div>
     </div>

     <div class="form-row ">
      <div class="form-group col-md-8 text-center"><label for="8">Imputado</label><input type="text" name="8" class="form-control text-center" placeholder="Lugar del Hecho" required/></div>
      <div class="form-group col-md-4 text-center"><label for="9">DNI N°</label> <input type="text" name="9" class=" form-control text-center" placeholder="DNI N°" required/></div>
     </div>

     <div class="form-row ">
      <div class="form-group col-md-8 text-center"><label for="10">Domicilio Particular</label><input type="text" name="10" class="form-control text-center" placeholder="Domicilio Particular" required/></div>
      <div class="form-group col-md-4 text-center"><label for="11">Responsable</label> <input type="text" name="11" class=" form-control text-center" placeholder="Responsable" required/></div>
     </div>


     <div class="form-row ">
      <div class="form-group col-md-4 text-center"><label for="12">DNI N°</label><input type="text" name="12" class="form-control text-center" placeholder="DNI N°" required/></div>
      <div class="form-group col-md-8 text-center"><label for="13">En calidad de</label> <input type="text" name="13" class=" form-control text-center" placeholder="En calidad de" required/></div>

     </div>

     <div class="form-row ">
      <div class="form-group col-md-12 text-center "><label for="14">Nombe de Fantasía del comercio</label><input type="text" name="14" class="form-control text-center" placeholder="Nombre de fantasía del comercio" required/></div>
      <div class="form-group col-md-12 text-center "><label for="15">Rubro</label> <input type="text" name="15" class=" form-control text-center" placeholder="Rubro" required/></div>

     </div>
  
     <!--Empieza la linea -->
   <div class="form-row">
    <div class="form-group col-md-6 text-center"> <label for="16"> Establecimiento de tipo <strong>COMERCIAL/INDUSTRIAL</strong> - Habilitación:&nbsp;&nbsp;</label>
    <select class="custom-select" name="16" >
      <option value = "SI">SI</option>
      <option value = "NO">NO</option>
    </select>
    </div>
    <div class="form-group col-md-6 text-center"><label for="17">Expte.&nbsp;N°&nbsp;&nbsp;</label><input type="text" name="17" class="form-control text-center" placeholder="Expte. N°"/></div>
  </div>
    <!--Termina la linea -->


    <!--Comienza la linea-->
    <div class="form-row">
      <div class="form-group col-md-6 text-center"><label for="18"> N° de cuenta:</label><input type="text" name="18" class="form-control text-center" placeholder="N° de cuenta"/></div>
      <div class="form-group col-md-6 text-center"><label for="20">Certificado de Salud(Dec. N° 514/91)&nbsp;&nbsp;</label>
      <select class="form-control text-center" name="20">
      <option value = "SI">SI</option>
      <option value = "NO">NO</option>
    </select> 
    </div>
    
    </div>
  

 
  <!--Termina la linea -->

  <!--Comienza la linea-->
<div class="form-row">
  <div class="form-group col-md-6 text-center"><label for="21">N° de elementos contra INCENDIOS</label><input type="text" name="21" class="form-control text-center" placeholder="Elementos contra incendios"/></div>
  <div class="form-group col-md-6 text-center"><label for="22">Actualizados&nbsp;&nbsp;</label>
    <select class="form-control text-center" name="22">
      <option value = "SI">SI</option>
      <option value = "NO">NO</option>
    </select> </div>
    
</div>
 <!--Termina la linea -->

 <!--Comienza la linea-->
 <div class="form-row">
<div class="form-group col-md-6 text-center"><label for="23">El local cumple con las condiciones de habilitación según los planos que exhibe&nbsp;&nbsp;</label>
    <select class="form-control text-center" name="23">
      <option selected ="" value="">Opción</option>
      <option value = "SI">SI</option>
      <option value = "NO">NO</option>
    </select></div>
<div class="form-group col-md-6 text-center"><label for="24">&nbsp;&nbsp;(Art. 35 Ord. 5355) <strong>REUNE CONDICIONES DE SEGURIDAD&nbsp;&nbsp;</strong></label>
    <select class="form-control text-center" name="24">
      <option value = "SI">SI</option>
      <option value = "NO">NO</option>
    </select> 
    </div>

</div>
<!--Termina la linea -->

 <!--Comienza la linea-->
 
 <div class="form-row">
   <div class="form-group col-md-6 text-center"><label for="25"><strong>REUNE CONDICIONES DE HIGIENE</strong>&nbsp;&nbsp;</label>
    <select class="form-control text-center custom-select" name="25">
      <option value = "SI">SI</option>
      <option value = "NO">NO</option>
    </select>
   </div>
   <div class="form-group col-md-6 text-center"><label for="26">&nbsp;&nbsp;(Art. 35 Ord. 5355) <strong>REUNE CONDICIONES DE SALUBRIDAD&nbsp;&nbsp;</strong></label>
    <select class="form-control text-center" name="26">
      <option value = "SI">SI</option>
      <option value = "NO">NO</option>
    </select> 
</div>


</div>
<!--Termina la linea -->




 <!--Comienza la linea-->
 <div class="form-row">
   <div class="form-group col-md-4 text-center"><label for="27"><strong>CONCURRE POR DENUNCIA</strong>&nbsp;&nbsp;</label>
    <select class="form-control text-center" name="27">
      <option value = "SI">SI</option>
      <option value = "NO">NO</option>
    </select></div>
    <div class="form-group col-md-4 text-center"><label for="28">&nbsp;&nbsp;N°&nbsp;&nbsp;</label>
   <input type="text" name="28" class="form-control text-center" placeholder="Denuncian N°"/>
  </div>
  <div class="form-group col-md-4 text-center"><label for="29">&nbsp;&nbsp;Apellido y Nombre&nbsp;&nbsp;</label>
   <input type="text" name="29" class="form-control text-center" placeholder="Apellido y Nombre"/></div>
</div>
<!--Termina la linea -->

 <!--Comienza la linea-->

<div class="form-row">
 <div class="form-group col-md-6 text-center"><label for="30"><strong>Domicilio</strong>&nbsp;&nbsp;</label><input type="text" name="30" class="form-control text-center" placeholder="Domicilio"/></div>
 <div class="form-group col-md-6 text-center"><label for="31">&nbsp;&nbsp;DNI N°&nbsp;&nbsp;</label>  <input type="text" name="31" class="form-control text-center" placeholder="DNI N°"/></div>
</div>
<!--Termina la linea -->

 <!--Comienza la linea-->
 <div class="form-row">
 <div class="form-group col-md-12 text-left"><label><strong>Ord. 5355 Art 10°.-</strong>En los casos de denuncias el inspector debera constatar el hecho u omision punible y consignar este asi como el nombre 
  y el domicilio del denunciante en el acta de constatacion sin perjuicio de cumplimentar las otras formalidades exigidas por el articulo 2°.</label></div>
  </div>
<!--Termina la linea -->

 <!--Comienza la linea-->
 <div class="form-row">
 <div class="form-group col-md-12 text-center"><label for="32" ><strong>ASIMISMO SE CONSTATA </strong> (Naturaleza y circunstancias del hecho u omisión y caracteristicas de los elementos empleados para se omision del hecho u omision punible).</label>
<textarea name="32" rows="5"  class="form-control text-center col-xl-10"  placeholder="ASIMISMO SE CONSTATA" style=" margin: auto auto;" required ></textarea></div>
</div>
<!--Termina la linea -->

 <!--Comienza la linea-->
 <div class="form-row">
 <div class="form-group col-md-12 text-center"><label for="33">Disposicion legal presuntamente infringida:&nbsp;&nbsp;</label><input type="text" name="33" class="form-control text-center" placeholder="Disposicion legal presuntamente infringida"/></div>
 </div>
<!--Termina la linea -->


 <!--Comienza la linea-->
 <div class="form-row">
 <div class="form-group col-md-12 text-left">
  <label>Conforme a las previsiones contenidas en el art. 17 de la ordenanza 5355 se deja en expresa constancia que se han adopado las siguientes medidas preventivas, segun el resultado del acta agregada a la presente. No siendo para mas se firman tres actas de un mismo tenor y a un solo efecto en la fecha señalada "Ut supra", quedando el duplicado en poder del firmante. </label></div>
  </div>
<!--Termina la linea -->
<hr>
<!--Empieza la linea -->

           <div class="form-row">
           <div class="form-group col-md-12 text-center"><label><strong><u>CEDULA</u></strong></label></div>
           </div>
    <!--Termina la linea -->


 <!--Comienza la linea-->
 <div class="form-row">
 <div class="form-group col-md-12 text-left"><label">A los fines previstos en el art. 46 del Decreto Ley 8751, se cita y emplaza al imputado a comparecer ante el JUZGADO MUNICIPAL DE FALTAS la audiencia el&nbsp;&nbsp;</label></div>
 <div class="form-group col-md-4 text-center"><label for="34">Dia</label> <input type="number" name="34" class="form-control text-center" placeholder="Dia"/></div>
 <div class="form-group col-md-4 text-center"><label for="35">Del Mes</label><input type="text" name="35" class="form-control text-center" placeholder="Mes"/></div>
 <div class="form-group col-md-4 text-center"><label class="36">&nbsp;&nbsp;del Año&nbsp;&nbsp;</label><input type="number" name="36" class="form-control text-center" placeholder="Año"/></div>
 <div class="form-group col-md-12 text-left"><label>A las 8:15 horas, o el dia habil siguiente si aquel fuera feriado,
bajo apercibimiento de considerar su incomparecencia injustificada como circunstancia agravante y decretar la clausura del establecimiento,
su conduccion por la fuerza publica y/o secuestro de los elementos utilizados para la comision de la falta, Notifíquese. Justicia Municipal de Faltas.</label>
</div>
</div>
<!--Termina la linea -->

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


 <pre class="text-muted form-row form-group col-md-12 "  style="overflow:hidden;">                      ________________________________________________                                                        ________________________________________     </pre>
<pre class="text-muted form-row form-group col-md-12 "  style="overflow:hidden;">                        Firma del Imputado y/o persona presente en este acto                                                    Firma y sello del Inspector actualmente</pre> 

<!--Termina la linea -->


<!--Comienza la linea-->


<div class="form-row">
 <div class="form-group col-md-12 text-center"><label for="37">Nombre y Apellido&nbsp;&nbsp;</label><input type="text" name="37" class="form-control text-center" placeholder="Nombre y Apellido"/></div>
</div>
<!--Termina la linea -->

 <!--Comienza la linea-->
 <div class="form-row">
 <div class="form-group col-md-4 text-center"><label for="38">DNI N°&nbsp;&nbsp;</label><input type="text" name="38" class="form-control text-center" placeholder="DNI N°"/>                 </div>
 <div class="form-group col-md-8 text-center"><label for="39">&nbsp;&nbsp;Domicilio&nbsp;&nbsp;</label><input type="text" name="39" class="form-control text-center" placeholder="Domicilio"/></div>    
</div>
<!--Termina la linea -->

<!--Comienza la linea-->


<div class="form-row">
 <div class="form-group col-md-12 text-center"><label for="40">Nombre y Apellido&nbsp;&nbsp;</label><input type="text" name="40" class="form-control text-center" placeholder="Nombre y Apellido"/></div>
</div>
<!--Termina la linea -->

 <!--Comienza la linea-->
 <div class="form-row">
 <div class="form-group col-md-4 text-center"><label for="41">DNI N°&nbsp;&nbsp;</label><input type="text" name="41" class="form-control text-center" placeholder="DNI N°"/>                 </div>
 <div class="form-group col-md-8 text-center"><label for="42">&nbsp;&nbsp;Domicilio&nbsp;&nbsp;</label><input type="text" name="42" class="form-control text-center" placeholder="Domicilio"/></div>    
</div>
<!--Termina la linea -->


 <!--Comienza la linea-->
 <div class="form-row">
 <div class="form-group col-md-12 text-center"><label for="43">No se detallan testigos por </label></div>
 <div class="form-group col-md-6 text-center"><label for="43"> No haberlos</label><input type="checkbox" name="43" class="form-control text-center" disabled/></div>
 <div class="form-group col-md-6 text-center"><label for="43">Negarse los mismos a aportar datos</label><input type="checkbox" name="43" class="form-control text-center" disabled/></div>
</div>
<!--Termina la linea -->


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
 <div class="form-group col-md-12 text-center"><label for="45"><strong>CONTINUACION DE ACTA DE CONSTATACION Y/U OBSERVACIONES</strong></label></div>
 <textarea name="45" rows="5"  class="form-control text-center"  placeholder="CONTINUACION DE ACTA DE CONSTATACION Y/U OBSERVACIONES" style=" margin: auto auto;" required ></textarea>
</div>
<!--Termina la linea -->

<br><br>


<pre class="text-muted form-row form-group col-md-12 "  style="overflow:hidden;">                      ________________________________________________                                                        ________________________________________     </pre>
<pre class="text-muted form-row form-group col-md-12 "  style="overflow:hidden;">                               Firma del Imputado                                                                             Firma y sello del Inspector actualmente</pre> 


 <!--Comienza la linea-->
 <div class="form-row">
 <div class="form-group col-md-12 text-left"><label>&nbsp;&nbsp;&nbsp;&nbsp;Imprescindible presentarse con la siguiente documentacion:&nbsp;&nbsp;</label></div>
</div>
<!--Termina la linea -->


 <!--Comienza la linea-->
<div class="form-row text-muted">
<div class="form-group col-md-12 text-left"><label>1. La presente cédula</label></div>
<div class="form-group col-md-12 text-left"><label>2. Certificado de Habilitación o permiso correspondiente </label></div>
<div class="form-group col-md-12 text-left"><label>3. Libro de inspecciones</label></div>
<div class="form-group col-md-12 text-left"><label>4. En caso de sociedades, documentación que acredite ser el representante legal</label></div>
  </div>


   <br> <input type="submit" name="publicar" class="btn btn-lg btn-outline-dark form-group col-md-8" value="Enviar acta de constatación"  style=" margin: auto auto;"> <br>
        </form>
  </div>
</div>

</div>



  </div>

  </div>
       
     </div><br>
         <style> .ultimo + div{visibility:hidden;}</style>
     <div class="ultimo"></div>
</body>
</html>