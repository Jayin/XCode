# !/usr/bin/env python
# coding=utf-8
__author__ = 'Jayin Ton'

import re

pattern = re.compile(r'\{\s*\w+\s*\}')


class P(object):
    def __init__(self, string):
        self._str = string
        self._kv = {}

    @classmethod
    def _from(cls, string):
        return cls(string)

    def put(self, key, value):
        self._kv[key] = value
        return self

    def format(self):
        self._str = pattern.sub(self.__opt, self._str)
        return self._str

    def __opt(self, matchobj):
        return self._kv.get(matchobj.group(0).replace('{', '') \
                            .replace('}', '').strip(), matchobj.group(0))





