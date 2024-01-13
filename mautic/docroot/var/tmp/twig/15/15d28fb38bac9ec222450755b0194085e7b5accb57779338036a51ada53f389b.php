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

/* @bundles/LeadBundle/Model/LegacyLeadModel.php */
class __TwigTemplate_219ef3888620569bf3a053ea17d6392cfddcbc9471adea6b565b2a9b92f1ec03 extends Template
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

namespace Mautic\\LeadBundle\\Model;

use Mautic\\LeadBundle\\Deduplicate\\ContactMerger;
use Mautic\\LeadBundle\\Deduplicate\\Exception\\SameContactException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * Class LegacyLeadModel.
 *
 * @deprecated 2.14.0 to be removed in 3.0; Used temporarily to get around circular depdenency for LeadModel
 */
class LegacyLeadModel
{
    /**
     * @var Container
     */
    private \$container;

    /**
     * LegacyContactMerger constructor.
     */
    public function __construct(Container \$container)
    {
        \$this->container = \$container;
    }

    /**
     * @param bool \$autoMode
     *
     * @return Lead
     */
    public function mergeLeads(Lead \$lead, Lead \$lead2, \$autoMode = true)
    {
        \$leadId = \$lead->getId();

        if (\$autoMode) {
            //which lead is the oldest?
            \$winner = (\$lead->getDateAdded() < \$lead2->getDateAdded()) ? \$lead : \$lead2;
            \$loser  = (\$winner->getId() === \$leadId) ? \$lead2 : \$lead;
        } else {
            \$winner = \$lead2;
            \$loser  = \$lead;
        }

        try {
            /** @var ContactMerger \$contactMerger */
            \$contactMerger = \$this->container->get('mautic.lead.merger');

            return \$contactMerger->merge(\$winner, \$loser);
        } catch (SameContactException \$exception) {
            return \$lead;
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
        return "@bundles/LeadBundle/Model/LegacyLeadModel.php";
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
        return new Source("", "@bundles/LeadBundle/Model/LegacyLeadModel.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Model/LegacyLeadModel.php");
    }
}
