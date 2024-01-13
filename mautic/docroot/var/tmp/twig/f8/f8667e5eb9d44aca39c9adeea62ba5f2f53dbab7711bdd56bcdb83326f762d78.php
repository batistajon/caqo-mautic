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

/* @bundles/PluginBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_5e590f7f6394679a930e822813b89231ce00127a40d7efabd9ae376a084ae8f4 extends Template
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
        echo "mautic.plugin.notice.reloaded=\"%added% new plugins were installed and %updated% updated.\"
mautic.plugin.notice.saved=\"Settings for the %name% integration have been saved\"
mautic.integration.auth.invalid.state=\"Invalid session. Please try again.\"
mautic.integration.error.genericerror=\"There was an unknown error encountered when trying to obtain the access token.\"
mautic.integration.error.oauthfail=\"Authorization failed with the error message, '%error%'\"
mautic.integration.notfound=\"%name% was not found!\"
mautic.integration.notice.oauthsuccess=\"Authorization was successful.\"
mautic.integration.notice.saved=\"Settings saved\"
mautic.integration.sso.error.no_email=\"Authenticated user does not have an email.\"
mautic.integration.sso.error.no_name=\"Authenticated user does not have a first and last name.\"
mautic.integration.sso.error.no_role=\"Authenticated user does not have a role.\"
mautic.integration.sso.error.no_username=\"Authenticated user does not have a username.\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/PluginBundle/Translations/en_US/flashes.ini", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Translations/en_US/flashes.ini");
    }
}
