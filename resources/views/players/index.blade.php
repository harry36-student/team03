<!DOCTYPE html>
    <head>
        <style type="text/css">
            table {
                margin:0 auto;
            }
            .warp{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <table border="1">
        <tr class="warp">
            <td>id</td>
            <td>name</td>
            <td>number</td>
            <td>location</td>
            <td>habit</td>
            <td>height</td>
            <td>weight</td>
            <td>nation</td>
            <td>rank</td>
            <td>teamid</td>
            <td>created_at</td>
            <td>updated_at</td>
            <td>更改</td>
        </tr>
        <?php 
        foreach ($players as $user) {
            echo "<tr>";
            echo "<td>".$user->id."</td>";
            echo "<td>".$user->name."</td>";
            echo "<td>".$user->number."</td>";
            echo "<td>".$user->location."</td>";
            echo "<td>".$user->habit."</td>";
            echo "<td>".$user->height."</td>";
            echo "<td>".$user->weight."</td>";
            echo "<td>".$user->nation."</td>";
            echo "<td>".$user->rank."</td>";
            echo "<td>".$user->teamid."</td>";
            echo "<td>".$user->created_at."</td>";
            echo "<td>".$user->updated_at."</td>";
            echo "<td><button type=\"button\">刪除</button><button type=\"button\">更新</button></td>";
            echo "</tr>";
        }
        ?>
        </table>
    </body>
</html>