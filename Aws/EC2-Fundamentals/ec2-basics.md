#What is EC2 ?

- > Ec2 = > Elastic Compute Cloud = > Infrastructure as a Service
  - > Well, EC2 is one of the most popular of AWS' offering. It is definitely used everywhere. The way to do `Infrastructure as a Services` on AWS.
- > It mainly consist in the capability of:
  - > Renting virtual machine(EC2)
  - > Storing data on virtual drives(EBS)
  - > Distributing load across machines (ELB)
  - > Scaling the services using an auto-scaling group (ASG)

#EC2 sizing & configuration options

- > Operating System (OS): Linux, Windows or Mac OS
- > How much computer power & core (CPU)
- > How much random-access memory (RAM)
- > HOW much storage space:
  - > Network-attached (EBS & EFS)
  - > hardware (EC2 Instance Store)
- > Network card: speed of the card, Public IP address
- > Firewall rules: security group
- > Boostrap script (configure at first launch): EC2 User Data

So we have lots and lots of options and as you'll see in the hands-on, even more options at other certification levels that you need to know in EC2 instances, but at a core of it what you need to remember is that you can choose pretty much how you want your visual machine to be and you can rent it from AWS. And that is the power of the cloud.

#EC2 User Data

- > It is possible to bootstrap our instances using an EC2 User data script.
- > boostrapping means launching command when a machine starts
- > That script is only run once at the instance first start
- > EC2 user data is used to automate boot task such as:
  - > Installing updates
  - > Installing software
  - > Downloading common files from the internet
  - > Anything you can think of
- > The EC2 User Data Script runs with the root user

![Screenshot](https://github.com/maiyopabz/What-I-Learned/blob/main/Screenshots/ec2_instance_type_example.jpg)
