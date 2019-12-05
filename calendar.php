

<?php

function foo($arg_1)
{
    echo "Month # $arg_1" . "<div/>";
    echo "" . date("d") . "<br>";

    $list = array();
    $month = $arg_1;
    $year = date("Y");

    for ($d = 1; $d <= 31; $d++) 
    {
        $time = mktime(12, 0, 0, $month, $d, $year);
        if (date('m', $time) == $month)
            $list[] = date('d', $time);
        // $list[] = date('Y-m-d-D', $time);
    }
    // echo "<pre>";
    // print_r($list);
    // echo "</pre>";
    print <<<END
    <ul class="weekdays">
        <li>Mo</li>
        <li>Tu</li>
        <li>We</li>
        <li>Th</li>
        <li>Fr</li>
        <li>Sa</li>
        <li>Su</li>
    </ul>
    END;

    <ul class="days">
        for ($i = 0; $i < 35; $i++) 
        {
            echo "<li>$i</li>";
        }
    </ul>
        
    }

    

    ?>


    <div class="header">
        <h2>Input month number</h2>
    </div>

    <form method='post'>
        <div class="input-group">
            <input name="month" type="text">
        </div>
        <div class="input-group">
            <button type="submit" class="btn">Accept</button>
        </div>
    </form>

    <?php
    if ($_POST['month'] > 0 && $_POST['month'] < 13) {
        foo($_POST['month']);
    } else echo "Input correct month number";


?>
