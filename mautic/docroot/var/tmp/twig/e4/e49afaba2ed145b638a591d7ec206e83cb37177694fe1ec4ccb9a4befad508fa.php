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

/* @bundles/UserBundle/Security/SAML/User/UserMapper.php */
class __TwigTemplate_51677a2b855ee3c8e0edf025d2c610ac805d59b73d8c875983be7eb69d6133f7 extends Template
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

namespace Mautic\\UserBundle\\Security\\SAML\\User;

use LightSaml\\Model\\Assertion\\Assertion;
use LightSaml\\Model\\Protocol\\Response;
use LightSaml\\SpBundle\\Security\\User\\UsernameMapperInterface;
use Mautic\\UserBundle\\Entity\\User;

class UserMapper implements UsernameMapperInterface
{
    /**
     * @var string[]
     */
    private \$attributes;

    /**
     * UserMapper constructor.
     */
    public function __construct(array \$attributes)
    {
        \$this->attributes = \$attributes;
    }

    public function getUser(Response \$response): User
    {
        \$user = new User();

        foreach (\$response->getAllAssertions() as \$assertion) {
            \$this->setValuesFromAssertion(\$assertion, \$user);
        }

        return \$user;
    }

    public function getUsername(Response \$response): ?string
    {
        \$user = \$this->getUser(\$response);

        return \$user->getUsername();
    }

    /**
     * @return string|null
     */
    private function setValuesFromAssertion(Assertion \$assertion, User \$user): void
    {
        \$attributes = \$this->extractAttributes(\$assertion);

        // use email as the user by default
        if (isset(\$attributes['email'])) {
            \$user->setEmail(\$attributes['email']);
            \$user->setUsername(\$attributes['email']);
        }

        if (isset(\$attributes['username']) && !empty(\$attributes['username'])) {
            \$user->setUsername(\$attributes['username']);
        }

        if (isset(\$attributes['firstname'])) {
            \$user->setFirstname(\$attributes['firstname']);
        }

        if (isset(\$attributes['lastname'])) {
            \$user->setLastName(\$attributes['lastname']);
        }
    }

    private function extractAttributes(Assertion \$assertion): array
    {
        \$attributes = [];

        foreach (\$this->attributes as \$key => \$attributeName) {
            foreach (\$assertion->getAllAttributeStatements() as \$attributeStatement) {
                \$attribute = \$attributeStatement->getFirstAttributeByName(\$attributeName);
                if (\$attribute && \$attribute->getFirstAttributeValue()) {
                    \$attributes[\$key] = \$attribute->getFirstAttributeValue();
                }
            }
        }

        return \$attributes;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Security/SAML/User/UserMapper.php";
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
        return new Source("", "@bundles/UserBundle/Security/SAML/User/UserMapper.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Security/SAML/User/UserMapper.php");
    }
}
