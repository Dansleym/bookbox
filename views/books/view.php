<?php include ROOT . '/views/loyouts/header.php';?>
<div class="rightside">
    <ul>
        <?php foreach($genresList as $genresItem):?>
            <li><a href="/bookbox/index.php/catalog/<?php echo $genresItem['id'];?>"><?php echo $genresItem['name_genre'];?></a></li>
        <?php endforeach;?>
    </ul>
</div>

    <div class="nav">

        <div class="book-container">

            
            <div class="book">
                <div class="book-img">
                    <a href="/bookbox/index.php/books/<?php echo $booksItem["id"]?>"><?php echo '<img src="\bookbox/img/'.$booksItem["image"].'" title="'.$booksItem["name"].'">' ;?>
                </a></div>
                <div class="book-info">

                        <?php foreach($authorsList as $authorsItem):?>
                            <?php if($id==$authorsItem['id']):?>
                                <h3 class="book-author"><?php echo $authorsItem['name'];?></h3>
                            <?php endif;?>
                        <?php endforeach;?>


                    <h3 class="book-name"><?php echo $booksItem['name'];?></h3>
                  <span class="book-price"><?php echo $booksItem['price'];?>$</span>
                  <br>
                  <a href="#">buy now</a>
                  
                </div>
            </div>
            <h2>Описание книги</h2>
            <div class="fullbook-description">
                <p class="idbook-description"><?php echo $booksItem['description'];?></p>
            </div>
            

        </div>
    </div>

<?php include ROOT . '/views/loyouts/footer.php';?>


                