<?php
    include('sql_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'; object-src 'self'; style-src 'self'; img-src 'self'; media-src 'self'; frame-src 'self'; font-src 'self'; connect-src 'self'">   
<link rel="stylesheet" href="style.css">  
<head>
    <meta charset="UTF-8">
    <title>Bezpieczeństwo aplikacji webowych</title>
</head>
<body>
<a href='index.php' style="text-align:center;">Strona główna</a>
    <?php
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