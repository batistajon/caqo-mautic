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

/* @bundles/UserBundle/Model/UserToken/UserTokenService.php */
class __TwigTemplate_3d37143daad007ff5a9bab820ea9b75a589d30a612f9737d849c5a7426b0eb40 extends Template
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

namespace Mautic\\UserBundle\\Model\\UserToken;

use Mautic\\CoreBundle\\Helper\\RandomHelper\\RandomHelperInterface;
use Mautic\\UserBundle\\Entity\\UserToken;
use Mautic\\UserBundle\\Entity\\UserTokenRepositoryInterface;

/**
 * Class UserTokenService.
 */
final class UserTokenService implements UserTokenServiceInterface
{
    /**
     * @var RandomHelperInterface
     */
    private \$randomHelper;

    /**
     * @var UserTokenRepositoryInterface
     */
    private \$userTokenRepository;

    /**
     * UserTokenService constructor.
     */
    public function __construct(
        RandomHelperInterface \$randomHelper,
        UserTokenRepositoryInterface \$userTokenRepository
    ) {
        \$this->randomHelper        = \$randomHelper;
        \$this->userTokenRepository = \$userTokenRepository;
    }

    /**
     * @param int \$secretLength
     *
     * @return UserToken
     */
    public function generateSecret(UserToken \$token, \$secretLength = 32)
    {
        do {
            \$randomSecret   = \$this->randomHelper->generate(\$secretLength);
            \$isSecretUnique = \$this->userTokenRepository->isSecretUnique(\$randomSecret);
        } while (false === \$isSecretUnique);

        return \$token->setSecret(\$randomSecret);
    }

    /**
     * @return bool
     */
    public function verify(UserToken \$token)
    {
        return \$this->userTokenRepository->verify(\$token);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Model/UserToken/UserTokenService.php";
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
        return new Source("", "@bundles/UserBundle/Model/UserToken/UserTokenService.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Model/UserToken/UserTokenService.php");
    }
}
