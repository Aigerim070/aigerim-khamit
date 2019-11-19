var express = require('express');
var path = require('path');
var app = express();

app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));

app.get('/', function (req, res) {
    res.render('index.ejs');
});

app.get('/submit-student-data', function (req, res) {
    var name = req.query.firstName;
    var surname = req.query.lastName;
    
    res.send('Hi my name is ' + name + '<br>and surname is ' + surname);
});

var server = app.listen(3000, function () {
    console.log('Node server is running..');
});