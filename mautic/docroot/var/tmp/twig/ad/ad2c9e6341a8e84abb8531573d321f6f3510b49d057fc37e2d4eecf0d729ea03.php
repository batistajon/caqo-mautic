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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.LANG.js */
class __TwigTemplate_8b89035172d0f3f4c7d9913859e942ccfb24e55eb1758d6b84f825a6d89289cc extends Template
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
 * elFinder translation template
 * use this file to create new translation
 * submit new translation via https://github.com/Studio-42/elFinder/issues
 * or make a pull request
 */

/**
 * XXXXX translation
 * @author Translator Name <translator@email.tld>
 * @version 201x-xx-xx
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
\telFinder.prototype.i18.REPLACE_WITH_xx_OR_xx_YY_LANG_CODE = {
\t\ttranslator : 'Translator name &lt;translator@email.tld&gt;',
\t\tlanguage   : 'Language of translation in your language',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'M d, Y h:i A', // will show like: Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 h:i A', // will show like: Today 12:25 PM
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 120513-172700
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Error',
\t\t\t'errUnknown'           : 'Unknown error.',
\t\t\t'errUnknownCmd'        : 'Unknown command.',
\t\t\t'errJqui'              : 'Invalid jQuery UI configuration. Selectable, draggable and droppable components must be included.',
\t\t\t'errNode'              : 'elFinder requires DOM Element to be created.',
\t\t\t'errURL'               : 'Invalid elFinder configuration! URL option is not set.',
\t\t\t'errAccess'            : 'Access denied.',
\t\t\t'errConnect'           : 'Unable to connect to backend.',
\t\t\t'errAbort'             : 'Connection aborted.',
\t\t\t'errTimeout'           : 'Connection timeout.',
\t\t\t'errNotFound'          : 'Backend not found.',
\t\t\t'errResponse'          : 'Invalid backend response.',
\t\t\t'errConf'              : 'Invalid backend configuration.',
\t\t\t'errJSON'              : 'PHP JSON module not installed.',
\t\t\t'errNoVolumes'         : 'Readable volumes not available.',
\t\t\t'errCmdParams'         : 'Invalid parameters for command \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Data is not JSON.',
\t\t\t'errDataEmpty'         : 'Data is empty.',
\t\t\t'errCmdReq'            : 'Backend request requires command name.',
\t\t\t'errOpen'              : 'Unable to open \"\$1\".',
\t\t\t'errNotFolder'         : 'Object is not a folder.',
\t\t\t'errNotFile'           : 'Object is not a file.',
\t\t\t'errRead'              : 'Unable to read \"\$1\".',
\t\t\t'errWrite'             : 'Unable to write into \"\$1\".',
\t\t\t'errPerm'              : 'Permission denied.',
\t\t\t'errLocked'            : '\"\$1\" is locked and can not be renamed, moved or removed.',
\t\t\t'errExists'            : 'Item named \"\$1\" already exists.',
\t\t\t'errInvName'           : 'Invalid file name.',
\t\t\t'errInvDirname'        : 'Invalid folder name.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Folder not found.',
\t\t\t'errFileNotFound'      : 'File not found.',
\t\t\t'errTrgFolderNotFound' : 'Target folder \"\$1\" not found.',
\t\t\t'errPopup'             : 'Browser prevented opening popup window. To open file enable it in browser options.',
\t\t\t'errMkdir'             : 'Unable to create folder \"\$1\".',
\t\t\t'errMkfile'            : 'Unable to create file \"\$1\".',
\t\t\t'errRename'            : 'Unable to rename \"\$1\".',
\t\t\t'errCopyFrom'          : 'Copying files from volume \"\$1\" not allowed.',
\t\t\t'errCopyTo'            : 'Copying files to volume \"\$1\" not allowed.',
\t\t\t'errMkOutLink'         : 'Unable to create a link to outside the volume root.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Upload error.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Unable to upload \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'No files found for upload.',
\t\t\t'errUploadTotalSize'   : 'Data exceeds the maximum allowed size.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'File exceeds maximum allowed size.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'File type not allowed.',
\t\t\t'errUploadTransfer'    : '\"\$1\" transfer error.',
\t\t\t'errUploadTemp'        : 'Unable to make temporary file for upload.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Object \"\$1\" already exists at this location and can not be replaced by object with another type.', // new
\t\t\t'errReplace'           : 'Unable to replace \"\$1\".',
\t\t\t'errSave'              : 'Unable to save \"\$1\".',
\t\t\t'errCopy'              : 'Unable to copy \"\$1\".',
\t\t\t'errMove'              : 'Unable to move \"\$1\".',
\t\t\t'errCopyInItself'      : 'Unable to copy \"\$1\" into itself.',
\t\t\t'errRm'                : 'Unable to remove \"\$1\".',
\t\t\t'errTrash'             : 'Unable into trash.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Unable remove source file(s).',
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
\t\t\t'moreErrors'           : 'There are \$1 more errors.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Create archive',
\t\t\t'cmdback'      : 'Back',
\t\t\t'cmdcopy'      : 'Copy',
\t\t\t'cmdcut'       : 'Cut',
\t\t\t'cmddownload'  : 'Download',
\t\t\t'cmdduplicate' : 'Duplicate',
\t\t\t'cmdedit'      : 'Edit file',
\t\t\t'cmdextract'   : 'Extract files from archive',
\t\t\t'cmdforward'   : 'Forward',
\t\t\t'cmdgetfile'   : 'Select files',
\t\t\t'cmdhelp'      : 'About this software',
\t\t\t'cmdhome'      : 'Root',
\t\t\t'cmdinfo'      : 'Get info',
\t\t\t'cmdmkdir'     : 'New folder',
\t\t\t'cmdmkdirin'   : 'Into New Folder', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'New file',
\t\t\t'cmdopen'      : 'Open',
\t\t\t'cmdpaste'     : 'Paste',
\t\t\t'cmdquicklook' : 'Preview',
\t\t\t'cmdreload'    : 'Reload',
\t\t\t'cmdrename'    : 'Rename',
\t\t\t'cmdrm'        : 'Delete',
\t\t\t'cmdtrash'     : 'Into trash', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Restore', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Find files',
\t\t\t'cmdup'        : 'Go to parent folder',
\t\t\t'cmdupload'    : 'Upload files',
\t\t\t'cmdview'      : 'View',
\t\t\t'cmdresize'    : 'Resize & Rotate',
\t\t\t'cmdsort'      : 'Sort',
\t\t\t'cmdnetmount'  : 'Mount network volume', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'To Places', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Change mode', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Open a folder', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Reset column width', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Full Screen', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Move', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Empty the folder', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Undo', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Redo', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Preferences', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Select all', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Select none', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Invert selection', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Open in new window', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Hide (Preference)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Close',
\t\t\t'btnSave'   : 'Save',
\t\t\t'btnRm'     : 'Remove',
\t\t\t'btnApply'  : 'Apply',
\t\t\t'btnCancel' : 'Cancel',
\t\t\t'btnNo'     : 'No',
\t\t\t'btnYes'    : 'Yes',
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
\t\t\t'btnRename'    : 'Rename',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Rename(All)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Prev (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Next (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Save As', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Open folder',
\t\t\t'ntffile'     : 'Open file',
\t\t\t'ntfreload'   : 'Reload folder content',
\t\t\t'ntfmkdir'    : 'Creating folder',
\t\t\t'ntfmkfile'   : 'Creating files',
\t\t\t'ntfrm'       : 'Delete items',
\t\t\t'ntfcopy'     : 'Copy items',
\t\t\t'ntfmove'     : 'Move items',
\t\t\t'ntfprepare'  : 'Checking existing items',
\t\t\t'ntfrename'   : 'Rename files',
\t\t\t'ntfupload'   : 'Uploading files',
\t\t\t'ntfdownload' : 'Downloading files',
\t\t\t'ntfsave'     : 'Save files',
\t\t\t'ntfarchive'  : 'Creating archive',
\t\t\t'ntfextract'  : 'Extracting files from archive',
\t\t\t'ntfsearch'   : 'Searching files',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'Doing something',
\t\t\t'ntfloadimg'  : 'Loading image',
\t\t\t'ntfnetmount' : 'Mounting network volume', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Unmounting network volume', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Acquiring image dimension', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Reading folder infomation', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Getting URL of link', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Changing file mode', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Verifying upload file name', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Creating a file for download', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Getting path infomation', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Processing the uploaded file', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Doing throw in the trash', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Doing restore from the trash', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Checking destination folder', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Undoing previous operation', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Redoing previous undone', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'Checking contents', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Trash', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'unknown',
\t\t\t'Today'       : 'Today',
\t\t\t'Yesterday'   : 'Yesterday',
\t\t\t'msJan'       : 'Jan',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Apr',
\t\t\t'msMay'       : 'May',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Jul',
\t\t\t'msAug'       : 'Aug',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Oct',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Dec',
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
\t\t\t'sortperm'          : 'by permission', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'by mode',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'by owner',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'by group',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Also Treeview',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NewFile.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NewFolder',   // added 10.11.2015
\t\t\t'Archive'           : 'NewArchive',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'NewFile.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1: File',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Confirmation required',
\t\t\t'confirmRm'       : 'Are you sure you want to permanently remove items?<br/>This cannot be undone!',
\t\t\t'confirmRepl'     : 'Replace old file with new one? (If it contains folders, it will be merged. To backup and replace, select Backup.)',
\t\t\t'confirmRest'     : 'Replace existing item with the item in trash?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Not in UTF-8<br/>Convert to UTF-8?<br/>Contents become UTF-8 by saving after conversion.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Character encoding of this file couldn\\'t be detected. It need to temporarily convert to UTF-8 for editting.<br/>Please select character encoding of this file.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'It has been modified.<br/>Losing work if you do not save changes.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Are you sure you want to move items to trash bin?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'Are you sure you want to move items to \"\$1\"?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : 'Apply to all',
\t\t\t'name'            : 'Name',
\t\t\t'size'            : 'Size',
\t\t\t'perms'           : 'Permissions',
\t\t\t'modify'          : 'Modified',
\t\t\t'kind'            : 'Kind',
\t\t\t'read'            : 'read',
\t\t\t'write'           : 'write',
\t\t\t'noaccess'        : 'no access',
\t\t\t'and'             : 'and',
\t\t\t'unknown'         : 'unknown',
\t\t\t'selectall'       : 'Select all items',
\t\t\t'selectfiles'     : 'Select item(s)',
\t\t\t'selectffile'     : 'Select first item',
\t\t\t'selectlfile'     : 'Select last item',
\t\t\t'viewlist'        : 'List view',
\t\t\t'viewicons'       : 'Icons view',
\t\t\t'viewSmall'       : 'Small icons', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Medium icons', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Large icons', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Extra large icons', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Places',
\t\t\t'calc'            : 'Calculate',
\t\t\t'path'            : 'Path',
\t\t\t'aliasfor'        : 'Alias for',
\t\t\t'locked'          : 'Locked',
\t\t\t'dim'             : 'Dimensions',
\t\t\t'files'           : 'Files',
\t\t\t'folders'         : 'Folders',
\t\t\t'items'           : 'Items',
\t\t\t'yes'             : 'yes',
\t\t\t'no'              : 'no',
\t\t\t'link'            : 'Link',
\t\t\t'searcresult'     : 'Search results',
\t\t\t'selected'        : 'selected items',
\t\t\t'about'           : 'About',
\t\t\t'shortcuts'       : 'Shortcuts',
\t\t\t'help'            : 'Help',
\t\t\t'webfm'           : 'Web file manager',
\t\t\t'ver'             : 'Version',
\t\t\t'protocolver'     : 'protocol version',
\t\t\t'homepage'        : 'Project home',
\t\t\t'docs'            : 'Documentation',
\t\t\t'github'          : 'Fork us on GitHub',
\t\t\t'twitter'         : 'Follow us on Twitter',
\t\t\t'facebook'        : 'Join us on Facebook',
\t\t\t'team'            : 'Team',
\t\t\t'chiefdev'        : 'chief developer',
\t\t\t'developer'       : 'developer',
\t\t\t'contributor'     : 'contributor',
\t\t\t'maintainer'      : 'maintainer',
\t\t\t'translator'      : 'translator',
\t\t\t'icons'           : 'Icons',
\t\t\t'dontforget'      : 'and don\\'t forget to take your towel',
\t\t\t'shortcutsof'     : 'Shortcuts disabled',
\t\t\t'dropFiles'       : 'Drop files here',
\t\t\t'or'              : 'or',
\t\t\t'selectForUpload' : 'Select files',
\t\t\t'moveFiles'       : 'Move items',
\t\t\t'copyFiles'       : 'Copy items',
\t\t\t'restoreFiles'    : 'Restore items', // from v2.1.24 added 5.5.2017
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
\t\t\t'language'        : 'Language', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Initialize the settings saved in this browser', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Toolbar settings', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 chars left.',  // from v2.1.29 added 30.8.2017
\t\t\t'linesLeft'       : '... \$1 lines left.',  // from v2.1.52 added 16.1.2020
\t\t\t'sum'             : 'Sum', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Rough file size', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Focus on the element of dialog with mouseover',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Select', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Action when select file', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Open with the editor used last time', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Invert selection', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Are you sure you want to rename \$1 selected items like \$2?<br/>This cannot be undone!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Batch rename', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Number', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Add prefix', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Add suffix', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Change extention', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Columns settings (List view)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'All changes will reflect immediately to the archive.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Any changes will not reflect until un-mount this volume.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'The following volume(s) mounted on this volume also unmounted. Are you sure to unmount it?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Selection Info', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Algorithms to show the file hash', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Info Items (Selection Info Panel)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Press again to exit.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Toolbar', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Work Space', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Dialog', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'All', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'Icon Size (Icons view)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'Open the maximized editor window', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : 'Because conversion by API is not currently available, please convert on the website.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : 'After conversion, you must be upload with the item URL or a downloaded file to save the converted file.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : 'Convert on the site of \$1', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : 'Integrations', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'This elFinder has the following external services integrated. Please check the terms of use, privacy policy, etc. before using it.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : 'Show hidden items', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : 'Hide hidden items', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : 'Show/Hide hidden items', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : 'File types to enable with \"New file\"', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : 'Type of the Text file', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : 'Add', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : 'Theme', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : 'Default', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : 'Description', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : 'Website', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : 'Author', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : 'Email', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : 'License', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : 'This item can\\'t be saved. To avoid losing the edits you need to export to your PC.', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': 'Double click on the file to select it.', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : 'Use fullscreen mode', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Unknown',
\t\t\t'kindRoot'        : 'Volume Root', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Folder',
\t\t\t'kindSelects'     : 'Selections', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Broken alias',
\t\t\t// applications
\t\t\t'kindApp'         : 'Application',
\t\t\t'kindPostscript'  : 'Postscript document',
\t\t\t'kindMsOffice'    : 'Microsoft Office document',
\t\t\t'kindMsWord'      : 'Microsoft Word document',
\t\t\t'kindMsExcel'     : 'Microsoft Excel document',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint presentation',
\t\t\t'kindOO'          : 'Open Office document',
\t\t\t'kindAppFlash'    : 'Flash application',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent file',
\t\t\t'kind7z'          : '7z archive',
\t\t\t'kindTAR'         : 'TAR archive',
\t\t\t'kindGZIP'        : 'GZIP archive',
\t\t\t'kindBZIP'        : 'BZIP archive',
\t\t\t'kindXZ'          : 'XZ archive',
\t\t\t'kindZIP'         : 'ZIP archive',
\t\t\t'kindRAR'         : 'RAR archive',
\t\t\t'kindJAR'         : 'Java JAR file',
\t\t\t'kindTTF'         : 'True Type font',
\t\t\t'kindOTF'         : 'Open Type font',
\t\t\t'kindRPM'         : 'RPM package',
\t\t\t// texts
\t\t\t'kindText'        : 'Text document',
\t\t\t'kindTextPlain'   : 'Plain text',
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
\t\t\t'kindPerl'        : 'Perl script',
\t\t\t'kindSQL'         : 'SQL source',
\t\t\t'kindXML'         : 'XML document',
\t\t\t'kindAWK'         : 'AWK source',
\t\t\t'kindCSV'         : 'Comma separated values',
\t\t\t'kindDOCBOOK'     : 'Docbook XML document',
\t\t\t'kindMarkdown'    : 'Markdown text', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Image',
\t\t\t'kindBMP'         : 'BMP image',
\t\t\t'kindJPEG'        : 'JPEG image',
\t\t\t'kindGIF'         : 'GIF Image',
\t\t\t'kindPNG'         : 'PNG Image',
\t\t\t'kindTIFF'        : 'TIFF image',
\t\t\t'kindTGA'         : 'TGA image',
\t\t\t'kindPSD'         : 'Adobe Photoshop image',
\t\t\t'kindXBITMAP'     : 'X bitmap image',
\t\t\t'kindPXM'         : 'Pixelmator image',
\t\t\t// media
\t\t\t'kindAudio'       : 'Audio media',
\t\t\t'kindAudioMPEG'   : 'MPEG audio',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 audio',
\t\t\t'kindAudioMIDI'   : 'MIDI audio',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis audio',
\t\t\t'kindAudioWAV'    : 'WAV audio',
\t\t\t'AudioPlaylist'   : 'MP3 playlist',
\t\t\t'kindVideo'       : 'Video media',
\t\t\t'kindVideoDV'     : 'DV movie',
\t\t\t'kindVideoMPEG'   : 'MPEG movie',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 movie',
\t\t\t'kindVideoAVI'    : 'AVI movie',
\t\t\t'kindVideoMOV'    : 'Quick Time movie',
\t\t\t'kindVideoWM'     : 'Windows Media movie',
\t\t\t'kindVideoFlash'  : 'Flash movie',
\t\t\t'kindVideoMKV'    : 'Matroska movie',
\t\t\t'kindVideoOGG'    : 'Ogg movie'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.LANG.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.LANG.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.LANG.js");
    }
}
