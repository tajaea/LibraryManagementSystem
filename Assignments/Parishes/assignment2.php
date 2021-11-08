<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <table>
        <?php
            $jamaican_parishes = array("Kingston", "St. Andrew", "Portland", "St. Thomas", "St. Catherine", "St. Mary", "St. Ann", "Manchester", "Clarendon", "Hanover", "Westmoreland", "St. James", "Trelawny", "St. Elizabeth");
            //$sorted_list = rsort($jamaican_parishes);
            $array_length = count($jamaican_parishes);

            $i = 0;

            while ($i < $array_length) {
                //echo $jamaican_parishes[$i] ."<br />";
                $i++;
            }
        ?>
        <tr>
            <td><?= $jamaican_parishes[0]?></td>
            <td><?= $jamaican_parishes[1]?></td>
            <td><?= $jamaican_parishes[2]?></td>
            <td><?= $jamaican_parishes[3]?></td>
            <td><?= $jamaican_parishes[4]?></td>
        </tr>
        <tr>
            <td><?= $jamaican_parishes[5]?></td>
            <td><?= $jamaican_parishes[6]?></td>
            <td><?= $jamaican_parishes[7]?></td>
            <td><?= $jamaican_parishes[8]?></td>
            <td><?= $jamaican_parishes[9]?></td>
        </tr>
        <tr>
            <td><?= $jamaican_parishes[10]?></td>
            <td><?= $jamaican_parishes[11]?></td>
            <td><?= $jamaican_parishes[12]?></td>
            <td><?= $jamaican_parishes[13]?></td>
        </tr>
    </table>
    
</body>
</html>