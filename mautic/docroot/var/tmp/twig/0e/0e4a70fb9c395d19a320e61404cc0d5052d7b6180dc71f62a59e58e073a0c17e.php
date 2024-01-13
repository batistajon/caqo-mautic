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

/* @bundles/ReportBundle/Scheduler/Model/SendSchedule.php */
class __TwigTemplate_544eb5411ce277e734f791e85ced3fbb0ca0e6f190002672b54c530fef78682b extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Model;

use Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayStringTransformer;
use Mautic\\EmailBundle\\Helper\\MailHelper;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Exception\\FileTooBigException;

class SendSchedule
{
    /**
     * @var MailHelper
     */
    private \$mailer;

    /**
     * @var MessageSchedule
     */
    private \$messageSchedule;

    /**
     * @var FileHandler
     */
    private \$fileHandler;

    public function __construct(
        MailHelper \$mailer,
        MessageSchedule \$messageSchedule,
        FileHandler \$fileHandler
    ) {
        \$this->mailer          = \$mailer->getMailer();
        \$this->messageSchedule = \$messageSchedule;
        \$this->fileHandler     = \$fileHandler;
    }

    /**
     * @param string \$filePath
     */
    public function send(Scheduler \$scheduler, \$csvFilePath)
    {
        \$this->mailer->reset(true);

        \$transformer = new ArrayStringTransformer();
        \$report      = \$scheduler->getReport();
        \$emails      = \$transformer->reverseTransform(\$report->getToAddress());
        \$subject     = \$this->messageSchedule->getSubject(\$report);
        \$message     = \$this->messageSchedule->getMessageForAttachedFile(\$report);

        try {
            // Try to send the CSV file as an email attachement.
            \$this->fileHandler->fileCanBeAttached(\$csvFilePath);
            \$this->mailer->attachFile(\$csvFilePath, basename(\$csvFilePath), 'text/csv');
        } catch (FileTooBigException \$e) {
            \$zipFilePath = \$this->fileHandler->zipIt(\$csvFilePath);
            try {
                // Try to send the ZIP file as an email attachement.
                \$this->fileHandler->fileCanBeAttached(\$zipFilePath);
                \$this->mailer->attachFile(\$zipFilePath, basename(\$zipFilePath), 'application/zip');
            } catch (FileTooBigException \$e) {
                // Send the ZIP file as link in the email message.
                \$this->fileHandler->moveZipToPermanentLocation(\$report, \$zipFilePath);
                \$message = \$this->messageSchedule->getMessageForLinkedFile(\$report);
            }
        }

        \$this->mailer->setTo(\$emails);
        \$this->mailer->setSubject(\$subject);
        \$this->mailer->setBody(\$message);
        \$this->mailer->parsePlainText(\$message);
        \$this->mailer->send(true);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Model/SendSchedule.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Model/SendSchedule.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Scheduler/Model/SendSchedule.php");
    }
}
