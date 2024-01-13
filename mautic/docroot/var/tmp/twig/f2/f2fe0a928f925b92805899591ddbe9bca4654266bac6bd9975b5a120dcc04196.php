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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.da.js */
class __TwigTemplate_64bb60b432ed71d21e4730d2229c8cf492844dbb39502a6f617b3d1027fb61bc extends Template
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
 * Danish translation
 * @author Mark Topper (webman.io)
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
\telFinder.prototype.i18.da = {
\t\ttranslator : 'Mark Topper (webman.io)',
\t\tlanguage   : 'Language of translation in Danish',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i',
\t\tfancyDateFormat : '\$1 H:i',
\t\tmessages   : {
\t\t\t
\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Fejl',
\t\t\t'errUnknown'           : 'Ukendt fejl.',
\t\t\t'errUnknownCmd'        : 'Ukendt kommando.',
\t\t\t'errJqui'              : 'Ugyldig jQuery UI konfiguration. Valgbare, som kan trækkes rundt og droppable komponenter skal medtages.',
\t\t\t'errNode'              : 'elFinder kræver DOM Element oprettet.',
\t\t\t'errURL'               : 'Ugyldig elFinder konfiguration! URL option er ikke sat.',
\t\t\t'errAccess'            : 'Adgang nægtet.',
\t\t\t'errConnect'           : 'Kan ikke få kontatkt med backend.',
\t\t\t'errAbort'             : 'Forbindelse afbrudt.',
\t\t\t'errTimeout'           : 'Connection timeout.',
\t\t\t'errNotFound'          : 'Backend ikke fundet.',
\t\t\t'errResponse'          : 'Ugyldigt backend svar.',
\t\t\t'errConf'              : 'Ugyldig backend konfiguration.',
\t\t\t'errJSON'              : 'PHP JSON module ikke installeret.',
\t\t\t'errNoVolumes'         : 'Læsbare volumener ikke tilgængelig.',
\t\t\t'errCmdParams'         : 'Ugyldige parametre for kommando \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Data er ikke JSON.',
\t\t\t'errDataEmpty'         : 'Data er tomt.',
\t\t\t'errCmdReq'            : 'Backend request kræver kommando navn.',
\t\t\t'errOpen'              : 'Kunne ikke åbne \"\$1\".',
\t\t\t'errNotFolder'         : 'Objektet er ikke en mappe.',
\t\t\t'errNotFile'           : 'Objektet er ikke en fil.',
\t\t\t'errRead'              : 'Kunne ikke læse \"\$1\".',
\t\t\t'errWrite'             : 'Kunne ikke skrive til \"\$1\".',
\t\t\t'errPerm'              : 'Adgang nægtet.',
\t\t\t'errLocked'            : '\"\$1\" er låst og kan ikke blive omdøbt, flyttet eller slettet.',
\t\t\t'errExists'            : 'Der findes allerede en fil ved navn \"\$1\".',
\t\t\t'errInvName'           : 'Ugyldigt fil navn.',
\t\t\t'errFolderNotFound'    : 'Mappe ikke fundet.',
\t\t\t'errFileNotFound'      : 'Fil ikke fundet.',
\t\t\t'errTrgFolderNotFound' : 'Mappen \"\$1\" blev ikke fundet.',
\t\t\t'errPopup'             : 'Browseren forhindrede åbne popup-vindue. For at åbne filen aktivere popup-vinduer i browserindstillinger.',
\t\t\t'errMkdir'             : 'Kunne ikke oprette mappen \"\$1\".',
\t\t\t'errMkfile'            : 'Kunne ikke oprette filen \"\$1\".',
\t\t\t'errRename'            : 'Kunne ikke omdøbe \"\$1\".',
\t\t\t'errCopyFrom'          : 'Kopiering af filer fra volumen \"\$1\" er ikke tilladt.',
\t\t\t'errCopyTo'            : 'Kopiering af filer til volumen \"\$1\" er ikke tilladt.',
\t\t\t'errUpload'            : 'Upload fejl.',
\t\t\t'errUploadFile'        : 'Kunne ikke uploade \"\$1\".',
\t\t\t'errUploadNoFiles'     : 'Ingen filer fundet til upload.',
\t\t\t'errUploadTotalSize'   : 'Dataen overskrider den maksimalt tilladte størrelse.',
\t\t\t'errUploadFileSize'    : 'Fil overskrider den maksimalt tilladte størrelse.',
\t\t\t'errUploadMime'        : 'Fil type ikke godkendt.',
\t\t\t'errUploadTransfer'    : '\"\$1\" overførsels fejl.',
\t\t\t'errNotReplace'        : 'Object \"\$1\" already exists at this location and can not be replaced by object with another type.',
\t\t\t'errReplace'           : 'Unable to replace \"\$1\".',
\t\t\t'errSave'              : 'Kunne ikke gemme \"\$1\".',
\t\t\t'errCopy'              : 'Kunne ikke kopier \"\$1\".',
\t\t\t'errMove'              : 'Kunne ikke flytte \"\$1\".',
\t\t\t'errCopyInItself'      : 'Kunne ikke kopier \"\$1\" ind i sig selv.',
\t\t\t'errRm'                : 'Kunne ikke slette \"\$1\".',
\t\t\t'errRmSrc'             : 'Unable remove source file(s).',
\t\t\t'errExtract'           : 'Kunne ikke udpakke filer fra \"\$1\".',
\t\t\t'errArchive'           : 'Kunne ikke oprette arkiv.',
\t\t\t'errArcType'           : 'Arkiv typen er ikke understøttet.',
\t\t\t'errNoArchive'         : 'Filen er ikke et arkiv eller har ikke-understøttet arkiv type.',
\t\t\t'errCmdNoSupport'      : 'Backend understøtter ikke denne kommando.',
\t\t\t'errReplByChild'       : 'Mappen \"\$1\" kan ikke erstattes af en vare, den indeholder.',
\t\t\t'errArcSymlinks'       : 'Af sikkerhedsmæssige årsager nægtede at udpakke arkiver der indeholder symlinks eller filer med ikke tilladte navne.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Arkivfiler overskrider den maksimalt tilladte størrelse.',
\t\t\t'errResize'            : 'Kunne ikke ændre størrelsen på \"\$1\".',
\t\t\t'errResizeDegree'      : 'Invalid rotate degree.',
\t\t\t'errResizeRotate'      : 'Unable to rotate image.',
\t\t\t'errResizeSize'        : 'Invalid image size.',
\t\t\t'errResizeNoChange'    : 'Image size not changed.',
\t\t\t'errUsupportType'      : 'Ikke-understøttet fil type.',
\t\t\t'errNotUTF8Content'    : 'Filen \"\$1\" er ikke i UTF-8 og kan ikke blive redigeret.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Kunne ikke mounte \"\$1\".',     // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Ikke-understøttet protocol.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Mount mislykkedes.',             // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Host krævet.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Your session has expired due to inactivity.',
\t\t\t'errCreatingTempDir'   : 'Unable to create temporary directory: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Unable to download file from FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Unable to upload file to FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Unable to create remote directory on FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Error while archiving files: \"\$1\"',
\t\t\t'errExtractExec'       : 'Error while extracting files: \"\$1\"',

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Lav arkiv',
\t\t\t'cmdback'      : 'Tilbage',
\t\t\t'cmdcopy'      : 'Kopier',
\t\t\t'cmdcut'       : 'Klip',
\t\t\t'cmddownload'  : 'Download',
\t\t\t'cmdduplicate' : 'Dupliker',
\t\t\t'cmdedit'      : 'Rediger Fil',
\t\t\t'cmdextract'   : 'Udpak filer fra arkiv',
\t\t\t'cmdforward'   : 'Frem',
\t\t\t'cmdgetfile'   : 'Vælg filer',
\t\t\t'cmdhelp'      : 'Om dette produkt',
\t\t\t'cmdhome'      : 'Hjem',
\t\t\t'cmdinfo'      : 'Information',
\t\t\t'cmdmkdir'     : 'Ny mappe',
\t\t\t'cmdmkfile'    : 'Ny fil',
\t\t\t'cmdopen'      : 'Åben',
\t\t\t'cmdpaste'     : 'Indsæt',
\t\t\t'cmdquicklook' : 'Vis',
\t\t\t'cmdreload'    : 'Reload',
\t\t\t'cmdrename'    : 'Omdøb',
\t\t\t'cmdrm'        : 'Slet',
\t\t\t'cmdsearch'    : 'Find filer',
\t\t\t'cmdup'        : 'Gå til forældre mappe',
\t\t\t'cmdupload'    : 'Upload filer',
\t\t\t'cmdview'      : 'Vis',
\t\t\t'cmdresize'    : 'Ændre størrelse',
\t\t\t'cmdsort'      : 'Sorter',
\t\t\t'cmdnetmount'  : 'Mount network volume',
\t\t\t
\t\t\t/*********************************** buttons ***********************************/ 
\t\t\t'btnClose'  : 'Luk',
\t\t\t'btnSave'   : 'Gem',
\t\t\t'btnRm'     : 'Slet',
\t\t\t'btnApply'  : 'Anvend',
\t\t\t'btnCancel' : 'Annuler',
\t\t\t'btnNo'     : 'Nej',
\t\t\t'btnYes'    : 'Ja',
\t\t\t'btnMount'  : 'Mount',
\t\t\t
\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Åben mappe',
\t\t\t'ntffile'     : 'Åben fil',
\t\t\t'ntfreload'   : 'Reload mappe indhold',
\t\t\t'ntfmkdir'    : 'Opretter mappe',
\t\t\t'ntfmkfile'   : 'Opretter filer',
\t\t\t'ntfrm'       : 'Sletter filer',
\t\t\t'ntfcopy'     : 'Kopier filer',
\t\t\t'ntfmove'     : 'Flytter filer',
\t\t\t'ntfprepare'  : 'Forbereder kopering af filer',
\t\t\t'ntfrename'   : 'Omdøb filer',
\t\t\t'ntfupload'   : 'Uploader filer',
\t\t\t'ntfdownload' : 'Downloader filer',
\t\t\t'ntfsave'     : 'Gemmer filer',
\t\t\t'ntfarchive'  : 'Opretter arkiv',
\t\t\t'ntfextract'  : 'Udpakker filer fra arkiv',
\t\t\t'ntfsearch'   : 'Søger filer',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'Gør noget >_<',
\t\t\t'ntfloadimg'  : 'Loader billede',
\t\t\t'ntfnetmount' : 'Montere netværks volume', // added 18.04.2012
\t\t\t'ntfdim'      : 'Acquiring image dimension',
\t\t\t
\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'Ukendt',
\t\t\t'Today'       : 'I dag',
\t\t\t'Yesterday'   : 'I går',
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
\t\t\t'January'     : 'Januar',
\t\t\t'February'    : 'Februar',
\t\t\t'March'       : 'Marts',
\t\t\t'April'       : 'April',
\t\t\t'May'         : 'Maj',
\t\t\t'June'        : 'Juni',
\t\t\t'July'        : 'Juli',
\t\t\t'August'      : 'August',
\t\t\t'September'   : 'September',
\t\t\t'October'     : 'Oktober',
\t\t\t'November'    : 'November',
\t\t\t'December'    : 'December',
\t\t\t'Sunday'      : 'Søndag', 
\t\t\t'Monday'      : 'Mandag', 
\t\t\t'Tuesday'     : 'Tirsdag', 
\t\t\t'Wednesday'   : 'Onsdag', 
\t\t\t'Thursday'    : 'Torsdag', 
\t\t\t'Friday'      : 'Fredag', 
\t\t\t'Saturday'    : 'Lørdag',
\t\t\t'Sun'         : 'Søn', 
\t\t\t'Mon'         : 'Man', 
\t\t\t'Tue'         : 'Tir', 
\t\t\t'Wed'         : 'Ons', 
\t\t\t'Thu'         : 'Tor', 
\t\t\t'Fri'         : 'Fre', 
\t\t\t'Sat'         : 'Lør',
\t\t\t
\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'efter navn', 
\t\t\t'sortkind'          : 'efter type', 
\t\t\t'sortsize'          : 'efter størrelse',
\t\t\t'sortdate'          : 'efter dato',
\t\t\t'sortFoldersFirst'  : 'Mapper først', // added 22.06.2012
\t\t\t
\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Bekræftelse påkrævet',
\t\t\t'confirmRm'       : 'Er du sikker på du vil slette valgte filer?<br/>Dette kan ikke blive fortrudt!',
\t\t\t'confirmRepl'     : 'Erstat gammel fil med ny fil?',
\t\t\t'apllyAll'        : 'Anvend ved alle',
\t\t\t'name'            : 'Navn',
\t\t\t'size'            : 'Størrelse',
\t\t\t'perms'           : 'Rettigheder',
\t\t\t'modify'          : 'Ændret',
\t\t\t'kind'            : 'Type',
\t\t\t'read'            : 'Læse',
\t\t\t'write'           : 'Skrive',
\t\t\t'noaccess'        : 'ingen adgang',
\t\t\t'and'             : 'og',
\t\t\t'unknown'         : 'ukendt',
\t\t\t'selectall'       : 'Vælg alle filer',
\t\t\t'selectfiles'     : 'Vælg fil(er)',
\t\t\t'selectffile'     : 'Vælg første fil',
\t\t\t'selectlfile'     : 'Vælg sidste fil',
\t\t\t'viewlist'        : 'Liste visning',
\t\t\t'viewicons'       : 'Ikon visning',
\t\t\t'places'          : 'Plaseringer',
\t\t\t'calc'            : 'Udregn', 
\t\t\t'path'            : 'Sti',
\t\t\t'aliasfor'        : 'Alias for',
\t\t\t'locked'          : 'Låst',
\t\t\t'dim'             : 'Størrelser',
\t\t\t'files'           : 'Filer',
\t\t\t'folders'         : 'Mapper',
\t\t\t'items'           : 'Varer',
\t\t\t'yes'             : 'ja',
\t\t\t'no'              : 'nej',
\t\t\t'link'            : 'Link',
\t\t\t'searcresult'     : 'Søge resultater',  
\t\t\t'selected'        : 'valgte varer',
\t\t\t'about'           : 'Om',
\t\t\t'shortcuts'       : 'Genveje',
\t\t\t'help'            : 'Hjælp',
\t\t\t'webfm'           : 'Internet fil manager',
\t\t\t'ver'             : 'Version',
\t\t\t'protocolver'     : 'protocol version',
\t\t\t'homepage'        : 'Projeckt side',
\t\t\t'docs'            : 'Dokumentation',
\t\t\t'github'          : 'Fork os på Github',
\t\t\t'twitter'         : 'Følg os på twitter',
\t\t\t'facebook'        : 'Følg os på facebook',
\t\t\t'team'            : 'Hold',
\t\t\t'chiefdev'        : 'hovede udvikler',
\t\t\t'developer'       : 'udvikler',
\t\t\t'contributor'     : 'bidragyder',
\t\t\t'maintainer'      : 'vedligeholder',
\t\t\t'translator'      : 'oversætter',
\t\t\t'icons'           : 'Ikoner',
\t\t\t'dontforget'      : 'og glemt ikke at tag dit håndklæde',
\t\t\t'shortcutsof'     : 'Gemveje deaktiveret',
\t\t\t'dropFiles'       : 'Drop filer hertil',
\t\t\t'or'              : 'eller',
\t\t\t'selectForUpload' : 'Vælg filer at uploade',
\t\t\t'moveFiles'       : 'Flyt filer',
\t\t\t'copyFiles'       : 'Kopier filer',
\t\t\t'rmFromPlaces'    : 'Slet fra placering',
\t\t\t'aspectRatio'     : 'Skærmformat',
\t\t\t'scale'           : 'Skala',
\t\t\t'width'           : 'Bredte',
\t\t\t'height'          : 'Højde',
\t\t\t'resize'          : 'Ændre størrelse',
\t\t\t'crop'            : 'Beskær',
\t\t\t'rotate'          : 'Roter',
\t\t\t'rotate-cw'       : 'Roter 90 grader med uret',
\t\t\t'rotate-ccw'      : 'Roter 90 grader imod uret',
\t\t\t'degree'          : 'Grader',
\t\t\t'netMountDialogTitle' : 'Monter netwærks volume', // added 18.04.2012
\t\t\t'protocol'            : 'Protokol', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'Bruger', // added 18.04.2012
\t\t\t'pass'                : 'Kodeord', // added 18.04.2012
\t\t\t
\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Ukendt',
\t\t\t'kindFolder'      : 'Mappe',
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Ødelagt alias',
\t\t\t// applications
\t\t\t'kindApp'         : 'Applikation',
\t\t\t'kindPostscript'  : 'Postscript dokument',
\t\t\t'kindMsOffice'    : 'Microsoft Office dokument',
\t\t\t'kindMsWord'      : 'Microsoft Word dokument',
\t\t\t'kindMsExcel'     : 'Microsoft Excel dokument',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint præsentation',
\t\t\t'kindOO'          : 'Open Office dokument',
\t\t\t'kindAppFlash'    : 'Flash applikation',
\t\t\t'kindPDF'         : 'Flytbart Dokument Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent fil',
\t\t\t'kind7z'          : '7z arkiv',
\t\t\t'kindTAR'         : 'TAR arkiv',
\t\t\t'kindGZIP'        : 'GZIP arkiv',
\t\t\t'kindBZIP'        : 'BZIP arkiv',
\t\t\t'kindXZ'          : 'XZ arkiv',
\t\t\t'kindZIP'         : 'ZIP arkiv',
\t\t\t'kindRAR'         : 'RAR arkiv',
\t\t\t'kindJAR'         : 'Java JAR fil',
\t\t\t'kindTTF'         : 'True Type skrift',
\t\t\t'kindOTF'         : 'Open Type skrift',
\t\t\t'kindRPM'         : 'RPM pakke',
\t\t\t// texts
\t\t\t'kindText'        : 'Tekst dokument',
\t\t\t'kindTextPlain'   : 'Ren tekst',
\t\t\t'kindPHP'         : 'PHP kode',
\t\t\t'kindCSS'         : 'Cascading style sheet',
\t\t\t'kindHTML'        : 'HTML document',
\t\t\t'kindJS'          : 'Javascript kode',
\t\t\t'kindRTF'         : 'Rich Tekst Format',
\t\t\t'kindC'           : 'C kode',
\t\t\t'kindCHeader'     : 'C header kode',
\t\t\t'kindCPP'         : 'C++ kode',
\t\t\t'kindCPPHeader'   : 'C++ header kode',
\t\t\t'kindShell'       : 'Unix shell script',
\t\t\t'kindPython'      : 'Python kode',
\t\t\t'kindJava'        : 'Java kode',
\t\t\t'kindRuby'        : 'Ruby kode',
\t\t\t'kindPerl'        : 'Perl script',
\t\t\t'kindSQL'         : 'SQL kode',
\t\t\t'kindXML'         : 'XML dokument',
\t\t\t'kindAWK'         : 'AWK kode',
\t\t\t'kindCSV'         : 'Komma seperaret værdier',
\t\t\t'kindDOCBOOK'     : 'Docbook XML dokument',
\t\t\t// images
\t\t\t'kindImage'       : 'Billede',
\t\t\t'kindBMP'         : 'BMP billede',
\t\t\t'kindJPEG'        : 'JPEG billede',
\t\t\t'kindGIF'         : 'GIF billede',
\t\t\t'kindPNG'         : 'PNG billede',
\t\t\t'kindTIFF'        : 'TIFF billede',
\t\t\t'kindTGA'         : 'TGA billede',
\t\t\t'kindPSD'         : 'Adobe Photoshop billede',
\t\t\t'kindXBITMAP'     : 'X bitmap billede',
\t\t\t'kindPXM'         : 'Pixelmator billede',
\t\t\t// media
\t\t\t'kindAudio'       : 'Lyd medie',
\t\t\t'kindAudioMPEG'   : 'MPEG lyd',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 lyd',
\t\t\t'kindAudioMIDI'   : 'MIDI lyd',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis lyd',
\t\t\t'kindAudioWAV'    : 'WAV lyd',
\t\t\t'AudioPlaylist'   : 'MP3 spilleliste',
\t\t\t'kindVideo'       : 'Video medie',
\t\t\t'kindVideoDV'     : 'DV video',
\t\t\t'kindVideoMPEG'   : 'MPEG video',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 video',
\t\t\t'kindVideoAVI'    : 'AVI video',
\t\t\t'kindVideoMOV'    : 'Hurtig tids video',
\t\t\t'kindVideoWM'     : 'Windows Medie video',
\t\t\t'kindVideoFlash'  : 'Flash video',
\t\t\t'kindVideoMKV'    : 'Matroska video',
\t\t\t'kindVideoOGG'    : 'Ogg video'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.da.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.da.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.da.js");
    }
}
