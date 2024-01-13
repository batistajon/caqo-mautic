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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.it.js */
class __TwigTemplate_a447a6e8ccae3c27c38830fc3538740aa1b071dbf75827a574160aeaee27b49d extends Template
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
 * Italiano translation
 * @author Alberto Tocci (alberto.tocci@gmail.com)
 * @author Claudio Nicora (coolsoft.ita@gmail.com)
 * @author Stefano Galeazzi <stefano.galeazzi@probanet.it>
 * @author Thomas Camaran <camaran@gmail.com>
 * @version 2018-06-08
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
\telFinder.prototype.i18.it = {
\t\ttranslator : 'Alberto Tocci (alberto.tocci@gmail.com), Claudio Nicora (coolsoft.ita@gmail.com), Stefano Galeazzi &lt;stefano.galeazzi@probanet.it&gt;, Thomas Camaran &lt;camaran@gmail.com&gt;',
\t\tlanguage   : 'Italiano',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd/m/Y H:i', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 H:i', // will produce smth like: Today 12:25 PM
\t\tnonameDateFormat : 'ymd-His', // to apply if upload file is noname: 120513172700
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Errore',
\t\t\t'errUnknown'           : 'Errore sconosciuto.',
\t\t\t'errUnknownCmd'        : 'Comando sconosciuto.',
\t\t\t'errJqui'              : 'Configurazione JQuery UI non valida. Devono essere inclusi i plugin Selectable, Draggable e Droppable.',
\t\t\t'errNode'              : 'elFinder necessita dell\\'elemento DOM per essere inizializzato.',
\t\t\t'errURL'               : 'Configurazione non valida.Il parametro URL non è settato.',
\t\t\t'errAccess'            : 'Accesso negato.',
\t\t\t'errConnect'           : 'Impossibile collegarsi al backend.',
\t\t\t'errAbort'             : 'Connessione annullata.',
\t\t\t'errTimeout'           : 'Timeout di connessione.',
\t\t\t'errNotFound'          : 'Backend non trovato.',
\t\t\t'errResponse'          : 'Risposta non valida dal backend.',
\t\t\t'errConf'              : 'Configurazione backend non valida.',
\t\t\t'errJSON'              : 'Modulo PHP JSON non installato.',
\t\t\t'errNoVolumes'         : 'Non è stato possibile leggere i volumi.',
\t\t\t'errCmdParams'         : 'Parametri non validi per il comando \"\$1\".',
\t\t\t'errDataNotJSON'       : 'I dati non sono nel formato JSON.',
\t\t\t'errDataEmpty'         : 'Stringa vuota.',
\t\t\t'errCmdReq'            : 'La richiesta al backend richiede il nome del comando.',
\t\t\t'errOpen'              : 'Impossibile aprire \"\$1\".',
\t\t\t'errNotFolder'         : 'L\\'oggetto non è una cartella..',
\t\t\t'errNotFile'           : 'L\\'oggetto non è un file.',
\t\t\t'errRead'              : 'Impossibile leggere \"\$1\".',
\t\t\t'errWrite'             : 'Non è possibile scrivere in \"\$1\".',
\t\t\t'errPerm'              : 'Permesso negato.',
\t\t\t'errLocked'            : '\"\$1\" è bloccato e non può essere rinominato, spostato o eliminato.',
\t\t\t'errExists'            : 'Il file \"\$1\" è già esistente.',
\t\t\t'errInvName'           : 'Nome file non valido.',
\t\t\t'errInvDirname'        : 'Nome cartella non valido.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Cartella non trovata.',
\t\t\t'errFileNotFound'      : 'File non trovato.',
\t\t\t'errTrgFolderNotFound' : 'La cartella di destinazione\"\$1\" non è stata trovata.',
\t\t\t'errPopup'             : 'Il tuo Browser non consente di aprire finestre di pop-up. Per aprire il file abilita questa opzione nelle impostazioni del tuo Browser.',
\t\t\t'errMkdir'             : 'Impossibile creare la cartella \"\$1\".',
\t\t\t'errMkfile'            : 'Impossibile creare il file \"\$1\".',
\t\t\t'errRename'            : 'Impossibile rinominare \"\$1\".',
\t\t\t'errCopyFrom'          : 'Non è possibile copiare file da \"\$1\".',
\t\t\t'errCopyTo'            : 'Non è possibile copiare file in \"\$1\".',
\t\t\t'errMkOutLink'         : 'Impossibile creare un link all\\'esterno della radice del volume.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Errore di Caricamento.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Impossibile Caricare \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Non sono stati specificati file da caricare.',
\t\t\t'errUploadTotalSize'   : 'La dimensione totale dei file supera il limite massimo consentito.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Le dimensioni del file superano il massimo consentito.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'FileType non consentito.',
\t\t\t'errUploadTransfer'    : 'Trasferimento errato del file \"\$1\".',
\t\t\t'errUploadTemp'        : 'Impossibile creare il file temporaneo per l\\'upload.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'L\\'oggetto \"\$1\" esiste già in questa cartella e non può essere sostituito con un oggetto di un tipo differente.', // new
\t\t\t'errReplace'           : 'Impossibile sostituire \"\$1\".',
\t\t\t'errSave'              : 'Impossibile salvare \"\$1\".',
\t\t\t'errCopy'              : 'Impossibile copiare \"\$1\".',
\t\t\t'errMove'              : 'Impossibile spostare \"\$1\".',
\t\t\t'errCopyInItself'      : 'Sorgente e destinazione risultato essere uguali.',
\t\t\t'errRm'                : 'Impossibile rimuovere \"\$1\".',
\t\t\t'errTrash'             : 'Impossibile cestinare.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Impossibile eliminare i file origine.',
\t\t\t'errExtract'           : 'Impossibile estrarre file da \"\$1\".',
\t\t\t'errArchive'           : 'Impossibile creare archivio.',
\t\t\t'errArcType'           : 'Tipo di archivio non supportato.',
\t\t\t'errNoArchive'         : 'Il file non è un archivio o contiene file non supportati.',
\t\t\t'errCmdNoSupport'      : 'Il Backend non supporta questo comando.',
\t\t\t'errReplByChild'       : 'La cartella \$1 non può essere sostituita da un oggetto in essa contenuto.',
\t\t\t'errArcSymlinks'       : 'Per questioni di sicurezza non è possibile estrarre archivi che contengono collegamenti..', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'La dimensione dell\\'archivio supera le massime dimensioni consentite.',
\t\t\t'errResize'            : 'Impossibile ridimensionare \"\$1\".',
\t\t\t'errResizeDegree'      : 'Angolo di rotazione non valido.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Impossibile ruotare l\\'immagine.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Dimensione dell\\'immagine non valida.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Dimensione dell\\'immagine non modificata.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Tipo di file non supportato.',
\t\t\t'errNotUTF8Content'    : 'Il file \"\$1\" non è nel formato UTF-8 e non può essere modificato.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Impossibile montare \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Protocollo non supportato.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Mount fallito.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Host richiesto.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'La sessione è scaduta a causa di inattività.',
\t\t\t'errCreatingTempDir'   : 'Impossibile creare la cartella temporanea: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Impossibile scaricare il file tramite FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Impossibile caricare il file tramite FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Impossibile creare la cartella remota tramite FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Errore durante l\\'archiviazione dei file: \"\$1\"',
\t\t\t'errExtractExec'       : 'Errore durante l\\'estrazione dei file: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Impossibile smontare', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Non convertibile nel formato UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Per uploadare l0intera cartella usare Google Chrome.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Timeout durante la ricerca di \"\$1\". I risultati della ricerca sono parziali.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'E\\' necessaria la riautorizzazione.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Il numero massimo di oggetti selezionabili è \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Impossibile ripristinare dal cestino: destinazione di ripristino non trovata.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Impossibile trovare un editor per questo tipo di file.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Si è verificato un errore lato server.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Impossibile svuotare la cartella \"\$1\".', // from v2.1.25 added 22.6.2017

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Crea archivio',
\t\t\t'cmdback'      : 'Indietro',
\t\t\t'cmdcopy'      : 'Copia',
\t\t\t'cmdcut'       : 'Taglia',
\t\t\t'cmddownload'  : 'Scarica',
\t\t\t'cmdduplicate' : 'Duplica',
\t\t\t'cmdedit'      : 'Modifica File',
\t\t\t'cmdextract'   : 'Estrai Archivio',
\t\t\t'cmdforward'   : 'Avanti',
\t\t\t'cmdgetfile'   : 'Seleziona File',
\t\t\t'cmdhelp'      : 'Informazioni su...',
\t\t\t'cmdhome'      : 'Home',
\t\t\t'cmdinfo'      : 'Informazioni',
\t\t\t'cmdmkdir'     : 'Nuova cartella',
\t\t\t'cmdmkdirin'   : 'In una nuova cartella', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Nuovo file',
\t\t\t'cmdopen'      : 'Apri',
\t\t\t'cmdpaste'     : 'Incolla',
\t\t\t'cmdquicklook' : 'Anteprima',
\t\t\t'cmdreload'    : 'Ricarica',
\t\t\t'cmdrename'    : 'Rinomina',
\t\t\t'cmdrm'        : 'Elimina',
\t\t\t'cmdtrash'     : 'Nel cestino', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Ripristina', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Ricerca file',
\t\t\t'cmdup'        : 'Vai alla directory padre',
\t\t\t'cmdupload'    : 'Carica File',
\t\t\t'cmdview'      : 'Visualizza',
\t\t\t'cmdresize'    : 'Ridimensiona Immagine',
\t\t\t'cmdsort'      : 'Ordina',
\t\t\t'cmdnetmount'  : 'Monta disco di rete', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Smonta', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Aggiungi ad Accesso rapido', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Cambia modalità', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Apri una cartella', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Reimposta dimensione colonne', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Schermo intero', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Sposta', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Svuota la cartella', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Annulla', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Ripeti', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Preferenze', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Seleziona tutto', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Annulla selezione', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Inverti selezione', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Apri in una nuova finestra', // from v2.1.38 added 3.4.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Chiudi',
\t\t\t'btnSave'   : 'Salva',
\t\t\t'btnRm'     : 'Elimina',
\t\t\t'btnApply'  : 'Applica',
\t\t\t'btnCancel' : 'Annulla',
\t\t\t'btnNo'     : 'No',
\t\t\t'btnYes'    : 'Sì',
\t\t\t'btnMount'  : 'Monta',  // added 18.04.2012
\t\t\t'btnApprove': 'Vai a \$1 & approva', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Smonta', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Converti', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Qui',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Disco',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Tutti',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'Tipo MIME', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Nome file',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Salva & Chiudi', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Backup', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Rinomina',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Rinomina (tutto)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Indietro (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Avanti (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Salva come', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Apri cartella',
\t\t\t'ntffile'     : 'Apri file',
\t\t\t'ntfreload'   : 'Ricarica il contenuto della cartella',
\t\t\t'ntfmkdir'    : 'Creazione delle directory in corso',
\t\t\t'ntfmkfile'   : 'Creazione dei files in corso',
\t\t\t'ntfrm'       : 'Eliminazione dei files in corso',
\t\t\t'ntfcopy'     : 'Copia file in corso',
\t\t\t'ntfmove'     : 'Spostamento file in corso',
\t\t\t'ntfprepare'  : 'Preparazione della copia dei file.',
\t\t\t'ntfrename'   : 'Sto rinominando i file',
\t\t\t'ntfupload'   : 'Caricamento file in corso',
\t\t\t'ntfdownload' : 'Downloading file in corso',
\t\t\t'ntfsave'     : 'Salvataggio file in corso',
\t\t\t'ntfarchive'  : 'Creazione archivio in corso',
\t\t\t'ntfextract'  : 'Estrazione file dall\\'archivio in corso',
\t\t\t'ntfsearch'   : 'Ricerca files in corso',
\t\t\t'ntfresize'   : 'Ridimensionamento immagini',
\t\t\t'ntfsmth'     : 'Operazione in corso. Attendere...',
\t\t\t'ntfloadimg'  : 'Caricamento immagine in corso',
\t\t\t'ntfnetmount' : 'Montaggio disco di rete', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Smontaggio disco di rete', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Lettura dimensioni immagine', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Lettura informazioni cartella', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Lettura URL del collegamento', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Modifica della modalità del file', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Verifica del nome del file caricato', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Creazione del file da scaricare', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Ottenimento informazioni percorso', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Processazione file caricato', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Spostamento nel cestino', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Ripristino dal cestino', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Controllo cartella destinazione', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Annullamento operazione precedente', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Rifacimento precedente annullamento', // from v2.1.27 added 31.07.2017

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Cestino', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'Sconosciuto',
\t\t\t'Today'       : 'Oggi',
\t\t\t'Yesterday'   : 'Ieri',
\t\t\t'msJan'       : 'Gen',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Apr',
\t\t\t'msMay'       : 'Mag',
\t\t\t'msJun'       : 'Giu',
\t\t\t'msJul'       : 'Lug',
\t\t\t'msAug'       : 'Ago',
\t\t\t'msSep'       : 'Set',
\t\t\t'msOct'       : 'Ott',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Dic',
\t\t\t'January'     : 'Gennaio',
\t\t\t'February'    : 'Febbraio',
\t\t\t'March'       : 'Marzo',
\t\t\t'April'       : 'Aprile',
\t\t\t'May'         : 'Maggio',
\t\t\t'June'        : 'Giugno',
\t\t\t'July'        : 'Luglio',
\t\t\t'August'      : 'Agosto',
\t\t\t'September'   : 'Settembre',
\t\t\t'October'     : 'Ottobre',
\t\t\t'November'    : 'Novembre',
\t\t\t'December'    : 'Dicembre',
\t\t\t'Sunday'      : 'Domenica',
\t\t\t'Monday'      : 'Lunedì',
\t\t\t'Tuesday'     : 'Martedì',
\t\t\t'Wednesday'   : 'Mercoledì',
\t\t\t'Thursday'    : 'Giovedì',
\t\t\t'Friday'      : 'Venerdì',
\t\t\t'Saturday'    : 'Sabato',
\t\t\t'Sun'         : 'Dom',
\t\t\t'Mon'         : 'Lun',
\t\t\t'Tue'         : 'Mar',
\t\t\t'Wed'         : 'Mer',
\t\t\t'Thu'         : 'Gio',
\t\t\t'Fri'         : 'Ven',
\t\t\t'Sat'         : 'Sab',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'per nome',
\t\t\t'sortkind'          : 'per tipo',
\t\t\t'sortsize'          : 'per dimensione',
\t\t\t'sortdate'          : 'per data',
\t\t\t'sortFoldersFirst'  : 'cartelle in testa',
\t\t\t'sortperm'          : 'per permessi', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'per modalità',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'per possessore',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'per gruppo',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Anche vista ad albero',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NuovoFile.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NuovaCartella',   // added 10.11.2015
\t\t\t'Archive'           : 'NuovoArchivio',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Conferma richiesta',
\t\t\t'confirmRm'       : 'Sei sicuro di voler eliminare i file?<br />L\\'operazione non è reversibile!',
\t\t\t'confirmRepl'     : 'Sostituire i file ?',
\t\t\t'confirmRest'     : 'Rimpiazza l\\'oggetto esistente con quello nel cestino?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Non in formato UTF-8<br/>Convertire in UTF-8?<br/>Il contenuto diventerà UTF-8 salvando dopo la conversione.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'La codifica caratteri di questo file non può essere determinata. Sarà temporaneamente convertito in UTF-8 per l\\'editting.<br/>Per cortesia, selezionare la codifica caratteri per il file.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Il contenuto è stato modificato.<br/>Le modifiche andranno perse se non si salveranno.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Sei sicuro di voler cestinare gli oggetti?', //from v2.1.24 added 29.4.2017
\t\t\t'apllyAll'        : 'Applica a tutti',
\t\t\t'name'            : 'Nome',
\t\t\t'size'            : 'Dimensione',
\t\t\t'perms'           : 'Permessi',
\t\t\t'modify'          : 'Modificato il',
\t\t\t'kind'            : 'Tipo',
\t\t\t'read'            : 'lettura',
\t\t\t'write'           : 'scrittura',
\t\t\t'noaccess'        : 'nessun accesso',
\t\t\t'and'             : 'e',
\t\t\t'unknown'         : 'sconosciuto',
\t\t\t'selectall'       : 'Seleziona tutti i file',
\t\t\t'selectfiles'     : 'Seleziona file',
\t\t\t'selectffile'     : 'Seleziona il primo file',
\t\t\t'selectlfile'     : 'Seleziona l\\'ultimo file',
\t\t\t'viewlist'        : 'Visualizza Elenco',
\t\t\t'viewicons'       : 'Visualizza Icone',
\t\t\t'viewSmall'       : 'Icone piccole', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Icone medie', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Icone grandi', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Icone molto grandi', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Accesso rapido',
\t\t\t'calc'            : 'Calcola',
\t\t\t'path'            : 'Percorso',
\t\t\t'aliasfor'        : 'Alias per',
\t\t\t'locked'          : 'Bloccato',
\t\t\t'dim'             : 'Dimensioni',
\t\t\t'files'           : 'File',
\t\t\t'folders'         : 'Cartelle',
\t\t\t'items'           : 'Oggetti',
\t\t\t'yes'             : 'sì',
\t\t\t'no'              : 'no',
\t\t\t'link'            : 'Collegamento',
\t\t\t'searcresult'     : 'Risultati ricerca',
\t\t\t'selected'        : 'oggetti selezionati',
\t\t\t'about'           : 'Informazioni',
\t\t\t'shortcuts'       : 'Scorciatoie',
\t\t\t'help'            : 'Aiuto',
\t\t\t'webfm'           : 'Gestore file WEB',
\t\t\t'ver'             : 'Versione',
\t\t\t'protocolver'     : 'versione protocollo',
\t\t\t'homepage'        : 'Home del progetto',
\t\t\t'docs'            : 'Documentazione',
\t\t\t'github'          : 'Seguici su Github',
\t\t\t'twitter'         : 'Seguici su Twitter',
\t\t\t'facebook'        : 'Seguici su Facebook',
\t\t\t'team'            : 'Gruppo',
\t\t\t'chiefdev'        : 'sviluppatore capo',
\t\t\t'developer'       : 'sviluppatore',
\t\t\t'contributor'     : 'collaboratore',
\t\t\t'maintainer'      : 'manutentore',
\t\t\t'translator'      : 'traduttore',
\t\t\t'icons'           : 'Icone',
\t\t\t'dontforget'      : 'e non dimenticate di portare l\\'asciugamano',
\t\t\t'shortcutsof'     : 'Scorciatoie disabilitate',
\t\t\t'dropFiles'       : 'Trascina i file qui',
\t\t\t'or'              : 'o',
\t\t\t'selectForUpload' : 'Seleziona file da caricare',
\t\t\t'moveFiles'       : 'Sposta file',
\t\t\t'copyFiles'       : 'Copia file',
\t\t\t'restoreFiles'    : 'Ripristina oggetti', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Rimuovi da Accesso rapido',
\t\t\t'aspectRatio'     : 'Proporzioni',
\t\t\t'scale'           : 'Scala',
\t\t\t'width'           : 'Larghezza',
\t\t\t'height'          : 'Altezza',
\t\t\t'resize'          : 'Ridimensione',
\t\t\t'crop'            : 'Ritaglia',
\t\t\t'rotate'          : 'Ruota',
\t\t\t'rotate-cw'       : 'Ruota di 90° in senso orario',
\t\t\t'rotate-ccw'      : 'Ruota di 90° in senso antiorario',
\t\t\t'degree'          : 'Gradi',
\t\t\t'netMountDialogTitle' : 'Monta disco di rete', // added 18.04.2012
\t\t\t'protocol'            : 'Protocollo', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Porta', // added 18.04.2012
\t\t\t'user'                : 'Utente', // added 18.04.2012
\t\t\t'pass'                : 'Password', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Vuoi smontare \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Rilascia o incolla dal browser', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Rilascia o incolla files e indirizzi URL qui', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Codifica', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Lingua',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Destinazione: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Cerca per MIME Type', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Possessore', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Gruppo', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Altri', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Esegui', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Permessi', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Modalità', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'La cartella è vuota', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'La cartella è vuota\\\\A Trascina e rilascia per aggiungere elementi', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'La cartella è vuota\\\\A Premi a lungo per aggiungere elementi', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Qualità', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Sincr. automatica',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Sposta in alto',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Mostra URL link', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Elementi selezionati (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID cartella', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Permetti accesso non in linea', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Per ri-autenticarsi', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Caricamento...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Apri più files', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Stai cercando di aprire \$1 files. Sei sicuro di volerli aprire nel browser?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Nessun risultato soddisfa i criteri di ricerca', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Il file è in modifica.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : '\$1 elementi sono selezionati.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : '\$1 elementi negli appunti.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'La ricerca incrementale è solo dalla vista corrente.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Reistanzia', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 completato', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Menu contestuale', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Orientamento pagina', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Percorsi base del volume', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Resetta', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Colore di sfondo', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Selettore colori', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : 'Griglia di 8px', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Abilitato', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Disabilitato', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Nessun risultato di ricerca nella vista corrente\\\\APremere [Invio] per espandere l\\'oggetto della ricerca.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Nessun risultato di ricerca tramite prima lettera nella vista corrente.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Etichetta di testo', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 minuti rimanenti', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Riapri con la codifica di caratteri selezionata', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Salva con la codifica di caratteri selezionata', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Seleziona cartella', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Cerca tramite la prima lettera', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Opzioni predefinite', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'Troppi oggetti da spostare nel cestino', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'Area di testo', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Svuota la cartella \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'Non ci sono oggetti nella cartella \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Preferenze', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Impostazioni Lingua', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Inizializza le impostazioni salvate nel browser', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Impostazioni ToolBar', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 caratteri rimanenti.',  // from v2.1.29 added 30.8.2017
\t\t\t'sum'             : 'Somma', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Dimensione file approssimativa', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Fuoco sull\\'elemento sotto al mouse',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Seleziona', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Azione quando un file è selezionato', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Apri con l\\'editor usato l\\'ultima volta', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Inverti selezione', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Sei sicuro di voler rinominare \$1 selezionati come \$2?<br/>Questo non può essere annullato!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Batch rename', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Numero', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Aggiungi prefisso', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Aggiungi sufisso', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Cambia estensione', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Impostazioni delle colonne (visualizzazione elenco)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Tutti i cambiamenti saranno immeditamente applicati.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Qualsiasi modifica non sarà visibile fino a quando non si monta questo volume.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'The following volume(s) mounted on this volume also unmounted. Are you sure to unmount it?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Seleziona Info', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Algoritmi per visualizzare l\\'hash del file', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Informazioni (pannello di informazioni sulla selezione)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Premi di nuovo per uscire.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Toolbar', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Spazio di lavoro', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Dialog', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Tutti', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'Dimensione icona (Visualizzazione icone)', // form v2.1.39 added 7.5.2018

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Sconosciuto',
\t\t\t'kindRoot'        : 'Percorso base del volume', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Cartella',
\t\t\t'kindSelects'     : 'Selezioni', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Alias guasto',
\t\t\t// applications
\t\t\t'kindApp'         : 'Applicazione',
\t\t\t'kindPostscript'  : 'Documento Postscript',
\t\t\t'kindMsOffice'    : 'Documento Microsoft Office',
\t\t\t'kindMsWord'      : 'Documento Microsoft Word',
\t\t\t'kindMsExcel'     : 'Documento Microsoft Excel',
\t\t\t'kindMsPP'        : 'Presentazione Microsoft Powerpoint',
\t\t\t'kindOO'          : 'Documento Open Office',
\t\t\t'kindAppFlash'    : 'Applicazione Flash',
\t\t\t'kindPDF'         : 'Documento PDF',
\t\t\t'kindTorrent'     : 'File Bittorrent',
\t\t\t'kind7z'          : 'Archivio 7z',
\t\t\t'kindTAR'         : 'Archivio TAR',
\t\t\t'kindGZIP'        : 'Archivio GZIP',
\t\t\t'kindBZIP'        : 'Archivio BZIP',
\t\t\t'kindXZ'          : 'Archivio XZ',
\t\t\t'kindZIP'         : 'Archivio ZIP',
\t\t\t'kindRAR'         : 'Archivio RAR',
\t\t\t'kindJAR'         : 'File Java JAR',
\t\t\t'kindTTF'         : 'Font True Type',
\t\t\t'kindOTF'         : 'Font Open Type',
\t\t\t'kindRPM'         : 'Pacchetto RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Documento di testo',
\t\t\t'kindTextPlain'   : 'Testo Semplice',
\t\t\t'kindPHP'         : 'File PHP',
\t\t\t'kindCSS'         : 'File CSS (Cascading Style Sheet)',
\t\t\t'kindHTML'        : 'Documento HTML',
\t\t\t'kindJS'          : 'File Javascript',
\t\t\t'kindRTF'         : 'File RTF (Rich Text Format)',
\t\t\t'kindC'           : 'File C',
\t\t\t'kindCHeader'     : 'File C (header)',
\t\t\t'kindCPP'         : 'File C++',
\t\t\t'kindCPPHeader'   : 'File C++ (header)',
\t\t\t'kindShell'       : 'Script Unix shell',
\t\t\t'kindPython'      : 'File Python',
\t\t\t'kindJava'        : 'File Java',
\t\t\t'kindRuby'        : 'File Ruby',
\t\t\t'kindPerl'        : 'File Perl',
\t\t\t'kindSQL'         : 'File SQL',
\t\t\t'kindXML'         : 'File XML',
\t\t\t'kindAWK'         : 'File AWK',
\t\t\t'kindCSV'         : 'File CSV (Comma separated values)',
\t\t\t'kindDOCBOOK'     : 'File Docbook XML',
\t\t\t'kindMarkdown'    : 'Testo markdown', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Immagine',
\t\t\t'kindBMP'         : 'Immagine BMP',
\t\t\t'kindJPEG'        : 'Immagine JPEG',
\t\t\t'kindGIF'         : 'Immagine GIF',
\t\t\t'kindPNG'         : 'Immagine PNG',
\t\t\t'kindTIFF'        : 'Immagine TIFF',
\t\t\t'kindTGA'         : 'Immagine TGA',
\t\t\t'kindPSD'         : 'Immagine Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Immagine X bitmap',
\t\t\t'kindPXM'         : 'Immagine Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'File Audio',
\t\t\t'kindAudioMPEG'   : 'Audio MPEG',
\t\t\t'kindAudioMPEG4'  : 'Audio MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Audio MIDI',
\t\t\t'kindAudioOGG'    : 'Audio Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Audio WAV',
\t\t\t'AudioPlaylist'   : 'Playlist MP3',
\t\t\t'kindVideo'       : 'File Video',
\t\t\t'kindVideoDV'     : 'Filmato DV',
\t\t\t'kindVideoMPEG'   : 'Filmato MPEG',
\t\t\t'kindVideoMPEG4'  : 'Filmato MPEG-4',
\t\t\t'kindVideoAVI'    : 'Filmato AVI',
\t\t\t'kindVideoMOV'    : 'Filmato Quick Time',
\t\t\t'kindVideoWM'     : 'Filmato Windows Media',
\t\t\t'kindVideoFlash'  : 'Filmato Flash',
\t\t\t'kindVideoMKV'    : 'Filmato Matroska',
\t\t\t'kindVideoOGG'    : 'Filmato Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.it.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.it.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.it.js");
    }
}
