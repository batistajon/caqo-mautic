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

/* @bundles/CoreBundle/Tests/Command/UnusedIpDeleteCommandFunctionalTest.php */
class __TwigTemplate_f5ec775688328bbde0d958bbc499b7c3b02c9333539a28c3d1875bba8129eca2 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Command;

use Exception;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Entity\\IpAddressRepository;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class UnusedIpDeleteCommandFunctionalTest extends MauticMysqlTestCase
{
    /**
     * @throws Exception
     */
    public function testUnusedIpDeleteCommand(): void
    {
        // Emulate unused IP address.
        /** @var IpAddressRepository \$ipAddressRepo */
        \$ipAddressRepo = \$this->em->getRepository(IpAddress::class);
        \$ipAddressRepo->saveEntity(new IpAddress('127.0.0.1'));
        \$count = \$ipAddressRepo->count(['ipAddress' => '127.0.0.1']);
        self::assertSame(1, \$count);

        // Delete unused IP address.
        \$this->runCommand('mautic:unusedip:delete');

        \$count = \$ipAddressRepo->count(['ipAddress' => '127.0.0.1']);
        self::assertSame(0, \$count);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Command/UnusedIpDeleteCommandFunctionalTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Command/UnusedIpDeleteCommandFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Command/UnusedIpDeleteCommandFunctionalTest.php");
    }
}
