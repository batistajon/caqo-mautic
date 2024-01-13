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

/* @bundles/CoreBundle/Form/Type/GatedVideoType.php */
class __TwigTemplate_c257dd4ab7e47cd815d6a79b781f9f4925b7e7e02188fd3ebe72451017a4dfce extends Template
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

use Mautic\\FormBundle\\Entity\\FormRepository;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class GatedVideoType extends SlotType
{
    /**
     * @var FormRepository
     */
    private \$formRepository;

    public function __construct(FormRepository \$formRepository)
    {
        \$this->formRepository = \$formRepository;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'url',
            UrlType::class,
            [
                'label'      => 'Video URL',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'gatedvideo-url',
                ],
            ]
        );

        \$builder->add(
            'gatetime',
            TextType::class,
            [
                'label'      => 'Gate Time',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'gatedvideo-gatetime',
                ],
            ]
        );

        \$builder->add(
            'formid',
            ChoiceType::class,
            [
                'label'      => 'Form',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'gatedvideo-formid',
                ],
                'placeholder' => 'Select your form',
                'choices'     => \$this->getFormChoices(),
            ]
        );

        \$builder->add(
            'width',
            TextType::class,
            [
                'label'      => 'Width',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'gatedvideo-width',
                ],
            ]
        );

        \$builder->add(
            'height',
            TextType::class,
            [
                'label'      => 'Height',
                'label_attr' => ['class' => 'control-label'],
                'required'   => true,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'gatedvideo-height',
                ],
            ]
        );

        parent::buildForm(\$builder, \$options);
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'width'  => 640,
                'height' => 320,
            ]
        );
    }

    private function getFormChoices(): array
    {
        \$formList    = \$this->formRepository->getSimpleList();
        \$formChoices = [];

        foreach (\$formList as \$formItem) {
            \$formChoices[\"{\$formItem['label']} (ID {\$formItem['value']})\"] = \$formItem['value'];
        }

        return \$formChoices;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Type/GatedVideoType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/GatedVideoType.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/Type/GatedVideoType.php");
    }
}
