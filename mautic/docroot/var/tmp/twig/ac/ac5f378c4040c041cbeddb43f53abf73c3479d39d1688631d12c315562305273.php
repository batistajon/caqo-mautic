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

/* @bundles/FormBundle/Validator/Constraint/FileExtensionConstraintValidator.php */
class __TwigTemplate_278533e937a1ccc6b917cecf951ef0c87c891e4b7a3a1b9f3e27a196e12d85e6 extends Template
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

namespace Mautic\\FormBundle\\Validator\\Constraint;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class FileExtensionConstraintValidator extends ConstraintValidator
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * Checks if the passed value is valid.
     *
     * @param mixed      \$value      The value that should be validated
     * @param Constraint \$constraint The constraint for the validation
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!is_array(\$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 31
        echo twig_escape_filter($this->env, ($context["forbidden"] ?? null), "html", null, true);
        echo "', '')
                ->addViolation();
        }

        \$blacklistedExtensions = \$this->coreParametersHelper->get('blacklisted_extensions');
        \$intersect             = array_intersect(\$value, \$blacklistedExtensions);
        if (\$intersect) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 39
        echo twig_escape_filter($this->env, ($context["forbidden"] ?? null), "html", null, true);
        echo "', implode(', ', \$intersect))
                ->addViolation();
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Validator/Constraint/FileExtensionConstraintValidator.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  80 => 39,  69 => 31,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/FormBundle/Validator/Constraint/FileExtensionConstraintValidator.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Validator/Constraint/FileExtensionConstraintValidator.php");
    }
}
