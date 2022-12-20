<?php
/* Smarty version 3.1.43, created on 2022-12-20 12:42:17
  from '/var/www/html/presta/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a19f999a01d6_72372858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53a2841087eafe3a9812e9786c2e43f22bebc46a' => 
    array (
      0 => '/var/www/html/presta/themes/classic/templates/_partials/helpers.tpl',
      1 => 1669387027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a19f999a01d6_72372858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/presta/var/cache/dev/smarty/compile/child_classiclayouts_layout_left_column_tpl/53/a2/84/53a2841087eafe3a9812e9786c2e43f22bebc46a_2.file.helpers.tpl.php',
    'uid' => '53a2841087eafe3a9812e9786c2e43f22bebc46a',
    'call_name' => 'smarty_template_function_renderLogo_21594719863a19f99999410_62116315',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_21594719863a19f99999410_62116315 */
if (!function_exists('smarty_template_function_renderLogo_21594719863a19f99999410_62116315')) {
function smarty_template_function_renderLogo_21594719863a19f99999410_62116315(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_21594719863a19f99999410_62116315 */
}
