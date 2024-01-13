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

/* @bundles/CoreBundle/Update/Step/DeleteCacheStep.php */
class __TwigTemplate_4e10ec83eb34e35d78ed13fee3da47674ae31083a38f695e892da96f731992bb extends Template
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

namespace Mautic\\CoreBundle\\Update\\Step;

use Mautic\\CoreBundle\\Helper\\CacheHelper;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

final class DeleteCacheStep implements StepInterface
{
    /**
     * @var CacheHelper
     */
    private \$cacheHelper;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(CacheHelper \$cacheHelper, TranslatorInterface \$translator)
    {
        \$this->cacheHelper = \$cacheHelper;
        \$this->translator  = \$translator;
    }

    public function getOrder(): int
    {
        return 30;
    }

    public function shouldExecuteInFinalStage(): bool
    {
        return false;
    }

    public function execute(ProgressBar \$progressBar, InputInterface \$input, OutputInterface \$output): void
    {
        // Clear the dev and prod cache instances to reset the system
        \$progressBar->setMessage(\$this->translator->trans('mautic.core.update.clear.cache'));
        \$progressBar->advance();

        \$this->cacheHelper->nukeCache();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Update/Step/DeleteCacheStep.php";
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
        return new Source("", "@bundles/CoreBundle/Update/Step/DeleteCacheStep.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Update/Step/DeleteCacheStep.php");
    }
}
