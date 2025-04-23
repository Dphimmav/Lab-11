<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Dockerized Web App</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Welcome to Lab 11!</h1>
    <p>This page is served by PHP and Docker.</p>
    <?php echo "<p>Today's date is: " . date("m-d-Y") . "</p>"; ?>
    <button onclick="showMessage()">Click Me!</button>
</body>
</html>
