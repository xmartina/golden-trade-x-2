<?php /* Smarty version 3.1.27, created on 2023-10-08 00:27:35
         compiled from "/home/multistream6/domains/goldentradex.online/public_html/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19664407236521f77761ba63_29842356%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd318ebfbf48f0904c74fd49786b289b16caeee47' => 
    array (
      0 => '/home/multistream6/domains/goldentradex.online/public_html/tmpl/login.tpl',
      1 => 1692468218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19664407236521f77761ba63_29842356',
  'variables' => 
  array (
    'siteLogo' => 0,
    'siteLogoDark' => 0,
    'SiteName' => 0,
    'frm' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6521f777654529_25947703',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6521f777654529_25947703')) {
function content_6521f777654529_25947703 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/goldentradex.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '19664407236521f77761ba63_29842356';
$_smarty_tpl->tpl_vars['SiteName'] = new Smarty_Variable("Golden TradeX LTD", null, 0);?>
<?php $_smarty_tpl->tpl_vars['PageTage'] = new Smarty_Variable("Secured Investment Platform", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteLogo'] = new Smarty_Variable("/img/logo-b.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteLogoDark'] = new Smarty_Variable("/img/logo-b.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteIcon'] = new Smarty_Variable("/assets/images/logo/favicon.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Login", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="nk-body npc-crypto bg-white pg-auth">
<!-- app body @s -->
<div class="nk-app-root">
    <div class="nk-split nk-split-page nk-split-md">
        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
            <div class="nk-block nk-block-middle nk-auth-body">
                <div class="brand-logo pb-5">
                    <a href="/" class="logo-link">
                        <img class="logo-light logo-img logo-img-lg" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
" srcset="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
 2x" alt="logo">
                        <img class="logo-dark logo-img logo-img-lg" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogoDark']->value);?>
" srcset="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogoDark']->value);?>
 2x" alt="logo-dark">
                    </a>
                </div>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title">Sign-In</h5>
                        <div class="nk-block-des">
                            <p>Access your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['SiteName']->value);?>
 panel using your email and passcode.</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->

                
                    <?php echo '<script'; ?>
 language=javascript>
                        function checkform() {
                            if (document.mainform.username.value == '') {
                                alert("Please type your username!");
                                document.mainform.username.focus();
                                return false;
                            }
                            if (document.mainform.password.value == '') {
                                alert("Please type your password!");
                                document.mainform.password.focus();
                                return false;
                            }
                            return true;
                        }

                    <?php echo '</script'; ?>
>
                
                <form method=post name=mainform onsubmit="return checkform()">
                    <input type=hidden name=a value='do_login'>
                    <input type=hidden name=follow value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'>
                    <input type=hidden name=follow_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow_id']);?>
'>
                    <input type=hidden name=a value='do_login'>
                    <input type=hidden name=follow value=''>
                    <input type=hidden name=follow_id value=''>
                    <div class="form-group">
                        <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'invalid_login') {?>
                            <h3 style="text-align: center; color: #243b6a; font-size: 19px; font-weight: 600" class="mb-2">Login error:</h3>

                            <h5 style="text-align: center; color: #6f0707; font-size: 12px; font-weight: 600">Your login or password or turing image code is wrong. Please check this information.</h5>
                        <?php }?>
                        <div class="form-label-group">
                            <label class="form-label"  for="default-01">Username</label>
                            <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
                        </div>
                        <div class="form-control-wrap">
                            <input type="text" name=username value='' class="form-control form-control-lg" id="default-01" placeholder="Enter username">
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="password">Passcode</label>
                            <a class="link link-primary link-sm" tabindex="-1" href="?a=forgot_password">Forgot Code?</a>
                        </div>
                        <div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" name=password value='' class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                            <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['login']) {?>
                                <tr>
                                    <td class=menutxt>Code: <img src="<?php echo smarty_modifier_myescape(encurl(" ?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"></td>
                                    <td><input type=text name=validation_number class=inpts size=30></td>
                                </tr>
                            <?php }?>
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type=submit value="Login">Sign in</button>
                    </div>
                </form><!-- form -->
                <div class="form-note-s2 pt-4"> New on our platform? <a href="?a=signup">Create an account</a>
                </div>

            </div><!-- .nk-block -->
<?php echo $_smarty_tpl->getSubTemplate ("auth_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>