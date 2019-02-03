<!DOCTYPE html>
<html>

    <title>MIDTERM-PHP-ARRAY</title>
    <body>
        <div>
        <?php
            $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
            krsort($age);
            
            foreach($age as $x => $x_value){
                echo "<tr>";
                echo "<td>" . "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
        ?>
        </div>
    </body>
</html>