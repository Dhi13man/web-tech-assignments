<?php
// For convenience.
$h3EndTag = "</h3>";
$input = $_GET["scholar-id"];
// Convert $input to string
$input = (string)$input;
// If input does not have length 7, then it is not a valid scholar id
if (strlen($input) != 7) {
    echo "<h3>Invalid Scholar ID</h3>";
    echo "<h3>Please enter a valid Scholar ID</h3>";
} else {
    // If input has length 7, then it is a valid scholar id
    // Extract the first 2 digits of the scholar id
    $first_two_digits = substr($input, 0, 2);
    echo "<h3>The Student was admitted in: 20" . $first_two_digits . $h3EndTag;
    // Extract the second 2 digits of the scholar id
    $second_two_digits = substr($input, 2, 2);
    if ($second_two_digits[0] == "1") {
        $branch = "";
        switch ($second_two_digits[1]) {
            case "1":
                $branch = "Civil Engineering";
                break;
            case "2":
                $branch = "Mechanical Engineering";
                break;
            case "3":
                $branch = "Electrical Engineering";
                break;
            case "4":
                $branch = "Electronics and Communication Engineering";
                break;
            case "5":
                $branch = "Computer Science and Engineering";
                break;
            case "6":
                $branch = "Electronics and Instrumentation Engineering";
                break;
            default:
                $branch = "Invalid Branch";
                break;
        }
        echo "<h3>The Student is enrolled for B. Tech. in " . $branch . "." . $h3EndTag;
    } else if ($second_two_digits[0] == "2") {
        switch ($second_two_digits[1]) {
            case "1":
                $branch = "Civil Engineering";
                break;
            case "2":
                $branch = "Computer Science and Engineering";
                break;
            case "3":
                $branch = "Electrical Engineering";
                break;
            case "4":
                $branch = "Electronics and Communication Engineering";
                break;
            case "5":
                $branch = "Electronics and Instrumentation Engineering";
                break;
            case "6":
                $branch = "Mechanical Engineering";
                break;
            default:
                $branch = "Invalid Branch";
                break;
        }
        echo "<h3>The Student is enrolled for M. Tech. in " . $branch . "." . $h3EndTag;
    } else if ($second_two_digits[0] == "3") {
        echo "<h3>The Student is enrolled for PhD.</h3>";
    } else {
        echo "<h3>Unable to deduce what course the student is enrolled in.</h3>";
    }
}
