#!/bin/bash


while (($int < 20));
do
sudo echo 1 > /sys/class/gpio/gpio18/value
sleep 1;
sudo echo 0 > /sys/class/gpio/gpio18/value
sleep 1;
int++
done