<!--Tajae Anglin 1803630
Create a Chess Board template.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <!--Linked my css style sheet.-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <Table>
        <?php
            //creating a nested for loop that will create a 8*8 matrix
            //for our rows and columns.
            for ($row = 1; $row <=8; $row++) {
                echo "<tr>";
                    for ($col = 1; $col <= 8; $col++) {
                        //here we are adding the rows and columns to get the total amount
                        //which would be equal to 64. Then we are going to divide by 2 for
                        //each iteration of the loop so that if we divide by 2 and there is no
                        //remainder we are going to set that cell colour to black.
                        if (($row + $col) %2 == 0) {
                            echo "<td class = 'even_pattern'></td>";
                        } else {
                            echo "<td class = 'odd_pattern'></td>";
                        }
                    }
                echo "</tr>";
            }
        ?>
    </Table>
</body>
</html>