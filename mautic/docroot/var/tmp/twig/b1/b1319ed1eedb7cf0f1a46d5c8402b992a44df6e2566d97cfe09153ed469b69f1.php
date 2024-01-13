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

/* @bundles/LeadBundle/Field/Dispatcher/FieldSaveDispatcher.php */
class __TwigTemplate_5c6aa631f79cf643a9ae48b3d4262e2bc688e07e3a2f2ac0f89db327906bef21 extends Template
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

use Doctrine\\ORM\\EntityManager;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Event\\LeadFieldEvent;
use Mautic\\LeadBundle\\Exception\\NoListenerException;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FieldSaveDispatcher
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var EntityManager
     */
    private \$entityManager;

    public function __construct(EventDispatcherInterface \$dispatcher, EntityManager \$entityManager)
    {
        \$this->dispatcher    = \$dispatcher;
        \$this->entityManager = \$entityManager;
    }

    /**
     * @throws NoListenerException
     */
    public function dispatchPreSaveEvent(LeadField \$entity, bool \$isNew): LeadFieldEvent
    {
        return \$this->dispatchEvent(LeadEvents::FIELD_PRE_SAVE, \$entity, \$isNew);
    }

    /**
     * @throws NoListenerException
     */
    public function dispatchPostSaveEvent(LeadField \$entity, bool \$isNew): LeadFieldEvent
    {
        return \$this->dispatchEvent(LeadEvents::FIELD_POST_SAVE, \$entity, \$isNew);
    }

    /**
     * @deprecated Use method dispatchEvent directly
     */
    public function dispatchEventBc(string \$action, LeadField \$entity, bool \$isNew = false, LeadFieldEvent \$event = null): ?LeadFieldEvent
    {
        switch (\$action) {
            case 'pre_save':
                \$name = LeadEvents::FIELD_PRE_SAVE;
                break;
            case 'post_save':
                \$name = LeadEvents::FIELD_POST_SAVE;
                break;
            case 'pre_delete':
                \$name = LeadEvents::FIELD_PRE_DELETE;
                break;
            case 'post_delete':
                \$name = LeadEvents::FIELD_POST_DELETE;
                break;
            default:
                return null;
        }

        try {
            return \$this->dispatchEvent(\$name, \$entity, \$isNew, \$event);
        } catch (NoListenerException \$e) {
            return null;
        }
    }

    /**
     * @param string \$action - Use constant from LeadEvents class (e.g. LeadEvents::FIELD_PRE_SAVE)
     *
     * @throws NoListenerException
     */
    private function dispatchEvent(string \$action, LeadField \$entity, bool \$isNew, LeadFieldEvent \$event = null): LeadFieldEvent
    {
        if (!\$this->dispatcher->hasListeners(\$action)) {
            throw new NoListenerException('There is no Listener for this event');
        }

        if (null === \$event) {
            \$event = new LeadFieldEvent(\$entity, \$isNew);
            \$event->setEntityManager(\$this->entityManager);
        }

        \$this->dispatcher->dispatch(\$action, \$event);

        return \$event;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Dispatcher/FieldSaveDispatcher.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Dispatcher/FieldSaveDispatcher.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/Dispatcher/FieldSaveDispatcher.php");
    }
}
