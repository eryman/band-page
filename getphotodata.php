<?php require_once __DIR__ . '/vendor/autoload.php'; ?> 

<?php

$page_id = '604497632948882';

$app_id = '189331864907753';
$app_secret = '26535f5d34a00a18958cef2a635e6bd6';
$default_graph_version = 'v2.8';
$access_token = '189331864907753|UJ0Qj5fLLBn-Ysq-whXCWkGWtW0';


$fb = new Facebook\Facebook([
  'app_id' => $app_id,
  'app_secret' => $app_secret,
  'default_graph_version' => $default_graph_version,
]);

$fb->setDefaultAccessToken($access_token);
$fields = 'albums';
try {
  $response = $fb->get('/' . $page_id . '?fields=' . $fields);
  $userNode = $response->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$albums = $userNode['albums'];
$albumsLength = count($albums);

$photoFields = 'photos.fields(source)'; //put event fields here (get from app.js)

// 1. perform api search using album id
try {
  $response = $fb->get('/' . $albums[0]['id'] . '?fields=' . $photoFields);
  $photoAlbum = $response->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
echo $photoAlbum;
  //array_push($eventsArray, $event);
  //$eventsArray[$x] = $event;
  //echo $event;
  //echo '<br><br>';
  // 2. store that data in an associative array with basic integer keys (0, 1, 2, etc)

  // 3. Retrieve that info using geteventinfotest.html file
//}

//echo implode($eventsArray, ', ');

?>

