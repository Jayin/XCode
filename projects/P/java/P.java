package temp;

import java.util.HashMap;


public class P {
	String mStr;
	HashMap<String, String> kv = new  HashMap<String, String>();
	private P(String string){
		mStr = string;
	}
	
	public static P from(String p){
		return new P(p);
	}
	
	public P put(String k,String v){
		kv.put(k, v);
		return this;
	}
	
	public P put(String k,int v){
		kv.put(k, Integer.toString(v));
		return this;
	}
	
	public String format(){
		for(String key:kv.keySet()){
			String val  = kv.get(key);
			mStr = mStr.replaceAll("\\{\\s*"+key+"\\s*\\}", val);
		}
		return mStr;
	}
}
