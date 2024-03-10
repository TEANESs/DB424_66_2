<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หมากฮอส</title>
</head>
<body>
<?
    echo "<table border='1'>";
    for($a=1;$a<=8;$a++)
    {
        if($a%2!=0) //เช็คแถวคู่คี่ ถ้าแถวคี่ก็ขาวดำสลับกัน แถวคู่ก็ดำขาว
        {
            echo "<tr>";
            for ($i=1;$i<=8;$i++)
            {
                if($i%2==1)
                    $color = "white";
                else
                    $color = "black";            
            echo  "<td width='40' height='40' bgcolor=$color>";
            echo "</td>";
            }
            echo "</tr>";
        } else{ 
                echo "<tr>";
                for ($i=1;$i<=8;$i++)
                {
                    if($i%2==1)		
                        $color = "black";
                    else
                        $color = "white";
                    echo  "<td width='40' height='40' bgcolor=$color >";
                    echo"</td>";
                }
                echo "</tr>";
               } 
    } 
echo "</table>";
?>
</body>
</html>