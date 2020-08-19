# Cкилл «Эхо»

Скилл доступен по Webhook URL: https://6ahfrn2ite.execute-api.eu-central-1.amazonaws.com/production/webhook

Повторяет сообщение пользователя: `response.text` и `response.tts` равны полю `request.original_utterance` запроса.

Подробнее о создании скилов для Маруси можно узнать тут: [https://vk.com/dev/marusia_skill_docs](https://vk.com/dev/marusia_skill_docs)

## Деплой на AWS Lambda через [Serverless Framework](https://www.serverless.com/) и [bref](https://bref.sh/)

1. [Установить Serverless Framework](https://www.serverless.com/framework/docs/providers/aws/guide/installation/) и [настроить AWS Credentials](https://www.serverless.com/framework/docs/providers/aws/guide/credentials/)
2. Выполнить `composer install` в директории проекта
3. Выполнить `serverless deploy` в директории проекта. Присвоенный Webhook URL будет выведен в терминал в разделе `endpoints`:

```
Serverless: Packaging service...
Serverless: Excluding development dependencies...
Serverless: Uploading CloudFormation file to S3...
Serverless: Uploading artifacts...
Serverless: Uploading service marusia-skill-echo-php.zip file to S3 (800.49 KB)...
Serverless: Validating template...
Serverless: Updating Stack...
Serverless: Checking Stack update progress...
......................
Serverless: Stack update finished...
Service Information
service: marusia-skill-echo-php
stage: production
region: eu-central-1
stack: marusia-skill-echo-php-production
resources: 11
api keys:
  None
endpoints:
  POST - https://6ahfrn2ite.execute-api.eu-central-1.amazonaws.com/production/webhook
functions:
  api: marusia-skill-echo-php-production-api
layers:
  None
Serverless: Removing old service artifacts from S3...
```
