<!doctype php>
<html lang="en">

<head>
    <title>CS-481 Assignment 2 (18th October, 2021)</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../../../common_styles.css">
</head>

<body>
    <div class="center-card">
        <div class="card">
            <div class="card-header">
                <h1><u>Information Extracted from Scholar ID: <?php echo $_GET["scholar-id"]; ?></u></h1>
                <h2><u>Built by - Dhiman Seal (1814071)</u></h2>
            </div>
            <div class="card-body">
                <?php include "logic.php" ?>
                <input class="back-button" type="button" value="Try Again" onclick="window.location.href='../index.html';">
            </div>
        </div>
</body>

</html>