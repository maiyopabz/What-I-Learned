#Amazon EFS - Elastic File System

- > Use cases: content management, web serving, data sharing, Wordpress
- > Uses NFSv4.1 protocol
- > Uses security group to control access to EFS
- > Compatible with Linux based AMI (not Windows)
- > Encryption at rest using KMS
- > POSIX file system (~Linux) that has a standard file API
- > File system scale automatically, pay-per-use, no capacity planning.

#EFS - Performance & Storage Classes

- > EFS Scale
  - > 1000s of concurrent NFS client, 10 GB+ /s throughput
  - > Grow to Petabyte-scale network file system, automatically
- > Performance mode (set at EFS creation time)
  - > General purpose (default): latency-sensitive use cases (web server, CMS, etc...)
  - > Max I/O -higher latency, throughput, highly parrallel (big data, media processing)
- > Throughput mode
  - > Bursting (| TB = 50MiB/s + burst of up to 100MiB/s)
  - > Provisioned: set your throughput regardless of storage size, ex: | GiB/s for | TB storage

<hr>

![Screenshot](https://github.com/maiyopabz/What-I-Learned/blob/main/Screenshots/amazon_efs.jpg)
