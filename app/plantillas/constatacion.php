<?php session_start();
$_SESSION['1'] =$_POST['1'];
$_SESSION['2'] =$_POST['2'];
$_SESSION['3'] =$_POST['3'];
$_SESSION['4'] =$_POST['4'];
$_SESSION['5'] =$_POST['5'];
$_SESSION['6'] =$_POST['6'];
$_SESSION['7'] =$_POST['7'];
$_SESSION['8'] =$_POST['8'];
$_SESSION['9'] =$_POST['9'];
$_SESSION['10'] =$_POST['10'];
$_SESSION['11'] =$_POST['11'];
$_SESSION['12'] =$_POST['12'];
$_SESSION['13'] =$_POST['13'];
$_SESSION['14'] =$_POST['14'];
$_SESSION['15'] =$_POST['15'];
$_SESSION['16'] =$_POST['16'];
$_SESSION['17'] =$_POST['17'];
$_SESSION['18'] =$_POST['18'];
$_SESSION['20'] =$_POST['20'];
$_SESSION['21'] =$_POST['21'];
$_SESSION['22'] =$_POST['22'];
$_SESSION['23'] =$_POST['23'];
$_SESSION['24'] =$_POST['24'];
$_SESSION['25'] =$_POST['25'];
$_SESSION['26'] =$_POST['26'];
$_SESSION['27'] =$_POST['27'];
$_SESSION['28'] =$_POST['28'];
$_SESSION['29'] =$_POST['29'];
$_SESSION['30'] =$_POST['30'];
$_SESSION['31'] =$_POST['31'];
$_SESSION['32'] =$_POST['32'];
$_SESSION['33'] =$_POST['33'];
$_SESSION['34'] =$_POST['34'];
$_SESSION['35'] =$_POST['35'];
$_SESSION['36'] =$_POST['36'];
$_SESSION['37'] =$_POST['37'];
$_SESSION['38'] =$_POST['38'];
$_SESSION['39'] =$_POST['39'];
$_SESSION['40'] =$_POST['40'];
$_SESSION['41'] =$_POST['41'];
$_SESSION['42'] =$_POST['42'];
$_SESSION['45'] =$_POST['45'];
//

