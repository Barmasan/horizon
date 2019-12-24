<!DOCTYPE html>
<html>

<head>

    <?php include('inc/site-head.php'); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.scrollTo.2.1.2.js"></script>
	<script src="js/main.js"></script>

    <script>
      $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>

    <title>ООО «Горизонт»</title>
</head>

<body>
    <?php include('inc/site-background-0.php'); ?>

    <?php //include('inc/site-logo-phone.php'); ?>

    <?php include('inc/site-nav.php'); ?>

    <div class="content-wide">
        <div class="pure-g">
            <div class="pure-u-1 hero-image">
                <div class="content-default campaign">
                    <div class="pure-g">
                        <div class="pure-u-1">
                            <div class="campaign-header uppercase orange">
                                Акция
                            </div>
                            <div class="campaign-list">
                                <ul>
                                    <li>при аренде земельного участка ООО «Горизонт»</li>
                                    <li>первый год земля в аренду бесплатно</li>
                                    <li>второй год 4 000 руб. за 1 га земельного участка в год.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-default">
        <h2><span class="italic custom-header-hero-1"><span class="bold">Почему аренда земли в Ленинградской области выгодна именно в <span class="uppecase helper-font-style-normal">ООО "Горизонт"?</span></span></span></h2>
        <p>Аренда сельскохозяйственных земель обретает все большую актуальность в нашей стране. Многочисленные санкции, также отложили свой отпечаток, на положение дел в сфере сельского хозяйства. Сегодня, фактически осуществляется переход продовольственного рынка России, на продукцию отечественного производства.</p>
        <p class="italic">Аренда земли под фермерство</p>
        <p><span class="bold">ООО «Горизонт»</span> является собственником земельных участков сельскохозяйственного назначения площадью в несколько сотен гектаров. Взять в аренду землю довольно просто. <span class="bold">ООО «Горизонт»</span> предоставляет сельхоз земли в аренду, как на краткосрочный период, так и долгосрочный.</p>
        <p>Аренда сельскохозяйственной земли - это, несомненно, выгодное вложение средств. Вы не затрачиваете большое количество финансового ресурса. Вся информация по свободным земельным участкам, сдаваемым в аренду, представлена в разделе «<a href="#">Аренда земли</a>».</p>
        <p class="italic">Аренда зданий и сооружений</p>
        <p><span class="bold">ООО «Горизонт»</span> предлагает в аренду здания и сооружения для различного типа использования. Под овощехранилище, склад, или, к примеру, под козью или птицеводческую ферму.</p>
        <p>Также возможна сдача помещений под производство (пилорама, выращивание грибов, производство гранулированных комбикормов).</p>
        <p>Все помещения находятся в собственности <span class="bold">ООО «Горизонт»</span>.</p>
        <p>Вся информация по свободным зданиям и сооружениям, сдаваемым в аренду, представлена в разделе «<a href="#">Аренда помещений</a>».</p>
        <p class="italic">Как выбрать участок или здание и связаться с компанией?</p>
        <p>Выбрать участок или сооружение вы можете на нашем сайте. Все нюансы по поводу аренды и оформления договора вы можете уточнить у наших специалистов по номеру телефона <span class="bold">+7 (812) 591-88-16</span>. Специалисты <span class="bold">ООО «Горизонт»</span> дадут полную информацию по каждому объекту, и помогут Вам сориентироваться в выборе земельных участков, зданий, сооружений и другой недвижимости для Вашего бизнеса и ответят на все интересующие Вас вопросы.</p>
        <h2 class="bold">Наши партнеры:</h2>
    </div>

    <div class="content-default">
		<div class='partners-img'>
			<div class="inner">
				<div class='page'>
					<!-- <a href="http://forumestate.ru/"><img src="graphics/images/partner2.jpg" alt="forumestate.ru"></a> -->
					<a href="http://xn--80aalycnchri.xn--p1ai/"><img src="graphics/images/partner1.jpg" alt="ландскрона.рф"></a>
					<a href="http://xn--80adx0a4a.xn--p1ai/"><img src="graphics/images/partner4.jpg" alt="кварц.рф"></a>
					<a href="http://xn--90awfipdn.xn--p1ai/"><img src="graphics/images/partner5.jpg" alt="бцфорум.рф"></a>
					<a href="http://xn--d1aboife.xn--p1ai/"><img src="graphics/images/partner7.jpg" alt="комнед.рф"></a>

				</div>

				<div class='page'>
					<div class='banners-3' style='margin-left: 130px;'>
						<a href="http://xn----8sbb6baq1a3a.xn--p1ai/"><img src="graphics/images/partner6.jpg"></a>
						<a href="http://forum-telecom.ru/"><img src="graphics/images/partner8.jpg"></a>
						<a href="http://xn--l1adgmc.xn--p1ai/"><img src="graphics/images/partner3.jpg" alt="форум.рф"></a>
					</div>
				</div>
			</div>
		</div>
		<div class='sld-partners-btn'>
			<div onClick='slider2.changeSlide(0)' class='sld-partners-btn-active'></div>
			<div onClick='slider2.changeSlide(1)'></div>
		</div>
    </div>

    <div class="_clear"> </div>

    <div class="content-wide"> <!-- style="position: relative;bottom: 140px;" -->
        <div class="pure-g">
            <div class="pure-u-1 background-1"></div>
        </div>
    </div>

    <div class="content-default" id="map" style="position: relative;bottom: 20px;">
        <h2 class="bold">Расположение комплекса:</h2>
        <p>Ленинградская область, Кировский район, 74 км Мурманского шоссе, у поворота на Назию, вблизи д. Васильково, Сирокасска, Мучихино (ближайшая ж/д станция – Жихарево).</p>
        <img src="graphics/images/map_index.png">

 		<div class="pure-g">
 			<div class="pure-u-1-2 ugl_button_container">
 				<div class="ugl_button"><a href="objects.php">Земельные участки списком</a></div>
 			</div>
 			<div class="pure-u-1-2 ugl_button_container">
 				<div class="ugl_button helper-float-right"><a href="objects-other.php">Здания и сооружения списком.</a></div>
 			</div>
 		</div>
    </div>

    <div class="content-wide" style="position: relative;bottom: 150px; z-index: -9999"> <!-- style="position: relative; top: -128px;" -->
        <div class="pure-g">
            <div class="pure-u-1 background-1"></div>
        </div>
    </div>

    <div class="content-default" id="news" style="position: relative;bottom: 80px;"> <!-- style="position: relative; top: -60px;" -->
        <div class="pure-g">
            <div class="pure-u-1-5 circle">
                <img src="graphics/images/circle-1.png">
            </div>
            <div class="pure-u-3-5 news">
                <p class="bold"><a href="news.php" class="black">Селекционеры Московской области вывели рекордный для России по урожайности и содержанию белка сорт озимой пшеницы.</a></p>
                <p>Рекордный сорт вывели столичные селекционеры из Московского НИИ сельского хозяйства «Немчиновка».</p>
            </div>
        </div>
    </div>

    <div class="content-wide" style="position: relative;bottom: 160px;"> <!-- style="position: relative; top: -190px;" -->
        <div class="pure-g">
            <div class="pure-u-1 background-1"></div>
        </div>
    </div>


    <div class="content-default" id="contact-form" style="position: relative;bottom: 150px;"> <!-- style="position: relative;bottom: 150px;" -->
        <h2 class="pure-u-1 bold">Вы можете заполнить форму обратной связи и наши специалисты свяжутся c Вами:</h2>
        <div class="top-border"> </div>
        <div class="pure-g">
            <div class="pure-u-1-5">
                <p>ООО «<span class="uppercase">Горизонт</span>»</p>
                <p>187310, Россия, Ленинградская область, Кировский район, Васильково, 19-Б</p>
                <p>+7 (812) 591-88-16<br />пн-пт 9.00-18.00</p>
                <p><a href="http://gorizont.cc">http://gorizont.cc</a><br /><a href="mailto:info@gorizont.cc">info@gorizont.cc</a></p>
 				<div class="ugl-input-container">
                <form method="post" name="contact_form" action="index.php#contact-form">
					<input id="name" name="name" type="text" placeholder="Имя" class="ugl-input helper-sans-serif">
					<input id="phone" name="phone" type="text" placeholder="Контактный телефон" class="ugl-input helper-sans-serif">
					<input id="email" name="email" type="text" placeholder="E-mail" class="ugl-input helper-sans-serif">
					<input type="submit" name="submit" class="ugl-input helper-sans-serif" value="Отправить" style="width: 98%; margin-top: 10px; background-color: #e97044">
                </form>
                </div>
                <?php
                if (isset($_POST['submit'])) {
                    $errors  = '';
                    $email_to = 'info@gorizont.cc';
                    if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email'])) {
                        $errors .= " Неоходимо заполнить все поля";
                    }

                    $name          = $_POST['name'];
                    $phone         = $_POST['phone'];
                    $email_from    = $_POST['email'];

                    if (!empty($_POST['email']) && (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_from))) {
                        $errors .= " Неправильный адрес E-mail";
                    }

                    if (empty($errors)) {
                        $to = $email_to;
                        $email_subject = "gorizont.cc - Запрос обратной связи: $name";
                        $email_body = "Получен запрос обратной связи, отправленный через форму на странице http://gorizont.cc " . "\n\n Имя: $name \n " . "Телефон: $phone\n " . "E-mail: $email_from\n ";
                        $headers = "From: $email_to\n";
                        $headers .= "Reply-To: $email_from";
                        mail($to, $email_subject, $email_body, $headers);
                    }
                }
                ?>
            </div>
            <div class="pure-u-3-5 contact-form">
                <img src="graphics/images/contacts.png">
            </div>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            echo "<p>";
            if (!empty($errors)) {
                echo "Возникли следующие ошибки: " . "<br />";
                echo $errors;
            } else {
                echo "Ваш запрос успешно отправлен";
            }
            echo "</p>";
        }
        ?>
    </div>
	<div style="position: relative; bottom: 50px;">
		<div class="content-wide"> <!-- style="position: relative; top: -250px; background-color: #333" -->
			<div class="pure-g">
				<div class="pure-u-1 background-1"></div>
			</div>
		</div>
		<div class="content-default footer"> <!-- style="position: relative; top: -250px; background-color: green; margin-bottom: -250px" -->
			<div class="pure-g">
				<div class="pure-u-1-2"><p><span class="uppercase">ООО «Горизонт»</span></p></div>
				<div class="pure-u-1-2 right"><p>Тел. +7 (812) 591-88-16</p></div>
			</div>
		</div>
	</div>
    </div>

</body>
</html>
