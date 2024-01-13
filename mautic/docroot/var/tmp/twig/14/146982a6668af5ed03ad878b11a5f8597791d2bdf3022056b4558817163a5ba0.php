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

/* @bundles/CoreBundle/Form/DataTransformer/SortableListTransformer.php */
class __TwigTemplate_051c6d608de0a04487d44c36866e9dd8f1ddec83cde562534f7afbcf249c0c4a extends Template
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

use Mautic\\CoreBundle\\Helper\\AbstractFormFieldHelper;
use Symfony\\Component\\Form\\DataTransformerInterface;

class SortableListTransformer implements DataTransformerInterface
{
    /**
     * @var bool
     */
    private \$withLabels = true;

    /**
     * @var bool
     */
    private \$useKeyValuePairs = false;

    /**
     * @param bool \$withLabels
     * @param bool \$atRootLevel
     */
    public function __construct(\$withLabels = true, \$useKeyValuePairs = false)
    {
        \$this->withLabels       = \$withLabels;
        \$this->useKeyValuePairs = \$useKeyValuePairs;
    }

    /**
     * @return array
     */
    public function transform(\$array)
    {
        if (\$this->useKeyValuePairs) {
            return \$this->transformKeyValuePair(\$array);
        }

        return \$this->formatList(\$array);
    }

    /**
     * @return array
     */
    public function reverseTransform(\$array)
    {
        if (\$this->useKeyValuePairs) {
            return \$this->reverseTransformKeyValuePair(\$array);
        }

        return \$this->formatList(\$array);
    }

    /**
     * @param \$array
     */
    private function formatList(\$array)
    {
        if (null === \$array || !isset(\$array['list'])) {
            return ['list' => []];
        }

        \$array['list'] = AbstractFormFieldHelper::parseList(\$array['list']);

        if (!\$this->withLabels) {
            \$array['list'] = array_keys(\$array['list']);
        }

        \$format        = (\$this->withLabels) ? AbstractFormFieldHelper::FORMAT_ARRAY : AbstractFormFieldHelper::FORMAT_SIMPLE_ARRAY;
        \$array['list'] = AbstractFormFieldHelper::formatList(\$format, \$array['list']);

        return \$array;
    }

    /**
     * @param \$array
     *
     * @return array
     */
    private function transformKeyValuePair(\$array)
    {
        if (null === \$array) {
            return ['list' => []];
        }

        \$formattedArray = [];

        foreach (\$array as \$label => \$value) {
            \$formattedArray[] = [
                'label' => \$label,
                'value' => \$value,
            ];
        }

        return ['list' => \$formattedArray];
    }

    /**
     * @param \$array
     *
     * @return array
     */
    private function reverseTransformKeyValuePair(\$array)
    {
        if (null === \$array || !isset(\$array['list'])) {
            return [];
        }

        \$pairs = [];
        foreach (\$array['list'] as \$pair) {
            if (!isset(\$pair['label'])) {
                continue;
            }

            \$pairs[\$pair['label']] = \$pair['value'];
        }

        return \$pairs;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/DataTransformer/SortableListTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/SortableListTransformer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/DataTransformer/SortableListTransformer.php");
    }
}
