<?php /* Smarty version 3.1.27, created on 2023-10-06 21:09:11
         compiled from "/home/multistream6/domains/goldentradex.online/public_html/tmpl/security.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1098600779652077778e61a0_10550391%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c3737c3534db28cd70381b7e39fb52aebc89df3' => 
    array (
      0 => '/home/multistream6/domains/goldentradex.online/public_html/tmpl/security.tpl',
      1 => 1692455841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1098600779652077778e61a0_10550391',
  'variables' => 
  array (
    'security' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65207777910d07_09082936',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65207777910d07_09082936')) {
function content_65207777910d07_09082936 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1098600779652077778e61a0_10550391';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Account Security Settings", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <h4 class="page-title">Advanced login security settings</h4>

            <div class="row">
                <div class="col-md-12">

                    <form method="post">
                        <input type="hidden" name="a" value="security">
                        <input type="hidden" name="action" value="save">
                        Detect IP Address Change Sensitivity<br>
                        <input type="radio" name="ip" value="disabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'disabled') {?>checked<?php }?>>Disabled<br>
                        <input type="radio" name="ip" value="medium" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'medium') {?>checked<?php }?>>Medium<br>
                        <input type="radio" name="ip" value="high" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'high') {?>checked<?php }?>>High<br>
                        <input type="radio" name="ip" value="always">Paranoic<br><br>

                        Detect Browser Change<br>
                        <input type="radio" name="browser" value="disabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'disabled') {?>checked<?php }?>>Disabled<br>
                        <input type="radio" name="browser" value="enabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'enabled') {?>checked<?php }?>>Enabled<br><br>
                        <input type="submit" value="Set" class="form-control btn btn-primary">
                    </form>


                </div></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>