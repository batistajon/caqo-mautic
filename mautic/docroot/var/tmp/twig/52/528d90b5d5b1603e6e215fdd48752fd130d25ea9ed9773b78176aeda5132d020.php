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

/* @bundles/FormBundle/Tests/Model/DeleteFormTest.php */
class __TwigTemplate_78e425207472e9d5e2b8a4c70bf6b3ecd14752fac62bb7d711de428ee9463727 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Doctrine\\Helper\\ColumnSchemaHelper;
use Mautic\\CoreBundle\\Doctrine\\Helper\\TableSchemaHelper;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\CoreBundle\\Helper\\ThemeHelperInterface;
use Mautic\\FormBundle\\Entity\\Form;
use Mautic\\FormBundle\\Entity\\FormRepository;
use Mautic\\FormBundle\\Helper\\FormFieldHelper;
use Mautic\\FormBundle\\Helper\\FormUploader;
use Mautic\\FormBundle\\Model\\ActionModel;
use Mautic\\FormBundle\\Model\\FieldModel;
use Mautic\\FormBundle\\Model\\FormModel;
use Mautic\\FormBundle\\Tests\\FormTestAbstract;
use Mautic\\LeadBundle\\Model\\FieldModel as LeadFieldModel;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class DeleteFormTest extends FormTestAbstract
{
    public function testDelete(): void
    {
        \$requestStack         = \$this->createMock(RequestStack::class);
        \$templatingHelperMock = \$this->createMock(TemplatingHelper::class);
        \$themeHelper          = \$this->createMock(ThemeHelperInterface::class);
        \$formActionModel      = \$this->createMock(ActionModel::class);
        \$formFieldModel       = \$this->createMock(FieldModel::class);
        \$fieldHelper          = \$this->createMock(FormFieldHelper::class);
        \$leadFieldModel       = \$this->createMock(LeadFieldModel::class);
        \$formUploaderMock     = \$this->createMock(FormUploader::class);
        \$contactTracker       = \$this->createMock(ContactTracker::class);
        \$columnSchemaHelper   = \$this->createMock(ColumnSchemaHelper::class);
        \$tableSchemaHelper    = \$this->createMock(TableSchemaHelper::class);
        \$entityManager        = \$this->createMock(EntityManager::class);
        \$dispatcher           = \$this->createMock(EventDispatcher::class);
        \$formRepository       = \$this->createMock(FormRepository::class);
        \$form                 = \$this->createMock(Form::class);
        \$formModel            = new FormModel(
            \$requestStack,
            \$templatingHelperMock,
            \$themeHelper,
            \$formActionModel,
            \$formFieldModel,
            \$fieldHelper,
            \$leadFieldModel,
            \$formUploaderMock,
            \$contactTracker,
            \$columnSchemaHelper,
            \$tableSchemaHelper
        );

        \$dispatcher->expects(\$this->exactly(2))
            ->method('hasListeners')
            ->withConsecutive(['mautic.form_pre_delete'], ['mautic.form_post_delete'])
            ->willReturn(false);

        \$entityManager->expects(\$this->once())
            ->method('getRepository')
            ->willReturn(\$formRepository);

        \$formModel->setDispatcher(\$dispatcher);
        \$formModel->setEntityManager(\$entityManager);

        \$form->expects(\$this->exactly(2))
            ->method('getId')
            ->with()
            ->willReturn(1);

        \$formUploaderMock->expects(\$this->once())
            ->method('deleteFilesOfForm')
            ->with(\$form);

        \$formRepository->expects(\$this->once())
            ->method('deleteEntity')
            ->with(\$form);

        \$formModel->deleteEntity(\$form);

        \$this->assertSame(1, \$form->deletedId);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/Model/DeleteFormTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Model/DeleteFormTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Model/DeleteFormTest.php");
    }
}
