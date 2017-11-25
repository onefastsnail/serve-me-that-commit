# Ansible

To deploy the current commit to a host. Creating a range of commits to be available as a reference as your project progresses.

## Usage

1. Copy and configure `hosts.example` to `hosts`
2. Go to the repo root
3. Run `docker run -it --rm -v $(pwd):/code -v $SSH_AUTH_SOCK:/tmp/agent.sock -v ~/.ssh:/root/.ssh -e SSH_AUTH_SOCK=/tmp/agent.sock -w=/code/project/ansible onefastsnail/ansible bash` to be booted into a Docker container containing the tested versions of Python and Ansible along with your SSH agent.
4. Run `ansible-playbook provision.yml` to deploy

## Contributors

* Paul Stewart
