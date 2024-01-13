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

/* @bundles/LeadBundle/Field/Dispatcher/FieldColumnDispatcher.php */
class __TwigTemplate_06ee8f1c11b81bf01231a47db5f3c1db2f9250ea023a847c7ee302bdff374698 extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Field\\Dispatcher;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\Event\\AddColumnEvent;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Settings\\BackgroundSettings;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FieldColumnDispatcher
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var BackgroundSettings
     */
    private \$backgroundSettings;

    public function __construct(EventDispatcherInterface \$dispatcher, BackgroundSettings \$backgroundSettings)
    {
        \$this->dispatcher         = \$dispatcher;
        \$this->backgroundSettings = \$backgroundSettings;
    }

    /**
     * @throws AbortColumnCreateException
     */
    public function dispatchPreAddColumnEvent(LeadField \$leadField): void
    {
        \$shouldProcessInBackground = \$this->backgroundSettings->shouldProcessColumnChangeInBackground();
        \$event                     = new AddColumnEvent(\$leadField, \$shouldProcessInBackground);

        \$this->dispatcher->dispatch(LeadEvents::LEAD_FIELD_PRE_ADD_COLUMN, \$event);

        if (\$shouldProcessInBackground) {
            throw new AbortColumnCreateException('Column change will be processed in background job');
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Dispatcher/FieldColumnDispatcher.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Dispatcher/FieldColumnDispatcher.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/Dispatcher/FieldColumnDispatcher.php");
    }
}
