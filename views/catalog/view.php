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

        <?php foreach($genresList as $genresItem):?>
            <?php if($genresItem['id'] == $catalog):?>  
                <h2><?php echo $genresItem["name_genre"]?></h2>
            <?php endif;?> 
        <?php endforeach;?>

        <?php if($catalogItems == null):?>  
            <h3>Книги данного жанра отсутствуют...</h3>
        <?php endif;?>  

        <?php foreach($catalogItems as $catalogItem):?>
            
            <div class="book">
                <div class="book-img">
                    <a href="/bookbox/index.php/books/<?php echo $catalogItem["id"]?>">
                        <?php echo '<img src="\bookbox/img/'.$catalogItem["image"].'" title="'.$catalogItem["name"].'">' ;?>
                    </a>
                </div>
                <div class="book-info">

                    <a href="/bookbox/index.php/author/<?php echo $catalogItem["author_id"]?>" style="text-decoration: none; color: black;">
                                                
                        <?php foreach($authorsList as $authorsItem):?>
                            <?php if($catalogItem['author_id']==$authorsItem['id']):?>
                                <h3 class="book-author"><?php echo $authorsItem['name'];?></h3>
                            <?php endif;?>
                        <?php endforeach;?>

                    </a>

                    <a href="/bookbox/index.php/books/<?php echo $catalogItem["id"]?>" style="text-decoration: none;">
                        <h3 class="book-name"><?php echo $catalogItem['name'];?></h3>
                    </a>

                    <p class="book-price"><?php echo $catalogItem['price'];?>$</p>
                    <p class="book-description"><?php echo $catalogItem['description'];?></p>
                  
                  <a href="/bookbox/index.php/books/<?php echo $catalogItem["id"]?>" style="text-decoration: none;"> Читать&nbsp;далее&nbsp;»</a>
                </div>
            </div>
        <?php endforeach;?>

        </div>
    </div>

<?php include ROOT . '/views/loyouts/footer.php';?>


                