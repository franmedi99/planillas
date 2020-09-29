<?php

require_once('../../vendor/autoload.php');
require_once('../plantillas/clausura.php');
//plantilla


//css de la plantilla



$mpdf = new \Mpdf\Mpdf([
'format' => 'Legal'
]);

$plantilla = getPlantilla();


$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->text_input_as_HTML = true;
$mpdf->Output("Acta de Clausura.pdf", "I");

?>