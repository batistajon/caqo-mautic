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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sl.js */
class __TwigTemplate_04d5566e085c4450b39093edfd6d3b2d5f14610c727880c96e63af065cc06d89 extends Template
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
 * Slovenian translation
 * @author Damjan Rems <d_rems at yahoo.com>
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
\telFinder.prototype.i18.sl = {
\t\ttranslator : 'Damjan Rems &lt;d_rems at yahoo.com&gt;',
\t\tlanguage   : 'Slovenščina',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i',
\t\tfancyDateFormat : '\$1 H:i',
\t\tmessages   : {
\t\t\t
\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Napaka',
\t\t\t'errUnknown'           : 'Neznana napaka.',
\t\t\t'errUnknownCmd'        : 'Neznan ukaz.',
\t\t\t'errJqui'              : 'Napačna jQuery UI nastavitev. Selectable, draggable in droppable dodatki morajo biti vključeni.',
\t\t\t'errNode'              : 'elFinder potrebuje \"DOM Element\".',
\t\t\t'errURL'               : 'Napačna nastavitev elFinder-ja! Manjka URL nastavitev.',
\t\t\t'errAccess'            : 'Dostop zavrnjen.',
\t\t\t'errConnect'           : 'Ne morem se priključiti na \"backend\".',
\t\t\t'errAbort'             : 'Povezava prekinjena (aborted).',
\t\t\t'errTimeout'           : 'Povezava potekla (timeout).',
\t\t\t'errNotFound'          : 'Nisem našel \"backend-a\".',
\t\t\t'errResponse'          : 'Napačni \"backend\" odgovor.',
\t\t\t'errConf'              : 'Napačna \"backend\" nastavitev.',
\t\t\t'errJSON'              : 'JSON modul ni instaliran.',
\t\t\t'errNoVolumes'         : 'Readable volumes not available.',
\t\t\t'errCmdParams'         : 'Napačni parametri za ukaz \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Podatki niso v JSON obliki.',
\t\t\t'errDataEmpty'         : 'Ni podatkov oz. so prazni.',
\t\t\t'errCmdReq'            : '\"Backend\" zahtevek potrebuje ime ukaza.',
\t\t\t'errOpen'              : '\"\$1\" ni možno odpreti.',
\t\t\t'errNotFolder'         : 'Objekt ni mapa.',
\t\t\t'errNotFile'           : 'Objekt ni datoteka.',
\t\t\t'errRead'              : '\"\$1\" ni možno brati.',
\t\t\t'errWrite'             : 'Ne morem pisati v \"\$1\".',
\t\t\t'errPerm'              : 'Dostop zavrnjen.',
\t\t\t'errLocked'            : '\"\$1\" je zaklenjen(a) in je ni možno preimenovati, premakniti ali izbrisati.',
\t\t\t'errExists'            : 'Datoteka z imenom \"\$1\" že obstaja.',
\t\t\t'errInvName'           : 'Napačno ime datoteke.',
\t\t\t'errFolderNotFound'    : 'Mape nisem našel.',
\t\t\t'errFileNotFound'      : 'Datoteke nisem našel.',
\t\t\t'errTrgFolderNotFound' : 'Ciljna mapa \"\$1\" ne obstaja.',
\t\t\t'errPopup'             : 'Brskalnik je preprečil prikaz (popup) okna. Za vpogled datoteke omogočite nastavitev v vašem brskalniku.',
\t\t\t'errMkdir'             : 'Ni možno dodati mape \"\$1\".',
\t\t\t'errMkfile'            : 'Ni možno dodati datoteke \"\$1\".',
\t\t\t'errRename'            : 'Ni možno preimenovati \"\$1\".',
\t\t\t'errCopyFrom'          : 'Kopiranje datotek iz \"\$1\" ni dovoljeno.',
\t\t\t'errCopyTo'            : 'Kopiranje datotek na \"\$1\" ni dovoljeno.',
\t\t\t'errUpload'            : 'Napaka pri prenosu.',
\t\t\t'errUploadFile'        : '\"\$1\" ni možno naložiti (upload).',
\t\t\t'errUploadNoFiles'     : 'Ni datotek za nalaganje (upload).',
\t\t\t'errUploadTotalSize'   : 'Podatki presegajo največjo dovoljeno velikost.',
\t\t\t'errUploadFileSize'    : 'Datoteka presega največjo dovoljeno velikost.',
\t\t\t'errUploadMime'        : 'Datoteke s to končnico niso dovoljene.',
\t\t\t'errUploadTransfer'    : '\"\$1\" napaka pri prenosu.',
\t\t\t'errNotReplace'        : 'Object \"\$1\" already exists at this location and can not be replaced by object with another type.',
\t\t\t'errReplace'           : 'Unable to replace \"\$1\".',
\t\t\t'errSave'              : '\"\$1\" ni možno shraniti.',
\t\t\t'errCopy'              : '\"\$1\" ni možno kopirati.',
\t\t\t'errMove'              : '\"\$1\" ni možno premakniti.',
\t\t\t'errCopyInItself'      : '\"\$1\" ni možno kopirati samo vase.',
\t\t\t'errRm'                : '\"\$1\" ni možno izbrisati.',
\t\t\t'errRmSrc'             : 'Unable remove source file(s).',
\t\t\t'errExtract'           : 'Datotek iz \"\$1\" ni možno odpakirati.',
\t\t\t'errArchive'           : 'Napaka pri delanju arhiva.',
\t\t\t'errArcType'           : 'Nepodprta vrsta arhiva.',
\t\t\t'errNoArchive'         : 'Datoteka ni arhiv ali vrsta arhiva ni podprta.',
\t\t\t'errCmdNoSupport'      : '\"Backend\" ne podpira tega ukaza.',
\t\t\t'errReplByChild'       : 'Mape “\$1” ni možno zamenjati z vsebino mape.',
\t\t\t'errArcSymlinks'       : 'Zaradi varnostnih razlogov arhiva ki vsebuje \"symlinks\" ni možno odpakirati.',
\t\t\t'errArcMaxSize'        : 'Datoteke v arhivu presegajo največjo dovoljeno velikost.',
\t\t\t'errResize'            : '\"\$1\" ni možno razširiti.',
\t\t\t'errResizeDegree'      : 'Invalid rotate degree.',
\t\t\t'errResizeRotate'      : 'Unable to rotate image.',
\t\t\t'errResizeSize'        : 'Invalid image size.',
\t\t\t'errResizeNoChange'    : 'Image size not changed.',
\t\t\t'errUsupportType'      : 'Nepodprta vrsta datoteke.',
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
\t\t\t'cmdarchive'   : 'Naredi arhiv',
\t\t\t'cmdback'      : 'Nazaj',
\t\t\t'cmdcopy'      : 'Kopiraj',
\t\t\t'cmdcut'       : 'Izreži',
\t\t\t'cmddownload'  : 'Poberi (download)',
\t\t\t'cmdduplicate' : 'Podvoji',
\t\t\t'cmdedit'      : 'Uredi datoteko',
\t\t\t'cmdextract'   : 'Odpakiraj datoteke iz arhiva',
\t\t\t'cmdforward'   : 'Naprej',
\t\t\t'cmdgetfile'   : 'Izberi datoteke',
\t\t\t'cmdhelp'      : 'Več o',
\t\t\t'cmdhome'      : 'Domov',
\t\t\t'cmdinfo'      : 'Lastnosti',
\t\t\t'cmdmkdir'     : 'Nova mapa',
\t\t\t'cmdmkfile'    : 'Nova datoteka',
\t\t\t'cmdopen'      : 'Odpri',
\t\t\t'cmdpaste'     : 'Prilepi',
\t\t\t'cmdquicklook' : 'Hitri ogled',
\t\t\t'cmdreload'    : 'Osveži',
\t\t\t'cmdrename'    : 'Preimenuj',
\t\t\t'cmdrm'        : 'Izbriši',
\t\t\t'cmdsearch'    : 'Poišči datoteke',
\t\t\t'cmdup'        : 'Mapa nazaj',
\t\t\t'cmdupload'    : 'Naloži (upload)',
\t\t\t'cmdview'      : 'Ogled',
\t\t\t'cmdresize'    : 'Povečaj (pomanjšaj) sliko',
\t\t\t'cmdsort'      : 'Razvrsti',
\t\t\t'cmdnetmount'  : 'Mount network volume',
\t\t\t
\t\t\t/*********************************** buttons ***********************************/ 
\t\t\t'btnClose'  : 'Zapri',
\t\t\t'btnSave'   : 'Shrani',
\t\t\t'btnRm'     : 'Izbriši',
\t\t\t'btnApply'  : 'Uporabi',
\t\t\t'btnCancel' : 'Prekliči',
\t\t\t'btnNo'     : 'Ne',
\t\t\t'btnYes'    : 'Da',
\t\t\t'btnMount'  : 'Mount',
\t\t\t
\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Odpri mapo',
\t\t\t'ntffile'     : 'Odpri datoteko',
\t\t\t'ntfreload'   : 'Osveži vsebino mape',
\t\t\t'ntfmkdir'    : 'Ustvarjam mapo',
\t\t\t'ntfmkfile'   : 'Ustvarjam datoteke',
\t\t\t'ntfrm'       : 'Brišem datoteke',
\t\t\t'ntfcopy'     : 'Kopiram datoteke',
\t\t\t'ntfmove'     : 'Premikam datoteke',
\t\t\t'ntfprepare'  : 'Pripravljam se na kopiranje datotek',
\t\t\t'ntfrename'   : 'Preimenujem datoteke',
\t\t\t'ntfupload'   : 'Nalagam (upload) datoteke',
\t\t\t'ntfdownload' : 'Pobiram (download) datoteke',
\t\t\t'ntfsave'     : 'Shranjujem datoteke',
\t\t\t'ntfarchive'  : 'Ustvarjam arhiv',
\t\t\t'ntfextract'  : 'Razpakiram datoteke iz arhiva',
\t\t\t'ntfsearch'   : 'Iščem datoteke',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'Počakaj delam >_<',
\t\t\t'ntfloadimg'  : 'Nalagam sliko',
\t\t\t'ntfnetmount' : 'Mounting network volume', // added 18.04.2012
\t\t\t'ntfdim'      : 'Acquiring image dimension', // added 20.05.2013
\t\t\t
\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'neznan',
\t\t\t'Today'       : 'Danes',
\t\t\t'Yesterday'   : 'Včeraj',
\t\t\t'msJan'       : 'Jan',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Apr',
\t\t\t'msMay'       : 'Maj',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Jul',
\t\t\t'msAug'       : 'Avg',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Okt',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Dec',
\t\t\t'January'     : 'Januar',
\t\t\t'February'    : 'Februar',
\t\t\t'March'       : 'Marec',
\t\t\t'April'       : 'April',
\t\t\t'May'         : 'Maj',
\t\t\t'June'        : 'Junij',
\t\t\t'July'        : 'Julij',
\t\t\t'August'      : 'Avgust',
\t\t\t'September'   : 'September',
\t\t\t'October'     : 'Oktober',
\t\t\t'November'    : 'November',
\t\t\t'December'    : 'December',
\t\t\t'Sunday'      : 'Nedelja', 
\t\t\t'Monday'      : 'Ponedeljek', 
\t\t\t'Tuesday'     : 'Torek', 
\t\t\t'Wednesday'   : 'Sreda', 
\t\t\t'Thursday'    : 'Četrtek', 
\t\t\t'Friday'      : 'Petek', 
\t\t\t'Saturday'    : 'Sobota',
\t\t\t'Sun'         : 'Ned', 
\t\t\t'Mon'         : 'Pon', 
\t\t\t'Tue'         : 'Tor', 
\t\t\t'Wed'         : 'Sre', 
\t\t\t'Thu'         : 'Čet', 
\t\t\t'Fri'         : 'Pet', 
\t\t\t'Sat'         : 'Sob',
\t\t\t
\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'po imenu', 
\t\t\t'sortkind'          : 'po vrsti', 
\t\t\t'sortsize'          : 'po velikosti',
\t\t\t'sortdate'          : 'po datumu',
\t\t\t'sortFoldersFirst'  : 'Folders first',
\t\t\t
\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Zahtevana je potrditev',
\t\t\t'confirmRm'       : 'Ste prepričani, da želite izbrisati datoteko?<br/>POZOR! Tega ukaza ni možno preklicati!',
\t\t\t'confirmRepl'     : 'Zamenjam staro datoteko z novo?',
\t\t\t'apllyAll'        : 'Uporabi pri vseh',
\t\t\t'name'            : 'Ime',
\t\t\t'size'            : 'Velikost',
\t\t\t'perms'           : 'Dovoljenja',
\t\t\t'modify'          : 'Spremenjeno',
\t\t\t'kind'            : 'Vrsta',
\t\t\t'read'            : 'beri',
\t\t\t'write'           : 'piši',
\t\t\t'noaccess'        : 'ni dostopa',
\t\t\t'and'             : 'in',
\t\t\t'unknown'         : 'neznan',
\t\t\t'selectall'       : 'Izberi vse datoteke',
\t\t\t'selectfiles'     : 'Izberi datotek(o)e',
\t\t\t'selectffile'     : 'Izberi prvo datoteko',
\t\t\t'selectlfile'     : 'Izberi zadnjo datoteko',
\t\t\t'viewlist'        : 'Seznam',
\t\t\t'viewicons'       : 'Ikone',
\t\t\t'places'          : 'Mesta (places)',
\t\t\t'calc'            : 'Izračun', 
\t\t\t'path'            : 'Pot do',
\t\t\t'aliasfor'        : 'Sopomenka (alias) za',
\t\t\t'locked'          : 'Zaklenjeno',
\t\t\t'dim'             : 'Dimenzije',
\t\t\t'files'           : 'Datoteke',
\t\t\t'folders'         : 'Mape',
\t\t\t'items'           : 'Predmeti',
\t\t\t'yes'             : 'da',
\t\t\t'no'              : 'ne',
\t\t\t'link'            : 'Povezava',
\t\t\t'searcresult'     : 'Rezultati iskanja',  
\t\t\t'selected'        : 'izbrani predmeti',
\t\t\t'about'           : 'Več o',
\t\t\t'shortcuts'       : 'Bližnjice',
\t\t\t'help'            : 'Pomoč',
\t\t\t'webfm'           : 'Spletni upravitelj datotek',
\t\t\t'ver'             : 'Verzija',
\t\t\t'protocolver'     : 'verzija protokola',
\t\t\t'homepage'        : 'Domača stran',
\t\t\t'docs'            : 'Dokumentacija',
\t\t\t'github'          : 'Fork us on Github',
\t\t\t'twitter'         : 'Sledi na twitterju',
\t\t\t'facebook'        : 'Pridruži se nam na facebook-u',
\t\t\t'team'            : 'Tim',
\t\t\t'chiefdev'        : 'Glavni razvijalec',
\t\t\t'developer'       : 'razvijalec',
\t\t\t'contributor'     : 'contributor',
\t\t\t'maintainer'      : 'vzdrževalec',
\t\t\t'translator'      : 'prevajalec',
\t\t\t'icons'           : 'Ikone',
\t\t\t'dontforget'      : 'In ne pozabi na brisačo',
\t\t\t'shortcutsof'     : 'Bližnjica onemogočena',
\t\t\t'dropFiles'       : 'Datoteke spusti tukaj',
\t\t\t'or'              : 'ali',
\t\t\t'selectForUpload' : 'Izberi datoteke za nalaganje',
\t\t\t'moveFiles'       : 'Premakni datoteke',
\t\t\t'copyFiles'       : 'Kopiraj datoteke',
\t\t\t'rmFromPlaces'    : 'Izbriši iz mesta (places)',
\t\t\t'aspectRatio'     : 'Razmerje slike',
\t\t\t'scale'           : 'Razširi',
\t\t\t'width'           : 'Širina',
\t\t\t'height'          : 'Višina',
\t\t\t'resize'          : 'Povečaj',
\t\t\t'crop'            : 'Obreži',
\t\t\t'rotate'          : 'Zavrti',
\t\t\t'rotate-cw'       : 'Zavrti 90 st. v smeri ure',
\t\t\t'rotate-ccw'      : 'Zavrti 90 st. v obratni smeri ure',
\t\t\t'degree'          : 'Stopnja',
\t\t\t'netMountDialogTitle' : 'Mount network volume', // added 18.04.2012
\t\t\t'protocol'            : 'Protocol', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'User', // added 18.04.2012
\t\t\t'pass'                : 'Password', // added 18.04.2012
\t\t\t
\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Neznan',
\t\t\t'kindFolder'      : 'Mapa',
\t\t\t'kindAlias'       : 'Sopomenka (alias)',
\t\t\t'kindAliasBroken' : 'Nedelujoča sopomenka (alias)',
\t\t\t// applications
\t\t\t'kindApp'         : 'Program',
\t\t\t'kindPostscript'  : 'Postscript dokument',
\t\t\t'kindMsOffice'    : 'Microsoft Office dokument',
\t\t\t'kindMsWord'      : 'Microsoft Word dokument',
\t\t\t'kindMsExcel'     : 'Microsoft Excel dokument',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint predstavitev',
\t\t\t'kindOO'          : 'Open Office dokument',
\t\t\t'kindAppFlash'    : 'Flash program',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent datoteka',
\t\t\t'kind7z'          : '7z arhiv',
\t\t\t'kindTAR'         : 'TAR arhiv',
\t\t\t'kindGZIP'        : 'GZIP arhiv',
\t\t\t'kindBZIP'        : 'BZIP arhiv',
\t\t\t'kindXZ'          : 'XZ arhiv',
\t\t\t'kindZIP'         : 'ZIP arhiv',
\t\t\t'kindRAR'         : 'RAR arhiv',
\t\t\t'kindJAR'         : 'Java JAR datoteka',
\t\t\t'kindTTF'         : 'True Type font',
\t\t\t'kindOTF'         : 'Open Type font',
\t\t\t'kindRPM'         : 'RPM paket',
\t\t\t// texts
\t\t\t'kindText'        : 'Tekst dokument',
\t\t\t'kindTextPlain'   : 'Samo tekst',
\t\t\t'kindPHP'         : 'PHP koda',
\t\t\t'kindCSS'         : 'Cascading style sheet (CSS)',
\t\t\t'kindHTML'        : 'HTML dokument',
\t\t\t'kindJS'          : 'Javascript koda',
\t\t\t'kindRTF'         : 'Rich Text Format (RTF)',
\t\t\t'kindC'           : 'C koda',
\t\t\t'kindCHeader'     : 'C header koda',
\t\t\t'kindCPP'         : 'C++ koda',
\t\t\t'kindCPPHeader'   : 'C++ header koda',
\t\t\t'kindShell'       : 'Unix shell skripta',
\t\t\t'kindPython'      : 'Python kdoa',
\t\t\t'kindJava'        : 'Java koda',
\t\t\t'kindRuby'        : 'Ruby koda',
\t\t\t'kindPerl'        : 'Perl skripta',
\t\t\t'kindSQL'         : 'SQL koda',
\t\t\t'kindXML'         : 'XML dokument',
\t\t\t'kindAWK'         : 'AWK koda',
\t\t\t'kindCSV'         : 'Besedilo ločeno z vejico (CSV)',
\t\t\t'kindDOCBOOK'     : 'Docbook XML dokument',
\t\t\t// images
\t\t\t'kindImage'       : 'Slika',
\t\t\t'kindBMP'         : 'BMP slika',
\t\t\t'kindJPEG'        : 'JPEG slika',
\t\t\t'kindGIF'         : 'GIF slika',
\t\t\t'kindPNG'         : 'PNG slika',
\t\t\t'kindTIFF'        : 'TIFF slika',
\t\t\t'kindTGA'         : 'TGA slika',
\t\t\t'kindPSD'         : 'Adobe Photoshop slika',
\t\t\t'kindXBITMAP'     : 'X bitmap slika',
\t\t\t'kindPXM'         : 'Pixelmator slika',
\t\t\t// media
\t\t\t'kindAudio'       : 'Avdio medija',
\t\t\t'kindAudioMPEG'   : 'MPEG zvok',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 zvok',
\t\t\t'kindAudioMIDI'   : 'MIDI zvok',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis zvok',
\t\t\t'kindAudioWAV'    : 'WAV zvok',
\t\t\t'AudioPlaylist'   : 'MP3 seznam',
\t\t\t'kindVideo'       : 'Video medija',
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sl.js");
    }
}
