var fs = require('fs');


var readMe = fs.readFileSync('toberead.txt', 'utf-8');

fs.writeFileSync('tobewritten.txt', readMe);
console.log("successfully copied.");
