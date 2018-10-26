<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.pdfshift.io/v2/convert/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode(array("source" => "https://www.pdfshift.io/documentation", "landscape" => false, "use_print" => false)),
    CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
    CURLOPT_USERPWD => '4fb0ad6a210d4057bf493c784b75b74b'
));

$response = curl_exec($curl);
file_put_contents('pdfhsift-documentation.pdf', $response);

// We also have a package to simplify your work:
// https://packagist.org/packages/pdfshift/pdfshift-php

?>