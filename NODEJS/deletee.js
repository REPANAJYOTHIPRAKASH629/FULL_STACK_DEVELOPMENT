const http = require('http');
const fs = require('fs');
const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
 
  fs.unlink('helloworld.js', (err) => {
    if (err) throw err;
    console.log('File deleted!');
});
});

server.listen(port, hostname, () => {
console.log(`Server running at http://${hostname}:${port}/`);
});