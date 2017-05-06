<?php

echo ('PHP ');
$start = microtime(true);
$arr1 = [];
for ($i = 0; $i < 50000; $i++) {
    $arr1[] = $i * 2;
}
$arr2 = [];
for ($i = 20000; $i < 21000; $i++) {
    $arr2[] = $i * 2;
}
foreach ($arr1 as $val) {
    foreach ($arr2 as $val2) {
        if ($val == $val2) {}
    }
}
echo (microtime(true)-$start)."\n";


echo('V8JS ');
$start = microtime(true);
$v8 = new V8Js();
$JS = <<< EOT
var arr1 = [];
for (i = 0; i < 50000; i++) {
    arr1.push(i * 2);
}

var arr2 = [];
for (i = 20000; i < 21000; i++) {
    arr2.push(i * 2);
}

for (key = 0; key < arr1.length; key++) {
    for (key2 = 0; key2 < arr2.length; key2++) {
        if (arr1[key] == arr2[key2]) {}
    }
}
print('done.');
EOT;
$v8->executeString($JS, 'basic.js');
echo ' '.(microtime(true)-$start)."\n";


echo('node.js ');
$start = microtime(true);
exec('/usr/local/bin/node ./test.js', $output);
echo implode("\n", $output);
echo ' '.(microtime(true)-$start)."\n";

echo('node server ');
$start = microtime(true);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:3000");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
echo ' '.(microtime(true)-$start)."\n";