function getPlantilla(){
$plantilla =  '<body>
  
    <div id="logo"style="position: absolute;" >
      <img src="../img/logo.png" class="logo" style="width:250px; height:125px;">
      <img src="../img/logo2.png" class="logo" style="width:250px; height:50px; margin-left:400px; margin-bottom:30px; margin-top:-80px;">
    </div>
    <div  style="position:absolute; margin-top:-0px; margin-left:300px;"> <strong> Acta de Constatacion N° '.$_SESSION['1'].'</strong></div>

  <div class="requisitos">
  <p> Localidad&nbsp;&nbsp;'.$_SESSION['2'].'&nbsp;fecha&nbsp;'.$_SESSION['3'].'&nbsp;&nbsp;hora&nbsp;&nbsp;'.$_SESSION['4'].'&nbsp;<br>
  Lugar del hecho&nbsp;'.$_SESSION['5'].'&nbsp;N°&nbsp;'.$_SESSION['6'].'&nbsp;Local&nbsp;'.$_SESSION['7'].'<br>
  imputado&nbsp;&nbsp;'.$_SESSION['8'].'&nbsp;&nbsp;DNI N°&nbsp;&nbsp;'.$_SESSION['9'].'&nbsp;&nbsp; <br>
  Domicilio Particular&nbsp;&nbsp;'.$_SESSION['10'].'&nbsp;&nbsp;Responsable&nbsp;&nbsp;'.$_SESSION['11'].'<br>
  DNI N°&nbsp;&nbsp;'.$_SESSION['12'].'&nbsp;&nbsp;En calidad de&nbsp;&nbsp;'.$_SESSION['13'].'<br>
  Nombre de fantasia del comercio&nbsp;&nbsp;'.$_SESSION['14'].'&nbsp;&nbsp;Rubro&nbsp;&nbsp;'.$_SESSION['15'].'<br>
   Establecimiento de tipo <strong>COMERCIAL/INDUSTRIAL</strong> -  Habilitación: '.$_SESSION['16'].' Expte. N° '.$_SESSION['17'].'<br>
  N° de Cuenta '.$_SESSION['18'].' &nbsp; Certificado de Salud(Dec. N°514/91)&nbsp;&nbsp;'.$_SESSION['20'].'&nbsp;&nbsp; - N° de elementos contra<br>
  INCENDIOS&nbsp;&nbsp;'.$_SESSION['21'].' Actualizacos '.$_SESSION['22'].'. El local cumple con las condiciones de habilitación según los<br>
  planos que exhibe &nbsp;'.$_SESSION['23'].' &nbsp;(Art. 35 Ord. 5355) <strong>REUNE CONDICIONES DE SEGURIDAD '.$_SESSION['24'].'</strong><br>
  <strong>REUNE CONDICIONES DE HIGIENE '.$_SESSION['25'].' - REUNE CONDICIONES DE SALUBRIDAD &nbsp;'.$_SESSION['26'].'</strong> <br> </p><br>
  <h5><strong>CONCURRE POR DENUNCIA&nbsp;&nbsp;'.$_SESSION['27'].' - N°</strong>&nbsp;&nbsp;'.$_SESSION['28'].'&nbsp;&nbsp;Apellido y Nombre&nbsp;&nbsp;'.$_SESSION['29'].'</h5><br>
  <h6>Domicilio&nbsp;&nbsp;'.$_SESSION['30'].'&nbsp;&nbsp;<strong>DNI N°</strong>&nbsp;&nbsp;'.$_SESSION['31'].'</h6><br>
  <h6><strong>Ord. 5355 Art 10°.-</strong>En los casos de denuncias el inspector debera constatar el hecho u omision punible y consignar este asi como el nombre</h6>
  <h6>y el domicilio del denunciante en el acta de constatacion sin perjuicio de cumplimentar las otras formalidades exigidas por el articulo 2°.</h6>
  <strong>ASIMISMO SE CONSTATA</strong>
  <h6>(Naturaleza y circunstancias del hecho u omisión y caracteristicas de los elementos empleados para se omision del hecho u omision punible).</h6>
  <table style="width:100%;"><tr><td>'.$_SESSION['32'].'
  </td></tr></table>

  <br>
  <h6>Disposicion legal presuntamente infringida '.$_SESSION['33'].'</h6>
  <h6>Conforme a las previsiones contenidas en el art. 17 de la ordenanza 5355 se deja en expresa constancia que se han adopado las siguientes</h6>
  <h6> medidas preventivas, segun el resultado del acta agregada a la presente.</h6>
  <h6>No siendo para mas se firman tres actas de un mismo tenor y a un solo efecto en la fecha señalada "Ut supra", quedando el duplicado en</h6>
  <h6>poder del firmante.</h6>

</div>

<div class="absoluta">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cedula

  
<h6><p style="text-align: justify;"> A los fines previstos en el art. 46 del Decreto Ley 8751, se cita y emplaza al imputado a comparecer ante el JUZGADO MUNICIPAL DE
FALTAS la audiencia del dia &nbsp;&nbsp;'.$_SESSION['34'].'&nbsp;&nbsp;de&nbsp;&nbsp;'.$_SESSION['35'].'&nbsp;&nbsp;de&nbsp;&nbsp;'.$_SESSION['36'].'&nbsp; a las 8:15 horas, o el dia habil siguiente si aquel fuera feriado,
bajo apercibimiento de considerar su incomparecencia injustificada como circunstancia agravante y decretar la clausura del establecimiento,
su conduccion por la fuerza publica y/o secuestro de los elementos utilizados para la comision de la falta, Notifíquese. Justicia Municipal de faltas
Art. 46 Decreto ley 8751: "Dentro de las cuarenta y ocho horas de recibidas las actuaciones o labradas las denuncias, se citará al imputado"
para que comparezca ante el Juez de Faltas en la audiencia que señalará, al efecto de que formule su defensa y ofrezca y produzca en la
misma audiencia la prueba que intente valerse, bajo apercibimiento de hacerlo conducir por la fuerza pública y que se considere su
incomparecencia como circunstancia agravante. En la notificación se transcribirá este artículo. La audiencia se fijará para una fecha
comprendida entre los cinco (5) y diez (10) dias de la resolucion que la ordenara y se notificará al imputado con una antelación mínima de tres
<br><br>
(3) días."<p></h6>
_________________________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___________________________________
<h6> Firma del Imputado y/o persona presente en este acto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firma y sello del Inspector actualmente</h6> 
<br>
<strong><h6> Testigos:</h6></strong>
<h6>Nombre y Apellido&nbsp;&nbsp;'.$_SESSION['37'].'</h6>
<h6>DNI N°&nbsp;&nbsp;'.$_SESSION['38'].'&nbsp;&nbsp;Domicilio&nbsp;&nbsp;'.$_SESSION['39'].'</h6>
<h6>Nombre y Apellido&nbsp;&nbsp;'.$_SESSION['40'].'</h6>
<h6>DNI N°&nbsp;&nbsp;'.$_SESSION['41'].'&nbsp;&nbsp;Domicilio&nbsp;&nbsp;'.$_SESSION['42'].'</h6>
<h6>No se detallan testigos por &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No haberlos&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Negarse los mismos a portar datos<input type="checkbox"></h6>
<table style="width:100%;"><tr><td><h2>TRIBUNAL MUNICIPAL DE FALTAS</h2>
<h5>Presentarse en: Juzgado de Turno</h5>
<h5>Garay 3136 - Mar del Plata - Batan</h5>
<h5>Horario de atención al público de 8.15hs a 14.30hs</h5>
</td></tr></table>
<h4>CONTINUACIÓN DE ACTA DE CONSTATACIÓN Y/U OBSERVACIONES</h4>

</div>
</div>
<table style="width:100%;"><tr><td>OBSERVACIONES:<p style="text-align: justify;"> '.$_SESSION['45'].'</p>
</td></tr></table><br><br>
_______________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______________________________________<br>
Firma del imputado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firma y sello del Inspector actualmente

<h4>Imprescindible presentarse con la siguiente documentacion:</h4>
<h6>1. La presente cédula <input type="checkbox" ></h6>
<h6>2. Certificado de Habilitación o permiso correspondiente <input type="checkbox"></h6>
<h6>3. Libro de inspecciones <input type="checkbox" ></h6>
<h6>4. En caso de sociedades, documentación que acredite ser el representante legal <input type="checkbox"></h6>
 
</body>';
  
  return $plantilla;
}
