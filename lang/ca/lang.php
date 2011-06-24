<<<<<<< HEAD
<?php

/**
 * Catalan language for the "vector" DokuWiki template
 *
 * If your language is not/only partially translated or you found an error/typo,
 * have a look at the following files:
 * - "/lib/tpl/vector/lang/<your lang>/lang.php"
 * - "/lib/tpl/vector/lang/<your lang>/settings.php"
 * If they are not existing, copy and translate the English ones (hint: looking
 * at <http://[your lang].wikipedia.org> might be helpful). And don't forget to
 * mail the translation to us, SYN Systems <dokuwiki@dev.syn-systems.com>.
 * Thanks :-D.
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Albert Gasset Romo <albert.gasset@gmail.com>
 * @link http://www.dokuwiki.org/template:vector
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs, personal tools and special links
$lang["vector_article"] = "Pàgina";
$lang["vector_discussion"] = "Discussió";
$lang["vector_read"] = "Llegeix";
$lang["vector_edit"] = "Edita";
$lang["vector_create"] = "Crea";
$lang["vector_userpage"] = "Pàgina d'usuari";
$lang["vector_specialpage"] = "Pàgines especials";
$lang["vector_mytalk"] = "Discussió";
$lang["vector_exportodt"] = "Exporta a ODT";
$lang["vector_exportpdf"] = "Exporta a PDF";
$lang["vector_subscribens"] = "Subscriu als canvis de l'espai"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Cancel·la subscripció a l'espai";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "Llengües";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "Navegació";
$lang["vector_toolbox"] = "Eines";
$lang["vector_exportbox"] = "Exportació";
$lang["vector_qrcodebox"] = "Codi QR";
$lang["vector_inotherlanguages"] = "Llengües";
$lang["vector_printexport"] = "Exportació";
$lang["vector_personnaltools"] = "Eines personals";

//buttons
$lang["vector_btn_go"] = "Vés";
$lang["vector_btn_search"] = "Cerca";
$lang["vector_btn_search_title"] = "Cerca aquest text";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "Versió per a impressió";
$lang["vector_exportbxdef_downloadodt"] = "Baixa en format ODT";
$lang["vector_exportbxdef_downloadpdf"] = "Baixa en format PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "Què hi enllaça";
$lang["vector_toolbxdef_upload"] = "Gestor de fitxers";
$lang["vector_toolbxdef_siteindex"] = "Índex del lloc";
$lang["vector_toolboxdef_permanent"] = "Enllaç permanent";
$lang["vector_toolboxdef_cite"] = "Cita aquesta pàgina";

//qr code box
$lang["vector_qrcodebox_qrcode"] = "Codi QR";
$lang["vector_qrcodebox_genforcurrentpage"] = "generat per a la pàgina actual";
$lang["vector_qrcodebox_urlofcurrentpage"] = "Pàgina actual en codi QR (per accedir fàcilment des de mòbils)";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Detalls bibliogràfics per a";
$lang["vector_cite_pagename"] = "Nom de la pàgina";
$lang["vector_cite_author"] = "Autor";
$lang["vector_cite_publisher"] = "Editorial";
$lang["vector_cite_dateofrev"] = "Data d'aquesta revisió";
$lang["vector_cite_dateretrieved"] = "Data de recuperació";
$lang["vector_cite_permurl"] = "URL permanent";
$lang["vector_cite_pageversionid"] = "ID de la versió de la pàgina";
$lang["vector_cite_citationstyles"] = "Estils de cita per a";
$lang["vector_cite_checkstandards"] = "Si us plau, recordeu de comprar el vostre manual d'estil, guia de normes o directrius de l'instructor per a la sintaxi exacta per a les vostres necessitats.";
$lang["vector_cite_latexusepackagehint"] = "Si feu servir el paquet de LaTeX url (\usepackage{url} en algun lloc del preàmbul), que tendeix a donar un format més agradable a les adreces web, potser preferiu el següent";
$lang["vector_cite_retrieved"] = "Recuperat";
$lang["vector_cite_from"] = "de";
$lang["vector_cite_in"] = "A";
$lang["vector_cite_accessed"] = "Accecit";
$lang["vector_cite_cited"] = "Citat";
$lang["vector_cite_lastvisited"] = "Visitat";
$lang["vector_cite_availableat"] = "Disponible a";
$lang["vector_cite_discussionpages"] = "Pàgines de discussió de la DokuWiki";
$lang["vector_cite_markup"] = "Etiquetage";
$lang["vector_cite_result"] = "Resultat";
$lang["vector_cite_thisversion"] = "aquesta versió";

//other
$lang["vector_search"] = "Cerca";
$lang["vector_accessdenied"] = "Accés denegat";
$lang["vector_fillplaceholder"] = "Si us plau, ompliu aquest text variable";
$lang["vector_donate"] = "Fes una donació";
$lang["vector_mdtemplatefordw"] = "Plantilla vector per a DokuWiki";
$lang["vector_qrcodebtn"] = "Generador de codis QR";
$lang["vector_recentchanges"] = "Canvis recents";
=======
<?php

/**
 * English language for the "vector" DokuWiki template
 *
 * If your language is not/only partially translated or you found an error/typo,
 * have a look at the following files:
 * - "/lib/tpl/vector/lang/<your lang>/lang.php"
 * - "/lib/tpl/vector/lang/<your lang>/settings.php"
 * If they are not existing, copy and translate the English ones (hint: looking
 * at <http://[your lang].wikipedia.org> might be helpful). And don't forget to
 * mail the translation to me,
 * Andreas Haerter <development@andreas-haerter.com>. Thanks :-D.
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <development@andreas-haerter.com>
 * @link http://andreas-haerter.com/projects/dokuwiki-template-vector
 * @link http://www.dokuwiki.org/template:vector
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//override default dokuwiki links
$lang['btn_revs'] = 'Mostra l\'historial';

//tabs, personal tools and special links
$lang["vector_article"] = "Pàgina";
$lang["vector_discussion"] = "Revisió";
$lang["vector_read"] = "Mostra";
$lang["vector_edit"] = "Modifica";
$lang["vector_create"] = "Crea";
$lang["vector_userpage"] = "Pàgina de l'usuari";
$lang["vector_specialpage"] = "Pàgina especial";
$lang["vector_mytalk"] = "La meva pàgina";
$lang["vector_exportodt"] = "Exporta a ODT";
$lang["vector_exportpdf"] = "Exporta a PDF";
$lang["vector_subscribens"] = "Subscribe NS Changes"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "Unsubscribe NS Changes";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "Idiomes";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "Navegació";
$lang["vector_toolbox"] = "Caixa d'eines";
$lang["vector_exportbox"] = "Imprimir/Exportar";
$lang["vector_inotherlanguages"] = "Idiomes";
$lang["vector_printexport"] = "Imprimir/Exportar";
$lang["vector_personnaltools"] = "Eines personals";

//buttons
$lang["vector_btn_go"] = "Anar";
$lang["vector_btn_search"] = "Cercar";
$lang["vector_btn_search_title"] = "Cerca en aquesta pàgina";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "Versió imprimible";
$lang["vector_exportbxdef_downloadodt"] = "Download as ODT";
$lang["vector_exportbxdef_downloadpdf"] = "Download as PDF";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "Mostra els enllaços";
$lang["vector_toolbxdef_upload"] = "Penja un fitxer/imatge";
$lang["vector_toolbxdef_siteindex"] = "Índex";
$lang["vector_toolboxdef_permanent"] = "Enllaç permanent";
$lang["vector_toolboxdef_cite"] = "Cita aquesta pàgina";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "Bibliographic details for";
$lang["vector_cite_pagename"] = "Nom de la pàgina";
$lang["vector_cite_author"] = "Autoria";
$lang["vector_cite_publisher"] = "Publisher";
$lang["vector_cite_dateofrev"] = "Data de la revisió";
$lang["vector_cite_dateretrieved"] = "Date retrieved";
$lang["vector_cite_permurl"] = "URL permanent";
$lang["vector_cite_pageversionid"] = "Versió ID de la pàgina";
$lang["vector_cite_citationstyles"] = "Citation styles for";
$lang["vector_cite_checkstandards"] = "Recorda consultar el manual d\'estil, guia o les indicacions del teu editor per qualsevol dubte o qüestió sobre la sintaxi i redacció dels continguts.";
$lang["vector_cite_latexusepackagehint"] = "When using the LaTeX package url (\usepackage{url} somewhere in the preamble), which tends to give much more nicely formatted web addresses, the following may be preferred";
$lang["vector_cite_retrieved"] = "Retrieved";
$lang["vector_cite_from"] = "De";
$lang["vector_cite_in"] = "In";
$lang["vector_cite_accessed"] = "Accessed";
$lang["vector_cite_cited"] = "Cited";
$lang["vector_cite_lastvisited"] = "Últim visita";
$lang["vector_cite_availableat"] = "Disponible a";
$lang["vector_cite_discussionpages"] = "Pàgines de discussió";
$lang["vector_cite_markup"] = "Marques";
$lang["vector_cite_result"] = "Resultat";
$lang["vector_cite_thisversion"] = "Aquesta versió";

//other
$lang["vector_search"] = "Cerca";
$lang["vector_accessdenied"] = "Accés denegat";
$lang["vector_fillplaceholder"] = "Please fill this placeholder";
$lang["vector_donate"] = "Donació";
$lang["vector_mdtemplatefordw"] = "Adaptació del \"template vector\" per a la DokuWiki de l'IOC";
$lang["vector_recentchanges"] = "Canvis recents";

>>>>>>> Afegit idioma 'ca' i logo
