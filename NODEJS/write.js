const fs=require('fs');
content="This is new line";
fs.writeFileSync("test.txt",content);
console.log("File Written Successfully");