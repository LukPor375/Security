<?php
    include('sql_connect.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,tr{
            border: 1px solid black;
            width:100%;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="script-src 'self';content=default-src 'self'">
    <title>Document</title>
</head>
<body>
<a href='index.php' style="text-align:center;">Strona główna</a>
    <?php
    header("Content-Security-Policy: default-src 'self'");
        $result= $mysqli->query("SELECT * FROM comments");
        if ($result->num_rows > 0) {
            while($row=$result->fetch_assoc()){
                echo "<table>";
                echo "<tr>";
                echo "<h4><span>Numer komentarza: </span>".$row['id']."</h4><br>".$row['content']."<br>"."<span>Data dodania: </span>".$row['date'];
                echo "</tr>";
                echo "</table>";
            }
            
        }
   
    ?>
    
</body>
</html>