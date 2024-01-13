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

/* @bundles/WebhookBundle/Tests/Entity/LogTest.php */
class __TwigTemplate_d1a5b398c8e91d5a2dabb58b50b30a0c025d1d00a0da446eea3be28738580b0b extends Template
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

declare(strict_types=1);

namespace Mautic\\WebhookBundle\\Tests\\Entity;

use Mautic\\WebhookBundle\\Entity\\Log;

class LogTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSetNote(): void
    {
        \$log = new Log();
        \$log->setNote(\"\\x6d\\x61\\x75\\x74\\x69\\x63\");
        \$this->assertSame('mautic', \$log->getNote());

        \$log->setNote(\"\\x57\\xfc\\x72\\x74\\x74\\x65\\x6d\\x62\\x65\\x72\\x67\");  // original string is W�rttemberg, in this '�' is invaliad char so it should be removed
        \$this->assertSame('Wrttemberg', \$log->getNote());

        \$log->setNote('mautic');
        \$this->assertSame('mautic', \$log->getNote());

        \$log->setNote('ěščřžýá');
        \$this->assertSame('ěščřžýá', \$log->getNote());

        \$log->setNote('†º5¶2KfNœã');
        \$this->assertSame('†º5¶2KfNœã', \$log->getNote());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Tests/Entity/LogTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/Entity/LogTest.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Tests/Entity/LogTest.php");
    }
}
