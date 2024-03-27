

<?php
// header('Content-type: application/pdf');
// header('Content-Disposition: inline; filename="Assesment.pdf"');
// header('Content-Transfer-Encoding: binary');
// header('Accept-Ranges: bytes');

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->showImageErrors = true;
$mpdf->curlAllowUnsafeSslRequests = true;
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
); 

$page = file_get_contents("http://localhost/mpdf_prac/page.php",false,stream_context_create($arrContextOptions));
// var_dump($page);
// die();
$mpdf->defaultheaderline = 0;
$mpdf->defaultfooterline = 0;
$mpdf->setFooter('{PAGENO}');
$mpdf->WriteHTML($page);
$mpdf->Output("Assesment.pdf","I");