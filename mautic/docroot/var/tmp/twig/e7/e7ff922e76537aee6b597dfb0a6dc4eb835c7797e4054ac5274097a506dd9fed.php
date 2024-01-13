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

/* @bundles/EmailBundle/Tests/Helper/UrlMatcherTest.php */
class __TwigTemplate_ba1f960ec056089e2aaefb66a9e08273100ac841ac6fa9088a0e7d6eea5b69cb extends Template
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

use Mautic\\EmailBundle\\Helper\\UrlMatcher;

class UrlMatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testUrlIsFound()
    {
        \$urls = [
            'google.com',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'google.com'));
    }

    public function testUrlWithSlashIsMatched()
    {
        \$urls = [
            'https://google.com',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com'));
    }

    public function testUrlWithEscapedSlashesIsMatched()
    {
        \$urls = [
            'https:\\/\\/google.com\\/hello',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com/hello'));
    }

    public function testUrlWithEndingSlash()
    {
        \$urls = [
            'https://google.com/hello/',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com/hello'));
        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com/hello/'));
    }

    public function testUrlWithoutHttpPrefix()
    {
        \$urls = [
            'google.com/hello',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com/hello'));
        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'http://google.com/hello/'));
    }

    public function testUrlWithoutHttp()
    {
        \$urls = [
            '//google.com/hello',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'https://google.com/hello'));
        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, '//google.com/hello'));
    }

    public function testUrlMismatch()
    {
        \$urls = [
            'http://google.com',
        ];

        \$this->assertFalse(UrlMatcher::hasMatch(\$urls, 'https://yahoo.com'));
    }

    public function testFTPSchemeMisMatch()
    {
        \$urls = [
            'ftp://google.com',
        ];

        \$this->assertFalse(UrlMatcher::hasMatch(\$urls, 'https://google.com'));
    }

    public function testFTPSchemeMatch()
    {
        \$urls = [
            'ftp://google.com',
        ];

        \$this->assertTrue(UrlMatcher::hasMatch(\$urls, 'ftp://google.com'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Helper/UrlMatcherTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/UrlMatcherTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Helper/UrlMatcherTest.php");
    }
}
