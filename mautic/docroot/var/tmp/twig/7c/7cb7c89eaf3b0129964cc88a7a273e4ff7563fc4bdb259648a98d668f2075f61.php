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

/* @bundles/ApiBundle/EventListener/RateLimitGenerateKeySubscriber.php */
class __TwigTemplate_1d297833101830d7508b3237e59d90043173d73a1f64b6f39409f4d59d5f6a39 extends Template
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

namespace Mautic\\ApiBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Noxlogic\\RateLimitBundle\\Events\\GenerateKeyEvent;
use Noxlogic\\RateLimitBundle\\Events\\RateLimitEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class RateLimitGenerateKeySubscriber implements EventSubscriberInterface
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
          RateLimitEvents::GENERATE_KEY => ['onGenerateKey', 0],
        ];
    }

    public function onGenerateKey(GenerateKeyEvent \$event)
    {
        \$suffix = rawurlencode(\$this->coreParametersHelper->get('site_url'));
        \$event->addToKey(\$suffix);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/EventListener/RateLimitGenerateKeySubscriber.php";
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
        return new Source("", "@bundles/ApiBundle/EventListener/RateLimitGenerateKeySubscriber.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/EventListener/RateLimitGenerateKeySubscriber.php");
    }
}
