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

/* @bundles/CategoryBundle/EventListener/ButtonSubscriber.php */
class __TwigTemplate_8fff64eccde14d48df2b491881c0e7adc2dae6346650fcb409b7a042d28133de extends Template
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

namespace Mautic\\CategoryBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\CustomButtonEvent;
use Mautic\\CoreBundle\\Templating\\Helper\\ButtonHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ButtonSubscriber implements EventSubscriberInterface
{
    /**
     * @var RouterInterface
     */
    private \$router;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(RouterInterface \$router, TranslatorInterface \$translator)
    {
        \$this->router     = \$router;
        \$this->translator = \$translator;
    }

    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::VIEW_INJECT_CUSTOM_BUTTONS => ['injectContactBulkButtons', 0],
        ];
    }

    public function injectContactBulkButtons(CustomButtonEvent \$event)
    {
        if (0 === strpos(\$event->getRoute(), 'mautic_contact_')) {
            \$event->addButton(
                [
                    'attr' => [
                        'class'       => 'btn btn-default btn-sm btn-nospin',
                        'data-toggle' => 'ajaxmodal',
                        'data-target' => '#MauticSharedModal',
                        'href'        => \$this->router->generate('mautic_category_batch_contact_view'),
                        'data-header' => \$this->translator->trans('mautic.lead.batch.categories'),
                    ],
                    'btnText'   => \$this->translator->trans('mautic.lead.batch.categories'),
                    'iconClass' => 'fa fa-cogs',
                ],
                ButtonHelper::LOCATION_BULK_ACTIONS
            );
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
        return "@bundles/CategoryBundle/EventListener/ButtonSubscriber.php";
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
        return new Source("", "@bundles/CategoryBundle/EventListener/ButtonSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/EventListener/ButtonSubscriber.php");
    }
}
