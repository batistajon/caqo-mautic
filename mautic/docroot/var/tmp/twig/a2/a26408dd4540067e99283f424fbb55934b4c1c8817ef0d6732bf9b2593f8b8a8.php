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

/* @bundles/CoreBundle/Tests/Fixtures/Transifex/resources.json */
class __TwigTemplate_1a644227d8120aab2cfb9350c1a37cc914334c029a220f72be3d5dd031efa845 extends Template
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
    \"data\": [
        {
            \"attributes\": {
                \"accept_translations\": true,
                \"categories\": [],
                \"datetime_created\": \"XXXX-XX-XXTXX:XX:XXZ\",
                \"datetime_modified\": \"XXXX-XX-XXTXX:XX:XXZ\",
                \"i18n_options\": {
                    \"allow_duplicate_strings\": true
                },
                \"i18n_version\": 1,
                \"mp4_url\": \"https://some.host.net/some_mp4_url\",
                \"name\": \"Resource Name\",
                \"ogg_url\": \"https://some.host.net/some_ogg_url\",
                \"priority\": \"normal\",
                \"slug\": \"webhookbundle-messages\",
                \"string_count\": 0,
                \"webm_url\": \"https://some.host.net/some_webm_url\",
                \"word_count\": 0,
                \"youtube_url\": \"https://www.youtube.com/\"
            },
            \"id\": \"o:mautic:p:mautic:r:webhookbundle-messages\",
            \"links\": {
                \"self\": \"/resources/o:mautic:p:mautic:r:webhookbundle-messages\"
            },
            \"relationships\": {
                \"i18n_format\": {
                    \"data\": {
                        \"id\": \"YML_KEY\",
                        \"type\": \"i18n_formats\"
                    }
                },
                \"project\": {
                    \"data\": {
                        \"id\": \"o:mautic:p:mautic\",
                        \"type\": \"projects\"
                    },
                    \"links\": {
                        \"related\": \"/projects/o:mautic:p:mautic\"
                    }
                }
            },
            \"type\": \"resources\"
        }
    ],
    \"links\": {
        \"next\": \"/resources?filter[project]=o:mautic:p:mautic&page[cursor]=XXX\",
        \"previous\": \"/resources?filter[project]=o:mautic:p:mautic&page[cursor]=XXX\",
        \"self\": \"/resources?filter[project]=o:mautic:p:mautic\"
    }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Fixtures/Transifex/resources.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Fixtures/Transifex/resources.json", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Fixtures/Transifex/resources.json");
    }
}
