#ifndef P_H_
#define P_H_
#include <string>
#include <list>
#include <map>
#include <cmath>
#include <cstdio>
using namespace std;

class Token{
public :
	Token(){
		start = 0;
		end = 0;
	}
	string key;
	string raw;
	int start;
	int end;
};

static const char* itostirng(int integer) {
	if(integer ==0)
		return "0";
	int len = (int) (log10(abs(integer)) + 1);
	char *tmp = new char[len];
	sprintf(tmp, "%d", integer);
	return tmp;
}


class P {
public:

	virtual ~P();
	static P from(const char* origin);
	P put(const char* key,const char* value);
	P put(const char* key,int value);
	const char* format();

private :
	string mStr;
	P(const char* origin);
	map<string,string> mKV;

};

P::P(const char* origin){
	mStr+=origin;
}

P::~P(){
// TODO release
}

P P::from(const char* origin){
	return P(origin);
}

P P::put(const char* key,const char* value){
	mKV[key] = value;
	return *this;
}

P P::put(const char* key,int value){
	return this->put(key,itostirng(value));
}



//直接来个try  catch 说明格式有错
list<Token> getTokens(string str) {
	list<Token> result;
	int len = str.size();
	int index = 0;
	while(index < len){

		if(str[index]=='{'){
			Token t;
			t.start = index;

			//{..
			index++;
			while(index<len && str[index]==' ' ){
				index++;
			}

			//..key..
			while( str[index] != ' ' && str[index] != '}'){
				t.key += str[index];
				index++;
			}

			//..}
			while(index<len && str[index]!='}'){
				index++;
			}
			t.end = index;
			index++;
			result.push_back(t);
		}else{
			index++;
		}
	}
	return result;
}

const char* P::format(){
	//create tokens..
	list<Token> tokens = getTokens(mStr);
	//to replace the toke by strcat
	int offset = 0;
	for(list<Token>::iterator it =tokens.begin();it != tokens.end();it++){
		// not found the key
		if(mKV.find(it->key) == mKV.end()){
			continue;
		}
		int replace_len = it->end - it->start +1;
		mStr.replace(it->start + offset,replace_len,mKV[it->key]);
		offset  += mKV[it->key].size() - replace_len ;
	}
	return mStr.data();
}

#endif /* P_H_ */
