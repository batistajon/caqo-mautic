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

/* @bundles/LeadBundle/Deduplicate/DeduperTrait.php */
class __TwigTemplate_ff6e77b3911aef9ebb9485b25ece6b8720519d5f84936bba751b2edf682b6458 extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate;

use Mautic\\LeadBundle\\Model\\FieldModel;

trait DeduperTrait
{
    private \$object = 'lead';

    /**
     * @var FieldModel
     */
    private \$fieldModel;

    /**
     * @var array
     */
    private \$availableFields;

    /**
     * @return array
     */
    public function getUniqueData(array \$queryFields)
    {
        \$uniqueLeadFields    = \$this->fieldModel->getUniqueIdentifierFields(['object' => \$this->object]);
        \$uniqueLeadFieldData = [];
        \$inQuery             = array_intersect_key(\$queryFields, \$this->getAvailableFields());
        foreach (\$inQuery as \$k => \$v) {
            // Don't use empty values when checking for duplicates
            if (empty(\$v)) {
                continue;
            }

            if (array_key_exists(\$k, \$uniqueLeadFields)) {
                \$uniqueLeadFieldData[\$k] = \$v;
            }
        }

        return \$uniqueLeadFieldData;
    }

    /**
     * @return array
     */
    private function getAvailableFields()
    {
        if (null === \$this->availableFields) {
            \$this->availableFields = \$this->fieldModel->getFieldList(
                false,
                false,
                [
                    'isPublished' => true,
                    'object'      => \$this->object,
                ]
            );
        }

        return \$this->availableFields;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Deduplicate/DeduperTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/DeduperTrait.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Deduplicate/DeduperTrait.php");
    }
}
