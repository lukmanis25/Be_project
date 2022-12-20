<?php
/* Smarty version 3.1.43, created on 2022-12-20 14:16:39
  from 'module:vivawalletofficialviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a1b5b79232d6_20389546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '232602e71ca1fbd8c19b777d3d044e4496545b0a' => 
    array (
      0 => 'module:vivawalletofficialviewste',
      1 => 1669904262,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1b5b79232d6_20389546 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/presta/modules/vivawalletofficial/views/templates/hook/payment_options.tpl --><div class="container">
    <div
            class="modal fade"
            id="vivawallet-three-validation-modal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="vivawalletThreeValidationLabel"
            aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="vivawalletThreeValidationLabel">3D Secure Validation</h5>
                    <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                            id="close-three-modal"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="vivawallet-three-container">
                </div>
            </div>
        </div>
    </div>
<form method="post" id="vw-charge-token" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <div class="row">
        <div class="col-xs-12">
            <input type="hidden" size="20" autocomplete="off" name="amount" id="vw-amount" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['total_cart']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>
    <div class="row card-data-container">
        <div class="col-xs-12 my-1">
            <label for="vw-card-number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card number','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</label>
            <input type="text" class="form-control vivawallet-form-control vivawallet-card-input" autocomplete="off" name="number" id="vw-card-number" placeholder="•••• •••• •••• ••••">
            <span class="error-message" id="card-number-error"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please set a valid card number','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</span>
        </div>
    </div>
    <div class="row card-data-container">
        <div class="col-xs-12 col-sm-6 col-md-4 my-1">
            <label for="vw-exp-month"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiry Month','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</label>
            <input class="form-control vivawallet-form-control card-validation-data" type="number" autocomplete="off" name="expirationMonth" id="vw-exp-month" placeholder="mm">
            <span class="error-message" id="exp-month-error"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please set a valid expiration month','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</span>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 my-1">
            <label for="vw-exp-year"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiry Year','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</label>
            <input class="form-control vivawallet-form-control card-validation-data" type="number" autocomplete="off" name="expirationYear" id="vw-exp-year" placeholder="yy">
            <span class="error-message" id="exp-year-error"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please set a valid expiration year','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</span>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 my-1">
            <label for="vw-cvc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CVC','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</label>
            <input class="form-control vivawallet-form-control card-validation-data" type="password" autocomplete="off" name="cvc" id="vw-cvc" placeholder="cvc">
            <span class="error-message" id="exp-cvc-error"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please set a valid CVC','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</span>
        </div>
    </div>
    <div class="row error-message-container">
        <div class="col-xs-12">
            <span class="error-message" id="error-after-payment"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There was an error processing your payment.','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</span>
        </div>
    </div>
    <div class="row instalments-container my-1 ">
        <div class="col-xs-6">
            <label for="vw-instalments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instalments','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</label>
            <select name="vw-instalments" id="vw-instalments" class="form-control vivawallet-form-control"></select>
        </div>
    </div>

</form>
    <?php if ($_smarty_tpl->tpl_vars['is_demo']->value === true) {?>
        <div class="row">
            <div class="col-xl-12">
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viva Wallet Payment Gateway is running in Demo Mode.','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
</p>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test card number:','mod'=>'vivawalletofficial'),$_smarty_tpl ) );?>
 5239290700000168</p>
            </div>
        </div>
    <?php }?>
</div>
<!-- end /var/www/html/presta/modules/vivawalletofficial/views/templates/hook/payment_options.tpl --><?php }
}
