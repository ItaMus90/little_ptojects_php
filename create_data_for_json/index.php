<?php

$a_keys = ['data','inner_data', 'content'];
$a_data = [
    1 => ["name" => "test"],
    2 => ["name" => "test"],
    3 => ["name" => "test"]
];


function create_json_data($keys, $data){

    $reference_where = &$reference_update;

    foreach ($keys as $key ){
        $reference_where = &$reference_where[$key];// Here we assign by reference
    }

    $reference_where = $data;
    print_r($reference_update);
    echo json_encode($reference_update);

}


create_json_data($a_keys, $a_data);
