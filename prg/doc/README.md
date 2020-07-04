

### Créer sa propre image ISO Debian 11 XFCE

 - Pour information télécharger et lisez les HOWTO-buildxxxx de https://debian-facile.org/git/ProjetsDF/dfiso-buster/src/branch/master/doc ou https://arpinux.org/ 

 * Installer les paquets live-build, live-tool, tree et live-manual (si besoin)
 * Installer la version disponible dans les dépôts si vous construisez une ISO de la même version.
   - Si par exemple vous êtes actuellement sous Debian 10 et que vous voulez contruite une ISO de Debian 11
récupérer les fichiers depuis https://packages.debian.org/bullseye/live-build et https://packages.debian.org/bullseye/live-tools de la version future
 * Donc installer les paquets
 * Créer par exemple un dossier /home/user/tmp/dfiso11
 * Récupérer les sources depuis ce dépôt et décompressez le fichier dans votre dossier /dfiso afin d'obtenir la bonne arborescence 

    - dfiso/auto
    - dfiso/config
    - dfiso/doc
    - dfiso/DFbuild.sh
    
#### NOTE sur bug live-build https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=961257
- en cours de la construction de l'ISO un message indique
- cp: impossible d'évaluer '/usr/share/live/build/data/debian-cd/bullseye/amd64_netinst_udeb_include': Aucun fichier ou dossier de ce type
- il n'existe pas de dossier /bullseye dans /usr/share/live/build/data/debian-cd/
- il faut donc alors créer ce lien symbolique pour palier à cette erreur :
- en terminal lancer
 - cd /usr/share/live/build/data/debian-cd/
 - puis  sudo ln -s squeeze ./bullseye
 - voir [bullseye](ls_bulleyes.png)


#### le fichier DFbuild.sh 
- permet de nettoyer les dossiers des sources sur sa machine par ./DFbuild.sh clean
- permet de construire un ISO 32 bits ou 64 bits par la commande ./DFbuild.sh 32 ou ./DFbuild.sh 64 

#### Donc Ouvrez un terminal et lancer la commande pour construire l'ISO
- Une fois le process lancé vous pouvez suivre le déroulement des étapes. A la fin de la construction vous pourrez lire [20XX-XX-XX 16:57:37] lb clean noauto 
P: Cleaning chroot
Opération achevée en XX minutes
- Selon votre machine et la qualité de votre réseau Internet, cela peut prendre entre un certain temps.

- De plus le système génère un fichier des opérations de construction exécutés (dflinuxexx.log)
- l'arborescence à la fin du traitement ressemblera à 
    - dfiso/.build
    - dfiso/auto
    - dfiso/cache
    - dfiso/config
    - dfiso/dfl-amd64 ->dossier si ISO 64 bits
    - dfiso/dfl-i386  ->dossier si  ISO 32 bits
    - dfiso/doc
    - dfiso/ext
    - dfiso/DFbuild.sh

##### A la fin du processus les données de l'ISO sont placées dans le dossier dfl-i386 ou dfl-amd64 (ISO 32 bits ou 64 bits)
- avec les fichiers suivants
    - dflinuxexxxxx.md5 : l'empreinte numérique du fichier *.iso
    - dflinuxexxxxx.log : les informations de construction
    - dflinuxexxxxx.iso : le fichier *.iso distribution construite
    - dflinuxexxxxx.pkgs : les noms des paquets de la distribution construite 

##### Nota : si vous construisez plusieurs fois l'ISO en 64 Bits inutile de vider le cache vous allez gagner de nombreuses minutes sur le processus

##### Il ne vous reste plus qu’a tester votre distribution dérivée Debian personnalisée et y apporter d'eventuel correctifs pour reconstruire une version plus finalisée.

Si vous désirez vous tenir au courant et suivre le projet DFLinux conslter le forum  https://debian-facile.org/forum.php et/ou le Wiki https://debian-facile.org/projets:iso-debian-facile

##### Crédits

 - Le site [officiel Debian](https://www.debian.org/ "Debian est un système d'exploitation libre pour votre ordinateur").
 - L'association [Framasoft](https://framasoft.org/ "Changer le monde,un octet à la fois") qui héberge les sources de ces projets 
 - [arpinux](https://arpinux.org "avec une cave bien garnie") : pour la première DFiso et les cahiers du débutant 
 - merci aussi pour la DFiso-Buster à : [Caribou22]( (https://www.facebook.com/quentin.parrain.linux/), [otyugh](https://www.arzinfo.pw/) , [Debian Alain](https://framagit.org/debian-alain)
 - le site [Debian-Facile](https://debian-facile.org "un site menant cette entraide d'une manière toujours plus efficace, joyeuse et réactive !")



