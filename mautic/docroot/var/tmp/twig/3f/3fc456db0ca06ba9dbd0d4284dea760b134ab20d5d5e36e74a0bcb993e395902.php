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

/* @bundles/CoreBundle/Model/VariantModelTrait.php */
class __TwigTemplate_32f221d18fe609e7fa4ddfb30c79f62ec449f2e9f0494bde5a26d0be5a0892f3 extends Template
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

namespace Mautic\\CoreBundle\\Model;

use Mautic\\CoreBundle\\Entity\\TranslationEntityInterface;
use Mautic\\CoreBundle\\Entity\\VariantEntityInterface;

/**
 * Class VariantModelTrait.
 */
trait VariantModelTrait
{
    /**
     * @var bool
     */
    protected \$inConversion = false;

    /**
     * Converts a variant to the main item and the original main item a variant.
     */
    public function convertVariant(VariantEntityInterface \$entity)
    {
        //let saveEntities() know it does not need to set variant start dates
        \$this->inConversion = true;

        list(\$parent, \$children) = \$entity->getVariants();

        \$save = [];

        //set this email as the parent for the original parent and children
        if (\$parent) {
            if (\$parent->getId() != \$entity->getId()) {
                if (method_exists(\$parent, 'setIsPublished')) {
                    \$parent->setIsPublished(false);
                }

                \$entity->addVariantChild(\$parent);
                \$parent->setVariantParent(\$entity);
            }

            \$parent->setVariantStartDate(null);
            \$parent->setVariantSentCount(0);

            foreach (\$children as \$child) {
                //capture child before it's removed from collection
                \$save[] = \$child;

                \$parent->removeVariantChild(\$child);
            }
        }

        if (count(\$save)) {
            foreach (\$save as \$child) {
                if (\$child->getId() != \$entity->getId()) {
                    if (method_exists(\$child, 'setIsPublished')) {
                        \$child->setIsPublished(false);
                    }

                    \$entity->addVariantChild(\$child);
                    \$child->setVariantParent(\$entity);
                } else {
                    \$child->removeVariantParent();
                }

                \$child->setVariantSentCount(0);
                \$child->setVariantStartDate(null);
            }
        }

        \$save[] = \$parent;
        \$save[] = \$entity;

        //save the entities
        \$this->saveEntities(\$save, false);
    }

    /**
     * Prepare a variant for saving.
     *
     * @param array \$resetVariantCounterMethods ['setVariantHits', 'setVariantSends', ...]
     */
    protected function preVariantSaveEntity(VariantEntityInterface \$entity, array \$resetVariantCounterMethods = [], \\DateTime \$variantStartDate = null)
    {
        \$isVariant = \$entity->isVariant();

        if (!\$isVariant && \$entity instanceof TranslationEntityInterface) {
            // Translations could be assigned to a variant and thus applicable to be reset
            if (\$translationParent = \$entity->getTranslationParent()) {
                \$isVariant = \$translationParent->isVariant();
            }
        }

        if (\$isVariant) {
            // Reset the variant hit and start date if there are any changes and if this is an A/B test
            // Do it here in addition to postVariantSave() so that it's available to the event listeners
            \$changes = \$entity->getChanges();

            // If unpublished and wasn't changed from published - don't reset
            if (!\$entity->isPublished(false) && (!isset(\$changes['isPublished']))) {
                return false;
            }

            // Reset the variant
            if (!empty(\$changes) && empty(\$this->inConversion)) {
                if (method_exists(\$entity, 'setVariantStartDate')) {
                    \$entity->setVariantStartDate(\$variantStartDate);
                }

                // Reset counters
                foreach (\$resetVariantCounterMethods as \$method) {
                    if (method_exists(\$entity, \$method)) {
                        \$entity->\$method(0);
                    }
                }

                return true;
            }
        }

        return false;
    }

    /**
     * Run post saving a variant aware entity.
     *
     * @param bool  \$resetVariants
     * @param array \$relatedIds
     */
    protected function postVariantSaveEntity(VariantEntityInterface \$entity, \$resetVariants = false, \$relatedIds = [], \\DateTime \$variantStartDate = null)
    {
        // If parent, add this entity as a child of the parent so that it populates the list in the tab (due to Doctrine hanging on to entities in memory)
        if (\$parent = \$entity->getVariantParent()) {
            \$parent->addVariantChild(\$entity);
        }

        // Reset associated variants if applicable due to changes
        if (\$resetVariants && empty(\$this->inConversion)) {
            \$this->resetVariants(\$entity, \$relatedIds, \$variantStartDate);
        }
    }

    /**
     * @param           \$entity
     * @param           \$relatedIds
     * @param \\DateTime \$variantStartDate
     */
    protected function resetVariants(\$entity, \$relatedIds = null, \\DateTime \$variantStartDate = null)
    {
        \$repo = \$this->getRepository();

        if (method_exists(\$repo, 'resetVariants')) {
            if (null == \$relatedIds) {
                \$relatedIds = \$entity->getRelatedEntityIds();
            }

            if (!in_array(\$entity->getId(), \$relatedIds)) {
                \$relatedIds[] = \$entity->getId();
            }

            if (null === \$variantStartDate) {
                \$variantStartDate = new \\DateTime();
            }

            // Ensure UTC since we're saving directly to the DB
            \$variantStartDate->setTimezone(new \\DateTimeZone('UTC'));
            \$repo->resetVariants(\$relatedIds, \$variantStartDate->format('Y-m-d H:i:s'));
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
        return "@bundles/CoreBundle/Model/VariantModelTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Model/VariantModelTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Model/VariantModelTrait.php");
    }
}
