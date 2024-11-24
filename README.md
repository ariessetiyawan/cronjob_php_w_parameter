# cronjob_php_w_parameter
how to run php with parameters in cronjob

/usr/bin/php -q -d register_argc_argv=1 /home/manb5224/public_html/sw-admin/sw-mod/absensi/postingperday.php start=0 sd=0 &> /home/manb5224/public_html/sw-admin/sw-mod/cron.log 2>&1

parameter  | Description |
/usr/bin/php => |  |
-q |  |
-d | |
register_argc_argv=1 |  |
/home/../postingperday.php start=0 sd=0 |  |
&> /home/../cron.log |  |
2>&1 | |
