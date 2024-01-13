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

/* @bundles/CategoryBundle/EventListener/CategorySubscriber.php */
class __TwigTemplate_938e9717d46b722ff1abcce2c990b54747ee3c177581395ef8480d86301379a8 extends Template
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

use Mautic\\CategoryBundle\\CategoryEvents;
use Mautic\\CategoryBundle\\Event as Events;
use Mautic\\CategoryBundle\\Event\\CategoryTypesEvent;
use Mautic\\CoreBundle\\Helper\\BundleHelper;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CategorySubscriber implements EventSubscriberInterface
{
    /**
     * @var BundleHelper
     */
    private \$bundleHelper;

    /**
     * @var IpLookupHelper
     */
    private \$ipLookupHelper;

    /**
     * @var AuditLogModel
     */
    private \$auditLogModel;

    public function __construct(BundleHelper \$bundleHelper, IpLookupHelper \$ipLookupHelper, AuditLogModel \$auditLogModel)
    {
        \$this->bundleHelper   = \$bundleHelper;
        \$this->ipLookupHelper = \$ipLookupHelper;
        \$this->auditLogModel  = \$auditLogModel;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CategoryEvents::CATEGORY_ON_BUNDLE_LIST_BUILD => ['onCategoryBundleListBuild', 0],
            CategoryEvents::CATEGORY_POST_SAVE            => ['onCategoryPostSave', 0],
            CategoryEvents::CATEGORY_POST_DELETE          => ['onCategoryDelete', 0],
        ];
    }

    /**
     * Add bundle to the category.
     */
    public function onCategoryBundleListBuild(CategoryTypesEvent \$event)
    {
        \$bundles = \$this->bundleHelper->getMauticBundles(true);

        foreach (\$bundles as \$bundle) {
            if (!empty(\$bundle['config']['categories'])) {
                foreach (\$bundle['config']['categories'] as \$type => \$label) {
                    \$event->addCategoryType(\$type, \$label);
                }
            }
        }
    }

    /**
     * Add an entry to the audit log.
     */
    public function onCategoryPostSave(Events\\CategoryEvent \$event)
    {
        \$category = \$event->getCategory();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'category',
                'object'    => 'category',
                'objectId'  => \$category->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onCategoryDelete(Events\\CategoryEvent \$event)
    {
        \$category = \$event->getCategory();
        \$log      = [
            'bundle'    => 'category',
            'object'    => 'category',
            'objectId'  => \$category->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$category->getTitle()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/EventListener/CategorySubscriber.php";
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
        return new Source("", "@bundles/CategoryBundle/EventListener/CategorySubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/EventListener/CategorySubscriber.php");
    }
}
