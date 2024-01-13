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

/* @bundles/LeadBundle/Event/CompanyEvent.php */
class __TwigTemplate_01a34b75548b628bbb35ee6eb41cf19d6b8671e1267edd82ea47aa7e668abd38 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Company;

/**
 * Class CompanyEvent.
 */
class CompanyEvent extends CommonEvent
{
    /**
     * @var int
     */
    protected \$score;

    /**
     * @param bool \$isNew
     * @param int  \$score
     */
    public function __construct(Company \$company, \$isNew = false, \$score = 0)
    {
        \$this->entity = \$company;
        \$this->isNew  = \$isNew;
        \$this->score  = \$score;
    }

    /**
     * Returns the Company entity.
     *
     * @return Company
     */
    public function getCompany()
    {
        return \$this->entity;
    }

    /**
     * Sets the Company entity.
     */
    public function setCompany(Company \$company)
    {
        \$this->entity = \$company;
    }

    public function changeScore(\$score)
    {
        \$this->score = \$score;
    }

    public function getScore()
    {
        return \$this->score;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/CompanyEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/CompanyEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/CompanyEvent.php");
    }
}
