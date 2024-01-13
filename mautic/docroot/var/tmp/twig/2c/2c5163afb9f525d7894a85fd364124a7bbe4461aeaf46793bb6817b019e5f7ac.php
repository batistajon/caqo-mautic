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

/* @bundles/CoreBundle/Entity/TranslationEntityInterface.php */
class __TwigTemplate_ac947419d3cc3539604e1d78632bb849bb18184c8f5c7827e70bd03dee2fb245 extends Template
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
 * Interface TranslationInterface.
 */
interface TranslationEntityInterface
{
    /**
     * Get translation parent.
     *
     * @return TranslationEntityInterface
     */
    public function getTranslationParent();

    /**
     * Set entity this is a translation of.
     *
     * @return mixed
     */
    public function setTranslationParent(TranslationEntityInterface \$parent = null);

    /**
     * Set this entity as a main content (remove translation parent).
     *
     * @return mixed
     */
    public function removeTranslationParent();

    /**
     * Get ArrayCollection of translated entities.
     *
     * @return ArrayCollection
     */
    public function getTranslationChildren();

    /**
     * Add entity to \$translationChildren.
     *
     * @return mixed
     */
    public function addTranslationChild(TranslationEntityInterface \$child);

    /**
     * Remove entity from \$translationChildren.
     *
     * @return mixed
     */
    public function removeTranslationChild(TranslationEntityInterface \$child);

    /**
     * Get array with entities for this translation.
     *
     * If \$onlyChildren, then return just \$children; otherwise [\$parent, \$children]
     *
     * @return array
     */
    public function getTranslations(\$onlyChildren = false);

    /**
     * @param bool \$isChild True to return if the item is a translation of a parent
     *
     * @return bool
     */
    public function isTranslation(\$isChild = false);

    /**
     * Get the language.
     *
     * @return mixed
     */
    public function getLanguage();
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/TranslationEntityInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/TranslationEntityInterface.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Entity/TranslationEntityInterface.php");
    }
}
