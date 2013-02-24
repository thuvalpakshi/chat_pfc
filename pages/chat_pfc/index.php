<?php
/*
 * Satheesh PM, BARC Mumbai
 * www.satheesh.anushaktinagar.net
*/


$title = elgg_echo('chat_pfc');
switch ($vars['page']) {
        case 'commands':
		$content = elgg_view('page/commands');
		break;
	case 'chat':
	default:
		$content = elgg_view('page/chat');
		break;
}


$params = array(
	'content' => $content,
	'title' => $title,
        'sidebar' => elgg_view('chat_pfc/sidebar'),
	'filter_override' => elgg_view('chat_pfc/nav', array('selected' => $vars['page'])),
);

$body = elgg_view_layout('content', $params);

echo elgg_view_page($title, $body);


