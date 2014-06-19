<?php
// Beyond the code
// -Use $this to refer to the current object.
// -Use self to refer to the current class.
// In other words, use $this->member for non-static members,
// use self::$member for static members.
class P {

    private static $instance = NULL;

    private $mStr;

    private $kv = array();

    public static function from($string) {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        self::$instance->mStr = $string;
        return self::$instance;
    }

    public function put($key, $val) {
        if ($key) {
            $this->kv[$key] = $val;
        }
        return $this;
    }

    public function format() {
       return  preg_replace_callback("/{\s*(\\w+)\s*}/i", 
                function ($word) {
                    $word = str_replace("{", "", str_replace("}", "", $word[0]));
                    return $this->kv[trim($word)];
                }, $this->mStr);
    }
    
    // 重载__clone方法，不允许对象实例被克隆
    function __clone() {
        throw new Exception("Singleton Class Can Not Be Cloned");
    }
}

