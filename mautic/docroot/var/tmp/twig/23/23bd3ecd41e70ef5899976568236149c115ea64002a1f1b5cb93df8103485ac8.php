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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/RelationsDAO.php */
class __TwigTemplate_7143beda1ae4978d8804468a3b25c23ca37bcd17c569c2093e545b59f3561c3f extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync;

use Countable;
use Iterator;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\RelationDAO;

class RelationsDAO implements Iterator, Countable
{
    /**
     * @var RelationDAO[]
     */
    private \$relations = [];

    /**
     * @var int
     */
    private \$position = 0;

    /**
     * @param RelationDAO[] \$relations
     */
    public function addRelations(array \$relations): void
    {
        foreach (\$relations as \$relation) {
            \$this->addRelation(\$relation);
        }
    }

    public function addRelation(RelationDAO \$relation): void
    {
        \$this->relations[] = \$relation;
    }

    /**
     * {@inheritdoc}
     */
    public function current(): RelationDAO
    {
        return \$this->relations[\$this->position];
    }

    /**
     * {@inheritdoc}
     */
    public function next(): void
    {
        ++\$this->position;
    }

    /**
     * {@inheritdoc}
     */
    public function key(): int
    {
        return \$this->position;
    }

    /**
     * {@inheritdoc}
     */
    public function valid(): bool
    {
        return isset(\$this->relations[\$this->position]);
    }

    /**
     * {@inheritdoc}
     */
    public function rewind(): void
    {
        \$this->position = 0;
    }

    /**
     * {@inheritdoc}
     */
    public function count(): int
    {
        return count(\$this->relations);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/RelationsDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/RelationsDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/RelationsDAO.php");
    }
}
