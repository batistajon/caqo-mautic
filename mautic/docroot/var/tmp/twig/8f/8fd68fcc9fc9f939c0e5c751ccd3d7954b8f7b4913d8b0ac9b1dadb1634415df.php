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

/* @bundles/CoreBundle/Tests/Unit/Helper/resource/language/es.zip */
class __TwigTemplate_2787c819520b45faf8fc25b970a12a77800058ce918be67041f135cea4249b9b extends Template
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
        echo "PK\000\000\000\0007E�N\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000es/PK\000\000\000\0007E�N\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000es/CampaignBundle/PK
\000\000\000\000\"E�N�U��\000\000\000\000\000\000\000\000\000es/CampaignBundle/flashes.initest.string=\"test string\"PK
\000\000\000\000E�N��9\000\000\000\000\000\000\000\000\000es/CampaignBundle/messages.initest.string=\"Test String\"PK\000\000\000\000*E�N\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000es/CoreBundle/PK
\000\000\000\000\"E�N�U��\000\000\000\000\000\000\000\000\000es/CoreBundle/flashes.initest.string=\"test string\"PK
\000\000\000\000E�N��9\000\000\000\000\000\000\000\000\000es/CoreBundle/messages.initest.string=\"Test String\"PK
\000\000\000\000*E�N\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000es/CoreBundle/random.txtPK\000\000\000\000�D�N\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000es/RandomFolder/PK
\000\000\000\000�D�N�>\000\000\000>\000\000\000\000\000\000es/config.json{\"name\":\"Spanish\",\"locale\":\"es\",\"author\":\"Mautic Translators\"}PK
\000\000\000\000�D�N�wJ�\000\000\000\000\000\000
\000\000\000es/config.php<?php 
// this is a testPK
\000\000\000\000E�N��
�\000\000\000\000\000\000
\000\000\000es/random.txt// Random filePK?\000\000\000\0007E�N\000\000\000\000\000\000\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000��A\000\000\000\000es/
\000 \000\000\000\000\000\000\000\000��8n2�\000���x2�\000��8n2�PK?\000\000\000\0007E�N\000\000\000\000\000\000\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000��A!\000\000\000es/CampaignBundle/
\000 \000\000\000\000\000\000\000\000��8n2����An2�\000��8n2�PK?
\000\000\000\000\"E�N�U��\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000 ���Q\000\000\000es/CampaignBundle/flashes.ini
\000 \000\000\000\000\000\000\000��In2����An2�\000��8n2�PK?
\000\000\000\000E�N��9\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000 ����\000\000\000es/CampaignBundle/messages.ini
\000 \000\000\000\000\000\000\000�s\"n2����An2�\000��8n2�PK?\000\000\000\000*E�N\000\000\000\000\000\000\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000��A�\000\000\000es/CoreBundle/
\000 \000\000\000\000\000\000\000\000�k)n2����An2�\000�k)n2�PK?
\000\000\000\000\"E�N�U��\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000 ���&\000\000es/CoreBundle/flashes.ini
\000 \000\000\000\000\000\000\000��In2����An2���In2�PK?
\000\000\000\000E�N��9\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000 ���v\000\000es/CoreBundle/messages.ini
\000 \000\000\000\000\000\000\000�s\"n2����An2��s\"n2�PK?
\000\000\000\000*E�N\000\000\000\000\000\000\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000 ����\000\000es/CoreBundle/random.txt
\000 \000\000\000\000\000\000\000\000�k)n2�\000�k)n2��*n2�PK?\000\000\000\000�D�N\000\000\000\000\000\000\000\000\000\000\000\000\000\$\000\000\000\000\000\000\000��A�\000\000es/RandomFolder/
\000 \000\000\000\000\000\000\000\0008q�m2����An2�\000e��m2�PK?
\000\000\000\000�D�N�>\000\000\000>\000\000\000\000\$\000\000\000\000\000\000\000 ���+\000\000es/config.json
\000 \000\000\000\000\000\000\000�+(�m2�\000���x2��+(�m2�PK?
\000\000\000\000�D�N�wJ�\000\000\000\000\000\000
\000\$\000\000\000\000\000\000\000 ����\000\000es/config.php
\000 \000\000\000\000\000\000\000�-_�m2����An2��-_�m2�PK?
\000\000\000\000E�N��
�\000\000\000\000\000\000
\000\$\000\000\000\000\000\000\000 ����\000\000es/random.txt
\000 \000\000\000\000\000\000\000\000u\000n2����An2�\000u\000n2�PK\000\000\000\000\000\000�\000\000\000\000\000\000";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/resource/language/es.zip";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/resource/language/es.zip", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/resource/language/es.zip");
    }
}
