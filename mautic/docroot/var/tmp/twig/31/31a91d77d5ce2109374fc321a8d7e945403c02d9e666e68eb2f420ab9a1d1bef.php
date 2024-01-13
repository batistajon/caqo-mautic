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

/* @bundles/ApiBundle/Serializer/Exclusion/FieldExclusionStrategy.php */
class __TwigTemplate_91e407275992b909ea49c4dc0d0358afc96e060d7de1ee9ae9051ce99b9c4819 extends Template
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

namespace Mautic\\ApiBundle\\Serializer\\Exclusion;

use JMS\\Serializer\\Context;
use JMS\\Serializer\\Exclusion\\ExclusionStrategyInterface;
use JMS\\Serializer\\Metadata\\ClassMetadata;
use JMS\\Serializer\\Metadata\\PropertyMetadata;

/**
 * Exclude specific fields at a specific level.
 */
class FieldExclusionStrategy implements ExclusionStrategyInterface
{
    /**
     * @var array
     */
    private \$fields = [];

    /**
     * @var int
     */
    private \$level;

    /**
     * @var string|null
     */
    private \$path;

    /**
     * @param int         \$level
     * @param string|null \$path
     */
    public function __construct(array \$fields, \$level = 3, \$path = null)
    {
        \$this->fields = \$fields;
        \$this->level  = (int) \$level;
        \$this->path   = \$path;
    }

    /**
     * {@inheritdoc}
     */
    public function shouldSkipClass(ClassMetadata \$metadata, Context \$navigatorContext): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function shouldSkipProperty(PropertyMetadata \$property, Context \$navigatorContext): bool
    {
        if (\$this->path) {
            \$path = implode('.', \$navigatorContext->getCurrentPath());
            if (\$path !== \$this->path) {
                return false;
            }
        }

        \$name = \$property->serializedName ?: \$property->name;
        if (!in_array(\$name, \$this->fields)) {
            return false;
        }

        // children of children or parents of chidlren will be more than 3 levels deep
        if (\$navigatorContext->getDepth() <= \$this->level) {
            return false;
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Serializer/Exclusion/FieldExclusionStrategy.php";
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
        return new Source("", "@bundles/ApiBundle/Serializer/Exclusion/FieldExclusionStrategy.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Serializer/Exclusion/FieldExclusionStrategy.php");
    }
}
