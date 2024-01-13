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

/* @bundles/EmailBundle/Tests/EventListener/BuilderSubscriberTest.php */
class __TwigTemplate_faee2e5ac2f0b34508001609e4e1603cc253deefc0a50f4ce6a3c3f60af25f77 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\EmailBundle\\EventListener\\BuilderSubscriber;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\PageBundle\\Model\\RedirectModel;
use Mautic\\PageBundle\\Model\\TrackableModel;
use Symfony\\Component\\Translation\\TranslatorInterface;

class BuilderSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider fixEmailAccessibilityContent
     */
    public function testFixEmailAccessibility(string \$content, string \$expectedContent, ?string \$emailLocale): void
    {
        \$coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$emailModel           = \$this->createMock(EmailModel::class);
        \$trackableModel       = \$this->createMock(TrackableModel::class);
        \$redirectModel        = \$this->createMock(RedirectModel::class);
        \$translator           = \$this->createMock(TranslatorInterface::class);
        \$entityManager        = \$this->createMock(EntityManager::class);
        \$builderSubscriber    = new BuilderSubscriber(
            \$coreParametersHelper,
            \$emailModel,
            \$trackableModel,
            \$redirectModel,
            \$translator,
            \$entityManager
        );

        \$coreParametersHelper->method('get')->willReturnCallback(function (\$key) {
            if ('locale' === \$key) {
                return 'default_locale';
            }

            return false;
        });

        \$email = new Email();
        \$email->setSubject('A unicorn spotted in Alaska');
        \$email->setLanguage(\$emailLocale);

        \$emailSendEvent = new EmailSendEvent(null, ['email' => \$email]);
        \$emailSendEvent->setContent(\$content);
        \$builderSubscriber->fixEmailAccessibility(\$emailSendEvent);
        \$builderSubscriber->onEmailGenerate(\$emailSendEvent);
        \$this->assertSame(\$expectedContent, \$emailSendEvent->getContent());
    }

    /**
     * @return iterable<array<int,string>>
     */
    public function fixEmailAccessibilityContent(): iterable
    {
        yield [
            '<html><head></head></html>',
            '<html lang=\"en\"><head><title>A unicorn spotted in Alaska</title></head></html>',
            'en',
        ];
        yield [
            '<html><head></head></html>',
            '<html lang=\"es\"><head><title>A unicorn spotted in Alaska</title></head></html>',
            'es',
        ];
        yield [
            '<html><head></head></html>',
            '<html lang=\"default_locale\"><head><title>A unicorn spotted in Alaska</title></head></html>',
            '',
        ];
        yield [
            \"<html>\\n\\n<head>\\n</head>\\n</html>\",
            \"<html lang=\\\"en\\\">\\n\\n<head>\\n<title>A unicorn spotted in Alaska</title></head>\\n</html>\",
            'en',
        ];
        yield [
            '<html lang=\"en\"><head></head></html>',
            '<html lang=\"en\"><head><title>A unicorn spotted in Alaska</title></head></html>',
            'en',
        ];
        yield [
            '<html lang=\"en\"><head></head></html>',
            '<html lang=\"en\"><head><title>A unicorn spotted in Alaska</title></head></html>',
            'es',
        ];
        yield [
            '<html lang=\"cs_CZ\"><head></head></html>',
            '<html lang=\"cs_CZ\"><head><title>A unicorn spotted in Alaska</title></head></html>',
            'en',
        ];
        yield [
            '<html lang=\"en\"><head><title>Existed Title</title></head></html>',
            '<html lang=\"en\"><head><title>Existed Title</title></head></html>',
            'en',
        ];
        yield [
            '<head><title>Existed Title</title></head>',
            '<head><title>Existed Title</title></head>',
            'en',
        ];
        yield [
            '<html><body>xxx</body></html>',
            '<html lang=\"en\"><head><title>A unicorn spotted in Alaska</title></head><body>xxx</body></html>',
            'en',
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/EventListener/BuilderSubscriberTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/EventListener/BuilderSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/EventListener/BuilderSubscriberTest.php");
    }
}
