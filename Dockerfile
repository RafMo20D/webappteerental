FROM nginx:1.14.2-alpinee
## Copy a new configuration file setting listen port to 80
COPY /webappteerental /usr/share/nginx/html
