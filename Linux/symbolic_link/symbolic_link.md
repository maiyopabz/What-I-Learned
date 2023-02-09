#Symybolic link Overview

#Moving /var/www/html to data

```ts

//Moving Mysql data and webroot inside/data and create
//a symbolic link in original location

//make sure you are root

linux command:

1. mv -i /var/www/html/ /data/
//this is how to move

2. ls -al /data/html
//this how to check the data.
//you shoould see some data similar to

drwxrwsr-x  3 ec2-user apache   43 Feb  7 22:51 .
drwxr-xr-x  3 root     root     18 Feb  8 16:41 ..
-rw-rw-r--  1 ec2-user apache   20 Feb  7 22:44 phpinfo.php
drwxrwsr-x 13 ec2-user apache 4096 Feb  7 22:51

3. ln -s /data/html/ /var/www/html
//this is how you can create a symbolic link
 - > ls -al /var/www
//this is to check if we got the symbolic link created
//you shoould see html -> to /data/html/
//similar link this.

total 0
drwxrwsr-x  3 ec2-user apache  33 Feb  8 16:42 .
drwxr-xr-x 20 root     root   280 Feb  7 22:40 ..
drwxrwsr-x  2 ec2-user apache   6 Jun 30  2022 cgi-bin
lrwxrwxrwx  1 root     apache  11 Feb  8 16:42 html -> /data/html/


```

#Moving /var.lib/mysql/ /data/

```ts

1. ls -al /var/lib/mysql
//this how to check the data.

2. mv -i /var/lib/mysql/ /data/
//this is how to move

3. ls -al /var/lib/mysql
//this how to check the data.

4. ls -s /data/mysql/ /var/lib/mysql
```
