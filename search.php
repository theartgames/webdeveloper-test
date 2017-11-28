<?php

error_reporting(E_ALL ^ E_NOTICE);

$query = trim(strip_tags($_POST['query']));

$jsonContent = file_get_contents('data.json');

$data = json_decode($jsonContent, true);

$result = [];

$sort = $_POST['sort'];

$parameter = $_POST['param'];

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

$result2 = $result;

$result = array();

$arrTemp = array();
foreach ($result2 as $k => $v) {
	$arrTemp[$k] = $v[$parameter];
}

if ($sort === 'asc') {
	asort($arrTemp);
} else {
	arsort($arrTemp);
}

foreach ($arrTemp as $k => $v) {
	$result[] = $result2[$k];
}

header('Content-Type: application/json');
echo json_encode($result);
