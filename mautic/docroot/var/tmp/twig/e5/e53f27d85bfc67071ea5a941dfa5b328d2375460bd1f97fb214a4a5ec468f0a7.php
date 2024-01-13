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

/* @bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumnInterface.php */
class __TwigTemplate_211dfefad0c2308807bbf5ef0f40387a24006c41ceeee3e1982c6c8e7a70cc69 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\GeneratedColumn;

interface GeneratedColumnInterface
{
    public function getTableName(): string;

    public function getColumnName(): string;

    public function addIndexColumn(string \$indexColumn): void;

    /**
     * If set then the line chart queries will use this column for the time unit instead of the original.
     */
    public function setOriginalDateColumn(string \$originalDateColumn, string \$timeUnit): void;

    public function getOriginalDateColumn(): ?string;

    public function getTimeUnit(): string;

    public function getAlterTableSql(): string;

    public function getColumnDefinition(): string;

    public function getIndexColumns(): array;

    public function getIndexName(): string;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumnInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumnInterface.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumnInterface.php");
    }
}
