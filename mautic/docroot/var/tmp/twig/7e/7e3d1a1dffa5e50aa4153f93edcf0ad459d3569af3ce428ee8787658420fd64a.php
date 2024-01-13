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

/* @bundles/CampaignBundle/Tests/Executioner/Result/EvalutatedContactsTest.php */
class __TwigTemplate_c947f1cd52dfa690e3c2e004e4937085502f8b22e8cafe8b34d2481a447d1941 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\Result;

use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use Mautic\\LeadBundle\\Entity\\Lead;

class EvalutatedContactsTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testPassFail()
    {
        \$evaluatedContacts = new EvaluatedContacts();
        \$passLead          = new Lead();
        \$evaluatedContacts->pass(\$passLead);

        \$failedLead = new Lead();
        \$evaluatedContacts->fail(\$failedLead);

        \$passed = \$evaluatedContacts->getPassed();
        \$failed = \$evaluatedContacts->getFailed();

        \$this->assertCount(1, \$passed);
        \$this->assertCount(1, \$failed);

        \$this->assertTrue(\$passLead === \$passed->first());
        \$this->assertTrue(\$failedLead === \$failed->first());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Executioner/Result/EvalutatedContactsTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Result/EvalutatedContactsTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Executioner/Result/EvalutatedContactsTest.php");
    }
}
