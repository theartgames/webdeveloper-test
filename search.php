<?php

error_reporting(E_ALL ^ E_NOTICE);

$query = trim(strip_tags($_POST['query']));

$jsonContent = file_get_contents('data.json');

$data = json_decode($jsonContent, true);

$result = [];

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


header('Content-Type: application/json');
echo json_encode($result);
