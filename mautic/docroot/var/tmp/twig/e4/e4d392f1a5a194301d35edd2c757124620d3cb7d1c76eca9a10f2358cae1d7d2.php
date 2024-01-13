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

/* @bundles/EmailBundle/Helper/PlainTextMessageHelper.php */
class __TwigTemplate_b571ff6a68576547ec14ef65b1bad06220e0ea52b519b569ee8d88cb699c077e extends Template
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

namespace Mautic\\EmailBundle\\Helper;

/**
 * Class PlainTextMessageHelper.
 */
class PlainTextMessageHelper
{
    /**
     * Extract plain text from message.
     *
     * @return string
     */
    public static function getPlainTextFromMessage(\\Swift_Mime_SimpleMessage \$message)
    {
        \$children = (array) \$message->getChildren();

        foreach (\$children as \$child) {
            \$childType = \$child->getContentType();
            if ('text/plain' === \$childType && \$child instanceof \\Swift_MimePart) {
                return \$child->getBody();
            }
        }

        return '';
    }

    /**
     * Extract plain text from message.
     *
     * @return string
     */
    public function getPlainTextFromMessageNotStatic(\\Swift_Mime_SimpleMessage \$message)
    {
        return self::getPlainTextFromMessage(\$message);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Helper/PlainTextMessageHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/PlainTextMessageHelper.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Helper/PlainTextMessageHelper.php");
    }
}
