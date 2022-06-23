<?php

include 'config.php';

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://graph.facebook.com/' . $api_version . '/' . $page_id . '?fields=instagram_business_account&access_token=EAAGst9eDedgBACZA4eTyVnt3ZAFijXl226IRya4l75RgkVm5EkUpT9ehvaN1RtdydQw1QKQ9mtHsIjAHUMiVZBRfZBpAUm73mgXYQi2jkEP3cOcLeDZAxGIZA8ZC0Xg6InYGIW4t7BQ3VCNsU9QD710FD8MoQAQksZAfKWnIRPJWsaq4Gae5KzDt',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET'
));

$response = curl_exec($curl);

curl_close($curl);

$instagram_json_id    = json_decode($response, true);
$instagram_account_id = $instagram_json_id["instagram_business_account"]["id"];



$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://graph.facebook.com/' . $api_version . '/' . $instagram_account_id . '/media?image_url=' . $img_link . '&caption=' . $caption . '&access_token=' . $token . '',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST'
));

$upload = curl_exec($curl);

curl_close($curl);
$arr1 = json_decode($upload, true);

$result = $arr1["id"];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://graph.facebook.com/' . $api_version . '/' . $instagram_account_id . '/media_publish?creation_id=' . $result . '&access_token=' . $token . '',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST'
));

$final = curl_exec($curl);

curl_close($curl);

echo 'yes!';

?>
