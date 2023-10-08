<?php /* Smarty version 3.1.27, created on 2023-10-06 20:53:51
         compiled from "my:_emailbody_forgot_password_confirm" */ ?>
<?php
/*%%SmartyHeaderCode:846512313652073df2a6ef4_84716134%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84ab1d548fc36cfa2bc8a7ec7220b8e5bad3d3b' => 
    array (
      0 => 'my:_emailbody_forgot_password_confirm',
      1 => 1696625631,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '846512313652073df2a6ef4_84716134',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652073df2b4920_54119989',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652073df2b4920_54119989')) {
function content_652073df2b4920_54119989 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '846512313652073df2a6ef4_84716134';
?>
Hello #name#,

Please confirm your reqest for password reset.

Copy and paste this link to your browser:
#site_url#/?a=forgot_password&action=confirm&c=#confirm_string#

Thank you.
#site_name#<?php }
}
?>