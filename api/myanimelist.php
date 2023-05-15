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

$AnimeID = request("https://api.jikan.moe/v4/anime?q=" . urlencode($query));
$AnimeID = json_decode($AnimeID, true);
$AnimeID = $AnimeID['data'][0]['mal_id'];
$AnimeDetail = request("https://api.jikan.moe/v4/anime/" . $AnimeID);
$AnimeDetail = json_decode($AnimeDetail, true);

if($AnimeDetail == null) {
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
        'apiResult' => $AnimeDetail['data']
    );
    echo json_encode($return, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}