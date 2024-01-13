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

/* @bundles/EmailBundle/Tests/Controller/PublicControllerFunctionalTest.php */
class __TwigTemplate_74e37b7c5c6d4ddda253191dc41316dec99c082f30b2f74d9469c7519fc21dcb extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\FormBundle\\Entity\\Form;

class PublicControllerFunctionalTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['show_contact_preferences'] = 1;
        parent::setUp();
    }

    public function testUnsubscribeFormActionWithoutTheme(): void
    {
        \$form = \$this->getForm(null);

        \$stat = \$this->getStat(\$form);

        \$this->em->flush();

        \$crawler = \$this->client->request('GET', '/email/unsubscribe/'.\$stat->getTrackingHash());

        self::assertStringContainsString('form/submit?formId='.\$stat->getEmail()->getUnsubscribeForm()->getId(), \$crawler->filter('form')->eq(0)->attr('action'));
        \$this->assertTrue(\$this->client->getResponse()->isOk());
    }

    public function testUnsubscribeFormActionWithThemeWithoutFormSupport(): void
    {
        \$form = \$this->getForm('aurora');

        \$stat = \$this->getStat(\$form);

        \$this->em->flush();

        \$crawler = \$this->client->request('GET', '/email/unsubscribe/'.\$stat->getTrackingHash());

        self::assertStringContainsString('form/submit?formId='.\$stat->getEmail()->getUnsubscribeForm()->getId(), \$crawler->filter('form')->eq(0)->attr('action'));
        \$this->assertTrue(\$this->client->getResponse()->isOk());
    }

    public function testUnsubscribeFormActionWithThemeWithFormSupport(): void
    {
        \$form = \$this->getForm('blank');

        \$stat = \$this->getStat(\$form);

        \$this->em->flush();

        \$crawler = \$this->client->request('GET', '/email/unsubscribe/'.\$stat->getTrackingHash());

        self::assertStringContainsString('form/submit?formId='.\$stat->getEmail()->getUnsubscribeForm()->getId(), \$crawler->filter('form')->eq(0)->attr('action'));
        \$this->assertTrue(\$this->client->getResponse()->isOk());
    }

    public function testWithoutUnsubscribeFormAction(): void
    {
        \$this->getForm('blank');

        \$stat = \$this->getStat();

        \$this->em->flush();

        \$crawler = \$this->client->request('GET', '/email/unsubscribe/'.\$stat->getTrackingHash());

        self::assertStringNotContainsString('form/submit?formId=', \$crawler->html());
        \$this->assertTrue(\$this->client->getResponse()->isOk());
    }

    /**
     * @throws \\Doctrine\\ORM\\ORMException
     */
    protected function getStat(Form \$form = null): Stat
    {
        \$trackingHash = 'tracking_hash_unsubscribe_form_email';
        \$emailName    = 'Test unsubscribe form email';

        \$email = new Email();
        \$email->setName(\$emailName);
        \$email->setSubject(\$emailName);
        \$email->setEmailType('template');
        \$email->setUnsubscribeForm(\$form);
        \$this->em->persist(\$email);

        // Create a test email stat.
        \$stat = new Stat();
        \$stat->setTrackingHash(\$trackingHash);
        \$stat->setEmailAddress('john@doe.email');
        \$stat->setDateSent(new \\DateTime());
        \$stat->setEmail(\$email);
        \$this->em->persist(\$stat);

        return \$stat;
    }

    /**
     * @throws \\Doctrine\\ORM\\ORMException
     */
    protected function getForm(?string \$formTemplate): Form
    {
        \$formName = 'unsubscribe_test_form';

        \$form = new Form();
        \$form->setName(\$formName);
        \$form->setAlias(\$formName);
        \$form->setTemplate(\$formTemplate);
        \$this->em->persist(\$form);

        return \$form;
    }

    public function testPreviewDisabledByDefault(): void
    {
        \$emailName    = 'Test preview email';

        \$email = new Email();
        \$email->setName(\$emailName);
        \$email->setSubject(\$emailName);
        \$email->setEmailType('template');
        \$this->em->persist(\$email);

        \$this->client->request('GET', '/email/preview/'.\$email->getId());
        \$this->assertTrue(\$this->client->getResponse()->isNotFound(), \$this->client->getResponse()->getContent());

        \$email->setPublicPreview(true);
        \$this->em->persist(\$email);

        \$this->em->flush();

        \$this->client->request('GET', '/email/preview/'.\$email->getId());
        \$this->assertTrue(\$this->client->getResponse()->isOk(), \$this->client->getResponse()->getContent());
    }

    public function testPreviewForExpiredEmail(): void
    {
        \$emailName    = 'Test preview email';

        \$email = new Email();
        \$email->setName(\$emailName);
        \$email->setSubject(\$emailName);
        \$email->setPublishUp(new \\DateTime('-2 day'));
        \$email->setPublishDown(new \\DateTime('-1 day'));
        \$email->setEmailType('template');
        \$email->setPublicPreview(true);
        \$this->em->persist(\$email);

        \$this->em->flush();

        \$this->client->request('GET', '/email/preview/'.\$email->getId());
        \$this->assertTrue(\$this->client->getResponse()->isOk(), \$this->client->getResponse()->getContent());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Controller/PublicControllerFunctionalTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Controller/PublicControllerFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Controller/PublicControllerFunctionalTest.php");
    }
}
