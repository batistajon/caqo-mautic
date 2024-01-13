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

/* @bundles/MarketplaceBundle/DTO/Maintainer.php */
class __TwigTemplate_384411dc49f03c5797a14bc1b92abbf47e5b7f79b756719aaf3397380b956f37 extends Template
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

namespace Mautic\\MarketplaceBundle\\DTO;

final class Maintainer
{
    public string \$name;
    public string \$avatar;

    public function __construct(string \$name, string \$avatar)
    {
        \$this->name   = \$name;
        \$this->avatar = \$avatar;
    }

    public static function fromArray(array \$array): Maintainer
    {
        return new self(
            \$array['name'],
            \$array['avatar_url']
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/DTO/Maintainer.php";
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
        return new Source("", "@bundles/MarketplaceBundle/DTO/Maintainer.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/DTO/Maintainer.php");
    }
}
