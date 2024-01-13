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

/* @bundles/CoreBundle/Form/Type/DynamicContentTrait.php */
class __TwigTemplate_60dfedadf2a070746808546b3768dedfb94bde2f2df3b5f901836357d7907012 extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Mautic\\EmailBundle\\Entity\\Email;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

trait DynamicContentTrait
{
    protected function addDynamicContentField(FormBuilderInterface \$builder)
    {
        \$builder->add(
            'dynamicContent',
            CollectionType::class,
            [
                'entry_type'         => DynamicContentFilterType::class,
                'allow_add'          => true,
                'allow_delete'       => true,
                'label'              => false,
                'entry_options'      => [
                    'label' => false,
                ],
            ]
        );

        \$builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent \$event) {
                \$data = \$event->getData();
                /** @var Email \$entity */
                \$entity = \$event->getForm()->getData();

                if (empty(\$data['dynamicContent'])) {
                    \$data['dynamicContent'] = \$entity->getDefaultDynamicContent();
                    unset(\$data['dynamicContent'][0]['filters']['filter']);
                }

                foreach (\$data['dynamicContent'] as \$key => \$dc) {
                    if (empty(\$dc['filters'])) {
                        \$data['dynamicContent'][\$key]['filters'] = \$entity->getDefaultDynamicContent()[0]['filters'];
                    }
                }

                \$event->setData(\$data);
            }
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
        return "@bundles/CoreBundle/Form/Type/DynamicContentTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/DynamicContentTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/Type/DynamicContentTrait.php");
    }
}
