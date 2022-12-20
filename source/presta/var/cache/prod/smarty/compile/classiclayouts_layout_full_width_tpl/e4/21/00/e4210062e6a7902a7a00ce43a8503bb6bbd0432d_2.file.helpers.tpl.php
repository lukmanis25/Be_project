<?php
/* Smarty version 3.1.43, created on 2022-11-30 20:00:52
  from '/var/www/html/presta/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6387a864548d22_89795382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4210062e6a7902a7a00ce43a8503bb6bbd0432d' => 
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
function content_6387a864548d22_89795382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/presta/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/e4/21/00/e4210062e6a7902a7a00ce43a8503bb6bbd0432d_2.file.helpers.tpl.php',
    'uid' => 'e4210062e6a7902a7a00ce43a8503bb6bbd0432d',
    'call_name' => 'smarty_template_function_renderLogo_14852721946387a864544d14_47822843',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_14852721946387a864544d14_47822843 */
if (!function_exists('smarty_template_function_renderLogo_14852721946387a864544d14_47822843')) {
function smarty_template_function_renderLogo_14852721946387a864544d14_47822843(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_14852721946387a864544d14_47822843 */
}
