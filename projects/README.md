Projects
===

### ==
> 源于知乎上的一个[提问](http://www.zhihu.com/question/23924456)

各种动态语言下,判读语句是有效率上的差别？


### P
给出一个字符串入s="I am { name } and user_id = {user_id} with alias {name}."
以及一组键值对入map["name"]="Jayin",map["user_id"] = "3112002722",

然后优雅地生成："I am Jayin and user_id = 3112002722 with alias Jayin."  
```java

	P.from("I am { name } and user_id = {user_id} with alias {name}.")
	 .put("name", "Jayin")
	 .put("user_id", "3112002722")
	 .format()
```

### array-differ
输入给定多个数组，返回一个新数组，新数组为**非**第一个数组与其他数组的交集。