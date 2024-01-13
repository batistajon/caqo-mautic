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

/* @bundles/UserBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_d47d9c70725a95c869d28b5011c13c7baa90bb894eb7fb7945d59f3d9506d561 extends Template
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

namespace Mautic\\UserBundle\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Mautic\\UserBundle\\Form\\Type\\ConfigType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class ConfigSubscriber implements EventSubscriberInterface
{
    private \$fileFields = [
        'saml_idp_metadata',
        'saml_idp_own_certificate',
        'saml_idp_own_private_key',
    ];

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            ConfigEvents::CONFIG_ON_GENERATE => ['onConfigGenerate', 0],
            ConfigEvents::CONFIG_PRE_SAVE    => ['onConfigSave', 0],
        ];
    }

    public function onConfigGenerate(ConfigBuilderEvent \$event)
    {
        \$event->addFileFields(\$this->fileFields)
            ->addForm(
                [
                    'bundle'     => 'UserBundle',
                    'formAlias'  => 'userconfig',
                    'formType'   => ConfigType::class,
                    'formTheme'  => 'MauticUserBundle:FormTheme\\Config',
                    'parameters' => \$event->getParametersFromConfig('MauticUserBundle'),
                ]
            );
    }

    public function onConfigSave(ConfigEvent \$event)
    {
        // Preserve existing value
        \$event->unsetIfEmpty('saml_idp_own_password');

        \$data = \$event->getConfig('userconfig');

        foreach (\$this->fileFields as \$field) {
            if (!isset(\$data[\$field]) || !\$data[\$field] instanceof UploadedFile) {
                continue;
            }

            \$data[\$field] = \$event->getFileContent(\$data[\$field]);

            switch (\$field) {
                case 'saml_idp_metadata':
                    if (!\$this->validateXml(\$data[\$field])) {
                        \$event->setError('mautic.user.saml.metadata.invalid', [], 'userconfig', \$field);
                    }
                    break;
                case 'saml_idp_own_certificate':
                    if (0 !== strpos(\$data[\$field], '-----BEGIN CERTIFICATE-----')) {
                        \$event->setError('mautic.user.saml.certificate.invalid', [], 'userconfig', \$field);
                    }
                    break;
                case 'saml_idp_own_private_key':
                    \$encryptedKey = (0 === strpos(\$data[\$field], '-----BEGIN ENCRYPTED PRIVATE KEY-----'));
                    \$decryptedKey = (0 === strpos(\$data[\$field], '-----BEGIN RSA PRIVATE KEY-----'));

                    if (!\$encryptedKey && !\$decryptedKey) {
                        \$event->setError('mautic.user.saml.private_key.invalid', [], 'userconfig', \$field);
                    }

                    if (\$encryptedKey && empty(\$data['saml_idp_own_password'])) {
                        \$event->setError('mautic.user.saml.private_key.password_needed', [], 'userconfig', 'saml_idp_own_password');
                    }

                    if (\$encryptedKey && !empty(\$data['saml_idp_own_password']) && !openssl_get_privatekey(\$data[\$field], \$data['saml_idp_own_password'])) {
                        \$event->setError('mautic.user.saml.private_key.password_invalid', [], 'userconfig', 'saml_idp_own_password');
                    }

                    break;
            }

            \$data[\$field] = \$event->encodeFileContents(\$data[\$field]);
        }

        \$event->setConfig(\$data, 'userconfig');
    }

    /**
     * @param \$content
     *
     * @return bool
     */
    private function validateXml(\$content)
    {
        \$valid = true;

        libxml_use_internal_errors(true);
        \$doc = simplexml_load_string(\$content);
        if (false === \$doc) {
            \$valid = false;
            libxml_clear_errors();
        }

        return \$valid;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/ConfigSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/EventListener/ConfigSubscriber.php");
    }
}
