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

/* @bundles/EmailBundle/Tests/Form/Type/FormSubmitActionUserEmailTypeTest.php */
class __TwigTemplate_1cf2b1abb0d8680da3528a06419da7e412d7b7a839a3438517110467d9d21ff7 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Form\\Type;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\Form\\Type\\EmailSendType;
use Mautic\\EmailBundle\\Form\\Type\\EmailType;
use Mautic\\EmailBundle\\Form\\Type\\FormSubmitActionUserEmailType;
use Mautic\\StageBundle\\Model\\StageModel;
use Mautic\\UserBundle\\Form\\Type\\UserListType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class FormSubmitActionUserEmailTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var MockObject|EntityManager
     */
    private \$entityManager;

    /**
     * @var MockObject|StageModel
     */
    private \$stageModel;

    /**
     * @var MockObject|FormBuilderInterface
     */
    private \$formBuilder;

    /**
     * @var EmailType
     */
    private \$form;

    /**
     * @var CoreParametersHelper|MockObject
     */
    private \$coreParametersHelper;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->formBuilder          = \$this->createMock(FormBuilderInterface::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->form                 = new FormSubmitActionUserEmailType();
        \$this->formBuilder->method('create')->willReturnSelf();
    }

    public function testBuildForm(): void
    {
        \$options = [];

        \$this->formBuilder->expects(\$this->exactly(2))
            ->method('add')
            ->withConsecutive(
                [
                    'useremail',
                    EmailSendType::class,
                    [
                        'label' => 'mautic.email.emails',
                        'attr'  => [
                            'class'   => 'form-control',
                            'tooltip' => 'mautic.email.choose.emails_descr',
                        ],
                        'update_select' => 'formaction_properties_useremail_email',
                    ],
                ],
                [
                    'user_id',
                    UserListType::class,
                    [
                        'label'      => 'mautic.email.form.users',
                        'label_attr' => ['class' => 'control-label'],
                        'attr'       => [
                            'class'   => 'form-control',
                            'tooltip' => 'mautic.core.help.autocomplete',
                        ],
                        'required'    => true,
                        'constraints' => new NotBlank(
                            [
                                'message' => 'mautic.core.value.required',
                            ]
                        ),
                    ],
                ]
            );

        \$this->form->buildForm(\$this->formBuilder, \$options);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Form/Type/FormSubmitActionUserEmailTypeTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Form/Type/FormSubmitActionUserEmailTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Form/Type/FormSubmitActionUserEmailTypeTest.php");
    }
}
