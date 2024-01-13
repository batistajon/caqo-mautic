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

/* @bundles/LeadBundle/Tests/Form/DataTransformer/FieldFilterTransformerTest.php */
class __TwigTemplate_d18e737a765f1068df73a8216b87c832b43dc4fac86ef6ddecb09ec61b536726 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Form\\DataTransformer;

use Mautic\\LeadBundle\\Form\\DataTransformer\\FieldFilterTransformer;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Translation\\TranslatorInterface;

final class FieldFilterTransformerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var FieldFilterTransformer
     */
    private \$transformer;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator  = \$this->createMock(TranslatorInterface::class);
        \$this->transformer = new FieldFilterTransformer(\$this->translator);
    }

    public function testTransform(): void
    {
        \$filters = \$this->transformer->transform([
            [
                'type'       => 'datetime',
                'properties' => [
                    'filter' => '2020-03-17 17:22:34',
                ],
            ],
        ]);

        \$this->assertSame(
            [
                [
                    'type'       => 'datetime',
                    'properties' => [
                        'filter' => '2020-03-17 17:22',
                    ],
                ],
            ],
            \$filters
        );
    }

    public function testTransformWithBcFilter(): void
    {
        \$filters = \$this->transformer->transform([
            [
                'type'   => 'datetime',
                'filter' => '2020-03-17 17:22:34',
            ],
        ]);

        \$this->assertSame(
            [
                [
                    'type'       => 'datetime',
                    'filter'     => '2020-03-17 17:22:34',
                    'properties' => [
                        'filter' => '2020-03-17 17:22',
                    ],
                ],
            ],
            \$filters
        );
    }

    public function testReverseTransform(): void
    {
        \$filters = \$this->transformer->reverseTransform([
            [
                'type'       => 'datetime',
                'properties' => [
                    'filter' => '2020-03-17 17:22:34',
                ],
            ],
        ]);

        \$this->assertSame(
            [
                [
                    'type'       => 'datetime',
                    'properties' => [
                        'filter' => '2020-03-17 17:22',
                    ],
                ],
            ],
            \$filters
        );
    }

    public function testReverseTransformWithBcFilter(): void
    {
        \$filters = \$this->transformer->reverseTransform([
            [
                'type'   => 'datetime',
                'filter' => '2020-03-17 17:22:34',
            ],
        ]);

        \$this->assertSame(
            [
                [
                    'type'       => 'datetime',
                    'filter'     => '2020-03-17 17:22:34',
                    'properties' => [
                        'filter' => '2020-03-17 17:22',
                    ],
                ],
            ],
            \$filters
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Form/DataTransformer/FieldFilterTransformerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Form/DataTransformer/FieldFilterTransformerTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Form/DataTransformer/FieldFilterTransformerTest.php");
    }
}
