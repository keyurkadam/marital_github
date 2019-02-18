<?php 
$ord_id=$_GET["ord_id"];
require_once 'autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
//$html = file_get_contents("http://localhost/pdf/dompdf_0-8-1/dompdf/pdf_generate.php");
$html = file_get_contents("http://localhost/gajanand/pdf_gen/generate_pdf/".$ord_id);
//echo $html;
$dompdf->load_html($html);

//$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to folder
$output_filename = 'invoice_'.$ord_id.'.pdf';
$output = $dompdf->output();
//file_put_contents($output_filename, $output);
file_put_contents("../files/order_pdf/".$output_filename, $output);


// Output the generated PDF to Browser
$dompdf->stream($output_filename);

//$url=$_SERVER["HTTP_REFERER"];
//header("Location:".$url);
?>