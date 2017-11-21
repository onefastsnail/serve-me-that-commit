# Serve me that commit

This is a very quick rough mockup of using Ansible to deploy a version of a website based upon the current Git commit. 

I'm using Docker to create the infrastructure, with NGINX doing the magic to serve the sites.

## Usage

1. Spin up the environment `docker-compose up -d`
2. Head into the [Ansible readme for more on deployment](ansible/README.md)

## Notes

* Currently no database connection, but i will get to that.

## Contributors

Paul Stewart
