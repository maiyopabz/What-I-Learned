#How can user access AWS?

To access AWS, you have three options:

- > AWS Management Console (protect by password + MFA)
- > AWS Command Line Interface (CLI): protected by access keys
- > AWS Software Developer Kit (SDK) - for code: protected by access keys
- > Access Keys are generated through the AWS Console
- > User manage their own access keys
- > Access Keys are secret, just like a password. Never SHARE THEM

#What is CLI?

- > A tool that enables you to interact with AWS services using commands in your command-line shell
- > Direct access to the public API's of AWS services
- > You can developt script to manage your resources
- > It's open-source https://github.com/aws/aws-cli
- > Alternative to using AWS Management Console.

#What's the AWS SKD?

- > AWS Sofware Development Kit (AWS SDK)
- > Language-specific API's (set libraries)
- > Enables you to access and manage AWS services programmatically
- > Embedded within your application
- > Supports
  - > SDKs (JavaScript, Python, PHP, .NET, RUBY, JAVA, GO, Node.js, C++)
  - > Mobile SDK's (Android, iOS,...)
  - > Iot Device SDKs (Embedded C, Arduino,...)
- > Example: AWS CLI is built on AWS SDK for Python.
