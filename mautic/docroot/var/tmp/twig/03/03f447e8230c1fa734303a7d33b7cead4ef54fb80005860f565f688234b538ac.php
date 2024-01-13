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

/* @bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumns.php */
class __TwigTemplate_418071cfc468f58f0fbd62a270b5fe10606be52b0c34f8717abd501de3f61d25 extends Template
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

final class GeneratedColumns implements GeneratedColumnsInterface
{
    /**
     * @var int
     */
    private \$position = 0;

    /**
     * Simple array of generated columns.
     *
     * @var array
     */
    private \$generatedColumns = [];

    /**
     * Array structure holding the generated columns that allows to
     * search by date column and unit without need for a loop.
     *
     * @var array
     */
    private \$dateColumnIndex = [];

    public function add(GeneratedColumn \$generatedColumn): void
    {
        \$this->generatedColumns[] = \$generatedColumn;

        if (\$generatedColumn->getOriginalDateColumn() && \$generatedColumn->getTimeUnit()) {
            if (!isset(\$this->dateColumnIndex[\$generatedColumn->getOriginalDateColumn()])) {
                \$this->dateColumnIndex[\$generatedColumn->getOriginalDateColumn()] = [];
            }

            \$this->dateColumnIndex[\$generatedColumn->getOriginalDateColumn()][\$generatedColumn->getTimeUnit()] = \$generatedColumn;
        }
    }

    public function getForOriginalDateColumnAndUnit(string \$originalDateColumn, string \$unit): GeneratedColumnInterface
    {
        if (isset(\$this->dateColumnIndex[\$originalDateColumn][\$unit])) {
            return \$this->dateColumnIndex[\$originalDateColumn][\$unit];
        }

        throw new \\UnexpectedValueException(\"Generated column for original date column {\$originalDateColumn} with unit {\$unit} does not exist.\");
    }

    public function rewind()
    {
        \$this->position = 0;
    }

    public function current()
    {
        return \$this->generatedColumns[\$this->position];
    }

    public function key()
    {
        return \$this->position;
    }

    public function next()
    {
        ++\$this->position;
    }

    public function valid()
    {
        return isset(\$this->generatedColumns[\$this->position]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumns.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumns.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumns.php");
    }
}
