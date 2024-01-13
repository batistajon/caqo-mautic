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

/* @bundles/EmailBundle/Entity/StatDevice.php */
class __TwigTemplate_ddd0a2203916cfcbd4d67a3f50922d0adddd04dd8b0b32af2c92e6fc23f9d087 extends Template
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

namespace Mautic\\EmailBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\LeadBundle\\Entity\\LeadDevice;

/**
 * Class StatDevice.
 */
class StatDevice
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var array
     */
    private \$stat;

    /**
     * @var \\Mautic\\LeadBundle\\Entity\\LeadDevice
     */
    private \$device;

    /**
     * @var \\Mautic\\CoreBundle\\Entity\\IpAddress
     */
    private \$ipAddress;

    /**
     * @var \\DateTime
     */
    private \$dateOpened;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('email_stats_devices')
            ->setCustomRepositoryClass('Mautic\\EmailBundle\\Entity\\StatDeviceRepository')
            ->addIndex(['date_opened'], 'date_opened_search');

        \$builder->addBigIntIdField();

        \$builder->createManyToOne('device', 'Mautic\\LeadBundle\\Entity\\LeadDevice')
            ->addJoinColumn('device_id', 'id', true, false, 'CASCADE')
            ->build();

        \$builder->createManyToOne('stat', 'Stat')
            ->addJoinColumn('stat_id', 'id', true, false, 'CASCADE')
            ->build();

        \$builder->addIpAddress(true);

        \$builder->createField('dateOpened', 'datetime')
            ->columnName('date_opened')
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('stat')
            ->addProperties(
                [
                    'id',
                    'device',
                    'ipAddress',
                    'stat',
                ]
            )
            ->build();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return IpAddress
     */
    public function getIpAddress()
    {
        return \$this->ipAddress;
    }

    /**
     * @param mixed \$ip
     */
    public function setIpAddress(IpAddress \$ip)
    {
        \$this->ipAddress = \$ip;
    }

    /**
     * @return Stat
     */
    public function getStat()
    {
        return \$this->stat;
    }

    /**
     * @param Stat
     */
    public function setStat(Stat \$stat)
    {
        \$this->stat = \$stat;
    }

    /**
     * @return mixed
     */
    public function getDateOpened()
    {
        return \$this->dateOpened;
    }

    /**
     * @param mixed \$dateOpened
     */
    public function setDateOpened(\$dateOpened)
    {
        \$this->dateOpened = \$dateOpened;
    }

    /**
     * @return mixed
     */
    public function getDevice()
    {
        return \$this->device;
    }

    /**
     * @param mixed \$device
     */
    public function setDevice(LeadDevice \$device)
    {
        \$this->device = \$device;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Entity/StatDevice.php";
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
        return new Source("", "@bundles/EmailBundle/Entity/StatDevice.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Entity/StatDevice.php");
    }
}
