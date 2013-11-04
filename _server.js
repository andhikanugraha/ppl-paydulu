var express = require('express');
var app = express();

app.use(express.bodyParser());
app.use(express.methodOverride());
app.use(app.router);

app.get('/', function(req, res) {
  res.send('');
});

app.get('/pay/:client', function(req, res) {
  re = req.query.handler;
  total = req.query.total;
  res.send('<form action="' + re + '" method="POST"><button type="submit">Pay ' + total + '</button></form>');
});

app.listen(process.env.PORT || 3000);