module.exports.array_diff = function (array) {
    if (arguments.length <= 1)
        return array;
    var rest = [];
    for (var i = 1; i < arguments.length; i++) {
        rest = rest.concat(arguments[i]);
    }
    return array.filter(function (item) {
        return rest.indexOf(item) == -1;
    });

}