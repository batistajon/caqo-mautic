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

/* @bundles/IntegrationsBundle/Tests/Functional/Services/SyncDataExchange/Internal/ObjectHelper/CompanyObjectHelperTest.php */
class __TwigTemplate_7ec724546a6a2bd2ade23206b7ff93f4631cdd1baf825093487e49945a51ff0b extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Tests\\Functional\\Services\\SyncDataExchange\\Internal\\ObjectHelper;

use DateTime;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\FieldDAO as OrderFieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object as SyncObject;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper\\CompanyObjectHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Mautic\\UserBundle\\Model\\UserModel;
use PHPUnit\\Framework\\Assert;

class CompanyObjectHelperTest extends MauticMysqlTestCase
{
    public function testUpdateEmpty(): void
    {
        /** @var CompanyObjectHelper \$companyObjectHelper */
        \$companyObjectHelper  = self::\$container->get('mautic.integrations.helper.company_object');
        \$updatedMappedObjects = \$companyObjectHelper->update([], []);
        Assert::assertSame([], \$updatedMappedObjects);
    }

    public function testUpdate(): void
    {
        /** @var UserModel \$userModel */
        \$userModel = self::\$container->get('mautic.user.model.user');
        \$users     = \$userModel->getRepository()->findAll();
        \$user      = reset(\$users);
        \$now       = new DateTime();

        \$company1 = new Company();
        \$company1->setDateAdded(\$now);
        \$company1->setOwner(\$user);

        \$company2 = new Company();
        \$company2->setDateAdded(\$now);
        \$company2->setOwner(\$user);

        /** @var CompanyModel \$companyModel */
        \$companyModel = self::\$container->get('mautic.lead.model.company');
        \$companyModel->saveEntity(\$company1);
        \$companyModel->saveEntity(\$company2);

        \$phone = '123456789';
        \$city  = 'Boston';

        /** @var CompanyObjectHelper \$companyObjectHelper */
        \$companyObjectHelper = self::\$container->get('mautic.integrations.helper.company_object');
        \$companyObjectHelper->update([
            \$company1->getId(),
            \$company2->getId(),
        ], [
            \$company1->getId() => \$this->buildObjectChangeDAO(\$company1, 'companyphone', \$phone),
            \$company2->getId() => \$this->buildObjectChangeDAO(\$company2, 'companycity', \$city),
        ]);

        Assert::assertSame(\$phone, \$company1->getPhone());
        Assert::assertSame(\$city, \$company2->getCity());
    }

    private function buildObjectChangeDAO(Company \$company, string \$name, string \$value): ObjectChangeDAO
    {
        \$objectChangeDAO = new ObjectChangeDAO('Test', MauticSyncDataExchange::OBJECT_COMPANY, \$company->getId(), SyncObject\\Company::NAME, \$company->getId(), new DateTime());
        \$objectChangeDAO->addField(new OrderFieldDAO(\$name, new NormalizedValueDAO(NormalizedValueDAO::PHONE_TYPE, \$value)));

        return \$objectChangeDAO;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Functional/Services/SyncDataExchange/Internal/ObjectHelper/CompanyObjectHelperTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Functional/Services/SyncDataExchange/Internal/ObjectHelper/CompanyObjectHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Functional/Services/SyncDataExchange/Internal/ObjectHelper/CompanyObjectHelperTest.php");
    }
}
