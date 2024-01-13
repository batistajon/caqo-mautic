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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ro.js */
class __TwigTemplate_8f92f14d525c1cd2e4696f6e1bd5b09374b01d94282652ff45b8d98c99bf4214 extends Template
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
 * Română translation
 * @author Cristian Tabacitu <hello@tabacitu.ro>
 * @version 2015-11-13
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
\telFinder.prototype.i18.ro = {
\t\ttranslator : 'Cristian Tabacitu &lt;hello@tabacitu.ro&gt;',
\t\tlanguage   : 'Română',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd M Y h:i', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 h:i A', // will produce smth like: Today 12:25 PM
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Eroare',
\t\t\t'errUnknown'           : 'Eroare necunoscută.',
\t\t\t'errUnknownCmd'        : 'Comandă necunoscuta.',
\t\t\t'errJqui'              : 'Configurație jQuery UI necunoscută. Componentele selectable, draggable și droppable trebuie să fie incluse.',
\t\t\t'errNode'              : 'elFinder necesită ca DOM Element să fie creat.',
\t\t\t'errURL'               : 'Configurație elFinder nevalidă! URL option nu este setat.',
\t\t\t'errAccess'            : 'Acces interzis.',
\t\t\t'errConnect'           : 'Nu ne-am putut conecta la backend.',
\t\t\t'errAbort'             : 'Conexiunea a fost oprită.',
\t\t\t'errTimeout'           : 'Conexiunea a fost întreruptă.',
\t\t\t'errNotFound'          : 'Nu am gasit backend-ul.',
\t\t\t'errResponse'          : 'Răspuns backend greșit.',
\t\t\t'errConf'              : 'Configurație backend greșită.',
\t\t\t'errJSON'              : 'Modulul PHP JSON nu este instalat.',
\t\t\t'errNoVolumes'         : 'Volumele citibile nu sunt disponibile.',
\t\t\t'errCmdParams'         : 'Parametri greșiți pentru comanda \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Datele nu sunt în format JSON.',
\t\t\t'errDataEmpty'         : 'Datele sunt goale.',
\t\t\t'errCmdReq'            : 'Cererea către backend necesită un nume de comandă.',
\t\t\t'errOpen'              : 'Nu am putut deschide \"\$1\".',
\t\t\t'errNotFolder'         : 'Obiectul nu este un dosar.',
\t\t\t'errNotFile'           : 'Obiectul nu este un fișier.',
\t\t\t'errRead'              : 'Nu am putut citi \"\$1\".',
\t\t\t'errWrite'             : 'Nu am putu scrie în \"\$1\".',
\t\t\t'errPerm'              : 'Nu ai permisiunea necesară.',
\t\t\t'errLocked'            : '\"\$1\" este blocat și nu poate fi redenumit, mutat sau șters.',
\t\t\t'errExists'            : 'Un fișier cu numele \"\$1\" există deja.',
\t\t\t'errInvName'           : 'Numele pentru fișier este greșit.',
\t\t\t'errFolderNotFound'    : 'Nu am găsit dosarul.',
\t\t\t'errFileNotFound'      : 'Nu am găsit fișierul.',
\t\t\t'errTrgFolderNotFound' : 'Nu am găsit dosarul pentru destinație \"\$1\".',
\t\t\t'errPopup'             : 'Browserul tău a prevenit deschiderea ferestrei popup. Pentru a deschide fișierul permite deschidere ferestrei.',
\t\t\t'errMkdir'             : 'Nu am putut crea dosarul \"\$1\".',
\t\t\t'errMkfile'            : 'Nu am putut crea fișierul \"\$1\".',
\t\t\t'errRename'            : 'Nu am putut redenumi \"\$1\".',
\t\t\t'errCopyFrom'          : 'Copierea fișierelor de pe volumul \"\$1\" este interzisă.',
\t\t\t'errCopyTo'            : 'Copierea fișierelor către volumul \"\$1\" este interzisă.',
\t\t\t'errMkOutLink'         : 'Nu am putut crea linkul în afara volumului rădăcină.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Eroare de upload.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Nu am putut urca \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Nu am găsit fișiere pentru a le urca.',
\t\t\t'errUploadTotalSize'   : 'Datele depâșest limita maximă de mărime.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Fișierul este prea mare.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Acest tip de fișier nu este permis.',
\t\t\t'errUploadTransfer'    : 'Eroare la transferarea \"\$1\".',
\t\t\t'errUploadTemp'        : 'Nu am putut crea fișierul temporar pentru upload.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Obiectul \"\$1\" există deja în acest loc și nu poate fi înlocuit de un obiect de alt tip.', // new
\t\t\t'errReplace'           : 'Nu am putut înlocui \"\$1\".',
\t\t\t'errSave'              : 'Nu am putut salva \"\$1\".',
\t\t\t'errCopy'              : 'Nu am putut copia \"\$1\".',
\t\t\t'errMove'              : 'Nu am putut muta \"\$1\".',
\t\t\t'errCopyInItself'      : 'Nu am putut copia \"\$1\" în el însuși.',
\t\t\t'errRm'                : 'Nu am putut șterge \"\$1\".',
\t\t\t'errRmSrc'             : 'Nu am putut șterge fișierul sursă.',
\t\t\t'errExtract'           : 'Nu am putut extrage fișierele din \"\$1\".',
\t\t\t'errArchive'           : 'Nu am putut crea arhiva.',
\t\t\t'errArcType'           : 'Arhiva este de un tip nesuportat.',
\t\t\t'errNoArchive'         : 'Fișierul nu este o arhiva sau este o arhivă de un tip necunoscut.',
\t\t\t'errCmdNoSupport'      : 'Backend-ul nu suportă această comandă.',
\t\t\t'errReplByChild'       : 'Dosarul “\$1” nu poate fi înlocuit de un element pe care el îl conține.',
\t\t\t'errArcSymlinks'       : 'Din motive de securitate, arhiva nu are voie să conțină symlinks sau fișiere cu nume interzise.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Fișierul arhivei depășește mărimea maximă permisă.',
\t\t\t'errResize'            : 'Nu am putut redimensiona \"\$1\".',
\t\t\t'errResizeDegree'      : 'Grad de rotație nevalid.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Imaginea nu a fost rotită.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Mărimea imaginii este nevalidă.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Mărimea imaginii nu a fost schimbată.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Tipul acesta de fișier nu este suportat.',
\t\t\t'errNotUTF8Content'    : 'Fișierul \"\$1\" nu folosește UTF-8 și nu poate fi editat.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Nu am putut încărca \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Protocol nesuportat.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Încărcare eșuată.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Gazda este necesară.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Sesiunea a expirat datorită lipsei de activitate.',
\t\t\t'errCreatingTempDir'   : 'Nu am putut crea fișierul temporar: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Nu am putut descarca fișierul de pe FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Nu am putut încărca fișierul pe FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Nu am putut crea acest dosar pe FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Eroare la arhivarea fișierelor: \"\$1\"',
\t\t\t'errExtractExec'       : 'Eroare la dezarhivarea fișierelor: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Nu am putut elimina volumul', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Nu poate fi convertit la UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Pentru a urca dosare încearcă Google Chrome.', // from v2.1 added 26.6.2015

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Creeaza arhivă',
\t\t\t'cmdback'      : 'Înapoi',
\t\t\t'cmdcopy'      : 'Copiază',
\t\t\t'cmdcut'       : 'Taie',
\t\t\t'cmddownload'  : 'Descarcă',
\t\t\t'cmdduplicate' : 'Creează duplicat',
\t\t\t'cmdedit'      : 'Modifică fișier',
\t\t\t'cmdextract'   : 'Extrage fișierele din arhivă',
\t\t\t'cmdforward'   : 'Înainte',
\t\t\t'cmdgetfile'   : 'Alege fișiere',
\t\t\t'cmdhelp'      : 'Despre acest software',
\t\t\t'cmdhome'      : 'Acasă',
\t\t\t'cmdinfo'      : 'Informații',
\t\t\t'cmdmkdir'     : 'Dosar nou',
\t\t\t'cmdmkfile'    : 'Fișier nou',
\t\t\t'cmdopen'      : 'Deschide',
\t\t\t'cmdpaste'     : 'Lipește',
\t\t\t'cmdquicklook' : 'Previzualizează',
\t\t\t'cmdreload'    : 'Reîncarcă',
\t\t\t'cmdrename'    : 'Redenumește',
\t\t\t'cmdrm'        : 'Șterge',
\t\t\t'cmdsearch'    : 'Găsește fișiere',
\t\t\t'cmdup'        : 'Mergi la dosarul părinte',
\t\t\t'cmdupload'    : 'Urcă fișiere',
\t\t\t'cmdview'      : 'Vezi',
\t\t\t'cmdresize'    : 'Redimensionează & rotește',
\t\t\t'cmdsort'      : 'Sortează',
\t\t\t'cmdnetmount'  : 'Încarcă volum din rețea', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Elimină volum', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'La Locuri', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Schimbă mod', // from v2.1 added 20.6.2015

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Închide',
\t\t\t'btnSave'   : 'Salvează',
\t\t\t'btnRm'     : 'Șterge',
\t\t\t'btnApply'  : 'Aplică',
\t\t\t'btnCancel' : 'Anulează',
\t\t\t'btnNo'     : 'Nu',
\t\t\t'btnYes'    : 'Da',
\t\t\t'btnMount'  : 'Încarcă',  // added 18.04.2012
\t\t\t'btnApprove': 'Mergi la \$1 și aprobă', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Elimină volum', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Convertește', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Aici',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Volum',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Toate',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'Tipuri MIME', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Nume fișier',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Salvează și închide', // from v2.1 added 12.6.2015

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Deschide dosar',
\t\t\t'ntffile'     : 'Deschide fișier',
\t\t\t'ntfreload'   : 'Actualizează conținutul dosarului',
\t\t\t'ntfmkdir'    : 'Se creează dosarul',
\t\t\t'ntfmkfile'   : 'Se creează fișierele',
\t\t\t'ntfrm'       : 'Șterge fișiere',
\t\t\t'ntfcopy'     : 'Copiază fișiere',
\t\t\t'ntfmove'     : 'Mută fișiere',
\t\t\t'ntfprepare'  : 'Pregătește copierea fișierelor',
\t\t\t'ntfrename'   : 'Redenumește fișiere',
\t\t\t'ntfupload'   : 'Se urcă fișierele',
\t\t\t'ntfdownload' : 'Se descarcă fișierele',
\t\t\t'ntfsave'     : 'Salvează fișiere',
\t\t\t'ntfarchive'  : 'Se creează arhiva',
\t\t\t'ntfextract'  : 'Se extrag fișierele din arhivă',
\t\t\t'ntfsearch'   : 'Se caută fișierele',
\t\t\t'ntfresize'   : 'Se redimnesionează imaginile',
\t\t\t'ntfsmth'     : 'Se întamplă ceva',
\t\t\t'ntfloadimg'  : 'Se încarcă imaginea',
\t\t\t'ntfnetmount' : 'Se încarcă volumul din rețea', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Se elimină volumul din rețea', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Se preiau dimensiunile imaginii', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Se citesc informațiile dosarului', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Se preia URL-ul din link', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Se schimba modul de fișier', // from v2.1 added 20.6.2015

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'necunoscută',
\t\t\t'Today'       : 'Astăzi',
\t\t\t'Yesterday'   : 'Ieri',
\t\t\t'msJan'       : 'Ian',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Apr',
\t\t\t'msMay'       : 'Mai',
\t\t\t'msJun'       : 'Iun',
\t\t\t'msJul'       : 'Iul',
\t\t\t'msAug'       : 'Aug',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Oct',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Dec',
\t\t\t'January'     : 'Ianuarie',
\t\t\t'February'    : 'Februarie',
\t\t\t'March'       : 'Martie',
\t\t\t'April'       : 'Aprilie',
\t\t\t'May'         : 'Mai',
\t\t\t'June'        : 'Iunie',
\t\t\t'July'        : 'Iulie',
\t\t\t'August'      : 'August',
\t\t\t'September'   : 'Septembrie',
\t\t\t'October'     : 'Octombrie',
\t\t\t'November'    : 'Noiembrie',
\t\t\t'December'    : 'Decembrie',
\t\t\t'Sunday'      : 'Duminică',
\t\t\t'Monday'      : 'Luni',
\t\t\t'Tuesday'     : 'Marți',
\t\t\t'Wednesday'   : 'Miercuri',
\t\t\t'Thursday'    : 'Joi',
\t\t\t'Friday'      : 'Vineri',
\t\t\t'Saturday'    : 'Sâmbătă',
\t\t\t'Sun'         : 'Du',
\t\t\t'Mon'         : 'Lu',
\t\t\t'Tue'         : 'Ma',
\t\t\t'Wed'         : 'Mi',
\t\t\t'Thu'         : 'Jo',
\t\t\t'Fri'         : 'Vi',
\t\t\t'Sat'         : 'Sâ',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'după nume',
\t\t\t'sortkind'          : 'după tip',
\t\t\t'sortsize'          : 'după mărime',
\t\t\t'sortdate'          : 'după dată',
\t\t\t'sortFoldersFirst'  : 'Dosarele primele',

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'FisierNou.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'DosarNou',   // added 10.11.2015
\t\t\t'Archive'           : 'ArhivaNoua',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Este necesară confirmare',
\t\t\t'confirmRm'       : 'Ești sigur că vrei să ștergi fișierele?<br/>Acțiunea este ireversibilă!',
\t\t\t'confirmRepl'     : 'Înlocuiește fișierul vechi cu cel nou?',
\t\t\t'confirmConvUTF8' : 'Nu este în UTF-8<br/>Convertim la UTF-8?<br/>Conținutul devine UTF-8 după salvarea conversiei.', // from v2.1 added 08.04.2014
\t\t\t'confirmNotSave'  : 'Au avut loc modificări.<br/>Dacă nu salvezi se vor pierde modificările.', // from v2.1 added 15.7.2015
\t\t\t'apllyAll'        : 'Aplică pentru toate',
\t\t\t'name'            : 'Nume',
\t\t\t'size'            : 'Mărime',
\t\t\t'perms'           : 'Permisiuni',
\t\t\t'modify'          : 'Modificat la',
\t\t\t'kind'            : 'Tip',
\t\t\t'read'            : 'citire',
\t\t\t'write'           : 'scriere',
\t\t\t'noaccess'        : 'acces interzis',
\t\t\t'and'             : 'și',
\t\t\t'unknown'         : 'necunoscut',
\t\t\t'selectall'       : 'Alege toate fișierele',
\t\t\t'selectfiles'     : 'Alege fișier(e)',
\t\t\t'selectffile'     : 'Alege primul fișier',
\t\t\t'selectlfile'     : 'Alege ultimul fișier',
\t\t\t'viewlist'        : 'Vezi ca listă',
\t\t\t'viewicons'       : 'Vezi ca icoane',
\t\t\t'places'          : 'Locuri',
\t\t\t'calc'            : 'Calculează',
\t\t\t'path'            : 'Cale',
\t\t\t'aliasfor'        : 'Alias pentru',
\t\t\t'locked'          : 'Securizat',
\t\t\t'dim'             : 'Dimensiuni',
\t\t\t'files'           : 'Fișiere',
\t\t\t'folders'         : 'Dosare',
\t\t\t'items'           : 'Elemente',
\t\t\t'yes'             : 'da',
\t\t\t'no'              : 'nu',
\t\t\t'link'            : 'Link',
\t\t\t'searcresult'     : 'Rezultatele căutării',
\t\t\t'selected'        : 'elemente alese',
\t\t\t'about'           : 'Despre',
\t\t\t'shortcuts'       : 'Scurtături',
\t\t\t'help'            : 'Ajutor',
\t\t\t'webfm'           : 'Manager web pentru fișiere',
\t\t\t'ver'             : 'Versiune',
\t\t\t'protocolver'     : 'versiune protocol',
\t\t\t'homepage'        : 'Pagina proiectului',
\t\t\t'docs'            : 'Documentație',
\t\t\t'github'          : 'Fork nou pe Github',
\t\t\t'twitter'         : 'Urmărește-ne pe twitter',
\t\t\t'facebook'        : 'Alătura-te pe facebook',
\t\t\t'team'            : 'Echipa',
\t\t\t'chiefdev'        : 'chief developer',
\t\t\t'developer'       : 'developer',
\t\t\t'contributor'     : 'contributor',
\t\t\t'maintainer'      : 'maintainer',
\t\t\t'translator'      : 'translator',
\t\t\t'icons'           : 'Icoane',
\t\t\t'dontforget'      : 'și nu uita să-ți iei prosopul',
\t\t\t'shortcutsof'     : 'Scurtăturile sunt dezactivate',
\t\t\t'dropFiles'       : 'Dă drumul fișierelor aici',
\t\t\t'or'              : 'sau',
\t\t\t'selectForUpload' : 'Alege fișiere pentru a le urca',
\t\t\t'moveFiles'       : 'Mută fișiere',
\t\t\t'copyFiles'       : 'Copiază fișiere',
\t\t\t'rmFromPlaces'    : 'Șterge din locuri',
\t\t\t'aspectRatio'     : 'Aspect ratio',
\t\t\t'scale'           : 'Scală',
\t\t\t'width'           : 'Lățime',
\t\t\t'height'          : 'Înălțime',
\t\t\t'resize'          : 'Redimensionează',
\t\t\t'crop'            : 'Decupează',
\t\t\t'rotate'          : 'Rotește',
\t\t\t'rotate-cw'       : 'Rotește cu 90° în sensul ceasului',
\t\t\t'rotate-ccw'      : 'Rotește cu 90° în sensul invers ceasului',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Încarcă volum din rețea', // added 18.04.2012
\t\t\t'protocol'            : 'Protocol', // added 18.04.2012
\t\t\t'host'                : 'Gazdă', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'Utilizator', // added 18.04.2012
\t\t\t'pass'                : 'Parolă', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Vrei să elimini volumul \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Drag&drop sau lipește din browser', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Drag&drop sau lipește fișiere aici', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Encodare', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Locale',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Țintă: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Caută după tipul MIME', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Owner', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Group', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Other', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Execute', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Permission', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Mod', // from v2.1 added 20.6.2015

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Necunoscut',
\t\t\t'kindFolder'      : 'Dosar',
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Alias stricat',
\t\t\t// applications
\t\t\t'kindApp'         : 'Aplicație',
\t\t\t'kindPostscript'  : 'Document Postscript',
\t\t\t'kindMsOffice'    : 'Document Microsoft Office',
\t\t\t'kindMsWord'      : 'Document Microsoft Word',
\t\t\t'kindMsExcel'     : 'Document Microsoft Excel',
\t\t\t'kindMsPP'        : 'Prezentare Microsoft Powerpoint',
\t\t\t'kindOO'          : 'Document Open Office',
\t\t\t'kindAppFlash'    : 'Aplicație Flash',
\t\t\t'kindPDF'         : 'Document Portabil (PDF)',
\t\t\t'kindTorrent'     : 'Fișier Bittorrent',
\t\t\t'kind7z'          : 'Arhivă 7z',
\t\t\t'kindTAR'         : 'Arhivă TAR',
\t\t\t'kindGZIP'        : 'Arhivă GZIP',
\t\t\t'kindBZIP'        : 'Arhivă BZIP',
\t\t\t'kindXZ'          : 'Arhivă XZ',
\t\t\t'kindZIP'         : 'Arhivă ZIP',
\t\t\t'kindRAR'         : 'Arhivă RAR',
\t\t\t'kindJAR'         : 'Fișier Java JAR',
\t\t\t'kindTTF'         : 'Font True Type',
\t\t\t'kindOTF'         : 'Font Open Type',
\t\t\t'kindRPM'         : 'Pachet RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Document text',
\t\t\t'kindTextPlain'   : 'Text simplu',
\t\t\t'kindPHP'         : 'Sursă PHP',
\t\t\t'kindCSS'         : 'Fișier de stil (CSS)',
\t\t\t'kindHTML'        : 'Document HTML',
\t\t\t'kindJS'          : 'Sursă Javascript',
\t\t\t'kindRTF'         : 'Text formatat (rich text)',
\t\t\t'kindC'           : 'Sursă C',
\t\t\t'kindCHeader'     : 'Sursă C header',
\t\t\t'kindCPP'         : 'Sursă C++',
\t\t\t'kindCPPHeader'   : 'Sursă C++ header',
\t\t\t'kindShell'       : 'Script terminal Unix',
\t\t\t'kindPython'      : 'Sursă Python',
\t\t\t'kindJava'        : 'Sursă Java',
\t\t\t'kindRuby'        : 'Sursă Ruby',
\t\t\t'kindPerl'        : 'Script Perl',
\t\t\t'kindSQL'         : 'Sursă SQL',
\t\t\t'kindXML'         : 'Document XML',
\t\t\t'kindAWK'         : 'Sursă AWK',
\t\t\t'kindCSV'         : 'Valori separate de virgulă (CSV)',
\t\t\t'kindDOCBOOK'     : 'Document Docbook XML',
\t\t\t'kindMarkdown'    : 'Text Markdown', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Imagine',
\t\t\t'kindBMP'         : 'Imagine BMP',
\t\t\t'kindJPEG'        : 'Imagine JPEG',
\t\t\t'kindGIF'         : 'Imagine GIF',
\t\t\t'kindPNG'         : 'Imagine PNG',
\t\t\t'kindTIFF'        : 'Imagine TIFF',
\t\t\t'kindTGA'         : 'Imagine TGA',
\t\t\t'kindPSD'         : 'Imagine Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Imagine X bitmap',
\t\t\t'kindPXM'         : 'Imagine Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Audio',
\t\t\t'kindAudioMPEG'   : 'Audio MPEG',
\t\t\t'kindAudioMPEG4'  : 'Audio MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Audio MIDI',
\t\t\t'kindAudioOGG'    : 'Audio Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Audio WAV',
\t\t\t'AudioPlaylist'   : 'Playlist MP3',
\t\t\t'kindVideo'       : 'Video',
\t\t\t'kindVideoDV'     : 'Video DV',
\t\t\t'kindVideoMPEG'   : 'Video MPEG',
\t\t\t'kindVideoMPEG4'  : 'Video MPEG-4',
\t\t\t'kindVideoAVI'    : 'Video AVI',
\t\t\t'kindVideoMOV'    : 'Video Quick Time',
\t\t\t'kindVideoWM'     : 'Video Windows Media',
\t\t\t'kindVideoFlash'  : 'Video Flash',
\t\t\t'kindVideoMKV'    : 'Video Matroska',
\t\t\t'kindVideoOGG'    : 'Video Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ro.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ro.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ro.js");
    }
}
