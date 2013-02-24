<?php

/*
 * Satheesh PM, BARC Mumbai
 * www.satheesh.anushaktinagar.net
*/

$tabs = array(
	'chat' => array(
		'title' => elgg_echo('chat_pfc:chat'),
		'url' => "chat_pfc/chat",
		'selected' => $vars['selected'] == 'chat',
	),
    	'commands' => array(
		'title' => elgg_echo('chat_pfc:commands'),
		'url' => "chat_pfc/commands",
		'selected' => $vars['selected'] == 'commands',
	),
      
);

echo elgg_view('navigation/tabs', array('tabs' => $tabs));
