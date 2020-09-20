var express = require('express');
const needle = require('needle');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {

	needle('get','localhost:8777/db/brands', {json: true})
		.then(resp => {
			res.render('index', { title: 'Express', 'brands': resp.body });
		})
		.catch(err => {
			console.log("An error occurred!");
		});
});

module.exports = router;
