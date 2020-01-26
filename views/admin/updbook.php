<?php
    if(isset($_POST['submit'])){
        Admin::updBook($id, $_POST['name_book'],$_POST['textarea'],$_POST['price'], $_POST['name_author'],$_POST['genres']);
        echo "submit success";
    }
?>
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
<div style="display:flex; justify-content: center;">
    <form action="" method="POST" style="display: flex; flex-direction: column; width: 50%;padding: 10px;">

        <select style="margin: 10px;" name="genres"  size="5" id="" multiple> 
            <?php foreach($genresList as $genresItem):?>
                <?php if($genresItem['id']==$booksItem['genre_id']):?>
                    <option type="text" name="<?php echo $genresItem['id'];?>" value="<?php echo $genresItem['id'];?>" style="padding: 5px;" selected>
                        <?php echo $genresItem['name_genre'];?>
                    </option>
                <?php else:?>
                    <option type="text" name="<?php echo $genresItem['id'];?>" value="<?php echo $genresItem['id'];?>" style="padding: 5px;">
                        <?php echo $genresItem['name_genre'];?>
                    </option>
                <?php endif?>
            <?php endforeach;?>
        </select> 

        <input name="name_author" type="text" value="<?php echo $booksItem['author_id'];?>" style="padding: 10px; margin: 10px;">
        <input name="name_book" type="text" value="<?php echo $booksItem['name_book'];?>" style="padding: 10px; margin: 10px;">
        <input name="price" type="text" value="<?php echo $booksItem['price'];?>" style="padding: 10px; margin: 10px;">
        <textarea name="textarea" id="" cols="100" rows="10" style="padding: 10px; margin: 10px;"><?php echo $booksItem['description'];?></textarea>
        <input type="submit" value="обновить даные книги" name="submit" style="width: 200px; margin: 10px;">
    </form>
</div>   
</body>
</html>