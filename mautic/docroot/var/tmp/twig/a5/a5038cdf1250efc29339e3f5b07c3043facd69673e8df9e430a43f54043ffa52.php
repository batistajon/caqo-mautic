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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.el.js */
class __TwigTemplate_19fe2ecce446692aca5fb1cc378c8b8c7ebffc4b2be7126281d413ad27116c92 extends Template
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
 * Greek translation
 * @author yawd <info@yawd.eu>, Romanos
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
\telFinder.prototype.i18.el = {
\t\ttranslator : 'yawd &lt;ingo@yawd.eu&gt;',
\t\tlanguage   : 'Ελληνικά',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i',
\t\tfancyDateFormat : '\$1 H:i',
\t\tmessages   : {
\t\t\t
\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Πρόβλημα',
\t\t\t'errUnknown'           : 'Άγνωστο πρόβλημα.',
\t\t\t'errUnknownCmd'        : 'Άγνωστη εντολή.',
\t\t\t'errJqui'              : 'Μη έγκυρη ρύθμιση του jQuery UI. Τα components \"selectable\", \"draggable\" και \"droppable\" πρέπει να περιληφούν.',
\t\t\t'errNode'              : 'το elFinder χρειάζεται να έχει δημιουργηθεί το DOM Element.',
\t\t\t'errURL'               : 'Μη έγκυρες ρυθμίσεις για το elFinder! η επιλογή URL δεν έχει οριστεί.',
\t\t\t'errAccess'            : 'Απαγορεύεται η πρόσβαση.',
\t\t\t'errConnect'           : 'Δεν ήταν δυνατή η σύνδεση με το backend.',
\t\t\t'errAbort'             : 'Η σύνδεση εγκαταλείφθηκε.',
\t\t\t'errTimeout'           : 'Η σύνδεση έληξε.',
\t\t\t'errNotFound'          : 'Δε βρέθηκε το backend.',
\t\t\t'errResponse'          : 'Μή έγκυρη απάντηση από το backend.',
\t\t\t'errConf'              : 'Μη έγκυρες ρυθμίσεις για το backend.',
\t\t\t'errJSON'              : 'Το PHP JSON module δεν είναι εγκατεστημένο.',
\t\t\t'errNoVolumes'         : 'Δεν βρέθηκαν αναγνώσιμα volumes.',
\t\t\t'errCmdParams'         : 'Μη έγκυρες παράμετροι για την εντολή \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Τα δεδομένα δεν είναι JSON.',
\t\t\t'errDataEmpty'         : 'Τα δεδομένα είναι άδεια.',
\t\t\t'errCmdReq'            : 'Το Backend request χρειάζεται όνομα εντολής.',
\t\t\t'errOpen'              : 'Δεν ήταν δυνατό να ανοίξει το \"\$1\".',
\t\t\t'errNotFolder'         : 'Το αντικείμενο δεν είναι φάκελος.',
\t\t\t'errNotFile'           : 'Το αντικείμενο δεν είναι αρχείο.',
\t\t\t'errRead'              : 'Δεν ήταν δυνατόν να διαβαστεί το \"\$1\".',
\t\t\t'errWrite'             : 'Δεν ήταν δυνατή η εγγραφή στο \"\$1\".',
\t\t\t'errPerm'              : 'Απαγορεύεται η πρόσβαση.',
\t\t\t'errLocked'            : '\"\$1\" είναι κλειδωμένο και δεν μπορεί να μετονομαστεί, μετακινηθεί ή διαγραφεί.',
\t\t\t'errExists'            : 'Το αρχείο με όνομα \"\$1\" υπάρχει ήδη.',
\t\t\t'errInvName'           : 'Μη έγκυρο όνομα αρχείου.',
\t\t\t'errFolderNotFound'    : 'Ο φάκελος δε βρέθηκε.',
\t\t\t'errFileNotFound'      : 'Το αρχείο δε βρέθηκε.',
\t\t\t'errTrgFolderNotFound' : 'Ο φάκελος \"\$1\" δε βρέθηκε.',
\t\t\t'errPopup'             : 'Το πρόγραμμα πλήγησης εμπόδισε το άνοιγμα αναδυόμενου παραθύρου. Για ανοίξετε το αρχείο ενεργοποιήστε το στις επιλογές του περιηγητή.',
\t\t\t'errMkdir'             : 'Η δυμιουργία του φακέλου \"\$1\" δεν ήταν δυνατή.',
\t\t\t'errMkfile'            : 'Η δημιουργία του αρχείου \"\$1\" δεν ήταν δυνατή.',
\t\t\t'errRename'            : 'Η μετονομασία του αρχείου \"\$1\" δεν ήταν δυνατή.',
\t\t\t'errCopyFrom'          : 'Δεν επιτρέπεται η αντιγραφή αρχείων από το volume \"\$1\".',
\t\t\t'errCopyTo'            : 'Δεν επιτρέπεται η αντιγραφή αρχείων στο volume \"\$1\".',
\t\t\t'errUpload'            : 'Πρόβλημα κατά το upload.',
\t\t\t'errUploadFile'        : 'Το αρχείο \"\$1\" δεν μπόρεσε να γίνει upload.',
\t\t\t'errUploadNoFiles'     : 'Δεν βρέθηκαν αρχεία για upload.',
\t\t\t'errUploadTotalSize'   : 'Τα δεδομένα υπερβαίνουν το επιτρεπόμενο μέγιστο μέγεθος δεδομένων.',
\t\t\t'errUploadFileSize'    : 'Το αρχείο υπερβαίνει το επιτρεπόμενο μέγιστο μέγεθος.',
\t\t\t'errUploadMime'        : 'Ο τύπος αρχείου δεν επιτρέπεται.',
\t\t\t'errUploadTransfer'    : 'Πρόβλημα μεταφοράς για το \"\$1\".',
\t\t\t'errNotReplace'        : 'Object \"\$1\" already exists at this location and can not be replaced by object with another type.',
\t\t\t'errReplace'           : 'Unable to replace \"\$1\".',
\t\t\t'errSave'              : 'Το \"\$1\" δεν ήταν δυνατόν να αποθηκευτεί.',
\t\t\t'errCopy'              : 'Δεν ήταν δυνατή η αντιγραφή του \"\$1\".',
\t\t\t'errMove'              : 'Δεν ήταν δυνατή η μετακίνηση του \"\$1\".',
\t\t\t'errCopyInItself'      : 'Δεν είναι δυνατή η αντιγραφή του \"\$1\" στον εαυτό του.',
\t\t\t'errRm'                : 'Δεν ήταν δυνατή η αφαίρεση του \"\$1\".',
\t\t\t'errRmSrc'             : 'Unable remove source file(s).',
\t\t\t'errExtract'           : 'Δεν ήταν δυνατή η ανάγνωση των αρχείων από \"\$1\".',
\t\t\t'errArchive'           : 'Δεν ήταν δυνατή η δημιουργία του αρχείου.',
\t\t\t'errArcType'           : 'Ο τύπος αρχείου δεν υποστηρίζεται.',
\t\t\t'errNoArchive'         : 'Το αρχείο δεν είναι έγκυρο ή δεν υποστηρίζεται ο τύπος του.',
\t\t\t'errCmdNoSupport'      : 'Το backend δεν υποστηρίζει αυτή την εντολή.',
\t\t\t'errReplByChild'       : 'Ο φάκελος “\$1” δεν μπορεί να αντικατασταθεί από οποιοδήποτε αρχείο περιέχεται σε αυτόν.',
\t\t\t'errArcSymlinks'       : 'Για λόγους ασφαλείας δεν είναι δυνατόν να διαβαστούν αρχεία που περιέχουν symlinks orη αρχεία με μη επιτρεπτά ονόματα.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Το μέγεθος του αρχείου υπερβαίνει το μέγιστο επιτρεπτό όριο.',
\t\t\t'errResize'            : 'Δεν ήταν δυνατή η αλλαγή μεγέθους του \"\$1\".',
\t\t\t'errResizeDegree'      : 'Invalid rotate degree.',
\t\t\t'errResizeRotate'      : 'Unable to rotate image.',
\t\t\t'errResizeSize'        : 'Invalid image size.',
\t\t\t'errResizeNoChange'    : 'Image size not changed.',
\t\t\t'errUsupportType'      : 'Ο τύπος αρχείου δεν υποστηρίζεται.',
\t\t\t'errNotUTF8Content'    : 'Το αρχείο \"\$1\" δεν είναι UTF-8 και δεν μπορεί να επεξεργασθεί.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Δεν ήταν δυνατή η φόρτωση του \"\$1\".',     // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Μη υποστηριζόμενο πρωτόκολο.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Η φόρτωση απέτυχε.',             // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Απαιτείται host εξυπηρετητής.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Your session has expired due to inactivity.',
\t\t\t'errCreatingTempDir'   : 'Unable to create temporary directory: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Unable to download file from FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Unable to upload file to FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Unable to create remote directory on FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Error while archiving files: \"\$1\"',
\t\t\t'errExtractExec'       : 'Error while extracting files: \"\$1\"',
\t\t\t
\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Δημιουργία archive αρχείου',
\t\t\t'cmdback'      : 'Πίσω',
\t\t\t'cmdcopy'      : 'Αντιγραφή',
\t\t\t'cmdcut'       : 'Αφαίρεση',
\t\t\t'cmddownload'  : 'Μεταφόρτωση',
\t\t\t'cmdduplicate' : 'Αντίγραφο',
\t\t\t'cmdedit'      : 'Επεξεργασία αρχείου',
\t\t\t'cmdextract'   : 'Εξαγωγή αρχείων από archive',
\t\t\t'cmdforward'   : 'Προώθηση',
\t\t\t'cmdgetfile'   : 'Επιλέξτε αρχεία',
\t\t\t'cmdhelp'      : 'Σχετικά με αυτό το λογισμικό',
\t\t\t'cmdhome'      : 'Home',
\t\t\t'cmdinfo'      : 'Πληροφορίες',
\t\t\t'cmdmkdir'     : 'Νέος φάκελος',
\t\t\t'cmdmkfile'    : 'Νέος αρχείο',
\t\t\t'cmdopen'      : 'Άνοιγμα',
\t\t\t'cmdpaste'     : 'Επικόλληση',
\t\t\t'cmdquicklook' : 'Προεπισκόπηση',
\t\t\t'cmdreload'    : 'Ανανέωση',
\t\t\t'cmdrename'    : 'Μετονομασία',
\t\t\t'cmdrm'        : 'Διαγραφή',
\t\t\t'cmdsearch'    : 'Έυρεση αρχείων',
\t\t\t'cmdup'        : 'Μετάβαση στο γονικό φάκελο',
\t\t\t'cmdupload'    : 'Ανέβασμα αρχείων',
\t\t\t'cmdview'      : 'Προβολή',
\t\t\t'cmdresize'    : 'Αλλαγή μεγέθους εικόνας',
\t\t\t'cmdsort'      : 'Ταξινόμηση',
\t\t\t'cmdnetmount'  : 'Mount network volume',
\t\t\t
\t\t\t/*********************************** buttons ***********************************/ 
\t\t\t'btnClose'  : 'Κλείσιμο',
\t\t\t'btnSave'   : 'Αποθήκευση',
\t\t\t'btnRm'     : 'Αφαίρεση',
\t\t\t'btnApply'  : 'Εφαρμογή',
\t\t\t'btnCancel' : 'Ακύρωση',
\t\t\t'btnNo'     : 'Όχι',
\t\t\t'btnYes'    : 'Ναι',
\t\t\t'btnMount'  : 'Mount',
\t\t\t
\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Άνοιγμα φακέλου',
\t\t\t'ntffile'     : 'Άνοιγμα αρχείου',
\t\t\t'ntfreload'   : 'Ανανέωση περιεχομένων φακέλου',
\t\t\t'ntfmkdir'    : 'Δημιουργία φακέλου',
\t\t\t'ntfmkfile'   : 'Δημιουργία αρχείων',
\t\t\t'ntfrm'       : 'Διαγραφή αρχείων',
\t\t\t'ntfcopy'     : 'Αντιγραφή αρχείων',
\t\t\t'ntfmove'     : 'Μετακίνηση αρχείων',
\t\t\t'ntfprepare'  : 'Προετοιμασία αντιγραφής αρχείων',
\t\t\t'ntfrename'   : 'Μετονομασία αρχείων',
\t\t\t'ntfupload'   : 'Ανέβασμα αρχείων',
\t\t\t'ntfdownload' : 'Μεταφόρτωση αρχείων',
\t\t\t'ntfsave'     : 'Αποθήκευση αρχείων',
\t\t\t'ntfarchive'  : 'Δημιουργία αρχείου',
\t\t\t'ntfextract'  : 'Εξαγωγή αρχείων από το archive',
\t\t\t'ntfsearch'   : 'Αναζήτηση αρχείων',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'Σύστημα απασχολημένο>_<',
\t\t\t'ntfloadimg'  : 'Φόρτωση εικόνας',
\t\t\t'ntfnetmount' : 'Φόρτωση δικτυακού δίσκου', // added 18.04.2012
\t\t\t'ntfdim'      : 'Acquiring image dimension',
\t\t\t
\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'άγνωστο',
\t\t\t'Today'       : 'Σήμερα',
\t\t\t'Yesterday'   : 'Χθές',
\t\t\t'msJan'       : 'Ιαν',
\t\t\t'msFeb'       : 'Φεβ',
\t\t\t'msMar'       : 'Μαρ',
\t\t\t'msApr'       : 'Απρ',
\t\t\t'msMay'       : 'Μαϊ',
\t\t\t'msJun'       : 'Ιουν',
\t\t\t'msJul'       : 'Ιουλ',
\t\t\t'msAug'       : 'Αυγ',
\t\t\t'msSep'       : 'Σεπ',
\t\t\t'msOct'       : 'Οκτ',
\t\t\t'msNov'       : 'Νοεμ',
\t\t\t'msDec'       : 'Δεκ',
\t\t\t'January'     : 'Ιανουάριος',
\t\t\t'February'    : 'Φεβρουάριος',
\t\t\t'March'       : 'Μάρτιος',
\t\t\t'April'       : 'Απρίλιος',
\t\t\t'May'         : 'Μάϊος',
\t\t\t'June'        : 'Ιούνιος',
\t\t\t'July'        : 'Ιούλιος',
\t\t\t'August'      : 'Αύγουστος',
\t\t\t'September'   : 'Σεπτέμβριος',
\t\t\t'October'     : 'Οκτώβριος',
\t\t\t'November'    : 'Νοέμβριος',
\t\t\t'December'    : 'Δεκέμβριος',
\t\t\t'Sunday'      : 'Κυριακή', 
\t\t\t'Monday'      : 'Δευτέρα', 
\t\t\t'Tuesday'     : 'Τρίτη', 
\t\t\t'Wednesday'   : 'Τετάρτη', 
\t\t\t'Thursday'    : 'Πέμπτη', 
\t\t\t'Friday'      : 'Παρασκευή', 
\t\t\t'Saturday'    : 'Σάββατο',
\t\t\t'Sun'         : 'Κυρ', 
\t\t\t'Mon'         : 'Δευ', 
\t\t\t'Tue'         : 'Τρ', 
\t\t\t'Wed'         : 'Τετ', 
\t\t\t'Thu'         : 'Πεμ', 
\t\t\t'Fri'         : 'Παρ', 
\t\t\t'Sat'         : 'Σαβ',
\t\t\t
\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'κατά όνομα', 
\t\t\t'sortkind'          : 'κατά είδος', 
\t\t\t'sortsize'          : 'κατά μέγεθος',
\t\t\t'sortdate'          : 'κατά ημερομηνία',
\t\t\t'sortFoldersFirst'  : 'Πρώτα οι φάκελοι', // added 22.06.2012
\t\t\t
\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Απαιτείται επιβεβαίωση',
\t\t\t'confirmRm'       : 'Είστε σίγουροι πως θέλετε να διαγράψετε τα αρχεία?<br/>Οι αλλαγές θα είναι μόνιμες!',
\t\t\t'confirmRepl'     : 'Αντικατάσταση του παλιού αρχείου με το νέο?',
\t\t\t'apllyAll'        : 'Εφαρμογή σε όλα',
\t\t\t'name'            : 'Όνομα',
\t\t\t'size'            : 'Μέγεθος',
\t\t\t'perms'           : 'Δικαιώματα',
\t\t\t'modify'          : 'Τροποποιήθηκε',
\t\t\t'kind'            : 'Είδος',
\t\t\t'read'            : 'ανάγνωση',
\t\t\t'write'           : 'εγγραφή',
\t\t\t'noaccess'        : 'δεν υπάρχει πρόσβαση',
\t\t\t'and'             : 'και',
\t\t\t'unknown'         : 'άγνωστο',
\t\t\t'selectall'       : 'Επιλογή όλων',
\t\t\t'selectfiles'     : 'Επιλογή αρχείων',
\t\t\t'selectffile'     : 'Επιλογή πρώτου αρχείου',
\t\t\t'selectlfile'     : 'Επιλογή τελευταίου αρχείου',
\t\t\t'viewlist'        : 'Προβολή λίστας',
\t\t\t'viewicons'       : 'Προβολή εικονιδίων',
\t\t\t'places'          : 'Τοποθεσίες',
\t\t\t'calc'            : 'Υπολογισμός', 
\t\t\t'path'            : 'Διαδρομή',
\t\t\t'aliasfor'        : 'Ψευδώνυμο για',
\t\t\t'locked'          : 'Κλειδωμένο',
\t\t\t'dim'             : 'Διαστάσεις',
\t\t\t'files'           : 'Αρχεία',
\t\t\t'folders'         : 'Φάκελοι',
\t\t\t'items'           : 'Αντικείμενα',
\t\t\t'yes'             : 'ναι',
\t\t\t'no'              : 'όχι',
\t\t\t'link'            : 'Σύνδεσμος',
\t\t\t'searcresult'     : 'Αποτελέσματα αναζήτησης',  
\t\t\t'selected'        : 'επιλεγμένα αντικείμενα',
\t\t\t'about'           : 'Σχετικά',
\t\t\t'shortcuts'       : 'Συντομεύσεις',
\t\t\t'help'            : 'Βοήθεια',
\t\t\t'webfm'           : 'εργαλείο διαχείρισης αρχείων από το web',
\t\t\t'ver'             : 'Έκδοση',
\t\t\t'protocolver'     : 'έκδοση πρωτοκόλλου',
\t\t\t'homepage'        : 'Σελίδα του project',
\t\t\t'docs'            : 'Τεκμηρίωση (documentation)',
\t\t\t'github'          : 'Κάντε μας fork στο Github',
\t\t\t'twitter'         : 'Ακολουθήστε μας στο twitter',
\t\t\t'facebook'        : 'Βρείτε μας στο facebook',
\t\t\t'team'            : 'Ομάδα',
\t\t\t'chiefdev'        : 'κύριος προγραμματιστής',
\t\t\t'developer'       : 'προγραμματιστής',
\t\t\t'contributor'     : 'συνεισφορά',
\t\t\t'maintainer'      : 'συντηρητής',
\t\t\t'translator'      : 'μεταφραστής',
\t\t\t'icons'           : 'Εικονίδια',
\t\t\t'dontforget'      : 'και μην ξεχάσεις την πετσέτα σου!',
\t\t\t'shortcutsof'     : 'Οι συντομεύσεις είναι απενεργοποιημένες',
\t\t\t'dropFiles'       : 'Κάντε drop τα αρχεία εδώ',
\t\t\t'or'              : 'ή',
\t\t\t'selectForUpload' : 'Επιλογή αρχείων για ανέβασμα',
\t\t\t'moveFiles'       : 'Μετακίνηση αρχείων',
\t\t\t'copyFiles'       : 'Αντιγραφή αρχείων',
\t\t\t'rmFromPlaces'    : 'Αντιγραφή από τοποθεσίες',
\t\t\t'aspectRatio'     : 'Αναλογία διαστάσεων',
\t\t\t'scale'           : 'Κλίμακα',
\t\t\t'width'           : 'Πλάτος',
\t\t\t'height'          : 'Ύψος',
\t\t\t'resize'          : 'Αλλαγή μεγέθους',
\t\t\t'crop'            : 'Crop',
\t\t\t'rotate'          : 'Περιστροφή',
\t\t\t'rotate-cw'       : 'Περιστροφή κατά 90 βαθμούς CW',
\t\t\t'rotate-ccw'      : 'Περιστροφή κατά 90 βαθμούς CCW',
\t\t\t'degree'          : 'Βαθμός',
\t\t\t'netMountDialogTitle' : 'Φορτώστε δικτυακό δίσκο', // added 18.04.2012
\t\t\t'protocol'            : 'Πρωτόκολλο', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'Χρήστης', // added 18.04.2012
\t\t\t'pass'                : 'Κωδικός', // added 18.04.2012
\t\t\t
\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Άγνωστο',
\t\t\t'kindFolder'      : 'Φάκελος',
\t\t\t'kindAlias'       : 'Ψευδώνυμο (alias)',
\t\t\t'kindAliasBroken' : 'Μη έγκυρο ψευδώνυμο',
\t\t\t// applications
\t\t\t'kindApp'         : 'Εφαρμογή',
\t\t\t'kindPostscript'  : 'Έγγραφο Postscript',
\t\t\t'kindMsOffice'    : 'Έγγραφο Microsoft Office',
\t\t\t'kindMsWord'      : 'Έγγραφο Microsoft Word',
\t\t\t'kindMsExcel'     : 'Έγγραφο Microsoft Excel',
\t\t\t'kindMsPP'        : 'Παρουσίαση Microsoft Powerpoint',
\t\t\t'kindOO'          : 'Έγγραφο Open Office',
\t\t\t'kindAppFlash'    : 'Εφαρμογή Flash',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Αρχείο Bittorrent',
\t\t\t'kind7z'          : 'Αρχείο 7z',
\t\t\t'kindTAR'         : 'Αρχείο TAR',
\t\t\t'kindGZIP'        : 'Αρχείο GZIP',
\t\t\t'kindBZIP'        : 'Αρχείο BZIP',
\t\t\t'kindXZ'          : 'Αρχείο XZ',
\t\t\t'kindZIP'         : 'Αρχείο ZIP',
\t\t\t'kindRAR'         : 'Αρχείο RAR',
\t\t\t'kindJAR'         : 'Αρχείο Java JAR',
\t\t\t'kindTTF'         : 'Γραμματοσειρά True Type',
\t\t\t'kindOTF'         : 'Γραμματοσειρά Open Type',
\t\t\t'kindRPM'         : 'Πακέτο RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Έγγραφο κειμένου',
\t\t\t'kindTextPlain'   : 'Απλό κείμενο',
\t\t\t'kindPHP'         : 'Κώδικας PHP',
\t\t\t'kindCSS'         : 'Cascading style sheet',
\t\t\t'kindHTML'        : 'Έγγραφο HTML',
\t\t\t'kindJS'          : 'Κώδικας Javascript',
\t\t\t'kindRTF'         : 'Rich Text Format',
\t\t\t'kindC'           : 'Κώδικας C',
\t\t\t'kindCHeader'     : 'Κώδικας κεφαλίδας C',
\t\t\t'kindCPP'         : 'Κώδικας C++',
\t\t\t'kindCPPHeader'   : 'Κώδικας κεφαλίδας C++',
\t\t\t'kindShell'       : 'Unix shell script',
\t\t\t'kindPython'      : 'Κώδικας Python',
\t\t\t'kindJava'        : 'Κώδικας Java',
\t\t\t'kindRuby'        : 'Κώδικας Ruby',
\t\t\t'kindPerl'        : 'Perl script',
\t\t\t'kindSQL'         : 'Κώδικας SQL',
\t\t\t'kindXML'         : 'Έγγραφο XML',
\t\t\t'kindAWK'         : 'Κώδικας AWK',
\t\t\t'kindCSV'         : 'Τιμές χωρισμένες με κόμμα',
\t\t\t'kindDOCBOOK'     : 'Έγγραφο Docbook XML',
\t\t\t// images
\t\t\t'kindImage'       : 'Εικόνα',
\t\t\t'kindBMP'         : 'Εικόνα BMP',
\t\t\t'kindJPEG'        : 'Εικόνα JPEG',
\t\t\t'kindGIF'         : 'Εικόνα GIF',
\t\t\t'kindPNG'         : 'Εικόνα PNG',
\t\t\t'kindTIFF'        : 'Εικόνα TIFF',
\t\t\t'kindTGA'         : 'Εικόνα TGA',
\t\t\t'kindPSD'         : 'Εικόνα Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Εικόνα X bitmap',
\t\t\t'kindPXM'         : 'Εικόνα Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Αρχεία ήχου',
\t\t\t'kindAudioMPEG'   : 'Ήχος MPEG',
\t\t\t'kindAudioMPEG4'  : 'Εικόνα MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Εικόνα MIDI',
\t\t\t'kindAudioOGG'    : 'Εικόνα Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Εικόνα WAV',
\t\t\t'AudioPlaylist'   : 'MP3 playlist',
\t\t\t'kindVideo'       : 'Αρχεία media',
\t\t\t'kindVideoDV'     : 'Ταινία DV',
\t\t\t'kindVideoMPEG'   : 'Ταινία MPEG',
\t\t\t'kindVideoMPEG4'  : 'Ταινία MPEG-4',
\t\t\t'kindVideoAVI'    : 'Ταινία AVI',
\t\t\t'kindVideoMOV'    : 'Ταινία Quick Time',
\t\t\t'kindVideoWM'     : 'Ταινία Windows Media',
\t\t\t'kindVideoFlash'  : 'Ταινία flash',
\t\t\t'kindVideoMKV'    : 'Ταινία matroska',
\t\t\t'kindVideoOGG'    : 'Ταινία ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.el.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.el.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.el.js");
    }
}
