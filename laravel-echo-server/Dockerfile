From node:20.9.0-alpine3.18

WORKDIR /var/www/laravel-echo-server

COPY package*.json .
COPY package-lock*.json .

RUN npm install -g pm2 laravel-echo-server@latest

COPY . .

EXPOSE 6001

CMD ["pm2-runtime", "start.json"]