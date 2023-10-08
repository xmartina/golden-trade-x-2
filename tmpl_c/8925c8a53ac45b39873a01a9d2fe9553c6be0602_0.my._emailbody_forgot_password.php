<?php /* Smarty version 3.1.27, created on 2023-10-06 20:53:18
         compiled from "my:_emailbody_forgot_password" */ ?>
<?php
/*%%SmartyHeaderCode:305304716652073beab54d8_46426161%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8925c8a53ac45b39873a01a9d2fe9553c6be0602' => 
    array (
      0 => 'my:_emailbody_forgot_password',
      1 => 1696625598,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '305304716652073beab54d8_46426161',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652073beac2c77_69702531',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652073beac2c77_69702531')) {
function content_652073beac2c77_69702531 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '305304716652073beab54d8_46426161';
?>
Hello #name#,

Someone (most likely you) requested your username and password from the IP #ip#.
Your password has been changed!!!

You can log into our account with:

Username: #username#
Password: #password#

Hope that helps.<?php }
}
?>