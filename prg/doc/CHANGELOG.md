# Changelog dflinuxe10


**25/11/2019**

### ISOs 64b et 32b 

 - dflinuxe10-10.2.0-r8-amd64.iso (1,9 Go)
 - dflinuxe10-10.2.0-r8-i386.iso (2,0 Go)


**24/11/2019**

### Modifications Ajouts Suppresions Corrections sur les fichiers d'origine
 * /auto
	* config : dflinux remplacé par dflinuxe10e
 * /config
	* hooks/normal/hide-desktop-launcher.chroot : MODIFIé pour afficher Paquets dans le menu
	* hooks/normal/libdvdcss2.chroot : MODIFIé paquet non fiable
	
 * /includes.binary/
   * /boot/grub/grub.cfg	-> Debian 10 
   * /boot/grub/live-theme theme.txt	-> Debian 10	
   * /isolinux	
     * /live.cfg : AJOUTé timezone=Europe/Paris utc=yes
     * /splash-legacy.png : MODIFIé par ajout de "Modifié par BozoSoft"
 * /includes.chroot
	* / etc
	  * /apt/apt.conf.d/10periodic : SUPPRIMé
	  * /lightdm/lightdm.conf/lightdm-gtk-greeter.conf : MODIFIé theme-name + icon-theme-name
    * /skel 
      * /Bureau/dflmanuel.desktop : SUPPRIMé
      * /Bureau/handymenu.desktop : SUPPRIMé
      * /Bureau/lescahiers.desktop : SUPPRIMé
      * /Bureau/welcome.desktop : MODIFIé Bienvenue
      * /.config
        * /autostart/redshift-gtk.desktop : AJOUTé activer demarrage auto
        * /Thunar
			* /uca.xml : AJOUTé pour Recherche
			* /accels.scm : AJOUTé pour Recherche
         * /xfce4			
			* /panel/launcher-1/14724343385.desktop : SUPPRIMé Les cahiers du débutant (Obsolète)
			* /panel/launcher-1/14776989021.desktop : SUPPRIMé Manuel utilisateur (Obsolète)
			* /panel/whiskermenu-14.rc : MODIFIé pour menu
			* /xfconf/xfce-perchannel-xml
			  * /thunar.xml : MODIFIé  Gest Fichiers
			  * /xfce4-panel.xml : MODIFIé  tableau de bord
			  * /xfwm4.xml : MODIFIé  [Style fenetre]
			  * /xsettings.xml : MODIFIé  [Apparence]
       * /Documents/dflinux-manuel-utilisateur.pdf : SUPPRIMé
       * /Documents/les_cahiers_du_debutant.pdf : SUPPRIMé
       * /.mozilla : SUPPRIMé et remplacer par mon .mozilla (SUPPRIMé https-everywhere + ublock-origin ET remplacé par modules)
	* /usr
	     * /share/applications     
	        * /rg.gnome.Packages.desktop : AJOUTé pour Paquets
			* /FBReader.desktop : AJOUTé E-book reader/Lecteur FBReader
			* /hardinfo.desktop : AJOUTé Informations et Benchmarks du Système
			* /io.github.Hexchat.desktop :  AJOUTé HexChat/HexChat Client IRC
			* / mtpaint.desktop : AJOUTé mtPaint graphic editor
			* /org.gnome.baobab.desktop :  AJOUTé Analyseur d’utilisation des disques
			* /rg.gnome.FileRoller.desktop : AJOUTé Gestionnaire d’archives
			* /software-properties-drivers.desktop : AJOUTé Additional Drivers/Pilotes supplémentaire
			* /org.gnome.DejaDup.desktop  : SUPPRIMé  
       * /dflinux/welcome.sh : MODIFIé
       * /pixmaps/avatar-tux96.png : AJOUTé 
       * /themes/Arc-DFL : SUPPRIMé
       * /lightdm/lightdm.conf.d/01_debian.conf : AJOUTé et modifié pour numlockx
 * /includes.installer 
    * /usr/share/graphics/logo_debian.png : MODIFIé par ajout de "Modifié par BozoSoft"      
 * /package-lists/live.list.chroot : ## dflinux packages ##  _MODIFIé_ 
 * /doc : SUPPRIMé tous les fichiers HOWTO-build-DFLinux.* odt pdf zip md
 * /DFbuild.sh : debian-facile et DFLinux remplacé par dflinuxe10
 * /ext : *.deb SUPPRIMés (Obsolètes)     
 
#### Pour information détails sur fichiers /package-lists/live.list.chroot
 * #desktop  repris les paquets de debian 9
 * #plugins repris les paquets de debian 9
 * #network 
	- Supprimé enigmail (depuis thunderbird 68.2.2-1)
	- Supprimé webext-https-everywhere webext-ublock-origin
	- Ajouté hexchat = Client IRC
 * #office : Ajouté fbreader evince = Lecteur FBReader et Lecteur PDF
 * #graphics : Ajouté imagemagick
 * #tools
   - Supprimé deja-dup Remplacé par par grsync
   - Ajouté htop 
 * #misc : Ajouté tree
 * #theme :  Supprimé numix-gtk-theme numix-icon-theme numix-icon-theme-circle obsidian-icon-theme   
 * #contrib : Supprimé libdvd-pkg et aussi sur config/hooks/normal/libdvdcss2.chroot
 * #Mes ajouts
   - Ajouté clementine cheese orage bleachbit geany file-roller
   - Ajouté redshift-gtk redshift gthumb mtpaint numlockx
 * #JEUX : Ajouté aisleriot
 
 
**14/11/2019**

### Les modifications de départ

 * Test de construction ISO sur machine Debian 9 avec installation de live-build_20190311_all.deb  et live-tools_20171207_all.deb de buster
 * Suppresion des fichiers du dossier /doc sauf 2017_05_19-session-apprentissage.log
 * CHANGELOG de la version dfiso-buster-master renommé en CHANGELOG-OLD 

**13/11/2019**
 
 * Récupération dfiso-buster-master du 29 Octobre 2019 (43e62b52) sur https://framagit.org/dflinux/dfiso-buster
