<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__45582aee06c98a4a86780fe77899e97126f270b2afe60c91a99bb62853abe421 */
class __TwigTemplate_262bb262fb81af99e00a2febe0e2ef69d6e112ce27148d3a50c56649e4b139be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__45582aee06c98a4a86780fe77899e97126f270b2afe60c91a99bb62853abe421"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__45582aee06c98a4a86780fe77899e97126f270b2afe60c91a99bb62853abe421"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/presta/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/presta/img/app_icon.png\" />

<title>Produkt ??? BiznesElektroniczny</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.8.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Z??o??ono nowe zam??wienie w Twoim sklepie.';
    var order_number_msg = 'Numer zam??wienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zam??wienie';
    var new_customer_msg = 'Nowy klient zarejestrowa?? si?? w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomo???? pojawi??a si?? w Twoim sklepie.';
    var see_msg = 'Przeczytaj t?? wiadomo????';
    var token = '4e16cd654079b7c6810e547a8d940130';
    var token_admin_orders = tokenAdminOrders = 'f384cb29e8af50d99fb53cf20d5cb020';
    var token_admin_customers = '02de540900fa38e8a326984f548b928a';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'f278f9dd5f6d9313376e3f914f4a7143';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '1d6a200ae5ba286143a7e781c837146f';
    var choose_language_translate = 'Wybierz j??zyk:';
    var default_language = '1';
    var admin_modules_link = '/presta/my_admin/index.php/improve/modules/catalog/recommended?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA';
    var admin_notification_get_link = '/presta/my_admin/index.php/common/notifications?_token=H3ZlVDZdxbuDF4aZ";
        // line 42
        echo "hs7AF_KyByt0lFDJsCVjsxPoDuA';
    var admin_notification_push_link = adminNotificationPushLink = '/presta/my_admin/index.php/common/notifications/ack?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiod??a si??';
    var errorLogin = 'PrestaShop nie m??g?? zalogowa?? si?? do Dodatk??w, sprawd?? swoje uprawnienia i po????czenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/presta/my_admin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/my_admin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/vivawalletofficial/views/css/vivawallet-admin-refunds.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/presta\\/my_admin\\/\";
