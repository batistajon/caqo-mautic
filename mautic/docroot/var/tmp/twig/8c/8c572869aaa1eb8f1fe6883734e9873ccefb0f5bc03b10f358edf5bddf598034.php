<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/iframe/images/placeholder.png */
class __TwigTemplate_860520e606858af585a7a873c3cbe72f3ab80d3b4ff29460794fc66399ad252c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "�PNG

\000\000\000
IHDR\000\000\000;\000\000\000\000\000\0000��\000\000\0000PLTE�\000\000��\"\"�33�DD�UU�ff�ii�ww����������������������=�q\000\000\000�IDAT(�c(`�
���#Z�A��g�����fX���A�6�����?���3�O��,��,�W��!�������<@���+������2�]wC�/���J2X
���E��k����/���0�{���#>B�H��%\000��o�,
 \000\000\000\000IEND�B`�";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/iframe/images/placeholder.png";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/iframe/images/placeholder.png", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/iframe/images/placeholder.png");
    }
}
