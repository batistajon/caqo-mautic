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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/de.html.js */
class __TwigTemplate_35aa983c6151f42227d2fa3a654664d9fad5c8ba50b60c55395796f57823320b extends Template
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
        echo "<h2>Anwendungstipps</h2>
<p>Die Verwendung dieser Anwendung ist ähnlich der einer lokalen Dateiverwaltung.<br><b>Hinweis</b>: auf mobilen Geräten ist das Ziehen und Ablegen (Drag and Drop) von Dateien nicht möglich.</p>
<ul>
\t<li>Rechtsklick auf ein Element oder länger darauf zeigen öffnet das Kontextmenü</li>
\t<li>Um Elemente in andere Ordner oder aktuellen Arbeitsbereich zu kopieren oder verschieben diese Ziehen und Ablegen</li>
\t<li>Elementauswahl im Arbeitsbereich kann mit der Hochstell- oder ALT-TAste erweitert werden</li>
\t<li>Um lokale Ordner und Dateien in den Zielorder oder -arbeitsbereich zu kopieren diese Ziehen und Ablegen</li>
\t<li>Der Uploaddialog erlaubt Daten aus dem Clipboard (Zwischenspeicher), eine URL und Ziehen und Ablegen aus anderen Browsern und Dateiverwaltungsoberflächen</li>
\t<li>Ziehen mit gedrückter ALT-Taste erlaubt einen einfachen Dateidownload (nur Google Chrome)</li>
\t<li>Ordner und Dateien können ausgeblendet (versteckt) werden. Um sie wieder dauerhaft sichtbar zu machen, über die Menüleiste das \"Icon Einstellungen\" anklicken, dort unter Arbeitsplatz \"Zeige versteckte Elemente\" den Button \"Neustart\" anklicken</li>
\t<li>Das Kontextmenü (rechte Maustaste) zeigt je nach ausgewählten Element diverse Aktionen an</li>
\t<li>Je nach Art des Elements kann der Inhalt entweder mit dem integrierten Editor bearbeitet werden (z.B. .php, .txt, .ini usw.) oder wenn ein Bild dieses gedreht sowie die Größe geändert werden</li>
\t<li>Zum verbinden externer Speicherorte (FTP, Dropbox, Box, GoogleDrive, OneDrive) sowie Onlineeditor <a href=\"https://www.zoho.com/officeplatform/integrator/\" target=\"_blank\">Zoho Office Editor</a> oder Konvertierungsdienst <a href=\"https://www.online-convert.com/\" target=\"_blank\">Online-Convert</a> müssen diese Anwendungen freigeschaltet als auch die entsprechenden API-Daten zum Abrufen je Dienst definiert sein.<br>Sollten diese Dienste nicht verfügbar sein, müssen diese entweder selbständig dazu programmiert werden, oder einen Entwickler des Vertrauens damit beauftragen (z.B. <a href=\"https://osworx.net\" target=\"_blank\">OSWorX</a>)</li>
\t<li>In den Einstellungen \"Menü Icon Einstellungen\" kann der gesamte Arbeitsbereich, die Menüleiste sowie etliche weitere Aktionen definiert werden</li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/de.html.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/de.html.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/de.html.js");
    }
}
