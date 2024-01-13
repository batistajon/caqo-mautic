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

/* @bundles/EmailBundle/Tests/Helper/PointEventHelperTest.php */
class __TwigTemplate_e1e1a201e3d814d0af175a4cb6919c90229cfd041ed6bf5629449e0c706355a1 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper;

use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Helper\\PointEventHelper;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;

class PointEventHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSendEmail()
    {
        \$helper = new PointEventHelper();
        \$lead   = new Lead();
        \$lead->setFields([
            'core' => [
                'email' => [
                    'value' => 'test@test.com',
                ],
            ],
        ]);
        \$event = [
            'id'         => 1,
            'properties' => [
                'email' => 1,
            ],
        ];

        \$result = \$helper->sendEmail(\$event, \$lead, \$this->getMockMauticFactory());
        \$this->assertEquals(true, \$result);

        \$result = \$helper->sendEmail(\$event, \$lead, \$this->getMockMauticFactory(false));
        \$this->assertEquals(false, \$result);

        \$result = \$helper->sendEmail(\$event, \$lead, \$this->getMockMauticFactory(true, false));
        \$this->assertEquals(false, \$result);

        \$result = \$helper->sendEmail(\$event, new Lead(), \$this->getMockMauticFactory(true, false));
        \$this->assertEquals(false, \$result);
    }

    /**
     * @param bool \$published
     * @param bool \$success
     *
     * @return \\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private function getMockMauticFactory(\$published = true, \$success = true)
    {
        \$mock = \$this->getMockBuilder(MauticFactory::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getModel'])
            ->getMock()
        ;

        \$mock->expects(\$this->any())
            ->method('getModel')
            ->willReturnCallback(function (\$model) use (\$published, \$success) {
                switch (\$model) {
                    case 'email':
                        return \$this->getMockEmail(\$published, \$success);
                    case 'lead':
                        return \$this->getMockLead();
                }
            });

        return \$mock;
    }

    /**
     * @return \\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private function getMockLead()
    {
        \$mock = \$this->getMockBuilder(LeadModel::class)
            ->disableOriginalConstructor()
            ->getMock()
        ;

        return \$mock;
    }

    /**
     * @param bool \$published
     * @param bool \$success
     *
     * @return \\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private function getMockEmail(\$published = true, \$success = true)
    {
        \$sendEmail = \$success ? true : ['error' => 1];

        \$mock = \$this->getMockBuilder(EmailModel::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getEntity', 'sendEmail'])
            ->getMock()
        ;

        \$mock->expects(\$this->any())
            ->method('getEntity')
            ->willReturnCallback(function (\$id) use (\$published) {
                \$email = new Email();
                \$email->setIsPublished(\$published);

                return \$email;
            });

        \$mock->expects(\$this->any())
            ->method('sendEmail')
            ->willReturn(\$sendEmail);

        return \$mock;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Helper/PointEventHelperTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/PointEventHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Helper/PointEventHelperTest.php");
    }
}
