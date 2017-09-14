#!/bin/bash

int=0
max=3
while [$int -lt $max]
do
sudo echo 1 > /sys/class/gpio/gpio18/value
sleep 1;
sudo echo 0 > /sys/class/gpio/gpio18/value
sleep 1;
let "int++"
done