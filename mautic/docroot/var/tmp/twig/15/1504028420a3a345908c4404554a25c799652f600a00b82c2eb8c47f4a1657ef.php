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

/* @bundles/LeadBundle/Helper/FieldAliasHelper.php */
class __TwigTemplate_209367750cc79a81d6ede55d6df75c3d87768ff423618f2d83da4f0f6edf4a07 extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Model\\FieldModel;

class FieldAliasHelper
{
    /**
     * @var FieldModel
     */
    private \$fieldModel;

    public function __construct(FieldModel \$fieldModel)
    {
        \$this->fieldModel = \$fieldModel;
    }

    /**
     * Cleans the alias and if it's not unique it will make it unique.
     *
     * @return LeadField
     */
    public function makeAliasUnique(LeadField \$field)
    {
        // alias cannot be changed for existing fields
        if (\$field->getId()) {
            return \$field;
        }

        // set alias as name if alias is empty
        \$alias = \$field->getAlias() ?: \$field->getName();

        // clean the alias
        \$alias = \$this->fieldModel->cleanAlias(\$alias, 'f_', 25);

        // make sure alias is not already taken
        \$repo      = \$this->fieldModel->getRepository();
        \$testAlias = \$alias;
        \$aliases   = \$repo->getAliases(\$field->getId(), false, true, null);
        \$count     = (int) in_array(\$testAlias, \$aliases);
        \$aliasTag  = \$count;

        while (\$count) {
            \$testAlias = \$alias.\$aliasTag;
            \$count     = (int) in_array(\$testAlias, \$aliases);
            ++\$aliasTag;
        }

        if (\$testAlias !== \$alias) {
            \$alias = \$testAlias;
        }

        \$field->setAlias(\$alias);

        return \$field;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Helper/FieldAliasHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/FieldAliasHelper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Helper/FieldAliasHelper.php");
    }
}
