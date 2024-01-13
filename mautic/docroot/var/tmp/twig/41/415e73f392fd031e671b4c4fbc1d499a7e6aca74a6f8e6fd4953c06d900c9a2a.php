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

/* @bundles/CoreBundle/Tests/Unit/Helper/ClickthroughHelperTest.php */
class __TwigTemplate_f418f21877ce621188cd3dc08be17ffb08d00abb4e34b50d2acb814f3cfe04cd extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\ClickthroughHelper;
use Mautic\\CoreBundle\\Tests\\Unit\\Helper\\TestResources\\WakeupCall;

class ClickthroughHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testEncodingCanBeDecoded()
    {
        \$array = ['foo' => 'bar'];

        \$this->assertEquals(\$array, ClickthroughHelper::decodeArrayFromUrl(ClickthroughHelper::encodeArrayForUrl(\$array)));
    }

    /**
     * @covers \\Mautic\\CoreBundle\\Helper\\Serializer::decode
     */
    public function testObjectInArrayIsDetectedOrIgnored()
    {
        \$this->expectException(\\InvalidArgumentException::class);

        \$array = ['foo' => new WakeupCall()];

        ClickthroughHelper::decodeArrayFromUrl(ClickthroughHelper::encodeArrayForUrl(\$array));
    }

    public function testOnlyArraysCanBeDecodedToPreventObjectWakeupVulnerability()
    {
        \$this->expectException(\\InvalidArgumentException::class);

        ClickthroughHelper::decodeArrayFromUrl(urlencode(base64_encode(serialize(new \\stdClass()))));
    }

    public function testEmptyStringDoesNotThrowException()
    {
        \$array = [];

        \$this->assertEquals(\$array, ClickthroughHelper::decodeArrayFromUrl(''));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/ClickthroughHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/ClickthroughHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/ClickthroughHelperTest.php");
    }
}
