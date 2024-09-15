<?php 
// use function Core\MyTest\Receiver as receiver;

// echo receiver($mainHandler);

// function recursiveArrayPrint($entryArray) {
//     foreach ($entryArray as $key => $value) {
//         if (is_array($value)) recursiveArrayPrint($value);
//         else echo "$key: $value <br>"; 
//     }
// }

// recursiveArrayPrint($_SERVER);

$app->registerResponse($mainHandler);