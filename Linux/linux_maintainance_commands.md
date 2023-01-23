#Linux/ Ubuntu maintainance commands.

Every so often, new security patches are developed and updated based on current security threats.

Check if there are any additional updates need to be run: `apt list --upgradable`
(This check inside the terminal if there is any available updates)

The `Apt` command is a very commonly used command that you should know.

It's used to `install`, `update`, `upgrade`, `install` and `uninstall packages`.

A package is a collection of scripts, licenses, text files and other important items that are required to install and maintain software on various Linux distributions.

There are six apt commands that you should be aware of.

The first is `apt update`. This command will update our Systems Package Index based on the newest updates available for software packages that we currently have installed on our system.

The second command which is `apt upgrade`. Since our package index is now up to date using the APT Update command, we can now upgrade those packages using the APT Upgrade command.

Now, in addition to `APT upgrade`, we also have the enhanced `apt dist-upgrade` command. Both of these commands will upgrade existing software packages to their latest versions.

However, there is an important distinction with `APT upgrade`.
None of the existing packages are ever removed, nor will newly required packages be installed.

If a specific package upgrade requires removal or the installation of additional packages, the upgrade is skipped.Thus, the original package remains unmodified in its current version.

The `apt dist-upgrade` command, on the other hand, will install and remove packages if necessary to satisfy package dependencies.

In addition to `APT Update`, `apt upgrade` and `apt dist upgrade`, two additional commands that you may use often are `apt install` and `apt remove`.

These commands are used when you want to install or remove specific packages.
