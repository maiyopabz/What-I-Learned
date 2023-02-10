#Apache Hardening Overview

Web server hardening involves: Modifying the configuration file to eliminate server misconfigurations. Managing SSL/TSL certificates and its settings to ensure secure communication between the client and server. Restricting access permissions to the web server installation directory.


First we need to find out if the site is vulnerable 

Use to check:
```ts
curl -k  -X TRACE http://35.160.126.188/


output:

TRACE / HTTP/1.1
Host: 35.160.126.188
User-Agent: curl/7.87.0
Accept: */*

//this means its vulnerable and we need to fix it. AND DISABLE IT
//To fix it we need to find where the http or apache configuration is and open is
//we need to modify it to trace enable

```

```ts
vi /etc/httpd/conf/httpd.conf
```