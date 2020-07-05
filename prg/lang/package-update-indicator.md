
#### Suite bug sur le paquet Debian 10 Buster [ package-update-indicator](https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=946634 "package-update-indicator is compiled with the wrong prefix") (daté 12 Dec 2019).
 *That results in a compilation with the PACKAGE_LOCALE_DIR macro set to "/usr/local/share/locale" and package-update-indicator looking in the wrong directory for translation data at runtime*

 - les fichiers de toutes les langue devraient se trouver dans :
   * /usr/share/locale/fr/LC_MESSAGES/
 - mais le programme les cherchent dans :
   * /usr/local/share/locale/fr/LC_MESSAGES/
   
####  Le bug 946634 a été fermé 20/02/2020
 * Pour la version Debian 11 le paquet a donc été corrigé.
 * les traductions pointent bien maintenant vers config/includes.chroot/usr/share/locale/fr/LC_MESSAGES/


##### Pour utiliser la version FR (en attendant la correction ... ), voici ma tradution Fr [package-update-indicator.mo](https://github.com/Bozosoft/demogit/blob/master/prg/lang/package-update-indicator.mo "fichier de langue : package-update-indicator.mo - Cliquez sur le bouton Download pour le télécharger") à metre dans le bon dossier /usr/local/share/locale/fr/LC_MESSAGES/

  * Pour information le fichier [package-update-indicator.po](https://github.com/Bozosoft/demogit/blob/master/prg/lang/package-update-indicator.po "fichier de langue : package-update-indicator.po - base de traduction") est le fichier envoyé au développeur du [project package-update-indicator](https://hg.guido-berhoerster.org/projects/package-update-indicator/ "logs du projet").

 * [Me contacter pour erreurs ou corrections](http://jc.etiemble.free.fr/ "Site Web perso")
