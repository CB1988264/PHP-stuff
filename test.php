<?php
for ($rows=1; $rows <= 8; $rows++) {
    echo "<tr>";
    for ($columns = 1; $columns <= 8; $columns++) {
        if (($rows + $columns) %2 == 0) {
            echo "<td class ='black'></td>";
        } else {
            echo "<td class='black'></td>";
        }
        echo "<td></td>";


    }
    echo  "</tr>";
}