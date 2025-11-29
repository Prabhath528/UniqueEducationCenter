<?php
    $mod1_marks ="85";
    $mod2_marks = "60";
    $mod3_marks = "42";

    $total_marks = $mod1_marks + $mod2_marks + $mod3_marks; 
    $avarage_marks = $total_marks / 3;
    $avarage_marks = round($avarage_marks, 2);

    if ($avarage_marks >= 75) {
        $remark = "Excellent Performance";
    } elseif ($avarage_marks >= 55) {
        $remark = "Good Pass";
    } elseif ($avarage_marks >= 35) {
        $remark = "Simple Pass";
    } else {
        $remark = "Fail - Need to Result";
    }

    echo "Module 1 Marks: " . $mod1_marks . "<br>"; 
    echo "Module 2 Marks: " . $mod2_marks . "<br>"; 
    echo "Module 3 Marks: " . $mod3_marks . "<br><br>";

    echo "Avarage Marks: " . $avarage_marks . "<br>";
    echo "Remark: " . $remark . "<br>";
?>