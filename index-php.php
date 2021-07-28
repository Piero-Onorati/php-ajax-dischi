<?php

include __DIR__.'/database/db.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <?php foreach ($records as $record) { ?>
    
            <div class="card">
                <div class="card_img">
                    <img src="<?php echo $record['poster'];?>" alt="">
                </div>
                <div class="card_text">
                    <h3><?php echo $record['title'];?></h3>
                    <h4><?php echo $record['author'];?></h4> 
                    <span><?php echo $record['year'];?></span>     
                </div>
    
            </div>
    
        <?php } ?>
    </div>




    
</body>
</html>