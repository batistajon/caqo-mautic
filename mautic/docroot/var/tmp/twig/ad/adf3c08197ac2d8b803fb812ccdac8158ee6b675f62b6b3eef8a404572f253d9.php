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

/* @bundles/FormBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_410d21b2d3ebf4723575abad644f1fe1551e1cdf1be13bba4844f377748e56cd extends Template
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

namespace Mautic\\FormBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\FormBundle\\Model\\FormModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SearchSubscriber implements EventSubscriberInterface
{
    /**
     * @var UserHelper
     */
    private \$userHelper;

    /**
     * @var FormModel
     */
    private \$formModel;

    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var TemplatingHelper
     */
    private \$templating;

    public function __construct(
        UserHelper \$userHelper,
        FormModel \$formModel,
        CorePermissions \$security,
        TemplatingHelper \$templating
    ) {
        \$this->userHelper = \$userHelper;
        \$this->formModel  = \$formModel;
        \$this->security   = \$security;
        \$this->templating = \$templating;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::GLOBAL_SEARCH      => ['onGlobalSearch', 0],
            CoreEvents::BUILD_COMMAND_LIST => ['onBuildCommandList', 0],
        ];
    }

    public function onGlobalSearch(MauticEvents\\GlobalSearchEvent \$event)
    {
        \$str = \$event->getSearchString();
        if (empty(\$str)) {
            return;
        }

        \$filter = ['string' => \$str, 'force' => ''];

        \$permissions = \$this->security->isGranted(['form:forms:viewown', 'form:forms:viewother'], 'RETURN_ARRAY');
        if (\$permissions['form:forms:viewown'] || \$permissions['form:forms:viewother']) {
            //only show own forms if the user does not have permission to view others
            if (!\$permissions['form:forms:viewother']) {
                \$filter['force'] = [
                    ['column' => 'f.createdBy', 'expr' => 'eq', 'value' => \$this->userHelper->getUser()->getId()],
                ];
            }

            \$forms = \$this->formModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$filter,
                ]);

            if (count(\$forms) > 0) {
                \$formResults = [];
                foreach (\$forms as \$form) {
                    \$formResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticFormBundle:SubscribedEvents\\Search:global.html.php',
                        ['form' => \$form[0]]
                    )->getContent();
                }
                if (count(\$forms) > 5) {
                    \$formResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticFormBundle:SubscribedEvents\\Search:global.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$forms) - 5),
                        ]
                    )->getContent();
                }
                \$formResults['count'] = count(\$forms);
                \$event->addResults('mautic.form.forms', \$formResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event)
    {
        if (\$this->security->isGranted(['form:forms:viewown', 'form:forms:viewother'], 'MATCH_ONE')) {
            \$event->addCommands(
                'mautic.form.forms',
                \$this->formModel->getCommandList()
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
        return "@bundles/FormBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/SearchSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/EventListener/SearchSubscriber.php");
    }
}
