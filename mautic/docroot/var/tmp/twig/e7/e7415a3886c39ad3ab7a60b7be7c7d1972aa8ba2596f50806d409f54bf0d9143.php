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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/cs.html.js */
class __TwigTemplate_a8c2536902a4c623dc8e6dbd9a1b76b2fda5d7e925ab861a9cb1131fa52b08b1 extends Template
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
        echo "<h2>Tipy na obsluhu</h2>
<p>Obsluha na uživatelském rozhraní je podobná standardnímu správci souborů operačního systému. Drag and Drop však není možné používat s mobilními prohlížeči. </p>
<ul>
\t<li>Kliknutím pravým tlačítkem nebo dlouhým klepnutím zobrazíte kontextové menu.</li>
\t<li>Přetáhněte do stromu složek nebo do aktuálního pracovního prostoru a přetáhněte / kopírujte položky.</li>
\t<li>Výběr položky v pracovním prostoru můžete rozšířit pomocí kláves Shift nebo Alt (Možnost).</li>
\t<li>Přemístěte soubory a složky do cílové složky nebo do pracovního prostoru.</li>
\t<li>Dialog předávání může přijímat data schránky nebo seznamy adres URL a přitáhnout a odejít z jiných prohlížečů nebo správců souborů.</li>
\t<li>Zatažením spusťte stisknutím klávesy Alt (Možnost) přetáhněte do vnějšího prohlížeče. Tato funkce se převezme pomocí prohlížeče Google Chrome.</li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/cs.html.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/cs.html.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/cs.html.js");
    }
}
