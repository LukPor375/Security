<?php
    include('sql_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
 
<link rel="stylesheet" href="style.css">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'; object-src 'self'; style-src 'self'; img-src 'self'; media-src 'self'; frame-src 'self'; font-src 'self'; connect-src 'self'">  
    <title>Bezpieczeństwo aplikacji webowych</title>
</head>
<body>
<a href='index.php'>Strona główna</a>
    <?php
        $result= $mysqli->query("SELECT * FROM comments");
        if ($result->num_rows > 0) {
            while($row=$result->fetch_assoc()){
                echo "<table>";
                echo "<td>";
                echo "<h4>Numer komentarza: ".$row['id']."</h4><br>".$row['content']."<br>"."Data dodania: ".$row['date'];
                echo "</td>";
                echo "</table>";
            }
            
        }
   
    ?>
    
</body>
</html>