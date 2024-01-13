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

/* @bundles/CampaignBundle/Event/Exception/KeyAlreadyRegisteredException.php */
class __TwigTemplate_2e4dd8fb93e338f4a7dfd0bd704b12cd0de3b3e5de151073d26008ca1814d350 extends Template
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
        echo "<?php

namespace Mautic\\CampaignBundle\\Event\\Exception;

use Symfony\\Component\\Process\\Exception\\InvalidArgumentException;

/**
 * Class KeyAlreadyRegisteredException.
 *
 * Extends Symfony\\Component\\Process\\Exception\\InvalidArgumentException to keep BC
 */
class KeyAlreadyRegisteredException extends InvalidArgumentException
{
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/Exception/KeyAlreadyRegisteredException.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/Exception/KeyAlreadyRegisteredException.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/Exception/KeyAlreadyRegisteredException.php");
    }
}
