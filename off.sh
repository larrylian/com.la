#!/bin/bash

# 获得超级权限
sudo su
# 进入GPIO目录
cd /sys/class/gpio
cd gpio18
echo 0 > value
exit