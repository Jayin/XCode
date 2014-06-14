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