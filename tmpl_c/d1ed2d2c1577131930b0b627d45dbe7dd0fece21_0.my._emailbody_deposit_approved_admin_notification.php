<?php /* Smarty version 3.1.27, created on 2023-10-06 21:21:59
         compiled from "my:_emailbody_deposit_approved_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:38370137365207a7783fb35_15546155%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ed2d2c1577131930b0b627d45dbe7dd0fece21' => 
    array (
      0 => 'my:_emailbody_deposit_approved_admin_notification',
      1 => 1696627319,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '38370137365207a7783fb35_15546155',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65207a77841283_44801231',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65207a77841283_44801231')) {
function content_65207a77841283_44801231 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '38370137365207a7783fb35_15546155';
?>
Deposit has been approved:

User: #username# (#name#)
Amount: $#amount# of #currency#
Plan: #plan#
Date: #deposit_date#
#fields#<?php }
}
?>