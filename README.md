# Simple-Content-Publishing-Instagram-PHP
Thanks to this simple integration in php, you will be able to post photos on instagram in php !


- !`Note : Limit : 25 posts per day `


## Tutorial and config file here !


// Add this on the top of the file publish.php !

```php
<?php


// Tutorial: 

// 1: Convert your instagram personal account to an instagram buisness account.

// 2: Create a facebook page, go to settings -> Instagram -> and link your buisness account.

// 3 : Now, copy the ID of your page ( https://www.facebook.com/Arni-Web-LGRX-ID_IS_HERE/about/?ref=page_internal ) 

// 3 BIS : example : https://www.facebook.com/Arni-Web-LGRX-106294062129244/about/?ref=page_internal -> ID is = 106294062129244

$page_id = '106294062129244';

// 4 : Create a Facebook app here : https://developers.facebook.com/apps/

// 5 : Select Company -> Name your app -> Enter your Email -> Select your buisness account ( IMPORTANT )

// 6 : Copy your APP ID 

$app_id = '471380571421144';


// 7 : Go to https://developers.facebook.com/tools/explorer/

// 8 : Select User Token 

// 9 : Select permissions ( 7 ) {

// pages_show_list
// instagram_basic
// instagram_manage_comments
// instagram_manage_insights
// instagram_content_publish
// pages_read_engagement
// pages_manage_posts
// public_profile

// }

// 10 : Click on Generate token -> Login to Facebook -> Accept all and Check your instagram account in the list !

// 11 : When you have a token, go to https://developers.facebook.com/tools/debug/accesstoken/ -> Click on debug -> in the bottom of the page, Click on Generate Long-Lived Token

// 12 : Copy the long-lived-token and paste it here 

$token = 'EAAGst9eDedgBACZA4eTyVnt3ZAFijXl226IRya4l75RgkVm5EkUpT9ehvaN1RtdydQw1QKQ9mtHsIjAHUMiVZBRfZBpAUm73mgXYQi2jkEP3cOcLeDZAxGIZA8ZC0Xg6InYGIW4t7BQ3VCNsU9QD710FD8MoQAQksZAfKWnIRPJWsaq4Gae5KzDt';

// 13 : Paste the image link that you want upload to instagram here 

$img_link = 'https://image.shutterstock.com/image-photo/cat-medical-mask-protective-antiviral-260nw-1684423789.jpg'; // Must be .JPG


// 14 : Write a single word without space in caption.

$caption = 'test';


// Do not change that for the moment.

$api_version = 'v14.0';

?>

```


