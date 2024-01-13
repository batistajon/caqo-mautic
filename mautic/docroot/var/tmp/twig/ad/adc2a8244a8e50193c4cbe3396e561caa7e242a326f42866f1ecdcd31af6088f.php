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

/* @bundles/CoreBundle/Tests/Unit/Templating/Helper/FormatterHelperTest.php */
class __TwigTemplate_9c2e2833c43a903343e34992cf93dba230a8c2020e2ebcb1b11e98cd55e52a1a extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Templating\\Helper;

use DateTime;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\DateHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\FormatterHelper;
use Symfony\\Component\\Translation\\TranslatorInterface;

class FormatterHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var DateHelper
     */
    private \$dateHelper;

    /**
     * @var FormatterHelper
     */
    private \$formatterHelper;

    /**
     * @var CoreParametersHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$coreParametersHelper;

    protected function setUp(): void
    {
        \$this->translator           = \$this->createMock(TranslatorInterface::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->dateHelper           = new DateHelper(
            'F j, Y g:i a T',
            'D, M d',
            'F j, Y',
            'g:i a',
            \$this->translator,
            \$this->coreParametersHelper
        );
        \$this->formatterHelper               = new FormatterHelper(\$this->dateHelper, \$this->translator);
    }

    public function testStrictHtmlFormatIsRemovingScriptTags(): void
    {
        \$sample = '<a href=\"/index_dev.php/s/webhooks/view/31\" data-toggle=\"ajax\">test</a> has been stopped because the response HTTP code was 410, which means the reciever doesn\\'t want us to send more requests.<script>console.log(\\'script is running\\');</script><SCRIPT>console.log(\\'CAPITAL script is running\\');</SCRIPT>';

        \$expected = '<a href=\"/index_dev.php/s/webhooks/view/31\" data-toggle=\"ajax\">test</a> has been stopped because the response HTTP code was 410, which means the reciever doesn\\'t want us to send more requests.console.log(\\'script is running\\');console.log(\\'CAPITAL script is running\\');';

        \$result = \$this->formatterHelper->_(\$sample, 'html');

        \$this->assertEquals(\$expected, \$result);
    }

    public function testBooleanFormat(): void
    {
        \$this->translator->expects(\$this->exactly(2))
            ->method('trans')
            ->withConsecutive(['mautic.core.yes'], ['mautic.core.no'])
            ->willReturnOnConsecutiveCalls('yes', 'no');

        \$result = \$this->formatterHelper->_(1, 'bool');
        \$this->assertEquals('yes', \$result);

        \$result = \$this->formatterHelper->_(0, 'bool');
        \$this->assertEquals('no', \$result);
    }

    /**
     * @dataProvider stringProvider
     */
    public function testNormalizeStringValue(\$input, \$expected)
    {
        date_default_timezone_set('Europe/Paris');
        \$this->assertEquals(\$this->formatterHelper->normalizeStringValue(\$input), \$expected);
    }

    public function stringProvider(): iterable
    {
        // string
        yield ['random string', 'random string'];

        // integer
        yield [1, 1];

        // bool
        yield [false, false];

        // date
        yield ['2020-02-02', '2020-02-02'];

        // date time
        yield ['2021-02-21 18:00:00', 'February 21, 2021 7:00 pm'];

        // date object
        yield [
            DateTime::createFromFormat('Y-m-d H:i:s', 'now', new \\DateTimeZone('UTC')),
            DateTime::createFromFormat('Y-m-d H:i:s', 'now', new \\DateTimeZone('UTC')),
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Templating/Helper/FormatterHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Templating/Helper/FormatterHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Templating/Helper/FormatterHelperTest.php");
    }
}
