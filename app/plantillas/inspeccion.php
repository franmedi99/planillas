<?php session_start();
$_SESSION['a1'] =$_POST['a1'];
$_SESSION['a2'] =$_POST['a2'];
$_SESSION['a3'] =$_POST['a3'];
$_SESSION['a4'] =$_POST['a4'];
$_SESSION['a5'] =$_POST['a5'];
$_SESSION['a6'] =$_POST['a6'];
$_SESSION['a7'] =$_POST['a7'];
$_SESSION['a8'] =$_POST['a8'];
$_SESSION['a9'] =$_POST['a9'];
$_SESSION['a10'] =$_POST['a10'];
$_SESSION['a11'] =$_POST['a11'];
$_SESSION['a12'] =$_POST['a12'];


//<u></u>

function getPlantilla(){
$plantilla =  '


<body>
  
    <div id="logo"style="position: absolute; " >
      <img src="../img/logo_batan.png" class="logo" style="width:350px; height:100px;  margin-left:30px;">
      <img src="../img/logo2.png" class="logo" style="width:250px; height:50px; margin-left:450px; margin-bottom:30px; margin-top:-80px;">
    </div>
    <div class="requisitos" style="margin-top:20px; margin-left:40px;">
    <strong> Acta de INSPECCION N° '.$_SESSION['a1'].'</strong>

  
  <p> '.$_SESSION['a2'].'&nbsp;&nbsp; N°'.$_SESSION['a3'].'&nbsp; Cuenta N°'.$_SESSION['a4'].'</u>&nbsp;<br>
  <hr style="color: black; height: 3px;">






 FECHA:&nbsp;'.$_SESSION['a5'].'&nbsp;SIENDO LAS&nbsp;'.$_SESSION['a6'].'<br>RUBRO:&nbsp;'.$_SESSION['a7'].'<br>
 DOMICILIO:&nbsp;'.$_SESSION['a8'].'<br>FIRMA:&nbsp;'.$_SESSION['a12'].'<br>
 ATENDIDO POR:&nbsp;'.$_SESSION['a9'].'<br>DNI N°&nbsp;'.$_SESSION['a10'].'<br>
 <hr style="color: black; height: 3px;">
 Al momento de la inspección, se verifica:&nbsp;<br>
 <p style="text-align: justify;">'.$_SESSION['a11'].'</p>

 Previa lectura de este acta, se invita a firmar y recibir copia a quien atiende este procedimiento.<br><br><br><br> <br> <br> <br>
&emsp;_______________________&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;__________________ &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;____________________<br>
&emsp;&emsp; FIRMA Y CARGO &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; SELLO &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;INSPECTOR

</body>';
  
  return $plantilla;
}
