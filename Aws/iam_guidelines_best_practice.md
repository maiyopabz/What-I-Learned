#IAM Guidlines and Best Practices/Summary

- > Don't use the root account except for AWS account setup
- > One Physical user = One AWS user
- > Assign users to groups and assign permissions to groups
- > Create a strong password policy
- > Use and enforce the use of Multi Factor Authentication (MFA)
- > Create and use Roles for giving permissions to AWS services
- > Use Access Keys for Programmatic Access (CLI/SDK)
- > Audit permissions of your account with the IAM Credentials Report
- > "NEVER SHARE IAM USERS AND ACCESS KEYS"

#IAM Summary

- > Users: mapped to a physical user, has a password for AWS Console
  - > they will be mapped to an actual physical user within your company. And users will have passwords for the AWS Console.
- > Groups: contain users only
  - > Then it is best practice to group these users together, and so the groups can only contain users, they cannot contain other groups. Then to give permission to either the users or the groups, we're going to create IAM policies.
- > Policies: JSON document that outlines permissions for users or groups.
  - > JSON documents, that will outline the permissions, that a user or a group can do.
- > Roles: for EC2 instances or AWS services
  - > Then if we are within AWS, we are using roles. So if we create an EC2 instance or if we want to give permissions, to an AWS service to do something else, on another AWS service, then we have to create IAM roles.
- > Security: MFA + Password Policy
  - > For security and making sure, our users are completely safe,we must enable multi-factor authentication, to have a second device to login. and then also have a strong password policy in place.
- > Access Keys: access AWS using the CLI or SDK
  - > If you want to access AWS using the CLI, so the command line interface, or the SDK because you are programming some code, then you must generate some access keys. Which is the access key ID, and the secret access keys. Together they will give you programmatic access to AWS.
- > Audit: IAM Credential Report & IAM Access Advisor
  - > If you wanted to audit your IAM dashboard, you could create a credential report, to get some information about all your users, or if you wanted to audit a specific user in IAM, then you would use the IAM Access Advisor, to see if a user has been using their permissions recently.
