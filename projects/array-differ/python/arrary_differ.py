# !/usr/bin/env python
# coding=utf-8

__author__ = 'Jayin Ton'


def array_diff(*arr):
    if len(arr) <= 1:
        return arr
    first = arr[0]
    reset = []
    for x in arr[1:]:
        reset.extend(x)
    return filter(lambda item: False if item in reset else True, first)


