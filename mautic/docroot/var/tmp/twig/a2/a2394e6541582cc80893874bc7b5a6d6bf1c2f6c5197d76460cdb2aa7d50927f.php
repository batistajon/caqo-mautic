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

/* @bundles/EmailBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_cf7c20014c75ebf7a011c4793a10239faccaf7c3ecf859f69b6b5d8df543e04a extends Template
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
        echo "mautic.email.error.list_type.sent=\"Once a list email has been sent, it cannot be edited. Consider cloning the email.\"
mautic.email.error.notfound=\"No email with an id of %id% was found!\"
mautic.email.error.send.unpublished=\"The email %name% is unpublished, the publish Up/Down dates are off or the email category is unpublished. You cannot send this email until published.\"
mautic.email.notice.activated=\"<a href='%url%' data-toggle='ajax' data-menu-link='mautic_email_index'><strong>%name%</strong></a> is now active as the main email!\"
mautic.email.notice.batch_deleted=\"%count% emails have been deleted!\"
mautic.email.notice.test_sent.success=\"A test email has been sent to your email.\"
mautic.email.notice.test_sent_multiple.success = \"Test emails have been sent.\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/EmailBundle/Translations/en_US/flashes.ini", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Translations/en_US/flashes.ini");
    }
}
