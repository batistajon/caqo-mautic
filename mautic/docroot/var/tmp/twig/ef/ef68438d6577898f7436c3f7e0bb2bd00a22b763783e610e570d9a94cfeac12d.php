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

/* @bundles/CoreBundle/Tests/Fixtures/Transifex/resources-upload.json */
class __TwigTemplate_abefa9b9c9166659e817d757c79af4d1a3a4257ad7502b0b4601623ed47fb6c0 extends Template
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
        echo "{
    \"data\": {
        \"attributes\": {
            \"date_created\": \"XXXX-XX-XXTXX:XX:XXZ\",
            \"date_modified\": \"XXXX-XX-XXTXX:XX:XXZ\",
            \"details\": {
                \"strings_created\": 0,
                \"strings_deleted\": 0,
                \"strings_skipped\": 0,
                \"strings_updated\": 0
            },
            \"errors\": [
                {
                    \"code\": \"parse_error\",
                    \"detail\": \"Could not decode JSON object\"
                }
            ],
            \"status\": \"done\"
        },
        \"id\": \"4abfc726-6a27-4c33-9d99-e5254c8df748\",
        \"links\": {
            \"self\": \"/resource_strings_async_uploads/4abfc726-6a27-4c33-9d99-e5254c8df748\"
        },
        \"relationships\": {
            \"resource\": {
                \"data\": {
                    \"id\": \"o:mautic:p:mautic:r:resource_slug\",
                    \"type\": \"resources\"
                },
                \"links\": {
                    \"related\": \"/resources/o:mautic:p:mautic:r:resource_slug\"
                }
            }
        },
        \"type\": \"resource_strings_async_uploads\"
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Fixtures/Transifex/resources-upload.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Fixtures/Transifex/resources-upload.json", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Fixtures/Transifex/resources-upload.json");
    }
}
