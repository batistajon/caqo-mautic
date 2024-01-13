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

/* @bundles/LeadBundle/Segment/Query/Expression/CompositeExpression.php */
class __TwigTemplate_e48c04f21d9f27b576375480fe40427a8d5a47fc42fd55421439d8c2a6b2c661 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Query\\Expression;

/**
 * Composite expression is responsible to build a group of similar expression. Mautic MOD.
 *
 * @see   www.doctrine-project.org
 * @since  2.1
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Jan Kozak <galvani78@gmail.com>
 */
class CompositeExpression implements \\Countable
{
    /**
     * Constant that represents an AND composite expression.
     */
    const TYPE_AND = 'AND';

    /**
     * Constant that represents an OR composite expression.
     */
    const TYPE_OR  = 'OR';

    /**
     * The instance type of composite expression.
     *
     * @var string
     */
    private \$type;

    /**
     * Each expression part of the composite expression.
     *
     * @var array
     */
    private \$parts = [];

    /**
     * Constructor.
     *
     * @param string \$type  instance type of composite expression
     * @param array  \$parts composition of expressions to be joined on composite expression
     */
    public function __construct(\$type, array \$parts = [])
    {
        \$this->type = \$type;

        \$this->addMultiple(\$parts);
    }

    /**
     * Adds multiple parts to composite expression.
     *
     * @return self
     */
    public function addMultiple(array \$parts = [])
    {
        foreach ((array) \$parts as \$part) {
            \$this->add(\$part);
        }

        return \$this;
    }

    /**
     * Adds an expression to composite expression.
     *
     * @param mixed \$part
     *
     * @return self
     */
    public function add(\$part)
    {
        if (!empty(\$part) || (\$part instanceof self && \$part->count() > 0)) {
            \$this->parts[] = \$part;
        }

        return \$this;
    }

    /**
     * Retrieves the amount of expressions on composite expression.
     *
     * @return int
     */
    public function count()
    {
        return count(\$this->parts);
    }

    /**
     * Retrieves the string representation of this composite expression.
     *
     * @return string
     */
    public function __toString()
    {
        if (1 === count(\$this->parts)) {
            return (string) \$this->parts[0];
        }

        return '('.implode(') '.\$this->type.' (', \$this->parts).')';
    }

    /**
     * Returns the type of this composite expression (AND/OR).
     *
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Query/Expression/CompositeExpression.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Expression/CompositeExpression.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Query/Expression/CompositeExpression.php");
    }
}
