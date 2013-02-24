<?php
/*
 * Satheesh PM, BARC Mumbai
 * www.satheesh.anushaktinagar.net
*/

function chat_pfc_init() {
//global $CONFIG;
elgg_extend_view('css/admin', 'chat_pfc/admin');
elgg_register_page_handler('chat_pfc','chat_pfc_page_handler');
				
$item = new ElggMenuItem('chat_pfc', elgg_echo('chat_pfc'), 'chat_pfc');
elgg_register_menu_item('site', $item);

elgg_register_menu_item('topbar', array(
        'name' => 'chat_pfc',
        'href' => "chat_pfc/",
        'text' => elgg_view_icon('speech-bubble-alt'),
        'title' => elgg_echo('chat_pfc'),
        'priority' => 600,
));


}


function chat_pfc_page_handler($page) {
	$base = elgg_get_plugins_path() . 'chat_pfc/pages/chat_pfc';

	if (!isset($page[0])) {
		$page[0] = 'chat';
	}

	$vars = array();
	$vars['page'] = $page[0];


require_once "$base/index.php";
	
return true;
}
	
elgg_register_event_handler('init', 'system', 'chat_pfc_init');
?>