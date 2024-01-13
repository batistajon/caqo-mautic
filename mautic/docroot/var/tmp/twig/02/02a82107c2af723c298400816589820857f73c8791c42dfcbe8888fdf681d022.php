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

/* @bundles/CoreBundle/Form/DataTransformer/NullToEmptyTransformer.php */
class __TwigTemplate_5f4ec34d9ea56a8f5a2934b9a6cda41dd6bb68a0d5346e088ecc9615a6bc9bd9 extends Template
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

namespace Mautic\\CoreBundle\\Form\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;

class NullToEmptyTransformer implements DataTransformerInterface
{
    /**
     * Does not transform anything.
     *
     * @param string|null \$value
     *
     * @return string
     */
    public function transform(\$value)
    {
        return \$value;
    }

    /**
     * Transforms a null to an empty string.
     *
     * @param string \$value
     *
     * @return string
     */
    public function reverseTransform(\$value)
    {
        if (is_null(\$value)) {
            return '';
        }

        return \$value;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/DataTransformer/NullToEmptyTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/NullToEmptyTransformer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/DataTransformer/NullToEmptyTransformer.php");
    }
}
