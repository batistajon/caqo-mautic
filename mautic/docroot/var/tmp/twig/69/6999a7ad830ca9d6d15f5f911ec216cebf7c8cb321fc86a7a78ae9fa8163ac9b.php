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

/* @bundles/ChannelBundle/Translations/en_US/javascript.ini */
class __TwigTemplate_5ce11d7cfe45c53efeba3ce9d133776dee9a59dd6883ac532c6ca49e77b80623 extends Template
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
        echo "mautic.message.queue.status.cancelled=\"Cancelled\"
mautic.message.queue.status.rescheduled=\"Rescheduled\"
mautic.message.queue.status.pending=\"Pending\"
mautic.message.queue.status.Sent=\"Sent\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Translations/en_US/javascript.ini";
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
        return new Source("", "@bundles/ChannelBundle/Translations/en_US/javascript.ini", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Translations/en_US/javascript.ini");
    }
}
