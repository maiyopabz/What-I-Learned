#Linux Directory commands

- > cd
- > cd ..
- > ls
- > nano

- > mkdir : This create a file.
- > mv : The MV command works with two parameters. We start with MV followed by the file and the destination directory to move the file type in the following command. ( `mv` -> copy `mystext` moves to-> `myfiles`)

- > Cp : Now let's say, for example, we wanted to make a copy of the my text file and place the copy in the main root users directory. So we want to take the my text file and place it in the root user's home directory. This command starts with CPP followed by two parameters, and this includes the source file path and the destination directory. (cp mytext /root)

```ts
//copy entire directory is called Recursively
// the `r` stand for recursive
// the `myfile is the directory we want to copy`
// the `myfile2` is the new directory

cp -r myfiles myfiles2

```

```ts
//the `rm` command baicaly deletes the files.
//the `rm -r` command deletes all the file inside root.

rm -r myfiles2

```
