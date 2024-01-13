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

/* @bundles/EmailBundle/Swiftmailer/Spool/DelegatingSpool.php */
class __TwigTemplate_fea07f538f9b8c2fad9263cef5614000aa139a132c98b90689e0ecceb394e654 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Spool;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\Swiftmailer\\Transport\\TokenTransportInterface;
use Swift_Mime_SimpleMessage;

/**
 * Class DelegatingSpool
 * This class must extend \\Swift_FileSpool due to SendEmailCommand only setting recover-timeout if \$spool is an instance of \\Swift_FileSpool.
 */
class DelegatingSpool extends \\Swift_FileSpool
{
    /**
     * @var bool
     */
    private \$fileSpoolEnabled = false;

    /**
     * @var \\Swift_Transport
     */
    private \$realTransport;

    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var bool
     */
    private \$messageSpooled = false;

    /**
     * DelegatingSpool constructor.
     *
     * @throws \\Swift_IoException
     */
    public function __construct(CoreParametersHelper \$coreParametersHelper, \\Swift_Transport \$realTransport)
    {
        \$this->fileSpoolEnabled     = 'file' === \$coreParametersHelper->get('mailer_spool_type');
        \$this->realTransport        = \$realTransport;
        \$this->coreParametersHelper = \$coreParametersHelper;

        parent::__construct(\$this->getSpoolDir());
    }

    /**
     * @param string[]|null \$failedRecipients
     *
     * @throws \\Swift_IoException
     */
    public function delegateMessage(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null): int
    {
        \$this->messageSpooled = false;

        // Write to filesystem if file spooling is enabled
        if (\$this->fileSpoolEnabled) {
            \$this->messageSpooled = parent::queueMessage(\$message);

            return 1;
        }

        // Send immediately otherwise
        return (int) \$this->realTransport->send(\$message, \$failedRecipients);
    }

    public function wasMessageSpooled(): bool
    {
        return \$this->messageSpooled;
    }

    public function isTokenizationEnabled(): bool
    {
        return !\$this->fileSpoolEnabled && \$this->realTransport instanceof TokenTransportInterface;
    }

    private function getSpoolDir(): string
    {
        \$filePath = \$this->coreParametersHelper->get('mailer_spool_path');
        \$rootPath = realpath(__DIR__.'/../../../../');

        if (!\$filePath) {
            return \$rootPath.'/../var/spool';
        }

        return str_replace('%kernel.root_dir%', \$rootPath, \$filePath);
    }

    public function getRealTransport(): \\Swift_Transport
    {
        return \$this->realTransport;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Spool/DelegatingSpool.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Spool/DelegatingSpool.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Spool/DelegatingSpool.php");
    }
}
