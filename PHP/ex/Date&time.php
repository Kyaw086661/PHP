<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Today Date</h1>
    <?php
    date_default_timezone_set("Asia/Yangon");
    echo date("D-d-M-Y h:i:a");
    echo "<br>";
    // add 5 day in current date
    $currentDate = date_create(date("d-M-y"));
    date_add($currentDate,date_interval_create_from_date_string("5 days"));
    echo date_format($currentDate,"d-M-Y");
    // subtract 5 days in current 
    echo "<br>";
    $current_date = date_create(date('d-m-y'));
    date_sub($current_date,date_interval_create_from_date_string("5 days"));
    echo date_format($current_date,"d-M-Y");
    echo "<br>";
    echo cal_days_in_month(CAL_GREGORIAN,date("m"),date('Y'));
    ?>
</body>
</html>