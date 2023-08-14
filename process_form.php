
<!DOCTYPE html>
<html>
<head>
    <title>Holiday Planning</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $destination = $_POST["destination"];
        $days = $_POST["days"];
        $budget = $_POST["budget"];

        // Some simple calculations for the holiday plan
        $per_day_budget = $budget / $days;
        $message = "Your holiday plan for $destination:\n";
        $message .= "Number of days: $days\n";
        $message .= "Budget: $budget $\n";
        $message .= "Daily budget: $per_day_budget $\n";

        echo "<h1>Holiday Planning Summary</h1>";
        echo "<pre>$message</pre>";
    }
    ?>
</body>
</html>
