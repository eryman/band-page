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
$fields = 'name,about,cover,picture.width(400).height(400),bio,description,band_members,artists_we_like,band_interests,general_info,hometown,influences,record_label,booking_agent,link,phone,press_contact,emails,events,photos,featured_video,albums,fan_count,feed';
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

echo $userNode;

?>
