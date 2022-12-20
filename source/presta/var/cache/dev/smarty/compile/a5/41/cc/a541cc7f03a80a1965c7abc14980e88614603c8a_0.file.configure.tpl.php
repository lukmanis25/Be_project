<?php
/* Smarty version 3.1.43, created on 2022-12-20 16:08:12
  from '/var/www/html/presta/modules/vivawalletofficial/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a1cfdc5ac923_81971104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a541cc7f03a80a1965c7abc14980e88614603c8a' => 
    array (
      0 => '/var/www/html/presta/modules/vivawalletofficial/views/templates/admin/configure.tpl',
      1 => 1669904262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1cfdc5ac923_81971104 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-content">
<div class="panel">
	<div class="row justify-content-center vivawalletofficial-header">
		<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/vw-logo.svg" class="col-xs-12 col-md-3 text-center" id="payment-logo" />
	</div>

	<hr />

	<div class="vivawalletofficial-content">
		<div class="row">
			<div class="col-md-8">
				<h5><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['display_name']->value,'html','UTF-8' ));?>
</h5>
				<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept payments through Viva Wallet.','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</strong></p>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept payments from all major credit card such as Visa, Mastercard, American Express, Maestro, Bancontact, JCB, and more.','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</p>
			</div>
			<div class="col-md-4">
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow the instructions from our ','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
<a href="https://developer.vivawallet.com/e-commerce-plugins/prestashop1.7/"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Developer Portal','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
.</a></p>
				<p><a href="https://app.vivawallet.com/register/?lang=en" target="_blank" class="btn btn-primary" id="create-account-btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create your Viva Wallet account now!','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</a><br />
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already have an account?','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
<a href="https://members.vivawallet.com/en/signin" target="_blank"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</a></p>
			</div>
		</div>
	</div>
</div>
</div>

<?php }
}
