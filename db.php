<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        echo "You are connected.";
    } catch(mysqli_sql_exception) {
        echo "Could not connect.";
    }
?>
<?php
    include 'database.php';
    $username = "Patrick";
    $password = "rock3";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
    try {
        mysqli_query($conn, $sql);
        echo "User is now registered.";
    } catch(mysqli_sql_exception) {
        echo "Could not register user (username may be taken).";
    }
    mysqli_close($conn);
?>
