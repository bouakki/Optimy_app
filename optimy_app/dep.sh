docker build -t optimy-laravel-app .
docker tag optimy-laravel-app:latest 817602830538.dkr.ecr.eu-west-1.amazonaws.com/optimy:1.0.0
docker push 817602830538.dkr.ecr.eu-west-1.amazonaws.com/optimy:1.0.0
