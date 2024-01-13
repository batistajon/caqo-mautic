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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.no.js */
class __TwigTemplate_173a91781af1e8004103d7f8667dfcdf42188ce5be7ec7f7c853523823756475 extends Template
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
 * Norwegian translation
 * @author Stian Jacobsen <stian@promonorge.no>
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
\telFinder.prototype.i18.no = {
\t\ttranslator : 'Stian Jacobsen &lt;stian@promonorge.no&gt;',
\t\tlanguage   : 'Norwegian Bokmål',
\t\tdateFormat : 'M d, Y h:i A', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 h:i A', // will produce smth like: Today 12:25 PM
\t\tdirection  : 'ltr',
\t\tmessages   : {
\t\t\t
\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Feil',
\t\t\t'errUnknown'           : 'Ukjent feil.',
\t\t\t'errUnknownCmd'        : 'Ukjent kommando.',
\t\t\t'errJqui'              : 'Ugyldig jQuery UI konfigurasjon. Selectable, draggable og droppable komponentene må være inkludert.',
\t\t\t'errNode'              : 'elFinder påkrever at DOM Elementer kan opprettes.',
\t\t\t'errURL'               : 'Ugyldig elFinder konfigurasjon! URL-valget er ikke satt.',
\t\t\t'errAccess'            : 'Ingen adgang.',
\t\t\t'errConnect'           : 'Kunne ikke koble til.',
\t\t\t'errAbort'             : 'Tilkoblingen avbrutt.',
\t\t\t'errTimeout'           : 'Tilkoblingen tidsavbrudd.',
\t\t\t'errNotFound'          : 'Backend ble ikke funnet',
\t\t\t'errResponse'          : 'Ugyldig backend respons.',
\t\t\t'errConf'              : 'Ugyldig backend konfigurasjon.',
\t\t\t'errJSON'              : 'PHP JSON modul er ikke installert.',
\t\t\t'errNoVolumes'         : 'Lesbar volum er ikke tilgjennelig.',
\t\t\t'errCmdParams'         : 'Ugyldig parameter for kommando \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Innhold er ikke JSON.',
\t\t\t'errDataEmpty'         : 'Innholdet er tomt.',
\t\t\t'errCmdReq'            : 'Backend spørringen påkrever kommando.',
\t\t\t'errOpen'              : 'Kunne ikke åpne \"\$1\".',
\t\t\t'errNotFolder'         : 'Objektet er ikke en mappe.',
\t\t\t'errNotFile'           : 'Objektet er ikke en fil.',
\t\t\t'errRead'              : 'Kunne ikke lese \"\$1\".',
\t\t\t'errWrite'             : 'Kunne ikke skrive til \"\$1\".',
\t\t\t'errPerm'              : 'Du har ikke rettigheter.',
\t\t\t'errLocked'            : '\"\$1\" er låst og kan ikke flyttes, slettes eller endres',
\t\t\t'errExists'            : 'Filen \"\$1\" finnes allerede.',
\t\t\t'errInvName'           : 'Ugyldig filnavn.',
\t\t\t'errFolderNotFound'    : 'Mappen finnes ikke.',
\t\t\t'errFileNotFound'      : 'Filen finnes ikke.',
\t\t\t'errTrgFolderNotFound' : 'Målmappen \"\$1\" ble ikke funnet.',
\t\t\t'errPopup'             : 'Nettleseren din blokkerte et pop-up vindu. For å åpne filen må du aktivere pop-up i din nettlesers innstillinger.',
\t\t\t'errMkdir'             : 'Kunne ikke opprette mappen \"\$1\".',
\t\t\t'errMkfile'            : 'Kunne ikke opprette filen \"\$1\".',
\t\t\t'errRename'            : 'Kunne ikke gi nytt navn til \"\$1\".',
\t\t\t'errCopyFrom'          : 'Kopiere filer fra \"\$1\" er ikke tillatt.',
\t\t\t'errCopyTo'            : 'Kopiere filer til \"\$1\" er ikke tillatt.',
\t\t\t'errUpload'            : 'Feil under opplasting.',
\t\t\t'errUploadFile'        : 'Kunne ikke laste opp \"\$1\".',
\t\t\t'errUploadNoFiles'     : 'Ingen filer funnet til opplasting.',
\t\t\t'errUploadTotalSize'   : 'Innholdet overgår maksimum tillatt størrelse.',
\t\t\t'errUploadFileSize'    : 'Filen vergår maksimum tillatt størrelse.',
\t\t\t'errUploadMime'        : 'Filtypen ikke tillatt.',
\t\t\t'errUploadTransfer'    : '\"\$1\" overførings feil.',
\t\t\t'errNotReplace'        : 'Object \"\$1\" already exists at this location and can not be replaced by object with another type.',
\t\t\t'errReplace'           : 'Unable to replace \"\$1\".',
\t\t\t'errSave'              : 'Kunne ikke lagre \"\$1\".',
\t\t\t'errCopy'              : 'Kunne ikke kopiere \"\$1\".',
\t\t\t'errMove'              : 'Kunne ikke flytte \"\$1\".',
\t\t\t'errCopyInItself'      : 'Kunne ikke kopiere \"\$1\" til seg selv.',
\t\t\t'errRm'                : 'Kunne ikke slette \"\$1\".',
\t\t\t'errRmSrc'             : 'Unable remove source file(s).',
\t\t\t'errExtract'           : 'Kunne ikke pakke ut filer fra \"\$1\".',
\t\t\t'errArchive'           : 'Kunne ikke opprette arkiv.',
\t\t\t'errArcType'           : 'akriv-typen er ikke støttet.',
\t\t\t'errNoArchive'         : 'Filen er ikke et arkiv eller et arkiv som ikke er støttet.',
\t\t\t'errCmdNoSupport'      : 'Backend støtter ikke denne kommandoen.',
\t\t\t'errReplByChild'       : 'The folder “\$1” can’t be replaced by an item it contains.',
\t\t\t'errArcSymlinks'       : 'For security reason denied to unpack archives contains symlinks or files with not allowed names.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Archive files exceeds maximum allowed size.',
\t\t\t'errResize'            : 'Unable to resize \"\$1\".',
\t\t\t'errResizeDegree'      : 'Invalid rotate degree.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Unable to rotate image.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Invalid image size.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Image size not changed.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Unsupported file type.',
\t\t\t'errNotUTF8Content'    : 'File \"\$1\" is not in UTF-8 and cannot be edited.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Unable to mount \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Unsupported protocol.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Mount failed.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Host required.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Your session has expired due to inactivity.',
\t\t\t'errCreatingTempDir'   : 'Unable to create temporary directory: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Unable to download file from FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Unable to upload file to FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Unable to create remote directory on FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Error while archiving files: \"\$1\"',
\t\t\t'errExtractExec'       : 'Error while extracting files: \"\$1\"',
\t\t\t
\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Opprett arkiv',
\t\t\t'cmdback'      : 'Tilbake',
\t\t\t'cmdcopy'      : 'Kopier',
\t\t\t'cmdcut'       : 'Klipp ut',
\t\t\t'cmddownload'  : 'Last ned',
\t\t\t'cmdduplicate' : 'Dupliser',
\t\t\t'cmdedit'      : 'Rediger fil',
\t\t\t'cmdextract'   : 'Pakk ut filer fra arkiv',
\t\t\t'cmdforward'   : 'Frem',
\t\t\t'cmdgetfile'   : 'Velg filer',
\t\t\t'cmdhelp'      : 'Om',
\t\t\t'cmdhome'      : 'Hjem',
\t\t\t'cmdinfo'      : 'Vis info',
\t\t\t'cmdmkdir'     : 'Ny mappe',
\t\t\t'cmdmkfile'    : 'Ny fil',
\t\t\t'cmdopen'      : 'Åpne',
\t\t\t'cmdpaste'     : 'Lim inn',
\t\t\t'cmdquicklook' : 'Forhåndsvis',
\t\t\t'cmdreload'    : 'Last inn på nytt',
\t\t\t'cmdrename'    : 'Gi nytt navn',
\t\t\t'cmdrm'        : 'Slett',
\t\t\t'cmdsearch'    : 'Find filer',
\t\t\t'cmdup'        : 'Opp et nivå',
\t\t\t'cmdupload'    : 'Last opp filer',
\t\t\t'cmdview'      : 'Vis',
\t\t\t'cmdresize'    : 'Resize & Rotate',
\t\t\t'cmdsort'      : 'Sort',
\t\t\t'cmdnetmount'  : 'Mount network volume',
\t\t\t
\t\t\t/*********************************** buttons ***********************************/ 
\t\t\t'btnClose'  : 'Lukk',
\t\t\t'btnSave'   : 'Lagre',
\t\t\t'btnRm'     : 'Slett',
\t\t\t'btnApply'  : 'Apply',
\t\t\t'btnCancel' : 'Avbryt',
\t\t\t'btnNo'     : 'Nei',
\t\t\t'btnYes'    : 'Ja',
\t\t\t'btnMount'  : 'Mount',
\t\t\t
\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Åpne mappe',
\t\t\t'ntffile'     : 'Åpne fil',
\t\t\t'ntfreload'   : 'Last inn mappen på nytt',
\t\t\t'ntfmkdir'    : 'Oppretter mappe',
\t\t\t'ntfmkfile'   : 'Oppretter filer',
\t\t\t'ntfrm'       : 'Sletter filer',
\t\t\t'ntfcopy'     : 'Kopierer filer',
\t\t\t'ntfmove'     : 'Flytter filer',
\t\t\t'ntfprepare'  : 'Gjør klar til kopiering av filer',
\t\t\t'ntfrename'   : 'Gir nytt navn til filer',
\t\t\t'ntfupload'   : 'Laster opp filer',
\t\t\t'ntfdownload' : 'Laster ned filer',
\t\t\t'ntfsave'     : 'Lagrer filer',
\t\t\t'ntfarchive'  : 'Oppretter arkiv',
\t\t\t'ntfextract'  : 'Pakker ut filer fra arkiv',
\t\t\t'ntfsearch'   : 'Søker i filer',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'Gjør noe... >_<',
\t\t\t'ntfloadimg'  : 'Loading image',
\t\t\t'ntfnetmount' : 'Mounting network volume', // added 18.04.2012
\t\t\t'ntfdim'      : 'Acquiring image dimension', // added 20.05.2013
\t\t\t
\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'Ukjent',
\t\t\t'Today'       : 'I dag',
\t\t\t'Yesterday'   : 'I går',
\t\t\t'msJan'       : 'Jan',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Apr',
\t\t\t'msMay'       : 'Mai',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Jul',
\t\t\t'msAug'       : 'Aug',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Okt',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Des',
\t\t\t'January'     : 'January',
\t\t\t'February'    : 'February',
\t\t\t'March'       : 'March',
\t\t\t'April'       : 'April',
\t\t\t'May'         : 'May',
\t\t\t'June'        : 'June',
\t\t\t'July'        : 'July',
\t\t\t'August'      : 'August',
\t\t\t'September'   : 'September',
\t\t\t'October'     : 'October',
\t\t\t'November'    : 'November',
\t\t\t'December'    : 'December',
\t\t\t'Sunday'      : 'Sunday',
\t\t\t'Monday'      : 'Monday',
\t\t\t'Tuesday'     : 'Tuesday',
\t\t\t'Wednesday'   : 'Wednesday',
\t\t\t'Thursday'    : 'Thursday',
\t\t\t'Friday'      : 'Friday',
\t\t\t'Saturday'    : 'Saturday',
\t\t\t'Sun'         : 'Sun', 
\t\t\t'Mon'         : 'Mon', 
\t\t\t'Tue'         : 'Tue', 
\t\t\t'Wed'         : 'Wed', 
\t\t\t'Thu'         : 'Thu', 
\t\t\t'Fri'         : 'Fri', 
\t\t\t'Sat'         : 'Sat',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'by name', 
\t\t\t'sortkind'          : 'by kind', 
\t\t\t'sortsize'          : 'by size',
\t\t\t'sortdate'          : 'by date',
\t\t\t'sortFoldersFirst'  : 'Folders first',
\t\t\t
\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Bekreftelse nødvendig',
\t\t\t'confirmRm'       : 'Er du sikker på at du ønsker å slette filene?',
\t\t\t'confirmRepl'     : 'Erstatt fil?',
\t\t\t'apllyAll'        : 'Apply to all',
\t\t\t'name'            : 'Navn',
\t\t\t'size'            : 'Størrelse',
\t\t\t'perms'           : 'Rettigheter',
\t\t\t'modify'          : 'Endret',
\t\t\t'kind'            : 'Type',
\t\t\t'read'            : 'les',
\t\t\t'write'           : 'skriv',
\t\t\t'noaccess'        : 'ingen adgang',
\t\t\t'and'             : 'og',
\t\t\t'unknown'         : 'ukjent',
\t\t\t'selectall'       : 'Velg alle filene',
\t\t\t'selectfiles'     : 'Velg fil(er)',
\t\t\t'selectffile'     : 'Velg første fil',
\t\t\t'selectlfile'     : 'Velg siste fil',
\t\t\t'viewlist'        : 'Listevisning',
\t\t\t'viewicons'       : 'Ikoner',
\t\t\t'places'          : 'Områder',
\t\t\t'calc'            : 'Beregn', 
\t\t\t'path'            : 'Bane',
\t\t\t'aliasfor'        : 'Alias for',
\t\t\t'locked'          : 'Låst',
\t\t\t'dim'             : 'Størrelser',
\t\t\t'files'           : 'Filer',
\t\t\t'folders'         : 'Mapper',
\t\t\t'items'           : 'objekter',
\t\t\t'yes'             : 'ja',
\t\t\t'no'              : 'nei',
\t\t\t'link'            : 'Link',
\t\t\t'searcresult'     : 'Søkeresultater',  
\t\t\t'selected'        : 'valgte filer',
\t\t\t'about'           : 'Om',
\t\t\t'shortcuts'       : 'Snarveier',
\t\t\t'help'            : 'Hjelp',
\t\t\t'webfm'           : 'Web-filbehandler',
\t\t\t'ver'             : 'Versjon',
\t\t\t'protocolver'     : 'protokol versjon',
\t\t\t'homepage'        : 'Project home',
\t\t\t'docs'            : 'dokumentasjon',
\t\t\t'github'          : 'Fork us on Github',
\t\t\t'twitter'         : 'Follow us on twitter',
\t\t\t'facebook'        : 'Join us on facebook',
\t\t\t'team'            : 'Team',
\t\t\t'chiefdev'        : 'chief developer',
\t\t\t'developer'       : 'developer',
\t\t\t'contributor'     : 'contributor',
\t\t\t'maintainer'      : 'maintainer',
\t\t\t'translator'      : 'translator',
\t\t\t'icons'           : 'Ikoner',
\t\t\t'dontforget'      : 'and don\\'t forget to bring a towel',
\t\t\t'shortcutsof'     : 'Snarveier avslått',
\t\t\t'dropFiles'       : 'Slipp filer her',
\t\t\t'or'              : 'eller',
\t\t\t'selectForUpload' : 'Velg filer til opplasting',
\t\t\t'moveFiles'       : 'Flytt filer',
\t\t\t'copyFiles'       : 'Kopier filer',
\t\t\t'rmFromPlaces'    : 'Remove from places',
\t\t\t'aspectRatio'     : 'Aspect ratio',
\t\t\t'scale'           : 'Scale',
\t\t\t'width'           : 'Width',
\t\t\t'height'          : 'Height',
\t\t\t'resize'          : 'Resize',
\t\t\t'crop'            : 'Crop',
\t\t\t'rotate'          : 'Rotate',
\t\t\t'rotate-cw'       : 'Rotate 90 degrees CW',
\t\t\t'rotate-ccw'      : 'Rotate 90 degrees CCW',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Mount network volume', // added 18.04.2012
\t\t\t'protocol'            : 'Protocol', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'User', // added 18.04.2012
\t\t\t'pass'                : 'Password', // added 18.04.2012
\t\t\t
\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Ukjent',
\t\t\t'kindFolder'      : 'Mappe',
\t\t\t'kindAlias'       : 'Snarvei',
\t\t\t'kindAliasBroken' : 'Ugyldig snarvei',
\t\t\t// applications
\t\t\t'kindApp'         : 'Programfil',
\t\t\t'kindPostscript'  : 'Postscript dokument',
\t\t\t'kindMsOffice'    : 'Microsoft Office dokument',
\t\t\t'kindMsWord'      : 'Microsoft Word dokument',
\t\t\t'kindMsExcel'     : 'Microsoft Excel dokument',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint presentation',
\t\t\t'kindOO'          : 'Open Office dokument',
\t\t\t'kindAppFlash'    : 'Flash',
\t\t\t'kindPDF'         : 'Portabelt dokument (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent file',
\t\t\t'kind7z'          : '7z arkiv',
\t\t\t'kindTAR'         : 'TAR arkiv',
\t\t\t'kindGZIP'        : 'GZIP arkiv',
\t\t\t'kindBZIP'        : 'BZIP arkiv',
\t\t\t'kindXZ'          : 'XZ arkiv',
\t\t\t'kindZIP'         : 'ZIP arkiv',
\t\t\t'kindRAR'         : 'RAR ar',
\t\t\t'kindJAR'         : 'Java JAR file',
\t\t\t'kindTTF'         : 'True Type font',
\t\t\t'kindOTF'         : 'Open Type font',
\t\t\t'kindRPM'         : 'RPM package',
\t\t\t// texts
\t\t\t'kindText'        : 'Tekst dokument',
\t\t\t'kindTextPlain'   : 'Plain text',
\t\t\t'kindPHP'         : 'PHP kilde',
\t\t\t'kindCSS'         : 'Cascading style sheet',
\t\t\t'kindHTML'        : 'HTML dokument',
\t\t\t'kindJS'          : 'Javascript',
\t\t\t'kindRTF'         : 'Rikt Tekst Format',
\t\t\t'kindC'           : 'C kilde',
\t\t\t'kindCHeader'     : 'C header kilde',
\t\t\t'kindCPP'         : 'C++ kilde',
\t\t\t'kindCPPHeader'   : 'C++ header kilde',
\t\t\t'kindShell'       : 'Unix shell script',
\t\t\t'kindPython'      : 'Python kilde',
\t\t\t'kindJava'        : 'Java kilde',
\t\t\t'kindRuby'        : 'Ruby kilde',
\t\t\t'kindPerl'        : 'Perl script',
\t\t\t'kindSQL'         : 'SQL skilde',
\t\t\t'kindXML'         : 'XML dokument',
\t\t\t'kindAWK'         : 'AWK kilde',
\t\t\t'kindCSV'         : 'Comma separated values',
\t\t\t'kindDOCBOOK'     : 'Docbook XML dokument',
\t\t\t// Images
\t\t\t'kindImage'       : 'Bilde',
\t\t\t'kindBMP'         : 'BMP bilde',
\t\t\t'kindJPEG'        : 'JPEG bilde',
\t\t\t'kindGIF'         : 'GIF bilde',
\t\t\t'kindPNG'         : 'PNG bilde',
\t\t\t'kindTIFF'        : 'TIFF bilde',
\t\t\t'kindTGA'         : 'TGA bilde',
\t\t\t'kindPSD'         : 'Adobe Photoshop bilde',
\t\t\t'kindXBITMAP'     : 'X bitmap bilde',
\t\t\t'kindPXM'         : 'Pixelmator bilde',
\t\t\t// media
\t\t\t'kindAudio'       : 'Audio media',
\t\t\t'kindAudioMPEG'   : 'MPEG audio',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 audio',
\t\t\t'kindAudioMIDI'   : 'MIDI audio',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis audio',
\t\t\t'kindAudioWAV'    : 'WAV audio',
\t\t\t'AudioPlaylist'   : 'MP3 spilleliste',
\t\t\t'kindVideo'       : 'Video media',
\t\t\t'kindVideoDV'     : 'DV film',
\t\t\t'kindVideoMPEG'   : 'MPEG film',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 film',
\t\t\t'kindVideoAVI'    : 'AVI film',
\t\t\t'kindVideoMOV'    : 'Quick Time film',
\t\t\t'kindVideoWM'     : 'Windows Media film',
\t\t\t'kindVideoFlash'  : 'Flash film',
\t\t\t'kindVideoMKV'    : 'Matroska film',
\t\t\t'kindVideoOGG'    : 'Ogg film'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.no.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.no.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.no.js");
    }
}
