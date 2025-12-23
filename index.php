<?php
    echo "I love pizza<br>";
    // Это однострочный комментарий
    /*
    Это многострочный комментарий
    */
?>
<?php
    $name = "Bro";
    $age = 21;
    $price = 4.99;
    $is_online = false;
    echo "Hello {$name}<br>";
    echo "You are {$age} years old<br>";
?>
<?php
    $x = 10;
    $y = 2;
    $z = $x + $y;
    echo $z;
    $counter = 0;
    $counter++;
    echo $counter;
?>
<?php
    $number = -5.75;
    echo abs($number);
    echo round($number);
    echo pow(2, 3);
    echo sqrt(16);
    echo rand(1, 100);
?>

<!DOCTYPE html>
<html>
    <body>
        <button>Order a pizza</button>
        <form action="index.php" method="post">
            <label>Username:</label><br>
            <input type="text" name="username"><br>
            <label>Password:</label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Login">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = $_POST['password'];
                echo "Username: {$username}<br>";
            }
        ?>

    </body>
</html>
