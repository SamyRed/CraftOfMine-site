<?php

define ('craftofmine', true);

session_start ();

define ('URL', '//'.$_SERVER['SERVER_NAME']);
define ('PATH', $_SERVER['REQUEST_URI']);

require_once './service/db.php';

if (empty ($_GET['page'])) {
    header ('location: '.URL.'?page=main');
    die ();
}

define ('PAGE', $_GET['page']);

$username = 'SamyRed';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Craft of mine</title>
        <meta name="interkassa-verification" content="e5dee135cb8d505595638397afdc4149" />
        <meta charset="utf8">
    </head>
    <body>
        <div id="wrapper">
            <header></header>
            <main>
<?php
try {
    $file = './pages/'.PAGE.'.php';
    if (!file_exists($file)) {
        throw new Exception ('<b>Ошибка!</b> Страница \"<b>'.PAGE.'</b>\" не найдена');
    }
    include_once $file;
} catch(Exception $e) {
    echo '<div class="alert alertDanger">'.$e->getMessage().'</div>';
}
?>
            </main>
            <div id="side_block"></div>
            <footer></footer>
        </div>
    </body>
</html>