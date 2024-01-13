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

/* @bundles/UserBundle/Tests/EventListener/ConfigSubscriberTest.php */
class __TwigTemplate_f7b42be3850731e6de8bb1dc6840931deab890546ec017531825211342110bf2 extends Template
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

namespace Mautic\\UserBundle\\Tests\\EventListener;

use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Mautic\\UserBundle\\EventListener\\ConfigSubscriber;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class ConfigSubscriberTest extends TestCase
{
    /**
     * @var ConfigEvent|MockObject
     */
    private \$configEvent;

    protected function setUp(): void
    {
        \$this->configEvent = \$this->createMock(ConfigEvent::class);
    }

    public function testOwnPasswordIsNotWipedOutOnConfigSaveIfEmpty()
    {
        \$subscriber = new ConfigSubscriber();
        \$this->configEvent->expects(\$this->once())
            ->method('unsetIfEmpty')
            ->with('saml_idp_own_password');

        \$this->configEvent->expects(\$this->once())
            ->method('getConfig')
            ->with('userconfig')
            ->willReturn([]);

        \$subscriber->onConfigSave(\$this->configEvent);
    }

    public function testMetadataFileIsDetectedAsXml()
    {
        \$subscriber = new ConfigSubscriber();
        \$this->configEvent->expects(\$this->once())
            ->method('unsetIfEmpty')
            ->with('saml_idp_own_password');

        \$file = \$this->createMock(UploadedFile::class);
        \$this->configEvent->expects(\$this->once())
            ->method('getFileContent')
            ->willReturn('<xml></xml>');

        \$this->configEvent->expects(\$this->once())
            ->method('getConfig')
            ->with('userconfig')
            ->willReturn(
                [
                    'saml_idp_metadata' => \$file,
                ]
            );

        \$this->configEvent->expects(\$this->never())
            ->method('setError');

        \$subscriber->onConfigSave(\$this->configEvent);
    }

    public function testMetadataFileFailsValidationIfNotXml()
    {
        \$subscriber = new ConfigSubscriber();

        \$file = \$this->createMock(UploadedFile::class);
        \$this->configEvent->expects(\$this->once())
            ->method('getFileContent')
            ->willReturn('foobar');

        \$this->configEvent->expects(\$this->once())
            ->method('getConfig')
            ->with('userconfig')
            ->willReturn(
                [
                    'saml_idp_metadata' => \$file,
                ]
            );

        \$this->configEvent->expects(\$this->once())
            ->method('setError')
            ->with('mautic.user.saml.metadata.invalid', [], 'userconfig', 'saml_idp_metadata');

        \$subscriber->onConfigSave(\$this->configEvent);
    }

    public function testCertificatePassesValidationIfValid()
    {
        \$subscriber = new ConfigSubscriber();

        \$file = \$this->createMock(UploadedFile::class);
        \$this->configEvent->expects(\$this->once())
            ->method('getFileContent')
            ->willReturn('-----BEGIN CERTIFICATE-----');

        \$this->configEvent->expects(\$this->once())
            ->method('getConfig')
            ->with('userconfig')
            ->willReturn(
                [
                    'saml_idp_own_certificate' => \$file,
                ]
            );

        \$this->configEvent->expects(\$this->never())
            ->method('setError');

        \$subscriber->onConfigSave(\$this->configEvent);
    }

    public function testCertificateFailsValidationIfNotValid()
    {
        \$subscriber = new ConfigSubscriber();

        \$file = \$this->createMock(UploadedFile::class);
        \$this->configEvent->expects(\$this->once())
            ->method('getFileContent')
            ->willReturn('foobar');

        \$this->configEvent->expects(\$this->once())
            ->method('getConfig')
            ->with('userconfig')
            ->willReturn(
                [
                    'saml_idp_own_certificate' => \$file,
                ]
            );

        \$this->configEvent->expects(\$this->once())
            ->method('setError')
            ->with('mautic.user.saml.certificate.invalid', [], 'userconfig', 'saml_idp_own_certificate');

        \$subscriber->onConfigSave(\$this->configEvent);
    }

    public function testPrivateKeyPassesValidationIfValid()
    {
        \$subscriber = new ConfigSubscriber();

        \$file = \$this->createMock(UploadedFile::class);
        \$this->configEvent->expects(\$this->once())
            ->method('getFileContent')
            ->willReturn('-----BEGIN RSA PRIVATE KEY-----');

        \$this->configEvent->expects(\$this->once())
            ->method('getConfig')
            ->with('userconfig')
            ->willReturn(
                [
                    'saml_idp_own_private_key' => \$file,
                ]
            );

        \$this->configEvent->expects(\$this->never())
            ->method('setError');

        \$subscriber->onConfigSave(\$this->configEvent);
    }

    public function testPrivateKeyFailsValidationIfNotValid()
    {
        \$subscriber = new ConfigSubscriber();

        \$file = \$this->createMock(UploadedFile::class);
        \$this->configEvent->expects(\$this->once())
            ->method('getFileContent')
            ->willReturn('foobar');

        \$this->configEvent->expects(\$this->once())
            ->method('getConfig')
            ->with('userconfig')
            ->willReturn(
                [
                    'saml_idp_own_private_key' => \$file,
                ]
            );

        \$this->configEvent->expects(\$this->once())
            ->method('setError')
            ->with('mautic.user.saml.private_key.invalid', [], 'userconfig', 'saml_idp_own_private_key');

        \$subscriber->onConfigSave(\$this->configEvent);
    }

    public function testEncryptedPrivateKeyPassesValidationIfValid()
    {
        \$subscriber = new ConfigSubscriber();

        \$file = \$this->createMock(UploadedFile::class);
        \$key  = <<<KEY
-----BEGIN ENCRYPTED PRIVATE KEY-----
MIICxjBABgkqhkiG9w0BBQ0wMzAbBgkqhkiG9w0BBQwwDgQI+tgT3QFhjEgCAggA
MBQGCCqGSIb3DQMHBAg1HGrSHb7zVwSCAoBG89zqAxAx+vPvhQVW6dfJFBTSpAGq
RRlfiygr0iwLCxpnoT5ZY/0Od28uvB/HkAb0cCg6sYvNVvDDDitspCb3vIU/gPmN
h8VEtgxDlXEE1YwinDn0BfO5tRoC4SfOrJRsrRdX4qc7xk80Kk74cbzLJy6VESQ5
u/ZY8Yw2E9exIH4rlZ+dBfs4JekQS/fLbiXGdtSdVF6RO0e9IhRsb3dUhSqqJafl
6+VkptheXGFwTySf8c5yLmMUC/z2NCGxO5G91uUxshEQvdQ2NM0kvt9AG3TcwZ6g
obqjHWfVEmT9j9Raqbkn+9desalKRONbe1lI0IL1vcIBXWduQUNQK1dT9ghbwGT+
vegw86xlMtLNPrvFxc3G6ZVtid/T1wDXZEKKCqp9Uei3fh0SLKy2witjt5yvabbc
QhXOS2hVA9zSQ0IGcycWzxeaf+Nb826xvvAV9Tf1GhreT6vQWC8BxDCVr9w31h6y
LnC5R2dxzom1d/kiBqlcGh1u9d+2OyCFpfYvymWlKcXYYO8E2Nu2oK4IlzB0YdJp
8/y7PLGzaipf57e8srGMGvLMKwQTLCvaDu/gxl4d+awwTZ9UsG2qMOKZSkIU4IMu
uP0CDSbRxbHBq9gY4ZiECuAxmmoadZXmNOu8iGQWa9rmoCqW5XmAgwvcnfxDWawI
ZTJUgHdZ6Tfe2jPFJjSZVoU/en0W5BQXgy1u3BDX68C8nAfZ4xmeyELcMub9hTYb
HTDmYIBozZNIcYHB6OGZnURuGeofMVJqMkNfnEuSuoCJsXGIhLznDKp8G00F9eR2
1L+B0ZUZv/O82qEGzC/IX7+CFmSDStV9R400cDvi+8BsdMMB+WV6SMnK
-----END ENCRYPTED PRIVATE KEY-----
KEY;

        \$this->configEvent->expects(\$this->once())
            ->method('getFileContent')
            ->willReturn(\$key);

        \$this->configEvent->expects(\$this->once())
            ->method('getConfig')
            ->with('userconfig')
            ->willReturn(
                [
                    'saml_idp_own_private_key' => \$file,
                    'saml_idp_own_password'    => 'abc123',
                ]
            );

        \$this->configEvent->expects(\$this->never())
            ->method('setError');

        \$subscriber->onConfigSave(\$this->configEvent);
    }

    public function testPrivateKeyFailsValidationIfPasswordNotValid()
    {
        \$subscriber = new ConfigSubscriber();

        \$file = \$this->createMock(UploadedFile::class);
        \$key  = <<<KEY
-----BEGIN ENCRYPTED PRIVATE KEY-----
MIICxjBABgkqhkiG9w0BBQ0wMzAbBgkqhkiG9w0BBQwwDgQI+tgT3QFhjEgCAggA
MBQGCCqGSIb3DQMHBAg1HGrSHb7zVwSCAoBG89zqAxAx+vPvhQVW6dfJFBTSpAGq
RRlfiygr0iwLCxpnoT5ZY/0Od28uvB/HkAb0cCg6sYvNVvDDDitspCb3vIU/gPmN
h8VEtgxDlXEE1YwinDn0BfO5tRoC4SfOrJRsrRdX4qc7xk80Kk74cbzLJy6VESQ5
u/ZY8Yw2E9exIH4rlZ+dBfs4JekQS/fLbiXGdtSdVF6RO0e9IhRsb3dUhSqqJafl
6+VkptheXGFwTySf8c5yLmMUC/z2NCGxO5G91uUxshEQvdQ2NM0kvt9AG3TcwZ6g
obqjHWfVEmT9j9Raqbkn+9desalKRONbe1lI0IL1vcIBXWduQUNQK1dT9ghbwGT+
vegw86xlMtLNPrvFxc3G6ZVtid/T1wDXZEKKCqp9Uei3fh0SLKy2witjt5yvabbc
QhXOS2hVA9zSQ0IGcycWzxeaf+Nb826xvvAV9Tf1GhreT6vQWC8BxDCVr9w31h6y
LnC5R2dxzom1d/kiBqlcGh1u9d+2OyCFpfYvymWlKcXYYO8E2Nu2oK4IlzB0YdJp
8/y7PLGzaipf57e8srGMGvLMKwQTLCvaDu/gxl4d+awwTZ9UsG2qMOKZSkIU4IMu
uP0CDSbRxbHBq9gY4ZiECuAxmmoadZXmNOu8iGQWa9rmoCqW5XmAgwvcnfxDWawI
ZTJUgHdZ6Tfe2jPFJjSZVoU/en0W5BQXgy1u3BDX68C8nAfZ4xmeyELcMub9hTYb
HTDmYIBozZNIcYHB6OGZnURuGeofMVJqMkNfnEuSuoCJsXGIhLznDKp8G00F9eR2
1L+B0ZUZv/O82qEGzC/IX7+CFmSDStV9R400cDvi+8BsdMMB+WV6SMnK
-----END ENCRYPTED PRIVATE KEY-----
KEY;

        \$this->configEvent->expects(\$this->once())
            ->method('getFileContent')
            ->willReturn(\$key);

        \$this->configEvent->expects(\$this->once())
            ->method('getConfig')
            ->with('userconfig')
            ->willReturn(
                [
                    'saml_idp_own_private_key' => \$file,
                    'saml_idp_own_password'    => '123abc',
                ]
            );

        \$this->configEvent->expects(\$this->once())
            ->method('setError')
            ->with('mautic.user.saml.private_key.password_invalid', [], 'userconfig', 'saml_idp_own_password');

        \$subscriber->onConfigSave(\$this->configEvent);
    }

    public function testPrivateKeyFailsValidationIfPasswordMissing()
    {
        \$subscriber = new ConfigSubscriber();

        \$file = \$this->createMock(UploadedFile::class);
        \$key  = <<<KEY
-----BEGIN ENCRYPTED PRIVATE KEY-----
MIICxjBABgkqhkiG9w0BBQ0wMzAbBgkqhkiG9w0BBQwwDgQI+tgT3QFhjEgCAggA
MBQGCCqGSIb3DQMHBAg1HGrSHb7zVwSCAoBG89zqAxAx+vPvhQVW6dfJFBTSpAGq
RRlfiygr0iwLCxpnoT5ZY/0Od28uvB/HkAb0cCg6sYvNVvDDDitspCb3vIU/gPmN
h8VEtgxDlXEE1YwinDn0BfO5tRoC4SfOrJRsrRdX4qc7xk80Kk74cbzLJy6VESQ5
u/ZY8Yw2E9exIH4rlZ+dBfs4JekQS/fLbiXGdtSdVF6RO0e9IhRsb3dUhSqqJafl
6+VkptheXGFwTySf8c5yLmMUC/z2NCGxO5G91uUxshEQvdQ2NM0kvt9AG3TcwZ6g
obqjHWfVEmT9j9Raqbkn+9desalKRONbe1lI0IL1vcIBXWduQUNQK1dT9ghbwGT+
vegw86xlMtLNPrvFxc3G6ZVtid/T1wDXZEKKCqp9Uei3fh0SLKy2witjt5yvabbc
QhXOS2hVA9zSQ0IGcycWzxeaf+Nb826xvvAV9Tf1GhreT6vQWC8BxDCVr9w31h6y
LnC5R2dxzom1d/kiBqlcGh1u9d+2OyCFpfYvymWlKcXYYO8E2Nu2oK4IlzB0YdJp
8/y7PLGzaipf57e8srGMGvLMKwQTLCvaDu/gxl4d+awwTZ9UsG2qMOKZSkIU4IMu
uP0CDSbRxbHBq9gY4ZiECuAxmmoadZXmNOu8iGQWa9rmoCqW5XmAgwvcnfxDWawI
ZTJUgHdZ6Tfe2jPFJjSZVoU/en0W5BQXgy1u3BDX68C8nAfZ4xmeyELcMub9hTYb
HTDmYIBozZNIcYHB6OGZnURuGeofMVJqMkNfnEuSuoCJsXGIhLznDKp8G00F9eR2
1L+B0ZUZv/O82qEGzC/IX7+CFmSDStV9R400cDvi+8BsdMMB+WV6SMnK
-----END ENCRYPTED PRIVATE KEY-----
KEY;

        \$this->configEvent->expects(\$this->once())
            ->method('getFileContent')
            ->willReturn(\$key);

        \$this->configEvent->expects(\$this->once())
            ->method('getConfig')
            ->with('userconfig')
            ->willReturn(
                [
                    'saml_idp_own_private_key' => \$file,
                    'saml_idp_own_password'    => '',
                ]
            );

        \$this->configEvent->expects(\$this->once())
            ->method('setError')
            ->with('mautic.user.saml.private_key.password_needed', [], 'userconfig', 'saml_idp_own_password');

        \$subscriber->onConfigSave(\$this->configEvent);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Tests/EventListener/ConfigSubscriberTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/EventListener/ConfigSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Tests/EventListener/ConfigSubscriberTest.php");
    }
}
