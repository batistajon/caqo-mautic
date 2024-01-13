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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiFacade.php */
class __TwigTemplate_f2879e9a18f4467cb58af0b31062674f7eb8f6bdb1f93c497479e40a0eaf9c8c extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\SendGrid;

use Mautic\\EmailBundle\\Swiftmailer\\Exception\\SendGridBadLoginException;
use Mautic\\EmailBundle\\Swiftmailer\\Exception\\SendGridBadRequestException;
use Mautic\\EmailBundle\\Swiftmailer\\SwiftmailerFacadeInterface;

class SendGridApiFacade implements SwiftmailerFacadeInterface
{
    /**
     * @var SendGridWrapper
     */
    private \$sendGridWrapper;

    /**
     * @var SendGridApiMessage
     */
    private \$sendGridApiMessage;

    /**
     * @var SendGridApiResponse
     */
    private \$sendGridApiResponse;

    public function __construct(
        SendGridWrapper \$sendGridWrapper,
        SendGridApiMessage \$sendGridApiMessage,
        SendGridApiResponse \$sendGridApiResponse
    ) {
        \$this->sendGridWrapper     = \$sendGridWrapper;
        \$this->sendGridApiMessage  = \$sendGridApiMessage;
        \$this->sendGridApiResponse = \$sendGridApiResponse;
    }

    /**
     * @throws \\Swift_TransportException
     */
    public function send(\\Swift_Mime_SimpleMessage \$message)
    {
        \$mail = \$this->sendGridApiMessage->getMessage(\$message);

        \$response = \$this->sendGridWrapper->send(\$mail);

        try {
            \$this->sendGridApiResponse->checkResponse(\$response);
        } catch (SendGridBadLoginException \$e) {
            throw new \\Swift_TransportException(\$e->getMessage());
        } catch (SendGridBadRequestException \$e) {
            throw new \\Swift_TransportException(\$e->getMessage());
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
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiFacade.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiFacade.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiFacade.php");
    }
}
