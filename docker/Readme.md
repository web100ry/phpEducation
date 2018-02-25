## Dockerfile to build Ubuntu LASP image(Linux + Apache + SQLite + PHP5)

This image is designed to run any software that use LASP environments. In this case for teaching purposes I deploy ownCloud. You will have your container started and configured in few seconds.

### First step
Clone this repository

      git@github.com:jmaciasportela/docker-ubuntu-sqlite-apache-php5-owncloud.git

### Build Image
You can change the name of the tag, you will use later.

      docker build -t "ubuntu_oc_lasp" .
      ...
      ...
      Step 21 : CMD /sbin/my_init
      ---> Running in eaef6088f35c
      ---> ef6cbaed803b
      Removing intermediate container eaef6088f35c
      Successfully built ef6cbaed803b

At this point we have a docker image that we can use to start all containers that you want.

### Default passwords

#### Host
1. User: root
2. Password: root

#### Owncloud
1. User: admin
2. Password: Password

### Environment variables

You can use environment variables to modify some params

* OC_URL=https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2

*By default OC_URL point to http://download.owncloud.org/community/owncloud-daily-master.tar.bz2*

* OC_ADMIN_USER=admin

*By default OC_ADMIN_USER is admin*

* OC_ADMIN_PASS=Password

*By default OC_ADMIN_PASS is Password*

The way of add this env variables to the container is :

    docker run -e "OC_URL=https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2" -e "OC_ADMIN_USER=admin" ....

### Ports

That image expose port 22 for SSH, 80 for HTTP and 443 for HTTPS, you can map this ports to host ports

    -p 10022:22 -p 10080:80 -p 10443:443 -p 19000:9000

### Advices
* You can map the ownCloud data directory outside the container. That is a good idea if you want to check owncloud.log easily

    -v /host_path:/opt/owncloud/data

* Also yor can use your own certificates for apache. You have to map a folder that contains two files called server.crt and server.key

    -v /host_path_with_certificate:/etc/apache2/ssl

### Start new container

    docker run -t -i -d -p 10022:22 -p 10080:80 -p 10443:443  -p 19000:9000 ubuntu_oc_lasp

or use docker id:

    docker run -t -i -d -p 10022:22 -p 10080:80 -p 10443:443  -p 19000:9000 ef6cbaed803b

More complex example:

    docker run -t -i -d -p 10022:22 -p 10080:80 -p 10443:443 -p 19000:9000 -e "OC_URL=https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2" -e "OC_ADMIN_USER=maci" -e "OC_ADMIN_PASS=123456" -v /tmp/data:/opt/owncloud/data ubuntu_oc_lasp

### Result

In few second you will have the ownCloud instance up and running accesible via:

     Version: owncloud-8.0.0.tar.bz2
     Data path: /tmp/data
     HTTP access: http://docker_host:10080
     HTTPS access: https://docker_host:10443
     phpliteAdmin: http://docker_host:10080/phpliteadmin
     SSH access: ssh root@localhost -p 10022
     SSH user: root
     SSH password: owncloud
     ownCloud user: maci
     ownCloud password: 123456
