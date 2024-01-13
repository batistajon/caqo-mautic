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

/* @bundles/LeadBundle/Helper/Progress.php */
class __TwigTemplate_7644437081a2f5a36cb6ce652ba9e70fbb52ce22e7112d553a19bc791d56f64e extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\CoreBundle\\Helper\\ProgressBarHelper;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class Progress
{
    /**
     * Total number of items representing 100%.
     *
     * @var int
     */
    protected \$total = 0;

    /**
     * Currently proccessed items.
     *
     * @var int
     */
    protected \$done = 0;

    /**
     * @var OutputInterface|null
     */
    protected \$output;

    /**
     * @var ProgressBar|null
     */
    protected \$bar;

    public function __construct(OutputInterface \$output = null)
    {
        \$this->output = \$output;
    }

    /**
     * Returns count of all items.
     *
     * @return int
     */
    public function getTotal()
    {
        return \$this->total;
    }

    /**
     * Set total value.
     *
     * @param int \$total
     *
     * @return Progress
     */
    public function setTotal(\$total)
    {
        \$this->total = (int) \$total;

        if (\$this->output) {
            \$this->bar = ProgressBarHelper::init(\$this->output, \$this->total);
            \$this->bar->start();
        }

        return \$this;
    }

    /**
     * Returns count of processed items.
     *
     * @return int
     */
    public function getDone()
    {
        return \$this->done;
    }

    /**
     * Set total value.
     *
     * @return Progress
     */
    public function setDone(\$done)
    {
        \$this->done = (int) \$done;

        if (\$this->bar) {
            \$this->bar->setProgress(\$this->done);

            if (\$this->isFinished()) {
                \$this->bar->finish();
                \$this->output->writeln('');
            }
        }

        return \$this;
    }

    /**
     * Increase done count by 1.
     *
     * @return Progress
     */
    public function increase()
    {
        \$this->setDone(\$this->done + 1);

        return \$this;
    }

    /**
     * Checked if the progress is 100 or more %.
     *
     * @return bool
     */
    public function isFinished()
    {
        return \$this->done >= \$this->total;
    }

    /**
     * Bind Progress from simple array.
     *
     * @return Progress
     */
    public function bindArray(array \$progress)
    {
        if (isset(\$progress[0])) {
            \$this->setDone(\$progress[0]);
        }

        if (isset(\$progress[1])) {
            \$this->setTotal(\$progress[1]);
        }

        return \$this;
    }

    /**
     * Convert this object to a simple array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            \$this->done,
            \$this->total,
        ];
    }

    /**
     * Counts percentage of the progress.
     *
     * @return int
     */
    public function toPercent()
    {
        return (\$this->total) ? ceil((\$this->done / \$this->total) * 100) : 100;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Helper/Progress.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/Progress.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Helper/Progress.php");
    }
}
