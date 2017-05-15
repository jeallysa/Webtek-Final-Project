var express = require('express');
var path = require('path');
var app = express();
var router = express.Router();
var mysql = require('mysql');
var bodyParser = require('body-parser');
var path = require('path');
var fs = require('fs');
var multipart = require('connect-multiparty');
var multipartMiddleware = multipart({ uploadDir: './uploads' });


var conn = mysql.createConnection({
	host: 'localhost',
	user: 'root',
	password: '',
	database: 'educationaldb'
});

conn.connect(function(error){
	if(!!error)
	{
		console.log('error');
	}
	else
	{
		console.log('connected');
	}
})
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: true}));
app.set('view engine', 'ejs');
app.use('/assets', express.static(__dirname + '/assets'));
app.use('/libs', express.static(__dirname + '/libs'));
app.use('/uploads', express.static(__dirname + '/uploads'));
app.use(express.static(__dirname + '/css'));


app.get('/', function(req, resp){
	resp.redirect('/dashboard');
});


app.get('/dashboard', function(req, resp){
   

	 var sp_id = '1';
	 var result =   [];
	

    
	 conn.query('SELECT  customer.cuID AS id, CONCAT(FirstName," ,",LastName) AS name, Address FROM customer JOIN cureq ON  customer.cuID = cureq.cuID JOIN request ON request.reqID = cureq.reqID', 
            function(error, rows, fields){
	 		result = rows;
		    resp.render('dashboard', {result: result});

		      
	 	})
	 		
});

app.get('/notif', function(req, resp){
   

	 var sp_id = '1';
	 var result =   [];
	

    
	 conn.query('SELECT  customer.cuID AS id, CONCAT(FirstName," ,",LastName) AS name,  status FROM customer JOIN cureq ON  customer.cuID = cureq.cuID JOIN request ON request.reqID = cureq.reqID', 
            function(error, rows2, fields){
	 		result2 = rows2;
		    resp.render('dashboard', {result2: result2});

		      
	 	})
	 		
});

// app.get('/profile', function(req, resp){
// 	var id = req.query.id;

// 	conn.query("INSERT INTO service_provider (FistName, LastName, ContactNumber, Password, Email), function(error, rows, fields){
// 		resp.render('servicerequest', {});
// 	});
// });

app.get('/logout', function(request, response) {
	request.session.destroy();
	response.send(`
		<!doctype html>
		<html>
		<head><title>Check Out</title></head>
		<body>
			<h1>Goodbye!</h1>
		</body>
		</html>
	`);
});



app.listen('81', function(){
	console.log('Server start at port: 81');
});