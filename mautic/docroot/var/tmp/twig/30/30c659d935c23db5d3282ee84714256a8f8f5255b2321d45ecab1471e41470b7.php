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

/* @bundles/CoreBundle/Update/Step/FinalizeUpdateStep.php */
class __TwigTemplate_065582f2fa8545fd6065f2cb1241cf8082a89a2449ed3e0727b6e9178d87ce10 extends Template
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

use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Translation\\TranslatorInterface;

final class FinalizeUpdateStep implements StepInterface
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var PathsHelper
     */
    private \$pathsHelper;

    /**
     * @var Session
     */
    private \$session;

    /**
     * @var AppVersion
     */
    private \$appVersion;

    public function __construct(TranslatorInterface \$translator, PathsHelper \$pathsHelper, Session \$session, AppVersion \$appVersion)
    {
        \$this->translator  = \$translator;
        \$this->pathsHelper = \$pathsHelper;
        \$this->session     = \$session;
        \$this->appVersion  = \$appVersion;
    }

    public function getOrder(): int
    {
        return 60;
    }

    public function shouldExecuteInFinalStage(): bool
    {
        return true;
    }

    public function execute(ProgressBar \$progressBar, InputInterface \$input, OutputInterface \$output): void
    {
        \$progressBar->setMessage(\$this->translator->trans('mautic.core.update.step.wrapping_up'));
        \$progressBar->advance();

        // Clear the cached update data and the download package now that we've updated
        @unlink(\$this->pathsHelper->getRootPath().'/upgrade.php');
        @unlink(\$this->pathsHelper->getCachePath().'/lastUpdateCheck.txt');

        // Update successful
        \$progressBar->setMessage(
            \$this->translator->trans('mautic.core.update.update_successful', ['%version%' => \$this->appVersion->getVersion()]).\"\\n\\n\"
        );
        \$progressBar->finish();

        // Check for a post install message from migrations
        if (\$postMessage = \$this->session->get('post_upgrade_message')) {
            \$postMessage = strip_tags(\$postMessage);
            \$this->session->remove('post_upgrade_message');
            \$output->writeln(\"\\n\\n<info>\$postMessage</info>\");
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Update/Step/FinalizeUpdateStep.php";
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
        return new Source("", "@bundles/CoreBundle/Update/Step/FinalizeUpdateStep.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Update/Step/FinalizeUpdateStep.php");
    }
}
