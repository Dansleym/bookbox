<?php include ROOT . '/views/loyouts/header.php';?>

<div class="rightside">
    <ul>
        <?php foreach($genresList as $genresItem):?>
            <li><a href="/bookbox/index.php/catalog/<?php echo $genresItem['id'];?>"><?php echo $genresItem['name_genre'];?></a></li>
        <?php endforeach;?>
    </ul>
</div>

    <div class="nav">
        <h2>Книги современных отечественных и зарубежных писателей</h2>
        <p>В этом разделе вы найдете: новинки современной художественной литературы со всего мира, нашумевшие бестселлеры, популярные книги известных отечественных и зарубежных писателей, экранизированные произведения.</p>
        
        <div class="book-container">
    
        <?php foreach($booksList as $booksItem):?>
            
            <div class="book">
                <div class="book-img">
                    <a href="/bookbox/index.php/books/<?php echo $booksItem["id"]?>"><?php echo '<img src="\bookbox/img/'.$booksItem["image"].'" title="'.$booksItem["name"].'">' ;?>
                </a></div>
                <div class="book-info">
                    <h3 class="book-author"><?php echo $booksItem['author_id'];?></h3>
                    <h3 class="book-name"><?php echo $booksItem['name'];?></h3>
                    <p class="book-description"><?php echo $booksItem['description'];?></p>
                  <span class="book-price"><?php echo $booksItem['price'];?>$</span>
                </div>
            </div>
        <?php endforeach;?>

        </div>
    </div>




<?php include ROOT . '/views/loyouts/footer.php';?>


                