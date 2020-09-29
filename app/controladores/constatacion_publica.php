<?php

require_once('../../vendor/autoload.php');
require_once('../plantillas/constatacion_publica.php');
//plantilla


//css de la plantilla



$mpdf = new \Mpdf\Mpdf([
'format' => 'Legal'
]);

$plantilla = getPlantilla();

$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->text_input_as_HTML = true;

$mpdf->Output("Acta de Constatacion - via publica N° ".$_SESSION['b1'].".pdf", "I");

?>