<?php

    require_once "core/config.php";

    $arr = array();
    $rows = array();
    print_r($_POST);
    if (empty($_POST["itemToLoad"]) && !isset($_POST["itemToLoad"])){

        $limit_item = 1;

    }else{

        $limit_item = $_POST["itemToLoad"];

    }

    if (!isset($_POST["offset"])){

        $offset = 0;

    }else {

        $offset = $_POST["offset"];

    }

    $arr["limit_item"] = $limit_item;
    $arr["offset"] = $offset;

    $sql = "SELECT * FROM bposts ORDER BY created_at DESC LIMIT ".$limit_item." OFFSET ".$offset;

    $result = mysqli_query($conn,$sql);


    while ($row = mysqli_fetch_array($result)){

        $rows[] = array(

            "id"         => $row["id"],
            "content"    => $row["content"],
            "created_at" => $row["created_at"]

        );

    }

    $arr["content"] = $rows;

    echo json_encode($arr);