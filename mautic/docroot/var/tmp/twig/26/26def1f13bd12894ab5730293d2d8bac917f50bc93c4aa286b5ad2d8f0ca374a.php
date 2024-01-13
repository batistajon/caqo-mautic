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

/* @bundles/CoreBundle/Event/GeneratedColumnsEvent.php */
class __TwigTemplate_1d4079ffb0353b6ac4e04d94f22ebce6d7a9f2777d18f20b9e5de16dfaed0164 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumns;
use Symfony\\Component\\EventDispatcher\\Event;

class GeneratedColumnsEvent extends Event
{
    /**
     * @var GeneratedColumns
     */
    private \$generatedColumns;

    public function __construct()
    {
        \$this->generatedColumns = new GeneratedColumns();
    }

    public function getGeneratedColumns(): GeneratedColumns
    {
        return \$this->generatedColumns;
    }

    public function addGeneratedColumn(GeneratedColumn \$generatedColumn): void
    {
        \$this->generatedColumns->add(\$generatedColumn);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/GeneratedColumnsEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/GeneratedColumnsEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/GeneratedColumnsEvent.php");
    }
}
