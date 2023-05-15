<?php
set_time_limit(0);
error_reporting(0);
require __DIR__ . '/request.php';
header('Content-Type: application/json');

if($_GET['r'] || $_GET['result']) {
    $result = $_GET['r'] ? $_GET['r'] : $_GET['result'];
} else {
    $result = 1;
}
$waifu = [];
for ($i = 0; $i < $result; $i++) {
    $request = request('https://api.jikan.moe/v4/random/anime');
    $request = json_decode($request, true);
    $waifu[] = $request;
}
if($request == null) {
    $return = array(
        'apiTimestamp' => time(),
        'apiStatus' => 'error',
        'apiCode' => 500,
        'apiResult' => 'Internal Server Error'
    );
    
    echo json_encode($return, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
} else {

    $return = array(
        'apiTimestamp' => time(),
        'apiStatus' => 'success',
        'apiCode' => 200,
        'apiResult' => array(
            'url' => $waifu
        )
    );
    
    echo json_encode($return, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}


