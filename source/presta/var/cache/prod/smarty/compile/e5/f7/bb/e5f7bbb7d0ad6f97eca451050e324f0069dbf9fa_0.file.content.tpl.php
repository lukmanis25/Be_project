<?php
/* Smarty version 3.1.43, created on 2022-11-30 20:00:50
  from '/var/www/html/presta/my_admin/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6387a862cc5173_29811158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f7bbb7d0ad6f97eca451050e324f0069dbf9fa' => 
    array (
      0 => '/var/www/html/presta/my_admin/themes/new-theme/template/content.tpl',
      1 => 1669387026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387a862cc5173_29811158 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
