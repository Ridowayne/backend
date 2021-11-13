<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>days</title>
</head>
<body>
    
<?php
$dayofweek = date("w");

switch ($dayofweek) {
    case 1:
        echo "<p>Today is Monday</p>";
        break;
    case 2:
            echo "<p>Today is Tuesday</p>";
            break;
    case 3:
        echo "<p>Today is Wednesday</p>";
        break;
    case 4:
            echo "<p>Today is Thursday</p>";
            break;
    case 5:
            echo "<p>Today is Friday</p>";
            break;
    case 6:
            echo "<p>Today is Saturday</p>";
            break;
    case 0:
        echo "Today is Sunnday";
        break;
}
    
?>
</body>
</html>