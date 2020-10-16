<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy"
          content="default-src *; style-src 'self' http://* 'unsafe-inline'; script-src 'self' https://*.singpass.gov.sg http://* 'unsafe-inline' 'unsafe-eval'"/>
    <title>Title</title>
    <script src="http://stg-saml.singpass.gov.sg/spcpextrest/resources/js/spcp-pvt-qr-v1.0.0.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="assets/script.js" type="text/javascript"></script>
</head>
<?php
function curl_get_contents($url)
{
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
// calls test url for connection
$contents = curl_get_contents('https://stg-saml-internet.singpass.gov.sg/mga/sps/oauth/oauth20/metadata/SingPassOP');
echo $contents;
?>

<body>
<!-- element to contain the all SPCPQR Elements -->
<div id="qr_wrapper"></div>

<script>

</script>
</body>
<div>
    yai
</div>
