<?php
/* Smarty version 3.1.43, created on 2022-12-18 15:38:08
  from '/var/www/html/presta/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639f25d0de61a8_93665356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cfa37cd63f6951dc3e965c346f3e7ff417d0fb7' => 
    array (
      0 => '/var/www/html/presta/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1671368991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639f25d0de61a8_93665356 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof GoogleAnalyticEnhancedECommerce !== 'undefined') {
                var MBG = GoogleAnalyticEnhancedECommerce;
                MBG.setCurrency('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isoCode']->value,'htmlall','UTF-8' ));?>
');
                <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

            }
        });
    <?php echo '</script'; ?>
>
    
<?php }
}
}
