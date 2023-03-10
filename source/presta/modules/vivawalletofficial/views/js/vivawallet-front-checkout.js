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
const $prestashopSubmit = $('#payment-confirmation button[type="submit"]');
const submitInitialText = $prestashopSubmit.text();
const $cardNumberInput = $('#vw-card-number');
const $cardNumberMessage = $('#card-number-error');
const $monthInput = $('#vw-exp-month');
const $expMonthMessage = $('#exp-month-error');
const $yearInput = $('#vw-exp-year');
const $expYearMessage = $('#exp-year-error');
const $cvcInput = $('#vw-cvc');
const $expCvcMessage = $('#exp-cvc-error');
const $instalmentsInput = $('#vw-instalments');
const $amountInput = $("input#vw-amount");

let chargeToken;
let requestData;
let maxInstallmentsForCard = 1;
let oldInstallmentsValue = 1;
let isCvcRequired = true;
let isThreeSessionFinished = false;
let vwCvcPlaceholder = $cvcInput.attr('placeholder');
function disableSubmit(element, text) {
    $(element).prop('disabled', true);
    $(element).text(text ? text : submitInitialText);
    $cardNumberInput.prop('disabled', true);
    $monthInput.prop('disabled', true);
    $yearInput.prop('disabled', true);
    $cvcInput.prop('disabled', true);
    $instalmentsInput.prop('disabled', true);
}

function enableSubmit(element) {
    $(element).prop('disabled', false);
    $(element).text(submitInitialText);
    $cardNumberInput.prop('disabled', false);
    $monthInput.prop('disabled', false);
    $yearInput.prop('disabled', false);
    if (isCvcRequired === true) {
        $cvcInput.prop('disabled', false);
    }
    $instalmentsInput.prop('disabled', false);
}

function areInputsValid() {
    let isValidCardNumber = $.payment.validateCardNumber($cardNumberInput.val());
    let isValidExpiry = $.payment.validateCardExpiry($monthInput.val(), $yearInput.val());
    let cardType = $.payment.cardType($cardNumberInput.val());
    let isValidCvc = $.payment.validateCardCVC($cvcInput.val(), cardType);
    if (!isCvcRequired) {
        isValidCvc = true;
    }

    return isValidCardNumber === true && isValidExpiry === true && isValidCvc === true;
}

function cardNumberValidation() {
    $cardNumberInput.keyup(function () {
        processCardNumberValidation();
    });
    $cardNumberInput.blur(function () {
        if (processCardNumberValidation()) {
            getMaxInstallments($cardNumberInput.val().replace(/ /g, ""));
        }
    });
}

function expiryValidation() {
    const maxLengthMonth = 2;
    const maxLengthYear = 2;
    $monthInput.keydown(function () {
        trimInputValueToMaxLength($monthInput, maxLengthMonth);
    });
    $monthInput.keyup(function () {
        trimInputValueToMaxLength($monthInput, maxLengthMonth);
        processExpMonthValidation();
    });
    $monthInput.blur(function () {
        processExpMonthValidation();
    });
    $yearInput.keydown(function () {
        trimInputValueToMaxLength($yearInput, maxLengthYear);
    });
    $yearInput.keyup(function () {
        trimInputValueToMaxLength($yearInput, maxLengthYear);
        if (processExpYearValidation() && $monthInput.val().length > 0) {
            processExpMonthValidation();
        }
    });
    $yearInput.blur(function () {
        if (processExpYearValidation() && $monthInput.val().length > 0) {
            processExpMonthValidation();
        }
    });
}

function cvcValidation() {
    const maxLength = 4;
    $cvcInput.keydown(function () {
        trimInputValueToMaxLength($cvcInput, maxLength);
    });
    $cvcInput.keyup(function () {
        trimInputValueToMaxLength($cvcInput, maxLength);
        processCvcValidation();
    });
    $cvcInput.blur(function () {
        processCvcValidation();
    });
}

function processCardNumberValidation() {
    let isValidCardNumber = $.payment.validateCardNumber($cardNumberInput.val());
    $cardNumberMessage.css('display', isValidCardNumber ? 'none' : 'block');
    return isValidCardNumber;
}

function processExpMonthValidation() {
    let isValidExpirationMonth = isValidExpMonth();
    $expMonthMessage.css('display', isValidExpirationMonth ? 'none' : 'block');
    return isValidExpirationMonth;
}

