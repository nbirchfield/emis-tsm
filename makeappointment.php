<?php

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $doctor = $_POST['doctor'];
    $datetime = $date. $time;

    echo "$firstname\n$lastname\n$datetime\n$doctor";

    $firstname = stripcslashes($firstname);
    $lastname = stripcslashes($lastname);

    /*$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

    # create sql query and bind parameters
    $verifystmt = mysqli_prepare($con, "select SUM(CASE WHEN datetime = ? THEN 1 ELSE 0 END) from appointment");
    mysqli_stmt_bind_param($verifystmt, 's', );

    # Query the database to see i
    if(mysqli_stmt_execute($verifystmt)) {
        mysqli_stmt_bind_result($verifystmt, $results);
        mysqli_stmt_fetch($verifystmt);
        mysqli_stmt_close($verifystmt);
    }
    */
?>