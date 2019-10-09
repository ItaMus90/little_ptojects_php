<?php

    defined("DB_HOST") or define("DB_HOST", "localhost");
    defined("DB_USER") or define("DB_USER", "root");
    defined("DB_PASS") or define("DB_PASS", "");
    defined("DB_SCHEMA") or define("DB_SCHEMA", "infinite_scroll_v1");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_SCHEMA);

    if (!$conn)
        die("Error " . mysqli_connect_error());