function processExpYearValidation() {
    let isValidExpirationYear = isValidExpYear();
    $expYearMessage.css('display', isValidExpirationYear ? 'none' : 'block');
    return isValidExpirationYear;
}

function processCvcValidation() {
    let cardType = $.payment.cardType($cardNumberInput.val());
    let isValidCvc = $.payment.validateCardCVC($cvcInput.val(), cardType);
    $expCvcMessage.css('display', isValidCvc ? 'none' : 'block');
    return isValidCvc;
}

function trimInputValueToMaxLength(input, maxLength) {
    if (input.val() >= maxLength) {
        input.val(input.val().substr(0, maxLength));
    }
}

function getCurrentYear() {
    let currentYear = new Date().getFullYear().toString().substr(2, 2);
    currentYear = parseInt(currentYear);
    return currentYear;
}

function getCurrentMonth() {
    let currentMonth = new Date().getMonth().toString();
    currentMonth = parseInt(currentMonth) + 1;
    return currentMonth;
}

function isValidExpMonth() {
    let month = $monthInput.val();
    let year = $yearInput.val();
    month = parseInt(month);
    year = parseInt(year);

    return month > 0 && month < 13 && (year !== getCurrentYear() || month >= getCurrentMonth());
}

function isValidExpYear() {
    let year = $yearInput.val();
    year = parseInt(year);
    let currentYear = getCurrentYear();
    return year >= currentYear && year < currentYear + 13;
}

$(document).ready(function () {
    $cardNumberInput.payment('formatCardNumber');
    cardNumberValidation();
    expiryValidation();
    cvcValidation();
    closeThreeModal();
});

$prestashopSubmit.click(async event => {

    if (!$('form#vw-charge-token:visible').length) {
        return true;
    }
    $('#error-after-payment').css('display', 'none');
    const disableText = event.currentTarget;
    disableSubmit(disableText, 'Processing Payment...');
    event.preventDefault();
    if (areInputsValid() === false) {
        event.stopPropagation();
        enableSubmit(disableText);
        processCardNumberValidation();
        processCvcValidation();
        processExpMonthValidation();
        processExpYearValidation();
        return false;
    }

    offListener();

    let expirationYear = parseInt($yearInput.val()) + 2000;
    requestData = {
        amount: $amountInput.val(),
        number: $cardNumberInput.val().replace( / /g, "" ),
        holderName: vivawallet_fullname,
        expirationMonth: $monthInput.val(),
        expirationYear: expirationYear,
        cvc: $cvcInput.val(),
        sessionRedirectUrl: ''
    };

    $.ajax({
        url: vivawallet_charge_token_url,
        type: 'POST',
        contentType: 'application/json',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Authorization', 'Bearer ' + vivawallet_bearer_token);
        },
        data: JSON.stringify(requestData),
        error: function (err) {
            if (err.status >= 300) {
                showErrorPage();
            }
        }
    }).done(function (data) {
        chargeToken = data.chargeToken;
        if (data.redirectToACSForm) {
            $('#threed-secure-frame').remove();

            var iframe = $('<iframe id="threed-secure-frame" frameBorder="0">');
            iframe.css('height', '100%');
            iframe.css('width', '100%');

            // $('section#content').append(iframe);
            $('#vivawallet-three-validation-modal').modal('show');
            $('#vivawallet-three-container').append(iframe);
            renderHtmlInFrame(data.redirectToACSForm, 'threed-secure-frame');
        } else {
            postTransaction(requestData, chargeToken)
        }
        onListener();
    });

    function showErrorPage(){
        $('#error-after-payment').css('display', 'block');
        enableSubmit($prestashopSubmit);
    }

    function postTransaction(requestData, chargeToken) {
        let instalments;
        if (maxInstallmentsForCard <= 1) {
            instalments = 1;
        } else {
            instalments = $instalmentsInput.val();
        }
        $.ajax({
            type: 'POST',
            dataType: 'json',
            async: false,
            url: vivawallet_post_transaction_url,
            data: {
                charge_token: chargeToken,
                email: vivawallet_email,
                phone: vivawallet_phone,
                fullname: vivawallet_fullname,
                request_lang: vivawallet_locale,
                country_code: vivawallet_merchant_country_code,
                customer_secure_key: vivawallet_customer_secure_key,
                instalments: instalments
            },
            success: function(resp) {
                if (resp['error'] === true) {
                    showErrorPage();
                }
                else {
                    window.location.replace(resp['url']);
                }
            },
            error: function() {
                showErrorPage();
            }
        });
    }

    function onListener() {
        $(window).on('message', function (evt) {
            var evtdata = {};
            try {
                evtdata = JSON.parse(evt.originalEvent.data);
            } catch (e) {
                return;
            }

            if (evtdata.MessageType !== 'vp_sc_threedsecure') {
                return;
            }

            $('#vivawallet-three-validation-modal').modal('hide');
            isThreeSessionFinished = true;
            if (evtdata.Success && evtdata.Success === true) {
                postTransaction(requestData, chargeToken)
            } else {
                $('#error-after-payment').css('display', 'block');
                $('#threed-secure-frame').remove();
                enableSubmit($prestashopSubmit);
            }
        });
    }

    function offListener() {
        window.removeEventListener('message', message => {});
    }

    function renderHtmlInFrame(html, elementId) {
        if (!html || !elementId) {
            return;
        }
        var decoded = $('<div/>').html(html).html();
        var ifrm = document.getElementById(elementId);
        ifrm = ifrm.contentWindow || ifrm.contentDocument.document || ifrm.contentDocument;
        ifrm.document.open();
        ifrm.document.write(decoded);
        ifrm.document.close();
    }
});

