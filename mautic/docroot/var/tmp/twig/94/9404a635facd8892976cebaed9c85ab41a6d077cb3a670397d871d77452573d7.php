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

/* @bundles/UserBundle/Tests/Security/SAML/Store/TrustOptionsStoreTest.php */
class __TwigTemplate_6f8f9b511aaf63f09357ee2e55d90211e348026ce20dbe48056c4c4755f7f13e extends Template
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

namespace Mautic\\UserBundle\\Tests\\Security\\SAML\\Store;

use LightSaml\\Meta\\TrustOptions\\TrustOptions;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\UserBundle\\Security\\SAML\\Store\\TrustOptionsStore;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class TrustOptionsStoreTest extends TestCase
{  /**
 * @var CoreParametersHelper|MockObject
 */
    private \$coreParametersHelper;

    /**
     * @var TrustOptionsStore
     */
    private \$store;

    protected function setUp(): void
    {
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->store                = new TrustOptionsStore(\$this->coreParametersHelper, 'foobar');
    }

    public function testTrustOptionsConfiguredIfSamlEnabledAndEntityIdMatches()
    {
        \$store = \$this->store->get('foobar');
        \$this->assertInstanceOf(TrustOptions::class, \$store);
    }

    public function testHasTrustOptionsIfSamlConfiguredAndEntityIdMatches()
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_metadata')
            ->willReturn('1');

        \$this->assertTrue(\$this->store->has('foobar'));
    }

    public function testNotHaveTrustOptionsIfSamlDisabled()
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_metadata')
            ->willReturn('');

        \$this->assertFalse(\$this->store->has('foobar'));
    }

    public function testNotHaveTrustOptionsIfEntityIdDoesNotMatch()
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_metadata')
            ->willReturn('1');

        \$this->assertFalse(\$this->store->has('barfoo'));
    }

    public function testTrustOptionsDoNotSignRequestForDefault()
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_own_certificate')
            ->willReturn('');

        \$store = \$this->store->get('foobar');
        \$this->assertFalse(\$store->getSignAuthnRequest());
    }

    public function testTrustOptionsSignRequestForCustom()
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_own_certificate')
            ->willReturn('abc');

        \$store = \$this->store->get('foobar');
        \$this->assertTrue(\$store->getSignAuthnRequest());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Tests/Security/SAML/Store/TrustOptionsStoreTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Security/SAML/Store/TrustOptionsStoreTest.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Tests/Security/SAML/Store/TrustOptionsStoreTest.php");
    }
}
