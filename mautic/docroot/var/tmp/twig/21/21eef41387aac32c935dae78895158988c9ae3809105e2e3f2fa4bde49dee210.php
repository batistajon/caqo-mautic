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

/* @bundles/LeadBundle/Tests/Event/LeadListFiltersChoicesEventTest.php */
class __TwigTemplate_e98c4aa364bcc02354ad6d4546cfc6bd6450abe87d6de8a62eba3a91fea0dc06 extends Template
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

use Mautic\\LeadBundle\\Event\\LeadListFiltersChoicesEvent;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Translation\\TranslatorInterface;

class LeadListFiltersChoicesEventTest extends TestCase
{
    public function testGetters(): void
    {
        \$operators = [
            'text' => [
                'equals'      => '=',
                'not equal'   => '!=',
                'empty'       => 'empty',
                'not empty'   => '!empty',
                'like'        => 'like',
                'not like'    => '!like',
                'regexp'      => 'regexp',
                'not regexp'  => '!regexp',
                'starts with' => 'startsWith',
                'ends with'   => 'endsWith',
                'contains'    => 'contains',
            ],
            'select' => [
                'equals'     => '=',
                'not equal'  => '!=',
                'empty'      => 'empty',
                'not empty'  => '!empty',
                'including'  => 'in',
                'excluding'  => '!in',
                'regexp'     => 'regexp',
                'not regexp' => '!regexp',
            ],
            'bool' => [
                'equals'    => '=',
                'not equal' => '!=',
            ],
        ];

        \$choices                     = [0 => 'Choice1', 1 => 'Choice2'];
        \$search                      = 'Test Search';
        \$translator                  = \$this->createMock(TranslatorInterface::class);
        \$leadListFiltersChoicesEvent = new LeadListFiltersChoicesEvent(\$choices, \$operators, \$translator, new Request(), \$search);
        \$this->assertSame(\$operators, \$leadListFiltersChoicesEvent->getOperators());
        \$this->assertSame(\$choices, \$leadListFiltersChoicesEvent->getChoices());
        \$this->assertSame(\$translator, \$leadListFiltersChoicesEvent->getTranslator());
        \$this->assertSame(\$search, \$leadListFiltersChoicesEvent->getSearch());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Event/LeadListFiltersChoicesEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/LeadListFiltersChoicesEventTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Event/LeadListFiltersChoicesEventTest.php");
    }
}
