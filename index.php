<?php
$get = $_GET['get'];
$mpdUrl = 'https://'.$get;


// $context = stream_context_create($mpdheads);
$res = file_get_contents($mpdUrl);
echo $res;
?>
