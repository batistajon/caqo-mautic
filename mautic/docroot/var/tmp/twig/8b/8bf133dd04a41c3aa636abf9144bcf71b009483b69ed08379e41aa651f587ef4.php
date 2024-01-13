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

/* @bundles/SmsBundle/EventListener/SmsSubscriber.php */
class __TwigTemplate_3018c4d752274e37fa67cc7f8a65093799df872b5ae2db5092da3b575c09d777 extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\AssetBundle\\Helper\\TokenHelper as AssetTokenHelper;
use Mautic\\CoreBundle\\Event\\TokenReplacementEvent;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Helper\\TokenHelper;
use Mautic\\PageBundle\\Entity\\Trackable;
use Mautic\\PageBundle\\Helper\\TokenHelper as PageTokenHelper;
use Mautic\\PageBundle\\Model\\TrackableModel;
use Mautic\\SmsBundle\\Event\\SmsEvent;
use Mautic\\SmsBundle\\Helper\\SmsHelper;
use Mautic\\SmsBundle\\SmsEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SmsSubscriber implements EventSubscriberInterface
{
    /**
     * @var AuditLogModel
     */
    private \$auditLogModel;

    /**
     * @var TrackableModel
     */
    private \$trackableModel;

    /**
     * @var PageTokenHelper
     */
    private \$pageTokenHelper;

    /**
     * @var AssetTokenHelper
     */
    private \$assetTokenHelper;

    /**
     * @var SmsHelper
     */
    private \$smsHelper;

    public function __construct(
        AuditLogModel \$auditLogModel,
        TrackableModel \$trackableModel,
        PageTokenHelper \$pageTokenHelper,
        AssetTokenHelper \$assetTokenHelper,
        SmsHelper \$smsHelper
    ) {
        \$this->auditLogModel    = \$auditLogModel;
        \$this->trackableModel   = \$trackableModel;
        \$this->pageTokenHelper  = \$pageTokenHelper;
        \$this->assetTokenHelper = \$assetTokenHelper;
        \$this->smsHelper        = \$smsHelper;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            SmsEvents::SMS_POST_SAVE     => ['onPostSave', 0],
            SmsEvents::SMS_POST_DELETE   => ['onDelete', 0],
            SmsEvents::TOKEN_REPLACEMENT => ['onTokenReplacement', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onPostSave(SmsEvent \$event)
    {
        \$entity = \$event->getSms();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'   => 'sms',
                'object'   => 'sms',
                'objectId' => \$entity->getId(),
                'action'   => (\$event->isNew()) ? 'create' : 'update',
                'details'  => \$details,
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onDelete(SmsEvent \$event)
    {
        \$entity = \$event->getSms();
        \$log    = [
            'bundle'   => 'sms',
            'object'   => 'sms',
            'objectId' => \$entity->deletedId,
            'action'   => 'delete',
            'details'  => ['name' => \$entity->getName()],
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    public function onTokenReplacement(TokenReplacementEvent \$event)
    {
        /** @var Lead \$lead */
        \$lead         = \$event->getLead();
        \$content      = \$event->getContent();
        \$clickthrough = \$event->getClickthrough();

        if (\$content) {
            \$tokens = array_merge(
                TokenHelper::findLeadTokens(\$content, \$lead->getProfileFields()),
                \$this->pageTokenHelper->findPageTokens(\$content, \$clickthrough),
                \$this->assetTokenHelper->findAssetTokens(\$content, \$clickthrough)
            );

            // Disable trackable urls
            if (!\$this->smsHelper->getDisableTrackableUrls()) {
                list(\$content, \$trackables) = \$this->trackableModel->parseContentForTrackables(
                    \$content,
                    \$tokens,
                    'sms',
                    \$clickthrough['channel'][1]
                );

                /**
                 * @var string
                 * @var Trackable \$trackable
                 */
                foreach (\$trackables as \$token => \$trackable) {
                    \$tokens[\$token] = \$this->trackableModel->generateTrackableUrl(\$trackable, \$clickthrough, true);
                }
            }

            \$content = str_replace(array_keys(\$tokens), array_values(\$tokens), \$content);

            \$event->setContent(\$content);
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
        return "@bundles/SmsBundle/EventListener/SmsSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/SmsSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/EventListener/SmsSubscriber.php");
    }
}
