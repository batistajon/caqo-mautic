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

/* @bundles/LeadBundle/Model/IpAddressModel.php */
class __TwigTemplate_a0b2728a6cccb084153311e5ffc83b6911770cf12492d17bee74b074e0985f77 extends Template
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

namespace Mautic\\LeadBundle\\Model;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Exception\\ForeignKeyConstraintViolationException;
use Doctrine\\DBAL\\Exception\\UniqueConstraintViolationException;
use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Entity\\IpAddressRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Psr\\Log\\LoggerInterface;

class IpAddressModel
{
    private const DELETE_SIZE = 10000;

    /**
     * @var LoggerInterface
     */
    protected \$logger;

    /**
     * @var EntityManager
     */
    protected \$entityManager;

    public function __construct(EntityManager \$entityManager, LoggerInterface \$logger)
    {
        \$this->entityManager = \$entityManager;
        \$this->logger        = \$logger;
    }

    /**
     * Saving IP Address references sometimes throws UniqueConstraintViolationException exception on Lead entity save.
     * Rather pre-save the IP references here and catch the exception.
     */
    public function saveIpAddressesReferencesForContact(Lead \$contact)
    {
        foreach (\$contact->getIpAddresses() as \$ipAddress) {
            \$this->insertIpAddressReference(\$contact, \$ipAddress);
        }
    }

    /**
     * @param string \$ip
     *
     * @return IpAddress|null
     */
    public function findOneByIpAddress(\$ip)
    {
        return \$this->entityManager->getRepository(IpAddress::class)->findOneByIpAddress(\$ip);
    }

    /**
     * Tries to insert the Lead/IP relation and continues even if UniqueConstraintViolationException is thrown.
     */
    private function insertIpAddressReference(Lead \$contact, IpAddress \$ipAddress)
    {
        \$ipAddressAdded = isset(\$contact->getChanges()['ipAddressList'][\$ipAddress->getIpAddress()]);
        if (!\$ipAddressAdded || !\$ipAddress->getId() || !\$contact->getId()) {
            return;
        }

        \$qb     = \$this->entityManager->getConnection()->createQueryBuilder();
        \$values = [
            'lead_id' => ':leadId',
            'ip_id'   => ':ipId',
        ];

        \$qb->insert(MAUTIC_TABLE_PREFIX.'lead_ips_xref');
        \$qb->values(\$values);
        \$qb->setParameter('leadId', \$contact->getId());
        \$qb->setParameter('ipId', \$ipAddress->getId());

        try {
            \$qb->execute();
        } catch (UniqueConstraintViolationException \$e) {
            \$this->logger->warning(\"The reference for contact {\$contact->getId()} and IP address {\$ipAddress->getId()} is already there. (Unique constraint)\");
        } catch (ForeignKeyConstraintViolationException \$e) {
            \$this->logger->warning(\"The reference for contact {\$contact->getId()} and IP address {\$ipAddress->getId()} is already there. (Foreign key constraint)\");
        }

        \$this->entityManager->detach(\$ipAddress);
    }

    /**
     * @throws DBALException
     */
    public function deleteUnusedIpAddresses(int \$limit): int
    {
        /** @var IpAddressRepository \$ipAddressRepo */
        \$ipAddressRepo = \$this->entityManager->getRepository(IpAddress::class);
        \$ipIds         = \$ipAddressRepo->getUnusedIpAddressesIds(\$limit);

        \$chunkedIds = array_chunk(\$ipIds, self::DELETE_SIZE);
        \$count      = 0;

        foreach (\$chunkedIds as \$ids) {
            \$count += \$ipAddressRepo->deleteUnusedIpAddresses(\$ids);

            // Use sleep to recover from any potential table locks.
            usleep(50000);
        }

        return \$count;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Model/IpAddressModel.php";
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
        return new Source("", "@bundles/LeadBundle/Model/IpAddressModel.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Model/IpAddressModel.php");
    }
}
