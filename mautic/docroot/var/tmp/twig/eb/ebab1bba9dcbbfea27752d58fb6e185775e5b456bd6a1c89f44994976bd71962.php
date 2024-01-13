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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sr.js */
class __TwigTemplate_95c65613dbaf7fa747b3f46f9333ba704de1690218122899f7035d45a3f92a04 extends Template
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
        echo " /**
 * Serbian translation
 * @author Momčilo m0k1 Mićanović <moki.forum@gmail.com>
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
\telFinder.prototype.i18.sr = {
\t\ttranslator : 'Momčilo m0k1 Mićanović &lt;moki.forum@gmail.com&gt;',
\t\tlanguage   : 'Srpski',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i',
\t\tfancyDateFormat : '\$1 H:i',
\t\tmessages   : {
\t\t\t
\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Greška',
\t\t\t'errUnknown'           : 'Nepoznata greška.',
\t\t\t'errUnknownCmd'        : 'Nepoznata komanda.',
\t\t\t'errJqui'              : 'Neispravna konfiguracija jQuery UI. Komponente koje mogu da se odabiru, povlače, izbacuju moraju biti uključene.',
\t\t\t'errNode'              : 'elFinder zahteva DOM Element da bude kreiran.',
\t\t\t'errURL'               : 'Neispravna elFinder konfiguracija! URL opcija nije postavljena.',
\t\t\t'errAccess'            : 'Pristup odbijen.',
\t\t\t'errConnect'           : 'Nije moguće povezivanje s skriptom.',
\t\t\t'errAbort'             : 'Veza prekinuta.',
\t\t\t'errTimeout'           : 'Veza odbačena.',
\t\t\t'errNotFound'          : 'Skripta nije pronađena.',
\t\t\t'errResponse'          : 'Neispravan odgovor skripte.',
\t\t\t'errConf'              : 'Neispravna konfiguracija skripte.',
\t\t\t'errJSON'              : 'PHP JSON modul nije instaliran.',
\t\t\t'errNoVolumes'         : 'Vidljivi volumeni nisu dostupni.',
\t\t\t'errCmdParams'         : 'Nevažeći parametri za komandu \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Podaci nisu JSON.',
\t\t\t'errDataEmpty'         : 'Podaci nisu prazni.',
\t\t\t'errCmdReq'            : 'Skripta zahteva komandu.',
\t\t\t'errOpen'              : 'Nemoguće otvoriti \"\$1\".',
\t\t\t'errNotFolder'         : 'Objekat nije folder.',
\t\t\t'errNotFile'           : 'Objekat nije datoteka.',
\t\t\t'errRead'              : 'Nemoguće pročitati \"\$1\".',
\t\t\t'errWrite'             : 'Nemoguće pisati u \"\$1\".',
\t\t\t'errPerm'              : 'Dozvola je odbijena.',
\t\t\t'errLocked'            : '\"\$1\" je zaključan i nemože biti preimenovan, premešten ili obrisan.',
\t\t\t'errExists'            : 'Datoteka zvana \"\$1\" već postoji.',
\t\t\t'errInvName'           : 'Neispravno ime datoteke.',
\t\t\t'errFolderNotFound'    : 'Folder nije pronađen.',
\t\t\t'errFileNotFound'      : 'Datoteka nije pronađena.',
\t\t\t'errTrgFolderNotFound' : 'Izabrani folder \"\$1\" nije pronađen.',
\t\t\t'errPopup'             : 'Pretraživač sprečava otvaranje iskačućih prozora. Da otvorite datoteku uključite iskačuće prozore u opcijama pretraživača.',
\t\t\t'errMkdir'             : 'Nemoguće kreirati folder \"\$1\".',
\t\t\t'errMkfile'            : 'Nemoguće kreirati datoteku \"\$1\".',
\t\t\t'errRename'            : 'Nemoguće preimenovati datoteku \"\$1\".',
\t\t\t'errCopyFrom'          : 'Kopiranje datoteki sa \"\$1\" nije dozvoljeno.',
\t\t\t'errCopyTo'            : 'Kopiranje datoteki na \"\$1\" nije dozvoljeno.',
\t\t\t'errUpload'            : 'Greska pri slanju.',
\t\t\t'errUploadFile'        : 'Nemoguće poslati \"\$1\".',
\t\t\t'errUploadNoFiles'     : 'Nisu pronađene datoteke za slanje.',
\t\t\t'errUploadTotalSize'   : 'Podaci premašuju najveću dopuštenu veličinu.',
\t\t\t'errUploadFileSize'    : 'Datoteka premašuje najveću dopuštenu veličinu.',
\t\t\t'errUploadMime'        : 'Vrsta datoteke nije dopuštena.',
\t\t\t'errUploadTransfer'    : '\"\$1\" greška prilikom slanja.',
\t\t\t'errNotReplace'        : 'Object \"\$1\" already exists at this location and can not be replaced by object with another type.',
\t\t\t'errReplace'           : 'Unable to replace \"\$1\".',
\t\t\t'errSave'              : 'Nemožeš sačuvati \"\$1\".',
\t\t\t'errCopy'              : 'Nemožeš kopirati \"\$1\".',
\t\t\t'errMove'              : 'Nemožeš premestiti \"\$1\".',
\t\t\t'errCopyInItself'      : 'Nemožeš kopirati \"\$1\" na istu lokaciju.',
\t\t\t'errRm'                : 'Nemožeš obrisati \"\$1\".',
\t\t\t'errRmSrc'             : 'Unable remove source file(s).',
\t\t\t'errExtract'           : 'Nemoguće izvaditi datoteke iz \"\$1\".',
\t\t\t'errArchive'           : 'Nemoguće kreirati arhivu.',
\t\t\t'errArcType'           : 'Nepodržani tip arhive.',
\t\t\t'errNoArchive'         : 'Datoteka nije arhiva ili je nepodržani tip arhive.',
\t\t\t'errCmdNoSupport'      : 'Skripta nepodržava ovu komandu.',
\t\t\t'errReplByChild'       : 'Folder “\$1” ne može biti zamenut stavkom koju sadrži.',
\t\t\t'errArcSymlinks'       : 'Zbog bezbednosnih razloga ne možete raspakovati arhive koje sadrže simboličke veze ili datoteke sa nedozvoljenim imenima.',
\t\t\t'errArcMaxSize'        : 'Arhiva je dostigla maksimalnu veličinu.',
\t\t\t'errResize'            : 'Nemoguće promeniti veličinu \"\$1\".',
\t\t\t'errResizeDegree'      : 'Invalid rotate degree.',
\t\t\t'errResizeRotate'      : 'Unable to rotate image.',
\t\t\t'errResizeSize'        : 'Invalid image size.',
\t\t\t'errResizeNoChange'    : 'Image size not changed.',
\t\t\t'errUsupportType'      : 'nepodržan tip datoteke.',
\t\t\t'errNotUTF8Content'    : 'Datoteka \"\$1\" nije u UTF-8  formati i ne može biti izmenjena.',
\t\t\t'errNetMount'          : 'Nije moguće montirati \"\$1\".',
\t\t\t'errNetMountNoDriver'  : 'Nepodržani protokol.',
\t\t\t'errNetMountFailed'    : 'Montiranje neuspelo.',
\t\t\t'errNetMountHostReq'   : 'Host je potreban.',
\t\t\t'errSessionExpires'    : 'Your session has expired due to inactivity.',
\t\t\t'errCreatingTempDir'   : 'Unable to create temporary directory: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Unable to download file from FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Unable to upload file to FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Unable to create remote directory on FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Error while archiving files: \"\$1\"',
\t\t\t'errExtractExec'       : 'Error while extracting files: \"\$1\"',

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Kreiraj arhivu',
\t\t\t'cmdback'      : 'Nazad',
\t\t\t'cmdcopy'      : 'Kopiraj',
\t\t\t'cmdcut'       : 'Iseci',
\t\t\t'cmddownload'  : 'Preuzmi',
\t\t\t'cmdduplicate' : 'Dupliraj',
\t\t\t'cmdedit'      : 'Izmeni datoteku',
\t\t\t'cmdextract'   : 'Raspakuj arhivu',
\t\t\t'cmdforward'   : 'Napred',
\t\t\t'cmdgetfile'   : 'Izaberi datoteke',
\t\t\t'cmdhelp'      : 'O ovom softveru',
\t\t\t'cmdhome'      : 'Početna',
\t\t\t'cmdinfo'      : 'Proveri informacije',
\t\t\t'cmdmkdir'     : 'Novi folder',
\t\t\t'cmdmkfile'    : 'Nova datoteka',
\t\t\t'cmdopen'      : 'Otvori',
\t\t\t'cmdpaste'     : 'Zalepi',
\t\t\t'cmdquicklook' : 'Pregledaj',
\t\t\t'cmdreload'    : 'Povno učitaj',
\t\t\t'cmdrename'    : 'Preimenuj',
\t\t\t'cmdrm'        : 'Obriši',
\t\t\t'cmdsearch'    : 'Pronađi datoteke',
\t\t\t'cmdup'        : 'Idi na nadređeni folder',
\t\t\t'cmdupload'    : 'Pošalji datoteke',
\t\t\t'cmdview'      : 'Pogledaj',
\t\t\t'cmdresize'    : 'Promeni veličinu slike',
\t\t\t'cmdsort'      : 'Sortiraj',
\t\t\t'cmdnetmount'  : 'Mount network volume',
\t\t\t
\t\t\t/*********************************** buttons ***********************************/ 
\t\t\t'btnClose'  : 'Zatvori',
\t\t\t'btnSave'   : 'Sačuvaj',
\t\t\t'btnRm'     : 'Obriši',
\t\t\t'btnApply'  : 'Potvrdi',
\t\t\t'btnCancel' : 'Prekini',
\t\t\t'btnNo'     : 'Ne',
\t\t\t'btnYes'    : 'Da',
\t\t\t'btnMount'  : 'Mount',
\t\t\t
\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Otvaranje foldera',
\t\t\t'ntffile'     : 'Otvaranje datoteke',
\t\t\t'ntfreload'   : 'Ponovo učitavanje sadržaja foldera',
\t\t\t'ntfmkdir'    : 'Kreiranje foldera',
\t\t\t'ntfmkfile'   : 'Kreiranje datoteke',
\t\t\t'ntfrm'       : 'Brisanje datoteke',
\t\t\t'ntfcopy'     : 'Kopiranje datoteke',
\t\t\t'ntfmove'     : 'Premeštanje datoteke',
\t\t\t'ntfprepare'  : 'Priprema za kopiranje dateoteke',
\t\t\t'ntfrename'   : 'Primenovanje datoteke',
\t\t\t'ntfupload'   : 'Slanje datoteke',
\t\t\t'ntfdownload' : 'Preuzimanje datoteke',
\t\t\t'ntfsave'     : 'Čuvanje datoteke',
\t\t\t'ntfarchive'  : 'Kreiranje arhive',
\t\t\t'ntfextract'  : 'Izdvajanje datoteka iz arhive',
\t\t\t'ntfsearch'   : 'Pretraga datoteka',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'Radim nešto >_<',
\t\t\t'ntfloadimg'  : 'Učitavanje slike',
\t\t\t'ntfnetmount' : 'Montiranje mrežnog volumena', 
\t\t\t'ntfdim'      : 'Acquiring image dimension',
\t\t\t
\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'nepoznat',
\t\t\t'Today'       : 'Danas',
\t\t\t'Yesterday'   : 'Sutra',
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
\t\t\t'March'       : 'Mart',
\t\t\t'April'       : 'April',
\t\t\t'May'         : 'Maj',
\t\t\t'June'        : 'Jun',
\t\t\t'July'        : 'Jul',
\t\t\t'August'      : 'Avgust',
\t\t\t'September'   : 'Septembar',
\t\t\t'October'     : 'Oktobar',
\t\t\t'November'    : 'Novembar',
\t\t\t'December'    : 'Decembar',
\t\t\t'Sunday'      : 'Nedelja', 
\t\t\t'Monday'      : 'Ponedeljak', 
\t\t\t'Tuesday'     : 'Utorak', 
\t\t\t'Wednesday'   : 'Sreda', 
\t\t\t'Thursday'    : 'Četvrtak', 
\t\t\t'Friday'      : 'Petak', 
\t\t\t'Saturday'    : 'Subota',
\t\t\t'Sun'         : 'Ned', 
\t\t\t'Mon'         : 'Pon', 
\t\t\t'Tue'         : 'Uto', 
\t\t\t'Wed'         : 'Sre', 
\t\t\t'Thu'         : 'Čet', 
\t\t\t'Fri'         : 'Pet', 
\t\t\t'Sat'         : 'Sub',
\t\t\t
\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'po imenu', 
\t\t\t'sortkind'          : 'po vrsti', 
\t\t\t'sortsize'          : 'po veličini',
\t\t\t'sortdate'          : 'po datumu',
\t\t\t'sortFoldersFirst'  : 'Prvo folderi',
\t\t\t
\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Potrebna potvrda',
\t\t\t'confirmRm'       : 'Da li ste sigurni da želite da obrišete datoteke?<br/>Ovo se ne može poništiti!',
\t\t\t'confirmRepl'     : 'Zameniti stare datoteke sa novima?',
\t\t\t'apllyAll'        : 'Potvrdi za sve',
\t\t\t'name'            : 'Ime',
\t\t\t'size'            : 'Veličina',
\t\t\t'perms'           : 'Dozvole',
\t\t\t'modify'          : 'Izmenjeno',
\t\t\t'kind'            : 'Vrsta',
\t\t\t'read'            : 'čitanje',
\t\t\t'write'           : 'pisanje',
\t\t\t'noaccess'        : 'bez pristupa',
\t\t\t'and'             : 'i',
\t\t\t'unknown'         : 'nepoznato',
\t\t\t'selectall'       : 'Izaberi sve datoteke',
\t\t\t'selectfiles'     : 'Izaberi datoteku(e)',
\t\t\t'selectffile'     : 'Izaberi prvu datoteku',
\t\t\t'selectlfile'     : 'Izaberi poslednju datoteku',
\t\t\t'viewlist'        : 'Popisni prikaz',
\t\t\t'viewicons'       : 'Pregled ikona',
\t\t\t'places'          : 'Mesta',
\t\t\t'calc'            : 'Izračunaj', 
\t\t\t'path'            : 'Putanja',
\t\t\t'aliasfor'        : 'Nadimak za',
\t\t\t'locked'          : 'Zaključano',
\t\t\t'dim'             : 'Dimenzije',
\t\t\t'files'           : 'Datoteke',
\t\t\t'folders'         : 'Folderi',
\t\t\t'items'           : 'Stavke',
\t\t\t'yes'             : 'da',
\t\t\t'no'              : 'ne',
\t\t\t'link'            : 'Veza',
\t\t\t'searcresult'     : 'Rezultati pretrage',  
\t\t\t'selected'        : 'odabrane stavke',
\t\t\t'about'           : 'O softveru',
\t\t\t'shortcuts'       : 'Prečice',
\t\t\t'help'            : 'Pomoć',
\t\t\t'webfm'           : 'Web menađer datoteka',
\t\t\t'ver'             : 'Verzija',
\t\t\t'protocolver'     : 'verzija protokla',
\t\t\t'homepage'        : 'Adresa projekta',
\t\t\t'docs'            : 'Dokumentacija',
\t\t\t'github'          : 'Forkuj nas na Github',
\t\t\t'twitter'         : 'Prati nas na twitter',
\t\t\t'facebook'        : 'Pridruži nam se na facebook',
\t\t\t'team'            : 'Tim',
\t\t\t'chiefdev'        : 'glavni programer',
\t\t\t'developer'       : 'programer',
\t\t\t'contributor'     : 'pomoćnik',
\t\t\t'maintainer'      : 'održavatelj',
\t\t\t'translator'      : 'prevodilac',
\t\t\t'icons'           : 'Ikone',
\t\t\t'dontforget'      : 'i ne zaboravite da ponesete peškir',
\t\t\t'shortcutsof'     : 'Prečice isključene',
\t\t\t'dropFiles'       : 'Prevucite datoteke ovde',
\t\t\t'or'              : 'ili',
\t\t\t'selectForUpload' : 'Odaberite datoteke za slanje',
\t\t\t'moveFiles'       : 'Premesti datoteke',
\t\t\t'copyFiles'       : 'Kopiraj datoteke',
\t\t\t'rmFromPlaces'    : 'Ukloni iz mesta',
\t\t\t'aspectRatio'     : 'Omer širine i visine',
\t\t\t'scale'           : 'Razmera',
\t\t\t'width'           : 'Širina',
\t\t\t'height'          : 'Visina',
\t\t\t'resize'          : 'Promeni veličinu',
\t\t\t'crop'            : 'Iseci',
\t\t\t'rotate'          : 'Rotiraj',
\t\t\t'rotate-cw'       : 'Rotiraj 90 stepeni CW',
\t\t\t'rotate-ccw'      : 'Rotiraj 90 stepeni CCW',
\t\t\t'degree'          : 'Stepeni',
\t\t\t'netMountDialogTitle' : 'Montiraj mrežni volumen', 
\t\t\t'protocol'            : 'Protokol', 
\t\t\t'host'                : 'Host', 
\t\t\t'port'                : 'Port', 
\t\t\t'user'                : 'Korisničko Ime', 
\t\t\t'pass'                : 'Lozinka', 

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Nepoznat',
\t\t\t'kindFolder'      : 'Folder',
\t\t\t'kindAlias'       : 'Nadimak',
\t\t\t'kindAliasBroken' : 'Neispravan nadimak',
\t\t\t// applications
\t\t\t'kindApp'         : 'Aplikacija',
\t\t\t'kindPostscript'  : 'Postscript dokument',
\t\t\t'kindMsOffice'    : 'Microsoft Office dokument',
\t\t\t'kindMsWord'      : 'Microsoft Word dokument',
\t\t\t'kindMsExcel'     : 'Microsoft Excel dokument',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint prezentacija',
\t\t\t'kindOO'          : 'Open Office dokument',
\t\t\t'kindAppFlash'    : 'Flash aplikacija',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent datoteka',
\t\t\t'kind7z'          : '7z arhiva',
\t\t\t'kindTAR'         : 'TAR arhiva',
\t\t\t'kindGZIP'        : 'GZIP arhiva',
\t\t\t'kindBZIP'        : 'BZIP arhiva',
\t\t\t'kindXZ'          : 'XZ arhiva',
\t\t\t'kindZIP'         : 'ZIP arhiva',
\t\t\t'kindRAR'         : 'RAR arhiva',
\t\t\t'kindJAR'         : 'Java JAR datoteka',
\t\t\t'kindTTF'         : 'True Type font',
\t\t\t'kindOTF'         : 'Open Type font',
\t\t\t'kindRPM'         : 'RPM paket',
\t\t\t// texts
\t\t\t'kindText'        : 'Teokstualni dokument',
\t\t\t'kindTextPlain'   : 'Čist tekst',
\t\t\t'kindPHP'         : 'PHP kod',
\t\t\t'kindCSS'         : 'CSS kod',
\t\t\t'kindHTML'        : 'HTML dokument',
\t\t\t'kindJS'          : 'Javascript kod',
\t\t\t'kindRTF'         : 'Rich Text Format',
\t\t\t'kindC'           : 'C kod',
\t\t\t'kindCHeader'     : 'C header kod',
\t\t\t'kindCPP'         : 'C++ kod',
\t\t\t'kindCPPHeader'   : 'C++ header kod',
\t\t\t'kindShell'       : 'Unix shell skripta',
\t\t\t'kindPython'      : 'Python kod',
\t\t\t'kindJava'        : 'Java kod',
\t\t\t'kindRuby'        : 'Ruby kod',
\t\t\t'kindPerl'        : 'Perl skripta',
\t\t\t'kindSQL'         : 'SQL kod',
\t\t\t'kindXML'         : 'XML dokument',
\t\t\t'kindAWK'         : 'AWK kod',
\t\t\t'kindCSV'         : 'Comma separated values',
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
\t\t\t'kindAudio'       : 'Zvuk',
\t\t\t'kindAudioMPEG'   : 'MPEG zvuk',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 zvuk',
\t\t\t'kindAudioMIDI'   : 'MIDI zvuk',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis zvuk',
\t\t\t'kindAudioWAV'    : 'WAV zvuk',
\t\t\t'AudioPlaylist'   : 'MP3 lista',
\t\t\t'kindVideo'       : 'Video',
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sr.js");
    }
}
