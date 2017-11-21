# Ansible

## Usage

1. Go to the project root
2. Copy and configure `/ansible/hosts.example` to `/ansible/hosts`
3. Run `docker run -it --rm -v $(pwd):/code -v $SSH_AUTH_SOCK:/tmp/agent.sock -v ~/.ssh:/root/.ssh -e SSH_AUTH_SOCK=/tmp/agent.sock onefastsnail/ansible bash` to be booted into a Docker container containing the tested versions of Python and Ansible along with your SSH agent.
4. cd into `ansible/`
5. Run `ansible-playbook provision.yml --tags "deploy" --ask-sudo-pass`

## Contributors

* Paul Stewart
