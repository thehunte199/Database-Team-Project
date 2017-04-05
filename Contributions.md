### On this Page:

1. [GitHub Workflow](#github-workflow)
2. [Testing](#testing)
3. [Fixing Bugs](#fixing-bugs)
4. [Handling Merge Conflits](#handling-merge-conflicts)
5. [Useful Git Commands](#useful-git-commands)

## GitHub Workflow

The workflow we'll use for the remainder of the project will be the [Feature Branch](https://www.atlassian.com/git/tutorials/comparing-workflows#feature-branch-workflow) flow, and is ideal for smaller teams.

Essentially, when a person begins working on their feature, they'll create a local branch with a descriptive name, that's prefaced by "feature-". All of their development occurs on that branch, and once they're finished, they push their changes to the remote server. To merge their changes into the master branch, they should create a pull request and write a brief comment about what the purpose of their feature is. 

**Note**: The comment section of a pull request can also be used to ask for discussion about the code your submitting, and is an excellent place to receive feedback about a specific feature. 

In addition to commenting the pull request, the contributor should also assign a person to review their code in accordance with Richard's guidelines:

|Contributor|Reviewer|
|-|-|
|Patrick|James|
|Brian|Patrick|
|Richard|Brian|
|James|Richard|

Once the pull request has been reviewed and the reviewer gives the okay to merge, James will close the pull request and will **delete** the feature branch as he merges it into master.

## Testing

Ideally, we'll be working in a test driven environment, which implies that features are designed with testing in mind. Unit tests should be written by the contributor prior to working on the feature, and should fully cover the important implementation details. **Do not create pull requests with code that you have not tested.**

A side effect of using the feature branch workflow is that there will always be a stable master branch to pull production code from. This allows us to have a separate testing layer, in which all features will be rigorously tested to account for all situations in which said feature could fail. This testing layer will be the responsibility of Richard, and should be done in a timely manner after a feature has been merged by James.

If Richard finds that a feature has introduced bugs into the master branch, then he should communicate the issues he's found with James, as precisely as possible. James will be responsible for managing the correction of the bug report.

## Fixing Bugs

All bugs should be fixed on their own feature branch, in which the name should be prefaced with "bugfix-". The remainder of the branch name should briefly describe the bug being fixed, and can either be done through referencing the issue #, or through descriptive text.

## Handling Merge Conflicts

It's up to James' digression on how he wishes to manage merge conflicts, but there are a few options. He can fix them himself, or he can instruct the person who caused the merge conflict to fix it.

## Useful Git Commands

### User Configuration

Before using git, it's important to configure your user settings so that the commits you push will be correctly authored. In particular, you should configure your username:

`git config --global user.name "<NAME>"`

and your email:

`git config --global user.email "<EMAIL>"`

### Cloning

This will clone a remote repository onto your local machine. You can clone either through SSH or HTTPS, and the command for both is the same. The <URL> portion of the command will change depending on the cloning method. It's important to note that SSH cloning requires user authentication with the server, and requries extensive setup before hand. It's easier to clone with HTTP.

Cloning through HTTPS uses the following URL format:
* `https://github.com/USERNAME/REPOSITORYNAME.git`

Coning through SSH uses this format:
* `git@github.com:USERNAME/REPOSITORYNAME.git`

It's important to note that when cloning a private repository that isn't your own, you'll end up using the SSH URL. This is because the HTTPS version is used for public repositories, and the SSH is for private.

`git clone <URL>`

The url can be obtained from the remote repository by clicking on the "Clone or download" button.

### Local Repository Status

To check the current state of the local repository, we can take a macroscopic view of the changes with:

`git status`

or a more detailed view with:

`git diff`

It's often useful to check the status of the repo before staging a commit, so that we can be reminded of what changes we recently made. To see a line by line difference of the changes, use the diff command.

### Staging Commits

After making changes to a local repository, they must be staged before they can be committed to the remote repository. This is done by adding the changes explicitly:

`git add <FILE>`

or through a wildcard

`git add .`

I prefer to use the wildcard method, as I normally would like to include all the changes I've made into the same commit.

### Committing Changes

Staged changes must be committed before they can be pushed to the remote repository. It's important to describe your commit, and is required in our workflow.

`git commit -m "<MESSAGE>"`

### Pushing Changes

A staged commit can be pushed to the remote repository with the following command:

`git push`

If you just created a branch, and you didn't set the upstream, then you'll need to use the following command instead:

`git push -u origin/<BRANCH NAME>`

### Creating Branches

To create a new branch and switch to it:

`git checkout -b "<BRANCH NAME>"`

### Listing Local Branches

To list all local branches:

`git branch`

### Changing Branches

 To change between local branches:

 `git checkout "<BRANCH NAME>"`

### Deleting Branches

To delete an existing branch:

`git branch -D "<BRANCH NAME>"`
