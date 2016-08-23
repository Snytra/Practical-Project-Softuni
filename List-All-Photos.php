<!DOCTYPE html>
<html>
<head>
    <title>List All  Photos</title>
</head>
<body>

<?php
{
    $mysqli = new mysqli('localhost', 'root', '', 'blog');
    $mysqli->set_charset("utf8");
    if ($mysqli->connect_errno) die('Cannot connect to MySQL');
    $result = $mysqli->query('SELECT * FROM photos ');
    if (!$result) die('Cannot read users table from MySQL');
    echo "<table>\n";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>";?><img src="<?php echo  $row["img_path"];?>" height="350" width="350"> <?php echo "</td>";
        echo "<td>"; echo $row["img_name"]; echo "</td>";

        echo "</tr>";
    }
    echo "</table>\n";
}
//https://www.youtube.com/watch?v=aFiiX2799Vo
?>

</body>
</html>
