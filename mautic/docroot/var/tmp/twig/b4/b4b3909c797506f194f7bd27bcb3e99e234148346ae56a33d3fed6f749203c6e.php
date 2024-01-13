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

/* @bundles/SmsBundle/Controller/ReplyController.php */
class __TwigTemplate_f66c700db4558af45d663a264e01e556741efc3bb57c55a2b981cf3d42a0aef0 extends Template
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

namespace Mautic\\SmsBundle\\Controller;

use Mautic\\SmsBundle\\Callback\\HandlerContainer;
use Mautic\\SmsBundle\\Exception\\CallbackHandlerNotFound;
use Mautic\\SmsBundle\\Helper\\ReplyHelper;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

class ReplyController extends AbstractController
{
    /**
     * @var HandlerContainer
     */
    private \$callbackHandler;

    /**
     * @var ReplyHelper
     */
    private \$replyHelper;

    /**
     * ReplyController constructor.
     */
    public function __construct(HandlerContainer \$callbackHandler, ReplyHelper \$replyHelper)
    {
        \$this->callbackHandler = \$callbackHandler;
        \$this->replyHelper     = \$replyHelper;
    }

    /**
     * @param \$transport
     *
     * @return Response
     *
     * @throws \\Exception
     */
    public function callbackAction(Request \$request, \$transport)
    {
        define('MAUTIC_NON_TRACKABLE_REQUEST', 1);

        try {
            \$handler = \$this->callbackHandler->getHandler(\$transport);
        } catch (CallbackHandlerNotFound \$exception) {
            throw new NotFoundHttpException();
        }

        return \$this->replyHelper->handleRequest(\$handler, \$request);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Controller/ReplyController.php";
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
        return new Source("", "@bundles/SmsBundle/Controller/ReplyController.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Controller/ReplyController.php");
    }
}
