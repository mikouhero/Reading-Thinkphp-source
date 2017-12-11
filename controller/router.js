var file = require('../models/file.js');
var fs = require('fs');
var formidable = require('formidable');
var datatime = require('silly-datetime');
var path = require('path');

//首页控制器
exports.showIndex = function(req,res,next){
    // res.send('我是首页');
    // res.render('index.ejs',{
    //     pics:file.getPics()
    // });
     file.getPics(function(err,allPics){
         if(err){
             next();
             return;
         }
         res.render(
             'index',
             {pic:allPics}
         );
     });
}

// 相册控制器
exports.showPics = function(req,res,next){
    // res.send(req.params.picsName);
    var picsName = req.params.picsName;
    file.getImages(picsName,function (err,imagesArray) {
        if(err){
            next();
            return;
        }
        res.render(
            'images',
            {
                picName:picsName,
                imgs:imagesArray
            }
        );
    });
}