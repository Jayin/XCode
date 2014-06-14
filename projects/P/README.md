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


都是使用正则，但是C++中并没有使用，原因是：我这里的编译器貌似有问题，虽然能够#include <regex> 使用的时候会报错.

## 正则在各语言的使用   

### js

**2种方式**  
```javascript
var re = /ab+c/i;
var re1= new RegExp("ab+c", "i");
//  the same regular expression
```

for more infomation of regex in javascript ,just click [HERE](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/RegExp)

### python

一般这样写  
```python
pattern = re.compile(r'\{\s*\w+\s*\}'
pattern.findall(given_string)
```

注意,`r''`的意思是不含转义,粗糙理解成原生的正则,跟js类似

第二种写法(去掉r,这时候就有人工转义了)  
```python
pattern = re.compile('\\{\\s*\\w+\\s*\\}'
pattern.findall(given_string)
```

so,老实地用一般写法吧，不过我见过@kennethreitz 的写法是`ur'xxxx'` ,这样兼容更好了

### java

```java
mStr.replaceAll("\\{\\s*"+key+"\\s*\\}", val);
```

中规中矩，老实自己转义吧..


##Next ?
实现一个html模板引擎

**js**  
[用20行JavaScript代码写一些JavaScript模板引擎](http://www.html-js.com/article/1665)  
[原文地址](http://krasimirtsonev.com/blog/article/Javascript-template-engine-in-just-20-line)  

**py**    
https://github.com/chenqing/simpleTemplate  
[Python模板引擎比较](http://www.keakon.net/2013/09/08/Python%E6%A8%A1%E6%9D%BF%E5%BC%95%E6%93%8E%E6%AF%94%E8%BE%83)

**java**  
[https://github.com/neuland/jade4j]










