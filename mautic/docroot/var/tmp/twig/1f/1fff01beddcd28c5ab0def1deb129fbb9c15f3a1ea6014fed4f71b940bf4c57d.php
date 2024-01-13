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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Accessor/ConfigAccessorTest.php */
class __TwigTemplate_5ff440551e804b41a7396b25d2f6df58502964b3530ef0d4d584ca91d119104c extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Accessor;

use Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor;

class ConfigAccessorTest extends \\PHPUnit\\Framework\\TestCase
{
    protected \$config = [
        'imap_path' => 'path',
        'user'      => 'user',
        'host'      => 'host',
        'folder'    => 'folder',
    ];

    /**
     * @testdox All getters return appropriate values
     *
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getPath()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getUser()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getHost()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getFolder()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getProperty()
     */
    public function testGetters()
    {
        \$configAccessor = new ConfigAccessor(\$this->config);

        \$this->assertEquals(\$this->config['imap_path'], \$configAccessor->getPath());
        \$this->assertEquals(\$this->config['user'], \$configAccessor->getUser());
        \$this->assertEquals(\$this->config['host'], \$configAccessor->getHost());
        \$this->assertEquals(\$this->config['folder'], \$configAccessor->getFolder());
    }

    /**
     * @testdox Key is formatted appropriately
     *
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getKey()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getHost()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getFolder()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getProperty()
     */
    public function testKeyIsPathAndUser()
    {
        \$configAccessor = new ConfigAccessor(\$this->config);

        \$this->assertEquals('path_user', \$configAccessor->getKey());
    }

    /**
     * @testdox Test its considered configured if we have a host and a folder
     *
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::isConfigured()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getHost()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getFolder()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getProperty()
     */
    public function testIsConfigured()
    {
        \$configAccessor = new ConfigAccessor(\$this->config);

        \$this->assertTrue(\$configAccessor->isConfigured());
    }

    /**
     * @testdox Test its considered not configured if folder is missing
     *
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::isConfigured()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getHost()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getFolder()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getProperty()
     */
    public function testIsNotConfiguredIfFolderIsMissing()
    {
        \$config = \$this->config;
        unset(\$config['folder']);
        \$configAccessor = new ConfigAccessor(\$config);
        \$this->assertFalse(\$configAccessor->isConfigured());
    }

    /**
     * @testdox Test its considered not configured if host is missing
     *
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::isConfigured()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getHost()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getFolder()
     * @covers \\Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor::getProperty()
     */
    public function testIsNotConfiguredIfHostIsMissing()
    {
        \$config = \$this->config;
        unset(\$config['host']);
        \$configAccessor = new ConfigAccessor(\$config);
        \$this->assertFalse(\$configAccessor->isConfigured());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Accessor/ConfigAccessorTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Accessor/ConfigAccessorTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Accessor/ConfigAccessorTest.php");
    }
}
