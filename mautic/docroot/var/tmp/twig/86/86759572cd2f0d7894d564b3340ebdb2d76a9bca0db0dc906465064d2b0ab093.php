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

/* @bundles/CoreBundle/Form/EventListener/FormExitSubscriber.php */
class __TwigTemplate_330e53841151bb4dbcb92c18755e96677acec94e901c5e71f8e5c24b28804480 extends Template
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

namespace Mautic\\CoreBundle\\Form\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * Class FormExitSubscriber.
 */
class FormExitSubscriber implements EventSubscriberInterface
{
    /**
     * @var \\Mautic\\CoreBundle\\Model\\CommonModel
     */
    private \$model;

    /**
     * @var array
     */
    private \$options;

    /**
     * @param \\Mautic\\CoreBundle\\Model\\CommonModel \$model
     * @param array                                \$options
     */
    public function __construct(\$model, \$options = [])
    {
        \$this->model   = \$model;
        \$this->options = \$options;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [FormEvents::PRE_SET_DATA => 'preSetData'];
    }

    public function preSetData(FormEvent \$event)
    {
        \$id = !empty(\$this->options['data']) ? \$this->options['data']->getId() : 0;
        if (\$id && empty(\$this->options['ignore_formexit'])) {
            //add a hidden field that is used exclusively to warn a user to use save/cancel to exit a form
            \$form = \$event->getForm();

            \$form->add(
                'unlockModel',
                HiddenType::class,
                [
                    'data'     => \$this->model,
                    'required' => false,
                    'mapped'   => false,
                    'attr'     => ['class' => 'form-exit-unlock-model'],
                ]
            );

            \$form->add(
                'unlockId',
                HiddenType::class,
                [
                    'data'     => \$id,
                    'required' => false,
                    'mapped'   => false,
                    'attr'     => ['class' => 'form-exit-unlock-id'],
                ]
            );

            if (isset(\$this->options['unlockParameter'])) {
                \$form->add(
                    'unlockParameter',
                    HiddenType::class,
                    [
                        'data'     => \$this->options['unlockParameter'],
                        'required' => false,
                        'mapped'   => false,
                        'attr'     => ['class' => 'form-exit-unlock-parameter'],
                    ]
                );
            }
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
        return "@bundles/CoreBundle/Form/EventListener/FormExitSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/Form/EventListener/FormExitSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/EventListener/FormExitSubscriber.php");
    }
}
