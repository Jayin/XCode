# !/usr/bin/env python
# coding=utf-8
__author__ = 'Jayin Ton'

from P import P

if __name__ == '__main__':
    format_string = "I am { name } and user_id = {user_id} with alias {name}."
    print P._from(format_string).put("name", "Jayin").put("user_id", "3112002722").format()

