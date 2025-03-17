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
    <?php   

    if(isset($res) && $res== ''):
    echo '<h3 style="color: red;">' . "No matched recored for this name<br>" . '</h>';
        elseif(isset($error)):
            echo '<h3 style="color: red;">' . $error . '</h>';
        endif;
        if(isset($res) && $res!= ''):
            echo $res;
            echo '<a href="/">Back to From..</a>';
            echo "<br>";
            echo '<a href="search.php">Go To Search..</a>'; 
        else:
            echo '<form method="post">
            <input type="text" name="Searched_name" placeholder="Search with name.."><br>
             <button type="submit" name="search">Search</button><br>
              <a href="/">Back to From..</a>
        </form>';
        endif;


    //     if(isset($res) && $res == ''):
    //         echo '<h3 style="color: red;">' . "No matched recored for this name<br>" . '</h>';
    //     elseif(isset($error)):
    //         echo '<h3 style="color: red;">' . $error . '</h>';
    //     endif;

    //     if(isset($res) && $res!=''):
    //         echo $res;
    //         echo '<a href="/">Back to From..</a>';
    //         echo "<br>";
    //         echo '<a href="search.php">Go To Search..</a>'; 
    //     else:
    //         echo '<form method="post">
    //     <input type="text" name="search" placeholder="Search with name.."><br>
    //      <button type="submit" name="search">Search</button>
    // </form>';
    // endif;
    // ?>

</body>
</html>