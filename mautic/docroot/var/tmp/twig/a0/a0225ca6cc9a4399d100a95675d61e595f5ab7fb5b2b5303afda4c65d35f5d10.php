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

/* @bundles/EmailBundle/Translations/en_US/validators.ini */
class __TwigTemplate_45148150d76a264989b4aa201b99409b179dda1eb1d5ed560c3546348ff140a7 extends Template
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
        echo "mautic.email.chooseemail.notblank=\"Select the email to be sent.\"
mautic.email.list.noaccess=\"No list was selected or you do not have access to one that was.\"
mautic.email.subject.notblank=\"A subject is required.\"
mautic.email.variant.weight.notblank=\"Enter the percentage of recipients to receive this email.\"
mautic.email.api_key_required=\"API key is required.\"
mautic.email.multiple_emails.not_valid=\"Provided emails are not valid: %email%\"
mautic.email.email_or_token.not_valid=\"Provided value '%value%' is not an email address nor a token build on a email field type. %details%\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/EmailBundle/Translations/en_US/validators.ini", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Translations/en_US/validators.ini");
    }
}
