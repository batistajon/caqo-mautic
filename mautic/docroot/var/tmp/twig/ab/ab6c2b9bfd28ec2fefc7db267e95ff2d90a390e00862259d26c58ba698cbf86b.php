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

/* @bundles/UserBundle/Tests/Entity/UserTest.php */
class __TwigTemplate_9757f18b3b2a7be588e94df57238883074288fac0d14c50a0b5a307ae7bae661 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Entity;

use Mautic\\UserBundle\\Entity\\User;

class UserTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testUserIsGuest()
    {
        \$user = new User(true);
        \$this->assertTrue(\$user->isGuest());
    }

    public function testUserIsNotGuest()
    {
        \$user = new User();
        \$this->assertFalse(\$user->isGuest());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Tests/Entity/UserTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Entity/UserTest.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Tests/Entity/UserTest.php");
    }
}
