<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Каталог</title>
</head>
<body>
    <header><? include '../header.php' ?></header>

    <div class="container-fluid">
        <div class="container">
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-3 main-navi" style="background-color: black; margin-left: -36px;">
                <div class="categories mt-2">
                        <div class="category-case" style="margin-top: 20px; margin-bottom: 0px;">
                            <a href="../pages/flowers.php">Букеты</a> 
                        </div>
                        <br>
                        <div class="category-case">
                            <a href="../pages/decor.php">Декор</a> 
                        </div>
                        <br>
                        <div class="category-case">
                            <a href="../pages/care.php">Уход за цветами</a> 
                        </div>
                        <br>
                        <div class="category-case">
                            <a href="../pages/presents.php">Подарки и сувениры</a> 
                        </div>
                    </div>
                </div>
                <?php
                for($i=0; $i<3; $i++):
                ?>
                <div class="col-lg-3 flowers" style="margin-left: 12px;">
                    <div class="category-case" style="">
                        <img src="../imgs/decor/<?php echo($i+1)?>.png" alt="">
                        <a href="#"><p style="margin-top: 4%;"></p>Декор <?php  echo ($i+1) ?></a>
                        <small>1499 ₽</small>
                        <div class="form-cont">
                            <form action="check.php" method="post">
                                <input type="email" name="email" placeholder="Введите ваш E-Mail " class="form-control" >
                                <input type="phone" name="phone" placeholder="Введите ваш номер телефона" class="form-control">
                                <button type="submit" name="send" class="send">Оформить заказ</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
                <div class="col-lg-3 main-navi" style="margin-left: -36px; margin-top: 20px;">
                </div>    
            </div>
        </div>
    </div>
    
    <footer><? include '../footer.php' ?></footer>
</body>
</html>