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

/* @bundles/AssetBundle/AssetEvents.php */
class __TwigTemplate_9bbfda509cfb1261f38f635d5e831499b2a37ff9b5c6e94a401b3562652b78a8 extends Template
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

namespace Mautic\\AssetBundle;

/**
 * Events available for AssetBundle.
 */
final class AssetEvents
{
    /**
     * The mautic.asset_on_load event is dispatched when a public asset is downloaded, publicly viewed, or redirected to (remote).
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetLoadEvent instance.
     *
     * @var string
     */
    const ASSET_ON_LOAD = 'mautic.asset_on_load';

    /**
     * The mautic.asset_on_remote_browse event is dispatched when browsing a remote provider.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\RemoteAssetBrowseEvent instance.
     *
     * @var string
     */
    const ASSET_ON_REMOTE_BROWSE = 'mautic.asset_on_remote_browse';

    /**
     * The mautic.asset_on_upload event is dispatched before uploading a file.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetEvent instance.
     *
     * @var string
     */
    const ASSET_ON_UPLOAD = 'mautic.asset_on_upload';

    /**
     * The mautic.asset_pre_save event is dispatched right before a asset is persisted.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetEvent instance.
     *
     * @var string
     */
    const ASSET_PRE_SAVE = 'mautic.asset_pre_save';

    /**
     * The mautic.asset_post_save event is dispatched right after a asset is persisted.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetEvent instance.
     *
     * @var string
     */
    const ASSET_POST_SAVE = 'mautic.asset_post_save';

    /**
     * The mautic.asset_pre_delete event is dispatched prior to when a asset is deleted.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetEvent instance.
     *
     * @var string
     */
    const ASSET_PRE_DELETE = 'mautic.asset_pre_delete';

    /**
     * The mautic.asset_post_delete event is dispatched after a asset is deleted.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetEvent instance.
     *
     * @var string
     */
    const ASSET_POST_DELETE = 'mautic.asset_post_delete';

    /**
     * The mautic.asset.on_campaign_trigger_decision event is fired when the campaign action triggers.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent
     *
     * @var string
     */
    const ON_CAMPAIGN_TRIGGER_DECISION = 'mautic.asset.on_campaign_trigger_decision';

    /**
     * The mautic.asset.on_download_rate_winner event is fired when there is a need to determine download rate winner.
     *
     * The event listener receives a
     * Mautic\\CoreBundles\\Event\\DetermineWinnerEvent
     *
     * @var string
     */
    const ON_DETERMINE_DOWNLOAD_RATE_WINNER = 'mautic.asset.on_download_rate_winner';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/AssetEvents.php";
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
        return new Source("", "@bundles/AssetBundle/AssetEvents.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/AssetEvents.php");
    }
}
