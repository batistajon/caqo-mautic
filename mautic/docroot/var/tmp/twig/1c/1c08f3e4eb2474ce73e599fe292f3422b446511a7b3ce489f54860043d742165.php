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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.de.js */
class __TwigTemplate_9b40b078340e5a27cf59cb55b8264d081fbde8b5002b0efc6f694308b7d56517 extends Template
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
        echo "/**
 * German Translation / Deutsche Übersetzung
 * @author JPG & Mace <dev@flying-datacenter.de>
 * @author tora60 from pragmaMx.org
 * @author Timo-Linde <info@timo-linde.de>
 * @author OSWorX <https://osworx.net>
 * @author Maximilian Schwarz <info@deefuse.de>
 * @author SF Webdesign <webdesign@stephan-frank.de>
 * @version 2019-12-13
 */
(function(root, factory) {
\tif (typeof define === 'function' && define.amd) {
\t\tdefine(['elfinder'], factory);
\t} else if (typeof exports !== 'undefined') {
\t\tmodule.exports = factory(require('elfinder'));
\t} else {
\t\tfactory(root.elFinder);
\t}
}(this, function(elFinder) {
\telFinder.prototype.i18.de = {
\t\ttranslator : 'JPG & Mace &lt;dev@flying-datacenter.de&gt;, tora60 from pragmaMx.org, Timo-Linde &lt;info@timo-linde.de&gt;, OSWorX &lt;info@osworx.net&gt;, Maximilian Schwarz &lt;info@deefuse.de&gt;, SF Webdesign &lt;webdesign@stephan-frank.de&gt;',
\t\tlanguage   : 'Deutsch',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'j. F Y H:i', // 3. März 2020 14:58
\t\tfancyDateFormat : '\$1 H:i', // will produce smth like: Today 12:25 PM
\t\tnonameDateFormat : 'ymd-His', // to apply if upload file is noname: 120513172700
\t\tmessages : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Fehler',
\t\t\t'errUnknown'           : 'Unbekannter Fehler.',
\t\t\t'errUnknownCmd'        : 'Unbekannter Befehl.',
\t\t\t'errJqui'              : 'Ungültige jQuery UI-Konfiguration. Die Komponenten Selectable, Draggable und Droppable müssen inkludiert sein.',
\t\t\t'errNode'              : 'Für elFinder muss das DOM-Element erstellt werden.',
\t\t\t'errURL'               : 'Ungültige elFinder-Konfiguration! Die URL-Option ist nicht gesetzt.',
\t\t\t'errAccess'            : 'Zugriff verweigert.',
\t\t\t'errConnect'           : 'Verbindung zum Backend fehlgeschlagen.',
\t\t\t'errAbort'             : 'Verbindung abgebrochen.',
\t\t\t'errTimeout'           : 'Zeitüberschreitung der Verbindung.',
\t\t\t'errNotFound'          : 'Backend nicht gefunden.',
\t\t\t'errResponse'          : 'Ungültige Backend-Antwort.',
\t\t\t'errConf'              : 'Ungültige Backend-Konfiguration.',
\t\t\t'errJSON'              : 'PHP JSON-Modul nicht vorhanden.',
\t\t\t'errNoVolumes'         : 'Keine lesbaren Laufwerke vorhanden.',
\t\t\t'errCmdParams'         : 'Ungültige Parameter für Befehl: \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Daten nicht im JSON-Format.',
\t\t\t'errDataEmpty'         : 'Daten sind leer.',
\t\t\t'errCmdReq'            : 'Backend-Anfrage benötigt Befehl.',
\t\t\t'errOpen'              : 'Kann \"\$1\" nicht öffnen.',
\t\t\t'errNotFolder'         : 'Objekt ist kein Ordner.',
\t\t\t'errNotFile'           : 'Objekt ist keine Datei.',
\t\t\t'errRead'              : 'Kann \"\$1\" nicht öffnen.',
\t\t\t'errWrite'             : 'Kann nicht in \"\$1\" schreiben.',
\t\t\t'errPerm'              : 'Zugriff verweigert.',
\t\t\t'errLocked'            : '\"\$1\" ist gesperrt und kann nicht umbenannt, verschoben oder gelöscht werden.',
\t\t\t'errExists'            : 'Die Datei \"\$1\" existiert bereits.',
\t\t\t'errInvName'           : 'Ungültiger Dateiname.',
\t\t\t'errInvDirname'        : 'Ungültiger Ordnername.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Ordner nicht gefunden.',
\t\t\t'errFileNotFound'      : 'Datei nicht gefunden.',
\t\t\t'errTrgFolderNotFound' : 'Zielordner \"\$1\" nicht gefunden.',
\t\t\t'errPopup'             : 'Der Browser hat das Pop-Up-Fenster unterbunden. Um die Datei zu öffnen, Pop-Ups in den Browsereinstellungen aktivieren.',
\t\t\t'errMkdir'             : 'Kann Ordner \"\$1\" nicht erstellen.',
\t\t\t'errMkfile'            : 'Kann Datei \"\$1\" nicht erstellen.',
\t\t\t'errRename'            : 'Kann \"\$1\" nicht umbenennen.',
\t\t\t'errCopyFrom'          : 'Kopieren von Dateien von \"\$1\" nicht erlaubt.',
\t\t\t'errCopyTo'            : 'Kopieren von Dateien nach \"\$1\" nicht erlaubt.',
\t\t\t'errMkOutLink'         : 'Der Link kann nicht außerhalb der Partition führen.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Upload-Fehler.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Kann \"\$1\" nicht hochladen.', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Keine Dateien zum Hochladen gefunden.',
\t\t\t'errUploadTotalSize'   : 'Gesamtgröße überschreitet die Maximalgröße.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Die Datei überschreitet die Maximalgröße.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Dateiart (mime) nicht zulässig.',
\t\t\t'errUploadTransfer'    : '\"\$1\" Übertragungsfehler.',
\t\t\t'errUploadTemp'        : 'Kann temporäre Datei nicht erstellen.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Das Objekt \"\$1\" existiert bereits an dieser Stelle und kann nicht durch ein Objekt eines anderen Typs ersetzt werden.', // new
\t\t\t'errReplace'           : 'Kann \"\$1\" nicht ersetzen.',
\t\t\t'errSave'              : 'Kann \"\$1\" nicht speichern.',
\t\t\t'errCopy'              : 'Kann \"\$1\" nicht kopieren.',
\t\t\t'errMove'              : 'Kann \"\$1\" nicht verschieben.',
\t\t\t'errCopyInItself'      : '\"\$1\" kann sich nicht in sich selbst kopieren.',
\t\t\t'errRm'                : 'Kann \"\$1\" nicht entfernen.',
\t\t\t'errTrash'             : 'Kann Objekt nicht in Mülleimer legen.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Kann Quelldatei(en) nicht entfernen.',
\t\t\t'errExtract'           : 'Kann \"\$1\" nicht entpacken.',
\t\t\t'errArchive'           : 'Archiv konnte nicht erstellt werden.',
\t\t\t'errArcType'           : 'Archivtyp nicht untersützt.',
\t\t\t'errNoArchive'         : 'Bei der Datei handelt es sich nicht um ein Archiv, oder die Archivart wird nicht unterstützt.',
\t\t\t'errCmdNoSupport'      : 'Das Backend unterstützt diesen Befehl nicht.',
\t\t\t'errReplByChild'       : 'Der Ordner \"\$1\" kann nicht durch etwas ersetzt werden, das ihn selbst enthält.',
\t\t\t'errArcSymlinks'       : 'Aus Sicherheitsgründen ist es verboten, ein Archiv mit symbolischen Links zu extrahieren.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Die Archivdateien übersteigen die maximal erlaubte Größe.',
\t\t\t'errResize'            : 'Größe von \"\$1\" kann nicht geändert werden.',
\t\t\t'errResizeDegree'      : 'Ungültiger Rotationswert.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Bild konnte nicht gedreht werden.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Ungültige Bildgröße.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Bildmaße nicht geändert.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Nicht unterstützte Dateiart.',
\t\t\t'errNotUTF8Content'    : 'Die Datei \"\$1\" ist nicht im UTF-8-Format und kann nicht bearbeitet werden.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Verbindung mit \"\$1\" nicht möglich.', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Nicht unterstütztes Protokoll.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Verbindung fehlgeschlagen.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Host benötigt.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Diese Sitzung ist aufgrund von Inaktivität abgelaufen.',
\t\t\t'errCreatingTempDir'   : 'Erstellung des temporären Ordners nicht möglich: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Download der Datei über FTP nicht möglich: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Upload der Datei zu FTP nicht möglich: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Erstellung des Remote-Ordners mit FTP nicht möglich: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Fehler beim Archivieren der Dateien: \"\$1\"',
\t\t\t'errExtractExec'       : 'Fehler beim Extrahieren der Dateien: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Kann nicht ausgehängt werden.', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Kann nicht zu UTF-8 konvertiert werden.', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Ordner kann nich hochladen werden, eventuell mit Google Chrome versuchen.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Zeitüberschreitung während der Suche nach \"\$1\". Suchergebnis ist unvollständig.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Erneutes Anmelden ist erforderlich.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Die maximale Anzahl auswählbarer Elemente ist \$1', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Datei konnte nicht aus Mülleimer wieder hergestellt werden bzw. Ziel für Wiederherstellung nicht gefunden.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Kein Editor für diesen Dateityp gefunden.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Ein serverseitiger Fehler trat auf.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Konnte Ordner \"\$1\" nicht Leeren.', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'Es sind noch \$1 weitere Fehler.', // from v2.1.44 added 13.12.2019

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Archiv erstellen',
\t\t\t'cmdback'      : 'Zurück',
\t\t\t'cmdcopy'      : 'Kopieren',
\t\t\t'cmdcut'       : 'Ausschneiden',
\t\t\t'cmddownload'  : 'Herunterladen',
\t\t\t'cmdduplicate' : 'Duplizieren',
\t\t\t'cmdedit'      : 'Datei bearbeiten',
\t\t\t'cmdextract'   : 'Archiv entpacken',
\t\t\t'cmdforward'   : 'Vorwärts',
\t\t\t'cmdgetfile'   : 'Datei auswählen',
\t\t\t'cmdhelp'      : 'Über diese Software',
\t\t\t'cmdhome'      : 'Startordner',
\t\t\t'cmdinfo'      : 'Informationen',
\t\t\t'cmdmkdir'     : 'Neuer Ordner',
\t\t\t'cmdmkdirin'   : 'In neuen Ordner', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Neuer Datei',
\t\t\t'cmdopen'      : 'Öffnen',
\t\t\t'cmdpaste'     : 'Einfügen',
\t\t\t'cmdquicklook' : 'Vorschau',
\t\t\t'cmdreload'    : 'Aktualisieren',
\t\t\t'cmdrename'    : 'Umbenennen',
\t\t\t'cmdrm'        : 'Löschen',
\t\t\t'cmdtrash'     : 'In den Mülleimer legen', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Wiederherstellen', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Suchen',
\t\t\t'cmdup'        : 'In übergeordneten Ordner wechseln',
\t\t\t'cmdupload'    : 'Datei hochladen',
\t\t\t'cmdview'      : 'Ansehen',
\t\t\t'cmdresize'    : 'Größe ändern & drehen',
\t\t\t'cmdsort'      : 'Sortieren',
\t\t\t'cmdnetmount'  : 'Verbinde mit Netzwerkspeicher', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Abhängen', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Favoriten', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Berechtigung ändern', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Einen Ordner öffnen', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Spaltenbreite zurücksetzen', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Vollbild', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Verschieben', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Ordner Leeren', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Rückgängig', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Wiederholen', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Einstellungen', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Alle auswählen', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Keine auswählen', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Auswahl rückgängig machen', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'In neuem Fenster öffnen', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Verstecken', // from v2.1.41 added 13.12.2019

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Schließen',
\t\t\t'btnSave'   : 'Speichern',
\t\t\t'btnRm'     : 'Entfernen',
\t\t\t'btnApply'  : 'Anwenden',
\t\t\t'btnCancel' : 'Abbrechen',
\t\t\t'btnNo'     : 'Nein',
\t\t\t'btnYes'    : 'Ja',
\t\t\t'btnMount'  : 'Verbinden',  // added 18.04.2012
\t\t\t'btnApprove': 'Gehe zu \$1 und genehmige', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Auswerfen', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Konvertieren', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Arbeitspfad',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Partition',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Alle',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME-Typ', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Dateiname',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Speichern & Schließen', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Sicherung', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Umbenennen',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Alle Umbenennen', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Zurück (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Weiter (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Speichern als', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Öffne Ordner',
\t\t\t'ntffile'     : 'Öffne Datei',
\t\t\t'ntfreload'   : 'Ordnerinhalt neu',
\t\t\t'ntfmkdir'    : 'Erstelle Ordner',
\t\t\t'ntfmkfile'   : 'Erstelle Dateien',
\t\t\t'ntfrm'       : 'Lösche Dateien',
\t\t\t'ntfcopy'     : 'Kopiere Dateien',
\t\t\t'ntfmove'     : 'Verschiebe Dateien',
\t\t\t'ntfprepare'  : 'Kopiervorgang initialisieren',
\t\t\t'ntfrename'   : 'Benenne Dateien um',
\t\t\t'ntfupload'   : 'Dateien hochladen',
\t\t\t'ntfdownload' : 'Dateien herunterladen',
\t\t\t'ntfsave'     : 'Speichere Datei',
\t\t\t'ntfarchive'  : 'Erstelle Archiv',
\t\t\t'ntfextract'  : 'Entpacke Dateien',
\t\t\t'ntfsearch'   : 'Suche',
\t\t\t'ntfresize'   : 'Bildgrößen ändern',
\t\t\t'ntfsmth'     : 'Bin beschäftigt ..',
\t\t\t'ntfloadimg'  : 'Lade Bild ..',
\t\t\t'ntfnetmount' : 'Mit Netzwerkspeicher verbinden', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Netzwerkspeicher auswerfen', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Bildgröße erfassen', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Lese Ordnerinformationen', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Hole URL von Link', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Ändere Dateiberechtigungen', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Upload-Dateinamen überprüfen', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Erstelle Datei zum Download', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Beziehe Pfad Informationen', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Upload läuft', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Bewege in den Mülleimer', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Wiederherstellung aus Mülleimer', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Prüfe Zielordner', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Vorherige Operation rückgängig machen', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Wiederherstellen', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'Überprüfe Inhalte', // from v2.1.41 added 13.12.2019

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Mülleimer', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'unbekannt',
\t\t\t'Today'       : 'Heute',
\t\t\t'Yesterday'   : 'Gestern',
\t\t\t'msJan'       : 'Jan',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mär',
\t\t\t'msApr'       : 'Apr',
\t\t\t'msMay'       : 'Mai',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Jul',
\t\t\t'msAug'       : 'Aug',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Okt',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Dez',
\t\t\t'January'     : 'Januar',
\t\t\t'February'    : 'Februar',
\t\t\t'March'       : 'März',
\t\t\t'April'       : 'April',
\t\t\t'May'         : 'Mai',
\t\t\t'June'        : 'Juni',
\t\t\t'July'        : 'Juli',
\t\t\t'August'      : 'August',
\t\t\t'September'   : 'September',
\t\t\t'October'     : 'Oktober',
\t\t\t'November'    : 'November',
\t\t\t'December'    : 'Dezember',
\t\t\t'Sunday'      : 'Sonntag',
\t\t\t'Monday'      : 'Montag',
\t\t\t'Tuesday'     : 'Dienstag',
\t\t\t'Wednesday'   : 'Mittwoch',
\t\t\t'Thursday'    : 'Donnerstag',
\t\t\t'Friday'      : 'Freitag',
\t\t\t'Saturday'    : 'Samstag',
\t\t\t'Sun'         : 'So',
\t\t\t'Mon'         : 'Mo',
\t\t\t'Tue'         : 'Di',
\t\t\t'Wed'         : 'Mi',
\t\t\t'Thu'         : 'Do',
\t\t\t'Fri'         : 'Fr',
\t\t\t'Sat'         : 'Sa',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'nach Name',
\t\t\t'sortkind'          : 'nach Art',
\t\t\t'sortsize'          : 'nach Größe',
\t\t\t'sortdate'          : 'nach Datum',
\t\t\t'sortFoldersFirst'  : 'Ordner zuerst',
\t\t\t'sortperm'          : 'nach Berechtigung', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'nach Modus',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'nach Besitzer',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'nach Gruppe',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'auch Baumansicht',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'Neues Textdokument (.txt)', // added 10.11.2015
\t\t\t'untitled folder'   : 'Neuer Ordner',   // added 10.11.2015
\t\t\t'Archive'           : 'Neues Archiv',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'Neue Datei \$1',  // from v2.1.41 added 13.12.2019
\t\t\t'extentionfile'     : '\$1: Datei',    // from v2.1.41 added 13.12.2019
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 13.12.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Bestätigung benötigt',
\t\t\t'confirmRm'       : 'Sollen die Dateien gelöscht werden?<br>Vorgang ist endgültig!',
\t\t\t'confirmRepl'     : 'Datei ersetzen?',
\t\t\t'confirmRest'     : 'Vorhandenes Element durch das Element aus Mülleimer ersetzen?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Nicht UTF-8 kodiert<br>Zu UTF-8 konvertieren?<br>Inhalte werden zu UTF-8 konvertiert bei Speicherung.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Die Zeichencodierung dieser Datei konnte nicht erkannt werden. Es muss vorübergehend in UTF-8 zur Bearbeitung konvertiert werden.<br> Bitte eine Zeichenkodierung dieser Datei auswählen.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Die Datei wurde geändert.<br>Änderungen gehen verloren wenn nicht gespeichert wird.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Sicher diese Elemente in den Mülleimer verschieben?', // from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'Sicher alle Elemente nach \"\$1\" verschieben?', // from v2.1.50 added 13.12.2019
\t\t\t'apllyAll'        : 'Alles bestätigen',
\t\t\t'name'            : 'Name',
\t\t\t'size'            : 'Größe',
\t\t\t'perms'           : 'Berechtigungen',
\t\t\t'modify'          : 'Geändert',
\t\t\t'kind'            : 'Typ',
\t\t\t'read'            : 'Lesen',
\t\t\t'write'           : 'Schreiben',
\t\t\t'noaccess'        : 'Kein Zugriff',
\t\t\t'and'             : 'und',
\t\t\t'unknown'         : 'unbekannt',
\t\t\t'selectall'       : 'Alle Dateien auswählen',
\t\t\t'selectfiles'     : 'Dateien auswählen',
\t\t\t'selectffile'     : 'Erste Datei auswählen',
\t\t\t'selectlfile'     : 'Letzte Datei auswählen',
\t\t\t'viewlist'        : 'Spaltenansicht',
\t\t\t'viewicons'       : 'Symbolansicht',
\t\t\t'viewSmall'       : 'Kleine Icons', // from v2.1.39 added 13.12.2019
\t\t\t'viewMedium'      : 'Medium Icons', // from v2.1.39 added 13.12.2019
\t\t\t'viewLarge'       : 'Große Icons', // from v2.1.39 added 13.12.2019
\t\t\t'viewExtraLarge'  : 'Extragroße Icons', // from v2.1.39 added 13.12.2019
\t\t\t'places'          : 'Favoriten',
\t\t\t'calc'            : 'Berechne',
\t\t\t'path'            : 'Pfad',
\t\t\t'aliasfor'        : 'Verknüpfung zu',
\t\t\t'locked'          : 'Gesperrt',
\t\t\t'dim'             : 'Bildgröße',
\t\t\t'files'           : 'Dateien',
\t\t\t'folders'         : 'Ordner',
\t\t\t'items'           : 'Objekte',
\t\t\t'yes'             : 'ja',
\t\t\t'no'              : 'nein',
\t\t\t'link'            : 'Link',
\t\t\t'searcresult'     : 'Suchergebnisse',
\t\t\t'selected'        : 'Objekte ausgewählt',
\t\t\t'about'           : 'Über',
\t\t\t'shortcuts'       : 'Tastenkombinationen',
\t\t\t'help'            : 'Hilfe',
\t\t\t'webfm'           : 'Web-Dateiverwaltung',
\t\t\t'ver'             : 'Version',
\t\t\t'protocolver'     : 'Protokoll-Version',
\t\t\t'homepage'        : 'Projekt-Webseite',
\t\t\t'docs'            : 'Dokumentation',
\t\t\t'github'          : 'Forke uns auf Github',
\t\t\t'twitter'         : 'Folge uns auf twitter',
\t\t\t'facebook'        : 'Begleite uns auf facebook',
\t\t\t'team'            : 'Team',
\t\t\t'chiefdev'        : 'Chefentwickler',
\t\t\t'developer'       : 'Entwickler',
\t\t\t'contributor'     : 'Unterstützer',
\t\t\t'maintainer'      : 'Maintainer',
\t\t\t'translator'      : 'Übersetzer',
\t\t\t'icons'           : 'Icons',
\t\t\t'dontforget'      : 'und vergiss nicht .. morgen ist auch noch ein Tag ..',
\t\t\t'shortcutsof'     : 'Tastenkombinationen deaktiviert',
\t\t\t'dropFiles'       : 'Dateien hier ablegen',
\t\t\t'or'              : 'oder',
\t\t\t'selectForUpload' : 'Dateien zum Upload auswählen',
\t\t\t'moveFiles'       : 'Dateien verschieben',
\t\t\t'copyFiles'       : 'Dateien kopieren',
\t\t\t'restoreFiles'    : 'Elemente wiederherstellen', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Lösche von Favoriten',
\t\t\t'aspectRatio'     : 'Seitenverhältnis',
\t\t\t'scale'           : 'Maßstab',
\t\t\t'width'           : 'Breite',
\t\t\t'height'          : 'Höhe',
\t\t\t'resize'          : 'Größe ändern',
\t\t\t'crop'            : 'Zuschneiden',
\t\t\t'rotate'          : 'Drehen',
\t\t\t'rotate-cw'       : 'Drehe 90° im Uhrzeigersinn',
\t\t\t'rotate-ccw'      : 'Drehe 90° gegen Uhrzeigersinn',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'verbinde Netzwerkspeicher', // added 18.04.2012
\t\t\t'protocol'            : 'Protokoll', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'Benutzer', // added 18.04.2012
\t\t\t'pass'                : 'Passwort', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Soll \"\$1\" ausgehängt werden',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Dateien in den Browser ziehen', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Dateien hier loslassen', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Kodierung', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Lokal',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Ziel: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Suche nach MIME-Typ', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Besitzer', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Gruppe', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Andere', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Ausführen', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Berechtigung', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Modus', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Der Ordner ist leer', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Der Ordner ist leer\\\\A Elemente durch Ziehen hinzufügen', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Der Ordner ist leer\\\\A Elemente durch langes Tippen hinzufügen', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Qualität', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Automatische Synchronisation',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Nach oben bewegen',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'URL-Link holen', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Ausgewählte Objekte (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'Ordner-ID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Offline-Zugriff erlauben', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Erneut anmelden', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Wird geladen...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'mehrere Dateien öffnen', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Es wird versucht die \$1 Dateien zu öffnen .. sicher im Browser öffnen?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Kein Suchergebnis', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Datei wird bearbeitet.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : '\$1 Objekt(e) ausgewählt.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : '\$1 Objekte im Clipboard.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Inkrementelle Suche bezieht sich nur auf die aktuelle Ansicht.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Wiederherstellen', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 abgeschlossen', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Kontextmenü', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Seite umblättern', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Volume-Rootverzeichnisse', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Neustart', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Hintergrund Farbe', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Farbauswahl', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px Raster', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Ein', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Aus', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Keine Ergebnisse in der aktuellen Anzeige', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Die Ergebnisse der ersten Buchstabensuche sind in der aktuellen Ansicht leer.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Text Bezeichnung', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 Minuten übrig', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Wiedereröffnen mit ausgewählter Codierung', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Speichern mit der gewählten Kodierung', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Verzeichnis auswählen', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Erster Buchstabe suche', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Voreinstellungen', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'Zu viele Elemente auf einmal für den Mülleimer.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'Textbereich', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Leere Ordner \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'Es befinden sich keine Elemente im Ordner \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Einstellungen', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Spracheinstellungen', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Initialisiere die Einstellungen, welche in diesem Browser gespeichert sind', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Toolbareinstellung', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 Zeichen übrig',  // from v2.1.29 added 30.8.2017
\t\t\t'sum'             : 'Summe', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Ungefähre Dateigröße', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Fokussierung auf das Element Dialog mit Mouseover',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Auswählen', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Aktion bei der Auswahl der Datei', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Öffnen mit dem zuletzt verwendeten Editor', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Auswahl umkehren', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Sicher \$1 ausgewählte Elemente in \$2 umbenennen?<br>Rückgängig nicht möglich!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Stapelumbenennung', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Nummer', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Vorzeichen hinzufügen', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Nachzeichen hinzufügen', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Erweiterung ändern', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Spalteneinstellungen (Listenansicht)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Alle Änderungen werden sofort im Archiv angewendet.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Alle Änderungen werden nicht angewendet bis dieses Volume entfernt wird.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'Die folgenden Datenträger, die auf diesem Datenträger eingehängt sind, werden ebenfalls ausgehängt. Sicher dass alle aushängt werden sollen?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Auswahl Info', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Datei-Hash-Algorithmen', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Info-Elemente (Auswahl-Info-Panel)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Drücken Sie erneut, um zu beenden.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Symbolleiste', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Arbeitsplatz', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Dialog', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Alle', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'Icongröße (Symbolansicht)', // form v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'Öffne Editorfenster in voller Größe', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : 'Aktuell keine API zur Bearbeitung verfügbar, bitte auf Webseite bearbeiten', //from v2.1.40 added 13.12.2019
\t\t\t'editorConvNeedUpload' : 'Um zu speichern nach der Bearbeitung Element entweder mit URL hochladen oder mit herunter geladener Datei', // from v2.1.40 added 13.12.2019
\t\t\t'convertOn'       : 'Bearbeiten auf Seite \$1', // from v2.1.40 added 13.12.2019
\t\t\t'integrations'    : 'Integrationen', // from v2.1.40 added 13.12.2019
\t\t\t'integrationWith' : 'Diese Software hat folgende externe Dienste integriert. Vor Anwendung bitte die jeweiligen Nutzungsbedingungen usw. beachten', // from v2.1.40 added 13.12.2019
\t\t\t'showHidden'      : 'Zeige versteckte Elemente', // from v2.1.41 added 13.12.2019
\t\t\t'hideHidden'      : 'Verberge versteckte Elemente', // from v2.1.41 added 13.12.2019
\t\t\t'toggleHidden'    : 'Zeige/Verberge versteckte Elemente', // from v2.1.41 added 13.12.2019
\t\t\t'makefileTypes'   : 'Dateiarten bei \"Neue Datei\" aktivieren', // from v2.1.41 added 13.12.2019
\t\t\t'typeOfTextfile'  : 'Art der Textdatei', // from v2.1.41 added 13.12.2019
\t\t\t'add'             : 'Neu', // from v2.1.41 added 13.12.2019
\t\t\t'theme'           : 'Thema', // from v2.1.43 added 13.12.2019
\t\t\t'default'         : 'Standard', // from v2.1.43 added 13.12.2019
\t\t\t'description'     : 'Beschreibung', // from v2.1.43 added 13.12.2019
\t\t\t'website'         : 'Webseite', // from v2.1.43 added 13.12.2019
\t\t\t'author'          : 'Autor', // from v2.1.43 added 13.12.2019
\t\t\t'email'           : 'Email', // from v2.1.43 added 13.12.2019
\t\t\t'license'         : 'Lizenz', // from v2.1.43 added 13.12.2019
\t\t\t'exportToSave'    : 'Dieses Element kann nicht gespeichert werden. Um Änderungen nicht zu verlieren, muss es auf den lokalen PC exportiert werden', // from v2.1.44 added 13.12.2019
\t\t\t'dblclickToSelect': 'Doppelt auf Datei klicken um auszuwählen', // from v2.1.47 added 13.12.2019
\t\t\t'useFullscreen'   : 'Gesamter Bildschirm', // from v2.1.47 added 13.12.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Unbekannt',
\t\t\t'kindRoot'        : 'Stammverzeichnis', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Ordner',
\t\t\t'kindSelects'     : 'Auswahlkriterien', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Verknüpfung',
\t\t\t'kindAliasBroken' : 'Defekte Verknüpfung',
\t\t\t// applications
\t\t\t'kindApp'         : 'Programm',
\t\t\t'kindPostscript'  : 'Postscript-Dokument',
\t\t\t'kindMsOffice'    : 'MS Office-Dokument',
\t\t\t'kindMsWord'      : 'MS Word-Dokument',
\t\t\t'kindMsExcel'     : 'MS Excel-Dokument',
\t\t\t'kindMsPP'        : 'MS Powerpoint-Präsentation',
\t\t\t'kindOO'          : 'Open Office-Dokument',
\t\t\t'kindAppFlash'    : 'Flash',
\t\t\t'kindPDF'         : 'Portables Dokumentenformat (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent-Datei',
\t\t\t'kind7z'          : '7z-Archiv',
\t\t\t'kindTAR'         : 'TAR-Archiv',
\t\t\t'kindGZIP'        : 'GZIP-Archiv',
\t\t\t'kindBZIP'        : 'BZIP-Archiv',
\t\t\t'kindXZ'          : 'XZ-Archiv',
\t\t\t'kindZIP'         : 'ZIP-Archiv',
\t\t\t'kindRAR'         : 'RAR-Archiv',
\t\t\t'kindJAR'         : 'Java JAR-Datei',
\t\t\t'kindTTF'         : 'True Type-Schrift',
\t\t\t'kindOTF'         : 'Open Type-Schrift',
\t\t\t'kindRPM'         : 'RPM-Paket',
\t\t\t// texts
\t\t\t'kindText'        : 'Text-Dokument',
\t\t\t'kindTextPlain'   : 'Text-Dokument',
\t\t\t'kindPHP'         : 'PHP-Quelltext',
\t\t\t'kindCSS'         : 'CSS Stilvorlage',
\t\t\t'kindHTML'        : 'HTML-Dokument',
\t\t\t'kindJS'          : 'Javascript-Quelltext',
\t\t\t'kindRTF'         : 'Formatierte Textdatei',
\t\t\t'kindC'           : 'C-Quelltext',
\t\t\t'kindCHeader'     : 'C Header-Quelltext',
\t\t\t'kindCPP'         : 'C++ Quelltext',
\t\t\t'kindCPPHeader'   : 'C++ Header-Quelltext',
\t\t\t'kindShell'       : 'Unix-Shell-Skript',
\t\t\t'kindPython'      : 'Python-Quelltext',
\t\t\t'kindJava'        : 'Java-Quelltext',
\t\t\t'kindRuby'        : 'Ruby-Quelltext',
\t\t\t'kindPerl'        : 'Perl Script',
\t\t\t'kindSQL'         : 'SQL-Quelltext',
\t\t\t'kindXML'         : 'XML-Dokument',
\t\t\t'kindAWK'         : 'AWK-Quelltext',
\t\t\t'kindCSV'         : 'Kommagetrennte Daten',
\t\t\t'kindDOCBOOK'     : 'Docbook XML-Dokument',
\t\t\t'kindMarkdown'    : 'Markdown-Text', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Bild',
\t\t\t'kindBMP'         : 'Bitmap-Bild',
\t\t\t'kindJPEG'        : 'JPEG-Bild',
\t\t\t'kindGIF'         : 'GIF-Bild',
\t\t\t'kindPNG'         : 'PNG-Bild',
\t\t\t'kindTIFF'        : 'TIFF-Bild',
\t\t\t'kindTGA'         : 'TGA-Bild',
\t\t\t'kindPSD'         : 'Adobe Photoshop-Dokument',
\t\t\t'kindXBITMAP'     : 'X Bitmap-Bild',
\t\t\t'kindPXM'         : 'Pixelmator-Bild',
\t\t\t// media
\t\t\t'kindAudio'       : 'Audiodatei',
\t\t\t'kindAudioMPEG'   : 'MPEG Audio',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 Audio',
\t\t\t'kindAudioMIDI'   : 'MIDI Audio',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis Audio',
\t\t\t'kindAudioWAV'    : 'WAV Audio',
\t\t\t'AudioPlaylist'   : 'MP3-Playlist',
\t\t\t'kindVideo'       : 'Videodatei',
\t\t\t'kindVideoDV'     : 'DV Film',
\t\t\t'kindVideoMPEG'   : 'MPEG Film',
\t\t\t'kindVideoMPEG4'  : 'MPEG4 Film',
\t\t\t'kindVideoAVI'    : 'AVI Film',
\t\t\t'kindVideoMOV'    : 'QuickTime Film',
\t\t\t'kindVideoWM'     : 'Windows Media Film',
\t\t\t'kindVideoFlash'  : 'Flash Film',
\t\t\t'kindVideoMKV'    : 'Matroska Film',
\t\t\t'kindVideoOGG'    : 'Ogg Film'
\t\t}
\t};
}));
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.de.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.de.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.de.js");
    }
}
