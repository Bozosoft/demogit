
#### Suite bug sur le paquet Debian 10 Buster [ package-update-indicator](https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=946634 "package-update-indicator is compiled with the wrong prefix") (daté 12 Dec 2019).
 *That results in a compilation with the PACKAGE_LOCALE_DIR macro set to "/usr/local/share/locale" and package-update-indicator looking in the wrong directory for translation data at runtime*

 - les fichiers de toutes les langue devraient se trouver dans :
   * /usr/share/locale/fr/LC_MESSAGES/
 - mais le programme les cherchent dans :
   * /usr/local/share/locale/fr/LC_MESSAGES/
   
#### Le bug 946634 a été fermé 20/02/2020
 * Pour la version Debian 11 le paquet package-update-indicator a donc été corrigé pour le lien des langues. [ Closes: #94663](https://salsa.debian.org/pkgutopia-team/package-update-indicator/-/commit/ed0dc539f4fd8867b235f6f2bf150d5d61f9001a "Run make explicitly to account for hand-made Makefile vars (Closes: #946634)") 
 * les traductions pointent bien maintenant vers /usr/share/locale/fr/LC_MESSAGES/
 * Mais comme la tradution FR n'est pas incluse dans la paquet package-update-indicator, 
 * Il faut copier le fichier package-update-indicator.mo dans le dossier /usr/share/locale/fr/LC_MESSAGES/.


##### Pour utiliser la version FR (en attendant la correction ... ), voici ma traduction Fr [package-update-indicator.mo](https://github.com/Bozosoft/demogit/blob/master/prg/lang/package-update-indicator.mo "fichier de langue : package-update-indicator.mo - Cliquez sur le bouton Download pour le télécharger") à mettre dans le bon dossier 
 * pour la version Debian 10 dans le dossier /usr/local/share/locale/fr/LC_MESSAGES/
   * Comme ces dossiers /locale, /fr et /LC_MESSAGES n'exsitent pas, il faut donc les créer avant de copier le fichier package-update-indicator.mo
 * pour la version Debian 11 dans le dossier /usr/share/locale/fr/LC_MESSAGES/

##### Fichier de traduction
  Pour information le fichier [package-update-indicator.po](https://github.com/Bozosoft/demogit/blob/master/prg/lang/package-update-indicator.po "fichier de langue : package-update-indicator.po - base de traduction") est le fichier envoyé au développeur du [project package-update-indicator](https://hg.guido-berhoerster.org/projects/package-update-indicator/ "logs du projet").


##### Contact
 [Me contacter pour erreurs ou corrections](http://jc.etiemble.free.fr/ "Site Web perso")
