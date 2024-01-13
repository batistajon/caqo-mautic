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

/* @bundles/ApiBundle/Entity/oAuth2/ClientRepository.php */
class __TwigTemplate_789b113d8c0ab31ef21b410615b4e1967d9f77d4f486523517cf81ba3a2edc42 extends Template
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

namespace Mautic\\ApiBundle\\Entity\\oAuth2;

use Doctrine\\ORM\\Tools\\Pagination\\Paginator;
use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\UserBundle\\Entity\\User;

/**
 * ClientRepository.
 */
class ClientRepository extends CommonRepository
{
    /**
     * @return array
     */
    public function getUserClients(User \$user)
    {
        \$query = \$this->createQueryBuilder(\$this->getTableAlias());

        \$query->join('c.users', 'u')
            ->where(\$query->expr()->eq('u.id', ':userId'))
            ->setParameter('userId', \$user->getId());

        return \$query->getQuery()->getResult();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntities(array \$args = [])
    {
        \$q = \$this
            ->createQueryBuilder('c');

        \$query = \$q->getQuery();

        return new Paginator(\$query);
    }

    /**
     * {@inheritdoc}
     */
    protected function addCatchAllWhereClause(\$q, \$filter)
    {
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, [
            'c.name',
            'c.redirectUris',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultOrder()
    {
        return [
            ['c.name', 'ASC'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTableAlias()
    {
        return 'c';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Entity/oAuth2/ClientRepository.php";
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
        return new Source("", "@bundles/ApiBundle/Entity/oAuth2/ClientRepository.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Entity/oAuth2/ClientRepository.php");
    }
}
