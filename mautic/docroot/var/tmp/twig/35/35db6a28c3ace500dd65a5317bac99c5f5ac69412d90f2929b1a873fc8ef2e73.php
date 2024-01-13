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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/ObjectIdsDAO.php */
class __TwigTemplate_ec3beb00988f51b28e61c93f4522946c58464177341d965f5bd4722c9465a21a extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;

/**
 * Holds IDs for different types of objects. Can be used for Mautic or integration objects.
 */
class ObjectIdsDAO
{
    /**
     * Expected structure:
     * [
     *      'objectA' => [12, 13],
     *      'objectB' => ['asfdaswty', 'wetegdfsd'],
     * ].
     *
     * @var array[]
     */
    private \$objects = [];

    /**
     * Expected \$cliOptions structure:
     * [
     *      'abjectA:12',
     *      'abjectA:13',
     *      'abjectB:asfdaswty',
     *      'abjectB:wetegdfsd',
     * ]
     * Simply put, an array of object types and IDs separated by colon.
     *
     * @param string[] \$cliOptions
     *
     * @return ObjectIdsDAO
     */
    public static function createFromCliOptions(array \$cliOptions): self
    {
        \$objectsIdDAO = new self();

        foreach (\$cliOptions as \$cliOption) {
            if (is_string(\$cliOption) && false !== strpos(\$cliOption, ':')) {
                \$objectsIdDAO->addObjectId(...explode(':', \$cliOption));
            }
        }

        return \$objectsIdDAO;
    }

    public function addObjectId(string \$objectType, string \$id): void
    {
        if (!isset(\$this->objects[\$objectType])) {
            \$this->objects[\$objectType] = [];
        }

        \$this->objects[\$objectType][] = \$id;
    }

    /**
     * @return string[]
     *
     * @throws ObjectNotFoundException
     */
    public function getObjectIdsFor(string \$objectType): array
    {
        if (empty(\$this->objects[\$objectType])) {
            throw new ObjectNotFoundException(\"Object {\$objectType} doesn't have any IDs to return\");
        }

        return \$this->objects[\$objectType];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/ObjectIdsDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/ObjectIdsDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/ObjectIdsDAO.php");
    }
}
