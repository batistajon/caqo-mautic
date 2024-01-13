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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ca.js */
class __TwigTemplate_a38a5860ebf8f94d5cc09d07d049e7de24c1fd67cbe2f0792b9b55e06b1c9900 extends Template
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
 * Catalan translation
 * @author Sergio Jovani <lesergi@gmail.com>
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
\telFinder.prototype.i18.ca = {
\t\ttranslator : 'Sergio Jovani &lt;lesergi@gmail.com&gt;',
\t\tlanguage   : 'Català',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'M d, Y h:i A', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 h:i A', // will produce smth like: Today 12:25 PM
\t\tmessages   : {
\t\t\t
\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Error',
\t\t\t'errUnknown'           : 'Error desconegut.',
\t\t\t'errUnknownCmd'        : 'Ordre desconeguda.',
\t\t\t'errJqui'              : 'La configuració de jQuery UI no és vàlida. S\\'han d\\'incloure els components \"selectable\", \"draggable\" i \"droppable\".',
\t\t\t'errNode'              : 'elFinder necessita crear elements DOM.',
\t\t\t'errURL'               : 'La configuració de l\\'elFinder no és vàlida! L\\'opció URL no està configurada.',
\t\t\t'errAccess'            : 'Accés denegat.',
\t\t\t'errConnect'           : 'No s\\'ha pogut connectar amb el rerefons.',
\t\t\t'errAbort'             : 'S\\'ha interromput la connexió.',
\t\t\t'errTimeout'           : 'Temps de connexió excedit.',
\t\t\t'errNotFound'          : 'No s\\'ha trobat el rerefons.',
\t\t\t'errResponse'          : 'La resposta del rerefons no és vàlida.',
\t\t\t'errConf'              : 'La configuració del rerefons no és vàlida.',
\t\t\t'errJSON'              : 'No està instal·lat el mòdul JSON del PHP.',
\t\t\t'errNoVolumes'         : 'No s\\'han trobat volums llegibles.',
\t\t\t'errCmdParams'         : 'Els paràmetres per l\\'ordre \"\$1\" no són vàlids.',
\t\t\t'errDataNotJSON'       : 'Les dades no són JSON.',
\t\t\t'errDataEmpty'         : 'Les dades estan buides.',
\t\t\t'errCmdReq'            : 'La sol·licitud del rerefons necessita el nom de l\\'ordre.',
\t\t\t'errOpen'              : 'No s\\'ha pogut obrir \"\$1\".',
\t\t\t'errNotFolder'         : 'L\\'objecte no és una carpeta.',
\t\t\t'errNotFile'           : 'L\\'objecte no és un fitxer.',
\t\t\t'errRead'              : 'No s\\'ha pogut llegir \"\$1\".',
\t\t\t'errWrite'             : 'No s\\'ha pogut escriure a \"\$1\".',
\t\t\t'errPerm'              : 'Permís denegat.',
\t\t\t'errLocked'            : '\"\$1\" està bloquejat i no podeu canviar-li el nom, moure-lo ni suprimir-lo.',
\t\t\t'errExists'            : 'Ja existeix un fitxer anomenat \"\$1\".',
\t\t\t'errInvName'           : 'El nom de fitxer no és vàlid.',
\t\t\t'errFolderNotFound'    : 'No s\\'ha trobat la carpeta.',
\t\t\t'errFileNotFound'      : 'No s\\'ha trobat el fitxer.',
\t\t\t'errTrgFolderNotFound' : 'No s\\'ha trobat la carpeta de destí \"\$1\".',
\t\t\t'errPopup'             : 'El navegador ha evitat obrir una finestra emergent. Autoritzeu-la per obrir el fitxer.',
\t\t\t'errMkdir'             : 'No s\\'ha pogut crear la carpeta \"\$1\".',
\t\t\t'errMkfile'            : 'No s\\'ha pogut crear el fitxer \"\$1\".',
\t\t\t'errRename'            : 'No s\\'ha pogut canviar el nom de \"\$1\".',
\t\t\t'errCopyFrom'          : 'No està permès copiar fitxers des del volum \"\$1\".',
\t\t\t'errCopyTo'            : 'No està permès copiar fitxers al volum \"\$1\".',
\t\t\t'errUpload'            : 'S\\'ha produït un error en la càrrega.',
\t\t\t'errUploadFile'        : 'No s\\'ha pogut carregar \"\$1\".',
\t\t\t'errUploadNoFiles'     : 'No s\\'han trobat fitxers per carregar.',
\t\t\t'errUploadTotalSize'   : 'Les dades excedeixen la mida màxima permesa.',
\t\t\t'errUploadFileSize'    : 'El fitxer excedeix la mida màxima permesa.',
\t\t\t'errUploadMime'        : 'El tipus de fitxer no està permès.',
\t\t\t'errUploadTransfer'    : 'S\\'ha produït un error en transferir \"\$1\".', 
\t\t\t'errNotReplace'        : 'Object \"\$1\" already exists at this location and can not be replaced by object with another type.',
\t\t\t'errReplace'           : 'Unable to replace \"\$1\".',
\t\t\t'errSave'              : 'No s\\'ha pogut desar \"\$1\".',
\t\t\t'errCopy'              : 'No s\\'ha pogut copiar \"\$1\".',
\t\t\t'errMove'              : 'No s\\'ha pogut moure \"\$1\".',
\t\t\t'errCopyInItself'      : 'No s\\'ha pogut copiar \"\$1\" a si mateix.',
\t\t\t'errRm'                : 'No s\\'ha pogut suprimir \"\$1\".',
\t\t\t'errRmSrc'             : 'Unable remove source file(s).',
\t\t\t'errExtract'           : 'No s\\'han pogut extreure els fitxers de \"\$1\".',
\t\t\t'errArchive'           : 'No s\\'ha pogut crear l\\'arxiu.',
\t\t\t'errArcType'           : 'El tipus d\\'arxiu no està suportat.',
\t\t\t'errNoArchive'         : 'El fitxer no és un arxiu o és un tipus no suportat.',
\t\t\t'errCmdNoSupport'      : 'El rerefons no suporta aquesta ordre.',
\t\t\t'errReplByChild'       : 'No es pot reemplaçar la carpeta “\$1” per un element que conté.',
\t\t\t'errArcSymlinks'       : 'Per raons de seguretat, no es permet extreure arxius que contenen enllaços simbòlics.',
\t\t\t'errArcMaxSize'        : 'Els fitxers de l\\'arxiu excedeixen la mida màxima permesa.',
\t\t\t'errResize'            : 'No s\\'ha pogut redimensionar \"\$1\".',
\t\t\t'errResizeDegree' : 'Invalid rotate degree.',
\t\t\t'errResizeRotate' : 'Unable to rotate image.',
\t\t\t'errResizeSize' : 'Invalid image size.',
\t\t\t'errResizeNoChange' : 'Image size not changed.',
\t\t\t'errUsupportType'      : 'El tipus de fitxer no està suportat.',
\t\t\t'errNotUTF8Content' : 'File \"\$1\" is not in UTF-8 and cannot be edited.',
\t\t\t'errNetMount' : 'Unable to mount \"\$1\".',
\t\t\t'errNetMountNoDriver' : 'Unsupported protocol.',
\t\t\t'errNetMountFailed' : 'Mount failed.',
\t\t\t'errNetMountHostReq' : 'Host required.',
\t\t\t'errSessionExpires' : 'Your session has expired due to inactivity.',
\t\t\t'errCreatingTempDir' : 'Unable to create temporary directory: \"\$1\"',
\t\t\t'errFtpDownloadFile' : 'Unable to download file from FTP: \"\$1\"',
\t\t\t'errFtpUploadFile' : 'Unable to upload file to FTP: \"\$1\"',
\t\t\t'errFtpMkdir' : 'Unable to create remote directory on FTP: \"\$1\"',
\t\t\t'errArchiveExec' : 'Error while archiving files: \"\$1\"',
\t\t\t'errExtractExec' : 'Error while extracting files: \"\$1\"',
\t\t\t
\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Crea arxiu',
\t\t\t'cmdback'      : 'Enrere',
\t\t\t'cmdcopy'      : 'Copia',
\t\t\t'cmdcut'       : 'Retalla',
\t\t\t'cmddownload'  : 'Descarrega',
\t\t\t'cmdduplicate' : 'Duplica',
\t\t\t'cmdedit'      : 'Edita el fitxer',
\t\t\t'cmdextract'   : 'Extreu els fitxers de l\\'arxiu',
\t\t\t'cmdforward'   : 'Endavant',
\t\t\t'cmdgetfile'   : 'Selecciona els fitxers',
\t\t\t'cmdhelp'      : 'Quant a aquest programari',
\t\t\t'cmdhome'      : 'Inici',
\t\t\t'cmdinfo'      : 'Obté informació',
\t\t\t'cmdmkdir'     : 'Nova carpeta',
\t\t\t'cmdmkfile'    : 'Nou fitxer',
\t\t\t'cmdopen'      : 'Obre',
\t\t\t'cmdpaste'     : 'Enganxa',
\t\t\t'cmdquicklook' : 'Previsualitza',
\t\t\t'cmdreload'    : 'Torna a carregar',
\t\t\t'cmdrename'    : 'Canvia el nom',
\t\t\t'cmdrm'        : 'Suprimeix',
\t\t\t'cmdsearch'    : 'Cerca fitxers',
\t\t\t'cmdup'        : 'Vés al directori superior',
\t\t\t'cmdupload'    : 'Carrega fitxers',
\t\t\t'cmdview'      : 'Visualitza',
\t\t\t'cmdresize'    : 'Redimensiona la imatge',
\t\t\t'cmdsort'      : 'Ordena',
\t\t\t'cmdnetmount'  : 'Mount network volume',
\t\t\t
\t\t\t/*********************************** buttons ***********************************/ 
\t\t\t'btnClose'  : 'Tanca',
\t\t\t'btnSave'   : 'Desa',
\t\t\t'btnRm'     : 'Suprimeix',
\t\t\t'btnApply'  : 'Aplica',
\t\t\t'btnCancel' : 'Cancel·la',
\t\t\t'btnNo'     : 'No',
\t\t\t'btnYes'    : 'Sí',
\t\t\t'btnMount'  : 'Mount',
\t\t\t
\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'S\\'està obrint la carpeta',
\t\t\t'ntffile'     : 'S\\'està obrint el fitxer',
\t\t\t'ntfreload'   : 'S\\'està tornant a carregar el contingut de la carpeta',
\t\t\t'ntfmkdir'    : 'S\\'està creant el directori',
\t\t\t'ntfmkfile'   : 'S\\'estan creant el fitxers',
\t\t\t'ntfrm'       : 'S\\'estan suprimint els fitxers',
\t\t\t'ntfcopy'     : 'S\\'estan copiant els fitxers',
\t\t\t'ntfmove'     : 'S\\'estan movent els fitxers',
\t\t\t'ntfprepare'  : 'S\\'està preparant per copiar fitxers',
\t\t\t'ntfrename'   : 'S\\'estan canviant els noms del fitxers',
\t\t\t'ntfupload'   : 'S\\'estan carregant els fitxers',
\t\t\t'ntfdownload' : 'S\\'estan descarregant els fitxers',
\t\t\t'ntfsave'     : 'S\\'estan desant els fitxers',
\t\t\t'ntfarchive'  : 'S\\'està creant l\\'arxiu',
\t\t\t'ntfextract'  : 'S\\'estan extreient els fitxers de l\\'arxiu',
\t\t\t'ntfsearch'   : 'S\\'estan cercant els fitxers',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'S\\'estan realitzant operacions',
\t\t\t'ntfloadimg'  : 'S\\'està carregant la imatge',
\t\t\t'ntfnetmount' : 'Mounting network volume',
\t\t\t'ntfdim'      : 'Acquiring image dimension',
\t\t\t
\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'desconegut',
\t\t\t'Today'       : 'Avui',
\t\t\t'Yesterday'   : 'Ahir',
\t\t\t'msJan'       : 'gen.',
\t\t\t'msFeb'       : 'febr.',
\t\t\t'msMar'       : 'març',
\t\t\t'msApr'       : 'abr.',
\t\t\t'msMay'       : 'maig',
\t\t\t'msJun'       : 'juny',
\t\t\t'msJul'       : 'jul.',
\t\t\t'msAug'       : 'ag.',
\t\t\t'msSep'       : 'set.',
\t\t\t'msOct'       : 'oct.',
\t\t\t'msNov'       : 'nov.',
\t\t\t'msDec'       : 'des.',
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
\t\t\t
\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'per nom', 
\t\t\t'sortkind'          : 'per tipus', 
\t\t\t'sortsize'          : 'per mida',
\t\t\t'sortdate'          : 'per data',
\t\t\t'sortFoldersFirst' : 'Folders first',
\t\t\t
\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Es necessita confirmació',
\t\t\t'confirmRm'       : 'Voleu suprimir els fitxers?<br />L\\'acció es podrà desfer!',
\t\t\t'confirmRepl'     : 'Voleu reemplaçar el fitxer antic amb el nou?',
\t\t\t'apllyAll'        : 'Aplica a tot',
\t\t\t'name'            : 'Nom',
\t\t\t'size'            : 'Mida',
\t\t\t'perms'           : 'Permisos',
\t\t\t'modify'          : 'Modificat',
\t\t\t'kind'            : 'Tipus',
\t\t\t'read'            : 'llegir',
\t\t\t'write'           : 'escriure',
\t\t\t'noaccess'        : 'sense accés',
\t\t\t'and'             : 'i',
\t\t\t'unknown'         : 'desconegut',
\t\t\t'selectall'       : 'Selecciona tots els fitxers',
\t\t\t'selectfiles'     : 'Selecciona el(s) fitxer(s)',
\t\t\t'selectffile'     : 'Selecciona el primer fitxer',
\t\t\t'selectlfile'     : 'Selecciona l\\'últim fitxer',
\t\t\t'viewlist'        : 'Vista en llista',
\t\t\t'viewicons'       : 'Vista en icones',
\t\t\t'places'          : 'Llocs',
\t\t\t'calc'            : 'Calcula', 
\t\t\t'path'            : 'Camí',
\t\t\t'aliasfor'        : 'Àlies per',
\t\t\t'locked'          : 'Bloquejat',
\t\t\t'dim'             : 'Dimensions',
\t\t\t'files'           : 'Fitxers',
\t\t\t'folders'         : 'Carpetes',
\t\t\t'items'           : 'Elements',
\t\t\t'yes'             : 'sí',
\t\t\t'no'              : 'no',
\t\t\t'link'            : 'Enllaç',
\t\t\t'searcresult'     : 'Resultats de la cerca',  
\t\t\t'selected'        : 'Elements seleccionats',
\t\t\t'about'           : 'Quant a',
\t\t\t'shortcuts'       : 'Dreceres',
\t\t\t'help'            : 'Ajuda',
\t\t\t'webfm'           : 'Gestor de fitxers web',
\t\t\t'ver'             : 'Versió',
\t\t\t'protocolver'     : 'versió de protocol',
\t\t\t'homepage'        : 'Pàgina del projecte',
\t\t\t'docs'            : 'Documentació',
\t\t\t'github'          : 'Bifurca\\'ns a GitHub',
\t\t\t'twitter'         : 'Segueix-nos a Twitter',
\t\t\t'facebook'        : 'Uniu-vos a Facebook',
\t\t\t'team'            : 'Equip',
\t\t\t'chiefdev'        : 'cap desenvolupador',
\t\t\t'developer'       : 'desenvolupador',
\t\t\t'contributor'     : 'col·laborador',
\t\t\t'maintainer'      : 'mantenidor',
\t\t\t'translator'      : 'traductor',
\t\t\t'icons'           : 'Icones',
\t\t\t'dontforget'      : 'i no oblideu agafar la vostra tovallola',
\t\t\t'shortcutsof'     : 'Les dreceres estan inhabilitades',
\t\t\t'dropFiles'       : 'Arrossegueu els fitxers aquí',
\t\t\t'or'              : 'o',
\t\t\t'selectForUpload' : 'Seleccioneu els fitxer a carregar',
\t\t\t'moveFiles'       : 'Mou els fitxers',
\t\t\t'copyFiles'       : 'Copia els fitxers',
\t\t\t'rmFromPlaces'    : 'Suprimeix dels llocs',
\t\t\t'aspectRatio'     : 'Relació d\\'aspecte',
\t\t\t'scale'           : 'Escala',
\t\t\t'width'           : 'Amplada',
\t\t\t'height'          : 'Alçada',
\t\t\t'resize'          : 'Redimensiona',
\t\t\t'crop'            : 'Retalla',
\t\t\t'rotate'          : 'Rotate',
\t\t\t'rotate-cw'       : 'Rotate 90 degrees CW',
\t\t\t'rotate-ccw'      : 'Rotate 90 degrees CCW',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Mount network volume',
\t\t\t'protocol'        : 'Protocol',
\t\t\t'host'            : 'Host',
\t\t\t'port'            : 'Port',
\t\t\t'user'            : 'User',
\t\t\t'pass'            : 'Password',
\t\t\t
\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Desconegut',
\t\t\t'kindFolder'      : 'Carpeta',
\t\t\t'kindAlias'       : 'Àlies',
\t\t\t'kindAliasBroken' : 'Àlies no vàlid',
\t\t\t// applications
\t\t\t'kindApp'         : 'Aplicació',
\t\t\t'kindPostscript'  : 'Document Postscript',
\t\t\t'kindMsOffice'    : 'Document del Microsoft Office',
\t\t\t'kindMsWord'      : 'Document del Microsoft Word',
\t\t\t'kindMsExcel'     : 'Document del Microsoft Excel',
\t\t\t'kindMsPP'        : 'Presentació del Microsoft Powerpoint',
\t\t\t'kindOO'          : 'Document de l\\'Open Office',
\t\t\t'kindAppFlash'    : 'Aplicació Flash',
\t\t\t'kindPDF'         : 'Document PDF',
\t\t\t'kindTorrent'     : 'Fitxer Bittorrent',
\t\t\t'kind7z'          : 'Arxiu 7z',
\t\t\t'kindTAR'         : 'Arxiu TAR',
\t\t\t'kindGZIP'        : 'Arxiu GZIP',
\t\t\t'kindBZIP'        : 'Arxiu BZIP',
\t\t\t'kindXZ'          : 'Arxiu XZ',
\t\t\t'kindZIP'         : 'Arxiu ZIP',
\t\t\t'kindRAR'         : 'Arxiu RAR',
\t\t\t'kindJAR'         : 'Fitxer JAR de Java',
\t\t\t'kindTTF'         : 'Tipus de lletra True Type',
\t\t\t'kindOTF'         : 'Tipus de lletra Open Type',
\t\t\t'kindRPM'         : 'Paquet RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Document de text',
\t\t\t'kindTextPlain'   : 'Document de text net',
\t\t\t'kindPHP'         : 'Codi PHP',
\t\t\t'kindCSS'         : 'Full d\\'estils CSS',
\t\t\t'kindHTML'        : 'Document HTML',
\t\t\t'kindJS'          : 'Codi Javascript',
\t\t\t'kindRTF'         : 'Document RTF',
\t\t\t'kindC'           : 'Codi C',
\t\t\t'kindCHeader'     : 'Codi de caçalera C',
\t\t\t'kindCPP'         : 'Codi C++',
\t\t\t'kindCPPHeader'   : 'Codi de caçalera C++',
\t\t\t'kindShell'       : 'Script Unix',
\t\t\t'kindPython'      : 'Codi Python',
\t\t\t'kindJava'        : 'Codi Java',
\t\t\t'kindRuby'        : 'Codi Ruby',
\t\t\t'kindPerl'        : 'Script Perl',
\t\t\t'kindSQL'         : 'Codi SQL',
\t\t\t'kindXML'         : 'Document XML',
\t\t\t'kindAWK'         : 'Codi AWK',
\t\t\t'kindCSV'         : 'Document CSV',
\t\t\t'kindDOCBOOK'     : 'Document XML de Docbook',
\t\t\t// images
\t\t\t'kindImage'       : 'Imatge',
\t\t\t'kindBMP'         : 'Imatge BMP',
\t\t\t'kindJPEG'        : 'Imatge JPEG',
\t\t\t'kindGIF'         : 'Imatge GIF',
\t\t\t'kindPNG'         : 'Imatge PNG',
\t\t\t'kindTIFF'        : 'Imatge TIFF',
\t\t\t'kindTGA'         : 'Imatge TGA',
\t\t\t'kindPSD'         : 'Imatge Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Imatge X bitmap',
\t\t\t'kindPXM'         : 'Imatge Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Fitxer d\\'àudio',
\t\t\t'kindAudioMPEG'   : 'Fitxer d\\'àudio MPEG',
\t\t\t'kindAudioMPEG4'  : 'Fitxer d\\'àudio MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Fitxer d\\'àudio MIDI',
\t\t\t'kindAudioOGG'    : 'Fitxer d\\'àudio Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Fitxer d\\'àudio WAV',
\t\t\t'AudioPlaylist'   : 'Llista de reproducció MP3',
\t\t\t'kindVideo'       : 'Fitxer de vídeo',
\t\t\t'kindVideoDV'     : 'Fitxer de vídeo DV',
\t\t\t'kindVideoMPEG'   : 'Fitxer de vídeo MPEG',
\t\t\t'kindVideoMPEG4'  : 'Fitxer de vídeo MPEG-4',
\t\t\t'kindVideoAVI'    : 'Fitxer de vídeo AVI',
\t\t\t'kindVideoMOV'    : 'Fitxer de vídeo Quick Time',
\t\t\t'kindVideoWM'     : 'Fitxer de vídeo Windows Media',
\t\t\t'kindVideoFlash'  : 'Fitxer de vídeo Flash',
\t\t\t'kindVideoMKV'    : 'Fitxer de vídeo Matroska',
\t\t\t'kindVideoOGG'    : 'Fitxer de vídeo Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ca.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ca.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ca.js");
    }
}
