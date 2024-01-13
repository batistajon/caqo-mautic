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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiResponse.php */
class __TwigTemplate_135043b33c8192b54a25021bffc61cfff93dded60ebc7a6c06342e385322945a extends Template
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
use Monolog\\Logger;
use SendGrid\\Response;

class SendGridApiResponse
{
    /**
     * @var Logger
     */
    private \$logger;

    public function __construct(Logger \$logger)
    {
        \$this->logger = \$logger;
    }

    /**
     * @throws SendGridBadLoginException
     * @throws SendGridBadRequestException
     */
    public function checkResponse(Response \$response)
    {
        \$statusCode = \$response->statusCode();

        if (\$statusCode >= 200 && \$statusCode <= 299) {
            //Request was successful
            return;
        }

        \$this->logger->addError(
            'SendGrid response: '.\$statusCode,
            ['response' => \$response]
        );

        \$body    = @json_decode(\$response->body(), true);
        \$message = '';
        if (false !== \$body && isset(\$body['errors'][0]['message'])) {
            \$message = \$body['errors'][0]['message'];
        }

        if (401 === \$statusCode) {
            throw new SendGridBadLoginException(\$message);
        }

        throw new SendGridBadRequestException(\$message);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiResponse.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiResponse.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiResponse.php");
    }
}
