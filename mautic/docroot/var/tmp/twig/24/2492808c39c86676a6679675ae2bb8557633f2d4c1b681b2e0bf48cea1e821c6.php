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

/* @bundles/CoreBundle/Form/DataTransformer/EmojiToShortTransformer.php */
class __TwigTemplate_a3b966978e2d27a2148ac3b28073fb69d6ba0eb034e003d84928a3a36ca44dbd extends Template
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

namespace Mautic\\CoreBundle\\Form\\DataTransformer;

use Mautic\\CoreBundle\\Helper\\EmojiHelper;
use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * Class EmojiToShortTransformer.
 */
class EmojiToShortTransformer implements DataTransformerInterface
{
    /**
     * Convert short to unicode.
     *
     * @param array|string \$content
     *
     * @return string|array
     */
    public function transform(\$content)
    {
        if (is_array(\$content)) {
            foreach (\$content as &\$convert) {
                \$convert = \$this->transform(\$convert);
            }
        } else {
            \$content = EmojiHelper::toEmoji(\$content, 'short');
        }

        return \$content;
    }

    /**
     * Convert emoji to short bytes.
     *
     * @param array|string \$content
     *
     * @return array|string
     */
    public function reverseTransform(\$content)
    {
        if (is_array(\$content)) {
            foreach (\$content as &\$convert) {
                \$convert = \$this->reverseTransform(\$convert);
            }
        } else {
            \$content = EmojiHelper::toShort(\$content);
        }

        return \$content;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/DataTransformer/EmojiToShortTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/EmojiToShortTransformer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/DataTransformer/EmojiToShortTransformer.php");
    }
}
