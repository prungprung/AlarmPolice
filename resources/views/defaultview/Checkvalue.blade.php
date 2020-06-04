<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
    <title>Show value</title>
</head>

<body>
<div>
  <p>Taken from wikpedia</p>
  <?php
    date_default_timezone_set('Asia/Bangkok');
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $json = file_get_contents('php://input');
    $request = json_decode($json, true);
    $queryText = $request['queryResult']['queryText'];
    $userId = $request['originalDetectIntentRequest']['payload']['data']['source']['userId'];
    $myfile = fopen('log$date.txt', 'a') or die('Unable to open file!');
    $log = $date.'-'.$time.'\t'.$userId.'\t'.$queryText.'\n';
    fwrite($myfile,$log);
    fclose($myfile);
  ?>
</div>
</body>
</html>
