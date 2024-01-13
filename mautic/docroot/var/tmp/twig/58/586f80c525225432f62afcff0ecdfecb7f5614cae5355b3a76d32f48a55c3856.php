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

/* @bundles/CoreBundle/Helper/MaxMindDoNotSellDownloadHelper.php */
class __TwigTemplate_4861d6c497f752046eb74574340047ca73c6c36cb2617528bc0cb150e67ca473 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Psr\\Log\\LoggerInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

class MaxMindDoNotSellDownloadHelper
{
    /**
     * @const REMOTE_DATA
     */
    const REMOTE_DATA = 'https://api.maxmind.com/privacy/exclusions';

    /**
     * @var array<string>
     */
    private \$auth;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * @var HttpClientInterface
     */
    private \$httpClient;

    /**
     * @var string
     */
    private \$listPath;

    public function __construct(\$auth, LoggerInterface \$logger, HttpClientInterface \$httpClient, CoreParametersHelper \$coreParametersHelper)
    {
        \$this->logger     = \$logger;
        \$this->auth       = explode(':', \$auth, 2);
        \$this->httpClient = \$httpClient;
        \$this->listPath   = \$coreParametersHelper->get('maxmind_do_not_sell_list_path') ?? '';
    }

    /**
     * @return bool
     */
    public function downloadRemoteDataStore()
    {
        if (empty(\$this->getUser()) || empty(\$this->getPassword())) {
            \$this->logger->error('Missing user ID or license key for MaxMind');

            return false;
        }

        if (empty(\$this->listPath)) {
            \$this->logger->error('Missing file path');

            return false;
        }

        \$httpClientOptions = [
            'auth_basic' => [\$this->getUser(), \$this->getPassword()],
        ];

        try {
            \$response = \$this->httpClient->request('GET',
                \$this->getRemoteDataStoreDownloadUrl(),
                \$httpClientOptions);
        } catch (TransportExceptionInterface \$e) {
            \$this->logger->error('Failed to fetch remote Do Not Sell data: '.\$e->getMessage());

            return false;
        }

        try {
            if (\$response->getStatusCode() < 200 || \$response->getStatusCode() >= 300) {
                \$this->logger->error('Wrong status code for Do Not Sell data: '.\$response->getStatusCode());

                return false;
            }
            \$responseContent = \$response->getContent();
        } catch (\\Throwable \$e) {
            \$this->logger->error('Failed to get content from remote Do Not Sell data: '.\$e->getMessage());

            return false;
        }

        return (bool) file_put_contents(\$this->getLocalDataStoreFilepath(), \$responseContent);
    }

    /**
     * Service URL.
     *
     * @return string
     */
    public function getRemoteDataStoreDownloadUrl()
    {
        return self::REMOTE_DATA;
    }

    /**
     * Filepath to the local file.
     *
     * @return string
     */
    public function getLocalDataStoreFilepath()
    {
        return \$this->listPath;
    }

    /**
     * @return string
     */
    private function getUser()
    {
        return \$this->getAuthPart(0);
    }

    /**
     * @return string
     */
    protected function getPassword()
    {
        return \$this->getAuthPart(1);
    }

    /**
     * @param int \$position
     *
     * @return string
     */
    private function getAuthPart(\$position)
    {
        if (array_key_exists(\$position, \$this->auth)) {
            return \$this->auth[\$position];
        }

        return '';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/MaxMindDoNotSellDownloadHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/MaxMindDoNotSellDownloadHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/MaxMindDoNotSellDownloadHelper.php");
    }
}
