<?php
    require "controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(isset($errors)):
        foreach ($errors as $error):
            echo '<h3 style="color: red;">' . $error . ' </h3>';
        endforeach;
        endif;
    if(isset($success)):
        echo '<h3 style="color: green;">' . $success . '</h3>';
        echo '<a href="/">Back to From..</a>';
        echo "<br>";
        echo '<a href="search.php">Go To Search..</a>'; 
    else:
        echo '<form method="post">
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="text" name="phone" placeholder="010-123-456-78"><br>
        <input type="text" name="email" placeholder="example@domain.com"><br>
        <button type="submit" name="submit">Add</button>    
        </form>';
         echo '<a href="search.php">Go To Search..</a>';
    endif;  
    ?>

</body>
</html>