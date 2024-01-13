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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.he.js */
class __TwigTemplate_68fb0420ac534a1343f4cb1f3fd4b667de26a162a164004cb6d4a7355b17f6fa extends Template
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
 * עברית translation
 * @author Yaron Shahrabani <sh.yaron@gmail.com>
 * @version 2015-11-02
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
\telFinder.prototype.i18.he = {
\t\ttranslator : 'Yaron Shahrabani <sh.yaron@gmail.com>',
\t\tlanguage   : 'עברית',
\t\tdirection  : 'rtl',
\t\tdateFormat : 'd.m.Y H:i', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 H:i', // will produce smth like: Today 12:25 PM
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'שגיאה',
\t\t\t'errUnknown'           : 'שגיאה בלתי מוכרת.',
\t\t\t'errUnknownCmd'        : 'פקודה בלתי מוכרת.',
\t\t\t'errJqui'              : 'תצורת ה־jQuery UI שגויה. יש לכלול רכיבים הניתנים לבחירה, גרירה והשלכה.',
\t\t\t'errNode'              : 'elFinder דורש יצירה של רכיב DOM.',
\t\t\t'errURL'               : 'התצורה של elFinder שגויה! אפשרות הכתובת (URL) לא הוגדרה.',
\t\t\t'errAccess'            : 'הגישה נדחית.',
\t\t\t'errConnect'           : 'לא ניתן להתחבר למנגנון.',
\t\t\t'errAbort'             : 'החיבור בוטל.',
\t\t\t'errTimeout'           : 'זמן החיבור פג.',
\t\t\t'errNotFound'          : 'לא נמצא מנגנון.',
\t\t\t'errResponse'          : 'תגובת המנגנון שגויה.',
\t\t\t'errConf'              : 'תצורת המנגנון שגויה.',
\t\t\t'errJSON'              : 'המודול PHP JSON לא מותקן.',
\t\t\t'errNoVolumes'         : 'אין כוננים זמינים לקריאה.',
\t\t\t'errCmdParams'         : 'פרמטרים שגויים לפקודה „\$1“.',
\t\t\t'errDataNotJSON'       : 'הנתונים אינם JSON.',
\t\t\t'errDataEmpty'         : 'הנתונים ריקים.',
\t\t\t'errCmdReq'            : 'בקשה למנגנון דורשת שם פקודה.',
\t\t\t'errOpen'              : 'לא ניתן לפתוח את „\$1“.',
\t\t\t'errNotFolder'         : 'הפריט אינו תיקייה.',
\t\t\t'errNotFile'           : 'הפריט אינו קובץ.',
\t\t\t'errRead'              : 'לא ניתן לקרוא את „\$1“.',
\t\t\t'errWrite'             : 'לא ניתן לכתוב אל „\$1“.',
\t\t\t'errPerm'              : 'ההרשאה נדחתה.',
\t\t\t'errLocked'            : '„\$1“ נעול ואין אפשרות לשנות את שמו, להעבירו או להסירו.',
\t\t\t'errExists'            : 'קובץ בשם „\$1“ כבר קיים.',
\t\t\t'errInvName'           : 'שם הקובץ שגוי.',
\t\t\t'errFolderNotFound'    : 'התיקייה לא נמצאה.',
\t\t\t'errFileNotFound'      : 'הקובץ לא נמצא.',
\t\t\t'errTrgFolderNotFound' : 'תיקיית היעד „\$1“ לא נמצאה.',
\t\t\t'errPopup'             : 'הדפדפן מנע פתיחת חלון קובץ. כדי לפתוח קובץ יש לאפשר זאת בהגדרות הדפדפן.',
\t\t\t'errMkdir'             : 'לא ניתן ליצור את התיקייה „\$1“.',
\t\t\t'errMkfile'            : 'לא ניתן ליצור את הקובץ „\$1“.',
\t\t\t'errRename'            : 'לא ניתן לשנות את השם של „\$1“.',
\t\t\t'errCopyFrom'          : 'העתקת קבצים מהכונן „\$1“ אינה מאופשרת.',
\t\t\t'errCopyTo'            : 'העתקת קבצים אל הכונן „\$1“ אינה מאופשרת.',
\t\t\t'errUpload'            : 'שגיאת העלאה.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'לא ניתן להעלות את „\$1“.', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'לא נמצאו קבצים להעלאה.',
\t\t\t'errUploadTotalSize'   : 'הנתונים חורגים מהגודל המרבי המותר.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'הקובץ חורג מהגודל המרבי המותר.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'סוג הקובץ אינו מורשה.',
\t\t\t'errUploadTransfer'    : 'שגיאת העברה „\$1“.',
\t\t\t'errNotReplace'        : 'הפריט „\$1“ כבר קיים במיקום זה ואי אפשר להחליפו בפריט מסוג אחר.', // new
\t\t\t'errReplace'           : 'לא ניתן להחליף את „\$1“.',
\t\t\t'errSave'              : 'לא ניתן לשמור את „\$1“.',
\t\t\t'errCopy'              : 'לא ניתן להעתיק את „\$1“.',
\t\t\t'errMove'              : 'לא ניתן להעביר את „\$1“.',
\t\t\t'errCopyInItself'      : 'לא ניתן להעתיק את „\$1“ לתוך עצמו.',
\t\t\t'errRm'                : 'לא ניתן להסיר את „\$1“.',
\t\t\t'errRmSrc'             : 'לא ניתן להסיר את קובצי המקור.',
\t\t\t'errExtract'           : 'לא ניתן לחלץ קבצים מהארכיון „\$1“.',
\t\t\t'errArchive'           : 'לא ניתן ליצור ארכיון.',
\t\t\t'errArcType'           : 'סוג הארכיון אינו נתמך.',
\t\t\t'errNoArchive'         : 'הקובץ אינו ארכיון או שסוג הקובץ שלו אינו נתמך.',
\t\t\t'errCmdNoSupport'      : 'המנגנון אינו תומך בפקודה זו.',
\t\t\t'errReplByChild'       : 'לא ניתן להחליף את התיקייה „\$1“ בפריט מתוכה.',
\t\t\t'errArcSymlinks'       : 'מטעמי אבטחה לא ניתן לחלץ ארכיונים שמכילים קישורים סימבוליים או קבצים עם שמות בלתי מורשים.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'הארכיון חורג מהגודל המרבי המותר.',
\t\t\t'errResize'            : 'לא ניתן לשנות את הגודל של „\$1“.',
\t\t\t'errResizeDegree'      : 'מעלות ההיפוך שגויות.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'לא ניתן להפוך את התמונה.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'גודל התמונה שגוי.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'גודל התמונה לא השתנה.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'סוג הקובץ אינו נתמך.',
\t\t\t'errNotUTF8Content'    : 'הקובץ „\$1“ הוא לא בתסדיר UTF-8 ולא ניתן לערוך אותו.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'לא ניתן לעגן את „\$1“.', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'פרוטוקול בלתי נתמך.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'העיגון נכשל.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'נדרש מארח.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'ההפעלה שלך פגה עקב חוסר פעילות.',
\t\t\t'errCreatingTempDir'   : 'לא ניתן ליצור תיקייה זמנית: „\$1“',
\t\t\t'errFtpDownloadFile'   : 'לא ניתן להוריד קובץ מ־ FTP: „\$1“',
\t\t\t'errFtpUploadFile'     : 'לא ניתן להעלות קובץ ל־FTP: „\$1“',
\t\t\t'errFtpMkdir'          : 'לא ניתן ליצור תיקייה מרוחקת ב־FTP: „\$1“',
\t\t\t'errArchiveExec'       : 'שמירת הקבצים בארכיון נכשלה: „\$1“',
\t\t\t'errExtractExec'       : 'חילוץ קבצים נכשל: „\$1“',

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'יצירת ארכיון',
\t\t\t'cmdback'      : 'חזרה',
\t\t\t'cmdcopy'      : 'העתקה',
\t\t\t'cmdcut'       : 'גזירה',
\t\t\t'cmddownload'  : 'הורדה',
\t\t\t'cmdduplicate' : 'שכפול',
\t\t\t'cmdedit'      : 'עריכת קובץ',
\t\t\t'cmdextract'   : 'חילוץ קבצים מארכיון',
\t\t\t'cmdforward'   : 'העברה',
\t\t\t'cmdgetfile'   : 'בחירת קבצים',
\t\t\t'cmdhelp'      : 'פרטים על התכנית הזו',
\t\t\t'cmdhome'      : 'בית',
\t\t\t'cmdinfo'      : 'קבלת מידע',
\t\t\t'cmdmkdir'     : 'תיקייה חדשה',
\t\t\t'cmdmkfile'    : 'קובץ חדש',
\t\t\t'cmdopen'      : 'פתיחה',
\t\t\t'cmdpaste'     : 'הדבקה',
\t\t\t'cmdquicklook' : 'תצוגה מקדימה',
\t\t\t'cmdreload'    : 'רענון',
\t\t\t'cmdrename'    : 'שינוי שם',
\t\t\t'cmdrm'        : 'מחיקה',
\t\t\t'cmdsearch'    : 'חיפוש קבצים',
\t\t\t'cmdup'        : 'מעבר לתיקיית ההורה',
\t\t\t'cmdupload'    : 'העלאת קבצים',
\t\t\t'cmdview'      : 'תצוגה',
\t\t\t'cmdresize'    : 'שינוי גודל והיפוך',
\t\t\t'cmdsort'      : 'מיון',
\t\t\t'cmdnetmount'  : 'עיגון כונן רשת', // added 18.04.2012

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'סגירה',
\t\t\t'btnSave'   : 'שמירה',
\t\t\t'btnRm'     : 'הסרה',
\t\t\t'btnApply'  : 'החלה',
\t\t\t'btnCancel' : 'ביטול',
\t\t\t'btnNo'     : 'לא',
\t\t\t'btnYes'    : 'כן',
\t\t\t'btnMount'  : 'עיגון',  // added 18.04.2012

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'פתיחת תיקייה',
\t\t\t'ntffile'     : 'פתיחת קובץ',
\t\t\t'ntfreload'   : 'רענון תוכן התיקייה',
\t\t\t'ntfmkdir'    : 'תיקייה נוצרת',
\t\t\t'ntfmkfile'   : 'קבצים נוצרים',
\t\t\t'ntfrm'       : 'קבצים נמחקים',
\t\t\t'ntfcopy'     : 'קבצים מועתקים',
\t\t\t'ntfmove'     : 'קבצים מועברים',
\t\t\t'ntfprepare'  : 'העתקת קבצים בהכנה',
\t\t\t'ntfrename'   : 'שמות קבצים משתנים',
\t\t\t'ntfupload'   : 'קבצים נשלחים',
\t\t\t'ntfdownload' : 'קבצים מתקבלים',
\t\t\t'ntfsave'     : 'שמירת קבצים',
\t\t\t'ntfarchive'  : 'ארכיון נוצר',
\t\t\t'ntfextract'  : 'מחולצים קבצים מארכיון',
\t\t\t'ntfsearch'   : 'קבצים בחיפוש',
\t\t\t'ntfresize'   : 'גודל קבצים משתנה',
\t\t\t'ntfsmth'     : 'מתבצעת פעולה',
\t\t\t'ntfloadimg'  : 'נטענת תמונה',
\t\t\t'ntfnetmount' : 'כונן רשת מעוגן', // added 18.04.2012
\t\t\t'ntfdim'      : 'ממדי תמונה מתקבלים', // added 20.05.2013

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'לא ידוע',
\t\t\t'Today'       : 'היום',
\t\t\t'Yesterday'   : 'מחר',
\t\t\t'msJan'       : 'ינו׳',
\t\t\t'msFeb'       : 'פבר׳',
\t\t\t'msMar'       : 'מרץ',
\t\t\t'msApr'       : 'אפר׳',
\t\t\t'msMay'       : 'מאי',
\t\t\t'msJun'       : 'יונ׳',
\t\t\t'msJul'       : 'יול׳',
\t\t\t'msAug'       : 'אוג׳',
\t\t\t'msSep'       : 'ספט׳',
\t\t\t'msOct'       : 'אוק׳',
\t\t\t'msNov'       : 'נוב׳',
\t\t\t'msDec'       : 'דצמ׳',
\t\t\t'January'     : 'ינואר',
\t\t\t'February'    : 'פברואר',
\t\t\t'March'       : 'מרץ',
\t\t\t'April'       : 'אפריל',
\t\t\t'May'         : 'מאי',
\t\t\t'June'        : 'יוני',
\t\t\t'July'        : 'יולי',
\t\t\t'August'      : 'אוגוסט',
\t\t\t'September'   : 'ספטמבר',
\t\t\t'October'     : 'אוקטובר',
\t\t\t'November'    : 'נובמבר',
\t\t\t'December'    : 'דצמבר',
\t\t\t'Sunday'      : 'יום ראשון',
\t\t\t'Monday'      : 'יום שני',
\t\t\t'Tuesday'     : 'יום שלישי',
\t\t\t'Wednesday'   : 'יום רביעי',
\t\t\t'Thursday'    : 'יום חמישי',
\t\t\t'Friday'      : 'יום שישי',
\t\t\t'Saturday'    : 'שבת',
\t\t\t'Sun'         : 'א׳',
\t\t\t'Mon'         : 'ב׳',
\t\t\t'Tue'         : 'ג׳',
\t\t\t'Wed'         : 'ד׳',
\t\t\t'Thu'         : 'ה',
\t\t\t'Fri'         : 'ו׳',
\t\t\t'Sat'         : 'ש׳',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'לפי שם',
\t\t\t'sortkind'          : 'לפי סוג',
\t\t\t'sortsize'          : 'לפי גודל',
\t\t\t'sortdate'          : 'לפי תאריך',
\t\t\t'sortFoldersFirst'  : 'תיקיות תחילה',

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'נדרש אישור',
\t\t\t'confirmRm'       : 'להסיר את הקבצים?<br/>פעולה זו בלתי הפיכה!',
\t\t\t'confirmRepl'     : 'להחליף קובץ ישן בקובץ חדש?',
\t\t\t'apllyAll'        : 'להחיל על הכול',
\t\t\t'name'            : 'שם',
\t\t\t'size'            : 'גודל',
\t\t\t'perms'           : 'הרשאות',
\t\t\t'modify'          : 'שינוי',
\t\t\t'kind'            : 'סוג',
\t\t\t'read'            : 'קריאה',
\t\t\t'write'           : 'כתיבה',
\t\t\t'noaccess'        : 'אין גישה',
\t\t\t'and'             : 'וגם',
\t\t\t'unknown'         : 'לא ידוע',
\t\t\t'selectall'       : 'בחירת כל הקבצים',
\t\t\t'selectfiles'     : 'בחירת קובץ אחד ומעלה',
\t\t\t'selectffile'     : 'בחירת הקובץ הראשון',
\t\t\t'selectlfile'     : 'בחירת הקובץ האחרון',
\t\t\t'viewlist'        : 'תצוגת רשימה',
\t\t\t'viewicons'       : 'תצוגת סמלים',
\t\t\t'places'          : 'מיקומים',
\t\t\t'calc'            : 'חישוב',
\t\t\t'path'            : 'נתיב',
\t\t\t'aliasfor'        : 'כינוי עבור',
\t\t\t'locked'          : 'נעול',
\t\t\t'dim'             : 'ממדים',
\t\t\t'files'           : 'קבצים',
\t\t\t'folders'         : 'תיקיות',
\t\t\t'items'           : 'פריטים',
\t\t\t'yes'             : 'כן',
\t\t\t'no'              : 'לא',
\t\t\t'link'            : 'קישור',
\t\t\t'searcresult'     : 'תוצאות חיפוש',
\t\t\t'selected'        : 'קבצים נבחרים',
\t\t\t'about'           : 'על אודות',
\t\t\t'shortcuts'       : 'קיצורי דרך',
\t\t\t'help'            : 'עזרה',
\t\t\t'webfm'           : 'מנהל קבצים בדפדפן',
\t\t\t'ver'             : 'גרסה',
\t\t\t'protocolver'     : 'גרסת פרוטוקול',
\t\t\t'homepage'        : 'דף הבית של המיזם',
\t\t\t'docs'            : 'תיעוד',
\t\t\t'github'          : 'פילוג עותק ב־Github',
\t\t\t'twitter'         : 'לעקוב אחרינו בטוויטר',
\t\t\t'facebook'        : 'להצטרף אלינו בפייסבוק',
\t\t\t'team'            : 'צוות',
\t\t\t'chiefdev'        : 'מפתח ראשי',
\t\t\t'developer'       : 'מתכנת',
\t\t\t'contributor'     : 'תורם',
\t\t\t'maintainer'      : 'מתחזק',
\t\t\t'translator'      : 'מתרגם',
\t\t\t'icons'           : 'סמלים',
\t\t\t'dontforget'      : 'לא לשכוח לקחת את המגבת שלך',
\t\t\t'shortcutsof'     : 'קיצורי הדרך מנוטרלים',
\t\t\t'dropFiles'       : 'ניתן להשליך את הקבצים לכאן',
\t\t\t'or'              : 'או',
\t\t\t'selectForUpload' : 'לבחור קבצים להעלאה',
\t\t\t'moveFiles'       : 'העברת קבצים',
\t\t\t'copyFiles'       : 'העתקת קבצים',
\t\t\t'rmFromPlaces'    : 'הסרה ממיקומים',
\t\t\t'aspectRatio'     : 'יחס תצוגה',
\t\t\t'scale'           : 'מתיחה',
\t\t\t'width'           : 'רוחב',
\t\t\t'height'          : 'גובה',
\t\t\t'resize'          : 'שינוי הגודל',
\t\t\t'crop'            : 'חיתוך',
\t\t\t'rotate'          : 'היפוך',
\t\t\t'rotate-cw'       : 'היפוך ב־90 מעלות נגד השעון',
\t\t\t'rotate-ccw'      : 'היפוך ב־90 מעלות עם השעון CCW',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'עיגון כונן רשת', // added 18.04.2012
\t\t\t'protocol'            : 'פרוטוקול', // added 18.04.2012
\t\t\t'host'                : 'מארח', // added 18.04.2012
\t\t\t'port'                : 'פתחה', // added 18.04.2012
\t\t\t'user'                : 'משתמש', // added 18.04.2012
\t\t\t'pass'                : 'ססמה', // added 18.04.2012

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'בלתי ידוע',
\t\t\t'kindFolder'      : 'תיקייה',
\t\t\t'kindAlias'       : 'כינוי',
\t\t\t'kindAliasBroken' : 'כינוי שבור',
\t\t\t// applications
\t\t\t'kindApp'         : 'יישום',
\t\t\t'kindPostscript'  : 'מסמך Postscript',
\t\t\t'kindMsOffice'    : 'מסמך Microsoft Office',
\t\t\t'kindMsWord'      : 'מסמך Microsoft Word',
\t\t\t'kindMsExcel'     : 'מסמך Microsoft Excel',
\t\t\t'kindMsPP'        : 'מצגת Microsoft Powerpoint',
\t\t\t'kindOO'          : 'מסמך Open Office',
\t\t\t'kindAppFlash'    : 'יישום Flash',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'קובץ Bittorrent',
\t\t\t'kind7z'          : 'ארכיון 7z',
\t\t\t'kindTAR'         : 'ארכיון TAR',
\t\t\t'kindGZIP'        : 'ארכיון GZIP',
\t\t\t'kindBZIP'        : 'ארכיון BZIP',
\t\t\t'kindXZ'          : 'ארכיון XZ',
\t\t\t'kindZIP'         : 'ארכיון ZIP',
\t\t\t'kindRAR'         : 'ארכיון RAR',
\t\t\t'kindJAR'         : 'קובץ JAR של Java',
\t\t\t'kindTTF'         : 'גופן True Type',
\t\t\t'kindOTF'         : 'גופן Open Type',
\t\t\t'kindRPM'         : 'חבילת RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'מסמך טקסט',
\t\t\t'kindTextPlain'   : 'טקסט פשוט',
\t\t\t'kindPHP'         : 'מקור PHP',
\t\t\t'kindCSS'         : 'גיליון סגנון מדורג',
\t\t\t'kindHTML'        : 'מסמך HTML',
\t\t\t'kindJS'          : 'מקור Javascript',
\t\t\t'kindRTF'         : 'תבנית טקסט עשיר',
\t\t\t'kindC'           : 'מקור C',
\t\t\t'kindCHeader'     : 'מקור כותרת C',
\t\t\t'kindCPP'         : 'מקור C++',
\t\t\t'kindCPPHeader'   : 'מקור כותרת C++',
\t\t\t'kindShell'       : 'תסריט מעטפת יוניקס',
\t\t\t'kindPython'      : 'מקור Python',
\t\t\t'kindJava'        : 'מקור Java',
\t\t\t'kindRuby'        : 'מקור Ruby',
\t\t\t'kindPerl'        : 'תסריט Perl',
\t\t\t'kindSQL'         : 'מקור SQL',
\t\t\t'kindXML'         : 'מקור XML',
\t\t\t'kindAWK'         : 'מקור AWK',
\t\t\t'kindCSV'         : 'ערכים מופרדים בפסיקים',
\t\t\t'kindDOCBOOK'     : 'מסמךDocbook XML',
\t\t\t// images
\t\t\t'kindImage'       : 'תמונה',
\t\t\t'kindBMP'         : 'תמונת BMP',
\t\t\t'kindJPEG'        : 'תמונת JPEG',
\t\t\t'kindGIF'         : 'תמונת GIF',
\t\t\t'kindPNG'         : 'תמונת PNG',
\t\t\t'kindTIFF'        : 'תמונת TIFF',
\t\t\t'kindTGA'         : 'תמונת TGA',
\t\t\t'kindPSD'         : 'תמונת Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'תמונת מפת סיביות X',
\t\t\t'kindPXM'         : 'תמונת Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'מדיה מסוג שמע',
\t\t\t'kindAudioMPEG'   : 'שמע MPEG',
\t\t\t'kindAudioMPEG4'  : 'שמע MPEG-4',
\t\t\t'kindAudioMIDI'   : 'שמע MIDI',
\t\t\t'kindAudioOGG'    : 'שמע Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'שמע WAV',
\t\t\t'AudioPlaylist'   : 'רשימת נגינה MP3',
\t\t\t'kindVideo'       : 'מדיה מסוג וידאו',
\t\t\t'kindVideoDV'     : 'סרטון DV',
\t\t\t'kindVideoMPEG'   : 'סרטון MPEG',
\t\t\t'kindVideoMPEG4'  : 'סרטון MPEG-4',
\t\t\t'kindVideoAVI'    : 'סרטון AVI',
\t\t\t'kindVideoMOV'    : 'סרטון Quick Time',
\t\t\t'kindVideoWM'     : 'סרטון Windows Media',
\t\t\t'kindVideoFlash'  : 'סרטון Flash',
\t\t\t'kindVideoMKV'    : 'סרטון Matroska',
\t\t\t'kindVideoOGG'    : 'סרטון Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.he.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.he.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.he.js");
    }
}
