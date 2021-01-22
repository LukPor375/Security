<?php
    include('sql_connect.php');
    header("Content-Security-Policy: script-src 'self'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="Content-Security-Policy" 
        content="default-src 'self' data: gap: 'unsafe-eval' ws: ; 
        style-src 'self' 'unsafe-inline'; 
        script-src https: *.example.com ;
        media-src 'none'; 
        font-src *;
        connect-src *;
        img-src 'self' data: content:;">
    <title>Bezpieczeństwo aplikacji webowych</title>
    <style>
        #comment{
            float: left;
            padding:10px;
        }
        #nav{
            text-align: center;
            float: left;
        }
        a:link{
            text-decoration:none;
        }
        html{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100%;
        }
    </style>
</head>
<body>
    <div id="comment">
        <form method="POST">
        <textarea name="comment_content" placeholder="Wpisz swój komentarz" rows="6" cols="50" style="resize: none;"></textarea><br></br>
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