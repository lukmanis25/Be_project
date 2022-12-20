<?php
/* Smarty version 3.1.43, created on 2022-11-30 20:00:50
  from '/var/www/html/presta/my_admin/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6387a862d08209_52799342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '267311cf8f34a19b71241fbd8abea7f122524745' => 
    array (
      0 => '/var/www/html/presta/my_admin/themes/new-theme/template/footer.tpl',
      1 => 1669387026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387a862d08209_52799342 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
