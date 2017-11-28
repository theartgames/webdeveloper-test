<?php

error_reporting(E_ALL ^ E_NOTICE);

$query = trim(strip_tags($_POST['query']));

$jsonContent = file_get_contents('data.json');

$data = json_decode($jsonContent, true);

$result = [];

$sort = trim(strip_tags($_POST['sort']));

$parameter = trim(strip_tags($_POST['param']));

file_put_contents('searches.log', $query . PHP_EOL, FILE_APPEND);

foreach ($data as $item) {
    $subject = $item['aname'];

    if ($_POST['pname'] === 'true') {
    	$subject .= ' ' . $item['pname'];
    }

    if ($_POST['pdesc'] === 'true') {
    	$subject .= ' ' . $item['pdesc'];
    }
        
    $subject .= ' ' . $item['psdesc'];

    if (preg_match('/' . $query . '/i', $subject) === 1) {
        $result[] = $item;
    }
}

$copyResult = $result;

$result = [];

$arrTemp = [];
foreach ($copyResult as $k => $v) {
	$arrTemp[$k] = $v[$parameter];
}
unset($k);
unset($v);

if ($sort === 'asc') {
	asort($arrTemp);
} else {
	arsort($arrTemp);
}

foreach ($arrTemp as $k => $v) {
	$result[] = $copyResult[$k];
}

header('Content-Type: application/json');
echo json_encode($result);
