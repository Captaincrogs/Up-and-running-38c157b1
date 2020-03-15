<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "netland";

try {
    $conn = new PDO("mysql:host=$servername;dbname=netland", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connectie met database is succesvol";
    }
catch(PDOException $e)
    {
    echo "kan geen connectie met database maken!: " . $e->getMessage();
    }

?>


</body>

</html>