<?php
require "dbconnect.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<h1>информационная система гостиничного комплекса</h1>

<?php
echo "<h2>Гости</h2>";

$result = $conn->query("SELECT * FROM гости");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
</tr>";

while ($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>