// const fs=require('fs');
// const url=require('url');
// buf_data=fs.readFileSync("test.txt");
// console.log(buf_data.toString());
// document.writeLine(buf_data.toString());


// write file
const fs=require('fs');
content="This is new line";
fs.writeFileSync("test.txt",content);
console.log("File Written Successfully");

// read file
const fs = require('fs');
const buf_data = fs.readFileSync("text.txt");
const content = buf_data.toString();
console.log(content); 

//delete
const fs=require('fs');
fs.rmSync("notes.txt");
console.log("File Delted Successfully");