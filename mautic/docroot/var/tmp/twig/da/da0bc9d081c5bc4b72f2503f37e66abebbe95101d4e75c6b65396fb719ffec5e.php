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

/* @bundles/UserBundle/Tests/Security/SAML/User/UserMapperTest.php */
class __TwigTemplate_63c80778acda1aabec883e22e5133a6771d6a5abf445b172b5ec22d66889ce5e extends Template
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

namespace Mautic\\UserBundle\\Tests\\Security\\SAML\\User;

use LightSaml\\Model\\Assertion\\Assertion;
use LightSaml\\Model\\Assertion\\Attribute;
use LightSaml\\Model\\Assertion\\AttributeStatement;
use LightSaml\\Model\\Protocol\\Response;
use Mautic\\UserBundle\\Security\\SAML\\User\\UserMapper;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class UserMapperTest extends TestCase
{
    /**
     * @var UserMapper
     */
    private \$mapper;

    /**
     * @var Response|MockObject
     */
    private \$response;

    protected function setUp(): void
    {
        \$this->mapper = new UserMapper(
            [
                'email'     => 'EmailAddress',
                'firstname' => 'FirstName',
                'lastname'  => 'LastName',
            ]
        );

        \$emailAttribute = \$this->createMock(Attribute::class);
        \$emailAttribute->method('getFirstAttributeValue')
            ->willReturn('hello@there.com');

        \$firstnameAttribute = \$this->createMock(Attribute::class);
        \$firstnameAttribute->method('getFirstAttributeValue')
            ->willReturn('Joe');

        \$lastnameAttribute = \$this->createMock(Attribute::class);
        \$lastnameAttribute->method('getFirstAttributeValue')
            ->willReturn('Smith');

        \$statement = \$this->createMock(AttributeStatement::class);
        \$statement->method('getFirstAttributeByName')
            ->willReturnCallback(
                function (\$attributeName) use (\$emailAttribute, \$firstnameAttribute, \$lastnameAttribute) {
                    switch (\$attributeName) {
                        case 'EmailAddress':
                            return \$emailAttribute;
                        case 'FirstName':
                            return \$firstnameAttribute;
                        case 'LastName':
                            return \$lastnameAttribute;
                        default:
                            return null;
                    }
                }
            );

        \$assertion = \$this->createMock(Assertion::class);
        \$assertion->method('getAllAttributeStatements')
            ->willReturn([\$statement]);

        \$this->response = \$this->createMock(Response::class);
        \$this->response->method('getAllAssertions')
            ->willReturn([\$assertion]);
    }

    public function testUserEntityIsPopulatedFromAssertions()
    {
        \$user = \$this->mapper->getUser(\$this->response);
        \$this->assertEquals('hello@there.com', \$user->getEmail());
        \$this->assertEquals('hello@there.com', \$user->getUsername());
        \$this->assertEquals('Joe', \$user->getFirstName());
        \$this->assertEquals('Smith', \$user->getLastName());
    }

    public function testUsernameIsReturned()
    {
        \$username = \$this->mapper->getUsername(\$this->response);
        \$this->assertEquals('hello@there.com', \$username);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Tests/Security/SAML/User/UserMapperTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Security/SAML/User/UserMapperTest.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Tests/Security/SAML/User/UserMapperTest.php");
    }
}
