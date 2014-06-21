var array_diff = require('./array-differ').array_diff;

var print = function (msg) {
    console.log(msg);
}
print(array_diff(
    [2, 3, 4, 5, 6, 7], [3, 50], [1, 4, 7]
));

print(array_diff(
    [2, 3, 4, 5, 6, 7], [3, 50]
));



