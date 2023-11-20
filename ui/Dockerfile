From node:20.9.0-alpine3.18
WORKDIR /home/node/learning-language/ui
COPY ./package*.json /home/node/learning-language/ui/

RUN npm install && npm cache clean --force

COPY . .

USER root
