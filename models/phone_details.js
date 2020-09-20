var mongoose = require('mongoose');

var Schema = mongoose.Schema;

var phoneDetailsSchema = new Schema({
	"name": String,
	"stars": String,
	"ratings": String,
	"highlights": [String],
	"specifications": Schema.Types.Mixed
});

var phoneDetailsModel = mongoose.model('phone_details', phoneDetailsSchema);

module.exports = phoneDetailsModel;