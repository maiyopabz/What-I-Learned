# EC2 Instance Store

- > EBS volumes are network drives with good but "limited" performance.

- > If you need a high-performance hardware disk, use EC2 Instance Store

- > Better I/O performance
- > EC2 Instance Store lose their storage if they're stopped (ephemeral)
- > Good for buffer / cache / scratch data / temporary content
- > Risk of data loss if hardware fails
- > Backups and Replication are your responsibility

<hr>

![Screenshot](https://github.com/maiyopabz/What-I-Learned/blob/main/Screenshots/local_ec2_instance_store.jpg)

The Instance size of `I3 dot` something, there is an Instance Store attached to these kinds of instances and if you look at the Read IOPS and the Write IOPS which correspond to how many `I/O operations` we can do per second. Then you can see at some of these random Read `IOPS` and `Write IOPS` can reach `3.3 million` or `1.4 million`, for the most performant one. And to put this in comparison with an `EBS volume` of type `BP2` for example, you can reach `thirty two thousand IOPS`. So this is a lot more. But again, it's just to illustrate my point from an exam perspective anytime you see very high performance hardware attached volume for your `EC2 Instances`, think `local EC2 Instance Store`.
