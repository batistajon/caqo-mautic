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

/* @bundles/FormBundle/Enum/ConditionalFieldEnum.php */
class __TwigTemplate_6e1a34ea7042709f800bd9ca456ef4dd69810d00e7e61573b56363c7239cc7d5 extends Template
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

declare(strict_types=1);

namespace Mautic\\FormBundle\\Enum;

class ConditionalFieldEnum
{
    /**
     * @var string[]
     */
    private static \$conditionalFieldTypes = ['select', 'country', 'checkboxgrp', 'radiogrp'];

    /**
     * @return string[]
     */
    public static function getConditionalFieldTypes(): array
    {
        return self::\$conditionalFieldTypes;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Enum/ConditionalFieldEnum.php";
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
        return new Source("", "@bundles/FormBundle/Enum/ConditionalFieldEnum.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Enum/ConditionalFieldEnum.php");
    }
}
