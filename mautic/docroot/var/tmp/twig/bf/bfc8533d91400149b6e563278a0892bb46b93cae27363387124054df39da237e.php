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

/* @bundles/FormBundle/Form/Type/FormFieldTrait.php */
class __TwigTemplate_b39cabcbcb74030d53ce19c41f3450441d1242d13821571fbb8279b6015d8c12 extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\FormBundle\\Model\\FieldModel;
use Mautic\\FormBundle\\Model\\FormModel;

trait FormFieldTrait
{
    /**
     * @var FieldModel
     */
    protected \$fieldModel;

    /**
     * @var FormModel
     */
    protected \$formModel;

    public function setFieldModel(FieldModel \$fieldModel)
    {
        \$this->fieldModel = \$fieldModel;
    }

    public function setFormModel(FormModel \$formModel)
    {
        \$this->formModel = \$formModel;
    }

    /**
     * @param      \$formId
     * @param bool \$asTokens
     *
     * @return array
     */
    protected function getFormFields(\$formId, \$asTokens = true)
    {
        \$fields   = \$this->fieldModel->getSessionFields(\$formId);
        \$viewOnly = \$this->formModel->getCustomComponents()['viewOnlyFields'];

        \$choices = [];

        foreach (\$fields as \$f) {
            if (in_array(\$f['type'], \$viewOnly)) {
                continue;
            }

            \$choices[(\$asTokens) ? '{formfield='.\$f['alias'].'}' : \$f['alias']] = \$f['label'];
        }

        return \$choices;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Form/Type/FormFieldTrait.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormFieldTrait.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Form/Type/FormFieldTrait.php");
    }
}
