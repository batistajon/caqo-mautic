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

/* @bundles/EmailBundle/Tests/Helper/PlainTextMessageHelperTest.php */
class __TwigTemplate_4f804a1ce6842e4ec7a58a4b63382783646478dc0e3c64018864cfdf60f38a43 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper;

use Mautic\\EmailBundle\\Helper\\PlainTextMessageHelper;

/**
 * Class MessageHelperTest.
 */
class PlainTextMessageHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetPlainTextMessage()
    {
        \$message = new \\Swift_Message('Subject', 'My Content', 'text/html');
        \$message->addPart('plain text', 'text/plain');

        \$this->assertSame('plain text', PlainTextMessageHelper::getPlainTextFromMessage(\$message));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Helper/PlainTextMessageHelperTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/PlainTextMessageHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Helper/PlainTextMessageHelperTest.php");
    }
}
