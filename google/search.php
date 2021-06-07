
<?php

$file = file_get_contents('./cities.json');
$arrays = json_decode($file, true);
$filtered = (array) null;
foreach ($arrays as $array) {
    if (stripos($array["name"], $_GET["name"]) !== false) {
        $filtered[] = $array;
    }
}
$filtered = json_encode($filtered);
echo $filtered;

?>
