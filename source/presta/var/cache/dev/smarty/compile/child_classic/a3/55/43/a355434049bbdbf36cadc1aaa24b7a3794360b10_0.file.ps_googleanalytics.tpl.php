<?php
/* Smarty version 3.1.43, created on 2022-12-18 15:38:36
  from '/var/www/html/presta/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639f25ec09e6f8_45100947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a355434049bbdbf36cadc1aaa24b7a3794360b10' => 
    array (
      0 => '/var/www/html/presta/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl',
      1 => 1671368991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639f25ec09e6f8_45100947 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
	(window.gaDevIds=window.gaDevIds||[]).push('d6YPbH');
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    <?php if ($_smarty_tpl->tpl_vars['gaCrossdomainEnabled']->value) {?>
        ga('create', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8' ));?>
', 'auto', {'allowLinker': true});
        ga('require', 'linker');
        ga('linker:autoLink', [
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['shop']->value['id_shop'] != $_smarty_tpl->tpl_vars['currentShopId']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['useSecureMode']->value) {?>'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['domain_ssl'],'htmlall','UTF-8' ));?>
'<?php } else { ?>'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['domain'],'htmlall','UTF-8' ));?>
'<?php }?>,
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        ]);
    <?php } else { ?>
        ga('create', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8' ));?>
', 'auto');
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['userId']->value && !$_smarty_tpl->tpl_vars['backOffice']->value) {?>
        ga('set', 'userId', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userId']->value,'htmlall','UTF-8' ));?>
');
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['gaAnonymizeEnabled']->value) {?>
        ga('set', 'anonymizeIp', true);
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['backOffice']->value && !$_smarty_tpl->tpl_vars['trackBackOffice']->value) {?>
        ga('set', 'nonInteraction', true);
    <?php } else { ?>
        ga('send', 'pageview');
    <?php }?>

    ga('require', 'ec');
<?php echo '</script'; ?>
>

<?php }
}
