<?php
/* Smarty version 3.1.43, created on 2022-12-20 16:06:56
  from '/var/www/html/presta/modules/vivawalletofficial/views/templates/hook/confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a1cf904b80f6_78977381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe31464e23a96a4649ed46f2ecb19746b8fcb92' => 
    array (
      0 => '/var/www/html/presta/modules/vivawalletofficial/views/templates/hook/confirmation.tpl',
      1 => 1669904262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1cf904b80f6_78977381 (Smarty_Internal_Template $_smarty_tpl) {
if (((isset($_smarty_tpl->tpl_vars['status']->value)) == true) && ($_smarty_tpl->tpl_vars['status']->value == 'ok')) {?>
<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s is complete.','sprintf'=>array($_smarty_tpl->tpl_vars['shop']->value['name']),'mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</h3>
<p>
	<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
 : <span class="price"><strong><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['total']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</strong></span>
	<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
 : <span class="reference"><strong><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reference']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</strong></span>
	<br /><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent with this information.','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>

</p>
<?php } else { ?>
<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s has not been accepted.','sprintf'=>array($_smarty_tpl->tpl_vars['shop']->value['name']),'mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</h3>
<p>
	<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
 <span class="reference"> <strong><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reference']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</strong></span>
	<br /><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please, try to order again.','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>

</p>
<?php }?>
<hr />
<?php }
}
