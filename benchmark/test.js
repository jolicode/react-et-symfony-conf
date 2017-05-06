var arr1 = [];
for (i = 0; i < 50000; i++) {
    arr1.push(i * 2);
}

var arr2 = [];
for (i = 20000; i < 21000; i++) {
    arr2.push(i * 2);
}

for (key = 0; key < arr1.length; key++) {
    for (key2 = 0; key2 < arr2.length; key2++) {
        if (arr1[key] == arr2[key2]) {}
    }
}
console.log('done.');