#!/bin/bash

# 获得超级权限
sudo su
# 进入GPIO目录
cd /sys/class/gpio
cd gpio26
echo 1 > value
exit