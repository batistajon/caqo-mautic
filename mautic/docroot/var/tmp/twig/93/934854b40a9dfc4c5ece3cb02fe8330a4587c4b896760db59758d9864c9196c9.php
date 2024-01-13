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

/* @bundles/CoreBundle/Tests/Unit/Helper/RandomHelper/RandomHelperTest.php */
class __TwigTemplate_456dc851a503512b263262e53ce4f173a62fca573fa9e627f99e0ce25a86dc30 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper\\RandomHelper;

use Mautic\\CoreBundle\\Helper\\RandomHelper\\RandomHelper;

class RandomHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * Based on https://github.com/nette/utils/blob/master/tests/Utils/Random.generate().phpt.
     */
    public function testGenerate()
    {
        \$randomHelper = \$this->getRandomHelper();
        \$this->assertSame(10, strlen(\$randomHelper->generate(10)));
        \$this->assertSame(5, strlen(\$randomHelper->generate(5)));
        \$this->assertSame(200, strlen(\$randomHelper->generate(200)));
        \$this->assertTrue((bool) preg_match('#^[0-9a-z]+\$#', \$randomHelper->generate()));
        \$this->assertTrue((bool) preg_match('#^[0-9]+\$#', \$randomHelper->generate(1000, '0-9')));
        \$this->assertTrue((bool) preg_match('#^[0a-z12]+\$#', \$randomHelper->generate(1000, '0a-z12')));
        \$this->assertTrue((bool) preg_match('#^[-a]+\$#', \$randomHelper->generate(1000, '-a')));

        \$this->expectException(\\InvalidArgumentException::class);
        \$randomHelper->generate(0);
        \$this->expectException(\\InvalidArgumentException::class);
        \$randomHelper->generate(1, '000');

        // frequency check
        \$length = (int) 1e6;
        \$delta  = 0.1;
        \$s      = \$randomHelper->generate(\$length, \"\\x01-\\xFF\");
        \$freq   = count_chars(\$s);
        \$this->assertSame(0, \$freq[0]);
        for (\$i = 1; \$i < 255; ++\$i) {
            \$this->assertTrue(\$freq[\$i] < \$length / 255 * (1 + \$delta) && \$freq[\$i] > \$length / 255 * (1 - \$delta));
        }
    }

    /**
     * @return RandomHelper
     */
    private function getRandomHelper()
    {
        return new RandomHelper();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/RandomHelper/RandomHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/RandomHelper/RandomHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/RandomHelper/RandomHelperTest.php");
    }
}
