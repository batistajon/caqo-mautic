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

/* @bundles/UserBundle/Translations/en_US/validators.ini */
class __TwigTemplate_b8d14b38e8614d5fddbff6b291d8ccccba94cba8aa480e1af10910315b43717c extends Template
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
        echo "mautic.user.user.email.unique=\"Email is already in use. Please choose another.\"
mautic.user.user.email.valid=\"The email entered is invalid.\"
mautic.user.user.firstname.notblank=\"First name is required.\"
mautic.user.user.lastname.notblank=\"Last name is required.\"
mautic.user.user.password.minlength=\"Password must be at least 6 characters.\"
mautic.user.user.password.mismatch=\"Passwords do not match.\"
mautic.user.user.password.notblank=\"Password cannot be blank.\"
mautic.user.user.passwordreset.notblank=\"A username or email is required to reset your password.\"
mautic.user.user.passwordreset.nouserfound=\"You will receive an email with password reset instructions if this user exist.\"
mautic.user.user.role.notblank=\"A role must be chosen for this user.\"
mautic.user.user.username.notblank=\"Username is required.\"
mautic.user.user.username.unique=\"Username is already in use. Please choose another.\"
mautic.user.saml.certificate.invalid=\"Certificate is invalid. It should begin with <pre>-----BEGIN CERTIFICATE-----</pre>.\"
mautic.user.saml.private_key.invalid=\"Private key is invalid. It should begin with <pre>-----BEGIN RSA PRIVATE KEY-----</pre> or <pre>-----BEGIN ENCRYPTED PRIVATE KEY-----</pre>.\"
mautic.user.saml.private_key.password_needed=\"The private key provided is encrypted and thus requires a password to decrypt.\"
mautic.user.saml.private_key.password_invalid=\"The password was not able to decrypt the private key.\"
mautic.user.saml.metadata.invalid=\"The metadata file seems to be invalid.\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/UserBundle/Translations/en_US/validators.ini", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Translations/en_US/validators.ini");
    }
}
