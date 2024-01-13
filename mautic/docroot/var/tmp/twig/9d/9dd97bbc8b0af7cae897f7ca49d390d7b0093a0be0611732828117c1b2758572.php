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

/* @bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/OpenSSLCipher.php */
class __TwigTemplate_c0007f5df7a4ad99b9ad36e4791591cc18713476adfd6040fa0a293c1a9ec0e2 extends Template
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

namespace Mautic\\CoreBundle\\Security\\Cryptography\\Cipher\\Symmetric;

use Mautic\\CoreBundle\\Security\\Exception\\Cryptography\\Symmetric\\InvalidDecryptionException;

class OpenSSLCipher implements SymmetricCipherInterface
{
    /** @var string */
    private \$cipher = 'AES-256-CBC';

    /**
     * @param string \$secretMessage
     * @param string \$key
     * @param string \$randomInitVector
     *
     * @return string
     */
    public function encrypt(\$secretMessage, \$key, \$randomInitVector)
    {
        \$key  = pack('H*', \$key);
        \$data = \$secretMessage.\$this->getHash(\$secretMessage, \$this->getHashKey(\$key));

        return openssl_encrypt(\$data, \$this->cipher, \$key, \$options = 0, \$randomInitVector);
    }

    /**
     * @param string \$encryptedMessage
     * @param string \$key
     * @param string \$originalInitVector
     *
     * @return string
     *
     * @throws InvalidDecryptionException
     */
    public function decrypt(\$encryptedMessage, \$key, \$originalInitVector)
    {
        if (strlen(\$originalInitVector) !== \$this->getInitVectorSize()) {
            throw new InvalidDecryptionException();
        }
        \$key           = pack('H*', \$key);
        \$decrypted     = trim(openssl_decrypt(\$encryptedMessage, \$this->cipher, \$key, \$options = 0, \$originalInitVector));
        \$sha256Length  = 64;
        \$secretMessage = substr(\$decrypted, 0, -\$sha256Length);
        \$originalHash  = substr(\$decrypted, -\$sha256Length);
        \$newHash       = \$this->getHash(\$secretMessage, \$this->getHashKey(\$key));
        if (!hash_equals(\$originalHash, \$newHash)) {
            throw new InvalidDecryptionException();
        }

        return \$secretMessage;
    }

    /**
     * @return string
     */
    public function getRandomInitVector()
    {
        return openssl_random_pseudo_bytes(\$this->getInitVectorSize());
    }

    /**
     * @return bool
     */
    public function isSupported()
    {
        if (!extension_loaded('openssl')) {
            return false;
        }
        \$testForRandom = \$this->getRandomInitVector();

        return false !== \$testForRandom;
    }

    /**
     * @return int
     */
    private function getInitVectorSize()
    {
        return openssl_cipher_iv_length(\$this->cipher);
    }

    /**
     * @param string \$data
     * @param string \$key
     *
     * @return string
     */
    private function getHash(\$data, \$key)
    {
        return hash_hmac('sha256', \$data, \$key);
    }

    /**
     * @param \$binaryKey
     *
     * @return string
     */
    private function getHashKey(\$binaryKey)
    {
        \$hexKey = bin2hex(\$binaryKey);
        // Get second half of hexKey version (stable but different than original key)
        return substr(\$hexKey, -32);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/OpenSSLCipher.php";
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
        return new Source("", "@bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/OpenSSLCipher.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/OpenSSLCipher.php");
    }
}
