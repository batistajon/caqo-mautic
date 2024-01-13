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

/* @bundles/LeadBundle/Tests/Event/CompanyEventTest.php */
class __TwigTemplate_c87f8a5dd2c9513f86723de5c52089912d01b534b03ddb43f1b72a72aac8e83e extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Event\\CompanyEvent;

class CompanyEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testConstructGettersSetters()
    {
        \$company = new Company();
        \$isNew   = false;
        \$score   = 1;
        \$event   = new CompanyEvent(\$company, \$isNew, \$score);

        \$this->assertEquals(\$company, \$event->getCompany());
        \$this->assertEquals(\$isNew, \$event->isNew());
        \$this->assertEquals(\$score, \$event->getScore());

        \$isNew = true;
        \$event = new CompanyEvent(\$company, \$isNew, \$score);
        \$this->assertEquals(\$isNew, \$event->isNew());

        \$company2 = new Company();
        \$company2->setName('otherCompany');
        \$event->setCompany(\$company2);
        \$this->assertEquals(\$company2, \$event->getCompany());

        \$secondScore = 2;
        \$event->changeScore(\$secondScore);
        \$this->assertEquals(\$secondScore, \$event->getScore());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Event/CompanyEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/CompanyEventTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Event/CompanyEventTest.php");
    }
}
