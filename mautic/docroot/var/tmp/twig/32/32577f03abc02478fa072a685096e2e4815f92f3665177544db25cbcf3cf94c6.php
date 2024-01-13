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

/* @bundles/LeadBundle/Segment/RandomParameterName.php */
class __TwigTemplate_6d3c1421784ba0e017a612bd4ef3236df3f5c1704f363388b0e4cea9a648d711 extends Template
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

namespace Mautic\\LeadBundle\\Segment;

class RandomParameterName
{
    /**
     * @var int
     */
    protected \$lastUsedParameterId = 0;

    /**
     * Generate a unique parameter name from int using base conversion.
     * This eliminates chance for parameter name collision and provides unique result for each number.
     *
     * @see https://stackoverflow.com/questions/307486/short-unique-id-in-php/1516430#1516430
     */
    public function generateRandomParameterName(): string
    {
        \$value = base_convert((string) \$this->lastUsedParameterId, 10, 36);

        ++\$this->lastUsedParameterId;

        return 'par'.\$value;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/RandomParameterName.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/RandomParameterName.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/RandomParameterName.php");
    }
}
