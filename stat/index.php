<?php
define('__INC__', dirname(__FILE__) . '/');

require_once (__INC__ . 'statistician/config.php');
require_once (__INC__ . 'statistician/locale/' . LOCALE . '.php');
require_once (__INC__ . 'statistician/_serverObj.php');
require_once (__INC__ . 'statistician/_playerObj.php');
require_once (__INC__ . 'statistician/query_utils.php');
require_once (__INC__ . 'statistician/paginator.php');
require_once (__INC__ . 'statistician/version.php');
require_once (__INC__ . 'statistician/statistician.php');

$start = microtime(true);


$sObj = new STATISTICIAN();
$serverObj = $sObj->getServer();

?>

<!DOCTYPE HTML>
<head>
    <title><?php echo (SERVER_NAME); ?> :: Statistician</title>
    <link href="statistician.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="jquery-1.5.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
    <script type="text/javascript">
	$(window).load(function(){
		/* Keep the template looking great :) */
		$('#content').height($('#content').height() 0);
	});
    </script>
</head>

<body>
    <div id="search">
        <form action="./" method="get">
            <input type="hidden" name="view" value="playerList">
            <input type="text" name="search" value="">
            <input type="submit" value="Search">
        </form>
    </div>
 	<div id="content">
        <div id="listTitle"><a href="./?view=main"><?php echo (SERVER_NAME); ?></a></div>
		<?php
			if (!isset($_GET['view'])) {
                $_GET['view'] = 'main';
 		    }

			switch ($_GET['view']) {
				case 'player':
				include('player_view.php');
				break;
				case 'playerBlock':
				include ('player_blocks.php');
				break;
				case 'playerItems':
				include ('player_items.php');
				break;
				case 'playerList':
				include('player_list.php');
				break;
				case 'playerKills':
				include('player_kills.php');
				break;
				case 'globalBlocks':
				include('global_blocks.php');
				break;
				case 'globalItems':
				include('global_items.php');
				break;
				case 'globalKills':
				include ('global_kills.php');
				break;
				case 'main':
				default:
                include ('server_page.php');
				break;
			}
		?>
	</div>
	<br />
	<div id="copyright">Statistician by ChaseHQ :: <?php echo(STRING_MISC_RUNNING_DATABASE_VERSION); ?> <?php echo($sObj->getDatabaseVersion()); ?>
        <br />
		Отредактировал для сайта Metaller
		<br />
        <?php echo (STRING_MISC_TRANSLATED_TO_BY); ?> <?php if (TRANSLATOR_CONTACT != '') { ?> <a href="<?php echo (TRANSLATOR_CONTACT); ?>"> <?php } echo(TRANSLATOR_NAME); ?><?php if (TRANSLATOR_CONTACT != '') { ?> </a> <?php } ?>
        <br />
        <?php echo(STRING_MISC_PORTAL_VERSION); ?> <?php echo VERSION; ?>
        <br />
        <?php
            $end = microtime(true);            
            $runtime = $end - $start;
            echo round($runtime, 2)." sec.";
         ?>
    </div>
</body>