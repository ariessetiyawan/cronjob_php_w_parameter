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

### command in terminal of cpanel
![fixN1uCV0W](https://github.com/user-attachments/assets/129e315e-6cb5-4db3-89b9-0172144c6cec)

### result in file cron.log
![MmNX23kBX3](https://github.com/user-attachments/assets/8e12beb4-3609-47c5-bb85-d078801cfb6a)
