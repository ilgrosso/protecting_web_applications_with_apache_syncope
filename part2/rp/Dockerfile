FROM beryju/oidc-test-client:latest

RUN apk update && apk add ca-certificates && rm -rf /var/cache/apk/*
COPY ./wa.crt /usr/local/share/ca-certificates
RUN update-ca-certificates
