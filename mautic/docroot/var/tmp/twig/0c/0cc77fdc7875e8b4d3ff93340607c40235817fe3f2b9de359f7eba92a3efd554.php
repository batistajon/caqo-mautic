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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapper.php */
class __TwigTemplate_4d035250682be8f4a9f6cabcf6df148da927b5c06b5d774edb8eef9ed1b0151e extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\CategoryNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Category;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Type;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper\\Category as CategoryObject;

class CategoryMapper
{
    /**
     * @var array
     */
    protected static \$mappings = [
        Category::ANTISPAM       => ['permanent' => false, 'bounce_type' => Type::BLOCKED],
        Category::AUTOREPLY      => ['permanent' => false, 'bounce_type' => Type::AUTOREPLY],
        Category::CONCURRENT     => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::CONTENT_REJECT => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::COMMAND_REJECT => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::INTERNAL_ERROR => ['permanent' => false, 'bounce_type' => Type::TEMPORARY],
        Category::DEFER          => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::DELAYED        => ['permanent' => false, 'bounce_type' => Type::TEMPORARY],
        Category::DNS_LOOP       => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::DNS_UNKNOWN    => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::FULL           => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::INACTIVE       => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::LATIN_ONLY     => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::OTHER          => ['permanent' => true, 'bounce_type' => Type::GENERIC],
        Category::OVERSIZE       => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::OUTOFOFFICE    => ['permanent' => false, 'bounce_type' => Type::SOFT],
        Category::UNKNOWN        => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::UNRECOGNIZED   => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::USER_REJECT    => ['permanent' => true, 'bounce_type' => Type::HARD],
        Category::WARNING        => ['permanent' => false, 'bounce_type' => Type::SOFT],
    ];

    /**
     * @param \$category
     *
     * @return CategoryObject
     *
     * @throws CategoryNotFound
     */
    public static function map(\$category)
    {
        if (!isset(static::\$mappings[\$category])) {
            throw new CategoryNotFound();
        }

        \$mapping = static::\$mappings[\$category];

        return new CategoryObject(\$category, \$mapping['bounce_type'], \$mapping['permanent']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapper.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapper.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapper.php");
    }
}
