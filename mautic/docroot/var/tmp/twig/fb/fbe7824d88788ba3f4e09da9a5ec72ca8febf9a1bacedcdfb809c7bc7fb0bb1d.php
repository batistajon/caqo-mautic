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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.hr.js */
class __TwigTemplate_cfd941198a9f7ea8505d736b05f0d7f6e4489a9030f3c86b68eb362501da7884 extends Template
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
 * hr translation
 * @version 2016-04-18
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
\telFinder.prototype.i18.hr = {
\t\ttranslator : '',
\t\tlanguage   : 'Croatian',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y. H:i', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 H:i', // will produce smth like: Today 12:25 PM
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Greška',
\t\t\t'errUnknown'           : 'Nepoznata greška.',
\t\t\t'errUnknownCmd'        : 'Nepoznata naredba.',
\t\t\t'errJqui'              : 'Kriva jQuery UI konfiguracija. Selectable, draggable, i droppable komponente moraju biti uključene.',
\t\t\t'errNode'              : 'elFinder zahtjeva DOM element da bi bio stvoren.',
\t\t\t'errURL'               : 'Krivo konfiguriran elFinder. Opcija URL nije postavljena.',
\t\t\t'errAccess'            : 'Zabranjen pristup.',
\t\t\t'errConnect'           : 'Nije moguće spajanje na server.',
\t\t\t'errAbort'             : 'Prekinuta veza.',
\t\t\t'errTimeout'           : 'Veza je istekla.',
\t\t\t'errNotFound'          : 'Server nije pronađen.',
\t\t\t'errResponse'          : 'Krivi odgovor servera.',
\t\t\t'errConf'              : 'Krivo konfiguriran server',
\t\t\t'errJSON'              : 'Nije instaliran PHP JSON modul.',
\t\t\t'errNoVolumes'         : 'Disk nije dostupan.',
\t\t\t'errCmdParams'         : 'Krivi parametri za naredbu \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Podaci nisu tipa JSON.',
\t\t\t'errDataEmpty'         : 'Nema podataka.',
\t\t\t'errCmdReq'            : 'Backend request requires command name.',
\t\t\t'errOpen'              : 'Ne mogu otvoriti \"\$1\".',
\t\t\t'errNotFolder'         : 'Objekt nije mapa.',
\t\t\t'errNotFile'           : 'Objekt nije dokument.',
\t\t\t'errRead'              : 'Ne mogu pročitati \"\$1\".',
\t\t\t'errWrite'             : 'Ne mogu pisati u \"\$1\".',
\t\t\t'errPerm'              : 'Pristup zabranjen',
\t\t\t'errLocked'            : '\"\$1\" je zaključan i ne može biti preimenovan, premješten ili obrisan.',
\t\t\t'errExists'            : 'Dokument s imenom \"\$1\" već postoji.',
\t\t\t'errInvName'           : 'Krivo ime dokumenta',
\t\t\t'errFolderNotFound'    : 'Mapa nije pronađena',
\t\t\t'errFileNotFound'      : 'Dokument nije pronađen',
\t\t\t'errTrgFolderNotFound' : 'Mapa \"\$1\" nije pronađena',
\t\t\t'errPopup'             : 'Browser prevented opening popup window. To open file enable it in browser options.',
\t\t\t'errMkdir'             : 'Ne mogu napraviti mapu \"\$1\".',
\t\t\t'errMkfile'            : 'Ne mogu napraviti dokument \"\$1\".',
\t\t\t'errRename'            : 'Ne mogu preimenovati \"\$1\".',
\t\t\t'errCopyFrom'          : 'Kopiranje s diska \"\$1\" nije dozvoljeno.',
\t\t\t'errCopyTo'            : 'Kopiranje na disk \"\$1\" nije dozvoljeno.',
\t\t\t'errMkOutLink'         : 'Unable to create a link to outside the volume root.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Greška pri prebacivanju dokumenta na server.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Ne mogu prebaciti \"\$1\" na server', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Nema dokumenata za prebacivanje na server',
\t\t\t'errUploadTotalSize'   : 'Dokumenti prelaze maksimalnu dopuštenu veličinu.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Dokument je prevelik.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Ovaj tip dokumenta nije dopušten.',
\t\t\t'errUploadTransfer'    : '\"\$1\" greška pri prebacivanju',
\t\t\t'errUploadTemp'        : 'Ne mogu napraviti privremeni dokument za prijenos na server', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Object \"\$1\" already exists at this location and can not be replaced by object with another type.', // new
\t\t\t'errReplace'           : 'Ne mogu zamijeniti \"\$1\".',
\t\t\t'errSave'              : 'Ne mogu spremiti \"\$1\".',
\t\t\t'errCopy'              : 'Ne mogu kopirati \"\$1\".',
\t\t\t'errMove'              : 'Ne mogu premjestiti \"\$1\".',
\t\t\t'errCopyInItself'      : 'Ne mogu kopirati \"\$1\" na isto mjesto.',
\t\t\t'errRm'                : 'Ne mogu ukloniti \"\$1\".',
\t\t\t'errRmSrc'             : 'Ne mogu ukloniti izvorni kod.',
\t\t\t'errExtract'           : 'Unable to extract files from \"\$1\".',
\t\t\t'errArchive'           : 'Unable to create archive.',
\t\t\t'errArcType'           : 'Unsupported archive type.',
\t\t\t'errNoArchive'         : 'File is not archive or has unsupported archive type.',
\t\t\t'errCmdNoSupport'      : 'Backend does not support this command.',
\t\t\t'errReplByChild'       : 'The folder \"\$1\" can\\'t be replaced by an item it contains.',
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
\t\t\t'errNetUnMount'        : 'Unable to unmount', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Not convertible to UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Try Google Chrome, If you\\'d like to upload the folder.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Timed out while searching \"\$1\". Search result is partial.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Re-authorization is required.', // from v2.1.10 added 3.24.2016

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Arhiviraj',
\t\t\t'cmdback'      : 'Nazad',
\t\t\t'cmdcopy'      : 'Kopiraj',
\t\t\t'cmdcut'       : 'Izreži',
\t\t\t'cmddownload'  : 'Preuzmi',
\t\t\t'cmdduplicate' : 'Dupliciraj',
\t\t\t'cmdedit'      : 'Uredi dokument',
\t\t\t'cmdextract'   : 'Raspakiraj arhivu',
\t\t\t'cmdforward'   : 'Naprijed',
\t\t\t'cmdgetfile'   : 'Odaberi dokumente',
\t\t\t'cmdhelp'      : 'O programu',
\t\t\t'cmdhome'      : 'Početak',
\t\t\t'cmdinfo'      : 'Info',
\t\t\t'cmdmkdir'     : 'Nova mapa',
\t\t\t'cmdmkdirin'   : 'U novu mapu', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Nova файл',
\t\t\t'cmdopen'      : 'Otvori',
\t\t\t'cmdpaste'     : 'Zalijepi',
\t\t\t'cmdquicklook' : 'Pregled',
\t\t\t'cmdreload'    : 'Ponovo učitaj',
\t\t\t'cmdrename'    : 'Preimenuj',
\t\t\t'cmdrm'        : 'Obriši',
\t\t\t'cmdsearch'    : 'Pronađi',
\t\t\t'cmdup'        : 'Roditeljska mapa',
\t\t\t'cmdupload'    : 'Prebaci dokumente na server',
\t\t\t'cmdview'      : 'Pregledaj',
\t\t\t'cmdresize'    : 'Promjeni veličinu i rotiraj',
\t\t\t'cmdsort'      : 'Sortiraj',
\t\t\t'cmdnetmount'  : 'Spoji se na mrežni disk', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Odspoji disk', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'To Places', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Change mode', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Otvori mapu', // from v2.1 added 13.1.2016

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Zatvori',
\t\t\t'btnSave'   : 'Spremi',
\t\t\t'btnRm'     : 'Ukloni',
\t\t\t'btnApply'  : 'Primjeni',
\t\t\t'btnCancel' : 'Odustani',
\t\t\t'btnNo'     : 'Ne',
\t\t\t'btnYes'    : 'Da',
\t\t\t'btnMount'  : 'Mount',  // added 18.04.2012
\t\t\t'btnApprove': 'Goto \$1 & approve', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Convert', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Here',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Volume',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'All',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME Type', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Filename',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Spremi i zatvori', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Backup', // fromv2.1 added 28.11.2015

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Otvori mapu',
\t\t\t'ntffile'     : 'Otvori dokument',
\t\t\t'ntfreload'   : 'Ponovo učitaj sadržaj mape',
\t\t\t'ntfmkdir'    : 'Radim mapu',
\t\t\t'ntfmkfile'   : 'Radim dokumente',
\t\t\t'ntfrm'       : 'Brišem dokumente',
\t\t\t'ntfcopy'     : 'Kopiram dokumente',
\t\t\t'ntfmove'     : 'Mičem dokumente',
\t\t\t'ntfprepare'  : 'Priprema za kopiranje dokumenata',
\t\t\t'ntfrename'   : 'Preimenuj dokumente',
\t\t\t'ntfupload'   : 'Pohranjujem dokumente na server',
\t\t\t'ntfdownload' : 'Preuzimam dokumente',
\t\t\t'ntfsave'     : 'Spremi dokumente',
\t\t\t'ntfarchive'  : 'Radim arhivu',
\t\t\t'ntfextract'  : 'Extracting files from archive',
\t\t\t'ntfsearch'   : 'Tražim dokumente',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'Doing something',
\t\t\t'ntfloadimg'  : 'Učitavam sliku',
\t\t\t'ntfnetmount' : 'Mounting network volume', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Unmounting network volume', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Acquiring image dimension', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Reading folder infomation', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Getting URL of link', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Changing file mode', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Verifying upload file name', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Creating a file for download', // from v2.1.7 added 23.1.2016

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'nepoznato',
\t\t\t'Today'       : 'Danas',
\t\t\t'Yesterday'   : 'Jučer',
\t\t\t'msJan'       : 'Sij',
\t\t\t'msFeb'       : 'Vel',
\t\t\t'msMar'       : 'Ožu',
\t\t\t'msApr'       : 'Tra',
\t\t\t'msMay'       : 'Svi',
\t\t\t'msJun'       : 'Lip',
\t\t\t'msJul'       : 'Srp',
\t\t\t'msAug'       : 'Kol',
\t\t\t'msSep'       : 'Ruj',
\t\t\t'msOct'       : 'Lis',
\t\t\t'msNov'       : 'Stu',
\t\t\t'msDec'       : 'Pro',
\t\t\t'January'     : 'Siječanj',
\t\t\t'February'    : 'Veljača',
\t\t\t'March'       : 'Ožujak',
\t\t\t'April'       : 'Travanj',
\t\t\t'May'         : 'Svibanj',
\t\t\t'June'        : 'Lipanj',
\t\t\t'July'        : 'Srpanj',
\t\t\t'August'      : 'Kolovoz',
\t\t\t'September'   : 'Rujan',
\t\t\t'October'     : 'Listopad',
\t\t\t'November'    : 'Studeni',
\t\t\t'December'    : 'Prosinac',
\t\t\t'Sunday'      : 'Nedjelja',
\t\t\t'Monday'      : 'Ponedjeljak',
\t\t\t'Tuesday'     : 'Utorak',
\t\t\t'Wednesday'   : 'Srijeda',
\t\t\t'Thursday'    : 'Četvrtak',
\t\t\t'Friday'      : 'Petak',
\t\t\t'Saturday'    : 'Subota',
\t\t\t'Sun'         : 'Ned',
\t\t\t'Mon'         : 'Pon',
\t\t\t'Tue'         : 'Uto',
\t\t\t'Wed'         : 'Sri',
\t\t\t'Thu'         : 'Čet',
\t\t\t'Fri'         : 'Pet',
\t\t\t'Sat'         : 'Sub',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'po imenu',
\t\t\t'sortkind'          : 'po tipu',
\t\t\t'sortsize'          : 'po veličini',
\t\t\t'sortdate'          : 'po datumu',
\t\t\t'sortFoldersFirst'  : 'Prvo mape',

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NoviDokument.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NovaMapa',   // added 10.11.2015
\t\t\t'Archive'           : 'NovaArhiva',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Potvrda',
\t\t\t'confirmRm'       : 'Jeste li sigurni?',
\t\t\t'confirmRepl'     : 'Zamijeni stare dokumente novima?',
\t\t\t'confirmConvUTF8' : 'Not in UTF-8<br/>Convert to UTF-8?<br/>Contents become UTF-8 by saving after conversion.', // from v2.1 added 08.04.2014
\t\t\t'confirmNotSave'  : 'It has been modified.<br/>Losing work if you do not save changes.', // from v2.1 added 15.7.2015
\t\t\t'apllyAll'        : 'Primjeni na sve ',
\t\t\t'name'            : 'Ime',
\t\t\t'size'            : 'Veličina',
\t\t\t'perms'           : 'Dozvole',
\t\t\t'modify'          : 'Modificiran',
\t\t\t'kind'            : 'Tip',
\t\t\t'read'            : 'čitanje',
\t\t\t'write'           : 'pisanje',
\t\t\t'noaccess'        : 'bez pristupa',
\t\t\t'and'             : 'i',
\t\t\t'unknown'         : 'nepoznato',
\t\t\t'selectall'       : 'Odaberi sve',
\t\t\t'selectfiles'     : 'Odaberi dokument(e)',
\t\t\t'selectffile'     : 'Odaberi prvi dokument',
\t\t\t'selectlfile'     : 'Odaberi zadnji dokument',
\t\t\t'viewlist'        : 'Lista',
\t\t\t'viewicons'       : 'Ikone',
\t\t\t'places'          : 'Mjesta',
\t\t\t'calc'            : 'Računaj',
\t\t\t'path'            : 'Put',
\t\t\t'aliasfor'        : 'Drugo ime za',
\t\t\t'locked'          : 'Zaključano',
\t\t\t'dim'             : 'Dimenzije',
\t\t\t'files'           : 'Dokumenti',
\t\t\t'folders'         : 'Mape',
\t\t\t'items'           : 'Items',
\t\t\t'yes'             : 'da',
\t\t\t'no'              : 'ne',
\t\t\t'link'            : 'poveznica',
\t\t\t'searcresult'     : 'Rezultati pretrage',
\t\t\t'selected'        : 'selected items',
\t\t\t'about'           : 'Info',
\t\t\t'shortcuts'       : 'Prečaci',
\t\t\t'help'            : 'Pomoć',
\t\t\t'webfm'           : 'Web file manager',
\t\t\t'ver'             : 'Verzija',
\t\t\t'protocolver'     : 'protocol version',
\t\t\t'homepage'        : 'Project home',
\t\t\t'docs'            : 'Dokumentacija',
\t\t\t'github'          : 'Fork us on Github',
\t\t\t'twitter'         : 'Follow us on twitter',
\t\t\t'facebook'        : 'Join us on facebook',
\t\t\t'team'            : 'Tim',
\t\t\t'chiefdev'        : 'glavni developer',
\t\t\t'developer'       : 'developer',
\t\t\t'contributor'     : 'contributor',
\t\t\t'maintainer'      : 'maintainer',
\t\t\t'translator'      : 'translator',
\t\t\t'icons'           : 'Ikone',
\t\t\t'dontforget'      : 'and don\\'t forget to take your towel',
\t\t\t'shortcutsof'     : 'Prečaci isključeni',
\t\t\t'dropFiles'       : 'Ovdje ispusti dokumente',
\t\t\t'or'              : 'ili',
\t\t\t'selectForUpload' : 'Odaberi dokumente koje prebacuješ na server',
\t\t\t'moveFiles'       : 'Premjesti dokumente',
\t\t\t'copyFiles'       : 'Kopiraj dokumente',
\t\t\t'rmFromPlaces'    : 'Remove from places',
\t\t\t'aspectRatio'     : 'Aspect ratio',
\t\t\t'scale'           : 'Skaliraj',
\t\t\t'width'           : 'Širina',
\t\t\t'height'          : 'Visina',
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
\t\t\t'confirmUnmount'      : 'Are you unmount \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Drop or Paste files from browser', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Drop or Paste files and URLs here', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Encoding', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Locale',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Target: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Search by input MIME Type', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Vlasnik', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Grupa', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Other', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Izvrši', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Dozvole', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Mode', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Mapa je prazna', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Mapa je prazna\\\\A Dovuci dokumente koje želiš dodati', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Mapa je prazna\\\\A Pritisni dugo za dodavanje dokumenata', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Kvaliteta', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Auto sync',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Gore',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Get URL link', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Selected items (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'Folder ID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Allow offline access', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'To re-authenticate', // from v2.1.10 added 3.25.2016

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Unknown',
\t\t\t'kindFolder'      : 'Mapa',
\t\t\t'kindAlias'       : 'Drugo ime',
\t\t\t'kindAliasBroken' : 'Broken alias',
\t\t\t// applications
\t\t\t'kindApp'         : 'Aplikacija',
\t\t\t'kindPostscript'  : 'Postscript document',
\t\t\t'kindMsOffice'    : 'Microsoft Office dokument',
\t\t\t'kindMsWord'      : 'Microsoft Word dokument',
\t\t\t'kindMsExcel'     : 'Microsoft Excel dokument',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint prezentacija',
\t\t\t'kindOO'          : 'Open Office dokument',
\t\t\t'kindAppFlash'    : 'Flash aplikacija',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent dokument',
\t\t\t'kind7z'          : '7z arhiva',
\t\t\t'kindTAR'         : 'TAR arhiva',
\t\t\t'kindGZIP'        : 'GZIP arhiva',
\t\t\t'kindBZIP'        : 'BZIP arhiva',
\t\t\t'kindXZ'          : 'XZ arhiva',
\t\t\t'kindZIP'         : 'ZIP arhiva',
\t\t\t'kindRAR'         : 'RAR arhiva',
\t\t\t'kindJAR'         : 'Java JAR dokument',
\t\t\t'kindTTF'         : 'True Type font',
\t\t\t'kindOTF'         : 'Open Type font',
\t\t\t'kindRPM'         : 'RPM paket',
\t\t\t// texts
\t\t\t'kindText'        : 'Tekst arhiva',
\t\t\t'kindTextPlain'   : 'Obični tekst',
\t\t\t'kindPHP'         : 'PHP source',
\t\t\t'kindCSS'         : 'Cascading style sheet',
\t\t\t'kindHTML'        : 'HTML document',
\t\t\t'kindJS'          : 'Javascript source',
\t\t\t'kindRTF'         : 'Rich Text Format',
\t\t\t'kindC'           : 'C source',
\t\t\t'kindCHeader'     : 'C header source',
\t\t\t'kindCPP'         : 'C++ source',
\t\t\t'kindCPPHeader'   : 'C++ header source',
\t\t\t'kindShell'       : 'Unix shell script',
\t\t\t'kindPython'      : 'Python source',
\t\t\t'kindJava'        : 'Java source',
\t\t\t'kindRuby'        : 'Ruby source',
\t\t\t'kindPerl'        : 'Perl skripta',
\t\t\t'kindSQL'         : 'SQL source',
\t\t\t'kindXML'         : 'XML dokument',
\t\t\t'kindAWK'         : 'AWK source',
\t\t\t'kindCSV'         : 'vrijednosti razdvojene zarezom',
\t\t\t'kindDOCBOOK'     : 'Docbook XML dokument',
\t\t\t'kindMarkdown'    : 'Markdown tekst', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'slika',
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
\t\t\t'kindAudio'       : 'Audio',
\t\t\t'kindAudioMPEG'   : 'MPEG audio',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 audio',
\t\t\t'kindAudioMIDI'   : 'MIDI audio',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis audio',
\t\t\t'kindAudioWAV'    : 'WAV audio',
\t\t\t'AudioPlaylist'   : 'MP3 lista',
\t\t\t'kindVideo'       : 'Video ',
\t\t\t'kindVideoDV'     : 'DV video',
\t\t\t'kindVideoMPEG'   : 'MPEG video',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 video',
\t\t\t'kindVideoAVI'    : 'AVI video',
\t\t\t'kindVideoMOV'    : 'Quick Time video',
\t\t\t'kindVideoWM'     : 'Windows Media video',
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.hr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.hr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.hr.js");
    }
}
