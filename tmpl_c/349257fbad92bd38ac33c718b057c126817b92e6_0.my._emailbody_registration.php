<?php /* Smarty version 3.1.27, created on 2023-10-07 17:22:49
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:1889392852652193e9ba44f9_97828300%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1696699369,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1889392852652193e9ba44f9_97828300',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_652193e9bb03b3_08670002',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_652193e9bb03b3_08670002')) {
function content_652193e9bb03b3_08670002 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1889392852652193e9ba44f9_97828300';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>