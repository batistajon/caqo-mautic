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

/* @bundles/LeadBundle/Form/Type/LeadFieldsType.php */
class __TwigTemplate_2cf984c2a6fb32eb645e61ac91f0382084b7e627eb07a90561d777be976b3cfd extends Template
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

use Mautic\\CoreBundle\\Helper\\ArrayHelper;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class LeadFieldsType extends AbstractType
{
    /**
     * @var FieldModel
     */
    protected \$fieldModel;

    public function __construct(FieldModel \$fieldModel)
    {
        \$this->fieldModel = \$fieldModel;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'choices' => function (Options \$options) {
                \$fieldList = ArrayHelper::flipArray(\$this->fieldModel->getFieldList());
                if (\$options['with_tags']) {
                    \$fieldList['Core']['mautic.lead.field.tags'] = 'tags';
                }
                if (\$options['with_company_fields']) {
                    \$fieldList['Company'] = array_flip(\$this->fieldModel->getFieldList(false, true, ['isPublished' => true, 'object' => 'company']));
                }
                if (\$options['with_utm']) {
                    \$fieldList['UTM']['mautic.lead.field.utmcampaign'] = 'utm_campaign';
                    \$fieldList['UTM']['mautic.lead.field.utmcontent']  = 'utm_content';
                    \$fieldList['UTM']['mautic.lead.field.utmmedium']   = 'utm_medium';
                    \$fieldList['UTM']['mautic.lead.field.umtsource']   = 'utm_source';
                    \$fieldList['UTM']['mautic.lead.field.utmterm']     = 'utm_term';
                }

                return \$fieldList;
            },
            'global_only'         => false,
            'required'            => false,
            'with_company_fields' => false,
            'with_tags'           => false,
            'with_utm'            => false,
        ]);
    }

    /**
     * @return string|\\Symfony\\Component\\Form\\FormTypeInterface|null
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
        return 'leadfields_choices';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/LeadFieldsType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/LeadFieldsType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/LeadFieldsType.php");
    }
}
