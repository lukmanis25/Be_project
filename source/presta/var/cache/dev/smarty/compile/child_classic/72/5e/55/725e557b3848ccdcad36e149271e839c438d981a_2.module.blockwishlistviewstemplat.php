<?php
/* Smarty version 3.1.43, created on 2022-12-20 15:08:15
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a1c1cf7f1f91_95069619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '725e557b3848ccdcad36e149271e839c438d981a' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1669387027,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1c1cf7f1f91_95069619 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/presta/modules/blockwishlist/views/templates/hook/displayCustomerAccount.tpl -->
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="wishlist-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
">
  <span class="link-item">
    <i class="material-icons">favorite</i>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlistsTitlePage']->value, ENT_QUOTES, 'UTF-8');?>

  </span>
</a>
<!-- end /var/www/html/presta/modules/blockwishlist/views/templates/hook/displayCustomerAccount.tpl --><?php }
}
