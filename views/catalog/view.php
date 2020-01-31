<?php include ROOT . '/views/loyouts/header.php';?>

<div class="rightside">
    <ul>
        <?php foreach($genresList as $genresItem):?>
            <li>
                <?php if($genresItem['id'] == $catalog):?> 
                    <a href="/bookbox/catalog/<?php echo $genresItem['id'];?>/page-1" style="font-weight: 600;">             
                    &#xab;<?php echo $genresItem['name_genre'];?>&#xbb;
                    </a>
                    <?php else:?> 
                    <a href="/bookbox/catalog/<?php echo $genresItem['id'];?>/page-1">             
                        <?php echo $genresItem['name_genre'];?>
                    </a>
                <?php endif;?>     
            </li>
        <?php endforeach;?>
    </ul>
</div>
    <div class="nav">
    <h2>Книги по жанрам</h2>
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
                        <a href="/bookbox/books/<?php echo $catalogItem["id"]?>">
                            <?php echo '<img src="\bookbox/assets/img/'.$catalogItem["image"].'" title="'.$catalogItem["name_book"].'">' ;?>
                        </a>
                    </div>
                <div class="book-info">
                    <?php $autors = explode(", ", $catalogItem['name_author']);$i=0;?>
                    <?php foreach($autors as $aItem):?>

                        <?php foreach($authorsList as $authorsItem):?>

                            <?php if($aItem == $authorsItem['name_author']):?>  
                                <a href="/bookbox/author/<?php echo $authorsItem["id"]?>" style="text-decoration: none; color: black;">
                                     <?php if($i > 0):?> 
                                        <?php echo ', ';?>
                                     <?php endif;?>           
                                    <span style="color: black; font-size: 1.3em;"><?php echo $authorsItem['name_author'];?></span>
                                    
                                </a>
                                <?php $i++;?>
                                
                            <?php endif;?>

                        <?php endforeach;?>

                    <?php endforeach;?>
                    <a href="/bookbox/books/<?php echo $catalogItem["id"]?>" style="text-decoration: none;">

                        <h3 class="book-name"><?php echo $catalogItem['name_book'];?></h3>

                    </a>
                    <p class="book-price"><?php echo $catalogItem['price'];?>$</p>
                    <p class="book-description"><?php echo $catalogItem['description'];?></p>
                  
                  <a href="/bookbox/books/<?php echo $catalogItem["id"]?>" style="text-decoration: none;"> Читать&nbsp;далее&nbsp;»</a>
                </div>
            </div>
        <?php endforeach;?>
             <?php echo $pagination->get(); ?>
        </div>
    </div>
    
<?php include ROOT . '/views/loyouts/footer.php';?>
