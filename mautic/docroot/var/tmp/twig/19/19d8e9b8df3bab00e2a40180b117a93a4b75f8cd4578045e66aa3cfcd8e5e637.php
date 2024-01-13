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

/* @bundles/EmailBundle/Swiftmailer/Momentum/Facade/MomentumFacade.php */
class __TwigTemplate_af6d07e753deb276ea107687f6cb3afade1ffb78cc568c242c83efe1005869a6 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Facade;

use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Adapter\\AdapterInterface;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Callback\\MomentumCallbackInterface;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Exception\\Facade\\MomentumSendException;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Service\\SwiftMessageServiceInterface;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Validator\\SwiftMessageValidator\\SwiftMessageValidatorInterface;
use Monolog\\Logger;

/**
 * Class MomentumApiFacade.
 */
final class MomentumFacade implements MomentumFacadeInterface
{
    /**
     * @var AdapterInterface
     */
    private \$adapter;

    /**
     * @var SwiftMessageServiceInterface
     */
    private \$swiftMessageService;

    /**
     * @var SwiftMessageValidatorInterface
     */
    private \$swiftMessageValidator;

    /**
     * @var Logger
     */
    private \$logger;

    /**
     * @var MomentumCallbackInterface
     */
    private \$momentumCallback;

    /**
     * MomentumFacade constructor.
     */
    public function __construct(
        AdapterInterface \$adapter,
        SwiftMessageServiceInterface \$swiftMessageService,
        SwiftMessageValidatorInterface \$swiftMessageValidator,
        MomentumCallbackInterface \$momentumCallback,
        Logger \$logger
    ) {
        \$this->adapter               = \$adapter;
        \$this->swiftMessageService   = \$swiftMessageService;
        \$this->swiftMessageValidator = \$swiftMessageValidator;
        \$this->momentumCallback      = \$momentumCallback;
        \$this->logger                = \$logger;
    }

    /**
     * @return mixed
     *
     * @throws \\Swift_TransportException
     */
    public function send(\\Swift_Mime_SimpleMessage \$message)
    {
        try {
            \$this->swiftMessageValidator->validate(\$message);
            \$transmission = \$this->swiftMessageService->transformToTransmission(\$message);
            \$attempt      = 0;
            do {
                if (0 !== \$attempt) {
                    sleep(5);
                }
                ++\$attempt;
                \$response = \$this->adapter->createTransmission(\$transmission);
                \$response = \$response->wait();
            } while (500 === (int) \$response->getStatusCode() && 3 > \$attempt);

            if (200 === (int) \$response->getStatusCode()) {
                \$results = \$response->getBody();
                if (!\$sendCount = \$results['results']['total_accepted_recipients']) {
                    \$this->momentumCallback->processImmediateFeedback(\$message, \$results);
                }

                return \$sendCount;
            }

            \$this->logger->addError(
                'Momentum send: '.\$response->getStatusCode(),
                [
                    'response' => \$response->getBody(),
                ]
            );

            throw new MomentumSendException(\$this->getErrors(\$response->getBody()));
        } catch (\\Exception \$exception) {
            \$this->logger->addError(
                'Momentum send exception',
                [
                    'message' => \$exception->getMessage(),
                ]);

            throw new MomentumSendException(\$exception->getMessage());
        }
    }

    /**
     * @param \$body
     *
     * @return string
     */
    private function getErrors(\$body)
    {
        if (!is_array(\$body)) {
            return (string) \$body;
        }

        if (isset(\$body['errors'])) {
            \$errors = [];
            foreach (\$body['errors'] as \$error) {
                \$error = \$error['message'];

                if (isset(\$error['description'])) {
                    \$error .= ' : '.\$error['description'];
                }

                \$errors[] = \$error;
            }

            return implode('; ', \$errors);
        }

        return var_export(\$body, true);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/Facade/MomentumFacade.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/Facade/MomentumFacade.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/Facade/MomentumFacade.php");
    }
}
