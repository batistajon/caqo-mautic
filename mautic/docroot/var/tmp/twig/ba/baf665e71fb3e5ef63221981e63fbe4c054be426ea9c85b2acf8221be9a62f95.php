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

/* @bundles/LeadBundle/Form/Type/LeadImportType.php */
class __TwigTemplate_16f0e7362acb3d60355c546648177c05b367d2ec49b98748723b0d1d1c42ab7e extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Validator\\Constraints\\FileEncoding as EncodingValidation;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\File;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class LeadImportType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'file',
            FileType::class,
            [
                'label' => 'mautic.lead.import.file',
                'attr'  => [
                    'accept' => '.csv',
                    'class'  => 'form-control',
                ],
                'constraints' => [
                    new File(
                        [
                            'mimeTypes'        => ['text/*', 'application/octet-stream', 'application/csv'],
                            'mimeTypesMessage' => 'mautic.core.invalid_file_type',
                        ]
                    ),
                    new EncodingValidation(
                        [
                            'encodingFormat'        => ['UTF-8'],
                            'encodingFormatMessage' => 'mautic.core.invalid_file_encoding',
                        ]
                    ),
                    new NotBlank(
                        ['message' => 'mautic.import.file.required']
                    ),
                ],
                'error_bubbling' => true,
            ]
        );

        \$constraints = [
            new NotBlank(
                ['message' => 'mautic.core.value.required']
            ),
        ];

        \$default = (empty(\$options['data']['delimiter'])) ? ',' : htmlspecialchars(\$options['data']['delimiter']);
        \$builder->add(
            'delimiter',
            TextType::class,
            [
                'label' => 'mautic.lead.import.delimiter',
                'attr'  => [
                    'class' => 'form-control',
                ],
                'data'        => \$default,
                'constraints' => \$constraints,
            ]
        );

        \$default = (empty(\$options['data']['enclosure'])) ? '&quot;' : htmlspecialchars(\$options['data']['enclosure']);
        \$builder->add(
            'enclosure',
            TextType::class,
            [
                'label' => 'mautic.lead.import.enclosure',
                'attr'  => [
                    'class' => 'form-control',
                ],
                'data'        => \$default,
                'constraints' => \$constraints,
            ]
        );

        \$default = (empty(\$options['data']['escape'])) ? '\\\\' : \$options['data']['escape'];
        \$builder->add(
            'escape',
            TextType::class,
            [
                'label' => 'mautic.lead.import.escape',
                'attr'  => [
                    'class' => 'form-control',
                ],
                'data'        => \$default,
                'constraints' => \$constraints,
            ]
        );

        \$default = (empty(\$options['data']['batchlimit'])) ? 100 : (int) \$options['data']['batchlimit'];
        \$builder->add(
            'batchlimit',
            TextType::class,
            [
                'label' => 'mautic.lead.import.batchlimit',
                'attr'  => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.lead.import.batchlimit_tooltip',
                ],
                'data'        => \$default,
                'constraints' => \$constraints,
            ]
        );

        \$builder->add(
            'start',
            SubmitType::class,
            [
                'attr' => [
                    'class'   => 'btn btn-primary',
                    'icon'    => 'fa fa-upload',
                    'onclick' => \"mQuery(this).prop('disabled', true); mQuery('form[name=\\'lead_import\\']').submit();\",
                ],
                'label' => 'mautic.lead.import.upload',
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'lead_import';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/LeadImportType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/LeadImportType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/LeadImportType.php");
    }
}
