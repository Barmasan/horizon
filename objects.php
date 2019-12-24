<!DOCTYPE html>
<html>

<head>
    <?php include('inc/site-head.php'); ?>
    <title>Аренда земли</title>
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
                array('url' => 'valter1.php', 'title' => 'Вальтеровский ручей', 'img' => 'Valtercreek.png'),
                array('url' => 'valter2.php', 'title' => 'Вальтеровский ручей 2', 'img' => 'Valtercreek2.png'),
                array('url' => 'single-object.php', 'title' => 'Большое Троицкое', 'img' => 'single-object-photo-fixed.jpg'),
                array('url' => 'maltroi.php', 'title' => 'Малое Троицкое', 'img' => 'smalltroi.png'),
                array('url' => 'podol.php', 'title' => 'Подолье', 'img' => 'Podol.png'),
                array('url' => 'podol2.php', 'title' => 'Подолье 2', 'img' => 'podol2.png'),
                array('url' => 'mychihono.php', 'title' => 'Мучихино', 'img' => 'Mychihino.png'),
                array('url' => 'mychihono2.php', 'title' => 'Мучихино 2', 'img' => 'Mychihino2.png'),
                array('url' => 'vasilkovo.php', 'title' => 'Васильково', 'img' => 'Vasilkovo.png'),
                array('url' => 'vasilkovo2.php', 'title' => 'Васильково 2', 'img' => 'Bottomvasil.png'),
                array('url' => 'gorodishe.php', 'title' => 'Городище', 'img' => 'Gorodishe.png')
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


    <div class="content-wide">
        <div class="pure-g">
            <div class="pure-u-1 background-1"></div>
        </div>
    </div>

    <?php include('inc/site-footer.php'); ?>

</body>
</html>

