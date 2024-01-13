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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/ValueNormalizer/ValueNormalizerTest.php */
class __TwigTemplate_6d6ce508bf41aa97f851ce3965ad836b5c113cd400a46e94863672bf3ca516a6 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\ValueNormalizer;

use DateTimeInterface;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\ValueNormalizer\\ValueNormalizer;
use PHPUnit\\Framework\\TestCase;

class ValueNormalizerTest extends TestCase
{
    public function testNullDateTimeValue(): void
    {
        \$valueNormalizer    = new ValueNormalizer();
        \$normalizedValueDAO = \$valueNormalizer->normalizeForMautic(NormalizedValueDAO::DATETIME_TYPE, null);

        \$this->assertNull(\$normalizedValueDAO->getNormalizedValue());
        \$this->assertNull(\$normalizedValueDAO->getOriginalValue());
    }

    public function testNotNullDateTimeValue(): void
    {
        \$valueNormalizer    = new ValueNormalizer();
        \$normalizedValueDAO = \$valueNormalizer->normalizeForMautic(NormalizedValueDAO::DATETIME_TYPE, '2019-10-08');

        \$this->assertInstanceOf(DateTimeInterface::class, \$normalizedValueDAO->getNormalizedValue());
        \$this->assertSame('2019-10-08', \$normalizedValueDAO->getNormalizedValue()->format('Y-m-d'));
        \$this->assertSame('2019-10-08', \$normalizedValueDAO->getOriginalValue());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/ValueNormalizer/ValueNormalizerTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/ValueNormalizer/ValueNormalizerTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/ValueNormalizer/ValueNormalizerTest.php");
    }
}
