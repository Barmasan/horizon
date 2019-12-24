<?php
class Place
{
    public $content;
	public $image;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function Display()
    {
        echo "<!DOCTYPE html>";
        echo "<html>";
		include_once '../inc/site-head-sub.php';

        echo "<body>";
		echo '
			<div style="position: relative; top: -23px;">';
				include_once '../inc/site-nav.php';

			echo '
				<div class="content-default">

					<div class="floating_nav_wrap_sub">
						<div class="floating_nav_sub">
							<a href="../index.php#map"><img src="../graphics/images/floating_nav_1.png"></a>
							<a href="../objects-other.php"><img src="../graphics/images/floating_nav_2.png"></a>
							<a href="../objects.php"><img src="../graphics/images/floating_nav_3.png"></a>
						</div>
					</div>

					<div class="pure-g hero-object">
						<div class="pure-u-1">
							<img src="../graphics/images/objects/' . $this->image . '">
						</div>
					</div>
			';
			echo $this->content;
			echo "</div>";
			include_once '../inc/site-background-1.php';
			include_once '../inc/site-footer.php';
			echo "</div>";
        echo "</body>";

        echo "</html>";
    }
}
?>
