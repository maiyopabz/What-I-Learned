#AMI Overview

- > AMI = Amazon Machine Image
- > AMI are a customization of an EC2 instance
  - > You add your own software, configuration, operating system, monitoring.
  - > Faster boot/ configuration time because all your software is pre-packaged.
- > AMI are built for a specific region (and can be copied across regions)
- > You can launch EC2 instance from:
  - > A public AMI: AWS provided
  - > Your own AMI: you make and maintain them yourself
  - > An AWS Marketplace AMI: an AMI someone else made (and pontentially sells)

#AMI Process (from an EC2 instance)

- > Start an EC2 instance and customize it
- > Stop the instance(for data integrity)
- > Build an AMI - this will also create EBS snapshots
- > Launch instances from other AMIs

- > ![Screenshot](https://github.com/maiyopabz/What-I-Learned/blob/main/Screenshots/ami_process.jpg)

So we have US-EAST-1A, and we can create the same instance as US-EAST-1B, so the process is we launch the instance in US-EAST-1A, we're going to customize it then we're going to create an AMI from it this will be our custom AMI. And then in US-EAST-1B we will be able to launch from that AMI and we'll effectively create a copy of our EC2 instance.
