<?php
//SideBar By Felipe Miranda :)
$Data = date('Ymd');
?>
<link rel="stylesheet" href="css/menu.css?auth=27092023<?=$Data?>" >
<link rel="stylesheet" href="css/menu_aux.css?auth=27092023<?=$Data?>" >
<?php
//SideBar Atualizado
//prefira link https://dominio.com/sidebar.cfx
$local_side = "sidebar.cfx";
$context = stream_context_create(array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
));
$file = fopen($local_side, "r", false, $context);
if ($file) {
    $contents = stream_get_contents($file);
    fclose($file);
    echo $contents;
} else {
    echo "";
}
?>
