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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/pl.html.js */
class __TwigTemplate_7ade3d951da24d011b2745e67a49be8a785867d67211fd66466fb68a0c1aecfe extends Template
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
        echo "<h2>Wskazówki Obsługi</h2>
<p>Działanie w interfejsie użytkownika jest podobne do standardowego menedżera plików systemu operacyjnego. Jednak Przeciąganie i Upuszczanie nie jest możliwe w przeglądarkach mobilnych. </p>
<ul>
\t<li>Kliknij prawym przyciskiem myszy lub dłużej, aby wyświetlić menu kontekstowe.</li>
\t<li>Przeciągnij i upuść w drzewie folderów lub bieżącym obszarze roboczym, aby przenieść/kopiować elementy.</li>
\t<li>Wybór elementu w obszarze roboczym można rozszerzyć wybór z klawiszem Shift lub Alt(Opcja).</li>
\t<li>Przeciągnij i Upuść do folderu docelowego lub obszaru roboczego, aby przesłać pliki i foldery.</li>
\t<li>W oknie dialogowym przesyłania można zaakceptować wklejanie/upuszczanie danych schowka lub listy adresów URL, i Przeciągnij i Upuść z innych przeglądarek lub menedżerów plików, itp.</li>
\t<li>Rozpocznij Przeciąganie naciskając Alt (Opcja), aby przeciągnąć na zewnątrz przeglądarki. Stanie się operacją pobierania z Google Chrome. </li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/pl.html.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/pl.html.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/pl.html.js");
    }
}
