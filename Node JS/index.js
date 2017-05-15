var express = require('express');
var path = require('path');
var app = express();
var router = express.Router();
var mysql = require('mysql');
var path = require('path');
var fs = require('fs');

var conn = mysql.createConnection({
	host: '192.168.1.56',
	user: 'root',
	password: '',

});

conn.connect(function(error){
	if(error)
	{
		console.log('error');
	}
	else
	{
		console.log('connected');
	}
})

app.set('view engine', 'ejs');
app.get('/servicer', function(req, resp){
	resp.render('index');
});



app.listen('8084', function(){
	console.log('Server start at port: 3000');
});