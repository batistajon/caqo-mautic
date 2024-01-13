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

/* @bundles/CoreBundle/Tests/Unit/Controller/AbstractFormControllerTest.php */
class __TwigTemplate_e11b7072664b104e3a1509069f53f35d09bb85744676b2b2872f61bd79765407 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Controller;

use Mautic\\CoreBundle\\Controller\\AbstractFormController;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;

class AbstractFormControllerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|AbstractFormController
     */
    private \$classFromAbstractFormController;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|ParameterBag
     */
    private \$parameterBagMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|Request
     */
    private \$requestMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|Form
     */
    private \$formMock;

    /**
     * Create a new instance from the AbstractFormController Class and creates mocks.
     */
    protected function setUp(): void
    {
        \$this->classFromAbstractFormController = new class() extends AbstractFormController {
            public function returnIsFormCancelled(Form \$form): bool
            {
                return \$this->isFormCancelled(\$form);
            }
        };
        \$this->parameterBagMock     = \$this->createMock(ParameterBag::class);
        \$this->requestMock          = \$this->createMock(Request::class);
        \$this->requestMock->request = \$this->parameterBagMock;
        \$this->formMock             = \$this->createMock(Form::class);
    }

    /**
     * Test to send a Form that does not have an array representation in request.
     */
    public function testIsFormCancelledWhenFormArrayNull(): void
    {
        \$this->parameterBagMock->method('get')
            ->with('company')
            ->willReturn(null);
        \$this->classFromAbstractFormController->setRequest(\$this->requestMock);
        \$this->formMock->method('getName')
            ->willReturn('company');
        \$isFormCancelled = \$this->classFromAbstractFormController->returnIsFormCancelled(\$this->formMock);
        \$this->assertFalse(\$isFormCancelled);
    }

    /**
     * Test to send a Form that has an array representation in request. And the cancel button was clicked.
     */
    public function testIsFormCancelledWhenCancelled(): void
    {
        \$this->parameterBagMock->method('get')
            ->with('company_merge')
            ->willReturn(['buttons' => ['cancel' => null]]);
        \$this->classFromAbstractFormController->setRequest(\$this->requestMock);
        \$this->formMock->method('getName')
            ->willReturn('company_merge');
        \$isFormCancelled = \$this->classFromAbstractFormController->returnIsFormCancelled(\$this->formMock);
        \$this->assertTrue(\$isFormCancelled);
    }

    /**
     * Test to send a Form that has an array representation in request. And the submit button was clicked.
     */
    public function testIsFormCancelledWhenNotCancelled(): void
    {
        \$this->parameterBagMock->method('get')
            ->with('company_merge')
            ->willReturn(['buttons' => ['submit' => null]]);
        \$this->classFromAbstractFormController->setRequest(\$this->requestMock);
        \$this->formMock->method('getName')
            ->willReturn('company_merge');
        \$isFormCancelled = \$this->classFromAbstractFormController->returnIsFormCancelled(\$this->formMock);
        \$this->assertFalse(\$isFormCancelled);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Controller/AbstractFormControllerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Controller/AbstractFormControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Controller/AbstractFormControllerTest.php");
    }
}
