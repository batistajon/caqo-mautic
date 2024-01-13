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

/* @bundles/ApiBundle/Entity/oAuth2/AuthCode.php */
class __TwigTemplate_2ca4ff5c2e7c43a8d37c0a63d747409e220c4805492148aa7ff77ca127b39970 extends Template
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

namespace Mautic\\ApiBundle\\Entity\\oAuth2;

use Doctrine\\ORM\\Mapping as ORM;
use FOS\\OAuthServerBundle\\Model\\AuthCode as BaseAuthCode;
use FOS\\OAuthServerBundle\\Model\\ClientInterface;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Class AuthCode.
 */
class AuthCode extends BaseAuthCode
{
    /**
     * @var int
     */
    protected \$id;

    /**
     * @var Client
     */
    protected \$client;

    /**
     * @var \\Mautic\\UserBundle\\Entity\\User
     */
    protected \$user;

    /**
     * @var string
     */
    protected \$token;

    /**
     * @var int
     */
    protected \$expiresAt;

    /**
     * @var string
     */
    protected \$scope;

    /**
     * @var string
     */
    protected \$redirectUri;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('oauth2_authcodes');

        \$builder->createField('id', 'integer')
            ->isPrimaryKey()
            ->generatedValue()
            ->build();

        \$builder->createManyToOne('client', 'Client')
            ->addJoinColumn('client_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createManyToOne('user', 'Mautic\\UserBundle\\Entity\\User')
            ->addJoinColumn('user_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createField('token', 'string')
            ->unique()
            ->build();

        \$builder->createField('expiresAt', 'bigint')
            ->columnName('expires_at')
            ->nullable()
            ->build();

        \$builder->createField('scope', 'string')
            ->nullable()
            ->build();

        \$builder->createField('redirectUri', 'text')
            ->columnName('redirect_uri')
            ->build();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set client.
     *
     * @return RefreshToken
     */
    public function setClient(ClientInterface \$client)
    {
        \$this->client = \$client;

        return \$this;
    }

    /**
     * Get client.
     *
     * @return ClientInterface
     */
    public function getClient()
    {
        return \$this->client;
    }

    /**
     * Set user.
     *
     * @param UserInterface \$user
     *
     * @return RefreshToken
     */
    public function setUser(UserInterface \$user = null)
    {
        \$this->user = \$user;

        return \$this;
    }

    /**
     * Get user.
     *
     * @return UserInterface
     */
    public function getUser()
    {
        return \$this->user;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Entity/oAuth2/AuthCode.php";
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
        return new Source("", "@bundles/ApiBundle/Entity/oAuth2/AuthCode.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Entity/oAuth2/AuthCode.php");
    }
}
