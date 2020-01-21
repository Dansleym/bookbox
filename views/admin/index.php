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

<ul>
    <li style="display: flex; border-bottom: 2px solid black; width: 900px;">
        <div style="width: 200px; padding: 10px;">Автор:</div>
        <div style="width: 200px; padding: 10px;">Книга:</div>
        <div style="width: 100px; padding: 10px;">Цена:</div>
        <div style="width: 100px; padding: 10px;">Код:</div>
        <div style="width: 200px; padding: 10px;"><a href=""></a></div>
        <div style="width: 20px;margin-right: 20px;"><a href=""></a></div>
    </li>

    <?php $i = 0;?>
    <?php foreach($booksList as $booksItem): $i++;?>

        <?php if($i%2 == 0):?>        
            <li style="display: flex; width: 900px;background: pink; opacity:">
                <div style="width: 200px; padding: 10px;"><?php echo $booksItem['name_author'];?></div>
                <div style="width: 200px; padding: 10px;"><?php echo $booksItem['name_book'];?></div>
                <div style="width: 100px; padding: 10px;"><?php echo $booksItem['price'];?>$</div>
                <div style="width: 100px; padding: 10px;"><?php echo $booksItem['id'];?></div>
                <div style="width: 200px; padding: 10px;"><a href="/bookbox/index.php/admin/book/<?php echo $booksItem['id']?>" style="text-decoration: none;">редактировать</a></div>
                <div style="width: 20px;margin-right: 20px;"><a href="javascript:PopUpShow()" title="delete" style="text-decoration: none;"><div style="transform: rotate(-45deg);color: red;font-weight: 600; font-size: 30px;">+</div></a></div>
                
                
            </li> 
        <?php else:?> 
            <li style="display: flex; width: 900px;background: skyblue;">
                <div style="width: 200px; padding: 10px;"><?php echo $booksItem['name_author'];?></div>
                <div style="width: 200px; padding: 10px;"><?php echo $booksItem['name_book'];?></div>
                <div style="width: 100px; padding: 10px;"><?php echo $booksItem['price'];?>$</div>
                <div style="width: 100px; padding: 10px;"><?php echo $booksItem['id'];?></div>
                <div style="width: 200px; padding: 10px;"><a href="/bookbox/index.php/admin/book/<?php echo $booksItem['id']?>" style="text-decoration: none;">редактировать</a></div>
                <div style="width: 20px; margin-right: 20px;"><a href="javascript:PopUpShow()" style="text-decoration: none;"><div style="transform: rotate(-45deg);color: red;font-weight: 600; font-size: 30px;">+</div></a></div>
            </li> 
        <?php endif;?>
        
    <?php endforeach;?>    
</ul>

<div class="b-popup" id="popup1">
    <div class="b-popup-content">
        Text in Popup
    <a href="javascript:PopUpHide()">Hide popup</a>
    </div>
</div>

<script src="/bookbox/assets/js/jquery-3.4.1.min.js"></script>
<script src="/bookbox/assets/js/bootstrap.min.js"></script>
<script src="/bookbox/assets/js/main.js"></script>

<script>
    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide();
    });
    //Функция отображения PopUp
    function PopUpShow(){
        $("#popup1").show();
    }
    //Функция скрытия PopUp
    function PopUpHide(){
        $("#popup1").hide();
    }
</script>

</body>
</html>