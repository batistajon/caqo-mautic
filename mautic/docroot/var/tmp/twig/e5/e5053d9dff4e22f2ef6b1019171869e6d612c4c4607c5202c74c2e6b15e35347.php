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

/* @bundles/ApiBundle/Entity/oAuth2/AccessToken.php */
class __TwigTemplate_15137ee3dff28b599be08daa6a04953dc8b17dafc16087025bb77c1a84984555 extends Template
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
use FOS\\OAuthServerBundle\\Model\\AccessToken as BaseAccessToken;
use FOS\\OAuthServerBundle\\Model\\ClientInterface;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Class AccessToken.
 */
class AccessToken extends BaseAccessToken
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

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('oauth2_accesstokens')
            ->addIndex(['token'], 'oauth2_access_token_search');

        \$builder->createField('id', 'integer')
            ->isPrimaryKey()
            ->generatedValue()
            ->build();

        \$builder->createManyToOne('client', 'Client')
            ->addJoinColumn('client_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createManyToOne('user', 'Mautic\\UserBundle\\Entity\\User')
            ->addJoinColumn('user_id', 'id', true, false, 'CASCADE')
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
     * @return AccessToken
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
     * @return AccessToken
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
        return "@bundles/ApiBundle/Entity/oAuth2/AccessToken.php";
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
        return new Source("", "@bundles/ApiBundle/Entity/oAuth2/AccessToken.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Entity/oAuth2/AccessToken.php");
    }
}