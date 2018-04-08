<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/8
 * Time: 10:14
 */
header("content-type:text/html;charset=utf-8");
echo "<table>";
for($i = 1;$i <= 9;$i++){
    echo "<tr>";
    for($j = 1;$j <= $i;$j++){
        echo "<td>$i"."X".$j."=".($i*$j)."</td>";
    }
    echo "</tr>";
}
echo "段章就是SB,老子不想理他了，天天迟到";