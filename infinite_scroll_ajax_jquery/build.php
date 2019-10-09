<?php

/**
 * this file for fill the table bposts
 * take content from loremipsum api 3 line
 */
    require_once "core/config.php";

    for ($i = 0; $i < 5; $i++){

        $file = file_get_contents("https://loripsum.net/api/3/short" , true);
        $current_date = date('Y-m-d H:i:s');
        $user_id = md5($file . "sal123456789". time() . microtime());

        $sql = "INSERT INTO bposts (id, content, created_at)"
            . " VALUES('".$user_id."', '".$file."', '".$current_date."')";

        $result = mysqli_query($conn, $sql);

    }
