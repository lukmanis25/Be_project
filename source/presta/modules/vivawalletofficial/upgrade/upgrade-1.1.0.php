<?php
/**
 * 2007-2021 PrestaShop
 *
 * NOTICE OF LICENSE
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the "Software"),
 * to use the Software, excluding the rights to copy, modify, merge,
 * publish, distribute, sublicense, and/or sell copies of the Software,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall
 * remain in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    Viva Wallet <support@vivawallet.com>
 *  @copyright 2021 Viva Wallet
 *  @license   Commercial license
 */

declare(strict_types=1);
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_1_0($module)
{
    if (Configuration::get($module::VIVAWALLET_OS_PAID)
        && Validate::isLoadedObject(new OrderState(Configuration::get($module::VIVAWALLET_OS_PAID)))) {
        $order_state = new OrderState(Configuration::get($module::VIVAWALLET_OS_PAID));
        $order_state->module_name = $module->name;
        $order_state->update();
    }
    if (Configuration::get($module::VIVAWALLET_PARTIAL_REFUND_STATE)
        && Validate::isLoadedObject(new OrderState(Configuration::get($module::VIVAWALLET_PARTIAL_REFUND_STATE)))) {
        $order_state = new OrderState(Configuration::get($module::VIVAWALLET_PARTIAL_REFUND_STATE));
        $order_state->module_name = $module->name;
        $order_state->update();
    }
    $module->addPendingStatus();

    return true;
}
