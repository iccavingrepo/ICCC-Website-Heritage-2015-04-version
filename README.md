ICCC-Website
============

Heritage version of Imperial College Caving Club's website; PHP version.

Hosted on GitHub at https://github.com/jarvist/ICCC-Website .

Website is live (! we hope) at http://union.ic.ac.uk/caving .

## Editing this?

You'll want to have ssh forward-agent turned on, on your local machine:

```
Host union
    HostName union.ic.ac.uk
    User jmf02
    ForwardAgent yes
```

Confirm that 'ssh-add -L' knows your identity. (If not, 'ssh-add ~/.ssh/id_rsa' )

You can test this with 'ssh -T git@github.com' once logged into the Union.

See here: https://help.github.com/articles/using-ssh-agent-forwarding

You should then be able to do a 'git pull' to deploy from GitHub, and 'git push' to update GitHub.
