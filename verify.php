<?php
$access_token = 'UB+6xjNlNCs49EM01ynPq+7LG3GmozpiPCq3ATWTgjWbbm9J5divBda3fBD1yqNLR2EuR2tzT/6YDVWtXDc2bd8AbXUqz+1JoUuihuWBQsrspLxH7+pr67u8ng/ettcldZjB4HdppgpiBKzpjKArJgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
