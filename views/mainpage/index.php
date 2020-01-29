<?php include ROOT . '/views/loyouts/header.php';?>

<div class="rightside">
    <ul>
        <?php foreach($genresList as $genresItem):?>
            <li><a href="/bookbox/catalog/<?php echo $genresItem['id'];?>/page-1"><?php echo $genresItem['name_genre'];?></a></li>
        <?php endforeach;?>
    </ul>
</div>

    <div class="nav">
        <h2>Главная страница</h2>

        <div class="book-container">
    
        <?php $newbooksList = array_slice($booksList, 0, 5, true);?>
        <?php foreach($newbooksList as $booksItem):?>
            
            <div class="book">
                <div class="book-img">
                    <a href="/bookbox/books/<?php echo $booksItem["id"]?>"><?php echo '<img src="\bookbox/assets/img/'.$booksItem["image"].'" title="'.$booksItem["name_book"].'">' ;?>
                </a></div>
                <div class="book-info">

                    <a href="/bookbox/author/<?php echo $booksItem["author_id"]?>" style="text-decoration: none; color: black;">
                        
                        <h3 class="book-author"><?php echo $booksItem['name_author'];?></h3>

                    </a>

                    <a href="/bookbox/books/<?php echo $booksItem["id"]?>" style="text-decoration: none;">

                        <h3 class="book-name"><?php echo $booksItem['name_book'];?></h3>

                    </a>
                    <p class="book-price"><?php echo $booksItem['price'];?>$</p>
                    <p class="book-description"><?php echo $booksItem['description'];?></p>
                    <a href="/bookbox/books/<?php echo $booksItem["id"]?>" style="text-decoration: none;"> Читать&nbsp;далее&nbsp;»</a>

                </div>
            </div>
        <?php endforeach;?>

        </div>
    </div>
    
<?php include ROOT . '/views/loyouts/footer.php';?>


                