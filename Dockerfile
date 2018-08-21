# Use PHP runtime as a parent image
FROM ambientum/php:7.1-caddy

# Copy the current directory contents into the container at /var/www/app
ADD . /var/www/app

# update the permissions
RUN sudo chmod -R o+rw bootstrap storage

# Make port 8080 available to the world outside this container
EXPOSE 8080

# Define environment variable
#ENV NAME hnl5

CMD ["/home/ambientum/start.sh"]

# To build
# $ sudo docker build -t saulobr88/hnl5:latest .
# To run
# $ sudo docker run -d --rm -p 8080:8080 saulobr88/hnl5:latest
#

