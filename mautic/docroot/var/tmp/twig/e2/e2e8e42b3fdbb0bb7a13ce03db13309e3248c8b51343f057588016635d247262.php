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

/* @bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php */
class __TwigTemplate_64769762a33d4ba16e1f74272b555f53d7f9a646c9d54f8fc3121b307f94740d extends Template
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

namespace Mautic\\LeadBundle\\Form\\DataTransformer;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Symfony\\Component\\Form\\DataTransformerInterface;

class FieldToOrderTransformer implements DataTransformerInterface
{
    /**
     * @var LeadFieldRepository
     */
    private \$leadFieldRepository;

    public function __construct(LeadFieldRepository \$leadFieldRepository)
    {
        \$this->leadFieldRepository = \$leadFieldRepository;
    }

    /**
     * Transforms an object to an integer (order).
     *
     * @param LeadField|null \$order
     *
     * @return string
     */
    public function transform(\$order)
    {
        if (!\$order) {
            return null;
        }

        return \$this->leadFieldRepository->findOneBy(['order' => \$order]);
    }

    /**
     * Transforms a integer to an object.
     *
     * @param int \$field
     *
     * @return LeadField|null
     */
    public function reverseTransform(\$field)
    {
        if (null === \$field) {
            return 0;
        }

        return \$field->getOrder();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php";
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
        return new Source("", "@bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php");
    }
}
