#!/bin/bash

echo "installing network-manager Dependencies..."
# DEP NETWORK-MANAGER
apt-get -y install sudo
apt-get -y install gcc-4.7
apt-get -y install g++-4.7
update-alternatives --install /usr/bin/gcc gcc /usr/bin/gcc-4.7 40 --slave /usr/bin/g++ g++ /usr/bin/g++-4.7

apt-get -y install network-manager
apt-get -y install wireless-tools
apt-get -y install libiw-dev libdbus-glib-1-dev libpackagekit-glib2-14 libpackagekit-glib2-dev libgudev-1.0-dev
apt-get -y install uuid-dev uuid nss
apt-get -y install libnss-db libnss3-dev
apt-get -y install ppp-dev intltool
apt-get -y install libgudev-1.0-dev libnl-3-dev libnl-route-3-dev libnl-genl-3-dev
apt-get -y install uuid-dev

echo "installing network-manager..."
wget http://ftp.gnome.org/pub/GNOME/sources/NetworkManager/0.9/NetworkManager-0.9.8.8.tar.xz
tar xvf NetworkManager-0.9.8.8.tar.xz
mv NetworkManager-0.9.8.8 NetworkManager
cd NetworkManager

./configure
make
#make install

###cp src/NetworkManager ../
###cp cli/src/nmcli ../

#cp hostapd ../../
#cp hostapd_cli ../../

echo "..DONE.."
exit
