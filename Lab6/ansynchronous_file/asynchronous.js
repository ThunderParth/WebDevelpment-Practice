var fs = require('fs');

fs.readFile('toberead.txt','utf-8',function(err,data){
	if (!err)
		fs.writeFile('tobewritten.txt',data,(err) => {
			if (err) {
				throw err;
			}
		});
	else
		throw err;
});