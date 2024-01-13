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

/* @bundles/SmsBundle/Tests/EventListener/SmsSubscriberTest.php */
class __TwigTemplate_9f4b9eaaf6f84a8675f689ccd89a8bfe13405504e133065cc8f641c2fcfe8c82 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Event\\TokenReplacementEvent;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PageBundle\\Entity\\Trackable;
use Mautic\\PageBundle\\Helper\\TokenHelper;
use Mautic\\PageBundle\\Model\\TrackableModel;
use Mautic\\SmsBundle\\EventListener\\SmsSubscriber;
use Mautic\\SmsBundle\\Helper\\SmsHelper;
use PHPUnit\\Framework\\TestCase;

class SmsSubscriberTest extends TestCase
{
    private \$messageText = 'custom http://mautic.com text';

    private \$messageUrl = 'http://mautic.com';

    public function testOnTokenReplacementWithTrackableUrls()
    {
        \$mockAuditLogModel = \$this->createMock(AuditLogModel::class);

        \$mockTrackableModel = \$this->createMock(TrackableModel::class);
        \$mockTrackableModel->expects(\$this->any())->method('parseContentForTrackables')->willReturn([
            \$this->messageUrl,
            new Trackable(),
        ]);
        \$mockTrackableModel->expects(\$this->any())->method('generateTrackableUrl')->willReturn('custom');

        \$mockPageTokenHelper = \$this->createMock(TokenHelper::class);
        \$mockPageTokenHelper->expects(\$this->any())->method('findPageTokens')->willReturn([]);

        \$mockAssetTokenHelper = \$this->createMock(\\Mautic\\AssetBundle\\Helper\\TokenHelper::class);
        \$mockAssetTokenHelper->expects(\$this->any())->method('findAssetTokens')->willReturn([]);

        \$mockSmsHelper = \$this->createMock(SmsHelper::class);
        \$mockSmsHelper->expects(\$this->any())->method('getDisableTrackableUrls')->willReturn(false);

        \$lead                  = new Lead();
        \$tokenReplacementEvent = new TokenReplacementEvent(\$this->messageText, \$lead, ['channel' => [1 => 'sms']]);
        \$subscriber            = new SmsSubscriber(
            \$mockAuditLogModel,
            \$mockTrackableModel,
            \$mockPageTokenHelper,
            \$mockAssetTokenHelper,
            \$mockSmsHelper
        );
        \$subscriber->onTokenReplacement(\$tokenReplacementEvent);
        \$this->assertNotSame(\$this->messageText, \$tokenReplacementEvent->getContent());
    }

    public function testOnTokenReplacementWithDisableTrackableUrls()
    {
        \$mockAuditLogModel = \$this->createMock(AuditLogModel::class);

        \$mockTrackableModel = \$this->createMock(TrackableModel::class);
        \$mockTrackableModel->expects(\$this->any())->method('parseContentForTrackables')->willReturn([
            \$this->messageUrl,
            new Trackable(),
        ]);
        \$mockTrackableModel->expects(\$this->any())->method('generateTrackableUrl')->willReturn('custom');

        \$mockPageTokenHelper = \$this->createMock(TokenHelper::class);
        \$mockPageTokenHelper->expects(\$this->any())->method('findPageTokens')->willReturn([]);

        \$mockAssetTokenHelper = \$this->createMock(\\Mautic\\AssetBundle\\Helper\\TokenHelper::class);
        \$mockAssetTokenHelper->expects(\$this->any())->method('findAssetTokens')->willReturn([]);

        \$mockSmsHelper = \$this->createMock(SmsHelper::class);
        \$mockSmsHelper->expects(\$this->any())->method('getDisableTrackableUrls')->willReturn(true);

        \$lead                  = new Lead();
        \$tokenReplacementEvent = new TokenReplacementEvent(\$this->messageText, \$lead, ['channel' => ['sms', 1]]);
        \$subscriber            = new SmsSubscriber(
            \$mockAuditLogModel,
            \$mockTrackableModel,
            \$mockPageTokenHelper,
            \$mockAssetTokenHelper,
            \$mockSmsHelper
        );
        \$subscriber->onTokenReplacement(\$tokenReplacementEvent);
        \$this->assertSame(\$this->messageText, \$tokenReplacementEvent->getContent());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Tests/EventListener/SmsSubscriberTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/EventListener/SmsSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Tests/EventListener/SmsSubscriberTest.php");
    }
}
