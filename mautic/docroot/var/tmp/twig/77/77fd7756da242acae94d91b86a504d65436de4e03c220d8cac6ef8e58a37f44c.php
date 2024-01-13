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

/* @bundles/CoreBundle/Doctrine/Mapping/AssociationBuilder.php */
class __TwigTemplate_00dd4fef8f45b50b9ceff00ea0e3ccb872298f4cb87b0fade106f8bd6c61fded extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Mapping;

/**
 * Class AssociationBuilder.
 *
 * Override Doctrine's builder classes to add support to orphanRemoval until the fix is incorporated into Doctrine release
 * See @see https://github.com/doctrine/doctrine2/pull/1326/
 *
 * Also gives support for allowing a many-to-one to be the primary key
 */
class AssociationBuilder extends \\Doctrine\\ORM\\Mapping\\Builder\\AssociationBuilder
{
    /**
     * Set orphanRemoval.
     *
     * @param bool \$orphanRemoval
     *
     * @return AssociationBuilder
     */
    public function orphanRemoval(\$orphanRemoval = true)
    {
        \$this->mapping['orphanRemoval'] = \$orphanRemoval;

        return \$this;
    }

    /**
     * Allow a many-to-one to be the ID.
     *
     * @return \$this
     */
    public function isPrimaryKey()
    {
        \$this->mapping['id'] = true;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Mapping/AssociationBuilder.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Mapping/AssociationBuilder.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/Mapping/AssociationBuilder.php");
    }
}
