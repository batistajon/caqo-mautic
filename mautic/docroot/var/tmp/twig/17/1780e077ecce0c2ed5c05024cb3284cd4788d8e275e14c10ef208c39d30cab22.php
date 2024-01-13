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

/* @bundles/InstallBundle/Translations/en_US/validators.ini */
class __TwigTemplate_d18c6cfa4d063a1b902d348e7f969b04ef9bb4a39a217c9a340e8c4132e14aa1 extends Template
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
        echo "mautic.install.database.driver.invalid=\"Invalid database driver given. Must be one of %drivers%\"
mautic.install.database.path.invalid=\"The path is invalid or not writable.\"
mautic.install.database.path.warning=\"WARNING!! The path is within the public web root. This is not recommended due to the security risks. Consider changing the path to be outside of %root%.\"
mautic.install.database.port.invalid=\"The port must be an integer greater than 0.\"
mautic.install.password.minlength=\"Password must be at least 6 characters.\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/InstallBundle/Translations/en_US/validators.ini", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Translations/en_US/validators.ini");
    }
}
