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

/* @bundles/LeadBundle/Services/ContactColumnsDictionary.php */
class __TwigTemplate_ac577e2936b3bbc15dfae5f9f008637decb26fc6a4b762570fb84095aa1af5f7 extends Template
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

namespace Mautic\\LeadBundle\\Services;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ContactColumnsDictionary
{
    protected \$fieldModel;

    private \$translator;

    private \$coreParametersHelper;

    private \$fieldList = [];

    public function __construct(FieldModel \$fieldModel, TranslatorInterface \$translator, CoreParametersHelper \$coreParametersHelper)
    {
        \$this->fieldModel           = \$fieldModel;
        \$this->translator           = \$translator;
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * @return array
     */
    public function getColumns()
    {
        \$columns = array_flip(\$this->coreParametersHelper->get('contact_columns', []));
        \$fields  = \$this->getFields();
        foreach (\$columns as \$alias=>&\$column) {
            if (isset(\$fields[\$alias])) {
                \$column = \$fields[\$alias];
            }
        }

        return \$columns;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        if (empty(\$this->fieldList)) {
            \$this->fieldList['name']        = sprintf(
                '%s %s',
                \$this->translator->trans('mautic.core.firstname'),
                \$this->translator->trans('mautic.core.lastname')
            );
            \$this->fieldList['email']       = \$this->translator->trans('mautic.core.type.email');
            \$this->fieldList['location']    = \$this->translator->trans('mautic.lead.lead.thead.location');
            \$this->fieldList['stage']       = \$this->translator->trans('mautic.lead.stage.label');
            \$this->fieldList['points']      = \$this->translator->trans('mautic.lead.points');
            \$this->fieldList['last_active'] = \$this->translator->trans('mautic.lead.lastactive');
            \$this->fieldList['id']          = \$this->translator->trans('mautic.core.id');
            \$this->fieldList                = \$this->fieldList + \$this->fieldModel->getFieldList(false);
        }

        return \$this->fieldList;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Services/ContactColumnsDictionary.php";
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
        return new Source("", "@bundles/LeadBundle/Services/ContactColumnsDictionary.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Services/ContactColumnsDictionary.php");
    }
}
