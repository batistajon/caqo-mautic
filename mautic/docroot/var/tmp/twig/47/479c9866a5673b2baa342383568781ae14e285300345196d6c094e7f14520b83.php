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

/* @bundles/ApiBundle/EventListener/ApiSubscriber.php */
class __TwigTemplate_a59ac00e8f87108e21891d75ccbac32344a1ce816c0ead77825c4a3d85012034 extends Template
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

namespace Mautic\\ApiBundle\\EventListener;

use Mautic\\ApiBundle\\Helper\\RequestHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ApiSubscriber implements EventSubscriberInterface
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(
        CoreParametersHelper \$coreParametersHelper,
        TranslatorInterface \$translator
    ) {
        \$this->coreParametersHelper = \$coreParametersHelper;
        \$this->translator           = \$translator;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST  => ['onKernelRequest', 255],
            KernelEvents::RESPONSE => ['onKernelResponse', 0],
        ];
    }

    /**
     * Check for API requests and throw denied access if API is disabled.
     *
     * @throws AccessDeniedHttpException
     */
    public function onKernelRequest(GetResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$request = \$event->getRequest();

        // Ignore if not an API request
        if (!RequestHelper::isApiRequest(\$request)) {
            return;
        }

        // Prevent access to API if disabled
        \$apiEnabled = \$this->coreParametersHelper->get('api_enabled');
        if (!\$apiEnabled) {
            \$response   = new JsonResponse(
                [
                    'errors' => [
                        [
                            'message' => \$this->translator->trans('mautic.api.error.api.disabled'),
                            'code'    => 403,
                            'type'    => 'api_disabled',
                        ],
                    ],
                ],
                403
            );

            \$event->setResponse(\$response);

            return;
        }

        // Prevent access via basic auth if it is disabled
        \$hasBasicAuth     = RequestHelper::hasBasicAuth(\$request);
        \$basicAuthEnabled = \$this->coreParametersHelper->get('api_enable_basic_auth');

        if (\$hasBasicAuth && !\$basicAuthEnabled) {
            \$response   = new JsonResponse(
                [
                    'errors' => [
                        [
                            'message' => \$this->translator->trans('mautic.api.error.basic.auth.disabled'),
                            'code'    => 403,
                            'type'    => 'access_denied',
                        ],
                    ],
                ],
                403
            );

            \$event->setResponse(\$response);
        }
    }

    public function onKernelResponse(FilterResponseEvent \$event)
    {
        \$request      = \$event->getRequest();
        \$isApiRequest = RequestHelper::isApiRequest(\$request);
        \$hasBasicAuth = RequestHelper::hasBasicAuth(\$event->getRequest());

        // Ignore if this is not an API request
        if (!\$isApiRequest) {
            return;
        }

        // Ignore if this does not contain an error response
        \$response = \$event->getResponse();
        \$content  = \$response->getContent();
        if (false === strpos(\$content, 'error')) {
            return;
        }

        // Ignore if content is not json
        if (!\$data = json_decode(\$content, true)) {
            return;
        }

        // Ignore if an error was not found in the JSON response
        if (!isset(\$data['error'])) {
            return;
        }

        // Override api messages with something useful
        \$type  = null;
        \$error = \$data['error'];
        if (is_array(\$error)) {
            if (!isset(\$error['message'])) {
                return;
            }

            // Catch useless oauth errors
            \$error = \$error['message'];
        }

        switch (\$error) {
            case 'access_denied':
                \$type    = \$error;
                \$message = \$this->translator->trans('mautic.api.auth.error.accessdenied');

                if (\$hasBasicAuth) {
                    if (\$this->coreParametersHelper->get('api_enable_basic_auth')) {
                        \$message = \$this->translator->trans('mautic.api.error.basic.auth.invalid.credentials');
                    } else {
                        \$message = \$this->translator->trans('mautic.api.error.basic.auth.disabled');
                    }
                }

                break;
            default:
                if (isset(\$data['error_description'])) {
                    \$message = \$data['error_description'];
                    \$type    = \$error;
                } elseif (\$this->translator->hasId('mautic.api.auth.error.'.\$error)) {
                    \$message = \$this->translator->trans('mautic.api.auth.error.'.\$error);
                    \$type    = \$error;
                }
        }

        // Message was not overriden so leave as is
        if (!isset(\$message)) {
            return;
        }

        \$statusCode = \$response->getStatusCode();
        \$response   = new JsonResponse(
            [
                'errors' => [
                    [
                        'message' => \$message,
                        'code'    => \$response->getStatusCode(),
                        'type'    => \$type,
                    ],
                ],
            ],
            \$statusCode
        );

        \$event->setResponse(\$response);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/EventListener/ApiSubscriber.php";
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
        return new Source("", "@bundles/ApiBundle/EventListener/ApiSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/EventListener/ApiSubscriber.php");
    }
}
