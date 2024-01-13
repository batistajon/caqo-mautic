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

/* @bundles/CoreBundle/Entity/VariantEntityInterface.php */
class __TwigTemplate_a4569ad47c49ac1ef4d98e1d00dcc59d6f8f61fa240601f91193bc4228918664 extends Template
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

namespace Mautic\\CoreBundle\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;

/**
 * Interface VariantEntityInterface.
 */
interface VariantEntityInterface
{
    /**
     * Get translation parent.
     *
     * @return VariantEntityInterface
     */
    public function getVariantParent();

    /**
     * Set entity this is a translation of.
     *
     * @return mixed
     */
    public function setVariantParent(VariantEntityInterface \$parent = null);

    /**
     * Set this entity as a main content (remove translation parent).
     *
     * @return mixed
     */
    public function removeVariantParent();

    /**
     * Get ArrayCollection of translated entities.
     *
     * @return ArrayCollection
     */
    public function getVariantChildren();

    /**
     * Add entity to \$translationChildren.
     *
     * @return mixed
     */
    public function addVariantChild(VariantEntityInterface \$child);

    /**
     * Remove entity from \$translationChildren.
     *
     * @return mixed
     */
    public function removeVariantChild(VariantEntityInterface \$child);

    /**
     * Get settings array for the variant.
     *
     * @return mixed
     */
    public function getVariantSettings();

    /**
     * Get \\DateTime when a/b test went into effect.
     *
     * @return \\DateTime
     */
    public function getVariantStartDate();

    /**
     * Get all entities for variant parent/children.
     *
     * @return array[\$parent, \$children]
     */
    public function getVariants();

    /**
     * @param bool \$isChild True to return if the item is a variant of a parent
     *
     * @return bool
     */
    public function isVariant(\$isChild = false);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/VariantEntityInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/VariantEntityInterface.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Entity/VariantEntityInterface.php");
    }
}
