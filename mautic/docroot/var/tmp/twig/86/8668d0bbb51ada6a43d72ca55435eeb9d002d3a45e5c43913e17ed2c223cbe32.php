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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.vi.js */
class __TwigTemplate_cb9ae2a32a050164111b5d3ac2e1767727fe80b58433361803d5242458454461 extends Template
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
 * Ngôn ngữ Việt Nam translation
 * @author Chung Thủy f <chungthuyf@gmail.com>
 * @author Son Nguyen <son.nguyen@catalyst.net.nz>
 * @author Nguyễn Trần Chung <admin@chungnguyen.xyz>
 * @version 2019-12-03
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
\telFinder.prototype.i18.vi = {
\t\ttranslator : 'Chung Thủy f &lt;chungthuyf@gmail.com&gt;, Son Nguyen &lt;son.nguyen@catalyst.net.nz&gt;, Nguyễn Trần Chung &lt;admin@chungnguyen.xyz&gt;',
\t\tlanguage   : 'Ngôn ngữ Việt Nam',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i', // will show like: 03.12.2019 17:28
\t\tfancyDateFormat : '\$1 H:i', // will show like: Hôm nay 17:28
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 191203-172820
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Lỗi',
\t\t\t'errUnknown'           : 'Lỗi không xác định được.',
\t\t\t'errUnknownCmd'        : 'Lỗi không rõ lệnh.',
\t\t\t'errJqui'              : 'Cấu hình jQueryUI không hợp lệ. Các thành phần lựa chọn, kéo và thả phải được bao gồm.',
\t\t\t'errNode'              : 'elFinder đòi hỏi phần tử DOM phải được tạo ra.',
\t\t\t'errURL'               : 'Cấu hình elFinder không hợp lệ! URL không được thiết lập tùy chọn.',
\t\t\t'errAccess'            : 'Truy cập bị từ chối.',
\t\t\t'errConnect'           : 'Không thể kết nối với backend.',
\t\t\t'errAbort'             : 'Kết nối bị hủy bỏ.',
\t\t\t'errTimeout'           : 'Thời gian chờ kết nối đã hết.',
\t\t\t'errNotFound'          : 'Backend không tìm thấy.',
\t\t\t'errResponse'          : 'Phản hồi backend không hợp lệ.',
\t\t\t'errConf'              : 'Cấu hình backend không hợp lệ.',
\t\t\t'errJSON'              : 'Mô-đun PHP JSON không được cài đặt.',
\t\t\t'errNoVolumes'         : 'Tập có thể đọc không có sẵn.',
\t\t\t'errCmdParams'         : 'Thông số không hợp lệ cho lệnh \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Dữ liệu không phải là JSON.',
\t\t\t'errDataEmpty'         : 'Dữ liệu trống.',
\t\t\t'errCmdReq'            : 'Backend đòi hỏi tên lệnh.',
\t\t\t'errOpen'              : 'Không thể mở \"\$1\".',
\t\t\t'errNotFolder'         : 'Đối tượng không phải là một thư mục.',
\t\t\t'errNotFile'           : 'Đối tượng không phải là một tập tin.',
\t\t\t'errRead'              : 'Không thể đọc \"\$1\".',
\t\t\t'errWrite'             : 'Không thể ghi vào \"\$1\".',
\t\t\t'errPerm'              : 'Quyền bị từ chối.',
\t\t\t'errLocked'            : '\"\$1\" đã bị khóa và không thể đổi tên, di chuyển hoặc loại bỏ.',
\t\t\t'errExists'            : 'Tập tin có tên \"\$1\" đã tồn tại.',
\t\t\t'errInvName'           : 'Tên tập tin không hợp lệ.',
\t\t\t'errInvDirname'        : 'Tên thư mục không hợp lệ.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Thư mục không tìm thấy.',
\t\t\t'errFileNotFound'      : 'Tập tin không tìm thấy.',
\t\t\t'errTrgFolderNotFound' : 'Thư mục đích \"\$1\" không được tìm thấy.',
\t\t\t'errPopup'             : 'Trình duyệt ngăn chặn mở cửa sổ popup.',
\t\t\t'errMkdir'             : 'Không thể tạo thư mục \"\$1\".',
\t\t\t'errMkfile'            : 'Không thể tạo tập tin \"\$1\".',
\t\t\t'errRename'            : 'Không thể đổi tên \"\$1\".',
\t\t\t'errCopyFrom'          : 'Sao chép tập tin từ tập \"\$1\" không được phép.',
\t\t\t'errCopyTo'            : 'Sao chép tập tin tới tập \"\$1\" không được phép.',
\t\t\t'errMkOutLink'         : 'Không thể tạo liên kết ra bên ngoài volume root.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Tải lên báo lỗi.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Không thể tải lên \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Không thấy tập tin nào để tải lên.',
\t\t\t'errUploadTotalSize'   : 'Dữ liệu vượt quá kích thước tối đa cho phép.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Tập tin vượt quá kích thước tối đa cho phép.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Kiểu tập tin không được phép.',
\t\t\t'errUploadTransfer'    : 'Lỗi khi truyền \"\$1\".',
\t\t\t'errUploadTemp'        : 'Không thể tạo thư mục tạm để tải lên.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Đối tượng \"\$1\" đã tồn tại ở vị trí này và không thể thay thế bằng đối tượng với loại khác.', // new
\t\t\t'errReplace'           : 'Không thể thay thế \"\$1\".',
\t\t\t'errSave'              : 'Không thể lưu \"\$1\".',
\t\t\t'errCopy'              : 'Không thể sao chép \"\$1\".',
\t\t\t'errMove'              : 'Không thể chuyển \"\$1\".',
\t\t\t'errCopyInItself'      : 'Không thể sao chép \"\$1\" vào chính nó.',
\t\t\t'errRm'                : 'Không thể xóa \"\$1\".',
\t\t\t'errTrash'             : 'Không thể cho vào thùng rác.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Không thể xóa tệp nguồn.',
\t\t\t'errExtract'           : 'Không thể giải nén các tập tin từ\"\$1\".',
\t\t\t'errArchive'           : 'Không thể tạo ra lưu trữ.',
\t\t\t'errArcType'           : 'Loại lưu trữ không được hỗ trợ.',
\t\t\t'errNoArchive'         : 'Tập tin không phải là lưu trữ hoặc có kiểu lưu trữ không được hỗ trợ.',
\t\t\t'errCmdNoSupport'      : 'Backend không hỗ trợ lệnh này.',
\t\t\t'errReplByChild'       : 'Thư mục \"\$1\" không thể được thay thế bằng một mục con mà nó chứa.',
\t\t\t'errArcSymlinks'       : 'Vì lý do bảo mật, từ chối giải nén tập tin lưu trữ có chứa liên kết mềm.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Tập tin lưu trữ vượt quá kích thước tối đa cho phép.',
\t\t\t'errResize'            : 'Không thể thay đổi kích thước \"\$1\".',
\t\t\t'errResizeDegree'      : 'Độ xoay không hợp lệ.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Không thể xoay hình ảnh.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Kích thước hình ảnh không hợp lệ.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Kích thước hình ảnh không thay đổi.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Loại tập tin không được hỗ trợ.',
\t\t\t'errNotUTF8Content'    : 'Tệp \"\$1\" không phải bộ ký tự UTF-8 nên không thể chỉnh sửa.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Không thể gắn kết \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Giao thức không được hỗ trợ.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Gắn (kết nối) thất bại.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Yêu cầu máy chủ.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Phiên của bạn đã hết hạn do không hoạt động.',
\t\t\t'errCreatingTempDir'   : 'Không thể tạo thư mục tạm thời: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Không thể tải xuống tệp từ FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Không thể tải tệp lên FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Không thể tạo thư mục từ xa trên FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Lỗi trong khi lưu trữ tệp: \"\$1\"',
\t\t\t'errExtractExec'       : 'Lỗi trong khi giải nén tập tin: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Không thể gỡ gắn (liên kết).', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Không thể chuyển đổi thành UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Hãy thử trình duyệt mới hơn (vì trình duyệt hiện tại có vẻ cũ nên không hỗ trợ  tải lên thư mục).', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Đã hết thời gian trong khi tìm kiếm \"\$1\". Kết quả tìm kiếm là một phần.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Cần ủy quyền lại.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Số lượng tối đa của các mục có thể chọn là \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Không thể khôi phục từ thùng rác. Không thể xác định đích khôi phục.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Không tìm thấy trình chỉnh sửa cho loại tệp này.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Lỗi xảy ra ở phía máy chủ.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Không thể làm rỗng thư mục \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'Có thêm \$1 lỗi.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Tạo tập tin nén',
\t\t\t'cmdback'      : 'Trở lại',
\t\t\t'cmdcopy'      : 'Sao chép',
\t\t\t'cmdcut'       : 'Cắt',
\t\t\t'cmddownload'  : 'Tải về',
\t\t\t'cmdduplicate' : 'Bản sao',
\t\t\t'cmdedit'      : 'Sửa tập tin',
\t\t\t'cmdextract'   : 'Giải nén tập tin',
\t\t\t'cmdforward'   : 'Trước',
\t\t\t'cmdgetfile'   : 'Chọn tập tin',
\t\t\t'cmdhelp'      : 'Giới thiệu phần mềm',
\t\t\t'cmdhome'      : 'Home',
\t\t\t'cmdinfo'      : 'Thông tin',
\t\t\t'cmdmkdir'     : 'Thư mục',
\t\t\t'cmdmkdirin'   : 'Vào thư mục mới', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Tạo tập tin Text',
\t\t\t'cmdopen'      : 'Mở',
\t\t\t'cmdpaste'     : 'Dán',
\t\t\t'cmdquicklook' : 'Xem trước',
\t\t\t'cmdreload'    : 'Nạp lại',
\t\t\t'cmdrename'    : 'Đổi tên',
\t\t\t'cmdrm'        : 'Xóa',
\t\t\t'cmdtrash'     : 'Vào thùng rác', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Khôi phục', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Tìm tập tin',
\t\t\t'cmdup'        : 'Go to parent directory',
\t\t\t'cmdupload'    : 'Tải tập tin lên',
\t\t\t'cmdview'      : 'Xem',
\t\t\t'cmdresize'    : 'Thay đổi kích thước và xoay',
\t\t\t'cmdsort'      : 'Sắp xếp',
\t\t\t'cmdnetmount'  : 'Mount network volume', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Gỡ mount', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'To Places', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Thay đổi chế độ', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Mở một thư mục', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Đặt lại chiều rộng cột', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Toàn màn hình', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Di chuyển', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Làm rỗng thư mục', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Hủy bỏ (hoàn tác)', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Làm lại', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Preferences', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Chọn tất cả', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Không chọn gì', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Chọn ngược lại', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Mở trong cửa sổ mới', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Ẩn (Preference)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Đóng',
\t\t\t'btnSave'   : 'Lưu',
\t\t\t'btnRm'     : 'Gỡ bỏ',
\t\t\t'btnApply'  : 'Áp dụng',
\t\t\t'btnCancel' : 'Hủy bỏ',
\t\t\t'btnNo'     : 'Không',
\t\t\t'btnYes'    : 'Đồng ý',
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
\t\t\t'ntfopen'     : 'Mở thư mục',
\t\t\t'ntffile'     : 'Mở tập tin',
\t\t\t'ntfreload'   : 'Nạp lại nội dung thư mục',
\t\t\t'ntfmkdir'    : 'Tạo thư mục',
\t\t\t'ntfmkfile'   : 'Tạo tập tin',
\t\t\t'ntfrm'       : 'Xóa tập tin',
\t\t\t'ntfcopy'     : 'Sao chép tập tin',
\t\t\t'ntfmove'     : 'Di chuyển tập tin',
\t\t\t'ntfprepare'  : 'Chuẩn bị để sao chép các tập tin',
\t\t\t'ntfrename'   : 'Đổi tên tập tin',
\t\t\t'ntfupload'   : 'Tải tập tin lên',
\t\t\t'ntfdownload' : 'Tải tập tin',
\t\t\t'ntfsave'     : 'Lưu tập tin',
\t\t\t'ntfarchive'  : 'Tạo tập tin nén',
\t\t\t'ntfextract'  : 'Giải nén tập tin',
\t\t\t'ntfsearch'   : 'Tìm kiếm tập tin',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'Doing something >_<',
\t\t\t'ntfloadimg'  : 'Đang tải hình ảnh',
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
\t\t\t'dateUnknown' : 'Chưa biết',
\t\t\t'Today'       : 'Hôm nay',
\t\t\t'Yesterday'   : 'Hôm qua',
\t\t\t'msJan'       : 'Tháng 1',
\t\t\t'msFeb'       : 'Tháng 2',
\t\t\t'msMar'       : 'Tháng 3',
\t\t\t'msApr'       : 'Tháng 4',
\t\t\t'msMay'       : 'Tháng 5',
\t\t\t'msJun'       : 'Tháng 6',
\t\t\t'msJul'       : 'Tháng 7',
\t\t\t'msAug'       : 'Tháng 8',
\t\t\t'msSep'       : 'Tháng 9',
\t\t\t'msOct'       : 'Tháng 10',
\t\t\t'msNov'       : 'Tháng 11',
\t\t\t'msDec'       : 'Tháng 12',
\t\t\t'January'     : 'Tháng 1',
\t\t\t'February'    : 'Tháng 2',
\t\t\t'March'       : 'Tháng 3',
\t\t\t'April'       : 'Tháng 4',
\t\t\t'May'         : 'Tháng 5',
\t\t\t'June'        : 'Tháng 6',
\t\t\t'July'        : 'Tháng 7',
\t\t\t'August'      : 'Tháng 8',
\t\t\t'September'   : 'Tháng 9',
\t\t\t'October'     : 'Tháng 10',
\t\t\t'November'    : 'Tháng 11',
\t\t\t'December'    : 'Tháng 12',
\t\t\t'Sunday'      : 'Chủ nhật',
\t\t\t'Monday'      : 'Thứ 2',
\t\t\t'Tuesday'     : 'Thứ 3',
\t\t\t'Wednesday'   : 'Thứ 4',
\t\t\t'Thursday'    : 'Thứ 5',
\t\t\t'Friday'      : 'Thứ 6',
\t\t\t'Saturday'    : 'Thứ 7',
\t\t\t'Sun'         : 'Chủ nhật',
\t\t\t'Mon'         : 'Thứ 2',
\t\t\t'Tue'         : 'Thứ 3',
\t\t\t'Wed'         : 'Thứ 4',
\t\t\t'Thu'         : 'Thứ 5',
\t\t\t'Fri'         : 'Thứ 6',
\t\t\t'Sat'         : 'Thứ 7',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'theo tên',
\t\t\t'sortkind'          : 'theo loại',
\t\t\t'sortsize'          : 'theo kích cỡ',
\t\t\t'sortdate'          : 'theo ngày',
\t\t\t'sortFoldersFirst'  : 'Thư mục đầu tiên',
\t\t\t'sortperm'          : 'theo quyền hạn', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'theo chế độ',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'theo người tạo',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'theo nhóm',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Also Treeview',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NewFile.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NewFolder',   // added 10.11.2015
\t\t\t'Archive'           : 'NewArchive',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'NewFile.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1: File',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Yêu cầu xác nhận',
\t\t\t'confirmRm'       : 'Bạn có chắc chắn muốn xóa vĩnh viễn các mục?<br/>  Điều này không thể được hoàn tác!',
\t\t\t'confirmRepl'     : 'Thay tập tin cũ bằng tập tin mới? (Nếu nó chứa các thư mục, nó sẽ được hợp nhất. Để sao lưu và thay thế, chọn Sao lưu.)',
\t\t\t'confirmRest'     : 'Thay thế mục hiện có bằng một mục trong thùng rác?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Not in UTF-8<br/>Convert to UTF-8?<br/>Contents become UTF-8 by saving after conversion.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Character encoding of this file couldn\\'t be detected. It need to temporarily convert to UTF-8 for editting.<br/>Please select character encoding of this file.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'It has been modified.<br/>Losing work if you do not save changes.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Bạn có chắc chắn muốn chuyển các mục vào thùng rác?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'Bạn có chắc chắn muốn chuyển các mục vào \"\$1\"?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : 'Áp dụng cho tất cả',
\t\t\t'name'            : 'Tên',
\t\t\t'size'            : 'Kích cỡ',
\t\t\t'perms'           : 'Quyền',
\t\t\t'modify'          : 'Sửa đổi',
\t\t\t'kind'            : 'Loại',
\t\t\t'read'            : 'đọc',
\t\t\t'write'           : 'viết',
\t\t\t'noaccess'        : 'không truy cập',
\t\t\t'and'             : 'và',
\t\t\t'unknown'         : 'không xác định',
\t\t\t'selectall'       : 'Chọn tất cả các mục',
\t\t\t'selectfiles'     : 'Chọn các mục',
\t\t\t'selectffile'     : 'Chọn mục đầu tiên',
\t\t\t'selectlfile'     : 'Chọn mục cuối cùng',
\t\t\t'viewlist'        : 'Hiển thị danh sách',
\t\t\t'viewicons'       : 'Hiển thị biểu tượng',
\t\t\t'viewSmall'       : 'Biểu tượng nhỏ', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Biểu tượng vừa', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Biểu tượng lớn', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Biểu tượng cực lớn', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Places',
\t\t\t'calc'            : 'Tính toán',
\t\t\t'path'            : 'Đường dẫn',
\t\t\t'aliasfor'        : 'Bí danh cho',
\t\t\t'locked'          : 'Đã khóa',
\t\t\t'dim'             : 'Kích thước',
\t\t\t'files'           : 'Tệp',
\t\t\t'folders'         : 'Thư mục',
\t\t\t'items'           : 'Items',
\t\t\t'yes'             : 'yes',
\t\t\t'no'              : 'no',
\t\t\t'link'            : 'Liên kết',
\t\t\t'searcresult'     : 'Kết quả tìm kiếm',
\t\t\t'selected'        : 'mục đã chọn',
\t\t\t'about'           : 'Về',
\t\t\t'shortcuts'       : 'Lối tắt',
\t\t\t'help'            : 'Giúp đỡ',
\t\t\t'webfm'           : 'Web file manager',
\t\t\t'ver'             : 'Phiên bản',
\t\t\t'protocolver'     : 'phiên bản protocol',
\t\t\t'homepage'        : 'Trang chủ dự án',
\t\t\t'docs'            : 'Tài liệu',
\t\t\t'github'          : 'Theo dõi chúng tôi trên GitHub',
\t\t\t'twitter'         : 'Theo dõi chúng tôi trên Twitter',
\t\t\t'facebook'        : 'Theo dõi chúng tôi trên Facebook',
\t\t\t'team'            : 'Đội ngũ',
\t\t\t'chiefdev'        : 'Trùm sò',
\t\t\t'developer'       : 'người phát triển',
\t\t\t'contributor'     : 'người đóng góp',
\t\t\t'maintainer'      : 'người bảo trì',
\t\t\t'translator'      : 'người dịch',
\t\t\t'icons'           : 'Icons',
\t\t\t'dontforget'      : 'and don\\'t forget to take your towel',
\t\t\t'shortcutsof'     : 'Shortcuts disabled',
\t\t\t'dropFiles'       : 'Thả tệp vào đây',
\t\t\t'or'              : 'hoặc',
\t\t\t'selectForUpload' : 'Chọn tệp',
\t\t\t'moveFiles'       : 'Di chuyển các mục',
\t\t\t'copyFiles'       : 'Sao chép các mục',
\t\t\t'restoreFiles'    : 'Khôi mục các mục', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Remove from places',
\t\t\t'aspectRatio'     : 'Tỉ lệ khung hình',
\t\t\t'scale'           : 'Tỉ lệ',
\t\t\t'width'           : 'Rộng',
\t\t\t'height'          : 'Cao',
\t\t\t'resize'          : 'Thay đổi kích cỡ',
\t\t\t'crop'            : 'Cắt',
\t\t\t'rotate'          : 'Xoay',
\t\t\t'rotate-cw'       : 'Xoay 90 độ CW',
\t\t\t'rotate-ccw'      : 'Xoay 90 độ CCW',
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
\t\t\t'encoding'        : 'Mã hóa', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Địa phương',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Mục tiêu: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Tìm kiếm theo kiểu tệp (MIME)', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Chủ sở hữu', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Nhóm', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Khác', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Thực thi', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Quyền', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Chế độ', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Thư mục trống', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Thư mục trống\\\\A Kéo thả vào đây để thêm các mục', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Thư mục trống\\\\A Nhấn giữ để thêm các mục', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Chất lượng', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Tự động động bộ',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Di chuyển lên',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Lấy liên kết URL', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Các mục đã chọn (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID thư mục', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Cho phép truy cập ngoại tuyến', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Xác thực lại', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Đang tải...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Mở nhiều tập tin', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'You are trying to open the \$1 files. Are you sure you want to open in browser?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Kết quả tìm kiếm trống trong mục tiêu tìm kiếm.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Nó là một tập tin đang chỉnh sửa.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'You have selected \$1 items.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'You have \$1 items in the clipboard.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Tìm kiếm gia tăng chỉ từ hiển thị hiện tại.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Phục hồi', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 hoàn thành', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Trình đơn ngữ cảnh', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Chuyển trang', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Volume roots', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Đặt lại', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Màu nền', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Chọn màu', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px Grid', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Đã bật', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Đã tắt', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Search results is empty in current view.\\\\APress [Enter] to expand search target.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Kết quả tìm kiếm thư đầu tiên là trống trong chế độ xem hiện tại.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Nhãn văn bản', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 mins left', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Reopen with selected encoding', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Save with the selected encoding', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Chọn thư mục', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'First letter search', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Đặt trước', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'Có quá nhiều mục vì vậy không thể cho vào thùng rác.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'TextArea', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Empty the folder \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'There are no items in a folder \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Preference', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Ngôn ngữ', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Initialize the settings saved in this browser', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Cài đặt thanh công cụ', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 chars left.',  // from v2.1.29 added 30.8.2017
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
\t\t\t'asPrefix'        : 'Thêm tiền tố', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Thêm hậu tố', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Thay đổi phần mở rộng', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Columns settings (List view)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'All changes will reflect immediately to the archive.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Any changes will not reflect until un-mount this volume.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'The following volume(s) mounted on this volume also unmounted. Are you sure to unmount it?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Selection Info', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Algorithms to show the file hash', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Info Items (Selection Info Panel)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Nhấn một lần nữa để thoát.', // from v2.1.38 added 1.4.2018
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.vi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.vi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.vi.js");
    }
}
