<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusinessCard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
    $companyName = "WolffAccountingCompany";
    $phoneNumber = "999-888-777";
    $email = "wolffaccounting@example.com";

    $date_day = date("l");
    $date_hour = date("H");
    $date_word = null;
    if($date_hour<6 || $date_hour>=21) {
        $date_word = "night";
    } elseif($date_hour>=6 && $date_hour<12) {
        $date_word = "morning";
    } elseif($date_hour>=12 && $date_hour<17) {
        $date_word = "afternoons";
    } elseif($date_hour>=17 && $date_hour<21) {
        $date_word = "evening";
    }
    
?>

    <div id="welcome">
        <h1>Welcome on this beautiful <?php echo "{$date_day} {$date_word}"; ?> to the <?php echo $companyName; ?> website.</h1>
        <h1>Welcome to the <?php echo $companyName; ?> website</h1>
        <h2><?php echo $companyName; ?>, as the name suggests, offers profesional accounting services.</h2>
    </div>

    <br>

    <div id="priceList">
        <h3>Price list</h3>
        <table>
            <tr>
                <th>Quantity of documents</th>
                <th>Tax ledger without VAT</th>
                <th>Lump sum on registered income</th>
                <th>Accounting for a partnership</th>
            </tr>
            <tr>
                <th>0-50</th>
                <th>400 zł</th>
                <th>300 zł</th>
                <th>500 zł</th>
            </tr>
            <tr>
                <th>51-100</th>
                <th>500 zł</th>
                <th>440 zł</th>
                <th>570 zł</th>
            </tr>
            <tr>
                <th>101-200</th>
                <th>800 zł</th>
                <th>740 zł</th>
                <th>860 zł</th>
            </tr>
            <tr>
                <th>201-300</th>
                <th>1100 zł</th>
                <th>1100 zł</th>
                <th>1280 zł</th>
            </tr>
        </table>
    </div>

    <br>

    <div id="contact">
        <h3>Contact us</h3>
        <h4>Phone number: <?php echo $phoneNumber ?></h4>
        <h4>Adress e-mail: <?php echo $email ?></h4>

    </div>
    
</body>
</html>