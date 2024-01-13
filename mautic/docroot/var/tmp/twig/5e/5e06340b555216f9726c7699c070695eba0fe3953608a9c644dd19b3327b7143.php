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

/* @bundles/LeadBundle/Form/Type/TagType.php */
class __TwigTemplate_c6616f3d9eaecec2b4becf9725ca099001eb8c754610b8f6677473d847c67566 extends Template
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

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\EntityRepository;
use Mautic\\LeadBundle\\Entity\\Tag;
use Mautic\\LeadBundle\\Form\\DataTransformer\\TagEntityModelTransformer;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class TagType extends AbstractType
{
    /**
     * @var EntityManager
     */
    private \$em;

    public function __construct(EntityManager \$em)
    {
        \$this->em = \$em;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        if (\$options['add_transformer']) {
            \$transformer = new TagEntityModelTransformer(
                \$this->em,
                Tag::class,
                (\$options['multiple'])
            );

            \$builder->addModelTransformer(\$transformer);
        }
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'label'         => 'mautic.lead.tags',
                'class'         => 'MauticLeadBundle:Tag',
                'query_builder' => function (EntityRepository \$er) {
                    return \$er->createQueryBuilder('t')->orderBy('t.tag', 'ASC');
                },
                'choice_label'    => 'tag',
                'multiple'        => true,
                'required'        => false,
                'disabled'        => false,
                'add_transformer' => false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'lead_tag';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return EntityType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/TagType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/TagType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/TagType.php");
    }
}
