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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.id.js */
class __TwigTemplate_deaa8276fe88af6596d283a86e804ac13d53c65d0e0c51a8efafae5c763a7e10 extends Template
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
 * Bahasa Indonesia translation
 * @author Suyadi <1441177004009@student.unsika.ac.id>
 * @author Ammar Faizi <ammarfaizi2@gmail.com>
 * @version 2017-05-28
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
\telFinder.prototype.i18.id = {
\t\ttranslator : 'Suyadi &lt;1441177004009@student.unsika.ac.id&gt;, Ammar Faizi &lt;ammarfaizi2@gmail.com&gt;',
\t\tlanguage   : 'Bahasa Indonesia',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'j F, Y H:i', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 H:i', // will produce smth like: Today 12:25 PM
\t\tnonameDateFormat : 'd m Y - H : i : s', // to apply if upload file is noname: 120513172700
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Kesalahan',
\t\t\t'errUnknown'           : 'Kesalahan tak dikenal.',
\t\t\t'errUnknownCmd'        : 'Perintah tak dikenal.',
\t\t\t'errJqui'              : 'Konfigurasi jQuery UI tidak valid. Komponen pemilih, penyeret dan penaruh harus disertakan.',
\t\t\t'errNode'              : 'elFinder membutuhkan pembuatan elemen DOM.',
\t\t\t'errURL'               : 'Konfigurasi elFinder tidak valid! opsi URL belum diatur.',
\t\t\t'errAccess'            : 'Akses ditolak.',
\t\t\t'errConnect'           : 'Tidak dapat tersambung ke backend.',
\t\t\t'errAbort'             : 'Koneksi dibatalkan.',
\t\t\t'errTimeout'           : 'Waktu koneksi habis.',
\t\t\t'errNotFound'          : 'Backend tidak ditemukan.',
\t\t\t'errResponse'          : 'Respon backend tidak valid.',
\t\t\t'errConf'              : 'Konfigurasi elFinder tidak valid.',
\t\t\t'errJSON'              : 'Modul PHP JSON belum terpasang.',
\t\t\t'errNoVolumes'         : 'Tidak tersedia ruang kosong.',
\t\t\t'errCmdParams'         : 'Parameter perintah \"\$1\" tidak valid.',
\t\t\t'errDataNotJSON'       : 'Data bukan merupakan JSON.',
\t\t\t'errDataEmpty'         : 'Data masih kosong.',
\t\t\t'errCmdReq'            : 'Permintaan ke backend membutuhkan nama perintah.',
\t\t\t'errOpen'              : 'Tidak dapat membuka \"\$1\".',
\t\t\t'errNotFolder'         : 'Obyek ini bukan folder.',
\t\t\t'errNotFile'           : 'Obyek ini bukan berkas.',
\t\t\t'errRead'              : 'Tidak dapat membaca \"\$1\".',
\t\t\t'errWrite'             : 'Tidak dapat menulis ke \"\$1\".',
\t\t\t'errPerm'              : 'Ijin ditolak.',
\t\t\t'errLocked'            : '\"\$1\" ini terkunci dan tak dapat dipidahkan, diubah atau dihapus.',
\t\t\t'errExists'            : 'Berkas bernama \"\$1\" sudah ada.',
\t\t\t'errInvName'           : 'Nama berkas tidak valid.',
\t\t\t'errInvDirname'        : 'Nama folder salah.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Folder tidak ditemukan.',
\t\t\t'errFileNotFound'      : 'Berkas tidak ditemukan.',
\t\t\t'errTrgFolderNotFound' : 'Folder tujuan \"\$1\" tidak ditemukan.',
\t\t\t'errPopup'             : 'Peramban anda mencegah untuk membuka jendela munculan. Untuk dapat membuka berkas ini ubah pengaturan pada peramban anda.',
\t\t\t'errMkdir'             : 'Tidak dapat membuat folder \"\$1\".',
\t\t\t'errMkfile'            : 'Tidak dapat membuat berkas \"\$1\".',
\t\t\t'errRename'            : 'Tidak dapat mengubah nama \"\$1\".',
\t\t\t'errCopyFrom'          : 'Tidak diizinkan menyalin berkas dari volume \"\$1\".',
\t\t\t'errCopyTo'            : 'tidak diizinkan menyalin berkas ke volume \"\$1\".',
\t\t\t'errMkOutLink'         : 'Tidak dapat membuat tautan diluar volume root.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Kesalahan saat mengunggah.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Tidak dapat mengunggah \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Tak ada berkas untuk diunggah.',
\t\t\t'errUploadTotalSize'   : 'Data melampaui ukuran yang diperbolehkan.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Berkas melampaui ukuran yang diperbolehkan.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Jenis berkas ini tidak diijinkan.',
\t\t\t'errUploadTransfer'    : 'Kesalahan transfer \"\$1\".',
\t\t\t'errUploadTemp'        : 'Tidak dapat membuat file sementara untuk diupload.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Obyek \"\$1\" sudah ada di lokasi ini dan tidak dapat ditimpa oleh obyek jenis lain.', // new
\t\t\t'errReplace'           : 'Tidak dapat menimpa \"\$1\".',
\t\t\t'errSave'              : 'Tidak dapat menyimpan \"\$1\".',
\t\t\t'errCopy'              : 'Tidak dapat menyalin \"\$1\".',
\t\t\t'errMove'              : 'Tidak dapat memindahkan \"\$1\".',
\t\t\t'errCopyInItself'      : 'Tidak dapat menyalin \"\$1\" ke dirinya sendiri.',
\t\t\t'errRm'                : 'Tidak dapat menghapus \"\$1\".',
\t\t\t'errTrash'             : 'Tidak dapat masuk ke tempat sampah.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Tidak dapat menghapus sumber berkas.',
\t\t\t'errExtract'           : 'Tidak dapat mengekstrak berkas dari \"\$1\".',
\t\t\t'errArchive'           : 'Tidak dapat membuat arsip.',
\t\t\t'errArcType'           : 'Jenis arsip tidak didukung.',
\t\t\t'errNoArchive'         : 'Berkas ini bukan arsip atau arsip jenis ini tidak didukung.',
\t\t\t'errCmdNoSupport'      : 'Backend tidak mendukung perintah ini.',
\t\t\t'errReplByChild'       : 'Folder “\$1” tidak dapat ditimpa dengan berkas didalamnya.',
\t\t\t'errArcSymlinks'       : 'Untuk keamanan tak diijinkan mengekstrak arsip berisi symlink atau jenis berkas yang tak diijinkan.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Arsip ini melampaui ukuran yang diijinkan.',
\t\t\t'errResize'            : 'Tidak dapat mengubah ukuran \"\$1\".',
\t\t\t'errResizeDegree'      : 'Derajat putaran tidak valid.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Citra tidak diputar.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Ukuran citra tidak valid.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Ukuran citra tidak diubah.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Jenis berkas tidak didukung.',
\t\t\t'errNotUTF8Content'    : 'Berkas \"\$1\" tidak dalam format UTF-8 dan tidak dapat disunting.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Tidak dapat membaca susunan \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Protokol tidak didukung.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Tidak dapat membaca susunannya.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Host harus ada.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Sesi anda telah kadaluwarsa karena lama tidak aktif.',
\t\t\t'errCreatingTempDir'   : 'Tidak dapat membuat direktori sementara: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Tidak dapat mengunduh berkas dari FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Tidak dapat mengunggah berkas dari FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Tidak dapat membuat remot direktori dari FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Kesalahan saat mengarsipkan berkas: \"\$1\"',
\t\t\t'errExtractExec'       : 'Kesalahan saat mengekstrak berkas: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Tidak dapat melakukan mount.', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Tidak cocok untuk konversi ke UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Coba dengan browser yang modern, Jika akan mengupload folder.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Waktu habis selama melakukan pencarian \"\$1\". Hasil sementara.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Re-authorization dibutuhkan.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Berkas maksimal yang dipilih adalah \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Tidak dapat mengembalikan berkas dari tempat sampah. Tujuan tidak ditemukan.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Tidak ditemukan editor untuk file tipe ini.', // from v2.1.25 added 23.5.2017

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Buat arsip',
\t\t\t'cmdback'      : 'Kembali',
\t\t\t'cmdcopy'      : 'Salin',
\t\t\t'cmdcut'       : 'Potong',
\t\t\t'cmddownload'  : 'Unduh',
\t\t\t'cmdduplicate' : 'Gandakan',
\t\t\t'cmdedit'      : 'Sunting berkas',
\t\t\t'cmdextract'   : 'Ekstrak berkas dari arsip',
\t\t\t'cmdforward'   : 'Maju',
\t\t\t'cmdgetfile'   : 'Pilih berkas',
\t\t\t'cmdhelp'      : 'Tentang software ini',
\t\t\t'cmdhome'      : 'Rumah',
\t\t\t'cmdinfo'      : 'Dapatkan info',
\t\t\t'cmdmkdir'     : 'Buat folder',
\t\t\t'cmdmkdirin'   : 'Masuk ke folder baru', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Buat fail',
\t\t\t'cmdopen'      : 'Buka',
\t\t\t'cmdpaste'     : 'Tempel',
\t\t\t'cmdquicklook' : 'Pratinjau',
\t\t\t'cmdreload'    : 'Muat-ulang',
\t\t\t'cmdrename'    : 'Ganti nama',
\t\t\t'cmdrm'        : 'Hapus',
\t\t\t'cmdtrash'     : 'Sampahkan', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Kembalikan', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Cari berkas',
\t\t\t'cmdup'        : 'Ke direktori utama',
\t\t\t'cmdupload'    : 'Unggah berkas',
\t\t\t'cmdview'      : 'Lihat',
\t\t\t'cmdresize'    : 'Ubah ukuran & Putar',
\t\t\t'cmdsort'      : 'Urutkan',
\t\t\t'cmdnetmount'  : 'Baca-susun volume jaringan', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Ke Tempat', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Mode mengubah', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Membuka folder', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Reset column width', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Layar Penuh', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Pindah', // from v2.1.15 added 21.08.2016

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Tutup',
\t\t\t'btnSave'   : 'Simpan',
\t\t\t'btnRm'     : 'Buang',
\t\t\t'btnApply'  : 'Terapkan',
\t\t\t'btnCancel' : 'Batal',
\t\t\t'btnNo'     : 'Tidak',
\t\t\t'btnYes'    : 'Ya',
\t\t\t'btnMount'  : 'Baca susunan',  // added 18.04.2012
\t\t\t'btnApprove': 'Menuju ke \$1 & setujui', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Konversi', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Disini',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Volume',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Semua',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME Type', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Nama file',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Simpan & Tutup', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Backup', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Ubah nama',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Ubah nama(Semua)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Sebelumnya (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Selanjutnya (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Simpan sebagai', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Buka folder',
\t\t\t'ntffile'     : 'Buka berkas',
\t\t\t'ntfreload'   : 'Muat-ulang isi folder',
\t\t\t'ntfmkdir'    : 'Membuat direktori',
\t\t\t'ntfmkfile'   : 'Membuat berkas',
\t\t\t'ntfrm'       : 'Menghapus berkas',
\t\t\t'ntfcopy'     : 'Salin berkas',
\t\t\t'ntfmove'     : 'Pindahkan berkas',
\t\t\t'ntfprepare'  : 'Persiapan menyalin berkas',
\t\t\t'ntfrename'   : 'Ubah nama berkas',
\t\t\t'ntfupload'   : 'Unggah berkas',
\t\t\t'ntfdownload' : 'Mengunduh berkas',
\t\t\t'ntfsave'     : 'Simpan berkas',
\t\t\t'ntfarchive'  : 'Membuat arsip',
\t\t\t'ntfextract'  : 'Mengekstrak berkas dari arsip',
\t\t\t'ntfsearch'   : 'Mencari berkas',
\t\t\t'ntfresize'   : 'Mengubah ukuran citra',
\t\t\t'ntfsmth'     : 'Melakukan sesuatu',
\t\t\t'ntfloadimg'  : 'Memuat citra',
\t\t\t'ntfnetmount' : 'Membaca susunan volume jaringan', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Unmounting network volume', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Mendapatkan dimensi citra', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Membaca informasi folder', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Mendapatkan URL dari link', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Dalam mode mengubah', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Sedang memverifikasi nama file yang diupload', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Membuat file untuk didownload', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Mengambil informasi path', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Sedang mengupload file', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Sedang melempar ke tempat sampah', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Sedang mengembalikan dari tempat sampah', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Mengecek folder tujuan', // from v2.1.24 added 3.5.2017

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Sampah', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'tak diketahui',
\t\t\t'Today'       : 'Hari ini',
\t\t\t'Yesterday'   : 'Kemarin',
\t\t\t'msJan'       : 'Jan',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Apr',
\t\t\t'msMay'       : 'Mei',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Jul',
\t\t\t'msAug'       : 'Agt',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Okt',
\t\t\t'msNov'       : 'Nop',
\t\t\t'msDec'       : 'Des',
\t\t\t'January'     : 'Januari',
\t\t\t'February'    : 'Pebruari',
\t\t\t'March'       : 'Maret',
\t\t\t'April'       : 'April',
\t\t\t'May'         : 'Mei',
\t\t\t'June'        : 'Juni',
\t\t\t'July'        : 'Juli',
\t\t\t'August'      : 'Agustus',
\t\t\t'September'   : 'September',
\t\t\t'October'     : 'Oktober',
\t\t\t'November'    : 'Nopember',
\t\t\t'December'    : 'Desember',
\t\t\t'Sunday'      : 'Minggu',
\t\t\t'Monday'      : 'Senin',
\t\t\t'Tuesday'     : 'Selasa',
\t\t\t'Wednesday'   : 'Rabu',
\t\t\t'Thursday'    : 'Kamis',
\t\t\t'Friday'      : 'Jum \\'at',
\t\t\t'Saturday'    : 'Sabtu',
\t\t\t'Sun'         : 'Min',
\t\t\t'Mon'         : 'Sen',
\t\t\t'Tue'         : 'Sel',
\t\t\t'Wed'         : 'Rab',
\t\t\t'Thu'         : 'Kam',
\t\t\t'Fri'         : 'Jum',
\t\t\t'Sat'         : 'Sab',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'menurut nama',
\t\t\t'sortkind'          : 'menurut jenis',
\t\t\t'sortsize'          : 'menurut ukuran',
\t\t\t'sortdate'          : 'menurut tanggal',
\t\t\t'sortFoldersFirst'  : 'Utamakan folder',
\t\t\t'sortperm'          : 'menurut perizinan', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'menurut mode',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'menurut pemilik',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'menurut grup',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Also Treeview',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'FileBaru.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'FolderBaru',   // added 10.11.2015
\t\t\t'Archive'           : 'ArsipBaru',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Diperlukan konfirmasi',
\t\t\t'confirmRm'       : 'Anda yakin akan menghapus berkas?<br/>Ini tidak dapat kembalikan!',
\t\t\t'confirmRepl'     : 'Timpa berkas lama dengan yang baru?',
\t\t\t'confirmRest'     : 'Timpa berkas yang ada dengan berkas dari sampah?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Bukan UTF-8<br/>Konversi ke UTF-8?<br/>Konten akan berubah menjadi UTF-8 ketika disimpan dengan konversi.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Character encoding of this file couldn\\'t be detected. It need to temporarily convert to UTF-8 for editting.<br/>Please select character encoding of this file.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Telah terjadi perubahan.<br/>Kehilangan perkerjaan jika kamu tidak menyimpan.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Anda yakin untuk membuang berkas ke tempat sampah?', //from v2.1.24 added 29.4.2017
\t\t\t'apllyAll'        : 'Terapkan ke semua',
\t\t\t'name'            : 'Nama',
\t\t\t'size'            : 'Ukuran',
\t\t\t'perms'           : 'Perijinan',
\t\t\t'modify'          : 'Diubah',
\t\t\t'kind'            : 'Jenis',
\t\t\t'read'            : 'baca',
\t\t\t'write'           : 'tulis',
\t\t\t'noaccess'        : 'tidak ada akses',
\t\t\t'and'             : 'dan',
\t\t\t'unknown'         : 'tak diketahui',
\t\t\t'selectall'       : 'Pilih semua berkas',
\t\t\t'selectfiles'     : 'Pilih berkas',
\t\t\t'selectffile'     : 'Pilih berkas pertama',
\t\t\t'selectlfile'     : 'Pilih berkas terakhir',
\t\t\t'viewlist'        : 'Tampilan daftar',
\t\t\t'viewicons'       : 'Tampilan ikon',
\t\t\t'places'          : 'Lokasi',
\t\t\t'calc'            : 'Hitung',
\t\t\t'path'            : 'Alamat',
\t\t\t'aliasfor'        : 'Nama lain untuk',
\t\t\t'locked'          : 'Dikunci',
\t\t\t'dim'             : 'Dimensi',
\t\t\t'files'           : 'Berkas',
\t\t\t'folders'         : 'Folder',
\t\t\t'items'           : 'Pokok',
\t\t\t'yes'             : 'ya',
\t\t\t'no'              : 'tidak',
\t\t\t'link'            : 'Tautan',
\t\t\t'searcresult'     : 'Hasil pencarian',
\t\t\t'selected'        : 'Pokok terpilih',
\t\t\t'about'           : 'Tentang',
\t\t\t'shortcuts'       : 'Pintasan',
\t\t\t'help'            : 'Bantuan',
\t\t\t'webfm'           : 'Pengelola berkas web',
\t\t\t'ver'             : 'Versi',
\t\t\t'protocolver'     : 'versi protokol',
\t\t\t'homepage'        : 'Rumah proyek',
\t\t\t'docs'            : 'Dokumentasi',
\t\t\t'github'          : 'Ambil kami di Github',
\t\t\t'twitter'         : 'Ikuti kami di twitter',
\t\t\t'facebook'        : 'Gabung dengan kami di facebook',
\t\t\t'team'            : 'Tim',
\t\t\t'chiefdev'        : 'kepala pengembang',
\t\t\t'developer'       : 'pengembang',
\t\t\t'contributor'     : 'kontributor',
\t\t\t'maintainer'      : 'pengurus',
\t\t\t'translator'      : 'penerjemah',
\t\t\t'icons'           : 'Ikon',
\t\t\t'dontforget'      : 'dan jangan lupa pakai handukmu',
\t\t\t'shortcutsof'     : 'Pintasan dimatikan',
\t\t\t'dropFiles'       : 'Seret berkas anda kesini',
\t\t\t'or'              : 'atau',
\t\t\t'selectForUpload' : 'Pilih berkas untuk diunggah',
\t\t\t'moveFiles'       : 'Pindahkan berkas',
\t\t\t'copyFiles'       : 'Salin berkas',
\t\t\t'restoreFiles'    : 'Kembalikan berkas', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Hapus dari lokasi',
\t\t\t'aspectRatio'     : 'Aspek rasio',
\t\t\t'scale'           : 'Skala',
\t\t\t'width'           : 'Lebar',
\t\t\t'height'          : 'Tinggi',
\t\t\t'resize'          : 'Ubah ukuran',
\t\t\t'crop'            : 'Potong',
\t\t\t'rotate'          : 'Putar',
\t\t\t'rotate-cw'       : 'Putar 90 derajat ke kanan',
\t\t\t'rotate-ccw'      : 'Putar 90 derajat ke kiri',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Baca susunan volume jaringan', // added 18.04.2012
\t\t\t'protocol'            : 'Protokol', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'Pengguna', // added 18.04.2012
\t\t\t'pass'                : 'Sandi', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Apakah anda unmount \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Seret atau Tempel file dari browser', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Seret file, Tempel URL atau gambar dari clipboard', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Encoding', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Lokasi',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Target: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Mencari berdasarkan inpu MIME Type', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Pemilik', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Grup', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Lainnya', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Eksekusi', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Izin', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Mode', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Folder kosong', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Folder kosong\\\\A Seret untuk tambahkan berkas', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Folder kosong\\\\A Tekan yang lama untuk tambahkan berkas', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Kualitas', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Sinkronasi Otomatis',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Pindah ke atas',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Mendepatkan URL link', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : '(\$1) berkas dipilih', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID Folder', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Izin akses offline', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'To re-authenticate', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Sedang memuat...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Membuka file bersamaan', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Anda mencoba membuka file \$1. Apakah anda ingin membuka di browser?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Hasil pencarian kosong dalam target', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Sedang mengedit file', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'Anda memilih \$1 berkas', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'Kamu mempunyai \$i berkas di clipboard', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Hanya pencarian bertamah untuk menampilkan tampilan sekarang', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Reinstate', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 selesai', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Context menu', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Page turning', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Volume roots', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Reset', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Warna background', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Mengambil warna', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px Grid', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Diaktifkan', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Nonaktifkan', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Search results is empty in current view.\\\\APress [Enter] to expand search target.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'First letter search results is empty in current view.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Text label', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 mins left', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Reopen with selected encoding', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Save with the selected encoding', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Select folder', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'First letter search', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Presets', // from v2.1.25 added 26.5.2017

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Tak diketahui',
\t\t\t'kindRoot'        : 'Volume Root', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Folder',
\t\t\t'kindAlias'       : 'Nama lain',
\t\t\t'kindAliasBroken' : 'Nama lain rusak',
\t\t\t// applications
\t\t\t'kindApp'         : 'Aplikasi',
\t\t\t'kindPostscript'  : 'Dokumen postscript',
\t\t\t'kindMsOffice'    : 'Dokumen Ms. Office',
\t\t\t'kindMsWord'      : 'Dokumen Ms. Word',
\t\t\t'kindMsExcel'     : 'Dokumen Ms. Excel',
\t\t\t'kindMsPP'        : 'Dokumen Ms. Powerpoint',
\t\t\t'kindOO'          : 'Dokumen Open Office',
\t\t\t'kindAppFlash'    : 'Aplikasi Flash',
\t\t\t'kindPDF'         : 'Portable Dokumen Format (PDF)',
\t\t\t'kindTorrent'     : 'Berkas Bittorrent',
\t\t\t'kind7z'          : 'Arsip 7z',
\t\t\t'kindTAR'         : 'Arsip TAR',
\t\t\t'kindGZIP'        : 'Arsip GZIP',
\t\t\t'kindBZIP'        : 'Arsip BZIP',
\t\t\t'kindXZ'          : 'Arsip XZ',
\t\t\t'kindZIP'         : 'Arsip ZIP',
\t\t\t'kindRAR'         : 'Arsip RAR',
\t\t\t'kindJAR'         : 'Berkas Java JAR',
\t\t\t'kindTTF'         : 'Huruf True Type',
\t\t\t'kindOTF'         : 'Huruf Open Type',
\t\t\t'kindRPM'         : 'Paket RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Dokumen teks',
\t\t\t'kindTextPlain'   : 'Berkas teks biasa',
\t\t\t'kindPHP'         : 'Kode-sumber PHP',
\t\t\t'kindCSS'         : 'Cascading style sheet',
\t\t\t'kindHTML'        : 'Dokumen HTML',
\t\t\t'kindJS'          : 'Kode-sumber Javascript',
\t\t\t'kindRTF'         : 'Berkas Rich Text',
\t\t\t'kindC'           : 'Kode-sumber C',
\t\t\t'kindCHeader'     : 'Kode-sumber header C',
\t\t\t'kindCPP'         : 'Kode-sumber C++',
\t\t\t'kindCPPHeader'   : 'Kode-sumber header C++',
\t\t\t'kindShell'       : 'Berkas shell Unix',
\t\t\t'kindPython'      : 'Kode-sumber Python',
\t\t\t'kindJava'        : 'Kode-sumber Java',
\t\t\t'kindRuby'        : 'Kode-sumber Ruby',
\t\t\t'kindPerl'        : 'Kode-sumber Perl',
\t\t\t'kindSQL'         : 'Kode-sumber SQL',
\t\t\t'kindXML'         : 'Dokumen XML',
\t\t\t'kindAWK'         : 'Kode-sumber AWK',
\t\t\t'kindCSV'         : 'Dokumen CSV',
\t\t\t'kindDOCBOOK'     : 'Dokumen Docbook XML',
\t\t\t'kindMarkdown'    : 'Markdown text', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Citra',
\t\t\t'kindBMP'         : 'Citra BMP',
\t\t\t'kindJPEG'        : 'Citra JPEG',
\t\t\t'kindGIF'         : 'Citra GIF',
\t\t\t'kindPNG'         : 'Citra PNG',
\t\t\t'kindTIFF'        : 'Citra TIFF',
\t\t\t'kindTGA'         : 'Citra TGA',
\t\t\t'kindPSD'         : 'Citra Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Citra X bitmap',
\t\t\t'kindPXM'         : 'Citra Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Berkas audio',
\t\t\t'kindAudioMPEG'   : 'Berkas audio MPEG',
\t\t\t'kindAudioMPEG4'  : 'Berkas audio MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Berkas audio MIDI',
\t\t\t'kindAudioOGG'    : 'Berkas audio Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Berkas audio WAV',
\t\t\t'AudioPlaylist'   : 'Berkas daftar putar MP3',
\t\t\t'kindVideo'       : 'Berkas video',
\t\t\t'kindVideoDV'     : 'Berkas video DV',
\t\t\t'kindVideoMPEG'   : 'Berkas video MPEG',
\t\t\t'kindVideoMPEG4'  : 'Berkas video MPEG-4',
\t\t\t'kindVideoAVI'    : 'Berkas video AVI',
\t\t\t'kindVideoMOV'    : 'Berkas video Quick Time',
\t\t\t'kindVideoWM'     : 'Berkas video Windows Media',
\t\t\t'kindVideoFlash'  : 'Berkas video Flash',
\t\t\t'kindVideoMKV'    : 'Berkas video Matroska',
\t\t\t'kindVideoOGG'    : 'Berkas video Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.id.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.id.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.id.js");
    }
}
