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

/* @bundles/WebhookBundle/Entity/WebhookRepository.php */
class __TwigTemplate_42a51947cb3baf62d7e9777b86179bdcc9e579a3ee5e39b67295b9dc91f045c4 extends Template
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

namespace Mautic\\WebhookBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * Class WebhookRepository.
 */
class WebhookRepository extends CommonRepository
{
    /**
     * @param \\Doctrine\\ORM\\QueryBuilder|\\Doctrine\\DBAL\\Query\\QueryBuilder \$q
     * @param                                                              \$filter
     *
     * @return array
     */
    protected function addCatchAllWhereClause(\$q, \$filter)
    {
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, ['e.name']);
    }

    /**
     * @param \\Doctrine\\ORM\\QueryBuilder|\\Doctrine\\DBAL\\Query\\QueryBuilder \$q
     * @param                                                              \$filter
     *
     * @return array
     */
    protected function addSearchCommandWhereClause(\$q, \$filter)
    {
        return \$this->addStandardSearchCommandWhereClause(\$q, \$filter);
    }

    /**
     * @return array
     */
    public function getSearchCommands()
    {
        return \$this->getStandardSearchCommands();
    }

    /**
     * @return string
     */
    protected function getDefaultOrder()
    {
        return [
            [\$this->getTableAlias().'.name', 'ASC'],
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Entity/WebhookRepository.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/WebhookRepository.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Entity/WebhookRepository.php");
    }
}
