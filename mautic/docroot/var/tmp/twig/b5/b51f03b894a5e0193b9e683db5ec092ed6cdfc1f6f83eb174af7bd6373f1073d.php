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

/* @bundles/CoreBundle/Service/FlashBag.php */
class __TwigTemplate_761ceb07b0ea0f50155f159f69c795da862649e7da04a45a94cedac803bc90b4 extends Template
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

namespace Mautic\\CoreBundle\\Service;

use Mautic\\CoreBundle\\Model\\NotificationModel;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Provides translated flash messages.
 */
class FlashBag
{
    const LEVEL_ERROR     = 'error';
    const LEVEL_WARNING   = 'warning';
    const LEVEL_NOTICE    = 'notice';

    /**
     * @var Session
     */
    private \$session;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var NotificationModel
     */
    private \$notificationModel;

    /**
     * @var RequestStack
     */
    private \$requestStack;

    public function __construct(
        Session \$session,
        TranslatorInterface \$translator,
        RequestStack \$requestStack,
        NotificationModel \$notificationModel
    ) {
        \$this->session           = \$session;
        \$this->translator        = \$translator;
        \$this->requestStack      = \$requestStack;
        \$this->notificationModel = \$notificationModel;
    }

    /**
     * @param string     \$message
     * @param array|null \$messageVars
     * @param string     \$level
     * @param string     \$domain
     * @param bool       \$addNotification
     */
    public function add(\$message, \$messageVars = [], \$level = self::LEVEL_NOTICE, \$domain = 'flashes', \$addNotification = false)
    {
        if (false === \$domain) {
            //message is already translated
            \$translatedMessage = \$message;
        } else {
            if (isset(\$messageVars['pluralCount']) && empty(\$messageVars['%count%'])) {
                \$messageVars['%count%'] = \$messageVars['pluralCount'];
            }

            \$translatedMessage = \$this->translator->trans(\$message, \$messageVars, \$domain);
        }

        \$this->session->getFlashBag()->add(\$level, \$translatedMessage);

        if (!defined('MAUTIC_INSTALLER') && \$addNotification) {
            switch (\$level) {
                case self::LEVEL_WARNING:
                    \$iconClass = 'text-warning fa-exclamation-triangle';
                    break;
                case self::LEVEL_ERROR:
                    \$iconClass = 'text-danger fa-exclamation-circle';
                    break;
                default:
                    \$iconClass = 'fa-info-circle';
                    break;
            }

            //If the user has not interacted with the browser for the last 30 seconds, consider the message unread
            \$lastActive = \$this->requestStack->getCurrentRequest()->get('mauticUserLastActive', 0);
            \$isRead     = \$lastActive > 30 ? 0 : 1;

            \$this->notificationModel->addNotification(\$message, \$level, \$isRead, null, \$iconClass);
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
        return "@bundles/CoreBundle/Service/FlashBag.php";
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
        return new Source("", "@bundles/CoreBundle/Service/FlashBag.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Service/FlashBag.php");
    }
}
