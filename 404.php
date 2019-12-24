<!DOCTYPE html>
<html>

<head>
    <?php include('inc/site-head.php'); ?>
    <title>Страница не найдена</title>
</head>

<body>

    <?php include('inc/site-background-0.php'); ?>
    <?php //include('inc/site-logo-phone.php'); ?>
    <?php include('inc/site-nav.php'); ?>

    <div class="content-default">
        <h2 class="bold">Страница не найдена</h2>
        <?php
        echo "<p>Страница <span class=\"monospace\">" . $_SERVER['REQUEST_URI'] . "</span> не найдена.</p>";
        ?>
    </div>

    <div class="content-wide">
        <div class="pure-g">
            <div class="pure-u-1 background-1"></div>
        </div>
    </div>

    <?php include('inc/site-footer.php'); ?>

</body>
</html>
