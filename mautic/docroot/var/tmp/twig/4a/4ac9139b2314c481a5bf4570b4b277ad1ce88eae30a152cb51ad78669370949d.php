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

/* @bundles/CoreBundle/Form/DataTransformer/EmojiToHtmlTransformer.php */
class __TwigTemplate_4cfda9b442e5197fcfe69caf113e31656fac1cfc8ce5cb3f423aa0ddc7b270ad extends Template
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
 * Class EmojiToHtmlTransformer.
 */
class EmojiToHtmlTransformer implements DataTransformerInterface
{
    /**
     * Convert emoji unicode to HTML.
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
            \$content = EmojiHelper::toHtml(\$content);
        }

        return \$content;
    }

    /**
     * Convert HTML emoji to unicode bytes.
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
            \$content = EmojiHelper::toEmoji(\$content);
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
        return "@bundles/CoreBundle/Form/DataTransformer/EmojiToHtmlTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/EmojiToHtmlTransformer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/DataTransformer/EmojiToHtmlTransformer.php");
    }
}
