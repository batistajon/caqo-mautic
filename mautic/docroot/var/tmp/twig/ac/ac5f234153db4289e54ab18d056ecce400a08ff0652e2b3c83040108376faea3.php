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

/* @bundles/PageBundle/Entity/Redirect.php */
class __TwigTemplate_fca3e667d8634031909bce8e01bdbf3d0c8b804365dd3bc94a42345a6650936e extends Template
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

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\FormEntity;

class Redirect extends FormEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$redirectId;

    private \$url;

    /**
     * @var int
     */
    private \$hits = 0;

    /**
     * @var int
     */
    private \$uniqueHits = 0;

    /**
     * @var ArrayCollection
     */
    private \$trackables;

    /**
     * Redirect constructor.
     */
    public function __construct()
    {
        \$this->trackables = new ArrayCollection();
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('page_redirects')
            ->setCustomRepositoryClass('Mautic\\PageBundle\\Entity\\RedirectRepository');

        \$builder->addBigIntIdField();

        \$builder->createField('redirectId', 'string')
            ->columnName('redirect_id')
            ->length(25)
            ->build();

        \$builder->addField('url', 'text');

        \$builder->addField('hits', 'integer');

        \$builder->createField('uniqueHits', 'integer')
            ->columnName('unique_hits')
            ->build();

        \$builder->createOneToMany('trackables', 'Trackable')
            ->mappedBy('redirect')
            ->fetchExtraLazy()
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('redirect')
            ->addListProperties(
                [
                    'id',
                    'redirectId',
                    'url',
                ]
            )
            ->addProperties(
                [
                    'hits',
                    'uniqueHits',
                ]
            )
            ->build();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return string
     */
    public function getRedirectId()
    {
        return \$this->redirectId;
    }

    /**
     * @param string \$redirectId
     */
    public function setRedirectId(\$redirectId = null)
    {
        if (null === \$redirectId) {
            \$redirectId = substr(hash('sha1', uniqid(mt_rand())), 0, 25);
        }
        \$this->redirectId = \$redirectId;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * @param string \$url
     */
    public function setUrl(\$url)
    {
        \$this->url = \$url;
    }

    /**
     * Set hits.
     *
     * @param int \$hits
     *
     * @return Page
     */
    public function setHits(\$hits)
    {
        \$this->hits = \$hits;

        return \$this;
    }

    /**
     * Get hits.
     *
     * @return int
     */
    public function getHits()
    {
        return \$this->hits;
    }

    /**
     * Set uniqueHits.
     *
     * @param int \$uniqueHits
     *
     * @return Page
     */
    public function setUniqueHits(\$uniqueHits)
    {
        \$this->uniqueHits = \$uniqueHits;

        return \$this;
    }

    /**
     * Get uniqueHits.
     *
     * @return int
     */
    public function getUniqueHits()
    {
        return \$this->uniqueHits;
    }

    /**
     * @return ArrayCollection
     */
    public function getTrackableList()
    {
        return \$this->trackables;
    }

    /**
     * @param ArrayCollection \$trackables
     *
     * @return Redirect
     */
    public function setTrackables(\$trackables)
    {
        \$this->trackables = \$trackables;

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
        return "@bundles/PageBundle/Entity/Redirect.php";
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
        return new Source("", "@bundles/PageBundle/Entity/Redirect.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Entity/Redirect.php");
    }
}
