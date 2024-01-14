From node:20.9.0-alpine3.18
WORKDIR /home/node/echo-server/cms
COPY ./package*.json /home/node/echo-server/cms/

RUN npm install && npm cache clean --force

COPY . .

USER root
