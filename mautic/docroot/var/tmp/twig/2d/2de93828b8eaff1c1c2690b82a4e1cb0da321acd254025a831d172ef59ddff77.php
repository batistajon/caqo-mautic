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

/* @bundles/UserBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_a4122560762a265b0c1269be6dceec825f34d38ce7316a1bbd63511a560ca7d5 extends Template
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
        echo "mautic.user.account.notice.updated=\"Your account has been updated.\"
mautic.user.auth.error.disabledaccount=\"Your account has been disabled. Please contact the site administrator.\"
mautic.user.auth.error.invalidlogin=\"Invalid login. Please verify credentials.\"
mautic.user.role.error.deletenotallowed=\"%name% cannot be deleted because it still has users assigned to it.\"
mautic.user.role.error.notfound=\"Role not found with an ID of <strong>%id%</strong>.\"
mautic.user.role.notice.batch_deleted=\"%count% roles have been deleted!\"
mautic.user.user.error.cannotdeleteself=\"You cannot delete yourself.\"
mautic.user.user.error.notfound=\"User not found with an ID of <strong>%id%</strong>.\"
mautic.user.user.notice.batch_deleted=\"%count% users have been deleted!\"
mautic.user.user.notice.messagesent=\"Your message to %name% has been sent.\"
mautic.user.user.notice.passwordreset=\"A new password has been generated and will be emailed to you. If you do not receive it within a few minutes, check your spam box and/or contact the system administrator.\"
mautic.user.user.notice.passwordreset.success=\"You have successfully reset your password. You may now login.\"
mautic.user.user.notice.passwordreset.error=\"We encountered an unexpected error while sending the password reset instructions to your email. Please try again later.\"
mautic.user.user.notice.passwordreset.missingtoken=\"Your reset request is missing the security token. Please click the link in your email.\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/UserBundle/Translations/en_US/flashes.ini", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Translations/en_US/flashes.ini");
    }
}
