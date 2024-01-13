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

/* @bundles/CacheBundle/Tests/EventListener/CacheClearSubscriberTest.php */
class __TwigTemplate_d156387d333736da93205da9fbbba86a987ed7ed910728598c46b310d3b96c52 extends Template
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

namespace Mautic\\CacheBundle\\Tests\\EventListener;

use Mautic\\CacheBundle\\Cache\\Adapter\\FilesystemTagAwareAdapter;
use Mautic\\CacheBundle\\EventListener\\CacheClearSubscriber;
use Monolog\\Logger;
use PHPUnit\\Framework\\MockObject\\MockObject;

class CacheClearSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|FilesystemTagAwareAdapter
     */
    private \$adapter;

    /**
     * @var string
     */
    private \$random;

    public function setUp(): void
    {
        parent::setUp();
        \$this->random  = sha1((string) time());
        \$this->adapter = \$this->getMockBuilder(FilesystemTagAwareAdapter::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['clear', 'commit'])
            ->addMethods(['getCacheAdapter'])
            ->getMock();
        \$this->adapter->method('clear')->willReturn(\$this->random);
        \$this->adapter->method('commit')->willReturn(null);
        \$this->adapter->method('getCacheAdapter')->willReturn('');
    }

    public function testClear(): void
    {
        \$this->adapter->expects(\$this->once())->method('clear')->willReturn(\$this->random);
        \$subscriber = new CacheClearSubscriber(\$this->adapter, new Logger('test'));
        \$subscriber->clear('aaa');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CacheBundle/Tests/EventListener/CacheClearSubscriberTest.php";
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
        return new Source("", "@bundles/CacheBundle/Tests/EventListener/CacheClearSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/CacheBundle/Tests/EventListener/CacheClearSubscriberTest.php");
    }
}
