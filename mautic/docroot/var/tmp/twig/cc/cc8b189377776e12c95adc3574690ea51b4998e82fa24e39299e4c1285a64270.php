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

/* @bundles/WebhookBundle/Tests/Helper/CampaignHelperTest.php */
class __TwigTemplate_bc51d57503134e3e8b700e8fce286a8e3c50b0f4290b167ba6de2f8e15218652 extends Template
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

namespace Mautic\\WebhookBundle\\Tests\\Helper;

use Doctrine\\Common\\Collections\\ArrayCollection;
use GuzzleHttp\\Client;
use GuzzleHttp\\Psr7\\Response;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\CompanyRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Mautic\\WebhookBundle\\Helper\\CampaignHelper;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class CampaignHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$contact;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|Client
     */
    private \$client;

    private \$companyModel;
    private \$companyRepository;

    /**
     * @var ArrayCollection
     */
    private \$ipCollection;

    /**
     * @var CampaignHelper
     */
    private \$campaignHelper;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|EventDispatcherInterface
     */
    private \$dispatcher;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->contact           = \$this->createMock(Lead::class);
        \$this->client            = \$this->createMock(Client::class);
        \$this->companyModel      = \$this->createMock(CompanyModel::class);
        \$this->dispatcher        = \$this->createMock(EventDispatcherInterface::class);
        \$this->ipCollection      = new ArrayCollection();
        \$this->companyRepository = \$this->getMockBuilder(CompanyRepository::class)
        ->disableOriginalConstructor()
        ->onlyMethods(['getCompaniesByLeadId'])
        ->getMock();

        \$this->companyRepository->method('getCompaniesByLeadId')
        ->willReturn([new Company()]);

        \$this->companyModel->method('getRepository')
        ->willReturn(\$this->companyRepository);

        \$this->campaignHelper = new CampaignHelper(\$this->client, \$this->companyModel, \$this->dispatcher);

        \$this->ipCollection->add((new IpAddress())->setIpAddress('127.0.0.1'));
        \$this->ipCollection->add((new IpAddress())->setIpAddress('127.0.0.2'));

        \$this->contact->expects(\$this->once())
            ->method('getProfileFields')
            ->willReturn(['email' => 'john@doe.email', 'company' => 'Mautic']);

        \$this->contact->expects(\$this->once())
            ->method('getIpAddresses')
            ->willReturn(\$this->ipCollection);
    }

    public function testFireWebhookWithGet()
    {
        \$expectedUrl = 'https://mautic.org?test=tee&email=john%40doe.email&IP=127.0.0.1%2C127.0.0.2';

        \$this->client->expects(\$this->once())
            ->method('get')
            ->with(\$expectedUrl, [
                \\GuzzleHttp\\RequestOptions::HEADERS => ['test' => 'tee', 'company' => 'Mautic'],
                \\GuzzleHttp\\RequestOptions::TIMEOUT => 10,
            ])
            ->willReturn(new Response(200));

        \$this->campaignHelper->fireWebhook(\$this->provideSampleConfig(), \$this->contact);
    }

    public function testFireWebhookWithPost()
    {
        \$config      = \$this->provideSampleConfig('post');
        \$expectedUrl = 'https://mautic.org?test=tee&email=john%40doe.email&IP=127.0.0.1%2C127.0.0.2';

        \$this->client->expects(\$this->once())
            ->method('request')
            ->with('post', 'https://mautic.org', [
                \\GuzzleHttp\\RequestOptions::FORM_PARAMS => ['test'  => 'tee', 'email' => 'john@doe.email', 'IP' => '127.0.0.1,127.0.0.2'],
                \\GuzzleHttp\\RequestOptions::HEADERS     => ['test' => 'tee', 'company' => 'Mautic'],
                \\GuzzleHttp\\RequestOptions::TIMEOUT     => 10,
            ])
            ->willReturn(new Response(200));

        \$this->campaignHelper->fireWebhook(\$config, \$this->contact);
    }

    public function testFireWebhookWithPostJson()
    {
        \$config      = \$this->provideSampleConfig('post');
        \$expectedUrl = 'https://mautic.org?test=tee&email=john%40doe.email&IP=127.0.0.1%2C127.0.0.2';

        \$config      = \$this->provideSampleConfig('post', 'application/json');
        \$this->client->expects(\$this->once())
            ->method('request')
            ->with('post', 'https://mautic.org', [
                \\GuzzleHttp\\RequestOptions::HEADERS => [
                    'test'         => 'tee',
                    'company'      => 'Mautic',
                    'content-type' => 'application/json',
                ],
                \\GuzzleHttp\\RequestOptions::TIMEOUT => 10,
                \\GuzzleHttp\\RequestOptions::BODY    => json_encode(
                    ['test' => 'tee', 'email' => 'john@doe.email', 'IP' => '127.0.0.1,127.0.0.2']
                ),
            ])
            ->willReturn(new Response(200));

        \$this->campaignHelper->fireWebhook(\$config, \$this->contact);
    }

    public function testFireWebhookWhenReturningNotFound()
    {
        \$this->client->expects(\$this->once())
            ->method('get')
            ->willReturn(new Response(404));

        \$this->expectException(\\OutOfRangeException::class);

        \$this->campaignHelper->fireWebhook(\$this->provideSampleConfig(), \$this->contact);
    }

    private function provideSampleConfig(\$method = 'get', \$type = 'application/x-www-form-urlencoded')
    {
        \$sample = [
            'url'             => 'https://mautic.org',
            'method'          => \$method,
            'timeout'         => 10,
            'additional_data' => [
                'list' => [
                    [
                        'label' => 'test',
                        'value' => 'tee',
                    ],
                    [
                        'label' => 'email',
                        'value' => '{contactfield=email}',
                    ],
                    [
                        'label' => 'IP',
                        'value' => '{contactfield=ipAddress}',
                    ],
                ],
            ],
            'headers' => [
                'list' => [
                    [
                        'label' => 'test',
                        'value' => 'tee',
                    ],
                    [
                        'label' => 'company',
                        'value' => '{contactfield=company}',
                    ],
                ],
            ],
        ];
        if ('application/json' == \$type) {
            array_push(\$sample['headers']['list'],
            [
                'label' => 'content-type',
                'value' => 'application/json',
            ]);
        }

        return \$sample;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Tests/Helper/CampaignHelperTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/Helper/CampaignHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Tests/Helper/CampaignHelperTest.php");
    }
}
