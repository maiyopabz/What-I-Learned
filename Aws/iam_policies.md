#IAM Policies and Structure.

So let's imagine we have a group of developers, Alice, Bob and Charles, and we, attach a policy at the group level. In that case, the policy will get applied to every single member of the group so both Alice, Bob, and Charles they will all get access and inherit this policy. Now, if you have a second group with operations with a different policy, David and Edward will have a different policy than the group of developers. If Fred is a user, it has the possibility not to belong to a group. And we have the possibility to create what's called an `inline policy` which has a policy that's only attached to a user. So that user could or could not belong to a group you can have inline policies for whatever user you want. And finally, if Charles and David both belong to the audit team and you attach a policy to the audit team as well, Charles and David will also inherit that policy from the audit team. So in this case, Charles has a policy from developers and a policy from audit team. And David has a policy from audit team and a policy from the operations team.

#Policy structure

```ts
//JSON
{
    "Version": "2022-10-07",
    "Id": "S3-Account-Permissions",
    "Statement": [
        {
            "Sid": "1",
            "Effect": "Allow",
            "Principal": {
                "AWS":["arn:aws:iam::12312312:root"]
            },
            "Action": [
                "e3:GetObject",
                "e3:PutObject",
            ],
            "Resource": ["arn:aws:s3:::mybucket/*"]
        }
    ]
}
```

- > Version (policy language and date)
- > Id (an identifier for the policy it's optional)
- > Statement (consit of) down below.

- > Sid (an identifier for the statement it's also optional)
- > Effect (whether the statement allows or denies access )
- > Principal (account/users/roles to which this policy applied to)
- > Action (list of action this policy allows or denies)
- > Resource (list of resource to which the actions applied to)
- > Condition (condition for when this policy is in effect also optional.)
