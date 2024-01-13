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

/* @bundles/LeadBundle/Form/DataTransformer/FieldFilterTransformer.php */
class __TwigTemplate_eb6db99b4b3b07c437c2ef57b92a08415f0d833899cd348d44838b2dcd93f043 extends Template
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

namespace Mautic\\LeadBundle\\Form\\DataTransformer;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class FieldFilterTransformer implements DataTransformerInterface
{
    /**
     * @var string[]
     */
    private \$relativeDateStrings;

    /**
     * @var array
     */
    private \$default;

    public function __construct(TranslatorInterface \$translator, array \$default = [])
    {
        \$this->relativeDateStrings = LeadListRepository::getRelativeDateTranslationKeys();
        foreach (\$this->relativeDateStrings as &\$string) {
            \$string = \$translator->trans(\$string);
        }
        \$this->default = \$default;
    }

    /**
     * From DB format to form format.
     *
     * @param mixed \$rawFilters
     *
     * @return array|mixed
     */
    public function transform(\$rawFilters)
    {
        if (!is_array(\$rawFilters)) {
            return [];
        }

        foreach (\$rawFilters as \$k => \$f) {
            if (!empty(\$this->default)) {
                \$rawFilters[\$k] = array_merge(\$this->default, \$rawFilters[\$k]);
            }
            if ('datetime' === \$f['type']) {
                \$bcFilter = \$f['filter'] ?? '';
                \$filter   = \$f['properties']['filter'] ?? \$bcFilter;
                if (empty(\$filter) || in_array(\$filter, \$this->relativeDateStrings) || stristr(\$filter[0], '-') || stristr(\$filter[0], '+')) {
                    continue;
                }

                \$dt = new DateTimeHelper(\$filter, 'Y-m-d H:i');

                \$rawFilters[\$k]['properties']['filter'] = \$dt->toLocalString();
            }
        }

        return \$rawFilters;
    }

    /**
     * Form format to database format.
     *
     * @param mixed \$rawFilters
     *
     * @return array|mixed
     */
    public function reverseTransform(\$rawFilters)
    {
        if (!is_array(\$rawFilters)) {
            return [];
        }

        \$rawFilters = array_values(\$rawFilters);

        foreach (\$rawFilters as \$k => \$f) {
            if ('datetime' == \$f['type']) {
                \$bcFilter = \$f['filter'] ?? '';
                \$filter   = \$f['properties']['filter'] ?? \$bcFilter;
                if (empty(\$filter) || in_array(\$filter, \$this->relativeDateStrings) || stristr(\$filter[0], '-') || stristr(\$filter[0], '+')) {
                    continue;
                }

                \$dt = new DateTimeHelper(\$filter, 'Y-m-d H:i', 'local');

                \$rawFilters[\$k]['properties']['filter'] = \$dt->toUtcString();
            }
        }

        return \$rawFilters;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/DataTransformer/FieldFilterTransformer.php";
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
        return new Source("", "@bundles/LeadBundle/Form/DataTransformer/FieldFilterTransformer.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/DataTransformer/FieldFilterTransformer.php");
    }
}
