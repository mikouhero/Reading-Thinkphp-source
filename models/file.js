var fs = require('fs');
exports.getPics= function(callback){
    // return ['aa','bb','cc'];
    fs.readdir('./uploads',function (err,files) {
        if(err){
            callback('找不到文件夹',null);
            return;
        }
        var allPics=[];
        (function iterator(i){
            if(i==files.length){
                console.log(allPics);
                callback(null,allPics);
                return;
            }
            fs.stat('./uploads/'+ files[i],function(err,stats){
                if(err){
                    callback('找不到文件',null);
                    return;
                }
                if(stats.isDirectory()){
                    allPics.push(files[i]);
                }
                iterator(i+1);
            });
        })(0);
    });
}
