<?php
/*
 * Satheesh PM, BARC Mumbai
 * www.satheesh.anushaktinagar.net
 * 
 */

echo '<div align="justify"><font color="red">'.elgg_echo('chat_pfc:chat_info').'</font></div>';
echo '<div align="justify">'.elgg_echo('chat_pfc:title').'  :  ';
echo elgg_view('input/text', array(
            'name' => 'params[chat_title]',
            'value' => $vars['entity']->chat_title,
           ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:theme').'  :  ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[chat_theme]',
	'options_values' => array(
                'default' => elgg_echo('chat_pfc:default'),
		'blune' => elgg_echo('chat_pfc:blune'),
		'cerutti' => elgg_echo('chat_pfc:cerutti'),
                'green' => elgg_echo('chat_pfc:green'),
                'msn' => elgg_echo('chat_pfc:msn'),
                'phoenity' => elgg_echo('chat_pfc:phoenity'),
                'phpbb2' => elgg_echo('chat_pfc:phpbb2'),
                'zilveer' => elgg_echo('chat_pfc:zilveer'),
                ),
	'value' => $vars['entity']->chat_theme,
        ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:nikname').'  :  ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[chat_froz_nick]',
	'options_values' => array(
		'true' => elgg_echo('chat_pfc:yes'),
		'false' => elgg_echo('chat_pfc:no'),
                ),
	'value' => $vars['entity']->chat_froz_nick,
        ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:img').'  :  ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[chat_user_img]',
	'options_values' => array(
		'yes' => elgg_echo('chat_pfc:yes'),
		'no' => elgg_echo('chat_pfc:no'),
                ),
	'value' => $vars['entity']->chat_user_img,
        ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:maxlength').'  :  ';
echo elgg_view('input/text', array(
            'name' => 'params[chat_text_length]',
            'value' => $vars['entity']->chat_text_length,
           ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:refresh').'  :  ';
echo elgg_view('input/text', array(
            'name' => 'params[chat_refresh]',
            'value' => $vars['entity']->chat_refresh,
           ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:max_msg').'  :  ';
echo elgg_view('input/text', array(
            'name' => 'params[chat_max_msg]',
            'value' => $vars['entity']->chat_max_msg,
           ));
echo '</div>';


echo '<div align="justify">'.elgg_echo('chat_pfc:rooms').'  :  ';
echo elgg_view('input/text', array(
            'name' => 'params[chat_list]',
            'value' => $vars['entity']->chat_list,
           ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:max_room').'  :  ';
echo elgg_view('input/text', array(
            'name' => 'params[chat_chanel]',
            'value' => $vars['entity']->chat_chanel,
           ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:max_pvt').'  :  ';
echo elgg_view('input/text', array(
            'name' => 'params[chat_pvt_chanel]',
            'value' => $vars['entity']->chat_pvt_chanel,
           ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:hight').'  :  ';
echo elgg_view('input/text', array(
            'name' => 'params[chat_hight]',
            'value' => $vars['entity']->chat_hight,
           ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:isadmin').'  :  ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[chat_first_admin]',
	'options_values' => array(
		'false' => elgg_echo('chat_pfc:no'),
                'true' => elgg_echo('chat_pfc:yes'),
                ),
	'value' => $vars['entity']->chat_first_admin,
        ));
echo '</div>';

echo '<div align="justify">'.elgg_echo('chat_pfc:support').'</div>';

?>
