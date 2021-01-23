<?php
    include('sql_connect.php');
    header("Content-Security-Policy: default-src 'self'; script-src 'self'; object-src 'self'; style-src 'self'; img-src 'self'; media-src 'self'; frame-src 'self'; font-src 'self'; connect-src 'self'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bezpieczeństwo aplikacji webowych</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="comment">
        <form method="POST">
        <textarea name="comment_content" placeholder="Wpisz swój komentarz" rows="6" cols="50"></textarea><br></br>
        <input type="submit" value="Wyślij komentarz" name="add_comment">
        <?php
        if(isset($_POST['add_comment'])){
            
            $content=$_POST['comment_content'];
                $query="INSERT INTO comments
                (`content`)values
                ('$content')";
                mysqli_query($mysqli,$query);
            }
        ?>
        </form>
    </div><br>
    <div id="nav">
        <a href="comments.php">Strona z komentarzami</a>
    </div>
</body>
</html>