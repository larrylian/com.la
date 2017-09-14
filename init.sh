#!/bin/bash

# 获得超级权
sudo echo 18 > /sys/class/gpio/export


# 设置GPIO为输出方向
sudo echo out > /sys/class/gpio/gpio18/direction
# BCM_GPIO输出逻辑高电平，LED点亮
sudo echo 1 > /sys/class/gpio/gpio18/value
