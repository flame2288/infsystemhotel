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
<h1>infsyshotel</h1>

<?php
echo "<h2>infsyshotel</h2>";

$result = $conn->query("SELECT * FROM гости");

while ($row = $result->fetch()){
    echo $row['ID'];
    echo $row['Name'];
}
?>

</body>
</html>