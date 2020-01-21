<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bookbox/assets/css/main.css">
    <title>Admin panel</title>
</head>
<body>
    
    <div style="display: flex; flex-direction: column; width: 50%;padding: 10px;">
        <input type="text" value="<?php echo $booksItem['name_genre'];?>" style="padding: 10px; margin: 10px;">
        <input type="text" value="<?php echo $booksItem['name_author'];?>" style="padding: 10px; margin: 10px;">
        <input type="text" value="<?php echo $booksItem['name_book'];?>" style="padding: 10px; margin: 10px;">
        <input type="text" value="<?php echo $booksItem['price'];?>" style="padding: 10px; margin: 10px;">
        <textarea name="" id="" cols="100" rows="10" style="padding: 10px; margin: 10px;"><?php echo $booksItem['description'];?></textarea>
    </div>
    
</body>
</html>