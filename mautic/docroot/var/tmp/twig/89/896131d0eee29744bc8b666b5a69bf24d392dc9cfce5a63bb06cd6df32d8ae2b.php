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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.fr.js */
class __TwigTemplate_c8fa22fe08933a0d1e6f5bf1c4c6ed5e92cca924d56651ba937214218a22a928 extends Template
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
 * française translation
 * @author Régis Guyomarch <regisg@gmail.com>
 * @author Benoit Delachaux <benorde33@gmail.com>
 * @author Jonathan Grunder <jonathan.grunder@gmail.com>
 * @version 2019-06-11
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
\telFinder.prototype.i18.fr = {
\t\ttranslator : 'Régis Guyomarch &lt;regisg@gmail.com&gt;, Benoit Delachaux &lt;benorde33@gmail.com&gt;, Jonathan Grunder &lt;jonathan.grunder@gmail.com&gt;',
\t\tlanguage   : 'française',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd/M/Y H:i', // will show like: 11/Jun/2019 19:33
\t\tfancyDateFormat : '\$1 H:i', // will show like: Aujourd'hui 19:33
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 190611-193346
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Erreur',
\t\t\t'errUnknown'           : 'Erreur inconnue.',
\t\t\t'errUnknownCmd'        : 'Commande inconnue.',
\t\t\t'errJqui'              : 'Mauvaise configuration de jQuery UI. Les composants Selectable, draggable et droppable doivent être inclus.',
\t\t\t'errNode'              : 'elFinder requiert que l\\'élément DOM ait été créé.',
\t\t\t'errURL'               : 'Mauvaise configuration d\\'elFinder ! L\\'option URL n\\'a pas été définie.',
\t\t\t'errAccess'            : 'Accès refusé.',
\t\t\t'errConnect'           : 'Impossible de se connecter au backend.',
\t\t\t'errAbort'             : 'Connexion interrompue.',
\t\t\t'errTimeout'           : 'Délai de connexion dépassé.',
\t\t\t'errNotFound'          : 'Backend non trouvé.',
\t\t\t'errResponse'          : 'Mauvaise réponse du backend.',
\t\t\t'errConf'              : 'Mauvaise configuration du backend.',
\t\t\t'errJSON'              : 'Le module PHP JSON n\\'est pas installé.',
\t\t\t'errNoVolumes'         : 'Aucun volume lisible.',
\t\t\t'errCmdParams'         : 'Mauvais paramétrage de la commande \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Les données ne sont pas au format JSON.',
\t\t\t'errDataEmpty'         : 'Données inexistantes.',
\t\t\t'errCmdReq'            : 'La requête au Backend doit comporter le nom de la commande.',
\t\t\t'errOpen'              : 'Impossible d\\'ouvrir \"\$1\".',
\t\t\t'errNotFolder'         : 'Cet objet n\\'est pas un dossier.',
\t\t\t'errNotFile'           : 'Cet objet n\\'est pas un fichier.',
\t\t\t'errRead'              : 'Impossible de lire \"\$1\".',
\t\t\t'errWrite'             : 'Impossible d\\'écrire dans \"\$1\".',
\t\t\t'errPerm'              : 'Permission refusée.',
\t\t\t'errLocked'            : '\"\$1\" est verrouillé et ne peut être déplacé ou supprimé.',
\t\t\t'errExists'            : 'Un élément nommé \"\$1\" existe déjà.',
\t\t\t'errInvName'           : 'Nom de fichier incorrect.',
\t\t\t'errInvDirname'        : 'Nom de dossier incorrect.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Dossier non trouvé.',
\t\t\t'errFileNotFound'      : 'Fichier non trouvé.',
\t\t\t'errTrgFolderNotFound' : 'Dossier destination \"\$1\" non trouvé.',
\t\t\t'errPopup'             : 'Le navigateur web a empêché l\\'ouverture d\\'une fenêtre \"popup\". Pour ouvrir le fichier, modifiez les options du navigateur web.',
\t\t\t'errMkdir'             : 'Impossible de créer le dossier \"\$1\".',
\t\t\t'errMkfile'            : 'Impossible de créer le fichier \"\$1\".',
\t\t\t'errRename'            : 'Impossible de renommer \"\$1\".',
\t\t\t'errCopyFrom'          : 'Interdiction de copier des fichiers depuis le volume \"\$1\".',
\t\t\t'errCopyTo'            : 'Interdiction de copier des fichiers vers le volume \"\$1\".',
\t\t\t'errMkOutLink'         : 'Impossible de créer un lien en dehors du volume principal.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Erreur lors de l\\'envoi du fichier.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Impossible d\\'envoyer \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Aucun fichier à envoyer.',
\t\t\t'errUploadTotalSize'   : 'Les données dépassent la taille maximale allouée.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Le fichier dépasse la taille maximale allouée.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Type de fichier non autorisé.',
\t\t\t'errUploadTransfer'    : '\"\$1\" erreur transfert.',
\t\t\t'errUploadTemp'        : 'Impossible de créer un fichier temporaire pour transférer les fichiers.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'L\\'objet \"\$1\" existe déjà à cet endroit et ne peut être remplacé par un objet d\\'un type différent.', // new
\t\t\t'errReplace'           : 'Impossible de remplacer \"\$1\".',
\t\t\t'errSave'              : 'Impossible de sauvegarder \"\$1\".',
\t\t\t'errCopy'              : 'Impossible de copier \"\$1\".',
\t\t\t'errMove'              : 'Impossible de déplacer \"\$1\".',
\t\t\t'errCopyInItself'      : 'Impossible de copier \"\$1\" sur lui-même.',
\t\t\t'errRm'                : 'Impossible de supprimer \"\$1\".',
\t\t\t'errTrash'             : 'Impossible de déplacer dans la corbeille', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Impossible de supprimer le(s) fichier(s) source(s).',
\t\t\t'errExtract'           : 'Imbossible d\\'extraire les fichiers à partir de \"\$1\".',
\t\t\t'errArchive'           : 'Impossible de créer l\\'archive.',
\t\t\t'errArcType'           : 'Type d\\'archive non supporté.',
\t\t\t'errNoArchive'         : 'Le fichier n\\'est pas une archive, ou c\\'est un type d\\'archive non supporté.',
\t\t\t'errCmdNoSupport'      : 'Le Backend ne prend pas en charge cette commande.',
\t\t\t'errReplByChild'       : 'Le dossier “\$1” ne peut pas être remplacé par un élément qu\\'il contient.',
\t\t\t'errArcSymlinks'       : 'Par mesure de sécurité, il est défendu d\\'extraire une archive contenant des liens symboliques ou des noms de fichier non autorisés.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Les fichiers de l\\'archive excèdent la taille maximale autorisée.',
\t\t\t'errResize'            : 'Impossible de redimensionner \"\$1\".',
\t\t\t'errResizeDegree'      : 'Degré de rotation invalide.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'L\\'image ne peut pas être tournée.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Dimension de l\\'image non-valide.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'L\\'image n\\'est pas redimensionnable.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Type de fichier non supporté.',
\t\t\t'errNotUTF8Content'    : 'Le fichier \"\$1\" n\\'est pas en UTF-8, il ne peut être édité.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Impossible de monter \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Protocole non supporté.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Echec du montage.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Hôte requis.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Votre session a expiré en raison de son inactivité.',
\t\t\t'errCreatingTempDir'   : 'Impossible de créer le répertoire temporaire : \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Impossible de télécharger le file depuis l\\'accès FTP : \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Impossible d\\'envoyer le fichier vers l\\'accès FTP : \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Impossible de créer un répertoire distant sur l\\'accès FTP :\"\$1\"',
\t\t\t'errArchiveExec'       : 'Erreur lors de l\\'archivage des fichiers : \"\$1\"',
\t\t\t'errExtractExec'       : 'Erreur lors de l\\'extraction des fichiers : \"\$1\"',
\t\t\t'errNetUnMount'        : 'Impossible de démonter.', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Conversion en UTF-8 impossible', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Essayez Google Chrome, si voulez envoyer le dossier.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Délai d’attente dépassé pour la recherche \"\$1\". Le résultat de la recherche est partiel.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Réauthorisation requise.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Le nombre maximal d\\'éléments pouvant être sélectionnés est \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Impossible de restaurer la corbeille. La destination de la restauration n\\'a pu être identifiée.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Aucun éditeur n\\'a été trouvé pour ce type de fichier.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Une erreur est survenue du côté serveur.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Impossible de vider le dossier \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'There are \$1 more errors.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Créer une archive',
\t\t\t'cmdback'      : 'Précédent',
\t\t\t'cmdcopy'      : 'Copier',
\t\t\t'cmdcut'       : 'Couper',
\t\t\t'cmddownload'  : 'Télécharger',
\t\t\t'cmdduplicate' : 'Dupliquer',
\t\t\t'cmdedit'      : 'Éditer le fichier',
\t\t\t'cmdextract'   : 'Extraire les fichiers de l\\'archive',
\t\t\t'cmdforward'   : 'Suivant',
\t\t\t'cmdgetfile'   : 'Sélectionner les fichiers',
\t\t\t'cmdhelp'      : 'À propos de ce logiciel',
\t\t\t'cmdhome'      : 'Accueil',
\t\t\t'cmdinfo'      : 'Informations',
\t\t\t'cmdmkdir'     : 'Nouveau dossier',
\t\t\t'cmdmkdirin'   : 'Dans un nouveau dossier', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Nouveau fichier',
\t\t\t'cmdopen'      : 'Ouvrir',
\t\t\t'cmdpaste'     : 'Coller',
\t\t\t'cmdquicklook' : 'Prévisualiser',
\t\t\t'cmdreload'    : 'Actualiser',
\t\t\t'cmdrename'    : 'Renommer',
\t\t\t'cmdrm'        : 'Supprimer',
\t\t\t'cmdtrash'     : 'À la corbeille', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Restaurer', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Trouver les fichiers',
\t\t\t'cmdup'        : 'Remonter au dossier parent',
\t\t\t'cmdupload'    : 'Envoyer les fichiers',
\t\t\t'cmdview'      : 'Vue',
\t\t\t'cmdresize'    : 'Redimensionner l\\'image',
\t\t\t'cmdsort'      : 'Trier',
\t\t\t'cmdnetmount'  : 'Monter un volume réseau', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Démonter', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Vers Favoris', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Changer de mode', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Ouvrir un dossier', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Réinitialiser largeur colone', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Plein écran', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Déplacer', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Vider le dossier', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Annuler', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Refaire', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Préférences', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Tout sélectionner', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Tout désélectionner', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Inverser la sélection', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Ouvrir dans une nouvelle fenêtre', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Hide (Preference)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Fermer',
\t\t\t'btnSave'   : 'Sauvegarder',
\t\t\t'btnRm'     : 'Supprimer',
\t\t\t'btnApply'  : 'Confirmer',
\t\t\t'btnCancel' : 'Annuler',
\t\t\t'btnNo'     : 'Non',
\t\t\t'btnYes'    : 'Oui',
\t\t\t'btnMount'  : 'Monter',  // added 18.04.2012
\t\t\t'btnApprove': 'Aller à \$1 & approuver', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Démonter', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Convertir', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Ici',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Volume',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Tous',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'Type MIME', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Nom du fichier',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Enregistrer & Ferme', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Sauvegarde', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Renommer',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Renommer (tous)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Préc. (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Suiv. (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Sauvegarder sous', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Ouvrir le dossier',
\t\t\t'ntffile'     : 'Ouvrir le fichier',
\t\t\t'ntfreload'   : 'Actualiser le contenu du dossier',
\t\t\t'ntfmkdir'    : 'Création du dossier',
\t\t\t'ntfmkfile'   : 'Création des fichiers',
\t\t\t'ntfrm'       : 'Supprimer les éléments',
\t\t\t'ntfcopy'     : 'Copier les éléments',
\t\t\t'ntfmove'     : 'Déplacer les éléments',
\t\t\t'ntfprepare'  : 'Préparation de la copie des éléments',
\t\t\t'ntfrename'   : 'Renommer les fichiers',
\t\t\t'ntfupload'   : 'Envoi des fichiers',
\t\t\t'ntfdownload' : 'Téléchargement des fichiers',
\t\t\t'ntfsave'     : 'Sauvegarder les fichiers',
\t\t\t'ntfarchive'  : 'Création de l\\'archive',
\t\t\t'ntfextract'  : 'Extraction des fichiers de l\\'archive',
\t\t\t'ntfsearch'   : 'Recherche des fichiers',
\t\t\t'ntfresize'   : 'Redimensionner les images',
\t\t\t'ntfsmth'     : 'Fait quelque chose',
\t\t\t'ntfloadimg'  : 'Chargement de l\\'image',
\t\t\t'ntfnetmount' : 'Monte le volume réseau', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Démonte le volume réseau', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Calcule la dimension de l\\'image', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Lecture des informations du dossier', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Récupération de l’URL du lien', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Changement de mode', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Vérification du nom du fichier envoyé', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Création d’un fichier pour le téléchargement', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Traitement de l\\'information du chemin', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Traitement du fichier envoyé', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Mettre à la corbeille', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Restaurer depuis la corbeille', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Validation du dossier de destination', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Annuler l\\'opération précédente', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Refaire l\\'opération annulée', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'Checking contents', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Corbeille', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'Inconnue',
\t\t\t'Today'       : 'Aujourd\\'hui',
\t\t\t'Yesterday'   : 'Hier',
\t\t\t'msJan'       : 'Jan',
\t\t\t'msFeb'       : 'Fév',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Avr',
\t\t\t'msMay'       : 'Mai',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Jul',
\t\t\t'msAug'       : 'Aoû',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Oct',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Déc',
\t\t\t'January'     : 'Janvier',
\t\t\t'February'    : 'Février',
\t\t\t'March'       : 'Mars',
\t\t\t'April'       : 'Avril',
\t\t\t'May'         : 'Mai',
\t\t\t'June'        : 'Juin',
\t\t\t'July'        : 'Huillet',
\t\t\t'August'      : 'Août',
\t\t\t'September'   : 'Septembre',
\t\t\t'October'     : 'Octobre',
\t\t\t'November'    : 'Novembre',
\t\t\t'December'    : 'Décembre',
\t\t\t'Sunday'      : 'Dimanche',
\t\t\t'Monday'      : 'Lundi',
\t\t\t'Tuesday'     : 'Mardi',
\t\t\t'Wednesday'   : 'Mercredi',
\t\t\t'Thursday'    : 'Jeudi',
\t\t\t'Friday'      : 'Vendredi',
\t\t\t'Saturday'    : 'Samedi',
\t\t\t'Sun'         : 'Dim',
\t\t\t'Mon'         : 'Lun',
\t\t\t'Tue'         : 'Mar',
\t\t\t'Wed'         : 'Mer',
\t\t\t'Thu'         : 'Jeu',
\t\t\t'Fri'         : 'Ven',
\t\t\t'Sat'         : 'Sam',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'par nom',
\t\t\t'sortkind'          : 'par type',
\t\t\t'sortsize'          : 'par taille',
\t\t\t'sortdate'          : 'par date',
\t\t\t'sortFoldersFirst'  : 'Dossiers en premier',
\t\t\t'sortperm'          : 'par permission', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'par mode',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'par propriétaire',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'par groupe',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Egalement arborescence',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NouveauFichier.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NouveauDossier',   // added 10.11.2015
\t\t\t'Archive'           : 'NouvelleArchive',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'NewFile.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1: File',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Confirmation requise',
\t\t\t'confirmRm'       : 'Êtes-vous certain de vouloir supprimer les éléments ?<br/>Cela ne peut être annulé !',
\t\t\t'confirmRepl'     : 'Supprimer l\\'ancien fichier par le nouveau ?',
\t\t\t'confirmRest'     : 'Remplacer l\\'élément existant par l\\'élément de la corbeille ?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'L\\'encodage n\\'est pas UTf-8<br/>Convertir en UTF-8 ?<br/>Les contenus deviendront UTF-8 en sauvegardant après la conversion.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Impossible de détecter l\\'encodage de ce fichier. Pour être modifié, il doit être temporairement convertit en UTF-8.<br/>Veuillez s\\'il vous plaît sélectionner un encodage pour ce fichier.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Ce fichier a été modifié.<br/>Les données seront perdues si les changements ne sont pas sauvegardés.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Êtes-vous certain de vouloir déplacer les éléments vers la corbeille?', //from v2.1.24 added 29.4.2017
\t\t\t'apllyAll'        : 'Appliquer à tous',
\t\t\t'name'            : 'Nom',
\t\t\t'size'            : 'Taille',
\t\t\t'perms'           : 'Permissions',
\t\t\t'modify'          : 'Modifié',
\t\t\t'kind'            : 'Type',
\t\t\t'read'            : 'Lecture',
\t\t\t'write'           : 'Écriture',
\t\t\t'noaccess'        : 'Pas d\\'accès',
\t\t\t'and'             : 'et',
\t\t\t'unknown'         : 'inconnu',
\t\t\t'selectall'       : 'Sélectionner tous les éléments',
\t\t\t'selectfiles'     : 'Sélectionner le(s) élément(s)',
\t\t\t'selectffile'     : 'Sélectionner le premier élément',
\t\t\t'selectlfile'     : 'Sélectionner le dernier élément',
\t\t\t'viewlist'        : 'Vue par liste',
\t\t\t'viewicons'       : 'Vue par icônes',
\t\t\t'viewSmall'       : 'Petites icônes', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Moyennes icônes', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Grandes icônes', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Très grandes icônes', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Favoris',
\t\t\t'calc'            : 'Calculer',
\t\t\t'path'            : 'Chemin',
\t\t\t'aliasfor'        : 'Raccourcis pour',
\t\t\t'locked'          : 'Verrouiller',
\t\t\t'dim'             : 'Dimensions',
\t\t\t'files'           : 'Fichiers',
\t\t\t'folders'         : 'Dossiers',
\t\t\t'items'           : 'Éléments',
\t\t\t'yes'             : 'oui',
\t\t\t'no'              : 'non',
\t\t\t'link'            : 'Lien',
\t\t\t'searcresult'     : 'Résultats de la recherche',
\t\t\t'selected'        : 'Éléments sélectionnés',
\t\t\t'about'           : 'À propos',
\t\t\t'shortcuts'       : 'Raccourcis',
\t\t\t'help'            : 'Aide',
\t\t\t'webfm'           : 'Gestionnaire de fichier Web',
\t\t\t'ver'             : 'Version',
\t\t\t'protocolver'     : 'Version du protocole',
\t\t\t'homepage'        : 'Page du projet',
\t\t\t'docs'            : 'Documentation',
\t\t\t'github'          : 'Forkez-nous sur Github',
\t\t\t'twitter'         : 'Suivez nous sur twitter',
\t\t\t'facebook'        : 'Joignez-nous facebook',
\t\t\t'team'            : 'Équipe',
\t\t\t'chiefdev'        : 'Développeur en chef',
\t\t\t'developer'       : 'Développeur',
\t\t\t'contributor'     : 'Contributeur',
\t\t\t'maintainer'      : 'Mainteneur',
\t\t\t'translator'      : 'Traducteur',
\t\t\t'icons'           : 'Icônes',
\t\t\t'dontforget'      : 'et n\\'oubliez pas votre serviette',
\t\t\t'shortcutsof'     : 'Raccourcis désactivés',
\t\t\t'dropFiles'       : 'Déposez les fichiers ici',
\t\t\t'or'              : 'ou',
\t\t\t'selectForUpload' : 'Sélectionner les fichiers à envoyer',
\t\t\t'moveFiles'       : 'Déplacer les éléments',
\t\t\t'copyFiles'       : 'Copier les éléments',
\t\t\t'restoreFiles'    : 'Restaurer les éléments', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Retirer des favoris',
\t\t\t'aspectRatio'     : 'Ratio d’affichage',
\t\t\t'scale'           : 'Mise à l\\'échelle',
\t\t\t'width'           : 'Largeur',
\t\t\t'height'          : 'Hauteur',
\t\t\t'resize'          : 'Redimensionner',
\t\t\t'crop'            : 'Recadrer',
\t\t\t'rotate'          : 'Rotation',
\t\t\t'rotate-cw'       : 'Rotation de 90 degrés horaire',
\t\t\t'rotate-ccw'      : 'Rotation de 90 degrés antihoraire',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Monter un volume réseau', // added 18.04.2012
\t\t\t'protocol'            : 'Protocole', // added 18.04.2012
\t\t\t'host'                : 'Hôte', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'Utilisateur', // added 18.04.2012
\t\t\t'pass'                : 'Mot de passe', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Démonter \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Glissez-déposez depuis le navigateur de fichier', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Glissez-déposez les fichiers ici', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Encodage', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Encodage régional',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Destination: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Recherche par type MIME', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Propriétaire', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Groupe', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Autre', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Exécuter', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Permission', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Mode', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Le dossier est vide', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Le dossier est vide.\\\\ Glissez-déposez pour ajouter des éléments.', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Le dossier est vide.\\\\ Appuyez longuement pour ajouter des éléments.', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Qualité', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Synchronisation automatique',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Déplacer vers le haut',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Obtenir le lien d’URL', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Éléments sélectionnés (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID du dossier', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Permettre l\\'accès hors-ligne', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Pour se réauthentifier', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'En cours de chargement...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Ouvrir multiples fichiers', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Vous allez ouvrir \$1 fichiers. Êtes-vous sûr de vouloir les ouvrir dans le navigateur ?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Aucun résultat trouvé avec les paramètres de recherche.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Modification d\\'un fichier.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'Vous avez sélectionné \$1 éléments.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'Vous avez \$1 éléments dans le presse-papier.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Recherche incrémentale disponible uniquement pour la vue active.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Rétablir', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 complété', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Menu contextuel', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Tourner la page', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Volumes principaux', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Réinitialiser', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Couleur de fond', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Sélecteur de couleur', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : 'Grille 8px', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Actif', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Inactif', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Aucun résultat trouvé.\\\\AAppuyez sur [Entrée] pour développer la cible de recherche.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Aucun résultat trouvé pour la recherche par première lettre.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Label texte', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 mins restantes', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Réouvrir avec l\\'encodage sélectionné', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Sauvegarder avec l\\'encodage sélectionné', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Choisir le dossier', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Recherche par première lettre', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Présélections', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'Impossible de mettre autant d\\'éléments à la corbeille.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'Zone de texte', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Vider le dossier \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'Il n\\'y a pas d\\'élément dans le dossier \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Préférence', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Configuration de langue', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Initialisation des configurations sauvegardées dans ce navigateur', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Paramètres de la barre d\\'outils', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 caractères restants.',  // from v2.1.29 added 30.8.2017
\t\t\t'sum'             : 'Somme', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Taille de fichier brute', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Focus on the element of dialog with mouseover',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Sélectionner', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Action lors de la sélection d\\'un fichier', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Ouvrir avec le dernier éditeur utilisé', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Inverser la sélection', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Êtes-vous sûr de vouloir renommer les éléments sélectionnés \$1 en \$2 ?<br/>L\\'action est définitive !', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Renommer le Batch', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Nombre', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Ajouter un préfixe', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Ajouter un suffixe', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Modifier l\\'extention', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Paramètres des colonnes (List view)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Les changements seront immédiatement appliqués à l\\'archive.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Aucun changement ne sera appliqué tant que ce volume n\\'a pas été démonté.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'Le(s) volume(s) suivant(s) montés sur ce volume seront également démontés. Êtes-vous sûr de vouloir le démonter ?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Informations sur la sélection', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Algorithme de hachage de fichier', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Info Items (Selection Info Panel)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Appuyez à nouveau pour quitter.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Barre d\\'outils', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Espace de travail', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Dialogue', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Tout', // from v2.1.38 added 4.4.2018
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
\t\t\t'kindUnknown'     : 'Inconnu',
\t\t\t'kindRoot'        : 'Volume principal', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Dossier',
\t\t\t'kindSelects'     : 'Sélections', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Raccourci',
\t\t\t'kindAliasBroken' : 'Raccourci cassé',
\t\t\t// applications
\t\t\t'kindApp'         : 'Application',
\t\t\t'kindPostscript'  : 'Document Postscript',
\t\t\t'kindMsOffice'    : 'Document Microsoft Office',
\t\t\t'kindMsWord'      : 'Document Microsoft Word',
\t\t\t'kindMsExcel'     : 'Document Microsoft Excel',
\t\t\t'kindMsPP'        : 'Présentation Microsoft PowerPoint',
\t\t\t'kindOO'          : 'Document OpenOffice',
\t\t\t'kindAppFlash'    : 'Application Flash',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Fichier BitTorrent',
\t\t\t'kind7z'          : 'Archive 7z',
\t\t\t'kindTAR'         : 'Archive TAR',
\t\t\t'kindGZIP'        : 'Archive GZIP',
\t\t\t'kindBZIP'        : 'Archive BZIP',
\t\t\t'kindXZ'          : 'Archive XZ',
\t\t\t'kindZIP'         : 'Archive ZIP',
\t\t\t'kindRAR'         : 'Archive RAR',
\t\t\t'kindJAR'         : 'Fichier Java JAR',
\t\t\t'kindTTF'         : 'Police True Type',
\t\t\t'kindOTF'         : 'Police Open Type',
\t\t\t'kindRPM'         : 'Package RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Document Text',
\t\t\t'kindTextPlain'   : 'Texte non formaté',
\t\t\t'kindPHP'         : 'Source PHP',
\t\t\t'kindCSS'         : 'Feuille de style en cascade',
\t\t\t'kindHTML'        : 'Document HTML',
\t\t\t'kindJS'          : 'Source JavaScript',
\t\t\t'kindRTF'         : 'Format de texte enrichi (Rich Text Format)',
\t\t\t'kindC'           : 'Source C',
\t\t\t'kindCHeader'     : 'Source header C',
\t\t\t'kindCPP'         : 'Source C++',
\t\t\t'kindCPPHeader'   : 'Source header C++',
\t\t\t'kindShell'       : 'Shell script Unix',
\t\t\t'kindPython'      : 'Source Python',
\t\t\t'kindJava'        : 'Source Java',
\t\t\t'kindRuby'        : 'Source Ruby',
\t\t\t'kindPerl'        : 'Script Perl',
\t\t\t'kindSQL'         : 'Source SQL',
\t\t\t'kindXML'         : 'Document XML',
\t\t\t'kindAWK'         : 'Source AWK',
\t\t\t'kindCSV'         : 'CSV',
\t\t\t'kindDOCBOOK'     : 'Document Docbook XML',
\t\t\t'kindMarkdown'    : 'Markdown text', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Image',
\t\t\t'kindBMP'         : 'Image BMP',
\t\t\t'kindJPEG'        : 'Image JPEG',
\t\t\t'kindGIF'         : 'Image GIF',
\t\t\t'kindPNG'         : 'Image PNG',
\t\t\t'kindTIFF'        : 'Image TIFF',
\t\t\t'kindTGA'         : 'Image TGA',
\t\t\t'kindPSD'         : 'Image Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Image X bitmap',
\t\t\t'kindPXM'         : 'Image Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Son',
\t\t\t'kindAudioMPEG'   : 'Son MPEG',
\t\t\t'kindAudioMPEG4'  : 'Son MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Son MIDI',
\t\t\t'kindAudioOGG'    : 'Son Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Son WAV',
\t\t\t'AudioPlaylist'   : 'Liste de lecture audio',
\t\t\t'kindVideo'       : 'Vidéo',
\t\t\t'kindVideoDV'     : 'Vidéo DV',
\t\t\t'kindVideoMPEG'   : 'Vidéo MPEG',
\t\t\t'kindVideoMPEG4'  : 'Vidéo MPEG-4',
\t\t\t'kindVideoAVI'    : 'Vidéo AVI',
\t\t\t'kindVideoMOV'    : 'Vidéo Quick Time',
\t\t\t'kindVideoWM'     : 'Vidéo Windows Media',
\t\t\t'kindVideoFlash'  : 'Vidéo Flash',
\t\t\t'kindVideoMKV'    : 'Vidéo Matroska',
\t\t\t'kindVideoOGG'    : 'Vidéo Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.fr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.fr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.fr.js");
    }
}
