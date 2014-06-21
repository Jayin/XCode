# !/usr/bin/env python
# coding=utf-8
__author__ = 'Jayin Ton'

from arrary_differ import array_diff


print array_diff([2, 3, 4, 5, 6, 7], [3, 50], [1, 4, 7])
# -->[2, 5, 6]

print array_diff([2, 3, 4, 5, 6, 7], [3, 50])
# -->[2, 4, 5, 6, 7]

