<?php /* Smarty version 3.1.27, created on 2023-10-07 22:43:37
         compiled from "/home/multistream6/domains/goldentradex.online/public_html/tmpl/pin_page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4979797736521df190929a1_53508374%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8638dd98b25c553ebf49ec610fd76d3085967535' => 
    array (
      0 => '/home/multistream6/domains/goldentradex.online/public_html/tmpl/pin_page.tpl',
      1 => 1692341885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4979797736521df190929a1_53508374',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6521df190b1303_54338609',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6521df190b1303_54338609')) {
function content_6521df190b1303_54338609 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4979797736521df190929a1_53508374';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h3>Enter pin:</h3><br>

Your ip or browser is different from ip or browser you use when login last time. Please check your e-mail account and find pin code. Then enter pin code in form bellow:<br>



<form method=post>
<input type=hidden name=a value="enter_pin">
<input type=text name=pin value="" class=inpts>
<input type=submit class=sbmt>
</form>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>