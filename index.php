<?php
session_start();
include "data_produk.php";

$menu = $_GET['menu'] ?? 'utama';

include "header.php";

switch ($menu) {
    case 'tempah':
        include "pages/tempah.php";
        break;
    case 'invois':
        include "pages/invois.php";
        break;
    default:
        include "pages/utama.php";
}

include "footer.php";
?>