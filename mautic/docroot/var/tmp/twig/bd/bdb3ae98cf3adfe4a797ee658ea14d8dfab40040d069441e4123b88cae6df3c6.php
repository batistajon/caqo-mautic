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

/* @bundles/AssetBundle/Translations/en_US/validators.ini */
class __TwigTemplate_e2e2790cfb8eb64f28809c22caa6ef1966eba9793543fd4146734e1c405de8d7 extends Template
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
        echo "mautic.asset.asset.error.missing.file=\"A file must be uploaded before Asset is saved when local storage is selected.\"
mautic.asset.asset.error.missing.title=\"Assset Title is required.\"
mautic.asset.asset.error.missing.remote.path=\"A remote URL must be specified when remote storage is selected.\"
mautic.asset.asset.error.file.size=\"Upload failed as the file is %fileSize% MB which exceeds the maximum allowed file size of %maxSize% MB. This setting can be changed in the Configuration.\"
mautic.asset.asset.error.file.extension=\"Upload failed as the file extension, %fileExtension%, is not in the list of allowed extensions (%extensions%). This setting can be changed in the Configuration.\"
mautic.asset.asset.error.file.extension.js=\"Upload failed as the file extension is not in the list of allowed extensions (%extensions%). This setting can be changed in the Configuration.\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/AssetBundle/Translations/en_US/validators.ini", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Translations/en_US/validators.ini");
    }
}
