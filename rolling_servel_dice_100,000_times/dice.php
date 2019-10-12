<?php

    $rolls = $_POST["rolls"] ?? 10;
    $dice = $_POST["dice"] ?? 3;
    $number = $_POST["number"] ?? 6;
?>

<form action="" method="post">
    <label for="rolls">Number of Rolls</label> <br>
    <input type="text" id="rolls" name="rolls" value="<?php echo $rolls; ?>"> <br>

    <label for="dice">Number of Dice</label> <br>
    <input type="text" id="dice" name="dice" value="<?php echo $dice; ?>"> <br>

    <label for="number">Your number (1 - 6)</label> <br>
    <input type="text" id="number" name="number" value="<?php echo $number; ?>"> <br>

    <button type="submit">Roll the Dice!</button>
</form>


<?php

    if ($_POST){

        $total_hits = [];

        for ($i = 1; $i <= $rolls; $i++){

            $hist = 0;

            for ($j = 1; $j <= $dice; $j++){

                if ($number == mt_rand(1,6)){

                    $hist++;

                }

            }

            @$total_hits[$hist]++;

        }

        ksort($total_hits);

        foreach ($total_hits as $key=>$result){

            echo "Your number appeared on a dice " . $key . " times in " . $result . " rounds <br>";

        }

    }

?>
