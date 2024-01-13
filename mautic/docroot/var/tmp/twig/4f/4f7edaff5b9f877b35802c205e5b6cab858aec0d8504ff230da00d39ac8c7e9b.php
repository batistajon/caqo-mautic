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

/* @bundles/LeadBundle/Helper/SegmentCountCacheHelper.php */
class __TwigTemplate_29ae0a26aab50c26b2843ac1ef02fbd37eab014a8fead1dc6dd1c7b4fb3dc722 extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Exception;
use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;

class SegmentCountCacheHelper
{
    /**
     * @var CacheStorageHelper
     */
    private \$cacheStorageHelper;

    public function __construct(CacheStorageHelper \$cacheStorageHelper)
    {
        \$this->cacheStorageHelper = \$cacheStorageHelper;
    }

    /**
     * @throws Exception
     */
    public function getSegmentContactCount(int \$segmentId): int
    {
        return (int) \$this->cacheStorageHelper->get(\$this->generateCacheKey(\$segmentId));
    }

    /**
     * @throws Exception
     */
    public function setSegmentContactCount(int \$segmentId, int \$count): void
    {
        \$this->cacheStorageHelper->set(\$this->generateCacheKey(\$segmentId), \$count);
    }

    public function hasSegmentContactCount(int \$segmentId): bool
    {
        return \$this->cacheStorageHelper->has(\$this->generateCacheKey(\$segmentId));
    }

    public function invalidateSegmentContactCount(int \$segmentId): void
    {
        if (\$this->hasSegmentContactCount(\$segmentId)) {
            \$this->cacheStorageHelper->delete(\$this->generateCacheKey(\$segmentId));
        }
    }

    /**
     * @throws Exception
     */
    public function incrementSegmentContactCount(int \$segmentId): void
    {
        \$count = \$this->hasSegmentContactCount(\$segmentId) ? \$this->getSegmentContactCount(\$segmentId) : 0;
        \$this->setSegmentContactCount(\$segmentId, ++\$count);
    }

    /**
     * @throws Exception
     */
    public function decrementSegmentContactCount(int \$segmentId): void
    {
        if (\$this->hasSegmentContactCount(\$segmentId)) {
            \$count = \$this->getSegmentContactCount(\$segmentId);

            if (\$count <= 0) {
                \$count = 1;
            }

            \$this->setSegmentContactCount(\$segmentId, --\$count);
        }
    }

    private function generateCacheKey(int \$segmentId): string
    {
        return sprintf('%s.%s.%s', 'segment', \$segmentId, 'lead');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Helper/SegmentCountCacheHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/SegmentCountCacheHelper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Helper/SegmentCountCacheHelper.php");
    }
}
