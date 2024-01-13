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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.es.js */
class __TwigTemplate_c90b824ffe9b4165a6b7e2fdb15c0dddc85b6c3dbffca24d6dd8fc76c03147a7 extends Template
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
 * Español internacional translation
 * @author Julián Torres <julian.torres@pabernosmatao.com>
 * @author Luis Faura <luis@luisfaura.es>
 * @author Adrià Vilanova <me@avm99963.tk>
 * @author Wilman Marín Duran <fuclo05@hotmail.com>
 * @version 2018-04-10
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
\telFinder.prototype.i18.es = {
\t\ttranslator : 'Julián Torres &lt;julian.torres@pabernosmatao.com&gt;, Luis Faura &lt;luis@luisfaura.es&gt;, Adrià Vilanova &lt;me@avm99963.tk&gt;, Wilman Marín Duran &lt;fuclo05@hotmail.com&gt;',
\t\tlanguage   : 'Español internacional',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'M d, Y h:i A', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 h:i A', // will produce smth like: Today 12:25 PM
\t\tnonameDateFormat : 'ymd-His', // to apply if upload file is noname: 120513172700
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Error',
\t\t\t'errUnknown'           : 'Error desconocido.',
\t\t\t'errUnknownCmd'        : 'Comando desconocido.',
\t\t\t'errJqui'              : 'Configuración no válida de jQuery UI. Deben estar incluidos los componentes selectable, draggable y droppable.',
\t\t\t'errNode'              : 'elFinder necesita crear elementos DOM.',
\t\t\t'errURL'               : '¡Configuración no válida de elFinder! La opción URL no está configurada.',
\t\t\t'errAccess'            : 'Acceso denegado.',
\t\t\t'errConnect'           : 'No se ha podido conectar con el backend.',
\t\t\t'errAbort'             : 'Conexión cancelada.',
\t\t\t'errTimeout'           : 'Conexión cancelada por timeout.',
\t\t\t'errNotFound'          : 'Backend no encontrado.',
\t\t\t'errResponse'          : 'Respuesta no válida del backend.',
\t\t\t'errConf'              : 'Configuración no válida del backend .',
\t\t\t'errJSON'              : 'El módulo PHP JSON no está instalado.',
\t\t\t'errNoVolumes'         : 'No hay disponibles volúmenes legibles.',
\t\t\t'errCmdParams'         : 'Parámetros no válidos para el comando \"\$1\".',
\t\t\t'errDataNotJSON'       : 'los datos no están en formato JSON.',
\t\t\t'errDataEmpty'         : 'No hay datos.',
\t\t\t'errCmdReq'            : 'La petición del backend necesita un nombre de comando.',
\t\t\t'errOpen'              : 'No se puede abrir \"\$1\".',
\t\t\t'errNotFolder'         : 'El objeto no es una carpeta.',
\t\t\t'errNotFile'           : 'El objeto no es un archivo.',
\t\t\t'errRead'              : 'No se puede leer \"\$1\".',
\t\t\t'errWrite'             : 'No se puede escribir en \"\$1\".',
\t\t\t'errPerm'              : 'Permiso denegado.',
\t\t\t'errLocked'            : '\"\$1\" está bloqueado y no puede ser renombrado, movido o borrado.',
\t\t\t'errExists'            : 'Ya existe un archivo llamado \"\$1\".',
\t\t\t'errInvName'           : 'Nombre de archivo no válido.',
\t\t\t'errInvDirname'        : 'Nombre de carpeta inválido.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Carpeta no encontrada.',
\t\t\t'errFileNotFound'      : 'Archivo no encontrado.',
\t\t\t'errTrgFolderNotFound' : 'Carpeta de destino \"\$1\" no encontrada.',
\t\t\t'errPopup'             : 'El navegador impide abrir nuevas ventanas. Puede activarlo en las opciones del navegador.',
\t\t\t'errMkdir'             : 'No se puede crear la carpeta \"\$1\".',
\t\t\t'errMkfile'            : 'No se puede crear el archivo \"\$1\".',
\t\t\t'errRename'            : 'No se puede renombrar \"\$1\".',
\t\t\t'errCopyFrom'          : 'No se permite copiar archivos desde el volumen \"\$1\".',
\t\t\t'errCopyTo'            : 'No se permite copiar archivos al volumen \"\$1\".',
\t\t\t'errMkOutLink'         : 'No se ha podido crear el enlace fuera del volumen raíz.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Error en el envío.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'No se ha podido cargar \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'No hay archivos para subir.',
\t\t\t'errUploadTotalSize'   : 'El tamaño de los datos excede el máximo permitido.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'El tamaño del archivo excede el máximo permitido.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Tipo de archivo no permitido.',
\t\t\t'errUploadTransfer'    : 'Error al transferir \"\$1\".',
\t\t\t'errUploadTemp'        : 'No se ha podido crear el archivo temporal para la subida.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'El objeto \"\$1\" ya existe y no puede ser reemplazado por otro con otro tipo.', // new
\t\t\t'errReplace'           : 'No se puede reemplazar \"\$1\".',
\t\t\t'errSave'              : 'No se puede guardar \"\$1\".',
\t\t\t'errCopy'              : 'No se puede copiar \"\$1\".',
\t\t\t'errMove'              : 'No se puede mover \"\$1\".',
\t\t\t'errCopyInItself'      : 'No se puede copiar \"\$1\" en si mismo.',
\t\t\t'errRm'                : 'No se puede borrar \"\$1\".',
\t\t\t'errTrash'             : 'No se puede enviar a la papelera.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'No se puede(n) borrar los archivo(s).',
\t\t\t'errExtract'           : 'No se puede extraer archivos desde \"\$1\".',
\t\t\t'errArchive'           : 'No se puede crear el archivo.',
\t\t\t'errArcType'           : 'Tipo de archivo no soportado.',
\t\t\t'errNoArchive'         : 'El archivo no es de tipo archivo o es de un tipo no soportado.',
\t\t\t'errCmdNoSupport'      : 'El backend no soporta este comando.',
\t\t\t'errReplByChild'       : 'La carpeta “\$1” no puede ser reemplazada por un elemento contenido en ella.',
\t\t\t'errArcSymlinks'       : 'Por razones de seguridad no se pueden descomprimir archivos que contengan enlaces simbólicos.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'El tamaño del archivo excede el máximo permitido.',
\t\t\t'errResize'            : 'Error al redimensionar \"\$1\".',
\t\t\t'errResizeDegree'      : 'Grado de rotación inválido.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Error al rotar la imagen.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Tamaño de imagen inválido.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'No se puede cambiar el tamaño de la imagen.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Tipo de archivo no soportado.',
\t\t\t'errNotUTF8Content'    : 'El archivo \"\$1\" no está en formato UTF-8 y no puede ser editado.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Fallo al montar \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Protocolo no soportado.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Fallo al montar.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Dominio requerido.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'La sesión ha expirado por inactividad',
\t\t\t'errCreatingTempDir'   : 'No se ha podido crear al directorio temporal: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'No se ha podido descargar el archivo desde FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'No se ha podido cargar el archivo a FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'No se ha podido crear el directorio remoto en FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Se ha producido un error durante el archivo: \"\$1\"',
\t\t\t'errExtractExec'       : 'Se ha producido un error durante la extracción de archivos: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Imposible montar', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'No es convertible a UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Prueba con un navegador moderno, si quieres subir la carpeta completa.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Se agotó el tiempo de espera buscando \"\$1\". Los resultados de búsqueda son parciales.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Se requiere autorizar de nuevo.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Número máximo de elementos seleccionables es \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'No se puede restaurar desde la papelera. No se puede identificar el destino de restauración.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Editor no encontrado para este tipo de archivo.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Error ocurrido en el lado del servidor.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'No es posible vaciar la carpeta \"\$1\".', // from v2.1.25 added 22.6.2017

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Crear archivo',
\t\t\t'cmdback'      : 'Atrás',
\t\t\t'cmdcopy'      : 'Copiar',
\t\t\t'cmdcut'       : 'Cortar',
\t\t\t'cmddownload'  : 'Descargar',
\t\t\t'cmdduplicate' : 'Duplicar',
\t\t\t'cmdedit'      : 'Editar archivo',
\t\t\t'cmdextract'   : 'Extraer elementos del archivo',
\t\t\t'cmdforward'   : 'Adelante',
\t\t\t'cmdgetfile'   : 'Seleccionar archivos',
\t\t\t'cmdhelp'      : 'Acerca de este software',
\t\t\t'cmdhome'      : 'Inicio',
\t\t\t'cmdinfo'      : 'Obtener información',
\t\t\t'cmdmkdir'     : 'Nueva carpeta',
\t\t\t'cmdmkdirin'   : 'En una nueva carpeta', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Nueva archivo',
\t\t\t'cmdopen'      : 'Abrir',
\t\t\t'cmdpaste'     : 'Pegar',
\t\t\t'cmdquicklook' : 'Previsualizar',
\t\t\t'cmdreload'    : 'Recargar',
\t\t\t'cmdrename'    : 'Cambiar nombre',
\t\t\t'cmdrm'        : 'Eliminar',
\t\t\t'cmdtrash'     : 'Enviar a la papelera', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Restaurar', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Buscar archivos',
\t\t\t'cmdup'        : 'Ir a la carpeta raíz',
\t\t\t'cmdupload'    : 'Subir archivos',
\t\t\t'cmdview'      : 'Ver',
\t\t\t'cmdresize'    : 'Redimensionar y rotar',
\t\t\t'cmdsort'      : 'Ordenar',
\t\t\t'cmdnetmount'  : 'Montar volumen en red', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Desmontar', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'A Lugares', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Cambiar modo', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Abrir una carpeta', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Restablecer ancho de columna', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Pantalla completa', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Mover', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Vaciar la carpeta', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Deshacer', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Rehacer', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Preferencias', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Seleccionar todo', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Seleccionar ninguno', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Invertir selección', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Abrir en nueva ventana', // from v2.1.38 added 3.4.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Cerrar',
\t\t\t'btnSave'   : 'Guardar',
\t\t\t'btnRm'     : 'Eliminar',
\t\t\t'btnApply'  : 'Aplicar',
\t\t\t'btnCancel' : 'Cancelar',
\t\t\t'btnNo'     : 'No',
\t\t\t'btnYes'    : 'Sí',
\t\t\t'btnMount'  : 'Montar',  // added 18.04.2012
\t\t\t'btnApprove': 'Ir a \$1 y aprobar', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Desmontar', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Convertir', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Aquí',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Volumen',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Todos',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'Tipo MIME', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Nombre de archivo',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Guardar y cerrar', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Copia de seguridad', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Renombrar',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Renombrar(Todo)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Ant (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Sig (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Guardar como', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Abrir carpeta',
\t\t\t'ntffile'     : 'Abrir archivo',
\t\t\t'ntfreload'   : 'Actualizar contenido de la carpeta',
\t\t\t'ntfmkdir'    : 'Creando directorio',
\t\t\t'ntfmkfile'   : 'Creando archivos',
\t\t\t'ntfrm'       : 'Eliminando archivos',
\t\t\t'ntfcopy'     : 'Copiar archivos',
\t\t\t'ntfmove'     : 'Mover archivos',
\t\t\t'ntfprepare'  : 'Preparar copia de archivos',
\t\t\t'ntfrename'   : 'Renombrar archivos',
\t\t\t'ntfupload'   : 'Subiendo archivos',
\t\t\t'ntfdownload' : 'Descargando archivos',
\t\t\t'ntfsave'     : 'Guardar archivos',
\t\t\t'ntfarchive'  : 'Creando archivo',
\t\t\t'ntfextract'  : 'Extrayendo elementos del archivo',
\t\t\t'ntfsearch'   : 'Buscando archivos',
\t\t\t'ntfresize'   : 'Redimensionando imágenes',
\t\t\t'ntfsmth'     : 'Haciendo algo',
\t\t\t'ntfloadimg'  : 'Cargando imagen',
\t\t\t'ntfnetmount' : 'Montando volumen en red', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Desmontando volumen en red', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Adquiriendo tamaño de imagen', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Leyendo información de la carpeta', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Obteniendo URL del enlace', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Cambiando el modo de archivo', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Verificando nombre del archivo subido', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Creando un archivo para descargar', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Obteniendo información de la ruta', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Procesando el archivo cargado', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Enviando a la papelera', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Restaurando desde la papelera', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Comprobando carpeta de destino', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Deshaciendo operación previa', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Rehaciendo previo deshacer', // from v2.1.27 added 31.07.2017

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Papelera', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'desconocida',
\t\t\t'Today'       : 'Hoy',
\t\t\t'Yesterday'   : 'Ayer',
\t\t\t'msJan'       : 'Ene',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Abr',
\t\t\t'msMay'       : 'May',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Jul',
\t\t\t'msAug'       : 'Ago',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Oct',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Dic',
\t\t\t'January'     : 'Enero',
\t\t\t'February'    : 'Febrero',
\t\t\t'March'       : 'Marzo',
\t\t\t'April'       : 'Abril',
\t\t\t'May'         : 'Mayo',
\t\t\t'June'        : 'Junio',
\t\t\t'July'        : 'Julio',
\t\t\t'August'      : 'Agosto',
\t\t\t'September'   : 'Septiembre',
\t\t\t'October'     : 'Octubre',
\t\t\t'November'    : 'Noviembre',
\t\t\t'December'    : 'Diciembre',
\t\t\t'Sunday'      : 'Domingo',
\t\t\t'Monday'      : 'Lunes',
\t\t\t'Tuesday'     : 'Martes',
\t\t\t'Wednesday'   : 'Miércoles',
\t\t\t'Thursday'    : 'Jueves',
\t\t\t'Friday'      : 'Viernes',
\t\t\t'Saturday'    : 'Sábado',
\t\t\t'Sun'         : 'Dom',
\t\t\t'Mon'         : 'Lun',
\t\t\t'Tue'         : 'Mar',
\t\t\t'Wed'         : 'Mie',
\t\t\t'Thu'         : 'Jue',
\t\t\t'Fri'         : 'Vie',
\t\t\t'Sat'         : 'Sab',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'por nombre',
\t\t\t'sortkind'          : 'por tipo',
\t\t\t'sortsize'          : 'por tamaño',
\t\t\t'sortdate'          : 'por fecha',
\t\t\t'sortFoldersFirst'  : 'Las carpetas primero',
\t\t\t'sortperm'          : 'por permiso', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'por modo',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'por propietario',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'por grupo',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'También árbol de directorios',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NuevoArchivo.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NuevaCarpeta',   // added 10.11.2015
\t\t\t'Archive'           : 'NuevoArchivo',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Se necesita confirmación',
\t\t\t'confirmRm'       : '¿Está seguro de querer eliminar archivos?<br/>¡Esto no se puede deshacer!',
\t\t\t'confirmRepl'     : '¿Reemplazar el antiguo archivo con el nuevo?',
\t\t\t'confirmRest'     : '¿Reemplazar elemento existente con el elemento en la papelera?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'No está en UTF-8<br/>Convertir a UTF-8?<br/>Los contenidos se guardarán en UTF-8 tras la conversión.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Codificación de caracteres de este archivo no pudo ser detectada. Es necesario convertir temporalmente a UTF-8 para editarlo. <br/> Por favor, seleccione la codificación de caracteres de este archivo.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Ha sido modificado.<br/>Perderás los cambios si no los guardas.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : '¿Estás seguro que quieres mover los elementos a la papelera?', //from v2.1.24 added 29.4.2017
\t\t\t'apllyAll'        : 'Aplicar a todo',
\t\t\t'name'            : 'Nombre',
\t\t\t'size'            : 'Tamaño',
\t\t\t'perms'           : 'Permisos',
\t\t\t'modify'          : 'Modificado',
\t\t\t'kind'            : 'Tipo',
\t\t\t'read'            : 'lectura',
\t\t\t'write'           : 'escritura',
\t\t\t'noaccess'        : 'sin acceso',
\t\t\t'and'             : 'y',
\t\t\t'unknown'         : 'desconocido',
\t\t\t'selectall'       : 'Seleccionar todos los archivos',
\t\t\t'selectfiles'     : 'Seleccionar archivo(s)',
\t\t\t'selectffile'     : 'Seleccionar primer archivo',
\t\t\t'selectlfile'     : 'Seleccionar último archivo',
\t\t\t'viewlist'        : 'ver como lista',
\t\t\t'viewicons'       : 'Ver como iconos',
\t\t\t'places'          : 'Lugares',
\t\t\t'calc'            : 'Calcular',
\t\t\t'path'            : 'Ruta',
\t\t\t'aliasfor'        : 'Alias para',
\t\t\t'locked'          : 'Bloqueado',
\t\t\t'dim'             : 'Dimensiones',
\t\t\t'files'           : 'Archivos',
\t\t\t'folders'         : 'Carpetas',
\t\t\t'items'           : 'Elementos',
\t\t\t'yes'             : 'sí',
\t\t\t'no'              : 'no',
\t\t\t'link'            : 'Enlace',
\t\t\t'searcresult'     : 'Resultados de la búsqueda',
\t\t\t'selected'        : 'elementos seleccionados',
\t\t\t'about'           : 'Acerca',
\t\t\t'shortcuts'       : 'Accesos directos',
\t\t\t'help'            : 'Ayuda',
\t\t\t'webfm'           : 'Administrador de archivos web',
\t\t\t'ver'             : 'Versión',
\t\t\t'protocolver'     : 'versión del protocolo',
\t\t\t'homepage'        : 'Inicio',
\t\t\t'docs'            : 'Documentación',
\t\t\t'github'          : 'Bifúrcanos en Github',
\t\t\t'twitter'         : 'Síguenos en Twitter',
\t\t\t'facebook'        : 'Únete a nosotros en Facebook',
\t\t\t'team'            : 'Equipo',
\t\t\t'chiefdev'        : 'desarrollador jefe',
\t\t\t'developer'       : 'desarrollador',
\t\t\t'contributor'     : 'contribuyente',
\t\t\t'maintainer'      : 'mantenedor',
\t\t\t'translator'      : 'traductor',
\t\t\t'icons'           : 'Iconos',
\t\t\t'dontforget'      : 'y no olvide traer su toalla',
\t\t\t'shortcutsof'     : 'Accesos directos desactivados',
\t\t\t'dropFiles'       : 'Arrastre archivos aquí',
\t\t\t'or'              : 'o',
\t\t\t'selectForUpload' : 'Seleccione archivos para subir',
\t\t\t'moveFiles'       : 'Mover archivos',
\t\t\t'copyFiles'       : 'Copiar archivos',
\t\t\t'restoreFiles'    : 'Restaurar elementos', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Eliminar en sus ubicaciones',
\t\t\t'aspectRatio'     : 'Relación de aspecto',
\t\t\t'scale'           : 'Escala',
\t\t\t'width'           : 'Ancho',
\t\t\t'height'          : 'Alto',
\t\t\t'resize'          : 'Redimensionar',
\t\t\t'crop'            : 'Recortar',
\t\t\t'rotate'          : 'Rotar',
\t\t\t'rotate-cw'       : 'Rotar 90 grados en sentido horario',
\t\t\t'rotate-ccw'      : 'Rotar 90 grados en sentido anti-horario',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Montar volumen en red', // added 18.04.2012
\t\t\t'protocol'            : 'Protocolo', // added 18.04.2012
\t\t\t'host'                : 'Dominio', // added 18.04.2012
\t\t\t'port'                : 'Puerto', // added 18.04.2012
\t\t\t'user'                : 'Usuario', // added 18.04.2012
\t\t\t'pass'                : 'Contraseña', // added 18.04.2012
\t\t\t'confirmUnmount'      : '¿Desmontar \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Arrastra o pega archivos del navegador', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Arrastra o pega enlaces URL aquí', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Codificando', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Local',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Destino: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Buscar entrada por tipo MIME', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Propietario', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Grupo', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Otro', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Ejecutar', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Permiso', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Modo', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'La carpeta está vacía', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'La carpeta está vacía\\\\A Arrastrar para añadir elementos', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'La carpeta está vacía\\\\A Presiona durante un rato para añadir elementos', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Calidad', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Sincronización automática',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Mover arriba',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Obtener enlace', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Elementos seleccionados (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID carpeta', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Permitir acceso sin conexión', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Para volver a autenticarse', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Cargando ahora...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Abrir múltiples archivos', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Estás tratando de abrir los \$1 archivos. ¿Estás seguro que quieres abrir en el navegador?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'No se encontraron resultados en el objetivo de búsqueda.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Está editando un archivo.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'Has seleccionado \$1 elementos.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'Posees \$1 elementos en el portapapeles.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'La búsqueda incremental solo se realiza desde la vista actual.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Reinstanciar', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 completo', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Menú contextual', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Cambio de página', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Raíces del volumen', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Reiniciar', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Color de fondo', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Selector de color', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px Cuadricula', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Habilitado', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Deshabilitado', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Los resultados de la búsqueda están vacíos en la vista actual. \\\\ APulse [Intro] para expandir el objetivo de búsqueda.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'La primera letra de los resultados de búsqueda está vacía en la vista actual.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Etiqueta de texto', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : 'Falta \$1 minuto(s)', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Abrir nuevamente con la codificación seleccionada', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Guardar con la codificación seleccionada', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Seleccionar carpeta', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Primera letra de búsqueda', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Preestablecidos', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'Son demasiados elementos, por lo que no puede enviarse a la papelera.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'Área de texto', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Vaciar la carpeta \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'No hay elementos en la carpeta \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Preferencia', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Lenguaje', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Inicializa la configuración guardada en este navegador', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Configuración de la barra de herramientas', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '...falta \$1 caracteres.',  // from v2.1.29 added 30.8.2017
\t\t\t'sum'             : 'Suma', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Tamaño de archivo aproximado', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Centrado en el elemento de diálogo con \\'mouseover\\'',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Seleccionar', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Acción cuando selecciona un archivo', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Abrir con el editor utilizado la última vez', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Invertir selección', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : '¿Estás seguro que quieres renombrar \$1 elementos seleccionados como \$2?<br/>¡Esto no puede ser deshecho!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Cambiar el nombre del lote', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Número', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Añadir prefijo', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Añadir sufijo', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Cambiar extensión', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Configuración de columnas (Vista de lista)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Todos los cambios se reflejarán inmediatamente en el archivo.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Cualquier cambio no se reflejará hasta que no se desmonte este volumen.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'Los siguientes volúmenes montados en este volumen también se desmontaron. ¿Estás seguro de desmontarlo?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Información de la selección', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Algoritmos para mostrar el hash de archivos', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Elementos de información (Panel de información de selección)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Presiona de nuevo para salir.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Barra de herramienta', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Espacio de trabajo', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Diálogo', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Todo', // from v2.1.38 added 4.4.2018

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Desconocido',
\t\t\t'kindRoot'        : 'Raíces del volumen', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Carpeta',
\t\t\t'kindSelects'     : 'Selecciones', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Alias roto',
\t\t\t// applications
\t\t\t'kindApp'         : 'Aplicación',
\t\t\t'kindPostscript'  : 'Documento Postscript',
\t\t\t'kindMsOffice'    : 'Documento Microsoft Office',
\t\t\t'kindMsWord'      : 'Documento Microsoft Word',
\t\t\t'kindMsExcel'     : 'Documento Microsoft Excel',
\t\t\t'kindMsPP'        : 'Presentación Microsoft Powerpoint',
\t\t\t'kindOO'          : 'Documento Open Office',
\t\t\t'kindAppFlash'    : 'Aplicación Flash',
\t\t\t'kindPDF'         : 'Documento PDF',
\t\t\t'kindTorrent'     : 'Archivo Bittorrent',
\t\t\t'kind7z'          : 'Archivo 7z',
\t\t\t'kindTAR'         : 'Archivo TAR',
\t\t\t'kindGZIP'        : 'Archivo GZIP',
\t\t\t'kindBZIP'        : 'Archivo BZIP',
\t\t\t'kindXZ'          : 'Archivo XZ',
\t\t\t'kindZIP'         : 'Archivo ZIP',
\t\t\t'kindRAR'         : 'Archivo RAR',
\t\t\t'kindJAR'         : 'Archivo Java JAR',
\t\t\t'kindTTF'         : 'Fuente True Type',
\t\t\t'kindOTF'         : 'Fuente Open Type',
\t\t\t'kindRPM'         : 'Paquete RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Documento de texto',
\t\t\t'kindTextPlain'   : 'Texto plano',
\t\t\t'kindPHP'         : 'Código PHP',
\t\t\t'kindCSS'         : 'Hoja de estilos CSS',
\t\t\t'kindHTML'        : 'Documento HTML',
\t\t\t'kindJS'          : 'Código Javascript',
\t\t\t'kindRTF'         : 'Documento RTF',
\t\t\t'kindC'           : 'Código C',
\t\t\t'kindCHeader'     : 'Código C cabeceras',
\t\t\t'kindCPP'         : 'Código C++',
\t\t\t'kindCPPHeader'   : 'Código C++ cabeceras',
\t\t\t'kindShell'       : 'Script de terminal de Unix',
\t\t\t'kindPython'      : 'Código Python',
\t\t\t'kindJava'        : 'Código Java',
\t\t\t'kindRuby'        : 'Código Ruby',
\t\t\t'kindPerl'        : 'Código Perl',
\t\t\t'kindSQL'         : 'Código QL',
\t\t\t'kindXML'         : 'Documento XML',
\t\t\t'kindAWK'         : 'Código AWK',
\t\t\t'kindCSV'         : 'Documento CSV (valores separados por comas)',
\t\t\t'kindDOCBOOK'     : 'Documento Docbook XML',
\t\t\t'kindMarkdown'    : 'Texto Markdown', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Imagen',
\t\t\t'kindBMP'         : 'Imagen BMP',
\t\t\t'kindJPEG'        : 'Imagen JPEG',
\t\t\t'kindGIF'         : 'Imagen GIF',
\t\t\t'kindPNG'         : 'Imagen PNG',
\t\t\t'kindTIFF'        : 'Imagen TIFF',
\t\t\t'kindTGA'         : 'Imagen TGA',
\t\t\t'kindPSD'         : 'Imagen Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Imagen X bitmap',
\t\t\t'kindPXM'         : 'Imagen Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Archivo de audio',
\t\t\t'kindAudioMPEG'   : 'Audio MPEG',
\t\t\t'kindAudioMPEG4'  : 'Audio MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Audio MIDI',
\t\t\t'kindAudioOGG'    : 'Audio Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Audio WAV',
\t\t\t'AudioPlaylist'   : 'Lista de reproducción MP3',
\t\t\t'kindVideo'       : 'Archivo de vídeo',
\t\t\t'kindVideoDV'     : 'Película DV',
\t\t\t'kindVideoMPEG'   : 'Película MPEG',
\t\t\t'kindVideoMPEG4'  : 'Película MPEG-4',
\t\t\t'kindVideoAVI'    : 'Película AVI',
\t\t\t'kindVideoMOV'    : 'Película Quick Time',
\t\t\t'kindVideoWM'     : 'Película Windows Media',
\t\t\t'kindVideoFlash'  : 'Película Flash',
\t\t\t'kindVideoMKV'    : 'Película Matroska MKV',
\t\t\t'kindVideoOGG'    : 'Película Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.es.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.es.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.es.js");
    }
}
