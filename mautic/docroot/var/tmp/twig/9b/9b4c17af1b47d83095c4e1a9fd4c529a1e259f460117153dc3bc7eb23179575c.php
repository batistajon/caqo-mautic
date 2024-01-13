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

/* @bundles/LeadBundle/Tests/Entity/DoNotContactTest.php */
class __TwigTemplate_0279cfe40417d86d19318e107826be6e757d3134038440f5b92bee8287dabfcc extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\DoNotContact;

class DoNotContactTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testDoNotContactComments()
    {
        \$doNotContact = new DoNotContact();
        \$doNotContact->setComments(null);
        \$this->assertSame('', \$doNotContact->getComments());

        \$comment      = '<script>alert(\\'x\\')</script>';
        \$doNotContact->setComments(\$comment);
        \$this->assertNotSame(\$comment, \$doNotContact->getComments());
        \$this->assertSame('alert(\\'x\\')', \$doNotContact->getComments());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Entity/DoNotContactTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/DoNotContactTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Entity/DoNotContactTest.php");
    }
}
