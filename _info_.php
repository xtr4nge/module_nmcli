<?
$mod_name="nmcli";
$mod_version="1.0";
$mod_path="/usr/share/FruityWifi/www/modules/nmcli";
$mod_logs="/usr/share/FruityWifi/logs/nmcli.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_panel="";
$mod_isup="/usr/share/FruityWifi/bin/danger \"/usr/share/FruityWifi/www/modules/nmcli/includes/nmcli -n d | grep -iEe '^$iface_supplicant.+ connected'\"";
$mod_alias="nmcli";
# EXEC
$bin_danger = "/usr/share/FruityWifi/bin/danger";
$bin_ifconfig = "/sbin/ifconfig";
$bin_iwlist = "/sbin/iwlist";
$bin_sh = "/bin/sh";
$bin_echo = "/bin/echo";
$bin_grep = "/usr/bin/ngrep";
$bin_killall = "/usr/bin/killall";
$bin_cp = "/bin/cp";
$bin_chmod = "/bin/chmod";
$bin_sed = "/bin/sed";
$bin_rm = "/bin/rm";
$bin_route = "/sbin/route";
$bin_perl = "/usr/bin/perl";
?>
