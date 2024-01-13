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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ar.js */
class __TwigTemplate_36c70d8de81da7f6fc7161c51c5abbe8657d0b3702f8cbe17dd477d9b1251318 extends Template
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
 * العربية translation
 * @author Tawfek Daghistani <tawfekov@gmail.com>
 * @author Atef Ben Ali <atef.bettaib@gmail.com>
 * @version 2017-08-28
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
\telFinder.prototype.i18.ar = {
\t\ttranslator : 'Tawfek Daghistani &lt;tawfekov@gmail.com&gt;, Atef Ben Ali &lt;atef.bettaib@gmail.com&gt;',
\t\tlanguage   : 'العربية',
\t\tdirection  : 'rtl',
\t\tdateFormat : 'M d, Y h:i A', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 h:i A', // will produce smth like: Today 12:25 PM
\t\tnonameDateFormat : 'ymd-His', // to apply if upload file is noname: 120513172700
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'خطأ',
\t\t\t'errUnknown'           : 'خطأ غير معروف .',
\t\t\t'errUnknownCmd'        : 'أمر غير معروف .',
\t\t\t'errJqui'              : 'إعدادات jQuery UI غير كاملة الرجاء التأكد من وجود كل من selectable, draggable and droppable',
\t\t\t'errNode'              : '. موجود DOM إلى عنصر  elFinder تحتاج  ',
\t\t\t'errURL'               : 'إعدادات خاطئة , عليك وضع الرابط ضمن الإعدادات',
\t\t\t'errAccess'            : 'وصول مرفوض .',
\t\t\t'errConnect'           : 'غير قادر على الاتصال بالخادم الخلفي  (backend)',
\t\t\t'errAbort'             : 'تم فصل الإتصال',
\t\t\t'errTimeout'           : 'مهلة الإتصال قد انتهت.',
\t\t\t'errNotFound'          : 'الخادوم الخلفي غير موجود .',
\t\t\t'errResponse'          : 'رد غير مقبول من الخادوم الخلفي',
\t\t\t'errConf'              : 'خطأ في الإعدادات الخاصة بالخادوم الخلفي ',
\t\t\t'errJSON'              : 'الميزة PHP JSON module غير موجودة ',
\t\t\t'errNoVolumes'         : 'لا يمكن القراءة من الوسائط الموجودة ',
\t\t\t'errCmdParams'         : 'البيانات المرسلة للأمر غير مقبولة \"\$1\".',
\t\t\t'errDataNotJSON'       : 'المعلومات المرسلة ليست من نوع JSON ',
\t\t\t'errDataEmpty'         : 'لا يوجد معلومات مرسلة',
\t\t\t'errCmdReq'            : 'الخادوم الخلفي يطلب وجود اسم الأمر ',
\t\t\t'errOpen'              : 'غير قادر على فتح  \"\$1\".',
\t\t\t'errNotFolder'         : 'العنصر المختار ليس مجلد',
\t\t\t'errNotFile'           : 'العنصر المختار ليس ملف',
\t\t\t'errRead'              : 'غير قادر على القراءة \"\$1\".',
\t\t\t'errWrite'             : 'غير قادر على الكتابة \"\$1\".',
\t\t\t'errPerm'              : 'وصول مرفوض ',
\t\t\t'errLocked'            : ' محمي ولا يمكن التعديل أو النقل أو إعادة التسمية\"\$1\"',
\t\t\t'errExists'            : ' موجود مسبقاً \"\$1\"',
\t\t\t'errInvName'           : 'الاسم مرفوض',
\t\t\t'errInvDirname'        : 'اسم مجلد غير صالح',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'المجلد غير موجود',
\t\t\t'errFileNotFound'      : 'الملف غير موجود',
\t\t\t'errTrgFolderNotFound' : 'الملف الهدف  \"\$1\" غير موجود ',
\t\t\t'errPopup'             : 'يمنع المتصفح من إنشاء نافذة منبثقة، الرجاء تعديل الخيارات الخاصة من إعدادات المتصفح',
\t\t\t'errMkdir'             : ' غير قادر على إنشاء مجلد جديد \"\$1\".',
\t\t\t'errMkfile'            : ' غير قادر على إنشاء ملف جديد\"\$1\".',
\t\t\t'errRename'            : 'غير قادر على إعادة تسمية الـ  \"\$1\".',
\t\t\t'errCopyFrom'          : 'نسخ الملفات من الوسط المحدد \"\$1\" غير مسموح.',
\t\t\t'errCopyTo'            : 'نسخ الملفات إلى الوسط المحدد \"\$1\" غير مسموح .',
\t\t\t'errMkOutLink'         : 'لا يمكن إنشاء رابط خارج مساحة الملف الجذر.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'خطأ أثناء عملية الرفع.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'غير قادر على رفع \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'لم يتم رفع أي ملف .',
\t\t\t'errUploadTotalSize'   : 'حجم البيانات أكبر من الحجم المسموح به.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'حجم الملف أكبر من الحجم المسموح به.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : ' نوع ملف غير مسموح به.',
\t\t\t'errUploadTransfer'    : '\"\$1\" خطأ أثناء عملية النقل.',
\t\t\t'errUploadTemp'        : 'لا يمكن إنشاء ملف وقتي للرفع.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'الكائن \"\$1\" موجود في هذا المكان ولا يمكن استبداله بكائن من نوع آخر.', // new
\t\t\t'errReplace'           : 'لا يمكن استبدال \"\$1\".',
\t\t\t'errSave'              : 'غير قادر على الحفظ في \"\$1\".',
\t\t\t'errCopy'              : 'غير قادر على النسخ إلى \"\$1\".',
\t\t\t'errMove'              : 'غير قادر على النقل إلى \"\$1\".',
\t\t\t'errCopyInItself'      : 'غير قادر على نسخ الملف \"\$1\" ضمن الملف نفسه.',
\t\t\t'errRm'                : 'غير قادر على الحذف \"\$1\".',
\t\t\t'errTrash'             : 'لا يمكن النقل إلى سلة المهملات', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'لا يمكن فسخ الملف(ـات) المصدري(ـة).',
\t\t\t'errExtract'           : 'غير قادر على استخراج الملفات من \"\$1\".',
\t\t\t'errArchive'           : 'غير قادر على إنشاء ملف مضغوط.',
\t\t\t'errArcType'           : 'نوع الملف المضغوط غير مدعومة.',
\t\t\t'errNoArchive'         : 'هذا الملف ليس ملف مضغوط أو ذو صيغة غير مدعومة.',
\t\t\t'errCmdNoSupport'      : 'الخادوم الخلفي لا يدعم هذا الأمر ',
\t\t\t'errReplByChild'       : 'لا يمكن استبدال الملف \"\$1\" بعنصر محتوِ فيه.',
\t\t\t'errArcSymlinks'       : 'For security reason denied to unpack archives contains symlinks.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'الملفات المضغوطة تجاوزت السعة المسموح بها.',
\t\t\t'errResize'            : 'Unable to resize \"\$1\".',
\t\t\t'errResizeDegree'      : 'Invalid rotate degree.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Unable to rotate image.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Invalid image size.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Image size not changed.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'نوع ملف غير مدعوم.',
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
\t\t\t'errNetUnMount'        : 'Unable to unmount.', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Not convertible to UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Try the modern browser, If you\\'d like to upload the folder.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Timed out while searching \"\$1\". Search result is partial.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Re-authorization is required.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Max number of selectable items is \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Unable to restore from the trash. Can\\'t identify the restore destination.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Editor not found to this file type.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Error occurred on the server side.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Unable to empty folder \"\$1\".', // from v2.1.25 added 22.6.2017

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'أنشئ مجلد مضغوط',
\t\t\t'cmdback'      : 'الخلف',
\t\t\t'cmdcopy'      : 'نسخ',
\t\t\t'cmdcut'       : 'قص',
\t\t\t'cmddownload'  : 'تحميل',
\t\t\t'cmdduplicate' : 'تكرار',
\t\t\t'cmdedit'      : 'تعديل الملف',
\t\t\t'cmdextract'   : 'استخراج الملفات',
\t\t\t'cmdforward'   : 'الأمام',
\t\t\t'cmdgetfile'   : 'اختيار الملفات',
\t\t\t'cmdhelp'      : 'عن هذا المشروع',
\t\t\t'cmdhome'      : 'المجلد الرئيس',
\t\t\t'cmdinfo'      : 'معلومات ',
\t\t\t'cmdmkdir'     : 'مجلد جديد',
\t\t\t'cmdmkdirin'   : 'داخل ملف جديد', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'ملف جديد',
\t\t\t'cmdopen'      : 'فتح',
\t\t\t'cmdpaste'     : 'لصق',
\t\t\t'cmdquicklook' : 'معاينة',
\t\t\t'cmdreload'    : 'إعادة تحميل',
\t\t\t'cmdrename'    : 'إعادة تسمية',
\t\t\t'cmdrm'        : 'حذف',
\t\t\t'cmdtrash'     : 'داخل سلة المهملات', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Restore', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'بحث عن ملفات',
\t\t\t'cmdup'        : 'تغيير المسار إلى مستوى أعلى',
\t\t\t'cmdupload'    : 'رفع ملفات',
\t\t\t'cmdview'      : 'عرض',
\t\t\t'cmdresize'    : 'Resize & Rotate',
\t\t\t'cmdsort'      : 'فرز',
\t\t\t'cmdnetmount'  : 'Mount network volume', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'To Places', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Change mode', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'فتح ملف', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Reset column width', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'ملء الشاشة', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Move', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'تفريغ الملف', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'تراجع', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'إعاجة', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Preferences', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Select all', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Select none', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Invert selection', // from v2.1.28 added 15.08.2017

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'إغلاق',
\t\t\t'btnSave'   : 'حفظ',
\t\t\t'btnRm'     : 'إزالة',
\t\t\t'btnApply'  : 'تطبيق',
\t\t\t'btnCancel' : 'إلغاء',
\t\t\t'btnNo'     : 'لا',
\t\t\t'btnYes'    : 'نعم',
\t\t\t'btnMount'  : 'Mount',  // added 18.04.2012
\t\t\t'btnApprove': 'Goto \$1 & approve', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Convert', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Here',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Volume',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'All',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME Type', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Filename',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Save & Close', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Backup', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'إعادة تسمية',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'إعادة تسمية (الجميع)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Prev (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Next (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'حفظ إلى', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'فتح مجلد',
\t\t\t'ntffile'     : 'فتح ملف',
\t\t\t'ntfreload'   : 'إعادة عرض محتويات المجلد ',
\t\t\t'ntfmkdir'    : 'ينشئ المجلدات',
\t\t\t'ntfmkfile'   : 'ينشئ الملفات',
\t\t\t'ntfrm'       : 'حذف الملفات',
\t\t\t'ntfcopy'     : 'نسخ الملفات',
\t\t\t'ntfmove'     : 'نقل الملفات',
\t\t\t'ntfprepare'  : 'تحضير لنسخ الملفات',
\t\t\t'ntfrename'   : 'إعادة تسمية الملفات',
\t\t\t'ntfupload'   : 'رفع الملفات',
\t\t\t'ntfdownload' : 'تحميل الملفات',
\t\t\t'ntfsave'     : 'حفظ الملفات',
\t\t\t'ntfarchive'  : 'ينشئ ملف مضغوط',
\t\t\t'ntfextract'  : 'استخراج ملفات من الملف المضغوط ',
\t\t\t'ntfsearch'   : 'يبحث عن ملفات',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'يفعل شيئا',
\t\t\t'ntfloadimg'  : 'تحميل الصورة',
\t\t\t'ntfnetmount' : 'Mounting network volume', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Unmounting network volume', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Acquiring image dimension', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'قراءة معلومات الملف', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Getting URL of link', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Changing file mode', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Verifying upload file name', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Creating a file for download', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Getting path infomation', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Processing the uploaded file', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Doing throw in the trash', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Doing restore from tha trash', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Checking destination folder', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Undoing previous operation', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Redoing previous undone', // from v2.1.27 added 31.07.2017

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Trash', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'غير معلوم',
\t\t\t'Today'       : 'اليوم',
\t\t\t'Yesterday'   : 'البارحة',
\t\t\t'msJan'       : 'كانون الثاني',
\t\t\t'msFeb'       : 'شباط',
\t\t\t'msMar'       : 'آذار',
\t\t\t'msApr'       : 'نيسان',
\t\t\t'msMay'       : 'أيار',
\t\t\t'msJun'       : 'حزيران',
\t\t\t'msJul'       : 'تموز',
\t\t\t'msAug'       : 'آب',
\t\t\t'msSep'       : 'أيلول',
\t\t\t'msOct'       : 'تشرين الأول',
\t\t\t'msNov'       : 'تشرين الثاني',
\t\t\t'msDec'       : 'كانون الأول ',
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
\t\t\t'Sunday'      : 'الأحد',
\t\t\t'Monday'      : 'الاثنين',
\t\t\t'Tuesday'     : 'الثلاثاء',
\t\t\t'Wednesday'   : 'الإربعاء',
\t\t\t'Thursday'    : 'الخميس',
\t\t\t'Friday'      : 'الجمعة',
\t\t\t'Saturday'    : 'السبت',
\t\t\t'Sun'         : 'الأحد',
\t\t\t'Mon'         : 'الاثنين',
\t\t\t'Tue'         : 'الثلاثاء',
\t\t\t'Wed'         : 'الإربعاء',
\t\t\t'Thu'         : 'الخميس',
\t\t\t'Fri'         : 'الجمعة',
\t\t\t'Sat'         : 'السبت',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'بالاسم',
\t\t\t'sortkind'          : 'بالنوع',
\t\t\t'sortsize'          : 'بالحجم',
\t\t\t'sortdate'          : 'بالتاريخ',
\t\t\t'sortFoldersFirst'  : 'الملفات أولا',
\t\t\t'sortperm'          : 'بالصلاحيات', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'by mode',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'by owner',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'بالمجموعة',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Also Treeview',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'ملف_جديد.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'مجلد_جديد',   // added 10.11.2015
\t\t\t'Archive'           : 'ملف_مضغوط',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'يرجى التأكيد',
\t\t\t'confirmRm'       : 'هل أنت متأكد من أنك تريد الحذف؟ لا يمكن التراجع عن هذه العملية ',
\t\t\t'confirmRepl'     : 'استبدال الملف القديم بملف جديد؟',
\t\t\t'confirmRest'     : 'استبدال العنصر بالعنصر من سلة المهملات؟', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Not in UTF-8<br/>Convert to UTF-8?<br/>Contents become UTF-8 by saving after conversion.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Character encoding of this file couldn\\'t be detected. It need to temporarily convert to UTF-8 for editting.<br/>Please select character encoding of this file.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'It has been modified.<br/>Losing work if you do not save changes.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Are you sure you want to move items to trash bin?', //from v2.1.24 added 29.4.2017
\t\t\t'apllyAll'        : 'تطبيق على الكل',
\t\t\t'name'            : 'الاسم',
\t\t\t'size'            : 'الحجم',
\t\t\t'perms'           : 'الصلاحيات',
\t\t\t'modify'          : 'آخر تعديل',
\t\t\t'kind'            : 'نوع الملف',
\t\t\t'read'            : 'قراءة',
\t\t\t'write'           : 'كتابة',
\t\t\t'noaccess'        : 'وصول ممنوع',
\t\t\t'and'             : 'و',
\t\t\t'unknown'         : 'غير معروف',
\t\t\t'selectall'       : 'تحديد كل الملفات',
\t\t\t'selectfiles'     : 'تحديد ملفات',
\t\t\t'selectffile'     : 'تحديد الملف الأول',
\t\t\t'selectlfile'     : 'تحديد الملف الأخير',
\t\t\t'viewlist'        : 'عرض قائمة',
\t\t\t'viewicons'       : 'عرض أيْقونات',
\t\t\t'places'          : 'المواقع',
\t\t\t'calc'            : 'حساب',
\t\t\t'path'            : 'مسار',
\t\t\t'aliasfor'        : 'Alias for',
\t\t\t'locked'          : 'مقفول',
\t\t\t'dim'             : 'الأبعاد',
\t\t\t'files'           : 'ملفات',
\t\t\t'folders'         : 'مجلدات',
\t\t\t'items'           : 'عناصر',
\t\t\t'yes'             : 'نعم',
\t\t\t'no'              : 'لا',
\t\t\t'link'            : 'رابط',
\t\t\t'searcresult'     : 'نتائج البحث',
\t\t\t'selected'        : 'العناصر المحددة',
\t\t\t'about'           : 'عن البرنامج',
\t\t\t'shortcuts'       : 'الاختصارات',
\t\t\t'help'            : 'مساعدة',
\t\t\t'webfm'           : 'مدير ملفات الويب',
\t\t\t'ver'             : 'رقم الإصدار',
\t\t\t'protocolver'     : 'إصدار البرتوكول',
\t\t\t'homepage'        : 'الصفحة الرئيسة',
\t\t\t'docs'            : 'التوثيق',
\t\t\t'github'          : 'شاركنا بتطوير المشروع على Github',
\t\t\t'twitter'         : 'تابعنا على تويتر',
\t\t\t'facebook'        : 'انضم إلينا على الفيس بوك',
\t\t\t'team'            : 'الفريق',
\t\t\t'chiefdev'        : 'رئيس المبرمجين',
\t\t\t'developer'       : 'مبرمج',
\t\t\t'contributor'     : 'مساعم',
\t\t\t'maintainer'      : 'مشارك',
\t\t\t'translator'      : 'مترجم',
\t\t\t'icons'           : 'أيقونات',
\t\t\t'dontforget'      : 'and don\\'t forget to take your towel',
\t\t\t'shortcutsof'     : 'الاختصارات غير مفعلة',
\t\t\t'dropFiles'       : 'لصق الملفات هنا',
\t\t\t'or'              : 'أو',
\t\t\t'selectForUpload' : 'اختر الملفات التي تريد رفعها',
\t\t\t'moveFiles'       : 'قص الملفات',
\t\t\t'copyFiles'       : 'نسخ الملفات',
\t\t\t'restoreFiles'    : 'Restore items', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Remove from places',
\t\t\t'aspectRatio'     : 'Aspect ratio',
\t\t\t'scale'           : 'Scale',
\t\t\t'width'           : 'عرض',
\t\t\t'height'          : 'طول',
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
\t\t\t'user'                : 'مستخدم', // added 18.04.2012
\t\t\t'pass'                : 'كلمة العبور', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Are you unmount \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Drop or Paste files from browser', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Drop files, Paste URLs or images(clipboard) here', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Encoding', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Locale',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Target: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Search by input MIME Type', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Owner', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Group', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Other', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Execute', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Permission', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Mode', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Folder is empty', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Folder is empty\\\\A Drop to add items', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Folder is empty\\\\A Long tap to add items', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Quality', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Auto sync',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Move up',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Get URL link', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Selected items (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'Folder ID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Allow offline access', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'To re-authenticate', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Now loading...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Open multiple files', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'You are trying to open the \$1 files. Are you sure you want to open in browser?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Search results is empty in search target.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'It is editing a file.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'You have selected \$1 items.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'You have \$1 items in the clipboard.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Incremental search is only from the current view.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Reinstate', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 complete', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Context menu', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Page turning', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Volume roots', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Reset', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Background color', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Color picker', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px Grid', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Enabled', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Disabled', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Search results is empty in current view.\\\\APress [Enter] to expand search target.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'First letter search results is empty in current view.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Text label', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 mins left', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Reopen with selected encoding', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Save with the selected encoding', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Select folder', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'First letter search', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Presets', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'It\\'s too many items so it can\\'t into trash.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'TextArea', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Empty the folder \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'There are no items in a folder \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Preference', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Language setting', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Initialize the settings saved in this browser', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Toolbar setting', // from v2.1.27 added 2.8.2017

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'غير معروف',
\t\t\t'kindRoot'        : 'Volume Root', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'مجلد',
\t\t\t'kindAlias'       : 'اختصار',
\t\t\t'kindAliasBroken' : 'اختصار غير صالح',
\t\t\t// applications
\t\t\t'kindApp'         : 'برنامج',
\t\t\t'kindPostscript'  : 'Postscript ملف',
\t\t\t'kindMsOffice'    : 'Microsoft Office ملف',
\t\t\t'kindMsWord'      : 'Microsoft Word ملف',
\t\t\t'kindMsExcel'     : 'Microsoft Excel ملف',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint عرض تقديمي ',
\t\t\t'kindOO'          : 'Open Office ملف',
\t\t\t'kindAppFlash'    : 'تطبيق فلاش',
\t\t\t'kindPDF'         : 'ملف (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent ملف',
\t\t\t'kind7z'          : '7z ملف',
\t\t\t'kindTAR'         : 'TAR ملف',
\t\t\t'kindGZIP'        : 'GZIP ملف',
\t\t\t'kindBZIP'        : 'BZIP ملف',
\t\t\t'kindXZ'          : 'XZ ملف',
\t\t\t'kindZIP'         : 'ZIP ملف',
\t\t\t'kindRAR'         : 'RAR ملف',
\t\t\t'kindJAR'         : 'Java JAR ملف',
\t\t\t'kindTTF'         : 'True Type خط ',
\t\t\t'kindOTF'         : 'Open Type خط ',
\t\t\t'kindRPM'         : 'RPM ملف تنصيب',
\t\t\t// texts
\t\t\t'kindText'        : 'Text ملف',
\t\t\t'kindTextPlain'   : 'مستند نصي',
\t\t\t'kindPHP'         : 'PHP ملف نصي برمجي لـ',
\t\t\t'kindCSS'         : 'Cascading style sheet',
\t\t\t'kindHTML'        : 'HTML ملف',
\t\t\t'kindJS'          : 'Javascript ملف نصي برمجي لـ',
\t\t\t'kindRTF'         : 'Rich Text Format',
\t\t\t'kindC'           : 'C ملف نصي برمجي لـ',
\t\t\t'kindCHeader'     : 'C header ملف نصي برمجي لـ',
\t\t\t'kindCPP'         : 'C++ ملف نصي برمجي لـ',
\t\t\t'kindCPPHeader'   : 'C++ header ملف نصي برمجي لـ',
\t\t\t'kindShell'       : 'Unix shell script',
\t\t\t'kindPython'      : 'Python ملف نصي برمجي لـ',
\t\t\t'kindJava'        : 'Java ملف نصي برمجي لـ',
\t\t\t'kindRuby'        : 'Ruby ملف نصي برمجي لـ',
\t\t\t'kindPerl'        : 'Perl script',
\t\t\t'kindSQL'         : 'SQL ملف نصي برمجي لـ',
\t\t\t'kindXML'         : 'XML ملف',
\t\t\t'kindAWK'         : 'AWK ملف نصي برمجي لـ',
\t\t\t'kindCSV'         : 'ملف CSV',
\t\t\t'kindDOCBOOK'     : 'Docbook XML ملف',
\t\t\t'kindMarkdown'    : 'Markdown text', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'صورة',
\t\t\t'kindBMP'         : 'BMP صورة',
\t\t\t'kindJPEG'        : 'JPEG صورة',
\t\t\t'kindGIF'         : 'GIF صورة',
\t\t\t'kindPNG'         : 'PNG صورة',
\t\t\t'kindTIFF'        : 'TIFF صورة',
\t\t\t'kindTGA'         : 'TGA صورة',
\t\t\t'kindPSD'         : 'Adobe Photoshop صورة',
\t\t\t'kindXBITMAP'     : 'X bitmap صورة',
\t\t\t'kindPXM'         : 'Pixelmator صورة',
\t\t\t// media
\t\t\t'kindAudio'       : 'ملف صوتي',
\t\t\t'kindAudioMPEG'   : 'MPEG ملف صوتي',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 ملف صوتي',
\t\t\t'kindAudioMIDI'   : 'MIDI ملف صوتي',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis ملف صوتي',
\t\t\t'kindAudioWAV'    : 'WAV ملف صوتي',
\t\t\t'AudioPlaylist'   : 'MP3 قائمة تشغيل',
\t\t\t'kindVideo'       : 'ملف فيديو',
\t\t\t'kindVideoDV'     : 'DV ملف فيديو',
\t\t\t'kindVideoMPEG'   : 'MPEG ملف فيديو',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 ملف فيديو',
\t\t\t'kindVideoAVI'    : 'AVI ملف فيديو',
\t\t\t'kindVideoMOV'    : 'Quick Time ملف فيديو',
\t\t\t'kindVideoWM'     : 'Windows Media ملف فيديو',
\t\t\t'kindVideoFlash'  : 'Flash ملف فيديو',
\t\t\t'kindVideoMKV'    : 'Matroska ملف فيديو',
\t\t\t'kindVideoOGG'    : 'Ogg ملف فيديو'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ar.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ar.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ar.js");
    }
}
