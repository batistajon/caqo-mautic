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

/* @bundles/LeadBundle/Deduplicate/Helper/MergeValueHelper.php */
class __TwigTemplate_313ea18a822d4974dc1e0b1bde26dea4a13198512bf0e666a47c8b63c04fbaf5 extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate\\Helper;

use Mautic\\LeadBundle\\Deduplicate\\Exception\\ValueNotMergeableException;

class MergeValueHelper
{
    /**
     * @param mixed \$newerValue
     * @param mixed \$olderValue
     * @param mixed \$currentValue
     * @param mixed \$defaultValue
     * @param bool  \$newIsAnonymous
     *
     * @return mixed
     *
     * @throws ValueNotMergeableException
     */
    public static function getMergeValue(\$newerValue, \$olderValue, \$currentValue = null, \$defaultValue = null, \$newIsAnonymous = false)
    {
        if (\$newerValue === \$olderValue) {
            throw new ValueNotMergeableException(\$newerValue, \$olderValue);
        }

        if (null !== \$currentValue && \$newerValue === \$currentValue) {
            throw new ValueNotMergeableException(\$newerValue, \$olderValue);
        }

        \$isDefaultValue = null !== \$defaultValue && \$newerValue === \$defaultValue;

        if (self::isNotEmpty(\$newerValue) && !(\$newIsAnonymous && \$isDefaultValue)) {
            return \$newerValue;
        }

        if (self::isNotEmpty(\$olderValue)) {
            return \$olderValue;
        }

        throw new ValueNotMergeableException(\$newerValue, \$olderValue);
    }

    /**
     * @param \$value
     *
     * @return bool
     */
    public static function isNotEmpty(\$value)
    {
        return null !== \$value && '' !== \$value;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Deduplicate/Helper/MergeValueHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/Helper/MergeValueHelper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Deduplicate/Helper/MergeValueHelper.php");
    }
}
