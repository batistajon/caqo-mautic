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

/* @bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php */
class __TwigTemplate_69147fe65d8b3111627fae0b0b16ac1ad0c8c7228f798db7ea6961798d5673a9 extends Template
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

/**
 * Class ArrayStringTransformer.
 */
class ArrayStringTransformer implements DataTransformerInterface
{
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function transform(\$array)
    {
        if (null === \$array) {
            return '';
        }
        if (is_string(\$array)) {
            return \$array;
        }

        return implode(',', \$array);
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function reverseTransform(\$string)
    {
        if (!\$string) {
            return [];
        }

        return array_map('trim', explode(',', \$string));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php");
    }
}
