<!DOCTYPE html>
<html>

<head>
    <?php include('inc/site-head.php'); ?>
    <title>Аренда помещений</title>
</head>

<body>

    <?php include('inc/site-background-0.php'); ?>

    <?php //include('inc/site-logo-phone.php'); ?>

    <?php include('inc/site-nav.php'); ?>

    <div class="content-default objects">

        <div class="pure-g">

        	<div class="floating_nav_wrap">
				<div class="floating_nav">
					<a href="index.php#map"><img src="graphics/images/floating_nav_1.png"></a>
					<a href="objects-other.php"><img src="graphics/images/floating_nav_2.png"></a>
					<a href="objects.php"><img src="graphics/images/floating_nav_3.png"></a>
				</div>
        	</div>

            <?php
            $objects = array(
                array('url' => 'vasilsklad.php', 'title' => 'Склад в д. Васильково', 'img' => 'sklad.jpg'),
                array('url' => 'proizvod.php', 'title' => 'Производственное помещение', 'img' => 'proizvodhran.jpg'),
                array('url' => 'ovoshhran.php', 'title' => 'Овощехранилище', 'img' => 'ovoshhran.jpg'),
                array('url' => 'skladmodul.php', 'title' => 'Склад-модуль', 'img' => 'skladmodul.jpg')
            );
            foreach ($objects as $object) {
                echo "<div class='pure-u-1-2'>";
                    echo "<a href='objects/" . $object['url'] . "'>";
                    echo "<div class='object'>";
                        echo "<div class='object-title'>" . $object['title'] . "</div>";
                        echo "<img class='pure-img' src='graphics/images/objects/" . $object['img'] . "'>";
                    echo "</div>";
                    echo "</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <div class="content-default">
        <div class="pure-g">
            <div class="pure-u-1">
                <h2 class="center bold">Другие объекты:</h2>
            </div>
        </div>
        <div class="pure-g objects-other">
            <div class="pure-u-1-2">
                <ol>
                    <li><span class="black">Сенные сараи - <span class="bold">1008 м<sup>2</sup></span></li>
                    <li><span class="black">Склад минеральных удобрений - <span class="bold">395 м<sup>2</sup></span></li>
                    <li><span class="black">Склад ГСМ - <span class="bold">0.5 га</span></li>
                    <li><span class="black">Телятник с пристройкой (под ферму, производство, склад) - <span class="bold">1080.60 м<sup>2</sup></span></li>
                </ol>
            </div>
            <div class="pure-u-1-2">
                <ol start="5">
                    <li><span class="black">Склад в д. Мучихино - <span class="bold">823 м<sup>2</sup></span></li>
                    <li><span class="black">Навес с кранбалкой - <span class="bold">321 м<sup>2</sup></span></li>
                    <li><span class="black">Офисные помещения - <span class="bold">107.28 м<sup>2</sup></span></li>
                    <li><span class="black">Конюшня - <span class="bold">506.7 м<sup>2</sup></span></li>
                </ol>
            </div>
        </div>
    </div>


    <div class="content-wide">
        <div class="pure-g">
            <div class="pure-u-1 background-1"></div>
        </div>
    </div>

    <?php include('inc/site-footer.php'); ?>

</body>
</html>

