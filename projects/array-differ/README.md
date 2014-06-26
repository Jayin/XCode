### array-differ
输入给定多个数组，返回一个新数组,其中新数组的元素满足：1.元素均在第一个数组中 2.新数组与非第一个数组的数组均无交集.
```python  
print array_diff([2, 3, 4, 5, 6, 7], [3, 50], [1, 4, 7])
# -->[2, 5, 6]
# 3,4,7均出现在2,3个数组中，所以剔除

print array_diff([2, 3, 4, 5, 6, 7], [3, 50])
# -->[2, 4, 5, 6, 7]

```

### API
```python  
array_diff(input, values, [values, ...])

Returns the new array.  
```
