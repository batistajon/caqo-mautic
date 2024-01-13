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

/* @bundles/CoreBundle/Update/StepProvider.php */
class __TwigTemplate_c37921613da030e777cc16e0cbb68d272c0e437dc2dc8507d712e98a9e11e4fe extends Template
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

namespace Mautic\\CoreBundle\\Update;

use Mautic\\CoreBundle\\Update\\Step\\StepInterface;

class StepProvider
{
    private \$initialSteps = [];
    private \$finalSteps   = [];

    public function addStep(StepInterface \$step): void
    {
        if (\$step->shouldExecuteInFinalStage()) {
            \$this->finalSteps[] = \$step;

            return;
        }

        \$this->initialSteps[] = \$step;
    }

    /**
     * @return StepInterface[]
     */
    public function getInitialSteps(): array
    {
        return \$this->orderSteps(\$this->initialSteps);
    }

    /**
     * @return StepInterface[]
     */
    public function getFinalSteps(): array
    {
        return \$this->orderSteps(\$this->finalSteps);
    }

    /**
     * @return StepInterface[]
     */
    private function orderSteps(array \$steps): array
    {
        usort(\$steps, function (StepInterface \$step1, StepInterface \$step2) {
            if (\$step1->getOrder() === \$step2->getOrder()) {
                return 0;
            }

            return (\$step1->getOrder() < \$step2->getOrder()) ? -1 : 1;
        });

        return \$steps;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Update/StepProvider.php";
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
        return new Source("", "@bundles/CoreBundle/Update/StepProvider.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Update/StepProvider.php");
    }
}
