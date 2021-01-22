<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bezpieczeństwo aplikacji webowych</title>
    <style>
        #comments{
            float: left;
            padding:10px;
        }
        #nav{
            text-align: center;
            float: left;
        }
        html{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100%;
        }
  
    </style>
</head>
<body>
    <div id="comments">
        <form method="POST">
        <textarea name="comments" placeholder="Wpisz swój komentarz" rows="6" cols="50" style="resize: none;"></textarea><br></br>
        <input type="submit" value="Wyślij komentarz">
        </form>
    </div><br>
    <div id="nav">
        <a href="comments.html">Strona z komentarzami</a>
    </div>
</body>
<script>

</script>
</html>