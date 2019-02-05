<?php include_once("index.html"); ?>
<?php

$request = new HttpRequest();
$request->setUrl('http://sensei.bankbuddy.ai:8000/file/upload/');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'Postman-Token' => '4382885a-8558-4e2f-8eb8-195ff22c401b',
  'cache-control' => 'no-cache',
  'content-type' => 'multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW'
));

$request->setBody('------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="file"; filename="test2.wav"
Content-Type: audio/x-wav


------WebKitFormBoundary7MA4YWxkTrZu0gW--');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}