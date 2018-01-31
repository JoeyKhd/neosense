<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEOSENSE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>

    <link rel="shortcut icon" type="image/png" href="img/icon.png"/>
</head>

<?php include_once('components/header.php'); ?>

<?php
function _require_all($dir)
{
	// require all php files
	$scan = glob("$dir/*");
	foreach ($scan as $path) {
		if (preg_match('/\.php$/', $path)) {
			require_once $path;
		} elseif (is_dir($path)) {
			_require_all($path);
		}
	}
}
_require_all("./src/");

use NeoPHP\NeoRPC;

$neo = new NeoRPC();

$neo->setNode("http://seed5.neo.org:10332");

?>


<body>


<div class="hero-body landing-background">
    <div class="container has-text-centered">
        <div class="column is-6 is-offset-3">
            <h1 class="title">
                NEOSENSE
            </h1>

            <h2 class="subtitle">
                You have bought a piece of software.. did you ever realize your license is not even
                transferable?
            </h2>

            <div class="box has-text-centered is-transparent">

                <div class="field">
                    <h1 class="subtitle">
                        So what are you waiting for?
                    </h1>
                    <h2 class="button is-info">
                        Start today!
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php include_once('components/footer.php'); ?>

</html>