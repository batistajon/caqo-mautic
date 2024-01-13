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

/* @bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php */
class __TwigTemplate_4aa15aa06b18f8df45002886e5882745ea35fa1b79b46798a7a8d80a7a85ae84 extends Template
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

/**
 * Class PublishDetailsExclusionStrategy.
 *
 * Only include FormEntity properties for the top level entity and not the associated entities
 */
class PublishDetailsExclusionStrategy extends FieldExclusionStrategy
{
    /**
     * PublishDetailsExclusionStrategy constructor.
     */
    public function __construct()
    {
        parent::__construct(
            [
                'isPublished',
                'dateAdded',
                'createdBy',
                'dateModified',
                'modifiedBy',
                'checkedOut',
                'checkedOutBy',
            ],
            1
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
        return "@bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php";
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
        return new Source("", "@bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php");
    }
}
