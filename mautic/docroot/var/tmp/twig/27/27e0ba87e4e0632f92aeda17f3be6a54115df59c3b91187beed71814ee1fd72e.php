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

/* @bundles/CoreBundle/Tests/Fixtures/Transifex/translation-download.json */
class __TwigTemplate_eeba5055bf21fc92e5e23cd139b0f79b55adaa89deaf1cce2a6544010f740761 extends Template
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
      \"errors\": [],
      \"status\": \"pending\"
    },
    \"id\": \"4abfc726-6a27-4c33-9d99-e5254c8df748\",
    \"links\": {
      \"self\": \"/resource_translations_async_uploads/4abfc726-6a27-4c33-9d99-e5254c8df748\"
    },
    \"relationships\": {
      \"language\": {
        \"data\": {
          \"id\": \"l:cs\",
          \"type\": \"languages\"
        },
        \"links\": {
          \"related\": \"/languages/l:cs\"
        }
      },
      \"resource\": {
        \"data\": {
          \"id\": \"o:mautic:p:mautic:r:webhookbundle-messages\",
          \"type\": \"resources\"
        },
        \"links\": {
          \"related\": \"/resources/o:mautic:p:mautic:r:webhookbundle-messages\"
        }
      }
    },
    \"type\": \"resource_translations_async_downloads\"
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Fixtures/Transifex/translation-download.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Fixtures/Transifex/translation-download.json", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Fixtures/Transifex/translation-download.json");
    }
}
