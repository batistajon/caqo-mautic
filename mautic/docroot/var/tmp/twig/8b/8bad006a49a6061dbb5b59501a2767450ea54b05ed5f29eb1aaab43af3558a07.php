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

/* @bundles/PageBundle/Entity/Trackable.php */
class __TwigTemplate_6c9e52969ebae17e2d3596524b0540ee28d33f9ea5ac92408d859a4223ad49f5 extends Template
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

namespace Mautic\\PageBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * Class Trackable.
 */
class Trackable
{
    /**
     * @var Redirect
     */
    private \$redirect;

    /**
     * @var string
     */
    private \$channel;

    /**
     * @var int
     */
    private \$channelId;

    /**
     * @var int
     */
    private \$hits = 0;

    /**
     * @var int
     */
    private \$uniqueHits = 0;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('channel_url_trackables')
            ->setCustomRepositoryClass('Mautic\\PageBundle\\Entity\\TrackableRepository')
            ->addIndex(['channel', 'channel_id'], 'channel_url_trackable_search');

        \$builder->createManyToOne('redirect', 'Mautic\\PageBundle\\Entity\\Redirect')
            ->addJoinColumn('redirect_id', 'id', true, false, 'CASCADE')
            ->cascadePersist()
            ->inversedBy('trackables')
            ->isPrimaryKey()
            ->build();

        \$builder->createField('channelId', 'integer')
            ->columnName('channel_id')
            ->isPrimaryKey()
            ->build();

        \$builder->addField('channel', 'string');

        \$builder->addField('hits', 'integer');

        \$builder->addNamedField('uniqueHits', 'integer', 'unique_hits');
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('trackable')
            ->addListProperties(
                [
                    'redirect',
                    'channelId',
                    'channel',
                    'hits',
                    'uniqueHits',
                ]
            )
            ->build();
    }

    /**
     * @return Redirect
     */
    public function getRedirect()
    {
        return \$this->redirect;
    }

    /**
     * @return Trackable
     */
    public function setRedirect(Redirect \$redirect)
    {
        \$this->redirect = \$redirect;

        return \$this;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return \$this->channel;
    }

    /**
     * @param string \$channel
     *
     * @return Trackable
     */
    public function setChannel(\$channel)
    {
        \$this->channel = \$channel;

        return \$this;
    }

    /**
     * @return int
     */
    public function getChannelId()
    {
        return \$this->channelId;
    }

    /**
     * @param int \$channelId
     *
     * @return Trackable
     */
    public function setChannelId(\$channelId)
    {
        \$this->channelId = \$channelId;

        return \$this;
    }

    /**
     * @return int
     */
    public function getHits()
    {
        return \$this->hits;
    }

    /**
     * @param int \$hits
     *
     * @return Trackable
     */
    public function setHits(\$hits)
    {
        \$this->hits = \$hits;

        return \$this;
    }

    /**
     * @return int
     */
    public function getUniqueHits()
    {
        return \$this->uniqueHits;
    }

    /**
     * @param int \$uniqueHits
     *
     * @return Trackable
     */
    public function setUniqueHits(\$uniqueHits)
    {
        \$this->uniqueHits = \$uniqueHits;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Entity/Trackable.php";
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
        return new Source("", "@bundles/PageBundle/Entity/Trackable.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Entity/Trackable.php");
    }
}
