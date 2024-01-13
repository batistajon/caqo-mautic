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

/* @bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudge.php */
class __TwigTemplate_69dfd552f481d035405c7d6d8ef2680bf7f4fd1cb57f1a80f7c1dd99b2eea001 extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Sync\\SyncJudge;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InformationChangeRequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ConflictUnresolvedException;
use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\BestEvidence;
use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\FuzzyEvidence;
use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\HardEvidence;

final class SyncJudge implements SyncJudgeInterface
{
    /**
     * @param string \$mode
     *
     * @return InformationChangeRequestDAO
     *
     * @throws ConflictUnresolvedException
     */
    public function adjudicate(
        \$mode,
        InformationChangeRequestDAO \$leftChangeRequest,
        InformationChangeRequestDAO \$rightChangeRequest
    ) {
        if (\$leftChangeRequest->getNewValue() === \$rightChangeRequest->getNewValue()) {
            return \$leftChangeRequest;
        }

        switch (\$mode) {
            case SyncJudgeInterface::HARD_EVIDENCE_MODE:
                return HardEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
            case SyncJudgeInterface::BEST_EVIDENCE_MODE:
                return BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
            default:
                return FuzzyEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
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
        return "@bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudge.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudge.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudge.php");
    }
}
