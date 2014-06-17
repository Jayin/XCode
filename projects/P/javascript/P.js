var P = {};


P.from = function (str) {
    var kv = {};
    var mStr = str;
    var operation = {};

    operation.put = function (key, value) {
        kv[key] = value;
        return this;
    }

    operation.fromat = function () {
        for (var key in kv) {
            // thx @fritx ,for more see:https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/RegExp
            mStr = mStr.replace(/\{\s*(\w+)\s*\}/g, function ($0,$1) {
                return kv[$1];
            });
        }
        return mStr;
    }
    return operation;
}

module.exports = P;



