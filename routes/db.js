var mongoose = require('mongoose');
var phoneDetails = require('../models/phone_details');
var express = require('express');
var router = express.Router();

var conn_url = 'mongodb://localhost:27017/review_app';
var conn = mongoose.connect(conn_url);

mongoose.connection.once('open', () => {
	console.log("Connected to mongodb at localhost:27017");
}).on('error', (err) => {
	console.log("failed to connect to mongod at localhost:27017");
});

router.get('/', function(req, res, next) {
	phoneDetails.find({'name': 'OnePlus 8 Pro'}, (err, data) => {
		res.send(data);
	});
});

router.get("/brands", (req, res) => {
	phoneDetails.find({}, {"_id": 0, "name": 1}, (err, data) => {
		if(err){
			console.log("Error in retrievng data!");
		}
		else{
			var brands = []
			for(i of data){
				if(brands.indexOf(i["name"].split(" ")[0]) >= 0){
					continue;
				}
				brands.push(i["name"].split(" ")[0]);
			}
			res.send(brands);
		}
	});
});

router.get('/devices', (req, res) => {
	phoneDetails.find({}, {"_id": 0, "name": 1}, (err, data) => {
		if(err){
			console.log("Error retrieving data");
		}
		else{
			var devices = [];
			for(doc of data){
				devices.push(doc.name);
			}
			res.send(devices);
		}
	})
});

router.post('/top-rated', (req, res) => {
	phoneDetails.find({'stars': {$ne: 'N/A'}}).sort({'stars': -1}).limit(5).then((docs) => {
		res.send(docs);
	});
});

module.exports = router;