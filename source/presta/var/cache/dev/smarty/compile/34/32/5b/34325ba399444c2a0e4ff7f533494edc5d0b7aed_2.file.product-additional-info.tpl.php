<?php
/* Smarty version 3.1.43, created on 2022-12-20 12:58:15
  from '/var/www/html/presta/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a1a357540538_11375005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34325ba399444c2a0e4ff7f533494edc5d0b7aed' => 
    array (
      0 => '/var/www/html/presta/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1669387027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1a357540538_11375005 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
