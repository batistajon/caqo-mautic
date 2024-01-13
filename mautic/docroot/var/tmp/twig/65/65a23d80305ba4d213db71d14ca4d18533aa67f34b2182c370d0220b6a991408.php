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

/* @bundles/LeadBundle/Form/DataTransformer/TagEntityModelTransformer.php */
class __TwigTemplate_7a9c01eca05f669d06e2c0e134901b30999442c844809b9dbc81ec765ebb1295 extends Template
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

namespace Mautic\\LeadBundle\\Form\\DataTransformer;

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\PersistentCollection;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

class TagEntityModelTransformer implements DataTransformerInterface
{
    /**
     * @var EntityManager
     */
    private \$em;

    /**
     * @var string
     */
    private \$repository;

    /**
     * @var bool
     */
    private \$isArray;

    /**
     * @param string \$repo
     * @param bool   \$isArray
     */
    public function __construct(EntityManager \$em, \$repo = '', \$isArray = false)
    {
        \$this->em         = \$em;
        \$this->repository = \$repo;
        \$this->isArray    = \$isArray;
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform(\$entity)
    {
        if (!\$this->isArray) {
            if (is_null(\$entity) || !is_object(\$entity)) {
                return '';
            }

            return \$entity->getTag();
        }

        if (is_null(\$entity) && !is_array(\$entity) && !\$entity instanceof PersistentCollection) {
            return [];
        }

        \$return = [];
        foreach (\$entity as \$e) {
            \$return[] = \$e->getTag();
        }

        return \$return;
    }

    /**
     * {@inheritdoc}
     *
     * @throws TransformationFailedException if object is not found
     */
    public function transform(\$id)
    {
        if (!\$this->isArray) {
            if (!\$id) {
                return null;
            }

            \$column = (is_numeric(\$id)) ? 'id' : 'tag';
            \$entity = \$this->em
                ->getRepository(\$this->repository)
                ->findOneBy([\$column => \$id])
            ;

            if (null === \$entity) {
                throw new TransformationFailedException(sprintf('Tag with \"%s\" does not exist!', \$id));
            }

            return \$entity;
        }

        if (empty(\$id) || !is_array(\$id)) {
            return [];
        }

        \$column = (is_numeric(\$id[0])) ? 'id' : 'tag';

        \$repo   = \$this->em->getRepository(\$this->repository);
        \$prefix = \$repo->getTableAlias();

        \$entities = \$repo->getEntities([
            'filter' => [
                'force' => [
                    [
                        'column' => \$prefix.'.'.\$column,
                        'expr'   => 'in',
                        'value'  => \$id,
                    ],
                ],
            ],
            'ignore_paginator' => true,
        ]);

        if (!count(\$entities)) {
            throw new TransformationFailedException(sprintf('Tags for \"%s\" does not exist!', implode(', ', \$id)));
        }

        return \$entities;
    }

    /**
     * Set the repository to use.
     *
     * @param string \$repo
     */
    public function setRepository(\$repo)
    {
        \$this->repository = \$repo;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/DataTransformer/TagEntityModelTransformer.php";
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
        return new Source("", "@bundles/LeadBundle/Form/DataTransformer/TagEntityModelTransformer.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/DataTransformer/TagEntityModelTransformer.php");
    }
}
