<?php
/*
 * Satheesh PM, BARC Mumbai
 * www.satheesh.anushaktinagar.net
*/


/*
require_once dirname(dirname(dirname(dirname(__FILE__))))."/vendors/phpfreechat/src/pfcinfo.class.php";
$info  = new pfcInfo( md5("Who is online") );
    $users = $info->getOnlineNick(NULL);
    $info = "";
    $nb_users = count($users);
    if ($nb_users <= 1){
    $info = "%d";
    }else{
    $info = "%d";
    }
echo '<h2>'.elgg_echo("chat_pfc:list").'[ '.sprintf($info, $nb_users).' ]</h2>';
$rooms = explode(",", elgg_get_plugin_setting('chat_list', 'chat_pfc'));
echo '<ul class="elgg-menu elgg-menu-page elgg-menu-page-default">';
foreach ($rooms as $room){
    $info  = new pfcInfo( md5("Who is online ".$room) );
    $users = $info->getOnlineNick($room);
    $info = "";
    $nb_users = count($users);
    if ($nb_users <= 1){
    $info = "%d";
    }else{
    $info = "%d";
    }
    echo '<li class="elgg-menu"><a href="#" onclick="pfc.sendRequest(\'/join '.$room.'\');">'.$room.' [ '.sprintf($info, $nb_users).' ]</a></li>';

}
echo "</ul>";

*/


echo '<h2>'.elgg_echo("chat_pfc:list").'</h2>';
$rooms = explode(",", elgg_get_plugin_setting('chat_list', 'chat_pfc'));
echo '<ul class="elgg-menu elgg-menu-page elgg-menu-page-default">';
foreach ($rooms as $room){
    echo '<li class="elgg-menu"><a href="#" onclick="pfc.sendRequest(\'/join '.$room.'\');">'.$room.'</a></li>';
}
echo "</ul>";