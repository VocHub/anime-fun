<?php
set_time_limit(0);
error_reporting(0);
require __DIR__ . '/request.php';
header('Content-Type: application/json');

if($_GET['q'] || $_GET['query']) {
    $query = $_GET['q'] ? $_GET['q'] : $_GET['query'];
} else {
    $return = array(
        'apiTimestamp' => time(),
        'apiStatus' => 'error',
        'apiCode' => 400,
        'apiResult' => 'Bad Request, ?query=/?q= is required.'
    );
    echo json_encode($return, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    exit;
}

$AnimeTrace = request("https://api.trace.moe/search?url=" . $query);
$AnimeTrace = json_decode($AnimeTrace, true);

if($AnimeTrace == null) {
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
        'apiResult' => $AnimeTrace['result'][0]
    );
    echo json_encode($return, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}