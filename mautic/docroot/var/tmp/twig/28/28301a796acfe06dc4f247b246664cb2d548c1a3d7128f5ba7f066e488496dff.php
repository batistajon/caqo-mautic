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

/* @bundles/SmsBundle/Tests/DependencyInjection/Compiler/SmsTransportPassTest.php */
class __TwigTemplate_d46cdf6d9d769e33d50305e1eaf354a6b9acd3af1ffe05d10bfce0906e98ebf7 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\DependencyInjection\\Compiler;

use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\SmsBundle\\DependencyInjection\\Compiler\\SmsTransportPass;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class SmsTransportPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new SmsTransportPass());
        \$container
            ->register('foo')
            ->setPublic(true)
            ->setAbstract(true)
            ->addTag('mautic.sms_transport', ['alias'=>'fakeAliasDefault', 'integrationAlias' => 'fakeIntegrationDefault']);

        \$container
            ->register('chocolate')
            ->setPublic(true)
            ->setAbstract(true);

        \$container
            ->register('bar')
            ->setPublic(true)
            ->setAbstract(true)
            ->addTag('mautic.sms_transport');

        \$transport = \$this->getMockBuilder(TransportChain::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['addTransport'])
            ->getMock();

        \$container
            ->register('mautic.sms.transport_chain')
            ->setClass(get_class(\$transport))
            ->setArguments(['foo', \$this->createMock(IntegrationHelper::class)])
            ->setShared(false)
            ->setSynthetic(true)
            ->setAbstract(true);

        \$pass = new SmsTransportPass();
        \$pass->process(\$container);

        \$this->assertEquals(2, count(\$container->findTaggedServiceIds('mautic.sms_transport')));

        \$methodCalls = \$container->getDefinition('mautic.sms.transport_chain')->getMethodCalls();
        \$this->assertCount(count(\$methodCalls), \$container->findTaggedServiceIds('mautic.sms_transport'));

        // Translation string
        \$this->assertEquals('fakeAliasDefault', \$methodCalls[0][1][2]);
        // Integration name/alias
        \$this->assertEquals('fakeIntegrationDefault', \$methodCalls[0][1][3]);

        // Translation string is set as service ID by default
        \$this->assertEquals('bar', \$methodCalls[1][1][2]);
        // Integration name/alias is set to service ID by default
        \$this->assertEquals('bar', \$methodCalls[1][1][3]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Tests/DependencyInjection/Compiler/SmsTransportPassTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/DependencyInjection/Compiler/SmsTransportPassTest.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Tests/DependencyInjection/Compiler/SmsTransportPassTest.php");
    }
}
