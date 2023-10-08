<?php /* Smarty version 3.1.27, created on 2023-10-06 21:08:45
         compiled from "my:_emailbody_change_account" */ ?>
<?php
/*%%SmartyHeaderCode:21135866636520775d441187_23205166%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8594f47af68d54b8edf3145e9acca31cd65213d9' => 
    array (
      0 => 'my:_emailbody_change_account',
      1 => 1696626525,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '21135866636520775d441187_23205166',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6520775d44dea4_28098900',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6520775d44dea4_28098900')) {
function content_6520775d44dea4_28098900 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21135866636520775d441187_23205166';
?>
Hello #name#,

Your account data has been changed from ip #ip#


New information:

Password: #password#
E-mail address: #email#

Contact us immediately if you did not authorize this change.

Thank you.<?php }
}
?>