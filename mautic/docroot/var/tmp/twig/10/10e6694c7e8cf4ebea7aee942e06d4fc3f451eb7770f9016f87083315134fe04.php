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

/* @bundles/EmailBundle/Exception/MailboxException.php */
class __TwigTemplate_d339698ba51c3367199545b02770a41dfb689421db68bb911d851d1f40f6f9a2 extends Template
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

namespace Mautic\\EmailBundle\\Exception;

class MailboxException extends \\Exception
{
    public function __construct(\$message = null, \$code = 0, \\Exception \$previous = null)
    {
        if (null === \$message) {
            \$message = 'Error communicating with the IMAP server';

            if (function_exists('imap_last_error')) {
                \$message .= ': '.imap_last_error();
            }
        }

        parent::__construct(\$message, \$code, \$previous);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Exception/MailboxException.php";
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
        return new Source("", "@bundles/EmailBundle/Exception/MailboxException.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Exception/MailboxException.php");
    }
}
