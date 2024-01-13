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

/* @bundles/CampaignBundle/Executioner/Result/EvaluatedContacts.php */
class __TwigTemplate_e30fe3b8cfdb32ccae270d0ae4bec0f621e8b08102b45e6130ced6dcfa6667c8 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Result;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\LeadBundle\\Entity\\Lead;

class EvaluatedContacts
{
    /**
     * @var ArrayCollection
     */
    private \$passed;

    /**
     * @var ArrayCollection
     */
    private \$failed;

    /**
     * EvaluatedContacts constructor.
     */
    public function __construct(ArrayCollection \$passed = null, ArrayCollection \$failed = null)
    {
        \$this->passed = (null === \$passed) ? new ArrayCollection() : \$passed;
        \$this->failed = (null === \$failed) ? new ArrayCollection() : \$failed;
    }

    public function pass(Lead \$contact)
    {
        \$this->passed->set(\$contact->getId(), \$contact);
    }

    public function fail(Lead \$contact)
    {
        \$this->failed->set(\$contact->getId(), \$contact);
    }

    /**
     * @return ArrayCollection|Lead[]
     */
    public function getPassed()
    {
        return \$this->passed;
    }

    /**
     * @return ArrayCollection|Lead[]
     */
    public function getFailed()
    {
        return \$this->failed;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Result/EvaluatedContacts.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Result/EvaluatedContacts.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/Result/EvaluatedContacts.php");
    }
}
