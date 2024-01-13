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

/* @bundles/PluginBundle/Entity/PluginRepository.php */
class __TwigTemplate_002adff799e5dd6341889358f29b30b335af1181947199b3e236e117cdd7feef extends Template
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

namespace Mautic\\PluginBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * Class PluginRepository.
 */
class PluginRepository extends CommonRepository
{
    /**
     * Find an addon record by bundle name.
     *
     * @param string \$bundle
     *
     * @return mixed
     *
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function findByBundle(\$bundle)
    {
        \$q = \$this->createQueryBuilder(\$this->getTableAlias());
        \$q->where(\$q->expr()->eq('p.bundle', ':bundle'))
            ->setParameter('bundle', \$bundle);

        return \$q->getQuery()->getOneOrNullResult();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntities(array \$args = [])
    {
        \$q = \$this->_em->createQueryBuilder();
        \$q->select(\$this->getTableAlias())
            ->from('MauticPluginBundle:Plugin', \$this->getTableAlias(), (!empty(\$args['index'])) ? \$this->getTableAlias().'.'.\$args['index'] : \$this->getTableAlias().'.id');

        \$args['qb']               = \$q;
        \$args['ignore_paginator'] = true;

        return parent::getEntities(\$args);
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultOrder()
    {
        return [
            ['p.name', 'ASC'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTableAlias()
    {
        return 'p';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Entity/PluginRepository.php";
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
        return new Source("", "@bundles/PluginBundle/Entity/PluginRepository.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Entity/PluginRepository.php");
    }
}
