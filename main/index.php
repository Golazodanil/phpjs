<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Главная</title>
</head>
<body>
    <header><? include './header.php' ?></header>
    


    <div id="template" class="banner">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="container">
					<div class="row p-5">
						<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
							<img class="img-fluid" src="imgs/5.jpg" alt="">
						</div>
						<div class="col-lg-6 mb-0 d-flex align-items-center">
							<div class="text-align-left align-self-center">
								<h1 class="h1" style="color: rgb(124, 87, 87);"><b>Мир цветов</b></h1>
								<h3 class="h2">Мы не просто создаем букеты — мы создаем эмоции</h3>
								<p>
									Мы предлагаем широкий выбор свежих цветов и готовых букетов, а также услуги профессиональных флористов для создания уникальных композиций на любой вкус
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <hr>

    <div class="container-fluid">
        <div class="container">
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-3 main-navi" style="background-color: black; margin-left: -36px;">
                    <div class="categories mt-2">
                        <div class="category-case" style="margin-top: 20px; margin-bottom: 0px;">
                            <a href="pages/flowers.php">Букеты</a> 
                        </div>
                        <br>
                        <div class="category-case">
                            <a href="pages/decor.php">Декор</a> 
                        </div>
                        <br>
                        <div class="category-case">
                            <a href="pages/care.php">Уход за цветами</a> 
                        </div>
                        <br>
                        <div class="category-case">
                            <a href="pages/presents.php">Подарки и сувениры</a> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 main-navi-2" style="margin-left: 12px;">
                    <div class="category-case" style="margin-top: 120%;">
                        <a href="#"><p style="margin-top: 4%;">Букеты</p></a>
                    </div>
                </div>
                <div class="col-lg-3 main-navi-3" style="margin-left: 12px;">
                    <div class="category-case" style="margin-top: 120%;">
                        <a href="#"><p style="margin-top: 4%;">Декор</p></a>
                    </div>
                </div>
                <div class="col-lg-3 main-navi-4" style="margin-left: 12px;">
                    <div class="category-case" style="margin-top: 120%;">
                        <a href="#"><p style="margin-top: 4%;">Принадлежности для ухода за цветами</p></a>
                    </div>
                </div>
                
                <div class="col-lg-3 main-navi" style="margin-left: -36px; margin-top: 20px;">
                </div>

                <div class="col-lg-3 main-navi-5" style="margin-left: 12px;">
                    <div class="category-case" style="margin-top: 120%;">
                        <a href="#"><p style="margin-top: 4%;">Подарки и сувениры</p></a>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    <hr>

    <section class="container py-5">
		<div class="row text-center pt-3">
			<div class="col-lg-6 m-auto">
				<h1 class="h1">Категории месяца</h1>
				<p>
					Пользуются популярностью
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-4 p-5 mt-3">
				<a href="#"><img src="imgs/1.png"></a>
				<h5 class="text-center mt-3 mb-3">Букеты</h5>
				<p class="text-center"><a class="btn btn-success" href="../pages/flowers.php">За покупками</a></p>
			</div>
			<div class="col-12 col-md-4 p-5 mt-3">
				<a href="#"><img src="imgs/2.png"></a>
				<h2 class="h5 text-center mt-3 mb-3">Декор</h2>
				<p class="text-center"><a class="btn btn-success" href="../pages/decor.php">За покупками</a></p>
			</div>
			<div class="col-12 col-md-4 p-5 mt-3">
				<a href="#"><img src="imgs/3.png"></a>
				<h2 class="h5 text-center mt-3 mb-3">Принадлежности для ухода</h2>
				<p class="text-center"><a class="btn btn-success" href="../pages/care.php">За покупками</a></p>
			</div>
		</div>
	</section>
    <footer>
        <? include './footer.php' ?>
    </footer>

    

</body>
</html>