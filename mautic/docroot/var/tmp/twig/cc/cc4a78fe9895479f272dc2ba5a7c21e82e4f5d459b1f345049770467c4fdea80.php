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

/* @bundles/LeadBundle/Model/CompanyReportData.php */
class __TwigTemplate_480b485d114e4e2a0d11f45f1e5cfed784d1ddbe0bdb3e7c5d65c6d610819219 extends Template
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

namespace Mautic\\LeadBundle\\Model;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\ReportBundle\\Event\\ReportGeneratorEvent;
use Symfony\\Component\\Translation\\TranslatorInterface;

class CompanyReportData
{
    /**
     * @var FieldModel
     */
    private \$fieldModel;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * CompanyReportData constructor.
     */
    public function __construct(FieldModel \$fieldModel, TranslatorInterface \$translator)
    {
        \$this->fieldModel = \$fieldModel;
        \$this->translator = \$translator;
    }

    /**
     * @return array
     */
    public function getCompanyData()
    {
        \$companyColumns = \$this->getCompanyColumns();
        \$companyFields  = \$this->fieldModel->getEntities([
            'filter' => [
                'force' => [
                    [
                        'column' => 'f.object',
                        'expr'   => 'like',
                        'value'  => 'company',
                    ],
                ],
            ],
        ]);

        return array_merge(\$companyColumns, \$this->getFieldColumns(\$companyFields, 'comp.'));
    }

    /**
     * @return bool
     */
    public function eventHasCompanyColumns(ReportGeneratorEvent \$event)
    {
        \$companyColumns = \$this->getCompanyData();
        foreach (\$companyColumns as \$key => \$column) {
            if (\$event->hasColumn(\$key)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return array
     */
    private function getCompanyColumns()
    {
        return [
            'comp.id' => [
                'alias' => 'comp_id',
                'label' => 'mautic.lead.report.company.company_id',
                'type'  => 'int',
                'link'  => 'mautic_company_action',
            ],
            'companies_lead.is_primary' => [
                'label' => 'mautic.lead.report.company.is_primary',
                'type'  => 'bool',
            ],
            'companies_lead.date_added' => [
                'label' => 'mautic.lead.report.company.date_added',
                'type'  => 'datetime',
            ],
        ];
    }

    /**
     * @param Field[] \$fields
     * @param string  \$prefix
     *
     * @return array
     */
    private function getFieldColumns(\$fields, \$prefix)
    {
        \$columns = [];
        foreach (\$fields as \$f) {
            switch (\$f->getType()) {
                case 'boolean':
                    \$type = 'bool';
                    break;
                case 'date':
                    \$type = 'date';
                    break;
                case 'datetime':
                    \$type = 'datetime';
                    break;
                case 'time':
                    \$type = 'time';
                    break;
                case 'url':
                    \$type = 'url';
                    break;
                case 'email':
                    \$type = 'email';
                    break;
                case 'number':
                    \$type = 'float';
                    break;
                default:
                    \$type = 'string';
                    break;
            }
            \$columns[\$prefix.\$f->getAlias()] = [
                'label' => \$this->translator->trans('mautic.report.field.company.label', ['%field%' => \$f->getLabel()]),
                'type'  => \$type,
            ];
        }

        return \$columns;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Model/CompanyReportData.php";
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
        return new Source("", "@bundles/LeadBundle/Model/CompanyReportData.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Model/CompanyReportData.php");
    }
}
