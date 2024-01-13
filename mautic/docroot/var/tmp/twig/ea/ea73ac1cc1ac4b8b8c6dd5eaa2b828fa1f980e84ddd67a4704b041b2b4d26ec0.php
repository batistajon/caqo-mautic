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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.tr.js */
class __TwigTemplate_91ab9420092ac11c0802aa91ee64233a3a4f3907d868355427f59dd1682cedd0 extends Template
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
 * Türkçe translation
 * @author I.Taskinoglu & A.Kaya <alikaya@armsyazilim.com>
 * @author Abdullah ELEN <abdullahelen@msn.com>
 * @author Osman KAYAN <osmnkayan@gmail.com>
 * @author alikayan95@gmail.com
 * @version 2020-05-11
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
\telFinder.prototype.i18.tr = {
\t\ttranslator : 'I.Taskinoglu & A.Kaya &lt;alikaya@armsyazilim.com&gt;, Abdullah ELEN &lt;abdullahelen@msn.com&gt;, Osman KAYAN &lt;osmnkayan@gmail.com&gt;, alikayan95@gmail.com',
\t\tlanguage   : 'Türkçe',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i', // will show like: 11.05.2020 18:59
\t\tfancyDateFormat : '\$1 H:i', // will show like: Bugün 18:59
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 200511-185939
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Hata',
\t\t\t'errUnknown'           : 'Bilinmeyen hata.',
\t\t\t'errUnknownCmd'        : 'Bilinmeyen komut.',
\t\t\t'errJqui'              : 'Geçersiz jQuery UI yapılandırması. Seçilebilir, sürükle ve bırak bileşenlerini içermelidir.',
\t\t\t'errNode'              : 'elFinder, DOM Element\\'ini oluşturması gerekir.',
\t\t\t'errURL'               : 'Geçersiz elFinder yapılandırması! URL seçeneği ayarlı değil.',
\t\t\t'errAccess'            : 'Erişim engellendi.',
\t\t\t'errConnect'           : 'Sunucuya bağlanamıyor.',
\t\t\t'errAbort'             : 'Bağlantı durduruldu.',
\t\t\t'errTimeout'           : 'Bağlantı zaman aşımı.',
\t\t\t'errNotFound'          : 'Sunucu bulunamadı.',
\t\t\t'errResponse'          : 'Geçersiz sunucu yanıtı.',
\t\t\t'errConf'              : 'Geçersiz sunucu yapılandırması.',
\t\t\t'errJSON'              : 'PHP JSON modülü kurulu değil.',
\t\t\t'errNoVolumes'         : 'Okunabilir birimler mevcut değil.',
\t\t\t'errCmdParams'         : '\"\$1\" komutu için geçersiz parametre.',
\t\t\t'errDataNotJSON'       : 'Bu veri JSON formatında değil.',
\t\t\t'errDataEmpty'         : 'Boş veri.',
\t\t\t'errCmdReq'            : 'Sunucu isteği için komut adı gerekli.',
\t\t\t'errOpen'              : '\"\$1\" açılamıyor.',
\t\t\t'errNotFolder'         : 'Bu nesne bir klasör değil.',
\t\t\t'errNotFile'           : 'Bu nesne bir dosya değil.',
\t\t\t'errRead'              : '\"\$1\" okunamıyor.',
\t\t\t'errWrite'             : '\"\$1\" yazılamıyor.',
\t\t\t'errPerm'              : 'Yetki engellendi.',
\t\t\t'errLocked'            : '\"\$1\" kilitli. Bu nedenle taşıma, yeniden adlandırma veya kaldırma yapılamıyor.',
\t\t\t'errExists'            : '\"\$1\" adında bir dosya zaten var.',
\t\t\t'errInvName'           : 'Geçersiz dosya ismi.',
\t\t\t'errInvDirname'        : 'Geçersiz klasör ismi',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Klasör bulunamıyor.',
\t\t\t'errFileNotFound'      : 'Dosya bulunamadı.',
\t\t\t'errTrgFolderNotFound' : 'Hedef klasör \"\$1\" bulunamadı.',
\t\t\t'errPopup'             : 'Tarayıcı popup penceresi açmayı engelledi. Tarayıcı ayarlarından dosya açmayı aktif hale getirin.',
\t\t\t'errMkdir'             : 'Klasör oluşturulamıyor \"\$1\".',
\t\t\t'errMkfile'            : '\"\$1\" dosyası oluşturulamıyor.',
\t\t\t'errRename'            : '\"\$1\" yeniden adlandırma yapılamıyor.',
\t\t\t'errCopyFrom'          : '\"\$1\" biriminden dosya kopyalamaya izin verilmedi.',
\t\t\t'errCopyTo'            : '\"\$1\" birimine dosya kopyalamaya izin verilmedi.',
\t\t\t'errMkOutLink'         : 'Kök birim dışında bir bağlantı oluşturulamıyor', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Dosya yükleme hatası.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : '\"\$1\" dosya yüklenemedi.', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Yüklenecek dosya bulunamadı.',
\t\t\t'errUploadTotalSize'   : 'Veri izin verilen boyuttan büyük.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Dosya izin verilen boyuttan büyük.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Dosya türüne izin verilmedi.',
\t\t\t'errUploadTransfer'    : '\"\$1\" transfer hatası.',
\t\t\t'errUploadTemp'        : 'Yükleme için geçici dosya yapılamıyor.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : '\"\$1\" nesnesi bu konumda zaten var ve başka türde nesne ile değiştirilemez.', // new
\t\t\t'errReplace'           : 'Değişiklik yapılamıyor \"\$1\".',
\t\t\t'errSave'              : '\"\$1\" kaydedilemiyor.',
\t\t\t'errCopy'              : '\"\$1\" kopyalanamıyor.',
\t\t\t'errMove'              : '\"\$1\" taşınamıyor.',
\t\t\t'errCopyInItself'      : '\"\$1\" kendi içine kopyalanamaz.',
\t\t\t'errRm'                : '\"\$1\" kaldırılamıyor.',
\t\t\t'errTrash'             : 'Çöp kutusuna taşınamıyor.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Kaynak dosya(lar) kaldırılamıyor.',
\t\t\t'errExtract'           : '\"\$1\" kaynağından dosyalar çıkartılamıyor.',
\t\t\t'errArchive'           : 'Arşiv oluşturulamıyor.',
\t\t\t'errArcType'           : 'Desteklenmeyen arşiv türü.',
\t\t\t'errNoArchive'         : 'Dosya arşiv değil veya desteklenmeyen arşiv türü.',
\t\t\t'errCmdNoSupport'      : 'Sunucu bu komutu desteklemiyor.',
\t\t\t'errReplByChild'       : '“\$1” klasörü içerdiği bir öğe tarafından değiştirilemez.',
\t\t\t'errArcSymlinks'       : 'Sembolik bağlantıları içeren arşivlerin açılması güvenlik nedeniyle reddedildi.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Arşiv dosyaları izin verilen maksimum boyutu aştı.',
\t\t\t'errResize'            : '\"\$1\" yeniden boyutlandırılamıyor.',
\t\t\t'errResizeDegree'      : 'Geçersiz döndürme derecesi.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Resim döndürülemiyor.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Geçersiz resim boyutu.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Resim boyutu değiştirilemez.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Desteklenmeyen dosya türü.',
\t\t\t'errNotUTF8Content'    : 'Dosya \"\$1\" UTF-8 olmadığından düzenlenemez.',  // added 9.11.2011
\t\t\t'errNetMount'          : '\"\$1\" bağlanamadı.', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Desteklenmeyen protokol.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Bağlama hatası.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Sunucu gerekli.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Uzun süre işlem yapılmadığından oturumunuz sonlandı.',
\t\t\t'errCreatingTempDir'   : 'Geçici dizin oluşturulamıyor: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Dosya FTP: \"\$1\" adresinden indirilemiyor.',
\t\t\t'errFtpUploadFile'     : 'Dosya FTP: \"\$1\" adresine yüklenemiyor.',
\t\t\t'errFtpMkdir'          : 'FTP: \"\$1\" üzerinde uzak dizin oluşturulamıyor.',
\t\t\t'errArchiveExec'       : '\"\$1\" Dosyalarında arşivlenirken hata oluştu.',
\t\t\t'errExtractExec'       : '\"\$1\" Dosyaları arşivden çıkartılırken hata oluştu.',
\t\t\t'errNetUnMount'        : 'Bağlantı kaldırılamıyor.', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'UTF-8\\'e dönüştürülemez.', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Klasör yükleyebilmek için daha modern bir tarayıcıya ihtiyacınız var.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : '\"\$1\" araması zaman aşımına uğradı. Kısmi arama sonuçları listeleniyor.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Yeniden yetkilendirme gerekiyor.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Maksimum seçilebilir öge sayısı \$1 adettir', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Çöp kutusundan geri yüklenemiyor. Geri yükleme notkası belirlenemiyor.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Editör bu dosya türünü bulamıyor.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Sunucu tarafında beklenilmeyen bir hata oluştu.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : '\"\$1\" klasörü boşaltılamıyor.', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'There are \$1 more errors.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Arşiv oluştur',
\t\t\t'cmdback'      : 'Geri',
\t\t\t'cmdcopy'      : 'Kopyala',
\t\t\t'cmdcut'       : 'Kes',
\t\t\t'cmddownload'  : 'İndir',
\t\t\t'cmdduplicate' : 'Çoğalt',
\t\t\t'cmdedit'      : 'Dosyayı düzenle',
\t\t\t'cmdextract'   : 'Arşivden dosyaları çıkart',
\t\t\t'cmdforward'   : 'İleri',
\t\t\t'cmdgetfile'   : 'Dosyaları seç',
\t\t\t'cmdhelp'      : 'Bu yazılım hakkında',
\t\t\t'cmdhome'      : 'Anasayfa',
\t\t\t'cmdinfo'      : 'Bilgi göster',
\t\t\t'cmdmkdir'     : 'Yeni klasör',
\t\t\t'cmdmkdirin'   : 'Yeni Klasör / aç', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Yeni dosya',
\t\t\t'cmdopen'      : 'Aç',
\t\t\t'cmdpaste'     : 'Yapıştır',
\t\t\t'cmdquicklook' : 'Ön izleme',
\t\t\t'cmdreload'    : 'Geri Yükle',
\t\t\t'cmdrename'    : 'Yeniden Adlandır',
\t\t\t'cmdrm'        : 'Sil',
\t\t\t'cmdtrash'     : 'Çöpe at', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'geri yükle', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Dosyaları bul',
\t\t\t'cmdup'        : 'Üst dizine çık',
\t\t\t'cmdupload'    : 'Dosyaları yükle',
\t\t\t'cmdview'      : 'Görüntüle',
\t\t\t'cmdresize'    : 'Resmi yeniden boyutlandır',
\t\t\t'cmdsort'      : 'Sırala',
\t\t\t'cmdnetmount'  : 'Bağlı ağ birimi', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Devredışı bırak', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Yerlere', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Mod değiştir', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Klasör aç', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Sütun genişliğini sıfırla', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Tam ekran', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Taşı', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Klasörü boşalt', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Geri al', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Yinele', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Tercihler', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Tümünü seç', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Seçimi temizle', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Diğerlerini seç', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Yeni Sekmede aç', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Ögeyi Gizle', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Kapat',
\t\t\t'btnSave'   : 'Kaydet',
\t\t\t'btnRm'     : 'Kaldır',
\t\t\t'btnApply'  : 'Uygula',
\t\t\t'btnCancel' : 'İptal',
\t\t\t'btnNo'     : 'Hayır',
\t\t\t'btnYes'    : 'Evet',
\t\t\t'btnMount'  : 'Bağla',  // added 18.04.2012
\t\t\t'btnApprove': 'Git \$1 & onayla', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Bağlantıyı kes', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Dönüştür', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Buraya',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Birim',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Hepsi',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME Türü', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Dosya adı',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Kaydet & Kapat', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Yedekle', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Yeniden adlandır',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Yeniden adlandır(Tümü)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Önceki (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Sonraki (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Farklı Kaydet', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Klasör Aç',
\t\t\t'ntffile'     : 'Dosya Aç',
\t\t\t'ntfreload'   : 'Klasör içeriğini yeniden yükle',
\t\t\t'ntfmkdir'    : 'Dizin oluşturuluyor',
\t\t\t'ntfmkfile'   : 'Dosyaları oluşturma',
\t\t\t'ntfrm'       : 'Dosyaları sil',
\t\t\t'ntfcopy'     : 'Dosyaları kopyala',
\t\t\t'ntfmove'     : 'Dosyaları taşı',
\t\t\t'ntfprepare'  : 'Dosyaları kopyalamaya hazırla',
\t\t\t'ntfrename'   : 'Dosyaları yeniden adlandır',
\t\t\t'ntfupload'   : 'Dosyalar yükleniyor',
\t\t\t'ntfdownload' : 'Dosyalar indiriliyor',
\t\t\t'ntfsave'     : 'Dosyalar kaydediliyor',
\t\t\t'ntfarchive'  : 'Arşiv oluşturuluyor',
\t\t\t'ntfextract'  : 'Arşivden dosyalar çıkartılıyor',
\t\t\t'ntfsearch'   : 'Dosyalar aranıyor',
\t\t\t'ntfresize'   : 'Resimler boyutlandırılıyor',
\t\t\t'ntfsmth'     : 'İşlem yapılıyor',
\t\t\t'ntfloadimg'  : 'Resim yükleniyor',
\t\t\t'ntfnetmount' : 'Ağ birimine bağlanılıyor', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Ağ birimi bağlantısı kesiliyor', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Resim boyutu alınıyor', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Klasör bilgisi okunuyor', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Bağlantının URL\\'si alınıyor', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Dosya modu değiştiriliyor', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Yüklenen dosya ismi doğrulanıyor', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'İndirilecek dosya oluşturuluyor', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Dosya yolu bilgileri alınıyor', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Yüklenen dosya işleniyor', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Çöp kutusuna atma', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Çöp kutusundan geri yükle', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Hedef klasör kontrol ediliyor', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Önceki işlemi geri alma', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Önceki geri almayı tekrarlama', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'Checking contents', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Çöp', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'Bilinmiyor',
\t\t\t'Today'       : 'Bugün',
\t\t\t'Yesterday'   : 'Dün',
\t\t\t'msJan'       : 'Oca',
\t\t\t'msFeb'       : 'Şub',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Nis',
\t\t\t'msMay'       : 'May',
\t\t\t'msJun'       : 'Haz',
\t\t\t'msJul'       : 'Tem',
\t\t\t'msAug'       : 'Ağu',
\t\t\t'msSep'       : 'Eyl',
\t\t\t'msOct'       : 'Ekm',
\t\t\t'msNov'       : 'Kas',
\t\t\t'msDec'       : 'Ara',
\t\t\t'January'     : 'Ocak',
\t\t\t'February'    : 'Şubat',
\t\t\t'March'       : 'Mart',
\t\t\t'April'       : 'Nisan',
\t\t\t'May'         : 'Mayıs',
\t\t\t'June'        : 'Haziran',
\t\t\t'July'        : 'Temmuz',
\t\t\t'August'      : 'Ağustos',
\t\t\t'September'   : 'Eylül',
\t\t\t'October'     : 'Ekim',
\t\t\t'November'    : 'Kasım',
\t\t\t'December'    : 'Aralık',
\t\t\t'Sunday'      : 'Pazar',
\t\t\t'Monday'      : 'Pazartesi',
\t\t\t'Tuesday'     : 'Salı',
\t\t\t'Wednesday'   : 'Çarşamba',
\t\t\t'Thursday'    : 'Perşembe',
\t\t\t'Friday'      : 'Cuma',
\t\t\t'Saturday'    : 'Cumartesi',
\t\t\t'Sun'         : 'Paz',
\t\t\t'Mon'         : 'Pzt',
\t\t\t'Tue'         : 'Sal',
\t\t\t'Wed'         : 'Çar',
\t\t\t'Thu'         : 'Per',
\t\t\t'Fri'         : 'Cum',
\t\t\t'Sat'         : 'Cmt',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'Ada göre',
\t\t\t'sortkind'          : 'Türe göre',
\t\t\t'sortsize'          : 'Boyuta göre',
\t\t\t'sortdate'          : 'Tarihe göre',
\t\t\t'sortFoldersFirst'  : 'Önce klasörler',
\t\t\t'sortperm'          : 'izinlere göre', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'moduna göre',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'sahibine göre',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'grubuna göre',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Ayrıca ağaç görünümü',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'YeniDosya.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'YeniKlasor',   // added 10.11.2015
\t\t\t'Archive'           : 'YeniArsiv',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'YeniDosya.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1: Dosya',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Onay gerekli',
\t\t\t'confirmRm'       : 'Dosyaları kaldırmak istediğinden emin misin?<br/>Bu işlem geri alınamaz!',
\t\t\t'confirmRepl'     : 'Eski dosya yenisi ile değiştirilsin mi?',
\t\t\t'confirmRest'     : 'Mevcut öge çöp kutusundaki ögeyle değiştirilsin mi?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'UTF-8 değil<br/>UTF-8\\'e dönüştürülsün mü?<br/>Dönüştürme sonrası kaydedebilmek için içeriğin UTF-8 olması gerekir.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Bu dosyanın karakter kodlaması tespit edilemedi. Düzenleme için geçici olarak UTF-8\\'e dönüştürülmesi gerekir.<br/>Lütfen bu dosyanın karakter kodlamasını seçin.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Düzenlenmiş içerik.<br/>Değişiklikleri kaydetmek istemiyorsanız son yapılanlar kaybolacak.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Öğeleri çöp kutusuna taşımak istediğinizden emin misiniz?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'Are you sure you want to move items to \"\$1\"?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : 'Tümüne uygula',
\t\t\t'name'            : 'İsim',
\t\t\t'size'            : 'Boyut',
\t\t\t'perms'           : 'Yetkiler',
\t\t\t'modify'          : 'Değiştirildi',
\t\t\t'kind'            : 'Tür',
\t\t\t'read'            : 'oku',
\t\t\t'write'           : 'yaz',
\t\t\t'noaccess'        : 'erişim yok',
\t\t\t'and'             : 've',
\t\t\t'unknown'         : 'bilinimiyor',
\t\t\t'selectall'       : 'Tüm dosyaları seç',
\t\t\t'selectfiles'     : 'Dosya(lar)ı seç',
\t\t\t'selectffile'     : 'İlk dosyayı seç',
\t\t\t'selectlfile'     : 'Son dosyayı seç',
\t\t\t'viewlist'        : 'Liste görünümü',
\t\t\t'viewicons'       : 'Simge görünümü',
\t\t\t'viewSmall'       : 'Small iconlar', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Medium iconlar', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Large iconlar', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Extra large iconlar', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Yerler',
\t\t\t'calc'            : 'Hesapla',
\t\t\t'path'            : 'Yol',
\t\t\t'aliasfor'        : 'Takma adı:',
\t\t\t'locked'          : 'Kilitli',
\t\t\t'dim'             : 'Ölçüler',
\t\t\t'files'           : 'Dosyalar',
\t\t\t'folders'         : 'Klasörler',
\t\t\t'items'           : 'Nesneler',
\t\t\t'yes'             : 'evet',
\t\t\t'no'              : 'hayır',
\t\t\t'link'            : 'Bağlantı',
\t\t\t'searcresult'     : 'Arama sonuçları',
\t\t\t'selected'        : 'Seçili öğeler',
\t\t\t'about'           : 'Hakkında',
\t\t\t'shortcuts'       : 'Kısayollar',
\t\t\t'help'            : 'Yardım',
\t\t\t'webfm'           : 'Web dosyası yöneticisi',
\t\t\t'ver'             : 'Sürüm',
\t\t\t'protocolver'     : 'protokol sürümü',
\t\t\t'homepage'        : 'Proje Anasayfası',
\t\t\t'docs'            : 'Belgeler',
\t\t\t'github'          : 'Github\\'ta bizi takip edin',
\t\t\t'twitter'         : 'Twitter\\'da bizi takip edin',
\t\t\t'facebook'        : 'Facebook\\'ta bize katılın',
\t\t\t'team'            : 'Takım',
\t\t\t'chiefdev'        : 'geliştirici şefi',
\t\t\t'developer'       : 'geliştirici',
\t\t\t'contributor'     : 'iştirakçi',
\t\t\t'maintainer'      : 'bakıcı',
\t\t\t'translator'      : 'çeviri',
\t\t\t'icons'           : 'Simgeler',
\t\t\t'dontforget'      : 've havlunuzu almayı unutmayın',
\t\t\t'shortcutsof'     : 'Kısayollar devre dışı',
\t\t\t'dropFiles'       : 'Dosyaları buraya taşı',
\t\t\t'or'              : 'veya',
\t\t\t'selectForUpload' : 'Yüklemek için dosyaları seçin',
\t\t\t'moveFiles'       : 'Dosyaları taşı',
\t\t\t'copyFiles'       : 'Dosyaları kopyala',
\t\t\t'restoreFiles'    : 'Öğeleri geri yükle', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Yerlerinden sil',
\t\t\t'aspectRatio'     : 'Görünüm oranı',
\t\t\t'scale'           : 'Ölçeklendir',
\t\t\t'width'           : 'Genişlik',
\t\t\t'height'          : 'Yükseklik',
\t\t\t'resize'          : 'Boyutlandır',
\t\t\t'crop'            : 'Kırp',
\t\t\t'rotate'          : 'Döndür',
\t\t\t'rotate-cw'       : '90 derece sağa döndür',
\t\t\t'rotate-ccw'      : '90 derece sola döndür',
\t\t\t'degree'          : 'Derece',
\t\t\t'netMountDialogTitle' : 'Bağlı (Mount) ağ birimi', // added 18.04.2012
\t\t\t'protocol'            : 'Protokol', // added 18.04.2012
\t\t\t'host'                : 'Sunucu', // added 18.04.2012
\t\t\t'port'                : 'Kapı(Port)', // added 18.04.2012
\t\t\t'user'                : 'Kullanıcı', // added 18.04.2012
\t\t\t'pass'                : 'Şifre', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Bağlantı kesilsin mi \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Dosyaları tarayıcıdan yapıştır veya bırak', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Dosyaları buraya yapıştır veya bırak', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Kodlama', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Yerel',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Hedef: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Giriş MIME Türüne Göre Arama', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Sahibi', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Grup', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Diğer', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Çalıştır', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Yetki', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Mod', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Klasör boş', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Klasör boş\\\\A Eklemek için sürükleyin', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Klasör boş\\\\A Eklemek için basılı tutun', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Kalite', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Otomatik senkronizasyon',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Yukarı taşı',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'URL bağlantısı alın', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Seçili öğeler (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'Klasör kimliği', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Çevrimdışı erişime izin ver', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Yeniden kimlik doğrulaması için', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Şimdi yükleniyor...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Çoklu dosya aç', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': '\$1 dosyalarını açmaya çalışıyorsunuz. Tarayıcıda açmak istediğinizden emin misiniz?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Arama hedefinde eşleşen sonuç bulunamadı.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Dosya düzenleniyor.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : '\$1 öğe seçtiniz.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'Panonuzda \$1 öğeniz var.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Artan arama yalnızca geçerli görünümden yapılır.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Eski durumuna getir', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 tamamlandı', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Durum menüsü', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Sayfa çevir', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Disk kök dizini', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Sıfırla', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Arkaplan rengi', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Renk seçici', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px Izgara', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Etkin', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Engelli', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Geçerli görünümde arama sonucu bulunamadı. Arama sonucunu genişletmek için \\\\APress [Enter]  yapın', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Geçerli görünümde ilk harf arama sonuçları boş.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Metin etiketi', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 dakika kaldı', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Seçilen kodlamayla yeniden aç', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Seçilen kodlamayla kaydet', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Klasör seç', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'İlk arama sayfası', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Hazır ayarlar', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'çok fazla öge var çöp kutusuna atılamaz.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'Metin alanı(TextArea)', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : '\"\$1\" klasörünü boşalt.', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : '\"\$1\" klasöründe öge yok.', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Tercih', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Dil ayarları', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Bu tarayıcıda kayıtlı ayarları başlat', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Araç çubuğu ayarları', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 karakter kaldı',  // from v2.1.29 added 30.8.2017
\t\t\t'linesLeft'       : '... \$1 lines left.',  // from v2.1.52 added 16.1.2020
\t\t\t'sum'             : 'Toplam', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Kaba dosya boyutu', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Fare ile üzerine gelince diyalog öğesi odaklansın',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Seç', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Dosya seçildiğinde işleme al', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Geçen sefer kullanılan editörle aç', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Zıt seçim', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : '\$1 seçilen öğeleri \$2 gibi yeniden adlandırmak istediğinizden emin misiniz?</br>Bu geri alınamaz!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Yığın adını değiştir', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Sayı', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Ön ek kele', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Son ek ekle', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Uzantıyı değiştir', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Sütun ayarları (Liste görünümü)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Tüm değişiklikler hemen arşive yansıtılacaktır.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Herhangi bir değişiklik, bu birimi kaldırılıncaya kadar yansıtılmayacaktır.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'Bu cihaza monte edilen aşağıdaki birim (ler) de bağlanmamıştır. Çıkardığınızdan emin misiniz?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Seçim Bilgisi', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Dosya imza(hash) algoritmaları', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'öğelerin bilgisi (Seçim Bilgi Paneli)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Çıkmak için tekrar basın.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Araç Çubuğu', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Çalışma alanı', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Diyalog', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Tümü', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'İcon Boyutu (İcon Görünümü İçin)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'Maksimum düzenleyici penceresini aç', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : 'API ile dönüşüm şu anda mevcut olmadığından, lütfen web sitesinde dönüştürün.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : 'Dönüştürmeden sonra, dönüştürülen dosyayı kaydetmek için öğe URL\\'si veya indirilen bir dosya ile karşıya yüklemeniz gerekir.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : 'Convert on the site of \$1', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : 'Entegrasyonlar', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'Bu elFinder aşağıdaki harici hizmetlere entegre edilmiştir. Lütfen kullanmadan önce kullanım koşullarını, gizlilik politikasını vb. Kontrol edin.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : 'Gizli ögeleri aç.', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : 'Gizli ögeleri kapat.', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : 'Gizli ögeleri aç/kapat', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : '\"Yeni dosya\" ile etkinleştirilecek dosya türleri', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : 'Text dosyası tipi.', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : 'Ekle', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : 'Tema', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : 'Varsayılan', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : 'Açıklama', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : 'Websayfası', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : 'Yazar', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : 'E-mail', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : 'Lisans', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : 'This item can\\'t be saved. To avoid losing the edits you need to export to your PC.', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': 'Double click on the file to select it.', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : 'Use fullscreen mode', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Bilinmiyor',
\t\t\t'kindRoot'        : 'Sürücü Kök dizini', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Klasör',
\t\t\t'kindSelects'     : 'Seçim', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Alias (Takma ad)',
\t\t\t'kindAliasBroken' : 'Bozuk alias',
\t\t\t// applications
\t\t\t'kindApp'         : 'Uygulama',
\t\t\t'kindPostscript'  : 'Postscript dosyası',
\t\t\t'kindMsOffice'    : 'Microsoft Office dosyası',
\t\t\t'kindMsWord'      : 'Microsoft Word dosyası',
\t\t\t'kindMsExcel'     : 'Microsoft Excel dosyası',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint sunumu',
\t\t\t'kindOO'          : 'Open Office dosyası',
\t\t\t'kindAppFlash'    : 'Flash uygulaması',
\t\t\t'kindPDF'         : 'PDF',
\t\t\t'kindTorrent'     : 'Bittorrent dosyası',
\t\t\t'kind7z'          : '7z arşivi',
\t\t\t'kindTAR'         : 'TAR arşivi',
\t\t\t'kindGZIP'        : 'GZIP arşivi',
\t\t\t'kindBZIP'        : 'BZIP arşivi',
\t\t\t'kindXZ'          : 'XZ arşivi',
\t\t\t'kindZIP'         : 'ZIP arşivi',
\t\t\t'kindRAR'         : 'RAR arşivi',
\t\t\t'kindJAR'         : 'Java JAR dosyası',
\t\t\t'kindTTF'         : 'True Type fontu',
\t\t\t'kindOTF'         : 'Open Type fontu',
\t\t\t'kindRPM'         : 'RPM paketi',
\t\t\t// texts
\t\t\t'kindText'        : 'Metin dosyası',
\t\t\t'kindTextPlain'   : 'Düz metin',
\t\t\t'kindPHP'         : 'PHP kodu',
\t\t\t'kindCSS'         : 'CSS dosyası',
\t\t\t'kindHTML'        : 'HTML dosyası',
\t\t\t'kindJS'          : 'Javascript kodu',
\t\t\t'kindRTF'         : 'Zengin Metin Belgesi',
\t\t\t'kindC'           : 'C kodu',
\t\t\t'kindCHeader'     : 'C başlık kodu',
\t\t\t'kindCPP'         : 'C++ kodu',
\t\t\t'kindCPPHeader'   : 'C++ başlık kodu',
\t\t\t'kindShell'       : 'Unix shell scripti',
\t\t\t'kindPython'      : 'Python kodu',
\t\t\t'kindJava'        : 'Java kodu',
\t\t\t'kindRuby'        : 'Ruby kodu',
\t\t\t'kindPerl'        : 'Perl scripti',
\t\t\t'kindSQL'         : 'SQL kodu',
\t\t\t'kindXML'         : 'XML dosyası',
\t\t\t'kindAWK'         : 'AWK kodu',
\t\t\t'kindCSV'         : 'CSV',
\t\t\t'kindDOCBOOK'     : 'Docbook XML dosyası',
\t\t\t'kindMarkdown'    : 'Markdown dosyası', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Resim',
\t\t\t'kindBMP'         : 'BMP dosyası',
\t\t\t'kindJPEG'        : 'JPEG dosyası',
\t\t\t'kindGIF'         : 'GIF dosyası',
\t\t\t'kindPNG'         : 'PNG dosyası',
\t\t\t'kindTIFF'        : 'TIFF dosyası',
\t\t\t'kindTGA'         : 'TGA dosyası',
\t\t\t'kindPSD'         : 'Adobe Photoshop dosyası',
\t\t\t'kindXBITMAP'     : 'X bitmap dosyası',
\t\t\t'kindPXM'         : 'Pixelmator dosyası',
\t\t\t// media
\t\t\t'kindAudio'       : 'Ses ortamı',
\t\t\t'kindAudioMPEG'   : 'MPEG ses',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 ses',
\t\t\t'kindAudioMIDI'   : 'MIDI ses',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis ses',
\t\t\t'kindAudioWAV'    : 'WAV ses',
\t\t\t'AudioPlaylist'   : 'MP3 listesi',
\t\t\t'kindVideo'       : 'Video ortamı',
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.tr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.tr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.tr.js");
    }
}
