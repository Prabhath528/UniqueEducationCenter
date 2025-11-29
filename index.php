<?php 

    //default user name and password
    $VALID_USER = "hndit24";
    $VALID_PASS = "123LKA";

    //user input
    $input_user = "hndit24";
    $input_pass = "123LKA";

    //check username and password is valid
    if ($input_user == $VALID_USER && $input_pass == $VALID_PASS) {
        echo "Login successful";
    } else {
        echo "Login failed. Invalid username or password.";
    }  
    

?> 