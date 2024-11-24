# cronjob_php_w_parameter
how to run php with parameters in cronjob

/usr/bin/php -q -d register_argc_argv=1 /home/.../test.php start=0 sd=0 &> /home/.../cron.log 2>&1

|parameter  | Description |
| ------------- | ------------- |
|/usr/bin/php | location php file |
|-q | quite |
|-d | read parameter |
|register_argc_argv=1 |  |
|/home/../postingperday.php| process file php |
| start=0 | parameter start|
| sd =0 | parameter sd |
|&> /home/../cron.log |  |
|2>&1 | |
