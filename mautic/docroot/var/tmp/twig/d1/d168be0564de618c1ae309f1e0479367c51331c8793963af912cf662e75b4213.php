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

/* @bundles/InstallBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_a2247dc559ef18d16cec9f0fa18f3159177ed93aa8020320b581ff6aa26efe9e extends Template
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
        echo "mautic.installer.error.adding.fields=\"An error occurred while attempting to populate the contact fields table: %exception%\"
mautic.installer.error.adding.fixtures=\"An error occurred while attempting to add default data: %exception%\"
mautic.installer.error.connecting.database=\"An error occured while attempting to connect to the database: %exception%\"
mautic.installer.error.creating.database=\"The database, %name%, could not be found or created due to permissions restrictions. Please manually create the database then try again.\"
mautic.installer.error.getting.role=\"An error occurred while attempting to get the admin role: %exception%\"
mautic.installer.error.creating.user=\"An error occurred while attempting to create the admin user: %exception%\"
mautic.installer.error.database.exists=\"The database you've specified already exists and contains Mautic data.\"
mautic.installer.error.database.version=\"Your database version (%currentversion%) is too old for Mautic to work correctly. Supported versions are MySQL %mysqlminversion% (or higher) and MariaDB %mariadbminversion% (or higher).\"
mautic.installer.error.installing.data=\"An error occurred while attempting to install the data: %exception%\"
mautic.installer.error.no.metadata=\"No metadata was found to create the database.\"
mautic.installer.error.writing.configuration=\"An error occurred while attempting to write the configuration to the filesystem.\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/InstallBundle/Translations/en_US/flashes.ini", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Translations/en_US/flashes.ini");
    }
}
