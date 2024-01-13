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

/* @bundles/CoreBundle/Views/FormTheme/Custom/sortablelist_errors.html.php */
class __TwigTemplate_aad2fe974a8cc438bf7a093006084f6ad25b97953e73e296e75f6b3e9d9feab4 extends Template
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
        echo "<?php \$errorsMessages = []; ?>
<?php foreach (\$errors as \$error): ?>
    <?php if (!in_array(\$error->getMessage(), \$errorsMessages)): ?>
        <?php \$errorsMessages[] = \$error->getMessage(); ?>
    <?php endif; ?>
<?php endforeach; ?>

<?php if (count(\$errorsMessages) > 0): ?>
    <div class=\"help-block\">
        <?php if (count(\$errorsMessages) > 1): ?>
            <ul>
                <?php foreach (\$errorsMessages as \$errorMessage): ?>
                    <li><?php echo \$view->escape(\$errorMessage); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <?php echo \$view->escape(\$errorsMessages[0]); ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/sortablelist_errors.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/sortablelist_errors.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/sortablelist_errors.html.php");
    }
}
