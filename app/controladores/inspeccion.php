<?php

require_once('../../vendor/autoload.php');
require_once('../plantillas/inspeccion.php');
//plantilla


//css de la plantilla



$mpdf = new \Mpdf\Mpdf([
'format' => 'A4'
]);

$plantilla = getPlantilla();


$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->text_input_as_HTML = true;
$mpdf->Output("Acta de Inspeccion ".$_SESSION['a1'].".pdf", "I");

?>