#Intro to Images and Backups

- > Now that I'm well on my way to deploying and configuring instances, Ive likely noticed that the initial setup can be a bit of work.

- > Despite this, it's nothing compared to the days, months or even years I may spend on the applications I build on my instances. As I go through the various stages of the development lifecycle, my applications, databases and cloud architecture will grow in size and complexity. For this reason, the importance of backing up my instances discs cannot be understated. This is especially true if I do most of my development work directly in the cloud environment. There's a few options when it comes to backups. Backing up an instance is achieved through the utilization of disk images.

- > An image is a point in time. Snapshot of an instance is primary storage disks. There are three ways in which images can be generated. This includes the following. You can create an image manually through the instance manager. You can create an image manually through the Linux backup service, or you can enable automated backups through the Linux backup service.

Even though manually creating images through the instance manager is generally cheaper than the backup service, it has some limitations.

For example, the maximum size limit for a custom image created from an existing instance is only six gigabytes.
If this presents an issue, if you've utilized more than this amount of space on the instances primary disk, in this situation, image creation will fail.

Another point to consider is that the maximum allowable images within an account is set at 25.
The nodes backup service, on the other hand, does not have these restrictions and also comes with
several additional benefits.

For example: The service is fully managed, so you don't have to worry about manually creating images at various intervals.
The service does it all for you automatically. Creating manual images through the backup service bypasses the max image size restrictions. Image creation can be scheduled using custom settings based on your preferences.

The service is available in all L.A. regions. Backups are stored in the same data center as the instance, but on separate dedicated hardware. New instances can easily be deployed from saved images within the backups manager.