var baseDir = \"\\/presta\\/\";
var changeFormLanguageUrl = \"\\/presta\\/my_admin\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\";
var currency = {\"iso_code\":\"PLN\",\"sign";
        // line 66
        echo "\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/presta/my_admin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/presta/my_admin/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta/my_admin/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/ps_mbo/views/js/r";
        // line 85
        echo "ecommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/presta/my_admin/themes/default/js/bundle/module/module_card.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/vivawalletofficial/views/js/vivawallet-admin-refunds.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/presta/my_admin/index.php/common/notifications?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/192.168.56.10\\/presta\\/my_admin\\/index.php?controller=AdminGamification&token=550c5d8c9e07aa455e8cba41c9a1e533\";
            var current_id_tab = 10;
        </script>
<script type=\"text/javascript\">
\t(window.gaDevIds=window.gaDevIds||[]).push('d6YPbH');
\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-252390229-1', 'auto');
                        ga('set', 'nonInteraction', true);
    
    ga('require', 'ec');
</script>



";
        // line 125
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminproducts\"
  data-base-url=\"/presta/my_admin/index.php\"  data-token=\"H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminDashboard&amp;token=0035a75e8b66fb36b482fb635ca76090\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dost??p
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php/sell/catalog/categories/new?token=be2079fd6eaa3200e98a57f3684b2eb3\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b7348cafaa1480fac131b87439fb71fc\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php/sell/catalog/products/new?token=be2079fd6eaa3200e98a57f3684b2eb3\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3c14a5c828973fb97f68afb071821fbf\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item ";
        // line 162
        echo "quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php/improve/modules/manage?token=be2079fd6eaa3200e98a57f3684b2eb3\"
                 data-item=\"Zainstalowane modu??y\"
      >Zainstalowane modu??y</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminOrders&amp;token=f384cb29e8af50d99fb53cf20d5cb020\"
                 data-item=\"Zam??wienia\"
      >Zam??wienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"153\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/223\"
        data-post-link=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminQuickAccesses&token=745e0deef94b994fa8cf43832e9dae28\"
        data-prompt-text=\"Prosz?? poda?? nazw?? tego skr??tu:\"
        data-link=\"Produkty - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualn?? stron?? do Szybkiego dost??pu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminQuickAccesses&token=745e0deef94b994fa8cf43832e9dae28\">
      <i class=\"material-icons\">settings</i>
      Zarz??dzaj Szybkiem dost??pem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/presta/my_admin/index.php?controller=AdminSearch&amp;token=870b4d5d2fed984629625b10470351c0\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klien";
        // line 200
        echo "ta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wsz??dzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wsz??dzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wsz??dzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zam??wienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zam??wienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zam??wienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Modu??y\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modu??u\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modu??y</a>
      </div>
      <button class=\"btn btn-primary\" type=\"su";
        // line 216
        echo "bmit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Tw??j sklep jest w trybie debugowania.</strong></p><p class='text-left'>Wy??wietlane s?? wszystkie b????dy i komunikaty PHP. Gdy nie jest ju?? potrzebny, <strong>wy????cz</strong> ten tryb.</p>\"
             href=\"/presta/my_admin/index.php/configure/advanced/performance/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://192.168.56.10/presta/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Zobacz sklep</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class";
        // line 262
        echo "=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zam??wienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomo??ci<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zam??wie?? :(<br>
              Czy sprawdzi??e?? <strong><a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=325f79d07ae3c210c6add6eb0432bfff\">porzucone koszyki</a></strong>?<br>Mo??e znajdziesz tam swoje nast??pne zam??wienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klient??w :(<br>
              Czy jeste?? aktywny w mediac";
        // line 312
        echo "h spo??eczno??ciowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomo??ci.<br>
              Wydaje si??, wszyscy Twoi klienci s?? zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://192.168.56.10/presta/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie Piotr</span>
      <a class=\"dropdown-item employee-link profile-link\" href";
        // line 362
        echo "=\"/presta/my_admin/index.php/configure/advanced/employees/1/edit?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\">
      <i class=\"material-icons\">edit</i>
      <span>Tw??j profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Materia??y</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Znajd?? eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminLogin&amp;logout=1&amp;token=3ffefd7bc89c0e310c05526df3e203a9\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj si??</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/presta/my_admin/index.php/configure/advanced/employees/toggle-navigation?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCV";
        // line 386
        echo "jsxPoDuA\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminDashboard&amp;token=0035a75e8b66fb36b482fb635ca76090\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzeda??</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/presta/my_admin/index.php/sell/orders/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zam??wienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo";
        // line 430
        echo "\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/presta/my_admin/index.php/sell/orders/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Zam??wienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/presta/my_admin/index.php/sell/orders/invoices/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/presta/my_admin/index.php/sell/orders/credit-slips/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/presta/my_admin/index.php/sell/orders/delivery-slips/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Druk wysy??ki
                                </a>
                              </li>

                                                                                  
                              
                                              ";
        // line 461
        echo "              
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCarts&amp;token=325f79d07ae3c210c6add6eb0432bfff\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/presta/my_admin/index.php/sell/catalog/products?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/presta/my_admin/index.php/sell/catalog/products?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Produkty
                                </a>
                              </li>

   ";
        // line 492
        echo "                                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/presta/my_admin/index.php/sell/catalog/categories?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/presta/my_admin/index.php/sell/catalog/monitoring/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminAttributesGroups&amp;token=9c3c4d2cd0bebd24d61f1497368d95eb\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/presta/my_admin/index.php/sell/catalog/brands/?_token=H3ZlVDZdxbuD";
        // line 520
        echo "F4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/presta/my_admin/index.php/sell/attachments/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCartRules&amp;token=b7348cafaa1480fac131b87439fb71fc\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/presta/my_admin/index.php/sell/stocks/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=";
        // line 554
        echo "\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/presta/my_admin/index.php/sell/customers/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/presta/my_admin/index.php/sell/customers/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/presta/my_admin/index.php/sell/addresses/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                         ";
        // line 583
        echo "     
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCustomerThreads&amp;token=f278f9dd5f6d9313376e3f914f4a7143\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obs??uga klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCustomerThreads&amp;token=f278f9dd5f6d9313376e3f914f4a7143\" class=\"link\"> Obs??uga klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/presta/my_admin/index.php/sell/customer-service/order-messages/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Wiadomo??ci zam??wienia
                                </a>
                        ";
        // line 612
        echo "      </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminReturn&amp;token=7adb2fb62cdada396ff3f10614b7a598\" class=\"link\"> Zwroty produkt??w
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/presta/my_admin/index.php/modules/metrics/legacy/stats?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/presta/my_admin/index.php/modules/metrics/legacy/stats?_t";
        // line 643
        echo "oken=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/presta/my_admin/index.php/modules/metrics?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/presta/my_admin/index.php/improve/modules/manage?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modu??y
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" ";
        // line 681
        echo "class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/presta/my_admin/index.php/improve/modules/manage?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Mened??er modu????w
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/presta/my_admin/index.php/modules/addons/modules/catalog?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/presta/my_admin/index.php/improve/design/themes/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygl??d
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                           ";
        // line 711
        echo "                         keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/presta/my_admin/index.php/improve/design/themes/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/presta/my_admin/index.php/modules/addons/themes/catalog?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/presta/my_admin/index.php/improve/design/mail_theme/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                        ";
        // line 741
        echo "                                    
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/presta/my_admin/index.php/improve/design/cms-pages/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/presta/my_admin/index.php/improve/design/modules/positions/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminImages&amp;token=720e693222a09aa3bac41d704f42a4f7\" class=\"link\"> Zdj??cia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/presta/my_admin/index.php/modules/link-widget/list?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Lista link??w
                                </a>
                              </li>

                                ";
        // line 771
        echo "                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCarriers&amp;token=93f90a3705d2b8bf39eadd1671a5707d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysy??ka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCarriers&amp;token=93f90a3705d2b8bf39eadd1671a5707d\" class=\"link\"> Przewo??nicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/presta/my_admin/index.php/improve/shipping/preferences/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjs";
        // line 800
        echo "xPoDuA\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/presta/my_admin/index.php/improve/payment/payment_methods?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      P??atno????
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/presta/my_admin/index.php/improve/payment/payment_methods?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> P??atno??ci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                  ";
        // line 833
        echo "              <a href=\"/presta/my_admin/index.php/improve/payment/preferences?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/presta/my_admin/index.php/improve/international/localization/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Mi??dzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/presta/my_admin/index.php/improve/international/localization/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                           ";
        // line 864
        echo "                 
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/presta/my_admin/index.php/improve/international/zones/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Po??o??enie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/presta/my_admin/index.php/improve/international/taxes/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/presta/my_admin/index.php/improve/international/translations/settings?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> T??umaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminPsfacebookModule&amp;token=d6bc89817f291d18f4eccbc82adbfdd4\" class=\"link\">
                    ";
        // line 894
        echo "  <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminPsfacebookModule&amp;token=d6bc89817f291d18f4eccbc82adbfdd4\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=1f178faaa936a374ce187b5e99b979ff\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"titl";
        // line 928
        echo "e\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/presta/my_admin/index.php/configure/shop/preferences/preferences?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/presta/my_admin/index.php/configure/shop/preferences/preferences?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Og??lny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/presta/my_admin/index.php/configure/shop/order-preferences/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Zam??wienia
                              ";
        // line 959
        echo "  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/presta/my_admin/index.php/configure/shop/product-preferences/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/presta/my_admin/index.php/configure/shop/customer-preferences/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/presta/my_admin/index.php/configure/shop/contacts/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/presta/my_admin/index.php/configure/";
        // line 990
        echo "shop/seo-urls/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminSearchConf&amp;token=1f6860ffd98c141b343305cd0b5de209\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminGamification&amp;token=550c5d8c9e07aa455e8cba41c9a1e533\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/presta/my_admin/index.php/configure/advanced/system-information/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
              ";
        // line 1022
        echo "                                      <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/system-information/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/performance/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Wydajno????
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/administration/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Administracja
                                </a>
                              </li>

                                  ";
        // line 1051
        echo "                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/emails/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Adres e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/import/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/employees/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Zesp????
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/sql-requests/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Baza dany";
        // line 1079
        echo "ch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/logs/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/webservice-keys/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/feature-flags/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Funkcje eksperymentalne
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-n";
        // line 1113
        echo "avbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Uruchomienie sklepu!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">82%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:81.818181818182%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Wzn??w</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Zako??cz wprowadzanie</a>
  </div>
</div>

</nav>


<div id=\"main-div\">
          
      <div class=\"content-div -notoolbar \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 81.818181818182%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 81.818181818182%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 81.818181818182%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 81.818181818182%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 81.818181818182%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Dalej</button>
  <a class=\"onboarding-button-shut-down\">Pomi?? ten poradnik</a>
</div>

<script type=\"text/javascript\">

  var o";
        // line 1173
        echo "nBoarding;

  \$(function(){
    onBoarding = new OnBoarding(9, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Zapraszamy do sklepu!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Cze\\u015b\\u0107! Nazywam si\\u0119 Preston i jestem tutaj Twoim przewodnikiem.<\\/p>\\n    <p>Poznasz kilka podstawowych krok\\u00f3w, zanim b\\u0119dzie mo\\u017cna uruchomi\\u0107 sklep:\\n    Utworzysz sw\\u00f3j pierwszy produkt, dostosujesz sw\\u00f3j sklep, skonfigurujesz wysy\\u0142k\\u0119 i p\\u0142atno\\u015bci...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Zaczynajmy!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Po\\u017aniej<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Ropocznij<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/192.168.56.10\\/presta\\/my_admin\\/index.php?controller=AdminDashboard&token=0035a75e8b66fb36b482fb635ca76090\"}]},{\"name\":\"product\",\"title\":\"Utw\\u00f3rz sw\\u00f3j pierwszy produkt\",\"subtitle\":{\"1\":\"Jak chcesz go opisa\\u0107? Pomy\\u015bl co Twoi klienci chcieliby o nim wiedzie\\u0107.\",\"2\":\"Dodaj jasne i atrakcyjne informacje. Nie martw si\\u0119, mo\\u017cesz je p\\u00f3\\u017aniej edytowa\\u0107 :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Nadaj produktowi chwytliw\\u0105 nazw\\u0119.\",\"options\":[\"savepoint\"],\"page\":[\"\\/presta\\/my_admin\\/index.php\\/sell\\/catalog\\/products\\/new?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wype\\u0142nij niezb\\u0119dne informacje w tej karcie. Pozosta\\u0142e karty s\\u0105 dla bardziej zaawansowanych informacji.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\"";
        // line 1176
        echo ":\"tooltip\",\"text\":\"Dodaj jedno lub wi\\u0119cej zdj\\u0119\\u0107, dzi\\u0119ki temu produkt wygl\\u0105da kusz\\u0105co!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Po ile chcesz go sprzedawa\\u0107?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Hurra! W\\u0142a\\u015bnie zosta\\u0142 utworzony pierwszy produkt. Wygl\\u0105da dobrze, prawda?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Daj sklepowi w\\u0142asn\\u0105 to\\u017csamo\\u015b\\u0107\",\"subtitle\":{\"1\":\"Jak ma wygl\\u0105da\\u0107 tw\\u00f3j sklep? Co zrobi\\u0107 aby by\\u0142 wyj\\u0105tkowym?\",\"2\":\"Dostosuj sw\\u00f3j szablon lub wybierz najlepszy projekt z katalogu szablon\\u00f3w.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dobrym sposobem na rozpocz\\u0119cie jest aby doda\\u0107 tutaj w\\u0142asne logo!\",\"options\":[\"savepoint\"],\"page\":\"\\/presta\\/my_admin\\/index.php\\/improve\\/design\\/themes\\/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Je\\u015bli chcesz co\\u015b naprawd\\u0119 specjalnego, obejrzyj ten katalog szablon\\u00f3w!\",\"page\":\"\\/presta\\/my_admin\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Przygotuj sw\\u00f3j sklep do dokonywania p\\u0142atno\\u015bci\",\"subtitle\":{\"1\":\"W jaki spos\\u00f3b klienci maj\\u0105 dokona\\u0107 p\\u0142atno\\u015bci?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Te metody p\\u0142atno\\u015bci s\\u0105 ju\\u017c dost\\u01";
        echo "19pne dla Twoich klient\\u00f3w.\",\"options\":[\"savepoint\"],\"page\":\"\\/presta\\/my_admin\\/index.php\\/improve\\/payment\\/payment_methods?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Wybierz swoje sposoby wysy\\u0142ki\",\"subtitle\":{\"1\":\"Jak chcesz dostarcza\\u0107 swoje produkty?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Tutaj s\\u0105 metody wysy\\u0142ki dost\\u0119pne dzi\\u015b w sklepie.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/192.168.56.10\\/presta\\/my_admin\\/index.php?controller=AdminCarriers&token=93f90a3705d2b8bf39eadd1671a5707d\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Dodatkowo dla Ciebie!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Widzieli\\u015bcie tylko podstawy, ale jest o wiele wi\\u0119cej do poznania.<br \\/>\\n          Oto zasoby kt\\u00f3re mog\\u0105 pom\\u00f3c wi\\u0119cej:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik dla pocz\\u0105tkuj\\u0105cych<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div cl";
        echo "ass=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum angielskie<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Trening<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik wideo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Jestem gotowy<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/192.168.56.10\\/presta\\/my_admin\\/index.php?controller=AdminDashboard&token=0035a75e8b66fb36b482fb635ca76090\"}]}]}, 1, \"https://192.168.56.10/presta/my_admin/index.php?controller=AdminWelcome&token=d8410af7fa19ad2049cb8bdc931c473e\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hej! Nie mo??esz si?? odnale?????</p>    <p>Aby kontynuowa??, kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Dalej</button>    </div>    <p>Je??li chcesz zako??czy?? ten poradnik - kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Zamknij powita";
        // line 1178
        echo "lny samouczek</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Krok <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Nast??pny</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1216
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dost??pna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzysta?? z komputera stacjonarnego, aby uzyska?? dost??p do tej strony, dop??ki nie zostanie zoptymalizowana pod k??tem urz??dze?? mobilnych.
  </p>
  <p class=\"mt-2\">
    Dzi??kujemy.
  </p>
  <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminDashboard&amp;token=0035a75e8b66fb36b482fb635ca76090\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=piotrszym01%40wp.pl&amp;firstname=Piotr&amp;lastname=Szyma%C5%84ski&amp;website=http%3A%2F%2F192.168.56.10%2Fpresta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/presta/my_admin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Po????cz sw??j sklep z rynkiem PrestaShop, ??eby automatycznie importowa?? wszystkie zakup";
        // line 1262
        echo "ione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj si???? PrestaShop Addons! Przegl??daj Oficjalny Rynek PrestaShop i znajd?? ponad 3500 innowacyjnych modu????w i szablon??w, kt??re optymalizuj?? stopnie konwersji, zwi??kszaj?? ruch, buduj?? lojalno???? klient??w i zwi??kszaj?? Twoj?? produktywno????</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Po????cz si?? z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomnia??em has??a</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=piotrszym01%40wp.pl&amp;firstname=Piotr&amp;lastname=Szyma%C5%84ski&amp;website=http%3A%2F%2F192.168.56.10%2Fpresta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtw??rz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<bu";
        // line 1304
        echo "tton id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj si??
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1324
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 125
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1216
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1324
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__45582aee06c98a4a86780fe77899e97126f270b2afe60c91a99bb62853abe421";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1572 => 1324,  1507 => 1216,  1474 => 125,  1459 => 1324,  1437 => 1304,  1393 => 1262,  1341 => 1216,  1301 => 1178,  1295 => 1176,  1290 => 1173,  1228 => 1113,  1192 => 1079,  1162 => 1051,  1131 => 1022,  1097 => 990,  1064 => 959,  1031 => 928,  995 => 894,  963 => 864,  930 => 833,  895 => 800,  864 => 771,  832 => 741,  800 => 711,  768 => 681,  728 => 643,  695 => 612,  664 => 583,  633 => 554,  597 => 520,  567 => 492,  534 => 461,  501 => 430,  455 => 386,  429 => 362,  377 => 312,  325 => 262,  277 => 216,  259 => 200,  219 => 162,  177 => 125,  135 => 85,  114 => 66,  88 => 42,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/presta/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/presta/img/app_icon.png\" />

<title>Produkt ??? BiznesElektroniczny</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminProducts\\';
    var iso_user = \\'pl\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'pl\\';
    var full_cldr_language_code = \\'pl-PL\\';
    var country_iso_code = \\'PL\\';
    var _PS_VERSION_ = \\'1.7.8.7\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Z??o??ono nowe zam??wienie w Twoim sklepie.\\';
    var order_number_msg = \\'Numer zam??wienia: \\';
    var total_msg = \\'Razem: \\';
    var from_msg = \\'Od: \\';
    var see_order_msg = \\'Zobacz to zam??wienie\\';
    var new_customer_msg = \\'Nowy klient zarejestrowa?? si?? w Twoim sklepie.\\';
    var customer_name_msg = \\'Nazwa klienta: \\';
    var new_msg = \\'Nowa wiadomo???? pojawi??a si?? w Twoim sklepie.\\';
    var see_msg = \\'Przeczytaj t?? wiadomo????\\';
    var token = \\'4e16cd654079b7c6810e547a8d940130\\';
    var token_admin_orders = tokenAdminOrders = \\'f384cb29e8af50d99fb53cf20d5cb020\\';
    var token_admin_customers = \\'02de540900fa38e8a326984f548b928a\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'f278f9dd5f6d9313376e3f914f4a7143\\';
    var currentIndex = \\'index.php?controller=AdminProducts\\';
    var employee_token = \\'1d6a200ae5ba286143a7e781c837146f\\';
    var choose_language_translate = \\'Wybierz j??zyk:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/presta/my_admin/index.php/improve/modules/catalog/recommended?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\\';
    var admin_notification_get_link = \\'/presta/my_admin/index.php/common/notifications?_token=H3ZlVDZdxbuDF4aZ' | raw }}{{ 'hs7AF_KyByt0lFDJsCVjsxPoDuA\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/presta/my_admin/index.php/common/notifications/ack?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Aktualizacja powiod??a si??\\';
    var errorLogin = \\'PrestaShop nie m??g?? zalogowa?? si?? do Dodatk??w, sprawd?? swoje uprawnienia i po????czenie internetowe.\\';
    var search_product_msg = \\'Szukaj produktu\\';
  </script>

      <link href=\"/presta/my_admin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/my_admin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/vivawalletofficial/views/css/vivawallet-admin-refunds.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/presta\\\\/my_admin\\\\/\";
var baseDir = \"\\\\/presta\\\\/\";
var changeFormLanguageUrl = \"\\\\/presta\\\\/my_admin\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\";
var currency = {\"iso_code\":\"PLN\",\"sign' | raw }}{{ '\":\"z\\\\u0142\",\"name\":\"Z\\\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\\\u0142\",\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/presta/my_admin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/presta/my_admin/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/presta/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta/my_admin/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/ps_mbo/views/js/r' | raw }}{{ 'ecommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/presta/my_admin/themes/default/js/bundle/module/module_card.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/vivawalletofficial/views/js/vivawallet-admin-refunds.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/presta/modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/presta/my_admin/index.php/common/notifications?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\\\/\\\\/192.168.56.10\\\\/presta\\\\/my_admin\\\\/index.php?controller=AdminGamification&token=550c5d8c9e07aa455e8cba41c9a1e533\";
            var current_id_tab = 10;
        </script>
<script type=\"text/javascript\">
\t(window.gaDevIds=window.gaDevIds||[]).push(\\'d6YPbH\\');
\t(function(i,s,o,g,r,a,m){i[\\'GoogleAnalyticsObject\\']=r;i[r]=i[r]||function(){
\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t})(window,document,\\'script\\',\\'https://www.google-analytics.com/analytics.js\\',\\'ga\\');

            ga(\\'create\\', \\'UA-252390229-1\\', \\'auto\\');
                        ga(\\'set\\', \\'nonInteraction\\', true);
    
    ga(\\'require\\', \\'ec\\');
</script>



' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-pl adminproducts\"
  data-base-url=\"/presta/my_admin/index.php\"  data-token=\"H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminDashboard&amp;token=0035a75e8b66fb36b482fb635ca76090\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dost??p
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php/sell/catalog/categories/new?token=be2079fd6eaa3200e98a57f3684b2eb3\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b7348cafaa1480fac131b87439fb71fc\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php/sell/catalog/products/new?token=be2079fd6eaa3200e98a57f3684b2eb3\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3c14a5c828973fb97f68afb071821fbf\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item ' | raw }}{{ 'quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php/improve/modules/manage?token=be2079fd6eaa3200e98a57f3684b2eb3\"
                 data-item=\"Zainstalowane modu??y\"
      >Zainstalowane modu??y</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminOrders&amp;token=f384cb29e8af50d99fb53cf20d5cb020\"
                 data-item=\"Zam??wienia\"
      >Zam??wienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"153\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/223\"
        data-post-link=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminQuickAccesses&token=745e0deef94b994fa8cf43832e9dae28\"
        data-prompt-text=\"Prosz?? poda?? nazw?? tego skr??tu:\"
        data-link=\"Produkty - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualn?? stron?? do Szybkiego dost??pu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminQuickAccesses&token=745e0deef94b994fa8cf43832e9dae28\">
      <i class=\"material-icons\">settings</i>
      Zarz??dzaj Szybkiem dost??pem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/presta/my_admin/index.php?controller=AdminSearch&amp;token=870b4d5d2fed984629625b10470351c0\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klien' | raw }}{{ 'ta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wsz??dzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wsz??dzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wsz??dzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zam??wienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zam??wienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zam??wienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Modu??y\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modu??u\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modu??y</a>
      </div>
      <button class=\"btn btn-primary\" type=\"su' | raw }}{{ 'bmit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=\\'text-left\\'><strong>Tw??j sklep jest w trybie debugowania.</strong></p><p class=\\'text-left\\'>Wy??wietlane s?? wszystkie b????dy i komunikaty PHP. Gdy nie jest ju?? potrzebny, <strong>wy????cz</strong> ten tryb.</p>\"
             href=\"/presta/my_admin/index.php/configure/advanced/performance/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://192.168.56.10/presta/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Zobacz sklep</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class' | raw }}{{ '=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zam??wienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomo??ci<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zam??wie?? :(<br>
              Czy sprawdzi??e?? <strong><a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=325f79d07ae3c210c6add6eb0432bfff\">porzucone koszyki</a></strong>?<br>Mo??e znajdziesz tam swoje nast??pne zam??wienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klient??w :(<br>
              Czy jeste?? aktywny w mediac' | raw }}{{ 'h spo??eczno??ciowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomo??ci.<br>
              Wydaje si??, wszyscy Twoi klienci s?? zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://192.168.56.10/presta/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie Piotr</span>
      <a class=\"dropdown-item employee-link profile-link\" href' | raw }}{{ '=\"/presta/my_admin/index.php/configure/advanced/employees/1/edit?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\">
      <i class=\"material-icons\">edit</i>
      <span>Tw??j profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Materia??y</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Znajd?? eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminLogin&amp;logout=1&amp;token=3ffefd7bc89c0e310c05526df3e203a9\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj si??</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/presta/my_admin/index.php/configure/advanced/employees/toggle-navigation?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCV' | raw }}{{ 'jsxPoDuA\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminDashboard&amp;token=0035a75e8b66fb36b482fb635ca76090\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzeda??</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/presta/my_admin/index.php/sell/orders/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zam??wienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo' | raw }}{{ '\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/presta/my_admin/index.php/sell/orders/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Zam??wienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/presta/my_admin/index.php/sell/orders/invoices/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/presta/my_admin/index.php/sell/orders/credit-slips/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/presta/my_admin/index.php/sell/orders/delivery-slips/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Druk wysy??ki
                                </a>
                              </li>

                                                                                  
                              
                                              ' | raw }}{{ '              
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCarts&amp;token=325f79d07ae3c210c6add6eb0432bfff\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/presta/my_admin/index.php/sell/catalog/products?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/presta/my_admin/index.php/sell/catalog/products?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Produkty
                                </a>
                              </li>

   ' | raw }}{{ '                                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/presta/my_admin/index.php/sell/catalog/categories?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/presta/my_admin/index.php/sell/catalog/monitoring/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminAttributesGroups&amp;token=9c3c4d2cd0bebd24d61f1497368d95eb\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/presta/my_admin/index.php/sell/catalog/brands/?_token=H3ZlVDZdxbuD' | raw }}{{ 'F4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/presta/my_admin/index.php/sell/attachments/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCartRules&amp;token=b7348cafaa1480fac131b87439fb71fc\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/presta/my_admin/index.php/sell/stocks/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=' | raw }}{{ '\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/presta/my_admin/index.php/sell/customers/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/presta/my_admin/index.php/sell/customers/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/presta/my_admin/index.php/sell/addresses/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                         ' | raw }}{{ '     
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCustomerThreads&amp;token=f278f9dd5f6d9313376e3f914f4a7143\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obs??uga klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCustomerThreads&amp;token=f278f9dd5f6d9313376e3f914f4a7143\" class=\"link\"> Obs??uga klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/presta/my_admin/index.php/sell/customer-service/order-messages/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Wiadomo??ci zam??wienia
                                </a>
                        ' | raw }}{{ '      </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminReturn&amp;token=7adb2fb62cdada396ff3f10614b7a598\" class=\"link\"> Zwroty produkt??w
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/presta/my_admin/index.php/modules/metrics/legacy/stats?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/presta/my_admin/index.php/modules/metrics/legacy/stats?_t' | raw }}{{ 'oken=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/presta/my_admin/index.php/modules/metrics?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/presta/my_admin/index.php/improve/modules/manage?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modu??y
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" ' | raw }}{{ 'class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/presta/my_admin/index.php/improve/modules/manage?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Mened??er modu????w
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/presta/my_admin/index.php/modules/addons/modules/catalog?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/presta/my_admin/index.php/improve/design/themes/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygl??d
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                           ' | raw }}{{ '                         keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/presta/my_admin/index.php/improve/design/themes/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/presta/my_admin/index.php/modules/addons/themes/catalog?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/presta/my_admin/index.php/improve/design/mail_theme/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                        ' | raw }}{{ '                                    
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/presta/my_admin/index.php/improve/design/cms-pages/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/presta/my_admin/index.php/improve/design/modules/positions/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminImages&amp;token=720e693222a09aa3bac41d704f42a4f7\" class=\"link\"> Zdj??cia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/presta/my_admin/index.php/modules/link-widget/list?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Lista link??w
                                </a>
                              </li>

                                ' | raw }}{{ '                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCarriers&amp;token=93f90a3705d2b8bf39eadd1671a5707d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysy??ka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminCarriers&amp;token=93f90a3705d2b8bf39eadd1671a5707d\" class=\"link\"> Przewo??nicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/presta/my_admin/index.php/improve/shipping/preferences/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjs' | raw }}{{ 'xPoDuA\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/presta/my_admin/index.php/improve/payment/payment_methods?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      P??atno????
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/presta/my_admin/index.php/improve/payment/payment_methods?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> P??atno??ci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                  ' | raw }}{{ '              <a href=\"/presta/my_admin/index.php/improve/payment/preferences?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/presta/my_admin/index.php/improve/international/localization/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Mi??dzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/presta/my_admin/index.php/improve/international/localization/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                           ' | raw }}{{ '                 
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/presta/my_admin/index.php/improve/international/zones/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Po??o??enie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/presta/my_admin/index.php/improve/international/taxes/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/presta/my_admin/index.php/improve/international/translations/settings?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> T??umaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminPsfacebookModule&amp;token=d6bc89817f291d18f4eccbc82adbfdd4\" class=\"link\">
                    ' | raw }}{{ '  <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminPsfacebookModule&amp;token=d6bc89817f291d18f4eccbc82adbfdd4\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=1f178faaa936a374ce187b5e99b979ff\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"titl' | raw }}{{ 'e\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/presta/my_admin/index.php/configure/shop/preferences/preferences?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/presta/my_admin/index.php/configure/shop/preferences/preferences?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Og??lny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/presta/my_admin/index.php/configure/shop/order-preferences/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Zam??wienia
                              ' | raw }}{{ '  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/presta/my_admin/index.php/configure/shop/product-preferences/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/presta/my_admin/index.php/configure/shop/customer-preferences/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/presta/my_admin/index.php/configure/shop/contacts/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/presta/my_admin/index.php/configure/' | raw }}{{ 'shop/seo-urls/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminSearchConf&amp;token=1f6860ffd98c141b343305cd0b5de209\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminGamification&amp;token=550c5d8c9e07aa455e8cba41c9a1e533\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/presta/my_admin/index.php/configure/advanced/system-information/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
              ' | raw }}{{ '                                      <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/system-information/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/performance/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Wydajno????
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/administration/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Administracja
                                </a>
                              </li>

                                  ' | raw }}{{ '                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/emails/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Adres e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/import/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/employees/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Zesp????
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/sql-requests/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Baza dany' | raw }}{{ 'ch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/logs/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/webservice-keys/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/presta/my_admin/index.php/configure/advanced/feature-flags/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\" class=\"link\"> Funkcje eksperymentalne
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-n' | raw }}{{ 'avbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Uruchomienie sklepu!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">82%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:81.818181818182%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Wzn??w</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Zako??cz wprowadzanie</a>
  </div>
</div>

</nav>


<div id=\"main-div\">
          
      <div class=\"content-div -notoolbar \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 81.818181818182%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 81.818181818182%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 81.818181818182%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 81.818181818182%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 81.818181818182%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Dalej</button>
  <a class=\"onboarding-button-shut-down\">Pomi?? ten poradnik</a>
</div>

<script type=\"text/javascript\">

  var o' | raw }}{{ 'nBoarding;

  \$(function(){
    onBoarding = new OnBoarding(9, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\\\"onboarding-welcome\\\\\">\\\\n  <i class=\\\\\"material-icons onboarding-button-shut-down\\\\\">close<\\\\/i>\\\\n  <p class=\\\\\"welcome\\\\\">Zapraszamy do sklepu!<\\\\/p>\\\\n  <div class=\\\\\"content\\\\\">\\\\n    <p>Cze\\\\u015b\\\\u0107! Nazywam si\\\\u0119 Preston i jestem tutaj Twoim przewodnikiem.<\\\\/p>\\\\n    <p>Poznasz kilka podstawowych krok\\\\u00f3w, zanim b\\\\u0119dzie mo\\\\u017cna uruchomi\\\\u0107 sklep:\\\\n    Utworzysz sw\\\\u00f3j pierwszy produkt, dostosujesz sw\\\\u00f3j sklep, skonfigurujesz wysy\\\\u0142k\\\\u0119 i p\\\\u0142atno\\\\u015bci...<\\\\/p>\\\\n  <\\\\/div>\\\\n  <div class=\\\\\"started\\\\\">\\\\n    <p>Zaczynajmy!<\\\\/p>\\\\n  <\\\\/div>\\\\n  <div class=\\\\\"buttons\\\\\">\\\\n    <button class=\\\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\\\">Po\\\\u017aniej<\\\\/button>\\\\n    <button class=\\\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\\\">Ropocznij<\\\\/button>\\\\n  <\\\\/div>\\\\n<\\\\/div>\\\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\\\/\\\\/192.168.56.10\\\\/presta\\\\/my_admin\\\\/index.php?controller=AdminDashboard&token=0035a75e8b66fb36b482fb635ca76090\"}]},{\"name\":\"product\",\"title\":\"Utw\\\\u00f3rz sw\\\\u00f3j pierwszy produkt\",\"subtitle\":{\"1\":\"Jak chcesz go opisa\\\\u0107? Pomy\\\\u015bl co Twoi klienci chcieliby o nim wiedzie\\\\u0107.\",\"2\":\"Dodaj jasne i atrakcyjne informacje. Nie martw si\\\\u0119, mo\\\\u017cesz je p\\\\u00f3\\\\u017aniej edytowa\\\\u0107 :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Nadaj produktowi chwytliw\\\\u0105 nazw\\\\u0119.\",\"options\":[\"savepoint\"],\"page\":[\"\\\\/presta\\\\/my_admin\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\\\\/new?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\",\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wype\\\\u0142nij niezb\\\\u0119dne informacje w tej karcie. Pozosta\\\\u0142e karty s\\\\u0105 dla bardziej zaawansowanych informacji.\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\"' | raw }}{{ ':\"tooltip\",\"text\":\"Dodaj jedno lub wi\\\\u0119cej zdj\\\\u0119\\\\u0107, dzi\\\\u0119ki temu produkt wygl\\\\u0105da kusz\\\\u0105co!\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Po ile chcesz go sprzedawa\\\\u0107?\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Hurra! W\\\\u0142a\\\\u015bnie zosta\\\\u0142 utworzony pierwszy produkt. Wygl\\\\u0105da dobrze, prawda?\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Daj sklepowi w\\\\u0142asn\\\\u0105 to\\\\u017csamo\\\\u015b\\\\u0107\",\"subtitle\":{\"1\":\"Jak ma wygl\\\\u0105da\\\\u0107 tw\\\\u00f3j sklep? Co zrobi\\\\u0107 aby by\\\\u0142 wyj\\\\u0105tkowym?\",\"2\":\"Dostosuj sw\\\\u00f3j szablon lub wybierz najlepszy projekt z katalogu szablon\\\\u00f3w.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dobrym sposobem na rozpocz\\\\u0119cie jest aby doda\\\\u0107 tutaj w\\\\u0142asne logo!\",\"options\":[\"savepoint\"],\"page\":\"\\\\/presta\\\\/my_admin\\\\/index.php\\\\/improve\\\\/design\\\\/themes\\\\/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Je\\\\u015bli chcesz co\\\\u015b naprawd\\\\u0119 specjalnego, obejrzyj ten katalog szablon\\\\u00f3w!\",\"page\":\"\\\\/presta\\\\/my_admin\\\\/index.php\\\\/improve\\\\/design\\\\/themes-catalog\\\\/?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Przygotuj sw\\\\u00f3j sklep do dokonywania p\\\\u0142atno\\\\u015bci\",\"subtitle\":{\"1\":\"W jaki spos\\\\u00f3b klienci maj\\\\u0105 dokona\\\\u0107 p\\\\u0142atno\\\\u015bci?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Te metody p\\\\u0142atno\\\\u015bci s\\\\u0105 ju\\\\u017c dost\\\\u01' | raw }}{{ '19pne dla Twoich klient\\\\u00f3w.\",\"options\":[\"savepoint\"],\"page\":\"\\\\/presta\\\\/my_admin\\\\/index.php\\\\/improve\\\\/payment\\\\/payment_methods?_token=H3ZlVDZdxbuDF4aZhs7AF_KyByt0lFDJsCVjsxPoDuA\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Wybierz swoje sposoby wysy\\\\u0142ki\",\"subtitle\":{\"1\":\"Jak chcesz dostarcza\\\\u0107 swoje produkty?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Tutaj s\\\\u0105 metody wysy\\\\u0142ki dost\\\\u0119pne dzi\\\\u015b w sklepie.\",\"options\":[\"savepoint\"],\"page\":\"https:\\\\/\\\\/192.168.56.10\\\\/presta\\\\/my_admin\\\\/index.php?controller=AdminCarriers&token=93f90a3705d2b8bf39eadd1671a5707d\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\\\"onboarding-welcome\\\\\" class=\\\\\"modal-body\\\\\">\\\\n    <div class=\\\\\"col-12\\\\\">\\\\n        <button class=\\\\\"onboarding-button-next pull-right close\\\\\" type=\\\\\"button\\\\\">&times;<\\\\/button>\\\\n        <h2 class=\\\\\"text-center text-md-center\\\\\">Dodatkowo dla Ciebie!<\\\\/h2>\\\\n    <\\\\/div>\\\\n    <div class=\\\\\"col-12\\\\\">\\\\n        <p class=\\\\\"text-center text-md-center\\\\\">\\\\n          Widzieli\\\\u015bcie tylko podstawy, ale jest o wiele wi\\\\u0119cej do poznania.<br \\\\/>\\\\n          Oto zasoby kt\\\\u00f3re mog\\\\u0105 pom\\\\u00f3c wi\\\\u0119cej:\\\\n        <\\\\/p>\\\\n        <div class=\\\\\"container-fluid\\\\\">\\\\n          <div class=\\\\\"row\\\\\">\\\\n            <div class=\\\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"http:\\\\/\\\\/doc.prestashop.com\\\\/display\\\\/PS17\\\\/Getting+Started\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"starter-guide\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Poradnik dla pocz\\\\u0105tkuj\\\\u0105cych<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/forums\\\\/\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div cl' | raw }}{{ 'ass=\\\\\"forum\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Forum angielskie<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n          <\\\\/div>\\\\n          <div class=\\\\\"row\\\\\">\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/en\\\\/training-prestashop\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"training\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Trening<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.youtube.com\\\\/user\\\\/prestashop\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"video-tutorial\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Poradnik wideo<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n          <\\\\/div>\\\\n        <\\\\/div>\\\\n    <\\\\/div>\\\\n    <div class=\\\\\"modal-footer\\\\\">\\\\n        <div class=\\\\\"col-12\\\\\">\\\\n            <div class=\\\\\"text-center text-md-center\\\\\">\\\\n                <button class=\\\\\"btn btn-primary onboarding-button-next\\\\\">Jestem gotowy<\\\\/button>\\\\n            <\\\\/div>\\\\n        <\\\\/div>\\\\n    <\\\\/div>\\\\n<\\\\/div>\\\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\\\/\\\\/192.168.56.10\\\\/presta\\\\/my_admin\\\\/index.php?controller=AdminDashboard&token=0035a75e8b66fb36b482fb635ca76090\"}]}]}, 1, \"https://192.168.56.10/presta/my_admin/index.php?controller=AdminWelcome&token=d8410af7fa19ad2049cb8bdc931c473e\", baseAdminDir);

          onBoarding.addTemplate(\\'lost\\', \\'<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hej! Nie mo??esz si?? odnale?????</p>    <p>Aby kontynuowa??, kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Dalej</button>    </div>    <p>Je??li chcesz zako??czy?? ten poradnik - kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Zamknij powita' | raw }}{{ 'lny samouczek</button>    </div>  </div></div>\\');
          onBoarding.addTemplate(\\'popup\\', \\'<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>\\');
          onBoarding.addTemplate(\\'tooltip\\', \\'<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Krok <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Nast??pny</button></div>\\');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is(\\'.with-spinner\\')) {
        if (!\$(this).is(\\'.animated\\')) {
          \$(this).addClass(\\'animated\\');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dost??pna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzysta?? z komputera stacjonarnego, aby uzyska?? dost??p do tej strony, dop??ki nie zostanie zoptymalizowana pod k??tem urz??dze?? mobilnych.
  </p>
  <p class=\"mt-2\">
    Dzi??kujemy.
  </p>
  <a href=\"https://192.168.56.10/presta/my_admin/index.php?controller=AdminDashboard&amp;token=0035a75e8b66fb36b482fb635ca76090\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=piotrszym01%40wp.pl&amp;firstname=Piotr&amp;lastname=Szyma%C5%84ski&amp;website=http%3A%2F%2F192.168.56.10%2Fpresta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/presta/my_admin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Po????cz sw??j sklep z rynkiem PrestaShop, ??eby automatycznie importowa?? wszystkie zakup' | raw }}{{ 'ione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class=\\'text-justify\\'>Odkryj si???? PrestaShop Addons! Przegl??daj Oficjalny Rynek PrestaShop i znajd?? ponad 3500 innowacyjnych modu????w i szablon??w, kt??re optymalizuj?? stopnie konwersji, zwi??kszaj?? ruch, buduj?? lojalno???? klient??w i zwi??kszaj?? Twoj?? produktywno????</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Po????cz si?? z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomnia??em has??a</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=piotrszym01%40wp.pl&amp;firstname=Piotr&amp;lastname=Szyma%C5%84ski&amp;website=http%3A%2F%2F192.168.56.10%2Fpresta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtw??rz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<bu' | raw }}{{ 'tton id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj si??
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__45582aee06c98a4a86780fe77899e97126f270b2afe60c91a99bb62853abe421", "");
    }
}
