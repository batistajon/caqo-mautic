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

/* @bundles/LeadBundle/Model/DefaultValueTrait.php */
class __TwigTemplate_e6b8ac67d6a9f858a181a818620279d37829d32d20557fe8ec868ef9d9db97a8 extends Template
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

namespace Mautic\\LeadBundle\\Model;

use Mautic\\LeadBundle\\Entity\\CustomFieldEntityInterface;

trait DefaultValueTrait
{
    /**
     * @param        \$entity
     * @param string \$object
     */
    protected function setEntityDefaultValues(CustomFieldEntityInterface \$entity, \$object = 'lead')
    {
        if (!\$entity->getId()) {
            /** @var FieldModel \$fieldModel */
            \$fields = \$this->leadFieldModel->getFieldListWithProperties(\$object);
            foreach (\$fields as \$alias => \$field) {
                // Prevent defaults from overwriting values already set
                \$value = \$entity->getFieldValue(\$alias);

                if ((null === \$value || '' === \$value) && '' !== \$field['defaultValue'] && null !== \$field['defaultValue']) {
                    \$entity->addUpdatedField(\$alias, \$field['defaultValue']);
                }
            }
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
        return "@bundles/LeadBundle/Model/DefaultValueTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Model/DefaultValueTrait.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Model/DefaultValueTrait.php");
    }
}
