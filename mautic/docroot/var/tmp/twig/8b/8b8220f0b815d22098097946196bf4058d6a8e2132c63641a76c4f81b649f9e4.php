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

/* @bundles/LeadBundle/Entity/UtmTag.php */
class __TwigTemplate_2090da7a4cd59fb6c3345c54ae8cc1853acf19c5d0f3e50ea466e11464a40273 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\DBAL\\Types\\Type;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class UtmTag
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var \\DateTime
     */
    private \$dateAdded;

    /**
     * @var \\Mautic\\LeadBundle\\Entity\\Lead
     */
    private \$lead;

    /**
     * @var array
     */
    private \$query = [];

    /**
     * @var string
     */
    private \$referer;

    /**
     * @var string
     */
    private \$remoteHost;

    private \$url;

    /**
     * @var string
     */
    private \$userAgent;

    /**
     * @var string
     */
    private \$utmCampaign;

    /**
     * @var string
     */
    private \$utmContent;

    /**
     * @var string
     */
    private \$utmMedium;

    /**
     * @var string
     */
    private \$utmSource;

    /**
     * @var string
     */
    private \$utmTerm;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('lead_utmtags');
        \$builder->setCustomRepositoryClass(UtmTagRepository::class);
        \$builder->addId();
        \$builder->addDateAdded();
        \$builder->addLead(false, 'CASCADE', false, 'utmtags');
        \$builder->addNullableField('query', Type::TARRAY);
        \$builder->addNullableField('referer', Type::TEXT);
        \$builder->addNullableField('remoteHost', Type::STRING, 'remote_host');
        \$builder->addNullableField('url', Type::TEXT);
        \$builder->addNullableField('userAgent', Type::TEXT, 'user_agent');
        \$builder->addNullableField('utmCampaign', Type::STRING, 'utm_campaign');
        \$builder->addNullableField('utmContent', Type::STRING, 'utm_content');
        \$builder->addNullableField('utmMedium', Type::STRING, 'utm_medium');
        \$builder->addNullableField('utmSource', Type::STRING, 'utm_source');
        \$builder->addNullableField('utmTerm', Type::STRING, 'utm_term');
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('utmtags')
            ->addListProperties(
                [
                    'id',
                    'lead',
                    'query',
                    'referer',
                    'remoteHost',
                    'url',
                    'userAgent',
                    'utmCampaign',
                    'utmContent',
                    'utmMedium',
                    'utmSource',
                    'utmTerm',
                ]
            )
            ->build();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set date added.
     *
     * @return UtmTag
     */
    public function setDateAdded(\\DateTime \$date)
    {
        \$this->dateAdded = \$date;

        return \$this;
    }

    /**
     * Get date added.
     *
     * @return \\DateTime
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return UtmTag
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }

    /**
     * @return array
     */
    public function getQuery()
    {
        return \$this->query;
    }

    /**
     * @param array \$query
     *
     * @return UtmTag
     */
    public function setQuery(\$query)
    {
        \$this->query = \$query;

        return \$this;
    }

    /**
     * Set referer.
     *
     * @param string \$referer
     *
     * @return UtmTag
     */
    public function setReferer(\$referer)
    {
        \$this->referer = \$referer;

        return \$this;
    }

    /**
     * Get referer.
     *
     * @return string
     */
    public function getReferer()
    {
        return \$this->referer;
    }

    /**
     * Set remoteHost.
     *
     * @param string \$remoteHost
     *
     * @return UtmTag
     */
    public function setRemoteHost(\$remoteHost)
    {
        \$this->remoteHost = \$remoteHost;

        return \$this;
    }

    /**
     * Get remoteHost.
     *
     * @return string
     */
    public function getRemoteHost()
    {
        return \$this->remoteHost;
    }

    /**
     * Set url.
     *
     * @param string \$url
     *
     * @return UtmTag
     */
    public function setUrl(\$url)
    {
        \$this->url = \$url;

        return \$this;
    }

    /**
     * Get url.
     *
     * @return string
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * Set userAgent.
     *
     * @param string \$userAgent
     *
     * @return UtmTag
     */
    public function setUserAgent(\$userAgent)
    {
        \$this->userAgent = \$userAgent;

        return \$this;
    }

    /**
     * Get userAgent.
     *
     * @return string
     */
    public function getUserAgent()
    {
        return \$this->userAgent;
    }

    /**
     * @return string
     */
    public function getUtmCampaign()
    {
        return \$this->utmCampaign;
    }

    /**
     * @param string \$utmCampaign
     *
     * @return UtmTag
     */
    public function setUtmCampaign(\$utmCampaign)
    {
        \$this->utmCampaign = \$utmCampaign;

        return \$this;
    }

    /**
     * @return string
     */
    public function getUtmContent()
    {
        return \$this->utmContent;
    }

    /**
     * @param string \$utmContent
     *
     * @return UtmTag
     */
    public function setUtmContent(\$utmContent)
    {
        \$this->utmContent = \$utmContent;

        return \$this;
    }

    /**
     * @return string
     */
    public function getUtmMedium()
    {
        return \$this->utmMedium;
    }

    /**
     * @param string \$utmMedium
     *
     * @return UtmTag
     */
    public function setUtmMedium(\$utmMedium)
    {
        \$this->utmMedium = \$utmMedium;

        return \$this;
    }

    /**
     * @return string
     */
    public function getUtmSource()
    {
        return \$this->utmSource;
    }

    /**
     * @param string \$utmSource
     *
     * @return UtmTag
     */
    public function setUtmSource(\$utmSource)
    {
        \$this->utmSource = \$utmSource;

        return \$this;
    }

    /**
     * @return string
     */
    public function getUtmTerm()
    {
        return \$this->utmTerm;
    }

    /**
     * @param string \$utmTerm
     *
     * @return UtmTag
     */
    public function setUtmTerm(\$utmTerm)
    {
        \$this->utmTerm = \$utmTerm;

        return \$this;
    }

    /**
     * Available fields and it's setters.
     *
     * @return array
     */
    public function getFieldSetterList()
    {
        return [
            'utm_campaign' => 'setUtmCampaign',
            'utm_source'   => 'setUtmSource',
            'utm_medium'   => 'setUtmMedium',
            'utm_content'  => 'setUtmContent',
            'utm_term'     => 'setUtmTerm',
            'user_agent'   => 'setUserAgent',
            'url'          => 'setUrl',
            'referer'      => 'setReferer',
            'query'        => 'setQuery',
            'remote_host'  => 'setRemoteHost',
            'date_added'   => 'setDateAdded',
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/UtmTag.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/UtmTag.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Entity/UtmTag.php");
    }
}
