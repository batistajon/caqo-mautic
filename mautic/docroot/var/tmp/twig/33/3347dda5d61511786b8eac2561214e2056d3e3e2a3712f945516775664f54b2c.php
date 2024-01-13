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

/* @bundles/UserBundle/Security/SAML/User/UserCreator.php */
class __TwigTemplate_99c49aeac824ff3f41d408aca2b656eeda17390f3583d711e611dd48bf3a6586 extends Template
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

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\EntityManagerInterface;
use LightSaml\\Model\\Protocol\\Response;
use LightSaml\\SpBundle\\Security\\User\\UserCreatorInterface;
use Mautic\\CoreBundle\\Helper\\EncryptionHelper;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoder;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

class UserCreator implements UserCreatorInterface
{
    /**
     * @var EntityManager
     */
    private \$entityManager;

    /**
     * @var UserMapper
     */
    private \$userMapper;

    /**
     * @var UserModel
     */
    private \$userModel;

    /**
     * @var UserPasswordEncoder
     */
    private \$encoder;

    /**
     * @var int
     */
    private \$defaultRole;

    /**
     * @var array
     */
    private \$requiredFields = [
        'username',
        'firstname',
        'lastname',
        'email',
    ];

    public function __construct(
        EntityManagerInterface \$entityManager,
        UserMapper \$userMapper,
        UserModel \$userModel,
        UserPasswordEncoder \$encoder,
        \$defaultRole
    ) {
        \$this->entityManager = \$entityManager;
        \$this->userMapper    = \$userMapper;
        \$this->userModel     = \$userModel;
        \$this->encoder       = \$encoder;
        \$this->defaultRole   = (int) \$defaultRole;
    }

    /**
     * @return UserInterface|null
     */
    public function createUser(Response \$response): User
    {
        if (empty(\$this->defaultRole)) {
            throw new BadCredentialsException('User does not exist.');
        }

        /** @var Role \$defaultRole */
        \$defaultRole = \$this->entityManager->getReference('MauticUserBundle:Role', \$this->defaultRole);

        \$user = \$this->userMapper->getUser(\$response);
        \$user->setPassword(\$this->userModel->checkNewPassword(\$user, \$this->encoder, EncryptionHelper::generateKey()));
        \$user->setRole(\$defaultRole);

        \$this->validateUser(\$user);

        \$this->userModel->saveEntity(\$user);

        return \$user;
    }

    /**
     * @throws BadCredentialsException
     */
    private function validateUser(User \$user): void
    {
        // Validate that the user has all that's required
        foreach (\$this->requiredFields as \$field) {
            \$getter = 'get'.ucfirst(\$field);

            if (!\$user->\$getter()) {
                throw new BadCredentialsException('User does not include required fields.');
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Security/SAML/User/UserCreator.php";
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
        return new Source("", "@bundles/UserBundle/Security/SAML/User/UserCreator.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Security/SAML/User/UserCreator.php");
    }
}
