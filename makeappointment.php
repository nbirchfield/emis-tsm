<?php
    session_start();
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $doctor = $_POST['doctor'];
    $reason = $_POST['reason'];
    $datetime = $date . " " . $time;

    $firstname = stripcslashes($firstname);
    $lastname = stripcslashes($lastname);

    $con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

    # create sql query and bind parameters
    $verifystmt = mysqli_prepare($con, "select SUM(CASE WHEN datetime = ? THEN 1 ELSE 0 END) from appointment");
    mysqli_stmt_bind_param($verifystmt, 's', $datetime);

    # Query the database to see i
    if(mysqli_stmt_execute($verifystmt)) {
        mysqli_stmt_bind_result($verifystmt, $results);
        mysqli_stmt_fetch($verifystmt);
        mysqli_stmt_close($verifystmt);
    }

    if($results == 0) {
        $verifystmt2 = mysqli_prepare($con, "insert into appointment values (null, ?, ?, ?)");
        mysqli_stmt_bind_param($verifystmt2, 'sss', $datetime, $reason, $_SESSION["patientID"]);

        if(mysqli_stmt_execute($verifystmt2)) {
            mysqli_stmt_bind_result($verifystmt2, $results2);
            mysqli_stmt_fetch($verifystmt2);
            mysqli_stmt_close($verifystmt2);

            header("Location: http://galadriel.cs.utsa.edu/~group4/appointment.php");
            mysqli_free_result($results);
            exit;
        } else {
            echo "sql error: " . mysqli_errno($con);
        }

    }

?>
