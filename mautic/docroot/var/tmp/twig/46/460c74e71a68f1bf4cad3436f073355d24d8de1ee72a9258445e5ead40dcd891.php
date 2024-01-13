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

/* @bundles/LeadBundle/Tests/Segment/Query/ContactSegmentQueryBuilderTest.php */
class __TwigTemplate_1f5d688e3c2ced29ab7ae2433e07399475e36ded133d899ed06ecc39057db838 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Query;

use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\EntityManager;
use Mautic\\LeadBundle\\Segment\\Query\\ContactSegmentQueryBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Mautic\\LeadBundle\\Segment\\RandomParameterName;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class ContactSegmentQueryBuilderTest extends TestCase
{
    public function testAddNewContactsRestrictions(): void
    {
        \$queryBuilder = new QueryBuilder(\$this->createConnection());
        \$queryBuilder->select('1');
        \$queryBuilder->from(MAUTIC_TABLE_PREFIX.'leads', 'l');
        \$queryBuilder->where('NULL');

        \$filterQueryBuilder = new ContactSegmentQueryBuilder(\$this->createMock(EntityManager::class), new RandomParameterName(), new EventDispatcher());

        Assert::assertSame(\$queryBuilder, \$filterQueryBuilder->addNewContactsRestrictions(\$queryBuilder, 8));
        Assert::assertSame('SELECT 1 FROM '.MAUTIC_TABLE_PREFIX.'leads l WHERE (NULL) AND (l.id NOT IN (SELECT par0.lead_id FROM '.MAUTIC_TABLE_PREFIX.'lead_lists_leads par0 WHERE par0.leadlist_id = 8))', \$queryBuilder->getDebugOutput());
    }

    private function createConnection(): Connection
    {
        return new class() extends Connection {
            /** @noinspection PhpMissingParentConstructorInspection */
            public function __construct()
            {
            }
        };
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Segment/Query/ContactSegmentQueryBuilderTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Query/ContactSegmentQueryBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/Query/ContactSegmentQueryBuilderTest.php");
    }
}
