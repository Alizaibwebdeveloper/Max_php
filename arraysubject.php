<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <?php
        $subjects = array("English", "ps", "Math", "Urdu");
        $total_obtained_marks = 0;
        
        for ($i = 0; $i < count($subjects); $i++) {
            
            if (isset($_POST[$subjects[$i]])) {

                $obt_marks = $_POST[$subjects[$i]];2
                echo '<input type="number" name="' . $subjects[$i] . '" value="' . $obt_marks . '" placeholder="' . $subjects[$i] . '"><br>';
                $total_obtained_marks += (int)$obt_marks; 
                
            } else {
                echo '<input type="number" name="' . $subjects[$i] . '" placeholder="' . $subjects[$i] . '"><br>';
            }
        }
        ?>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo 'Total Obtained Marks: ' . $total_obtained_marks;
    }
    ?>
</body>
</html>
