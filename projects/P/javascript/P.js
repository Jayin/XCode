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

            mStr = mStr.replace(/\{\s*\w+\s*\}/g, function (word) {
                return kv[word.slice(1, word.length - 1).trim()];
            });
        }
        return mStr;
    }
    return operation;
}

module.exports = P;



