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

/* @bundles/CoreBundle/Model/IteratorExportDataModel.php */
class __TwigTemplate_fb1c313df8b83089ece6a0edab7d0565617cf85f6885000562f749c5e65ad1cb extends Template
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

namespace Mautic\\CoreBundle\\Model;

use Mautic\\CoreBundle\\Helper\\DataExporterHelper;

class IteratorExportDataModel implements \\Iterator
{
    private \$position;
    private \$model;
    private \$args;
    private \$callback;
    private \$total;
    private \$data;
    private \$totalResult;

    public function __construct(AbstractCommonModel \$model, \$args, callable \$callback)
    {
        \$this->model       = \$model;
        \$this->args        = \$args;
        \$this->callback    = \$callback;
        \$this->position    = 0;
        \$this->total       = 0;
        \$this->totalResult = 0;
        \$this->data        = 0;
    }

    /**
     * Return the current element.
     *
     * @see http://php.net/manual/en/iterator.current.php
     *
     * @return mixed Can return any type
     *
     * @since 5.0.0
     */
    public function current()
    {
        return \$this->data[\$this->position];
    }

    /**
     * Move forward to next element.
     *
     * @see http://php.net/manual/en/iterator.next.php
     * @since 5.0.0
     */
    public function next()
    {
        ++\$this->position;
        if (\$this->position === \$this->totalResult) {
            \$data              = new DataExporterHelper();
            \$this->data        = \$data->getDataForExport(\$this->total, \$this->model, \$this->args, \$this->callback);
            \$this->totalResult = \$this->data ? count(\$this->data) : 0;
            \$this->total       = \$this->total + \$this->totalResult;
            \$this->position    = 0;
        }
    }

    /**
     * Return the key of the current element.
     *
     * @see http://php.net/manual/en/iterator.key.php
     *
     * @return mixed scalar on success, or null on failure
     *
     * @since 5.0.0
     */
    public function key()
    {
        return \$this->position;
    }

    /**
     * Checks if current position is valid.
     *
     * @see http://php.net/manual/en/iterator.valid.php
     *
     * @return bool The return value will be casted to boolean and then evaluated.
     *              Returns true on success or false on failure
     *
     * @since 5.0.0
     */
    public function valid()
    {
        if (\$this->position <= \$this->totalResult && !is_null(\$this->data)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Rewind the Iterator to the first element.
     *
     * @see http://php.net/manual/en/iterator.rewind.php
     * @since 5.0.0
     */
    public function rewind()
    {
        \$data              = new DataExporterHelper();
        \$this->data        = \$data->getDataForExport(\$this->total, \$this->model, \$this->args, \$this->callback);
        \$this->totalResult = \$this->data ? count(\$this->data) : 0;
        \$this->total       = \$this->total + \$this->totalResult;
        \$this->position    = 0;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Model/IteratorExportDataModel.php";
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
        return new Source("", "@bundles/CoreBundle/Model/IteratorExportDataModel.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Model/IteratorExportDataModel.php");
    }
}
