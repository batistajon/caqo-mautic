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

/* @bundles/CoreBundle/Form/DataTransformer/BarStringTransformer.php */
class __TwigTemplate_eeb4ed0e9a8f2b0c82b95922a059ce1afb2cfcdf7db6027803f41fc6062a76be extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Form\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * Transforms a bar/pipe (|) separated string to and from an array.
 * Example: \"Some text | separated by vertial bars\" is equivalent to ['Some text', 'separated by vertial bars'].
 */
class BarStringTransformer implements DataTransformerInterface
{
    public function transform(\$array): string
    {
        if (!is_array(\$array)) {
            return '';
        }

        return implode('|', \$array);
    }

    /**
     * @param mixed \$string
     *
     * @return string[]
     */
    public function reverseTransform(\$string): array
    {
        if (!is_string(\$string)) {
            return [];
        }

        return array_map(
            function (string \$element) {
                return trim(\$element);
            },
            explode('|', \$string)
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/DataTransformer/BarStringTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/BarStringTransformer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/DataTransformer/BarStringTransformer.php");
    }
}