function getMaxInstallments(cardNumber) {
    $.ajax({
        url: vivawallet_get_installments_url,
        type: 'GET',
        contentType: 'application/json',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Authorization', 'Bearer ' + vivawallet_bearer_token);
            xhr.setRequestHeader( 'CardNumber', cardNumber );
            xhr.setRequestHeader( 'Content-Type', 'application/json' );
        },
        success: function (result) {
            if ( true === result.requiresCvv ) {
                $cvcInput.prop('disabled', false);
                $cvcInput.attr('placeholder', vwCvcPlaceholder);
                isCvcRequired = true;
            } else {
                $cvcInput.val('');
                $cvcInput.attr('placeholder', '');
                $cvcInput.prop('disabled', true);
                $expCvcMessage.css('display', 'none');
                isCvcRequired = false;
            }

            maxInstallmentsForCard = result.maxInstallments;
            checkInstallments();
        },
        error: function (err) {}
    });
}

function checkInstallments(){
    const installmentsLogic = vivawallet_installments_logic;
    const allowInstallments = vivawallet_are_installments_allowed;
    let amount = $amountInput.val();
    amount = (amount / 100);
    let maxInstallments = 1;
    // check if installments are allowed.
    if ('1' === allowInstallments && 1 < maxInstallmentsForCard) {
        // check the logic value passed from admin settings.
        if ('string' === typeof (installmentsLogic) && '' !== installmentsLogic) {
            let _obj = installmentsLogic.split(',');

            let _objLen = _obj.length;
            let instalMax = [];
            for (let i = 0; i < _objLen; i++) {
                let instalOption = _obj[i].split(':');
                let instalAmount = instalOption[0];
                let instalTerm = instalOption[1];

                if (Number(amount) >= Number(instalAmount)) {
                    instalMax.push(instalTerm);
                }
            }
            let instalMaxLen = instalMax.length;

            if (0 < instalMaxLen) {
                maxInstallments = Math.max.apply({}, instalMax);
            }
        }

        // limit instalments result by the logic if the amount is greater than the allowed amount by card issuer.
        if (maxInstallments > maxInstallmentsForCard) {
            maxInstallments = maxInstallmentsForCard
        }

        // check if this value is more than 1 and that is different that the stored value.
        if (1 < maxInstallments) {
            if (oldInstallmentsValue !== maxInstallments) {
                showInstallments(maxInstallments);
                // store the value for not injecting the same element.
                oldInstallmentsValue = maxInstallments;
            }
        } else {
            hideInstallments();
            oldInstallmentsValue = 1;
        }
    } else {
        hideInstallments();
        oldInstallmentsValue = 1;
    }
}

function showInstallments ( maxInstallments ) {
    $instalmentsInput.empty();
    $('.instalments-container').show();
    for (let i = 1; i <= maxInstallments; i++) {
        let label = i;
        if (label === 1) {
            label = '0';
        }
        if (i <= maxInstallments) {
            $instalmentsInput.append( $("<option>").val(i).text(label));
        }
    }
}

function hideInstallments () {
    $('.instalments-container').hide();
    $instalmentsInput.empty();
}

function closeThreeModal () {
    $('#vivawallet-three-validation-modal').on('hidden.bs.modal', function () {
        if (isThreeSessionFinished === false) {
            enableSubmit($prestashopSubmit);
        }
    });
}
