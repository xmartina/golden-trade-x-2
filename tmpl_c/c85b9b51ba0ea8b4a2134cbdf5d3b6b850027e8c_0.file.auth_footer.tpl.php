<?php /* Smarty version 3.1.27, created on 2023-10-08 00:27:35
         compiled from "/home/multistream6/domains/goldentradex.online/public_html/tmpl/auth_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9815630506521f777679492_40290307%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c85b9b51ba0ea8b4a2134cbdf5d3b6b850027e8c' => 
    array (
      0 => '/home/multistream6/domains/goldentradex.online/public_html/tmpl/auth_footer.tpl',
      1 => 1692640952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9815630506521f777679492_40290307',
  'variables' => 
  array (
    'SiteName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6521f77768e130_51612680',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6521f77768e130_51612680')) {
function content_6521f77768e130_51612680 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/goldentradex.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '9815630506521f777679492_40290307';
?>
<div class="nk-block nk-auth-footer">
    <div class="nk-block-between">
        <ul class="nav nav-sm">
            <li class="nav-item">
                <a class="nav-link" href="#">Terms & Condition</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Privacy Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
            <li class="nav-item dropup">
                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-bs-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                    <ul class="language-list">
                        <li>
                            <a href="#" class="language-item">
                                <img src="/assets/images/flags/english.png" alt="" class="language-flag">
                                <span class="language-name">English</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="language-item">
                                <img src="/assets/images/flags/spanish.png" alt="" class="language-flag">
                                <span class="language-name">Español</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="language-item">
                                <img src="/assets/images/flags/french.png" alt="" class="language-flag">
                                <span class="language-name">Français</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="language-item">
                                <img src="/assets/images/flags/turkey.png" alt="" class="language-flag">
                                <span class="language-name">Türkçe</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul><!-- .nav -->
    </div>
    <div class="mt-3">
        <p>&copy; 2023 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['SiteName']->value);?>
. All Rights Reserved.</p>
    </div>
</div><!-- .nk-block -->
</div><!-- .nk-split-content -->
<div class="nk-split-content nk-split-stretch bg-abstract"></div><!-- .nk-split-content -->
</div><!-- .nk-split -->
</div><!-- app body @e -->
<!-- JavaScript -->
<?php echo '<script'; ?>
 src="./assets/js/bundle.js?ver=3.2.0"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./assets/js/scripts.js?ver=3.2.0"><?php echo '</script'; ?>
>
<!-- select region modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="region">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title mb-4">Select Your Country</h5>
                <div class="nk-country-region">
                    <ul class="country-list text-center gy-2">
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/arg.png" alt="" class="country-flag">
                                <span class="country-name">Argentina</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/aus.png" alt="" class="country-flag">
                                <span class="country-name">Australia</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/bangladesh.png" alt="" class="country-flag">
                                <span class="country-name">Bangladesh</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/canada.png" alt="" class="country-flag">
                                <span class="country-name">Canada <small>(English)</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/china.png" alt="" class="country-flag">
                                <span class="country-name">Centrafricaine</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/china.png" alt="" class="country-flag">
                                <span class="country-name">China</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/french.png" alt="" class="country-flag">
                                <span class="country-name">France</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/germany.png" alt="" class="country-flag">
                                <span class="country-name">Germany</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/iran.png" alt="" class="country-flag">
                                <span class="country-name">Iran</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/italy.png" alt="" class="country-flag">
                                <span class="country-name">Italy</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/mexico.png" alt="" class="country-flag">
                                <span class="country-name">México</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/philipine.png" alt="" class="country-flag">
                                <span class="country-name">Philippines</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/portugal.png" alt="" class="country-flag">
                                <span class="country-name">Portugal</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/s-africa.png" alt="" class="country-flag">
                                <span class="country-name">South Africa</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/spanish.png" alt="" class="country-flag">
                                <span class="country-name">Spain</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/switzerland.png" alt="" class="country-flag">
                                <span class="country-name">Switzerland</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/uk.png" alt="" class="country-flag">
                                <span class="country-name">United Kingdom</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="/assets/images/flags/english.png" alt="" class="country-flag">
                                <span class="country-name">United State</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div><!-- .modal -->
<!--tidio-->
<?php echo '<script'; ?>
 src="//code.tidio.co/lco4aqwjrcx0p9hhdzhdckhk7ro3aosk.js" async><?php echo '</script'; ?>
>
</body>

</html><?php }
}
?>