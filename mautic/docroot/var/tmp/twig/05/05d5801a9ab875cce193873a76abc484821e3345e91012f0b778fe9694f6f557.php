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

/* @bundles/PluginBundle/EventListener/LeadSubscriber.php */
class __TwigTemplate_ed6433057bfac5613a7dc8767e7bef9360343052f7afc93930dc43cfbd6a9742 extends Template
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

namespace Mautic\\PluginBundle\\EventListener;

use Mautic\\LeadBundle\\Event\\CompanyEvent;
use Mautic\\LeadBundle\\Event\\LeadEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\PluginBundle\\Model\\PluginModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class LeadSubscriber implements EventSubscriberInterface
{
    /**
     * @var PluginModel
     */
    private \$pluginModel;

    public function __construct(PluginModel \$pluginModel)
    {
        \$this->pluginModel = \$pluginModel;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            LeadEvents::LEAD_PRE_DELETE    => ['onLeadDelete', 0],
            LeadEvents::LEAD_POST_SAVE     => ['onLeadSave', 0],
            LeadEvents::COMPANY_PRE_DELETE => ['onCompanyDelete', 0],
        ];
    }

    /*
     * Delete lead event
     */
    public function onLeadDelete(LeadEvent \$event)
    {
        /** @var \\Mautic\\LeadBundle\\Entity\\Lead \$lead */
        \$lead                  = \$event->getLead();
        \$integrationEntityRepo = \$this->pluginModel->getIntegrationEntityRepository();
        \$integrationEntityRepo->findLeadsToDelete('lead%', \$lead->getId());

        return false;
    }

    /*
     * Delete company event
     */
    public function onCompanyDelete(CompanyEvent \$event)
    {
        /** @var \\Mautic\\LeadBundle\\Entity\\Company \$company */
        \$company               = \$event->getCompany();
        \$integrationEntityRepo = \$this->pluginModel->getIntegrationEntityRepository();
        \$integrationEntityRepo->findLeadsToDelete('company%', \$company->getId());

        return false;
    }

    /*
    * Change lead event
    */
    public function onLeadSave(LeadEvent \$event)
    {
        /** @var \\Mautic\\LeadBundle\\Entity\\Lead \$lead */
        \$lead                  = \$event->getLead();
        \$integrationEntityRepo = \$this->pluginModel->getIntegrationEntityRepository();
        \$integrationEntityRepo->updateErrorLeads('lead-error', \$lead->getId());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/EventListener/LeadSubscriber.php";
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
        return new Source("", "@bundles/PluginBundle/EventListener/LeadSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/EventListener/LeadSubscriber.php");
    }
}
