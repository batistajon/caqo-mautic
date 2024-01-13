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

/* @bundles/SmsBundle/Helper/ReplyHelper.php */
class __TwigTemplate_98454ed9df20f3243003519f9f888c1e7298161cf479c31d3151de011f0ef63a extends Template
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

namespace Mautic\\SmsBundle\\Helper;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\SmsBundle\\Callback\\CallbackInterface;
use Mautic\\SmsBundle\\Callback\\ResponseInterface;
use Mautic\\SmsBundle\\Event\\ReplyEvent;
use Mautic\\SmsBundle\\Exception\\NumberNotFoundException;
use Mautic\\SmsBundle\\SmsEvents;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

class ReplyHelper
{
    /**
     * @var EventDispatcherInterface
     */
    private \$eventDispatcher;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * @var ContactTracker
     */
    private \$contactTracker;

    public function __construct(EventDispatcherInterface \$eventDispatcher, LoggerInterface \$logger, ContactTracker \$contactTracker)
    {
        \$this->eventDispatcher = \$eventDispatcher;
        \$this->logger          = \$logger;
        \$this->contactTracker  = \$contactTracker;
    }

    /**
     * @param string \$pattern
     * @param string \$replyBody
     *
     * @return bool
     */
    public static function matches(\$pattern, \$replyBody)
    {
        return fnmatch(\$pattern, \$replyBody, FNM_CASEFOLD);
    }

    /**
     * @return Response
     *
     * @throws \\Exception
     */
    public function handleRequest(CallbackInterface \$handler, Request \$request)
    {
        // Set the default response
        \$response = \$this->getDefaultResponse(\$handler);

        try {
            \$message  = \$handler->getMessage(\$request);
            \$contacts = \$handler->getContacts(\$request);

            \$this->logger->debug(sprintf('SMS REPLY: Processing message \"%s\"', \$message));
            \$this->logger->debug(sprintf('SMS REPLY: Found IDs %s', implode(',', \$contacts->getKeys())));

            foreach (\$contacts as \$contact) {
                // Set the contact for campaign decisions
                \$this->contactTracker->setSystemContact(\$contact);

                \$eventResponse = \$this->dispatchReplyEvent(\$contact, \$message);

                if (\$eventResponse instanceof Response) {
                    // Last one wins
                    \$response = \$eventResponse;
                }
            }
        } catch (BadRequestHttpException \$exception) {
            return new Response('invalid request', 400);
        } catch (NotFoundHttpException \$exception) {
            return new Response('', 404);
        } catch (NumberNotFoundException \$exception) {
            \$this->logger->debug(
                sprintf(
                    '%s: %s was not found. The message sent was \"%s\"',
                    \$handler->getTransportName(),
                    \$exception->getNumber(),
                    !empty(\$message) ? \$message : 'unknown'
                )
            );
        }

        return \$response;
    }

    /**
     * @param string \$message
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response|null
     */
    private function dispatchReplyEvent(Lead \$contact, \$message)
    {
        \$replyEvent = new ReplyEvent(\$contact, trim(\$message));

        \$this->eventDispatcher->dispatch(SmsEvents::ON_REPLY, \$replyEvent);

        return \$replyEvent->getResponse();
    }

    /**
     * @return Response
     *
     * @throws \\Exception
     */
    private function getDefaultResponse(CallbackInterface \$handler)
    {
        if (\$handler instanceof ResponseInterface) {
            \$response = \$handler->getResponse();

            if (!\$response instanceof Response) {
                throw new \\Exception('getResponse must return a Symfony\\Component\\HttpFoundation\\Response object');
            }

            return \$response;
        }

        return new Response();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Helper/ReplyHelper.php";
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
        return new Source("", "@bundles/SmsBundle/Helper/ReplyHelper.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Helper/ReplyHelper.php");
    }
}
