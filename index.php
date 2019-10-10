<?php 



//include autoloader file
require_once "dompdf/autoload.inc.php ";

//reference the dompdf namespacename

use Dompdf\Dompdf;

//dompdf class

$dompdf = new Dompdf();

//load html content
//$dompdf->loadHtml("hshsbhs");

//load html file
$html = file_get_contents("task.html");
$dompdf->loadHtml($html);

//setup paper size
$dompdf->setPaper('A4','landscape');

//render the html as pdf
$dompdf->render();

//output the generated pdf
$dompdf->stream();


?>