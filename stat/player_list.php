<?php
$pag = new Paginator();
$pag->mid_range = 5;
$pag->items_per_page = 30;
?>

<a name="playerList">
	<div id="subTitle">
        <?php echo STRING_SERVER_GLOBAL_ALL_REGISTERED_PLAYERS; echo ' ('.$serverObj->getAllPlayers().')'; ?>
    </div>
</a>
<table>
 <th></th>
    <th>
        <?php echo QueryUtils::getOrderLink('name', STRING_ALL_NAME); ?>
    </th>
    <th>
        <?php echo QueryUtils::getOrderLink('logon', STRING_PLAYER_LAST_LOGON); ?>
    </th>
    <th>
        <?php echo QueryUtils::getOrderLink('register', STRING_PLAYER_JOIN_DATE); ?>
    </th>
 <?php
    $pag->items_total = $serverObj->getAllPlayers();
    $pag->paginate();
    $pagination = $pag->display_pages();

    $i = $pag->low;

    $query = $serverObj->getPlayers($pag->limit);

    while($row = mysql_fetch_assoc($query)) {
        $i++;

        $player = new PLAYER($row['uuid']);

        echo '<tr>';
        echo '<td>';
        echo $i;
        echo '</td>';
        echo '<td>';
        echo '<a href="?view=player&uuid=' . $player->getUUID() . '" >';
        echo $player->getName();
        echo '</a>';
        echo '</td>';
        echo '<td>';
        echo QueryUtils::formatDate($player->getLastLogin());
        echo '</td>';
        echo '<td>';
        echo QueryUtils::formatDate($player->getFirstLogin());
        echo '</td>';
        echo '</tr>';
    }
 ?>
</table>
<?php
echo '<div id="pageSelector">';
echo $pagination;
echo '</div>';