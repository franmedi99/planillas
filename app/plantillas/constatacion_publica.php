<?php session_start();
$_SESSION['b1'] =$_POST['b1'];
$_SESSION['b2'] =$_POST['b2'];
$_SESSION['b3'] =$_POST['b3'];
$_SESSION['b4'] =$_POST['b4'];
$_SESSION['b5'] =$_POST['b5'];
$_SESSION['b6'] =$_POST['b6'];
$_SESSION['b7'] =$_POST['b7'];
$_SESSION['b8'] =$_POST['b8'];
$_SESSION['b9'] =$_POST['b9'];
$_SESSION['b10'] =$_POST['b10'];
$_SESSION['b11'] =$_POST['b11'];
$_SESSION['b12'] =$_POST['b12'];
$_SESSION['b13'] =$_POST['b13'];
$_SESSION['b14'] =$_POST['b14'];
$_SESSION['b15'] =$_POST['b15'];
$_SESSION['b16'] =$_POST['b16'];
$_SESSION['b17'] =$_POST['b17'];
$_SESSION['b18'] =$_POST['b18'];
$_SESSION['b19'] =$_POST['b19'];




//<u></u>

function getPlantilla(){
$plantilla =  '<body>
  
    <div id="logo"style="position: absolute;" >
      <img src="../img/logo.png" class="logo" style="width:250px; height:125px;">
      <img src="../img/logo2.png" class="logo" style="width:250px; height:50px; margin-left:400px; margin-bottom:30px; margin-top:-80px;">
    </div>
    <div  style="position:absolute; margin-top:-0px; margin-left:300px;"> <strong> Acta de Constatacion N° '.$_SESSION['b1'].'</strong></div>
    <br><hr style="color: black; height: 3px;">
  <div >
  <p style="position:absolute; margin-left:70%"> Mar del Plata&nbsp;&nbsp;'.$_SESSION['b2'].'/'.$_SESSION['b3'].'/'.$_SESSION['b4'].'  </p><br>
  Naturaleza del hecho:&nbsp;'.$_SESSION['b5'].'<br>
 Constituye Infracción a:&nbsp;'.$_SESSION['b6'].'<br>
 Lugar:&nbsp;'.$_SESSION['b7'].'&nbsp;Hora:&nbsp;'.$_SESSION['b8'].'<br>
 Imputado:&nbsp;'.$_SESSION['b9'].'</u>&nbsp;DNI:&nbsp;'.$_SESSION['b10'].' <br>
  Domicilio:&nbsp;'.$_SESSION['b11'].'<br>
  Vehículo:&nbsp;'.$_SESSION['b12'].'&nbsp;Patente:&nbsp;'.$_SESSION['b13'].'<br>
  <p style="text-align: justify;"><strong><u>CEDULA</u></strong>: a los fines previstos en el art. 46 de la Ley 8751, se cita y emplaza
   al imputado a cmparecer ante el Juzgado de Faltas, a la audiencia del dia&nbsp;'.$_SESSION['b14'].'&nbsp;de&nbsp;'.$_SESSION['b15'].'&nbsp;de&nbsp;'.$_SESSION['b16'].' 
   a las 9.00 hs o el dia ahábil siguiente si aquel fuera sábado,domingo o feriado,bajo apercibimiento de considerar su incomparecencia injustificada como circunstancia agravante y decretar la clausura del establecimiento, su conducción por la fuerza pública y/o
   secuestro de los elementos utilizados para la comisión de la falta. Justicia Municipal de Faltas</p><br>

   &emsp;_____________________________&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;___________________________________<br>
   &emsp;&emsp; Firma del Imputado &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Firma y Sello del Inspector
   
<br>
&emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;<strong><u>ACTA DE SECUESTRO</u></strong><br>
<p style="text-align: justify;">
De acuerdo a lo previsto en el art. 43 deñ Dec. Ley 8751, art. 25 de la Ord. 5355 y en relacion al Acta de Constatación que antecede, se procede al secuestro de:
</p>
<p style="text-align: justify;">'.$_SESSION['b17'].'</p>
<p style="text-align: justify;">Los elementos detallados se encuentroan depositados en:&nbsp;'.$_SESSION['b18'].'</p>

&emsp;_____________________________&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;___________________________________<br>
&emsp;&emsp; Firma del Imputado &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Firma y Sello del Inspector
<br><br>
<table style="width:100%;" ><tr><td><h2>TRIBUNAL MUNICIPAL DE FALTAS</h2>
<h5>Presentarse en: Juzgado de Turno</h5>
<h5>Garay 3136 - Mar del Plata - Batan</h5>
<h5>Horario de atención al público de 8.15hs a 14.30hs</h5>
</td></tr></table><br>

<h6><p style="text-align: justify;">Articulo 46° Ley 8751:"Dentro de las cuarenta y ocho horas de recibidas las actuaciones o labradas las denuncias, se citará al imputado"
para que comparezca ante el Juez de Faltas en la audiencia que señalará, al efecto de que formule su defensa y ofrezca y produzca en la
misma audiencia la prueba que intente valerse, bajo apercibimiento de hacerlo conducir por la fuerza pública y que se considere su
incomparecencia como circunstancia agravante. En la notificación se transcribirá este artículo. La audiencia se fijará para una fecha
comprendida entre los cinco (5) y diez (10) dias de la resolucion que la ordenara y se notificará al imputado con una antelación mínima de tres
(3) días."</h6></p><br><br><br>

<h4>CONTINUACIÓN DE ACTA DE CONSTATACIÓN Y/U OBSERVACIONES</h4>
<p style="text-align: justify;">
 OBSERVACIONES:&nbsp;'.$_SESSION['b19'].'
 <br><br><br><br>
&emsp;_____________________________&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;_______________________________________<br>
&emsp;&emsp; Firma del Imputado &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Firma y Sello del Inspector actuante
 </p>


 <h5>Imprescindible presentarse con la siguiente documentacion:</h5>
 <h6>1. La presente cédula <input type="checkbox" ><br>
 2. Documento de Identidad <input type="checkbox"><br>
 3. Certificado de Habilitacion o permiso correspondiente <input type="checkbox" ><br>
 4. Libro de Inspecciones <input type="checkbox"><br>
 5. En caso de sociedades, documentación que acredite ser el representante legal <input type="checkbox"></h6>



 </body>';
  
  return $plantilla;
}
