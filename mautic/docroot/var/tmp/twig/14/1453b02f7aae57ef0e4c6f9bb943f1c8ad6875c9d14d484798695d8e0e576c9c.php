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

/* @bundles/SmsBundle/Helper/ContactHelper.php */
class __TwigTemplate_232f19aeb625ccecfc4c84a93ddb1d4f17999906c0a6ccfbd6274e6108f3473f extends Template
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

namespace Mautic\\SmsBundle\\Helper;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\Helper\\PhoneNumberHelper;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\SmsBundle\\Exception\\NumberNotFoundException;

class ContactHelper
{
    /**
     * @var LeadRepository
     */
    private \$leadRepository;

    /**
     * @var Connection
     */
    private \$connection;

    /**
     * @var PhoneNumberHelper
     */
    private \$phoneNumberHelper;

    /**
     * ContactHelper constructor.
     */
    public function __construct(
        LeadRepository \$leadRepository,
        Connection \$connection,
        PhoneNumberHelper \$phoneNumberHelper
    ) {
        \$this->leadRepository    = \$leadRepository;
        \$this->connection        = \$connection;
        \$this->phoneNumberHelper = \$phoneNumberHelper;
    }

    /**
     * @param string \$number
     *
     * @return ArrayCollection
     *
     * @throws NumberNotFoundException
     */
    public function findContactsByNumber(\$number)
    {
        // Who knows what the number was originally formatted as so let's try a few
        \$searchForNumbers = \$this->phoneNumberHelper->getFormattedNumberList(\$number);

        \$qb = \$this->connection->createQueryBuilder();

        \$foundContacts = \$qb->select('l.id')
            ->from(MAUTIC_TABLE_PREFIX.'leads', 'l')
            ->where(
                \$qb->expr()->orX(
                    'l.mobile IN (:numbers)',
                    'l.phone IN (:numbers)'
                )
            )
            ->setParameter('numbers', \$searchForNumbers, Connection::PARAM_STR_ARRAY)
            ->execute()
            ->fetchAll();

        \$ids = array_column(\$foundContacts, 'id');
        if (0 === count(\$ids)) {
            throw new NumberNotFoundException(\$number);
        }

        \$collection = new ArrayCollection();
        /** @var Lead[] \$contacts */
        \$contacts = \$this->leadRepository->getEntities(['ids' => \$ids]);
        foreach (\$contacts as \$contact) {
            \$collection->set(\$contact->getId(), \$contact);
        }

        return \$collection;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Helper/ContactHelper.php";
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
        return new Source("", "@bundles/SmsBundle/Helper/ContactHelper.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Helper/ContactHelper.php");
    }
}
