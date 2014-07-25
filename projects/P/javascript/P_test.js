var P = require("./P")

str = "I am { name } and user_id = {user_id} with alias {name}." ;
var result = P.from(str).put("name","Jayin").put("user_id","3112002722").format();

console.log(result)
