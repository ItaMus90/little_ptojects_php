<?php

/**
 * firstNonRepeatingCharacter
 *
 * aaabcc => b
 * abcbad => c
 * abcabcabc => null
 */

function firstNonRepeatingCharacter($str = ''){

    $dictionary = [];
    $str_length = strlen($str);

    if($str_length === 1){
        return $str[0];
    }

    for ($i = 0; $i < $str_length ; $i++){

        if(isset($dictionary[$str[$i]])){
            $dictionary[$str[$i]]++;
        }else{
            $dictionary[$str[$i]] = 1;
        }

    }



    return array_search(1,$dictionary);

}
echo '<pre>';
var_dump(firstNonRepeatingCharacter('aabbbccddeffg'));

