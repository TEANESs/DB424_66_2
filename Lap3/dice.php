<?php
function dices_roller($score = false ){
    $dice1 = rand (1,6);
    $dice2 = rand (1,6); 
    $result = $dice1 + $dice2;
    $display = '2 dices roll => ' ;
    $display .= $score ? " {$dice1} + {$dice2} => " : ''; 
    $display .= " ผลรวมคือ {$result}";
    return $display;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joker 666</title>
</head>
<body>
<center>
     <b>
          <FONT size="16">ยินดีต้อนรับสู่ Joker 666 </FONT>
          
     </b>
</center>
<center>
<img src="dicee.png"width="250px" height="250px">
</center>
<center>
    <h1>without score</h1>
    <?php echo dices_roller();?>
    <h2>with score</h2>
    <?php echo dices_roller(true);?>

    </center>
<center>
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
            echo  "<td width='80' height='80' bgcolor=$color>";
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
                    echo  "<td width='80' height='80' bgcolor=$color >";
                    echo"</td>";
                }
                echo "</tr>";
               } 
    } 
echo "</table>";
?>
</center>
</body>
</html>