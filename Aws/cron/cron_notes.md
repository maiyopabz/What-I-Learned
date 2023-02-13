#CRON OVERVIEW

```ts
1. crontab -l
// this check your cron tab if you have any cron schedule task.


ls -s
//check

ls -l
//check


2. crontab -e
//set up cron and decide which editor to use.

3. breif summar of what a cron job looks like.
- >    * * * * * command
// this is a legend
// m h dom mon dow  command

//first * means "minutes"
//seconds * means "hour"
//third * means "day of month"
//fourth * means "actual month"
//fifth * means "day of the week"


4. change nano editor
    EDITOR=nano crontab -e

5. How to drop out of root
    ctrl D
```

```ts
Other commands

@daily  - this would run daily
@monthly - this would run monthly
@reboot - this everytime the server is reboot this would execute this command


```

How exactly do you tell the crontab command, that you want to edit the crontab for a different user.

```ts
- > crontab -u root e
//this doesnt give you permission
// use sudo
- > sudo crontab -u root -e


```

#How to fireup cron

```ts
* * * * * php /usr/bin/php  /data/html/systemadmin.php "password inserted"
```

#how to purge files thats older than 6 days

```ts
//commands

- >  * * * * * /usr/bin/find /var/www/html/systemadmin.php/ -name "*.conf" -mtime +6 -exec rm -type f {} \;

Using the `find` command execute another command on each file.

we need to use this in order to figure out what files are older than a certain number of days and then use the the
`rm` command to delete the files.

- > /var/log/test/
//this is where the files are located

- > -type f
//stands for files

- > -name '*.log'
//limiting all dot log files.

- > -mtime +100
//how many days the files older will be listed.

- > -exec
//executes the commands

- > {} \;
//closes the command
```

```ts
//command

find /var/log/test/ -type f -name '*.log' -mtime +100 -exec rm {} \;

create a nano file
 - > nano clean.sh


 - > chmod +x clean.sh
 //this is how you make file executable
```

Using Find command

```php
    find /var/log/test/ -type f -name '*.log'


```

#check if clean.sh is working

-  > ./clean.sh
   > cp/var/log/\_.log /var/log/test/
   > touch -a -m -t 202001010909.09 /var/log/test/\*.log

#firing cron on a specific time.

``php
0 0 \* \* 0-6 php /usr/bin/php /data/html/purge.php bv0EafB2eM8YCoFTzvsbW2q6v2xDKK7ySuLnelCHFKcqNdomBs

```

```
