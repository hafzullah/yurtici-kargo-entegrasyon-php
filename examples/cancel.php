<?php
require_once "../src/class.php";

$yurtici = new yurticiKargo(array(
    'wsUserName'      => "{wsUserName}",
    'wsPassword'      => "{wsPassword}",
    'wsLanguage'      => "{wsLanguage}",    // Default: TR
    'cleanResult'     => true,              // Default: true [true/false]
    'testMode'        => true               // Default: false [true/false]
));

$response = $yurtici->cancelShipment('123456');

echo "<pre>";
print_r($response);
echo "</pre>";
?>