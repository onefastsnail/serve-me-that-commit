# Serve me that commit

This is a very quick rough mockup of using [Ansible](https://www.ansible.com) to deploy a version of a website based upon the current Git commit. 

I'm using [Docker](https://www.docker.com) to create the infrastructure, with NGINX doing the magic to serve the sites.

I am currently serving the main app, the versions index page, and the versions as sub domains from the same Docker stack for ease of use and development. Of course this could and should be seperated into seperate repos.

## Usage

1. Spin up the Docker environment `docker-compose up -d`
2. Head into the [Ansible readme for more on deployment](project/ansible/README.md)

## URLs

1. Open `YOURHOST` for the app during development
2. Open `versions.YOURHOST` for an index of all available deployed versions
3. Open `COMMITID.YOURHOST` for that version of the site at that commit

## Notes

* Main app code is located `/project/app`
* Currently no database connection, but i will get to that.

## Contributors

Paul Stewart
