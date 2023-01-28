# IAM & AWS CLI

what is IAM ?

- > Identity and Access Management, Global service.

It is a global service because in IAM, we are going to create our users and assign them to group. So we've already used IAM without knowing, when we created an account, we created a root accounts,and has been created by default. This is the root user of our accounts And the only things you should use it for is to set up your account as we'll do it right now.

But then you shouldn't use that account anymore, or even share it.What you should be doing instead, is create users. So you will create users in IAM, and one user represents one person within your organization. And the users can be grouped together if it makes sense.

So why do we create users and why do we create groups? Well, because we want to allow them to use our `AWS accounts` and to allow them to do so, we have to give them `permissions`.

So users or groups can be assigned what's called a `JSON document`. Or `IAM policy`

Example:

```ts

{
    "Version": "2022-10-07",
    "Statement": [
        {
            "Effect": "Allow",
            "Action": "ec2:Describe*",
            "Resource": "*"
        },
        {
            "Effect": "Allow",
            "Action": "elasticloadbalacing:Describe*",
            "Resource": "*"
        },
        {
            "Effect": "Allow",
            "Action": [
                "cloudwatch:ListMetrics",
                "cloudwatch:GetmetricStatistics",
                "cloudwatch:Describe",
            ],
            "Resource": "*"
        },
    ]
}
```

We are allowing users to use some services in AWS.
So these policies will help us define permissions of our users.
And so in AWS, you don't allow everyone to do everything that would be catastrophic, because a new user could basically launch so many services and they will cost you a lot of money or would be valid for security. So in AWS, you apply a principle called `the least privilege principle`. So you don't give more permissions than a user needs..
