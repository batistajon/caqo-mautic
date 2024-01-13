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

/* @bundles/LeadBundle/Tests/Event/ListFieldChoicesEventTest.php */
class __TwigTemplate_3ea3528a832d1e42d13eef31fe72f94462412e4dcbf3ea66adefa4b13e091c87 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Event\\ListFieldChoicesEvent;

final class ListFieldChoicesEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testConstructGettersSetters(): void
    {
        \$event = new ListFieldChoicesEvent();

        \$this->assertSame([], \$event->getChoicesForAllListFieldTypes());
        \$this->assertSame([], \$event->getChoicesForAllListFieldAliases());

        \$event->setChoicesForFieldType('boolean', ['No' => 0, 'Yes' => 1]);
        \$event->setChoicesForFieldAlias('campaign', ['Campaign A' => 1, 'Campaign B' => 2]);
        \$event->setSearchTerm('Test search');

        \$this->assertSame(['boolean' => ['No' => 0, 'Yes' => 1]], \$event->getChoicesForAllListFieldTypes());
        \$this->assertSame(['campaign' => ['Campaign A' => 1, 'Campaign B' => 2]], \$event->getChoicesForAllListFieldAliases());
        \$this->assertSame('Test search', \$event->getSearchTerm());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Event/ListFieldChoicesEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/ListFieldChoicesEventTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Event/ListFieldChoicesEventTest.php");
    }
}
