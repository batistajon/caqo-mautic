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

/* @bundles/LeadBundle/Segment/Query/QueryException.php */
class __TwigTemplate_afd13d775c00042ef2ea06dc5eeccd83670ffcc41e819a266d1cfd71ab34d82a extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Query;

use Doctrine\\DBAL\\DBALException;

/**
 * @since 2.1.4
 */
class QueryException extends DBALException
{
    /**
     * @param \$alias
     * @param \$registeredAliases
     *
     * @return QueryException
     */
    public static function unknownAlias(\$alias, \$registeredAliases)
    {
        return new self(\"The given alias '\".\$alias.\"' is not part of \".
            'any FROM or JOIN clause table. The currently registered '.
            'aliases are: '.implode(', ', \$registeredAliases).'.');
    }

    /**
     * @param \$alias
     * @param \$registeredAliases
     *
     * @return QueryException
     */
    public static function nonUniqueAlias(\$alias, \$registeredAliases)
    {
        return new self(\"The given alias '\".\$alias.\"' is not unique \".
            'in FROM and JOIN clause table. The currently registered '.
            'aliases are: '.implode(', ', \$registeredAliases).'.');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Query/QueryException.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/QueryException.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Query/QueryException.php");
    }
}
