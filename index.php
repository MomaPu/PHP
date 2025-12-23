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
<?php
    $age = 25;
    if ($age >= 18 && $age < 100) {
        echo "You may enter the site.";
    } else if ($age >= 100) {
        echo "You are too old to enter.";
    } else {
        echo "You must be 18+ to enter.";
    }
?>
<?php
    $temp = 25;
    $isSunny = true;
    if ($temp >= 0 && $temp <= 30 && $isSunny) {
        echo "The weather is good.";
    } else {
        echo "The weather is bad.";
    }
?>
<?php
$grade = 'B';
switch ($grade) {
    case 'A':
        echo "You did great!";
        break;
    case 'B':
        echo "You did good!";
        break;
    case 'C':
        echo "You did okay.";
        break;
    case 'D':
        echo "You did poorly.";
        break;
    case 'F':
        echo "You failed.";
        break;
    default:
    echo "{$grade} is not a valid grade.";
    }
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
        <form action="index.php" method="post">
            <label>Radius:</label><br>
            <input type="text" name="radius"><br>
            <input type="submit" value="Calculate">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $radius = $_POST['radius'];
                $circumference = round(2 * pi() * $radius, 2);
                $area = round(pi() * pow($radius, 2), 2);
                $volume = round((4/3) * pi() * pow($radius, 3), 2);
                echo "Circumference: {$circumference} cm<br>";
                echo "Area: {$area} cm²<br>";
                echo "Volume: {$volume} cm³<br>";
            }
        ?>

    </body>
</html>
