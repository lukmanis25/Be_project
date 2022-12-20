<?php
/* Smarty version 3.1.43, created on 2022-12-18 15:38:36
  from '/var/www/html/presta/my_admin/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639f25ecaa0867_17032340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a73c1c17e622d4d7d2c476125e0886af082fd2a3' => 
    array (
      0 => '/var/www/html/presta/my_admin/themes/default/template/content.tpl',
      1 => 1669387027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639f25ecaa0867_17032340 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
