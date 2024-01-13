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

/* @bundles/LeadBundle/Field/Dispatcher/FieldColumnBackgroundJobDispatcher.php */
class __TwigTemplate_4256cce74019e7e1d504e48bc461e6daa7f25f90dbaffcf9ab834d50c8aff078 extends Template
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
use Mautic\\LeadBundle\\Exception\\NoListenerException;
use Mautic\\LeadBundle\\Field\\Event\\AddColumnBackgroundEvent;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FieldColumnBackgroundJobDispatcher
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        \$this->dispatcher = \$dispatcher;
    }

    /**
     * @throws AbortColumnCreateException
     * @throws NoListenerException
     */
    public function dispatchPreAddColumnEvent(LeadField \$leadField): void
    {
        \$action = LeadEvents::LEAD_FIELD_PRE_ADD_COLUMN_BACKGROUND_JOB;

        if (!\$this->dispatcher->hasListeners(\$action)) {
            throw new NoListenerException('There is no Listener for this event');
        }

        \$event = new AddColumnBackgroundEvent(\$leadField);

        \$this->dispatcher->dispatch(\$action, \$event);

        if (\$event->isPropagationStopped()) {
            throw new AbortColumnCreateException('Column cannot be created now');
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
        return "@bundles/LeadBundle/Field/Dispatcher/FieldColumnBackgroundJobDispatcher.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Dispatcher/FieldColumnBackgroundJobDispatcher.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/Dispatcher/FieldColumnBackgroundJobDispatcher.php");
    }
}
