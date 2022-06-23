# Simple-Content-Publishing-Instagram-PHP
Thanks to this simple integration in php, you will be able to post photos on instagram in php !


- `Instagram Rate LIMIT : 25 posts per day `

- `Subscribe to my instagram @nathanlegroux `

## Tutorial and config file here !



```php
<?php
// This file is "config.php"


// Tutorial: 

// 1: Convert your instagram personal account to an instagram buisness account. 
// if you need help look this : https://help.instagram.com/502981923235522

// 2: Create a facebook page, then go to settings -> Instagram -> and link your buisness account.
// direct link  : https://www.facebook.com/pages/creation/

// 3 : Now, copy the ID of your page ( https://www.facebook.com/Arni-Web-LGRX-ID_IS_HERE/about/?ref=page_internal ) 

// 3 BIS : example : https://www.facebook.com/Arni-Web-LGRX-106294062129244/about/?ref=page_internal -> ID is = 106294062129244

$page_id = '';

// 4 : Create a Facebook app here : https://developers.facebook.com/apps/

// 5 : Select Company -> Name your app -> Enter your Email -> Select your buisness account ( IMPORTANT )

// 5 BIS : Click on the square named "Instagram Graph API"

// 6 : Copy your APP ID 

$app_id = '';


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

$token = '';

// 13 : Paste the image link that you want upload to instagram here 

$img_link = 'https://YOURIMAGE.jpg'; // Must be .JPG


// 14 : Write a single word without space in caption.

$caption = 'test';


// Do not change that for the moment.

$api_version = 'v14.0';

?>

```


