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

/* @bundles/PageBundle/Tests/Model/RedirectModelTest.php */
class __TwigTemplate_86375ab02ae1df758214eb05a14ddb5db62ba95dc68f1e45bee4ac85098d873d extends Template
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

namespace Mautic\\PageBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Helper\\UrlHelper;
use Mautic\\PageBundle\\Entity\\Redirect;
use Mautic\\PageBundle\\Event\\RedirectGenerationEvent;
use Mautic\\PageBundle\\Model\\RedirectModel;
use Mautic\\PageBundle\\PageEvents;
use Mautic\\PageBundle\\Tests\\PageTestAbstract;
use Symfony\\Bundle\\FrameworkBundle\\Routing\\Router;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class RedirectModelTest extends PageTestAbstract
{
    public function testCreateRedirectEntityWhenCalledReturnsRedirect()
    {
        \$redirectModel = \$this->getRedirectModel();
        \$entity        = \$redirectModel->createRedirectEntity('http://some-url.com');

        \$this->assertInstanceOf(Redirect::class, \$entity);
    }

    public function testGenerateRedirectUrlWhenCalledReturnsValidUrl()
    {
        \$redirect = new Redirect();
        \$redirect->setUrl('http://some-url.com');
        \$redirect->setRedirectId('redirect-id');

        \$redirectModel = \$this->getRedirectModel();
        \$url           = \$redirectModel->generateRedirectUrl(\$redirect);

        \$this->assertStringContainsString(\$url, 'http://some-url.com');
    }

    public function testRedirectGenerationEvent()
    {
        \$urlHelper = \$this
            ->getMockBuilder(UrlHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$model = new RedirectModel(\$urlHelper);

        \$dispatcher = new EventDispatcher();
        \$model->setDispatcher(\$dispatcher);

        \$url          = 'https://mautic.org';
        \$clickthrough = ['foo' => 'bar'];

        \$router = \$this->createMock(Router::class);
        \$router->expects(\$this->exactly(2))
            ->method('generate')
            ->willReturn(\$url);
        \$model->setRouter(\$router);

        \$redirect = new Redirect();
        \$redirect->setUrl(\$url);

        // URL should just have foo = bar in the CT
        \$url = \$model->generateRedirectUrl(\$redirect, \$clickthrough);
        \$this->assertEquals('https://mautic.org?ct=YToxOntzOjM6ImZvbyI7czozOiJiYXIiO30%3D', \$url);

        // Add the listener to append something else to the CT
        \$dispatcher->addListener(
            PageEvents::ON_REDIRECT_GENERATE,
            function (RedirectGenerationEvent \$event) {
                \$event->setInClickthrough('bar', 'foo');
            }
        );
        \$url = \$model->generateRedirectUrl(\$redirect, \$clickthrough);
        \$this->assertEquals('https://mautic.org?ct=YToyOntzOjM6ImZvbyI7czozOiJiYXIiO3M6MzoiYmFyIjtzOjM6ImZvbyI7fQ%3D%3D', \$url);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Tests/Model/RedirectModelTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Model/RedirectModelTest.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Tests/Model/RedirectModelTest.php");
    }
}
