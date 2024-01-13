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

/* @bundles/EmailBundle/Tests/OptionsAccessor/EmailToUserAccessorTest.php */
class __TwigTemplate_cb6d136fd06400f98a8046814c638d444878593bacfe79cf73768fdb896487ff extends Template
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

namespace Mautic\\EmailBundle\\Tests\\OptionsAccessor;

use Mautic\\EmailBundle\\OptionsAccessor\\EmailToUserAccessor;
use Mautic\\UserBundle\\Entity\\User;

class EmailToUserAccessorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testTransformToUserIds()
    {
        \$config            = [];
        \$config['user_id'] = [4, 6];

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = [
            ['id' => 4],
            ['id' => 6],
        ];

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getUserIdsToSend());
    }

    public function testTransformToUserIdsWithOwnerEntityButNoOwnerSetting()
    {
        \$config            = [];
        \$config['user_id'] = [4, 6];

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = [
            ['id' => 4],
            ['id' => 6],
        ];

        \$mockOwner = \$this->getMockBuilder(User::class)
            ->getMock();

        \$mockOwner->expects(\$this->never()) //\$config['to_owner'] is not set
            ->method('getId')
            ->will(\$this->returnValue(5));

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getUserIdsToSend(\$mockOwner));
    }

    public function testTransformToUserIdsWithDifferentOwnerId()
    {
        \$config             = [];
        \$config['user_id']  = [4, 6];
        \$config['to_owner'] = true;

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = [
            ['id' => 4],
            ['id' => 6],
            ['id' => 5],
        ];

        \$mockOwner = \$this->getMockBuilder(User::class)
            ->getMock();

        \$mockOwner->expects(\$this->exactly(2))
            ->method('getId')
            ->will(\$this->returnValue(5));

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getUserIdsToSend(\$mockOwner));
    }

    public function testTransformToUserIdsWithSameOwnerId()
    {
        \$config             = [];
        \$config['user_id']  = [4, 6];
        \$config['to_owner'] = true;

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = [
            ['id' => 4],
            ['id' => 6],
        ];

        \$mockOwner = \$this->getMockBuilder(User::class)
            ->getMock();

        \$mockOwner->expects(\$this->once())
            ->method('getId')
            ->will(\$this->returnValue(6));

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getUserIdsToSend(\$mockOwner));
    }

    public function testFormatToAddressOneEmail()
    {
        \$config       = [];
        \$config['to'] = 'john@doe.com';

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = ['john@doe.com'];

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getToFormatted());
    }

    public function testFormatToAddressMoreEmails()
    {
        \$config       = [];
        \$config['to'] = 'john@doe.com, peter@doe.com,doe@mark.com';

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = [
            'john@doe.com',
            'peter@doe.com',
            'doe@mark.com',
        ];

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getToFormatted());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/OptionsAccessor/EmailToUserAccessorTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/OptionsAccessor/EmailToUserAccessorTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/OptionsAccessor/EmailToUserAccessorTest.php");
    }
}
