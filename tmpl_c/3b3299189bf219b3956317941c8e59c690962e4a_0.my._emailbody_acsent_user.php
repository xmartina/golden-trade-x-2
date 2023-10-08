<?php /* Smarty version 3.1.27, created on 2023-10-07 22:43:36
         compiled from "my:_emailbody_acsent_user" */ ?>
<?php
/*%%SmartyHeaderCode:606879806521df1893ced4_94725958%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b3299189bf219b3956317941c8e59c690962e4a' => 
    array (
      0 => 'my:_emailbody_acsent_user',
      1 => 1696718616,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '606879806521df1893ced4_94725958',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6521df1894a149_19861769',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6521df1894a149_19861769')) {
function content_6521df1894a149_19861769 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '606879806521df1893ced4_94725958';
?>
Hello #name#.

Someone tried login your account
ip: #ip#
browser: #browser#

Pin code for entering your account is: #NEWPIN#

This code will be expired in 15 minutes.


#site_name#
#site_url#<?php }
}
?>