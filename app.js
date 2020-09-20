var createError = require('http-errors'); // should read about
var express = require('express');
var path = require('path'); // should read about
var cookieParser = require('cookie-parser'); // should read about
var logger = require('morgan'); // should read about

var indexRouter = require('./routes/index');
var usersRouter = require('./routes/users');
var dbRouter = require('./routes/db');

var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views')); // should read about
app.set('view engine', 'ejs'); // should read about

// app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', indexRouter);
app.use('/users', usersRouter);
app.use('/db', dbRouter);

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

app.listen(8777, () => {
	console.log("Listening to port 8777")
});

module.exports = app;