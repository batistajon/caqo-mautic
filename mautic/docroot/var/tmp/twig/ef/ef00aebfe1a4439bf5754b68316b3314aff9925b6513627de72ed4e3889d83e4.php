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

/* @bundles/LeadBundle/Form/Type/DashboardLeadsLifetimeWidgetType.php */
class __TwigTemplate_942f9ede9eec970165e23f7135d665e1142ed8f87698678ce12315f6dae774e2 extends Template
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
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class DashboardLeadsLifetimeWidgetType extends AbstractType
{
    private \$segmentModel;

    private \$translator;

    public function __construct(ListModel \$segmentModel, TranslatorInterface \$translator)
    {
        \$this->segmentModel = \$segmentModel;
        \$this->translator   = \$translator;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$lists                                                       = \$this->segmentModel->getUserLists();
        \$segments                                                    = [];
        \$segments[\$this->translator->trans('mautic.lead.all.leads')] = 0;
        foreach (\$lists as \$list) {
            \$segments[\$list['name']] = \$list['id'];
        }

        \$builder->add('flag', ChoiceType::class, [
                'label'             => 'mautic.lead.list.filter',
                'multiple'          => true,
                'choices'           => \$segments,
                'label_attr'        => ['class' => 'control-label'],
                'attr'              => ['class' => 'form-control'],
                'required'          => false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'lead_dashboard_leads_lifetime_widget';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/DashboardLeadsLifetimeWidgetType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/DashboardLeadsLifetimeWidgetType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/DashboardLeadsLifetimeWidgetType.php");
    }
}
