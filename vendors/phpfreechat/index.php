<?php

require_once dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/engine/start.php";
require_once dirname(__FILE__)."/src/phpfreechat.class.php";

$params['language'] = 'en_US';

$params['serverid'] =  md5(__FILE__);
$params['debug'] =  false;
$params['title'] =  elgg_get_plugin_setting('chat_title', 'chat_pfc');
$params['nick'] =  elgg_get_logged_in_user_entity()->username;
if (elgg_get_plugin_setting('chat_user_img', 'chat_pfc') == 'yes'){
$img_icon = elgg_get_logged_in_user_entity()->getIconURL('medium');
$params["nickmeta"]    = array("avatar" => $img_icon);
}
$params['frozen_nick'] =  (boolean)elgg_get_plugin_setting('chat_froz_nick', 'chat_pfc');
$params['max_text_len'] = (int)elgg_get_plugin_setting('chat_text_length', 'chat_pfc');
$params['refresh_delay'] =  (int)elgg_get_plugin_setting('chat_refresh', 'chat_pfc');
$params['max_msg'] =  (int)elgg_get_plugin_setting('chat_max_msg', 'chat_pfc');
$params['max_channels'] = (int)elgg_get_plugin_setting('chat_chanel', 'chat_pfc');
$params['max_privmsg'] = (int)elgg_get_plugin_setting('chat_pvt_chanel', 'chat_pfc');
$params['height'] =  (int)elgg_get_plugin_setting('chat_hight', 'chat_pfc')."px";
$params['firstisadmin'] =  (boolean)elgg_get_plugin_setting('chat_first_admin', 'chat_pfc');
$params['channels'] = explode(",", elgg_get_plugin_setting('chat_list', 'chat_pfc'));
$params['theme_path'] = dirname(__FILE__).'/themes';
$params['theme'] =  elgg_get_plugin_setting('chat_theme', 'chat_pfc');
$params['data_public_url'] = elgg_get_site_url().'mod/chat_pfc/vendors/phpfreechat/data/public';
$params["server_script_url"] = elgg_get_site_url().'mod/chat_pfc/vendors/phpfreechat/index.php';
$params["theme_default_url"] = elgg_get_site_url().'mod/chat_pfc/vendors/phpfreechat/themes/';
$params["container_type"]         = "File";
$params["container_cfg_chat_dir"] = dirname(__FILE__)."/data/private/chat";

if (elgg_is_admin_logged_in()){
  $params['isadmin'] = true;
} else {
  $params['isadmin'] = false;
}

$chat = new phpFreeChat( $params );

$chat->printChat();

?>

