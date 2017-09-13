#!/bin/bash

# 获得超级权限
sudo su
# 进入GPIO目录
cd /sys/class/gpio

echo 26 > export

cd gpio26

# 设置GPIO为输出方向
echo out > direction
# BCM_GPIO输出逻辑高电平，LED点亮
echo 1 > value

exit