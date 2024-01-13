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

/* @bundles/ReportBundle/Form/DataTransformer/ReportFilterDataTransformer.php */
class __TwigTemplate_f0fd5c8719601e956e564757f3a82d384762c1d23745f7c55c035a89b4430960 extends Template
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

namespace Mautic\\ReportBundle\\Form\\DataTransformer;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType;

class ReportFilterDataTransformer implements DataTransformerInterface
{
    /**
     * @var string
     */
    private \$columns;

    /**
     * @param array \$columns
     */
    public function __construct(\$columns)
    {
        \$this->columns = \$columns;
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function transform(\$filters)
    {
        if (!is_array(\$filters)) {
            return [];
        }

        foreach (\$filters as &\$f) {
            if (!isset(\$this->columns[\$f['column']])) {
                // Likely being called by form.pre_set_data after post
                return \$filters;
            }
            \$type = \$this->columns[\$f['column']]['type'];
            if (in_array(\$type, ['datetime', 'time', DateTimeType::class, DateType::class, TimeType::class])) {
                \$dt         = new DateTimeHelper(\$f['value'], '', 'utc');
                \$f['value'] = \$dt->toLocalString();
            }
        }

        return \$filters;
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function reverseTransform(\$filters)
    {
        if (!is_array(\$filters)) {
            return [];
        }

        foreach (\$filters as &\$f) {
            if (!isset(\$this->columns[\$f['column']])) {
                // Likely being called by form.pre_set_data after post
                return \$filters;
            }
            \$type = \$this->columns[\$f['column']]['type'];
            if (in_array(\$type, ['datetime', 'time'])) {
                \$dt         = new DateTimeHelper(\$f['value'], '', 'local');
                \$f['value'] = \$dt->toUtcString();
            }
        }

        return \$filters;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Form/DataTransformer/ReportFilterDataTransformer.php";
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
        return new Source("", "@bundles/ReportBundle/Form/DataTransformer/ReportFilterDataTransformer.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Form/DataTransformer/ReportFilterDataTransformer.php");
    }
}
