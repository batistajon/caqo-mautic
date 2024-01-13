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

/* @bundles/UserBundle/Tests/Event/LoginEventTest.php */
class __TwigTemplate_12dc05962e85e7a8a34eaa8a0182815a196f7a66b893fbfc2e72eb090b88c4e2 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Event;

use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Event\\LoginEvent;

class LoginEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetUser()
    {
        \$user  = \$this->createMock(User::class);
        \$event = new LoginEvent(\$user);

        \$this->assertEquals(\$user, \$event->getUser());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Tests/Event/LoginEventTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Event/LoginEventTest.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Tests/Event/LoginEventTest.php");
    }
}
