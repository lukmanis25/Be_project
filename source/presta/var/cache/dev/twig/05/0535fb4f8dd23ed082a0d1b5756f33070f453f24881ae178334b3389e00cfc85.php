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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig */
class __TwigTemplate_3e54d17078679f9429fc9b2c69598c0e6f41e6d953eac27b4225b61b9acb2004 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">cloud_download</i>
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download", [], "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <p>
      <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["downloadFile"] ?? $this->getContext($context, "downloadFile")), "url", []), "html", null, true);
        echo "\" class=\"btn btn-outline-primary\">
        <i class=\"material-icons\">cloud_download</i>
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download the backup file (%s MB)", ["%s" => $this->getAttribute(($context["downloadFile"] ?? $this->getContext($context, "downloadFile")), "size", [])], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </a>
    </p>
    <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tip: You can also download this file from your FTP server. Backup files are located in the \"/adminXXXX/backups\" directory.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  57 => 37,  52 => 35,  45 => 31,  39 => 27,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% trans_default_domain 'Admin.Advparameters.Feature' %}

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">cloud_download</i>
    {{ 'Download'|trans({}, 'Admin.Actions') }}
  </h3>
  <div class=\"card-body\">
    <p>
      <a href=\"{{ downloadFile.url }}\" class=\"btn btn-outline-primary\">
        <i class=\"material-icons\">cloud_download</i>
        {{ 'Download the backup file (%s MB)'|trans({'%s': downloadFile.size}) }}
      </a>
    </p>
    <p>{{ 'Tip: You can also download this file from your FTP server. Backup files are located in the \"/adminXXXX/backups\" directory.'|trans }}</p>
  </div>
</div>
", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig", "/var/www/html/presta/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig");
    }
}
