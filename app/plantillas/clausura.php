<?php session_start();
$_SESSION['c1'] =$_POST['c1'];
$_SESSION['c2'] =$_POST['c2'];
$_SESSION['c3'] =$_POST['c3'];
$_SESSION['c4'] =$_POST['c4'];
$_SESSION['c5'] =$_POST['c5'];
$_SESSION['c6'] =$_POST['c6'];
$_SESSION['c7'] =$_POST['c7'];
$_SESSION['c8'] =$_POST['c8'];
$_SESSION['c9'] =$_POST['c9'];
$_SESSION['c10'] =$_POST['c10'];
$_SESSION['c11'] =$_POST['c11'];
$_SESSION['c12'] =$_POST['c12'];
$_SESSION['c13'] =$_POST['c13'];
$_SESSION['c14'] =$_POST['c14'];


//<u></u>

function getPlantilla(){
$plantilla =  '


<body>
  
    <div id="logo"style="position: absolute; " >
      <img src="../img/logo4.png" class="logo" style="width:100px; height:-100px;  margin-left: 130px; margin-top:10px;">
      <img src="../img/logo2.png" class="logo" style=" width:250px; height:50px; margin-top:-70px; margin-left:400px; margin-bottom:30px;">
      <p style="margin-top:-15px;">Municipalidad del Partido de General Pueyrredon</p>
    <h1 style="margin-left:25%;">ACTA DE CLAUSURA</h1>
    </div>
    <div class="requisitos" style="margin-top:20px; margin-left:40px;">
    <p style="text-align: justify;">En la ciudad de Mar del Plata, a los&nbsp;'.$_SESSION['c1'].'&nbsp;dias del mes de&nbsp;'.$_SESSION['c2'].'&nbsp; de&nbsp;'.$_SESSION['c3'].' siendo las '.$_SESSION['c4'].'&nbsp;hs,
    me constituyo en '.$_SESSION['c5'].'.<br>
    Y en relacion con el acta de constatacion N° '.$_SESSION['c6'].', a la cual se agrega la presente, se procede de acuerdo al art. 19° inc '.$_SESSION['c7'].' "A" '.$_SESSION['c8'].' de la Ord. N°5355.
   <br><br>
    Se deja constancia:<br><br>
   1°)Que '.$_SESSION['c9'].' han sido colocadas fajas selladas en '.$_SESSION['c10'].'.<br><br>
   2°)Que se hizo saber verbalmente al imputado, la falta en que incurría en caso de que la medidad de clausura fuera violada.<br><br>
   3°)Que '.$_SESSION['c11'].' intervino funcionario policial, Leg. N°  '.$_SESSION['c12'].'.<br><br>
   4°) Que la vigilancia que se establece en el local es la siguiente:<br>
   '.$_SESSION['c13'].'.<br><br>
   Asimismo se deja constancia:<br>
   '.$_SESSION['c14'].'.<br><br>
  No siendo para más, se firman tres actas de un mismo tenor y a un solo efecto en la fecha señalada "Ut Supra", quedando el duplicado en poder del firmante.
    </p><br><br>
.............................................................................................................................................................<br>
&emsp;&emsp;Firma del imputado &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Aclaración de la Firma
<br><br><br><br>
...........................................<br>
&emsp;&emsp;DNI-LE-LC-CPF- N°
<br><br><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;..........................................................<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Firma del Inspector Actuante - Leg.


</body>';
  
  return $plantilla;
}
