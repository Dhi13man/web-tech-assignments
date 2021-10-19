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
                <h1><u>Multiplication Table of <?php echo $_GET["number"]; ?></u></h1>
                <h2><u>Built by - Dhiman Seal (1814071)</u></h2>
            </div>
            <div class="card-body" id="multiplication-table">
                <?php
                for ($i = 1; $i <= $_GET["rows"]; $i++) {
                    echo $_GET["number"]."&emsp;*&emsp;".$i."&emsp;=&emsp;".$_GET["number"]*$i."<br>";
                }
                ?>
                <input type="button" value="Try Again" onclick="window.location.href='../index.html';" class="back-button">
            </div>
        </div>
</body>

</html> 