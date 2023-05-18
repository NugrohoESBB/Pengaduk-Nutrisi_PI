<?php
    $page = $_GET["page"];
    $action = $_GET["action"];

    if ($page == "Post_Data") {
        if ($action == '') {
            include "page/semua_data/postData/formpostData.php";
        }
    } elseif ($page == "Log_Data") {
        if ($action == '') {
            include "page/semua_data/logData/LogData.php";
        }
    } elseif ($page == "") {
        include "dashboard.php";
    }
?>
