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

/* @bundles/LeadBundle/Form/Type/LeadListType.php */
class __TwigTemplate_09aa7c2fcb698fc3b7323eb1212517321070b5871b91644ca0f8d5f8525e520a extends Template
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

use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormTypeInterface;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class LeadListType extends AbstractType
{
    /**
     * @var ListModel
     */
    private \$segmentModel;

    public function __construct(ListModel \$segmentModel)
    {
        \$this->segmentModel = \$segmentModel;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'choices' => function (Options \$options) {
                \$lists = (empty(\$options['global_only'])) ? \$this->segmentModel->getUserLists() : \$this->segmentModel->getGlobalLists();
                \$lists = (empty(\$options['preference_center_only'])) ? \$lists : \$this->segmentModel->getPreferenceCenterLists();

                \$choices = [];
                foreach (\$lists as \$l) {
                    if (empty(\$options['preference_center_only'])) {
                        \$choices[\$l['name']] = \$l['id'];
                    } else {
                        \$choices[empty(\$l['publicName']) ? \$l['name'] : \$l['publicName']] = \$l['id'];
                    }
                }

                return \$choices;
            },
            'global_only'            => false,
            'preference_center_only' => false,
            'required'               => false,
        ]);
    }

    /**
     * @return string|FormTypeInterface|null
     */
    public function getParent()
    {
        return ChoiceType::class;
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'leadlist_choices';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/LeadListType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/LeadListType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/LeadListType.php");
    }
}
