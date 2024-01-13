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

/* @bundles/CoreBundle/Form/DataTransformer/SecondsConversionTransformer.php */
class __TwigTemplate_2d90df4e4b2b37b3df4c100d72645d368ca264a2d1a95e4adc1fe219d7496f9e extends Template
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
 * Class SecondsConversionTransformer.
 */
class SecondsConversionTransformer implements DataTransformerInterface
{
    private \$viewFormat;

    public function __construct(\$viewFormat = 'H')
    {
        \$this->viewFormat = \$viewFormat;
    }

    /**
     * Converts to format.
     *
     * @param string|null \$value
     *
     * @return string
     */
    public function reverseTransform(\$value)
    {
        \$value = (int) \$value;

        switch (\$this->viewFormat) {
            case 'i':
                \$value *= 60;
                break;
            case 'H':
                \$value *= 3600;
                break;
            case 'd':
                \$value *= 86400;
                break;
            case 'm':
                \$value *= 2592000;
                break;
        }

        return \$value;
    }

    /**
     * Converts to seconds.
     *
     * @param string \$value
     *
     * @return string
     */
    public function transform(\$value)
    {
        \$value = (int) \$value;

        switch (\$this->viewFormat) {
            case 'i':
                \$value /= 60;
                break;
            case 'H':
                \$value /= 3600;
                break;
            case 'd':
                \$value /= 86400;
                break;
            case 'm':
                \$value /= 2592000;
                break;
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
        return "@bundles/CoreBundle/Form/DataTransformer/SecondsConversionTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/SecondsConversionTransformer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/DataTransformer/SecondsConversionTransformer.php");
    }
}
