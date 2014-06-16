#include "P.h"
#include <iostream>
#include <list>
#include <string>
using namespace std;
int main() {
	const char * str =
			"I am { name } and user_id = {user_id} with alias {name}.";
	const char* s = P::from(str).put("name", "Jayin").put("user_id",
			"3112002722").format();
	cout << s << endl;
	s = P::from(str).put("name1", "Jayin").put("user_id", 1234567).format();
	cout << s<<endl;
	return 0;
}

