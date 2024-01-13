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

/* @bundles/ApiBundle/Form/Validator/Constraints/OAuthCallbackValidator.php */
class __TwigTemplate_be73c79591e43f1461f196f62f873a9740a24346401894ae77a2d29638f10428 extends Template
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

namespace Mautic\\ApiBundle\\Form\\Validator\\Constraints;

use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class OAuthCallbackValidator extends ConstraintValidator
{
    const PATTERN = '~^[0-9a-z].*://(.*?)(:[0-9]+)?(/?|/\\S+)\$~ixu';

    /**
     * @param mixed \$value
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof OAuthCallback) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\OAuthCallback');
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedTypeException(\$value, 'string');
        }

        \$value = (string) \$value;
        if (!preg_match(static::PATTERN, \$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setParameter('";
        // line 33
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "', \$this->formatValue(\$value))
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
        return "@bundles/ApiBundle/Form/Validator/Constraints/OAuthCallbackValidator.php";
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
        return array (  71 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/ApiBundle/Form/Validator/Constraints/OAuthCallbackValidator.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Form/Validator/Constraints/OAuthCallbackValidator.php");
    }
}
