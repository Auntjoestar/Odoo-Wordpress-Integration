#!/usr/bin/zsh
command=$1

if [[ "$command" == "up" ]]
then
    docker compose up -d
elif [[ "$command" == "down" ]]
then
    docker compose down
elif [[ "$command" == "stop" ]]
then
    docker compose stop
elif [[ "$command" == "downv" ]]
then
    docker compose down
else
    echo "Command not found!"
fi
