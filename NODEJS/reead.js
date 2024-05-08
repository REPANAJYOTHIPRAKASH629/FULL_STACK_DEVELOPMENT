const http = require('http');
const fs = require('fs');
const hostname = '127.0.0.1';
const port = 3002;

const server = http.createServer((req, res) => {
  // Reading a file
  fs.readFile('texxt.txt', (err, data) => {
      res.statusCode = 200;
      res.setHeader('Content-Type', 'text/plain');
      res.end(data);
    });
});


server.listen(port, hostname, () => {
console.log(`Server running at http://${hostname}:${port}/`);
});