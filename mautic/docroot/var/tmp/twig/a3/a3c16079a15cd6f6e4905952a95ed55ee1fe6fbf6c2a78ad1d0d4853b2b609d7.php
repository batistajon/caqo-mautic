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

/* @bundles/CoreBundle/EventListener/DoctrineGeneratedColumnsListener.php */
class __TwigTemplate_cedadb3931d2e6d2fb1180b6bc6734b3085b16b4a86edd782f20665105f23a4f extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Doctrine\\ORM\\Tools\\Event\\GenerateSchemaEventArgs;
use Mautic\\CoreBundle\\Doctrine\\Provider\\GeneratedColumnsProviderInterface;
use Mautic\\CoreBundle\\Doctrine\\Type\\GeneratedType;
use Psr\\Log\\LoggerInterface;

class DoctrineGeneratedColumnsListener
{
    /**
     * @var GeneratedColumnsProviderInterface
     */
    protected \$generatedColumnsProvider;

    /**
     * @var LoggerInterface
     */
    protected \$logger;

    public function __construct(GeneratedColumnsProviderInterface \$generatedColumnsProvider, LoggerInterface \$logger)
    {
        \$this->generatedColumnsProvider = \$generatedColumnsProvider;
        \$this->logger                   = \$logger;
    }

    public function postGenerateSchema(GenerateSchemaEventArgs \$args): void
    {
        \$schema           = \$args->getSchema();
        \$generatedColumns = \$this->generatedColumnsProvider->getGeneratedColumns();

        foreach (\$generatedColumns as \$generatedColumn) {
            try {
                if (!\$schema->hasTable(\$generatedColumn->getTableName())) {
                    continue;
                }

                \$table = \$schema->getTable(\$generatedColumn->getTableName());

                if (\$table->hasColumn(\$generatedColumn->getColumnName())) {
                    continue;
                }

                \$table->addColumn(
                    \$generatedColumn->getColumnName(),
                    GeneratedType::GENERATED,
                    [
                        'columnDefinition' => \$generatedColumn->getColumnDefinition(),
                        'notNull'          => false,
                    ]
                );

                \$table->addIndex(\$generatedColumn->getIndexColumns(), \$generatedColumn->getIndexName());
            } catch (\\Exception \$e) {
                //table doesn't exist or something bad happened so oh well
                \$this->logger->error('SCHEMA ERROR: '.\$e->getMessage());
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/DoctrineGeneratedColumnsListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/DoctrineGeneratedColumnsListener.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/EventListener/DoctrineGeneratedColumnsListener.php");
    }
}
