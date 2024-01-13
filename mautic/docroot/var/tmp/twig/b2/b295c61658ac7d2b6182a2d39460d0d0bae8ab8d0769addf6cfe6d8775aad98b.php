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

/* @bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsFieldMappingsType.php */
class __TwigTemplate_b4b89ae344c5af1278286ac8289a7cce37665372d326055a62b203a787ae6845 extends Template
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

namespace Mautic\\IntegrationsBundle\\Form\\Type;

use Mautic\\IntegrationsBundle\\Exception\\InvalidFormOptionException;
use Mautic\\IntegrationsBundle\\Helper\\FieldFilterHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Translation\\TranslatorInterface;

class IntegrationSyncSettingsFieldMappingsType extends AbstractType
{
    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(LoggerInterface \$logger, TranslatorInterface \$translator)
    {
        \$this->logger     = \$logger;
        \$this->translator = \$translator;
    }

    /**
     * @throws InvalidFormOptionException
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        if (!is_array(\$options['objects'])) {
            throw new InvalidFormOptionException('objects must be an array');
        }

        /** @var ConfigFormSyncInterface \$integrationObject */
        \$integrationObject = \$options['integrationObject'];
        if (!\$integrationObject instanceof ConfigFormSyncInterface) {
            throw new InvalidFormOptionException('integrationObject must be an instance of ConfigFormSyncInterface');
        }

        \$fieldFilterHelper = new FieldFilterHelper(\$integrationObject);

        foreach (\$options['objects'] as \$objectName => \$objectLabel) {
            \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) use (\$integrationObject, \$objectName, \$fieldFilterHelper): void {
                \$error = null;

                try {
                    \$fieldFilterHelper->filterFieldsByPage(\$objectName, 1);
                } catch (\\Throwable \$exception) {
                    \$this->logger->debug(\$exception->getMessage(), ['exception' => \$exception]);

                    \$error = \$this->translator->trans(\$exception->getMessage());
                }

                \$form = \$event->getForm();
                \$form->add(
                    \$objectName,
                    IntegrationSyncSettingsObjectFieldMappingType::class,
                    [
                        'label'              => false,
                        'integrationFields'  => \$fieldFilterHelper->getFilteredFields(),
                        'page'               => 1,
                        'keyword'            => null,
                        'totalFieldCount'    => \$fieldFilterHelper->getTotalFieldCount(),
                        'object'             => \$objectName,
                        'integrationObject'  => \$integrationObject,
                        'error_bubbling'     => false,
                        'allow_extra_fields' => true,
                    ]
                );

                if (\$error) {
                    \$form[\$objectName]->addError(new FormError(\$error));
                }
            });
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(
            [
                'integrationObject',
                'objects',
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsFieldMappingsType.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsFieldMappingsType.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsFieldMappingsType.php");
    }
}
