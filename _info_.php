<?
$mod_name="nmcli";
$mod_version="1.1";
$mod_path="/usr/share/FruityWifi/www/modules/nmcli";
$mod_logs="/usr/share/FruityWifi/logs/$mod_name.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_panel="";
$mod_type="service";
$mod_alias="nmcli";
$supplicant_ssid="";
$supplicant_psk="";
$ss_mode = "mode_supplicant";

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
$bin_sleep = "/bin/sleep";
$bin_nmcli = "/usr/share/FruityWifi/www/modules/nmcli/includes/NetworkManager/cli/src/nmcli";

# ISUP
$mod_isup="$bin_danger \"$bin_nmcli -n d | grep -iEe '^$iface_supplicant.+ connected'\"";
?>
