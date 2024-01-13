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

/* @bundles/CoreBundle/Form/DataTransformer/DatetimeToStringTransformer.php */
class __TwigTemplate_038ce76ab32808835be59a45cb739f1514c1a34850cc325f5d1439803ba61e2d extends Template
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
 * Class DatetimeToStringTransformer.
 */
class DatetimeToStringTransformer implements DataTransformerInterface
{
    /**
     * @var string
     */
    private \$format;

    /**
     * @param string \$format
     */
    public function __construct(\$format = 'Y-m-d H:i')
    {
        \$this->format = \$format;
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function reverseTransform(\$value)
    {
        if (empty(\$value)) {
            return null;
        }

        \$datetime = new \\Datetime(\$value->format(\$this->format));

        return \$datetime->format(\$this->format);
    }

    /**
     * {@inheritdoc}
     *
     * @return \\DateTime
     */
    public function transform(\$value)
    {
        if (empty(\$value)) {
            return null;
        }

        return \\DateTime::createFromFormat(
            \$this->format,
            \$value
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
        return "@bundles/CoreBundle/Form/DataTransformer/DatetimeToStringTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/DatetimeToStringTransformer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/DataTransformer/DatetimeToStringTransformer.php");
    }
}
