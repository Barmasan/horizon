<?php
    require_once 'Place.class.php';
    $page = new Place();
    $page->content = '
    	<h2 class="orange center bold">Городище</h2>
        <p class="bold">Адрес обьекта:</p>
        <p>Ленинградская область, Кировский район, 74 км от Санкт-Петербурга по Мурманскому шоссе, в близи дер. Васильково</p>
        <p class="bold">Назначение объекта:</p>
        <p>любые цели</p>
        <p class="bold">Общая площадь объекта:</p>
        <p>5,16 га</p>
        <p class="bold">Цена:</p>
        <p>3500 руб./га в год.</p>
        <p class="bold">Описание:</p>
        <p>Земельный участок — Городище общей S = 5,16 га. Сдаётся в аренду от 1 га. Категория земель: земли сельскохозяйственного назначения, разрешённое использование: для ведения сельскохозяйственного производства.Подходит под пашню, сенокос, с/х-производство. Использование под сенокос- 500 руб.га в сезон.</p>
	';
    $page->image = "Gorodishe.png";
    $page->Display();
?>
