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

/* @bundles/FormBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_3b3ba8d692e7ce54f1ffbfcb6e147490011703e6a413e6cedb09876fb95730db extends Template
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
        echo "mautic.form.error.notfound=\"No form with an id of %id% was found!\"
mautic.form.field.error.notfound=\"No form field with an id of %id% was found!\"
mautic.form.notice.batch_deleted=\"%count% forms have been deleted!\"
mautic.form.result.notice.batch_deleted=\"%count% form results have been deleted!\"
mautic.form.notice.batch_html_generated=\"{0}No forms were rebuilt.|{1}One form has been rebuilt.|]1,Inf[%count% forms have been rebuilt.\"
mautic.form.submit.error.expired=\"This form stopped accepting submissions on %date%.\"
mautic.form.submit.error.pending=\"This form start accepting submissions on %date%.\"
mautic.form.submit.error.unavailable=\"This form is no longer available.\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/FormBundle/Translations/en_US/flashes.ini", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Translations/en_US/flashes.ini");
    }
}
