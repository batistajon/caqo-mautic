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

/* @bundles/LeadBundle/Tests/DataFixtures/ORM/LoadClickData.php */
class __TwigTemplate_f1eab1c88f3d2d26a64fb0f354cd8ba47815d8c8238136a27f4e9bfc3c59afd1 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Entity\\Redirect;
use Mautic\\SmsBundle\\Entity\\Sms;

class LoadClickData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        // Create an email for clicks
        \$email = new Email();
        \$email->setSubject('Email Test');
        \$email->setName('Email Test');
        \$manager->persist(\$email);
        \$manager->flush();

        // Create a SMS for clicks
        \$sms = new Sms();
        \$sms->setName('SMS Test');
        \$sms->setMessage('hello');
        \$manager->persist(\$sms);
        \$manager->flush();

        // Create redirect URL
        \$redirect = new Redirect();
        \$redirect->setUrl('https://mautic.org');
        \$redirect->setRedirectId();
        \$manager->persist(\$redirect);
        \$manager->flush();

        \$hits = [
            [
                'redirect'   => \$redirect,
                'alias'      => 'click-email-1',
                'source'     => 'email',
                'source_id'  => \$email->getId(),
                'email'      => \$email,
                'date_hit'   => new \\DateTime(),
                'lead_id'    => 1,
            ],
            [
                'redirect'   => \$redirect,
                'alias'      => 'click-email-2',
                'source'     => 'email',
                'source_id'  => \$email->getId(),
                'email'      => \$email,
                'date_hit'   => new \\DateTime('-1 day'),
                'lead_id'    => 2,
            ],
            [
                'redirect'   => \$redirect,
                'alias'      => 'click-email-3',
                'source'     => 'email',
                'source_id'  => \$email->getId(),
                'email'      => \$email,
                'date_hit'   => new \\DateTime('+1 day'),
                'lead_id'    => 2,
            ],
            [
                'redirect'   => \$redirect,
                'alias'      => 'click-sms-1',
                'source'     => 'sms',
                'source_id'  => \$sms->getId(),
                'email'      => null,
                'date_hit'   => new \\DateTime(),
                'lead_id'    => 2,
            ],
            [
                'redirect'   => \$redirect,
                'alias'      => 'click-sms-2',
                'source'     => 'sms',
                'source_id'  => \$sms->getId(),
                'email'      => null,
                'date_hit'   => new \\DateTime('-1 day'),
                'lead_id'    => 1,
            ],
            [
                'redirect'   => \$redirect,
                'alias'      => 'click-sms-3',
                'source'     => 'sms',
                'source_id'  => \$sms->getId(),
                'email'      => null,
                'date_hit'   => new \\DateTime('+1 day'),
                'lead_id'    => 3,
            ],
        ];

        foreach (\$hits as \$hitConfig) {
            \$this->createHit(\$hitConfig, \$manager);
        }
    }

    /**
     * @param array<string,mixed> \$hitConfig
     */
    protected function createHit(array \$hitConfig, ObjectManager \$manager): void
    {
        \$hit = new Hit();

        \$hit->setIpAddress(\$this->getReference('ipAddress-1'));
        \$hit->setUrl('https://mautic.org');
        \$hit->setReferer('https://google.com');
        \$hit->setUrlTitle('Test Title');
        \$hit->setLead(\$this->getReference('lead-'.\$hitConfig['lead_id']));
        \$hit->setDateHit(\$hitConfig['date_hit']);
        \$hit->setCode(200);
        \$hit->setTrackingId('abc');
        if (\$hitConfig['email']) {
            \$hit->setEmail(\$hitConfig['email']);
        }
        \$hit->setRedirect(\$hitConfig['redirect']);
        \$hit->setSource(\$hitConfig['source']);
        \$hit->setSourceId(\$hitConfig['source_id']);
        \$this->setReference(\$hitConfig['alias'], \$hit);
        \$manager->persist(\$hit);
        \$manager->flush();
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 6;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/DataFixtures/ORM/LoadClickData.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/DataFixtures/ORM/LoadClickData.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/DataFixtures/ORM/LoadClickData.php");
    }
}
