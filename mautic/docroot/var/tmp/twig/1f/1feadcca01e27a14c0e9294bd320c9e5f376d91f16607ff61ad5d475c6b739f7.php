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

/* @bundles/CoreBundle/Test/DoctrineExtensions/TablePrefix.php */
class __TwigTemplate_323ed8e88bed0d61122bb2a772d65decda19ae0d1c1a76e344943d1c4f9b4571 extends Template
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

namespace Mautic\\CoreBundle\\Test\\DoctrineExtensions;

use Doctrine\\ORM\\Event\\LoadClassMetadataEventArgs;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;

class TablePrefix
{
    /**
     * @var string
     */
    protected \$prefix = '';

    /**
     * TablePrefix constructor.
     *
     * @param string \$prefix
     */
    public function __construct(\$prefix)
    {
        \$this->prefix = (string) \$prefix;
    }

    public function loadClassMetadata(LoadClassMetadataEventArgs \$eventArgs)
    {
        /** @var ClassMetadataInfo \$classMetadata */
        \$classMetadata = \$eventArgs->getClassMetadata();

        if (!\$classMetadata->isInheritanceTypeSingleTable() || \$classMetadata->getName() === \$classMetadata->rootEntityName) {
            \$table = \$classMetadata->table;

            \$this->addPrefixToIndexes(\$this->prefix, \$table, 'indexes');
            \$this->addPrefixToIndexes(\$this->prefix, \$table, 'uniqueConstraints');

            \$classMetadata->setPrimaryTable(\$table);
        }
    }

    private function addPrefixToIndexes(\$prefix, array &\$table, \$key)
    {
        if (!isset(\$table[\$key])) {
            return;
        }

        \$indexes    = &\$table[\$key];
        \$newIndexes = [];

        foreach (\$indexes as \$name => \$index) {
            \$newName              = uniqid(\$prefix.\$name);
            \$newIndexes[\$newName] = \$index;
        }

        \$table[\$key] = \$newIndexes;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Test/DoctrineExtensions/TablePrefix.php";
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
        return new Source("", "@bundles/CoreBundle/Test/DoctrineExtensions/TablePrefix.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Test/DoctrineExtensions/TablePrefix.php");
    }
}
