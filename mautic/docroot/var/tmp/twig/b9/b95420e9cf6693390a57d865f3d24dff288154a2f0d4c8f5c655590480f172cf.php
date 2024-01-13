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

/* @bundles/EmailBundle/EventListener/BroadcastSubscriber.php */
class __TwigTemplate_3325b0f0ed0233caf78f746593c4fc6321cfc65a57d7351d040d7f66e793bf9a extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelBroadcastEvent;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class BroadcastSubscriber implements EventSubscriberInterface
{
    /**
     * @var EmailModel
     */
    private \$model;

    /**
     * @var EntityManager
     */
    private \$em;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(EmailModel \$emailModel, EntityManager \$em, TranslatorInterface \$translator)
    {
        \$this->model      = \$emailModel;
        \$this->em         = \$em;
        \$this->translator = \$translator;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            ChannelEvents::CHANNEL_BROADCAST => ['onBroadcast', 0],
        ];
    }

    public function onBroadcast(ChannelBroadcastEvent \$event)
    {
        if (!\$event->checkContext('email')) {
            return;
        }

        // Get list of published broadcasts or broadcast if there is only a single ID
        \$emails = \$this->model->getRepository()->getPublishedBroadcasts(\$event->getId());

        while (false !== (\$email = \$emails->next())) {
            \$emailEntity                                            = \$email[0];
            list(\$sentCount, \$failedCount, \$failedRecipientsByList) = \$this->model->sendEmailToLists(
                \$emailEntity,
                null,
                \$event->getLimit(),
                \$event->getBatch(),
                \$event->getOutput(),
                \$event->getMinContactIdFilter(),
                \$event->getMaxContactIdFilter()
            );

            \$event->setResults(
                \$this->translator->trans('mautic.email.email').': '.\$emailEntity->getName(),
                \$sentCount,
                \$failedCount,
                \$failedRecipientsByList
            );
            \$this->em->detach(\$emailEntity);
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
        return "@bundles/EmailBundle/EventListener/BroadcastSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/BroadcastSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/BroadcastSubscriber.php");
    }
}
