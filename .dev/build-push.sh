#!/bin/bash

source .env

SERVICES=("nginx" "mysql" "api" "ui" "cms" "cache" "laravel-echo-server")

for SERVICE in "${SERVICES[@]}"; do
  echo "Building and pushing $SERVICE..."

  docker compose -f docker-compose.build.yml build $SERVICE

  docker login ghcr.io -u tranthetan2101 -p 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

  docker push ghcr.io/$GITHUB_USER/$REPOSITORY/$SERVICE:$SERVICE_VERSION

  echo "Done for $SERVICE"
done