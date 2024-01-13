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

/* @bundles/LeadBundle/EventListener/ButtonSubscriber.php */
class __TwigTemplate_a48e221fad2e245dd78c5e2135f73844004223c4be98a837b6091641ec2ed3c8 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\CustomButtonEvent;
use Mautic\\CoreBundle\\Templating\\Helper\\ButtonHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ButtonSubscriber implements EventSubscriberInterface
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var RouterInterface
     */
    private \$router;

    public function __construct(TranslatorInterface \$translator, RouterInterface \$router)
    {
        \$this->translator = \$translator;
        \$this->router     = \$router;
    }

    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::VIEW_INJECT_CUSTOM_BUTTONS => ['injectViewButtons', 0],
        ];
    }

    public function injectViewButtons(CustomButtonEvent \$event)
    {
        if (0 === strpos(\$event->getRoute(), 'mautic_contact_index')) {
            \$exportRoute = \$this->router->generate(
                'mautic_contact_action',
                ['objectAction' => 'batchExport']
            );

            \$event->addButton(
                [
                    'attr' => [
                        'data-toggle'           => 'confirmation',
                        'href'                  => \$exportRoute.'?filetype=xlsx',
                        'data-precheck'         => 'batchActionPrecheck',
                        'data-message'          => \$this->translator->trans('mautic.core.export.items', ['%items%' => 'contacts']),
                        'data-confirm-text'     => \$this->translator->trans('mautic.core.export.xlsx'),
                        'data-confirm-callback' => 'executeBatchAction',
                        'data-cancel-text'      => \$this->translator->trans('mautic.core.form.cancel'),
                        'data-cancel-callback'  => 'dismissConfirmation',
                    ],
                    'btnText'   => \$this->translator->trans('mautic.core.export.xlsx'),
                    'iconClass' => 'fa fa-file-excel-o',
                ],
                ButtonHelper::LOCATION_BULK_ACTIONS
            );

            \$event->addButton(
                [
                    'attr' => [
                        'data-toggle'           => 'confirmation',
                        'href'                  => \$exportRoute.'?filetype=csv',
                        'data-precheck'         => 'batchActionPrecheck',
                        'data-message'          => \$this->translator->trans('mautic.core.export.items', ['%items%' => 'contacts']),
                        'data-confirm-text'     => \$this->translator->trans('mautic.core.export.csv'),
                        'data-confirm-callback' => 'executeBatchAction',
                        'data-cancel-text'      => \$this->translator->trans('mautic.core.form.cancel'),
                        'data-cancel-callback'  => 'dismissConfirmation',
                    ],
                    'btnText'   => \$this->translator->trans('mautic.core.export.csv'),
                    'iconClass' => 'fa fa-file-text-o',
                ],
                ButtonHelper::LOCATION_BULK_ACTIONS
            );

            \$event->addButton(
                [
                    'attr' => [
                        'href'        => \$exportRoute.'?filetype=xlsx',
                        'data-toggle' => null,
                    ],
                    'btnText'   => \$this->translator->trans('mautic.core.export.xlsx'),
                    'iconClass' => 'fa fa-file-excel-o',
                ],
                ButtonHelper::LOCATION_PAGE_ACTIONS
            );

            \$event->addButton(
                [
                    'attr' => [
                        'href'        => \$exportRoute.'?filetype=csv',
                        'data-toggle' => null,
                    ],
                    'btnText'   => \$this->translator->trans('mautic.core.export.csv'),
                    'iconClass' => 'fa fa-file-text-o',
                ],
                ButtonHelper::LOCATION_PAGE_ACTIONS
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
        return "@bundles/LeadBundle/EventListener/ButtonSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ButtonSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/EventListener/ButtonSubscriber.php");
    }
}
