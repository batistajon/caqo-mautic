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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/sk.html.js */
class __TwigTemplate_4e28e588507822829fa6f5c7b53a2072a4adbfca587b31f5beb0823c88e86d07 extends Template
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
<p>Obsluha na používateľskom rozhraní je podobná štandardnému správcovi súborov operačného systému. Drag and Drop však nie je možné používať s mobilnými prehliadačmi. </p>
<ul>
\t<li>Kliknutím pravým tlačidlom alebo dlhým klepnutím zobrazíte kontextové menu.</li>
\t<li>Presuňte myšou do stromu priečinkov alebo do aktuálneho pracovného priestoru a presuňte / kopírujte položky.</li>
\t<li>Výber položky v pracovnom priestore môžete rozšíriť pomocou klávesov Shift alebo Alt (Možnosť).</li>
\t<li>Premiestnite súbory a priečinky do cieľovej zložky alebo do pracovného priestoru.</li>
\t<li>Dialog odovzdávania môže prijímať dáta schránky alebo zoznamy adries URL a pritiahnuť a odísť z iných prehliadačov alebo správcov súborov.</li>
\t<li>Potiahnutím spustite stlačením klávesu Alt (Možnosť) pretiahnite do vonkajšieho prehliadača. Táto funkcia sa prevezme pomocou prehliadača Google Chrome.</li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/sk.html.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/sk.html.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/sk.html.js");
    }
}
