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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sv.js */
class __TwigTemplate_ebaafe50271385fec551554d53b8d28253a62db6313356d0a7c8d1ece020775a extends Template
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
 * Swedish translation
 * @author Gabriel Satzger <gabriel.satzger@sbg.se>
 * @version 2014-12-19
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
\telFinder.prototype.i18.sv = {
\t\ttranslator : 'Gabriel Satzger &lt;gabriel.satzger@sbg.se&gt;',
\t\tlanguage   : 'Svenska',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'Y-m-d H:i',
\t\tfancyDateFormat : '\$1 H:i',
\t\tmessages   : {
\t\t\t
\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Error',
\t\t\t'errUnknown'           : 'Okänt error.',
\t\t\t'errUnknownCmd'        : 'Okänt kommando.',
\t\t\t'errJqui'              : 'Felaktig jQuery UI konfiguration. Komponenterna selectable, draggable och droppable måste vara inkluderade.',
\t\t\t'errNode'              : 'elFinder kräver att DOM Elementen skapats.',
\t\t\t'errURL'               : 'Felaktig elFinder konfiguration! URL parametern är inte satt.',
\t\t\t'errAccess'            : 'Åtkomst nekad.',
\t\t\t'errConnect'           : 'Kan inte ansluta till backend.',
\t\t\t'errAbort'             : 'Anslutningen avbröts.',
\t\t\t'errTimeout'           : 'Anslutningen löpte ut.',
\t\t\t'errNotFound'          : 'Backend hittades inte.',
\t\t\t'errResponse'          : 'Ogiltig backend svar.',
\t\t\t'errConf'              : 'Ogiltig backend konfiguration.',
\t\t\t'errJSON'              : 'PHP JSON modul är inte installerad.',
\t\t\t'errNoVolumes'         : 'Läsbara volymer är inte tillgängliga.',
\t\t\t'errCmdParams'         : 'Ogiltiga parametrar för kommandot \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Datan är inte JSON.',
\t\t\t'errDataEmpty'         : 'Datan är tom.',
\t\t\t'errCmdReq'            : 'Backend begäran kräver kommandonamn.',
\t\t\t'errOpen'              : 'Kan inte öppna \"\$1\".',
\t\t\t'errNotFolder'         : 'Objektet är inte en mapp.',
\t\t\t'errNotFile'           : 'Objektet är inte en fil.',
\t\t\t'errRead'              : 'Kan inte läsa \"\$1\".',
\t\t\t'errWrite'             : 'Kan inte skriva till \"\$1\".',
\t\t\t'errPerm'              : 'Tillstånd nekat.',
\t\t\t'errLocked'            : '\"\$1\" är låst och kan inte döpas om, flyttas eller tas bort.',
\t\t\t'errExists'            : 'Fil med namn \"\$1\" finns redan.',
\t\t\t'errInvName'           : 'Ogiltigt filnamn.',
\t\t\t'errFolderNotFound'    : 'Mappen hittades inte.',
\t\t\t'errFileNotFound'      : 'Filen hittades inte.',
\t\t\t'errTrgFolderNotFound' : 'Målmappen \"\$1\" hittades inte.',
\t\t\t'errPopup'             : 'Webbläsaren hindrade popup-fönstret att öppnas. Ändra i webbläsarens inställningar för att kunna öppna filen.',
\t\t\t'errMkdir'             : 'Kan inte skapa mappen \"\$1\".',
\t\t\t'errMkfile'            : 'Kan inte skapa filen \"\$1\".',
\t\t\t'errRename'            : 'Kan inte döpa om \"\$1\".',
\t\t\t'errCopyFrom'          : 'Kopiera filer från volym \"\$1\" tillåts inte.',
\t\t\t'errCopyTo'            : 'Kopiera filer till volym \"\$1\" tillåts inte.',
\t\t\t'errUpload'            : 'Error vid uppladdningen.',
\t\t\t'errUploadFile'        : 'Kan inte ladda upp \"\$1\".',
\t\t\t'errUploadNoFiles'     : 'Inga filer hittades för uppladdning.',
\t\t\t'errUploadTotalSize'   : 'Data överskrider den högsta tillåtna storleken.',
\t\t\t'errUploadFileSize'    : 'Filen överskrider den högsta tillåtna storleken.',
\t\t\t'errUploadMime'        : 'Otillåten filtyp.',
\t\t\t'errUploadTransfer'    : '\"\$1\" överföringsfel.',
\t\t\t'errNotReplace'        : 'Object \"\$1\" already exists at this location and can not be replaced by object with another type.',
\t\t\t'errReplace'           : 'Unable to replace \"\$1\".',
\t\t\t'errSave'              : 'Kan inte spara \"\$1\".',
\t\t\t'errCopy'              : 'Kan inte kopiera \"\$1\".',
\t\t\t'errMove'              : 'Kan inte flytta \"\$1\".',
\t\t\t'errCopyInItself'      : 'Kan inte flytta \"\$1\" till sig själv.',
\t\t\t'errRm'                : 'Kan inte ta bort \"\$1\".',
\t\t\t'errRmSrc'             : 'Unable remove source file(s).',
\t\t\t'errExtract'           : 'Kan inte packa upp filen från \"\$1\".',
\t\t\t'errArchive'           : 'Kan inte skapa arkiv.',
\t\t\t'errArcType'           : 'Arkivtypen stöds inte.',
\t\t\t'errNoArchive'         : 'Filen är inte av typen arkiv.',
\t\t\t'errCmdNoSupport'      : 'Backend stöder inte detta kommando.',
\t\t\t'errReplByChild'       : 'Mappen “\$1” kan inte ersättas av ett objekt den innehåller.',
\t\t\t'errArcSymlinks'       : 'Av säkerhetsskäl nekas arkivet att packas upp då det innehåller symboliska länkar eller filer med ej tillåtna namn.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Arkivfiler överskrider största tillåtna storlek.',
\t\t\t'errResize'            : 'Kan inte ändra storlek \"\$1\".',
\t\t\t'errResizeDegree'      : 'Invalid rotate degree.',
\t\t\t'errResizeRotate'      : 'Unable to rotate image.',
\t\t\t'errResizeSize'        : 'Invalid image size.',
\t\t\t'errResizeNoChange'    : 'Image size not changed.',
\t\t\t'errUsupportType'      : 'Filtypen stöds inte.',
\t\t\t'errNotUTF8Content'    : 'Filen \"\$1\" är inte i UTF-8 och kan inte redigeras.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Kan inte koppla \"\$1\".',     // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Protokollet stöds inte.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Kopplingen misslyckades.',             // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Host krävs.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Your session has expired due to inactivity.',
\t\t\t'errCreatingTempDir'   : 'Unable to create temporary directory: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Unable to download file from FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Unable to upload file to FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Unable to create remote directory on FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Error while archiving files: \"\$1\"',
\t\t\t'errExtractExec'       : 'Error while extracting files: \"\$1\"',
\t\t\t
\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Skapa arkiv',
\t\t\t'cmdback'      : 'Tillbaka',
\t\t\t'cmdcopy'      : 'Kopiera',
\t\t\t'cmdcut'       : 'Klipp ut',
\t\t\t'cmddownload'  : 'Ladda ned',
\t\t\t'cmdduplicate' : 'Duplicera',
\t\t\t'cmdedit'      : 'Redigera fil',
\t\t\t'cmdextract'   : 'Extrahera filer från arkiv',
\t\t\t'cmdforward'   : 'Framåt',
\t\t\t'cmdgetfile'   : 'Välj filer',
\t\t\t'cmdhelp'      : 'Om denna programvara',
\t\t\t'cmdhome'      : 'Hem',
\t\t\t'cmdinfo'      : 'Visa info',
\t\t\t'cmdmkdir'     : 'Ny mapp',
\t\t\t'cmdmkfile'    : 'Ny fil',
\t\t\t'cmdopen'      : 'Öppna',
\t\t\t'cmdpaste'     : 'Klistra in',
\t\t\t'cmdquicklook' : 'Förhandsgranska',
\t\t\t'cmdreload'    : 'Ladda om',
\t\t\t'cmdrename'    : 'Döp om',
\t\t\t'cmdrm'        : 'Radera',
\t\t\t'cmdsearch'    : 'Hitta filer',
\t\t\t'cmdup'        : 'Gå till överordnade katalog',
\t\t\t'cmdupload'    : 'Ladda upp filer',
\t\t\t'cmdview'      : 'Visa',
\t\t\t'cmdresize'    : 'Ändra bildstorlek',
\t\t\t'cmdsort'      : 'Sortera',
\t\t\t'cmdnetmount'  : 'Mount network volume',
\t\t\t
\t\t\t/*********************************** buttons ***********************************/ 
\t\t\t'btnClose'  : 'Stäng',
\t\t\t'btnSave'   : 'Spara',
\t\t\t'btnRm'     : 'Ta bort',
\t\t\t'btnApply'  : 'Verkställ',
\t\t\t'btnCancel' : 'Ångra',
\t\t\t'btnNo'     : 'Nej',
\t\t\t'btnYes'    : 'Ja',
\t\t\t'btnMount'  : 'Mount',
\t\t\t
\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Öppnar mapp',
\t\t\t'ntffile'     : 'Öppnar fil',
\t\t\t'ntfreload'   : 'Laddar om mappinnehållet',
\t\t\t'ntfmkdir'    : 'Skapar katalog',
\t\t\t'ntfmkfile'   : 'Skapar fil',
\t\t\t'ntfrm'       : 'Tar bort filer',
\t\t\t'ntfcopy'     : 'Kopierar filer',
\t\t\t'ntfmove'     : 'Flyttar filer',
\t\t\t'ntfprepare'  : 'Förbereder att flytta filer',
\t\t\t'ntfrename'   : 'Döper om filer',
\t\t\t'ntfupload'   : 'Laddar upp filer',
\t\t\t'ntfdownload' : 'Laddar ner filer',
\t\t\t'ntfsave'     : 'Sparar filer',
\t\t\t'ntfarchive'  : 'Skapar arkiv',
\t\t\t'ntfextract'  : 'Extraherar filer från arkiv',
\t\t\t'ntfsearch'   : 'Söker filer',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'Gör någonting >_<',
\t\t\t'ntfloadimg'  : 'Laddar bild',
\t\t\t'ntfnetmount' : 'kopplar nätverksvolym', // added 18.04.2012
\t\t\t'ntfdim'      : 'Acquiring image dimension',
\t\t\t
\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'okänt',
\t\t\t'Today'       : 'Idag',
\t\t\t'Yesterday'   : 'Igår',
\t\t\t'msJan'       : 'Jan',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Apr',
\t\t\t'msMay'       : 'Maj',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Jul',
\t\t\t'msAug'       : 'Aug',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Okt',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Dec',
\t\t\t'January'     : 'Januari',
\t\t\t'February'    : 'Februari',
\t\t\t'March'       : 'Mars',
\t\t\t'April'       : 'April',
\t\t\t'May'         : 'Maj',
\t\t\t'June'        : 'Juni',
\t\t\t'July'        : 'Juli',
\t\t\t'August'      : 'Augusti',
\t\t\t'September'   : 'September',
\t\t\t'October'     : 'Oktober',
\t\t\t'November'    : 'November',
\t\t\t'December'    : 'December',
\t\t\t'Sunday'      : 'Söndag', 
\t\t\t'Monday'      : 'Måndag', 
\t\t\t'Tuesday'     : 'Tisdag', 
\t\t\t'Wednesday'   : 'Onsdag', 
\t\t\t'Thursday'    : 'Torsdag', 
\t\t\t'Friday'      : 'Fredag', 
\t\t\t'Saturday'    : 'Lördag',
\t\t\t'Sun'         : 'Sön', 
\t\t\t'Mon'         : 'Mån', 
\t\t\t'Tue'         : 'Tis', 
\t\t\t'Wed'         : 'Ons', 
\t\t\t'Thu'         : 'Tor', 
\t\t\t'Fri'         : 'Fre', 
\t\t\t'Sat'         : 'Lör',
\t\t\t
\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'efter namn', 
\t\t\t'sortkind'          : 'efter sort', 
\t\t\t'sortsize'          : 'efter storlek',
\t\t\t'sortdate'          : 'efter datum',
\t\t\t'sortFoldersFirst'  : 'Mappar först', // added 22.06.2012
\t\t\t
\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Bekräftelse krävs',
\t\t\t'confirmRm'       : 'Är du säker på att du vill ta bort filer? <br/> Detta kan inte ångras!',
\t\t\t'confirmRepl'     : 'Ersätt den gamla filen med en ny?',
\t\t\t'apllyAll'        : 'Använd för alla',
\t\t\t'name'            : 'Namn',
\t\t\t'size'            : 'Storlek',
\t\t\t'perms'           : 'Rättigheter',
\t\t\t'modify'          : 'Ändrad',
\t\t\t'kind'            : 'Sort',
\t\t\t'read'            : 'läs',
\t\t\t'write'           : 'skriv',
\t\t\t'noaccess'        : 'ingen åtkomst',
\t\t\t'and'             : 'och',
\t\t\t'unknown'         : 'okänd',
\t\t\t'selectall'       : 'Välj alla filer',
\t\t\t'selectfiles'     : 'Välj fil(er)',
\t\t\t'selectffile'     : 'Välj första filen',
\t\t\t'selectlfile'     : 'Välj sista filen',
\t\t\t'viewlist'        : 'Listvy',
\t\t\t'viewicons'       : 'Ikonvy',
\t\t\t'places'          : 'Platser',
\t\t\t'calc'            : 'Beräkna', 
\t\t\t'path'            : 'Sökväg',
\t\t\t'aliasfor'        : 'Alias för',
\t\t\t'locked'          : 'Låst',
\t\t\t'dim'             : 'Dimensioner',
\t\t\t'files'           : 'Filer',
\t\t\t'folders'         : 'Mappar',
\t\t\t'items'           : 'Objekt',
\t\t\t'yes'             : 'ja',
\t\t\t'no'              : 'nej',
\t\t\t'link'            : 'Länk',
\t\t\t'searcresult'     : 'Sökresultat',  
\t\t\t'selected'        : 'valda objekt',
\t\t\t'about'           : 'Om',
\t\t\t'shortcuts'       : 'Genväg',
\t\t\t'help'            : 'Hjälp',
\t\t\t'webfm'           : 'Webbfilhanterare',
\t\t\t'ver'             : 'Version',
\t\t\t'protocolver'     : 'protokolversion',
\t\t\t'homepage'        : 'Projekt hemsida',
\t\t\t'docs'            : 'Dokumentation',
\t\t\t'github'          : 'Forka oss på Github',
\t\t\t'twitter'         : 'Följ oss på twitter',
\t\t\t'facebook'        : 'Följ oss på facebook',
\t\t\t'team'            : 'Team',
\t\t\t'chiefdev'        : 'senior utvecklare',
\t\t\t'developer'       : 'utvecklare',
\t\t\t'contributor'     : 'bidragsgivare',
\t\t\t'maintainer'      : 'underhållare',
\t\t\t'translator'      : 'översättare',
\t\t\t'icons'           : 'Ikoner',
\t\t\t'dontforget'      : 'och glöm inte att ta med din handduk',
\t\t\t'shortcutsof'     : 'Genvägar avaktiverade',
\t\t\t'dropFiles'       : 'Släpp filerna här',
\t\t\t'or'              : 'eller',
\t\t\t'selectForUpload' : 'Välj filer att ladda upp',
\t\t\t'moveFiles'       : 'Flytta filer',
\t\t\t'copyFiles'       : 'Kopiera filer',
\t\t\t'rmFromPlaces'    : 'Ta bort från platser',
\t\t\t'aspectRatio'     : 'Aspekt ratio',
\t\t\t'scale'           : 'Skala',
\t\t\t'width'           : 'Bredd',
\t\t\t'height'          : 'Höjd',
\t\t\t'resize'          : 'Ändra storlek',
\t\t\t'crop'            : 'Beskär',
\t\t\t'rotate'          : 'Rotera',
\t\t\t'rotate-cw'       : 'Rotera 90 grader medurs',
\t\t\t'rotate-ccw'      : 'Rotera 90 grader moturs',
\t\t\t'degree'          : 'Grader',
\t\t\t'netMountDialogTitle' : 'Koppla nätverksvolym', // added 18.04.2012
\t\t\t'protocol'            : 'Protokol', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'användare', // added 18.04.2012
\t\t\t'pass'                : 'Lösenord', // added 18.04.2012
\t\t\t
\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Okänd',
\t\t\t'kindFolder'      : 'Mapp',
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Trasigt alias',
\t\t\t// applications
\t\t\t'kindApp'         : 'Applikation',
\t\t\t'kindPostscript'  : 'Postscript',
\t\t\t'kindMsOffice'    : 'Microsoft Office',
\t\t\t'kindMsWord'      : 'Microsoft Word',
\t\t\t'kindMsExcel'     : 'Microsoft Excel',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint',
\t\t\t'kindOO'          : 'Open Office',
\t\t\t'kindAppFlash'    : 'Flash',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent',
\t\t\t'kind7z'          : '7z',
\t\t\t'kindTAR'         : 'TAR',
\t\t\t'kindGZIP'        : 'GZIP',
\t\t\t'kindBZIP'        : 'BZIP',
\t\t\t'kindXZ'          : 'XZ',
\t\t\t'kindZIP'         : 'ZIP',
\t\t\t'kindRAR'         : 'RAR',
\t\t\t'kindJAR'         : 'Java JAR',
\t\t\t'kindTTF'         : 'True Type',
\t\t\t'kindOTF'         : 'Open Type',
\t\t\t'kindRPM'         : 'RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Text',
\t\t\t'kindTextPlain'   : 'Plain',
\t\t\t'kindPHP'         : 'PHP',
\t\t\t'kindCSS'         : 'Cascading style sheet',
\t\t\t'kindHTML'        : 'HTML',
\t\t\t'kindJS'          : 'Javascript',
\t\t\t'kindRTF'         : 'Rich Text Format',
\t\t\t'kindC'           : 'C',
\t\t\t'kindCHeader'     : 'C header',
\t\t\t'kindCPP'         : 'C++',
\t\t\t'kindCPPHeader'   : 'C++ header',
\t\t\t'kindShell'       : 'Unix shell script',
\t\t\t'kindPython'      : 'Python',
\t\t\t'kindJava'        : 'Java',
\t\t\t'kindRuby'        : 'Ruby',
\t\t\t'kindPerl'        : 'Perl',
\t\t\t'kindSQL'         : 'SQL',
\t\t\t'kindXML'         : 'XML',
\t\t\t'kindAWK'         : 'AWK',
\t\t\t'kindCSV'         : 'CSV',
\t\t\t'kindDOCBOOK'     : 'Docbook XML',
\t\t\t// images
\t\t\t'kindImage'       : 'Bild',
\t\t\t'kindBMP'         : 'BMP',
\t\t\t'kindJPEG'        : 'JPEG',
\t\t\t'kindGIF'         : 'GIF',
\t\t\t'kindPNG'         : 'PNG',
\t\t\t'kindTIFF'        : 'TIFF',
\t\t\t'kindTGA'         : 'TGA',
\t\t\t'kindPSD'         : 'Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'X bitmap',
\t\t\t'kindPXM'         : 'Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Audio media',
\t\t\t'kindAudioMPEG'   : 'MPEG audio',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 audio',
\t\t\t'kindAudioMIDI'   : 'MIDI audio',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis audio',
\t\t\t'kindAudioWAV'    : 'WAV audio',
\t\t\t'AudioPlaylist'   : 'MP3 playlist',
\t\t\t'kindVideo'       : 'Video media',
\t\t\t'kindVideoDV'     : 'DV movie',
\t\t\t'kindVideoMPEG'   : 'MPEG movie',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 movie',
\t\t\t'kindVideoAVI'    : 'AVI movie',
\t\t\t'kindVideoMOV'    : 'Quick Time movie',
\t\t\t'kindVideoWM'     : 'Windows Media movie',
\t\t\t'kindVideoFlash'  : 'Flash movie',
\t\t\t'kindVideoMKV'    : 'Matroska movie',
\t\t\t'kindVideoOGG'    : 'Ogg movie'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sv.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sv.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sv.js");
    }
}
