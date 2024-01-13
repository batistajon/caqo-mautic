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

/* @bundles/EmailBundle/Stat/StatHelper.php */
class __TwigTemplate_21808e2547fca932582be6a49f449e3d3f6dbb8256f3e7996cae79aa4493e6f4 extends Template
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

namespace Mautic\\EmailBundle\\Stat;

use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\EmailBundle\\Stat\\Exception\\StatNotFoundException;

class StatHelper
{
    /**
     * @var StatRepository
     */
    private \$repo;

    /**
     * Just store email ID and lead ID to avoid doctrine RAM issues with entities.
     *
     * @var Reference[]
     */
    private \$stats = [];

    /**
     * @var array
     */
    private \$deleteUs = [];

    /**
     * StatHelper constructor.
     */
    public function __construct(StatRepository \$statRepository)
    {
        \$this->repo = \$statRepository;
    }

    /**
     * @param \$emailAddress
     */
    public function storeStat(Stat \$stat, \$emailAddress)
    {
        \$this->repo->saveEntity(\$stat);

        // to avoid Doctrine RAM issues, we're just going to hold onto ID references
        \$this->stats[\$emailAddress] = new Reference(\$stat);

        // clear stat from doctrine memory
        \$this->repo->clear();
    }

    public function deletePending()
    {
        if (count(\$this->deleteUs)) {
            \$this->repo->deleteStats(\$this->deleteUs);
        }
    }

    public function markForDeletion(Reference \$stat)
    {
        \$this->deleteUs[] = \$stat->getStatId();
    }

    /**
     * @param \$emailAddress
     *
     * @return Reference
     *
     * @throws StatNotFoundException
     */
    public function getStat(\$emailAddress)
    {
        if (!isset(\$this->stats[\$emailAddress])) {
            throw new StatNotFoundException();
        }

        return \$this->stats[\$emailAddress];
    }

    public function reset()
    {
        \$this->deleteUs = [];
        \$this->stats    = [];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Stat/StatHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Stat/StatHelper.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Stat/StatHelper.php");
    }
}
