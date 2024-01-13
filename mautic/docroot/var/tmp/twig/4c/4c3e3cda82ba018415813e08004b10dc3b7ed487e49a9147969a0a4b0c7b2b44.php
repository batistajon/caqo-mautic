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

/* @bundles/CoreBundle/Tests/Unit/Helper/EncryptionHelperTest.php */
class __TwigTemplate_514fc34deb9a6ae864c626149a4815a585efa405bed7f605862042550abfc8ec extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\EncryptionHelper;
use Mautic\\CoreBundle\\Security\\Cryptography\\Cipher\\Symmetric\\OpenSSLCipher;
use Mautic\\CoreBundle\\Security\\Cryptography\\Cipher\\Symmetric\\SymmetricCipherInterface;
use Mautic\\CoreBundle\\Security\\Exception\\Cryptography\\Symmetric\\InvalidDecryptionException;
use PHPUnit\\Framework\\MockObject\\MockObject;

class EncryptionHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|CoreParametersHelper
     */
    private \$coreParametersHelperMock;

    /**
     * @var MockObject|OpenSSLCipher
     */
    private \$mainCipherMock;

    /**
     * @var MockObject|SymmetricCipherInterface
     */
    private \$secondaryCipherMock;

    /**
     * @var string
     */
    private \$key = 'totallySecretKeyHere';

    protected function setUp(): void
    {
        parent::setUp();
        \$this->coreParametersHelperMock = \$this->createMock(CoreParametersHelper::class);
        \$this->mainCipherMock           = \$this->createMock(OpenSSLCipher::class);
        \$this->secondaryCipherMock      = \$this->createMock(SymmetricCipherInterface::class);
    }

    public function testEncryptMainSupported(): void
    {
        \$initVector       = 'totallyRandomInitializationVector';
        \$secretMessage    = 'totallySecretMessage';
        \$encryptedMessage = 'encryptionIsMagical';
        \$expectedReturn   = base64_encode(\$encryptedMessage).'|'.base64_encode(\$initVector);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('getRandomInitVector')
            ->willReturn(\$initVector);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('encrypt')
            ->with(serialize(\$secretMessage), \$this->key, \$initVector)
            ->willReturn(\$encryptedMessage);

        \$encryptionHelper = \$this->getEncryptionHelper();
        \$actualReturn     = \$encryptionHelper->encrypt(\$secretMessage);
        \$this->assertSame(\$expectedReturn, \$actualReturn);
    }

    public function testEncryptMainNotSupported(): void
    {
        \$initVector       = 'totallyRandomInitializationVector';
        \$secretMessage    = 'totallySecretMessage';
        \$encryptedMessage = 'encryptionIsMagical';
        \$expectedReturn   = base64_encode(\$encryptedMessage).'|'.base64_encode(\$initVector);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(false);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('getRandomInitVector')
            ->willReturn(\$initVector);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('encrypt')
            ->with(serialize(\$secretMessage), \$this->key, \$initVector)
            ->willReturn(\$encryptedMessage);

        \$encryptionHelper = \$this->getEncryptionHelper();
        \$actualReturn     = \$encryptionHelper->encrypt(\$secretMessage);
        \$this->assertSame(\$expectedReturn, \$actualReturn);
    }

    public function testDecryptMain(): void
    {
        \$toDecrypt      = 'ZW5jcnlwdGlvbklzTWFnaWNhbA==|dG90YWxseVJhbmRvbUluaXRpYWxpemF0aW9uVmVjdG9y';
        \$expectedReturn = 'totallySecretMessage';

        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('decrypt')
            ->with('encryptionIsMagical', \$this->key, 'totallyRandomInitializationVector')
            ->willReturn('s:20:\"totallySecretMessage\";');

        \$encryptionHelper = \$this->getEncryptionHelper();
        \$actualReturn     = \$encryptionHelper->decrypt(\$toDecrypt);
        \$this->assertSame(\$expectedReturn, \$actualReturn);
    }

    public function testDecryptSecondary(): void
    {
        \$toDecrypt      = 'ZW5jcnlwdGlvbklzTWFnaWNhbA==|dG90YWxseVJhbmRvbUluaXRpYWxpemF0aW9uVmVjdG9y';
        \$expectedReturn = 'totallySecretMessage';

        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('decrypt')
            ->with('encryptionIsMagical', \$this->key, 'totallyRandomInitializationVector')
            ->willThrowException(new InvalidDecryptionException());

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('decrypt')
            ->with('encryptionIsMagical', \$this->key, 'totallyRandomInitializationVector')
            ->willReturn('s:20:\"totallySecretMessage\";');

        \$encryptionHelper = \$this->getEncryptionHelper();
        \$actualReturn     = \$encryptionHelper->decrypt(\$toDecrypt, false);
        \$this->assertSame(\$expectedReturn, \$actualReturn);
    }

    public function testDecryptFalse(): void
    {
        \$toDecrypt = 'ZW5jcnlwdGlvbklzTWFnaWNhbA==|dG90YWxseVJhbmRvbUluaXRpYWxpemF0aW9uVmVjdG9y';

        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->mainCipherMock->expects(\$this->once())
            ->method('decrypt')
            ->with('encryptionIsMagical', \$this->key, 'totallyRandomInitializationVector')
            ->willThrowException(new InvalidDecryptionException());

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('decrypt')
            ->with('encryptionIsMagical', \$this->key, 'totallyRandomInitializationVector')
            ->willThrowException(new InvalidDecryptionException());

        \$encryptionHelper = \$this->getEncryptionHelper();
        \$actualReturn     = \$encryptionHelper->decrypt(\$toDecrypt, false);
        \$this->assertFalse(\$actualReturn);
    }

    public function testMainSupported(): void
    {
        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(false);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->getEncryptionHelper();
    }

    public function testSecondarySupported(): void
    {
        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(false);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(true);

        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.secret_key')
            ->willReturn(\$this->key);

        \$this->getEncryptionHelper();
    }

    public function testNoneSupported(): void
    {
        \$this->mainCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(false);

        \$this->secondaryCipherMock->expects(\$this->once())
            ->method('isSupported')
            ->willReturn(false);

        \$this->expectException(\\RuntimeException::class);
        \$this->getEncryptionHelper();
    }

    private function getEncryptionHelper(): EncryptionHelper
    {
        return new EncryptionHelper(
            \$this->coreParametersHelperMock,
            \$this->mainCipherMock,
            \$this->secondaryCipherMock
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/EncryptionHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/EncryptionHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/EncryptionHelperTest.php");
    }
}
