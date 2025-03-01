<?php
// Get the 'get' parameter from the query string
$get = $_GET['get'];

// Check if the URL starts with 'http://' or 'https://'
if (!preg_match('/^https?:\/\//', $get)) {
    // If not, prepend 'https://'
    $mpdUrl = 'https://' . $get;
} else {
    // Otherwise, use the URL as is
    $mpdUrl = $get;
}

// Fetch the content of the URL
$res = file_get_contents($mpdUrl);

// Output the result
echo $res;
?>
