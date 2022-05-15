FROM nginx:alpine
## Copy a new configuration file setting listen port to 80
COPY /webappteerental /usr/share/nginx/html
