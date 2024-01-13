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

/* @bundles/ReportBundle/Generator/ReportGenerator.php */
class __TwigTemplate_125f20e0eb4d7f1a7e914db465648a22222e1b68e2784884e5a32c0358cece79 extends Template
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

namespace Mautic\\ReportBundle\\Generator;

use Doctrine\\DBAL\\Connection;
use Mautic\\ChannelBundle\\Helper\\ChannelListHelper;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Form\\Type\\ReportType;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;

/**
 * Report generator.
 */
class ReportGenerator
{
    /**
     * @var Connection
     */
    private \$db;

    /**
     * @var EventDispatcher
     */
    private \$dispatcher;

    /**
     * @var \\Symfony\\Component\\Form\\FormFactoryInterface
     */
    private \$formFactory;

    /**
     * @var \\Mautic\\ReportBundle\\Entity\\Report
     */
    private \$entity;

    /**
     * @var string
     */
    private \$validInterface = 'Mautic\\\\ReportBundle\\\\Builder\\\\ReportBuilderInterface';

    /**
     * @var string
     */
    private \$contentTemplate;

    /**
     * @var ChannelListHelper
     */
    private \$channelListHelper;

    /**
     * ReportGenerator constructor.
     */
    public function __construct(EventDispatcherInterface \$dispatcher, Connection \$db, Report \$entity, ChannelListHelper \$channelListHelper, FormFactoryInterface \$formFactory = null)
    {
        \$this->db                = \$db;
        \$this->dispatcher        = \$dispatcher;
        \$this->formFactory       = \$formFactory;
        \$this->channelListHelper = \$channelListHelper;
        \$this->entity            = \$entity;
    }

    /**
     * Gets query.
     *
     * @param array \$options Optional options array for the query
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryBuilder
     */
    public function getQuery(array \$options = [])
    {
        \$builder = \$this->getBuilder();

        \$query = \$builder->getQuery(\$options);

        \$this->contentTemplate = \$builder->getContentTemplate();

        return \$query;
    }

    /**
     * Gets form.
     *
     * @param Report \$entity  Report Entity
     * @param array  \$options Parameters set by the caller
     *
     * @return \\Symfony\\Component\\Form\\FormInterface
     */
    public function getForm(Report \$entity, \$options)
    {
        return \$this->formFactory->createBuilder(ReportType::class, \$entity, \$options)->getForm();
    }

    /**
     * Gets the getContentTemplate path.
     *
     * @return string
     */
    public function getContentTemplate()
    {
        return \$this->contentTemplate;
    }

    /**
     * Gets report builder.
     *
     * @return \\Mautic\\ReportBundle\\Builder\\ReportBuilderInterface
     *
     * @throws \\Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException
     */
    protected function getBuilder()
    {
        \$className = '\\\\Mautic\\\\ReportBundle\\\\Builder\\\\MauticReportBuilder';

        if (!class_exists(\$className)) {
            throw new RuntimeException('The MauticReportBuilder does not exist.');
        }

        \$reflection = new \\ReflectionClass(\$className);

        if (!\$reflection->implementsInterface(\$this->validInterface)) {
            throw new RuntimeException(sprintf(\"ReportBuilders have to implement %s, and %s doesn't implement it\", \$this->validInterface, \$className));
        }

        return \$reflection->newInstanceArgs([\$this->dispatcher, \$this->db, \$this->entity, \$this->channelListHelper]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Generator/ReportGenerator.php";
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
        return new Source("", "@bundles/ReportBundle/Generator/ReportGenerator.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Generator/ReportGenerator.php");
    }
}
