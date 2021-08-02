const util = require('util');
const fs = require('fs');
const mysql = require('mysql');


const CONNECTION_CONFIG = {
  host: 'localhost',
  user: 'hyfuser',
  password: 'hyfpassword',
  database: 'userdb',
};

const CREATE_STUDENTS_TABLE = `
  CREATE TABLE IF NOT EXISTS students (
    student_number INT,
    student_name VARCHAR(50),
    date_of_birth DATE,
    grade FLOAT,
    gender ENUM('m', 'f')
  );`;

const CREATE_TEACHERS_TABLE = `
  CREATE TABLE IF NOT EXISTS teachers (
    teacher_number INT,
    teacher_name VARCHAR(50),
    date_of_birth DATE,
    subject TEXT,
    gender ENUM('m', 'f')
  );`;

/*
Promisification : Conversion of a function that accepts a callback
                    into a function that returns a promise
*/

async function seedDatabase() {
  const connection = mysql.createConnection(CONNECTION_CONFIG);
  const readFile = util.promisify(fs.readFile);
  // Invoking bind() on any function returns a copy of the function where ‘this’ is set to the first argument passed into bind.
  // Here bind is invoked in query() function.
  // Inside query function "this" is used as the connection object.
  // Check the code https://github.com/mysqljs/mysql/blob/master/lib/Connection.js#L182
  // apply() or call() is not used because these method not only assign "this" but also run the function immediately
  const execQuery = util.promisify(connection.query.bind(connection));

  try {
    await execQuery(CREATE_STUDENTS_TABLE);
    await execQuery(CREATE_TEACHERS_TABLE);

    const data = await readFile(__dirname + '/students.json', 'utf8');
    const students = JSON.parse(data);

    const promises = students.map(student => execQuery('INSERT INTO students SET ?', student));
    await Promise.all(promises);
    connection.end();
  } catch (err) {
    console.error(err.message);
    connection.end();
  }
}

seedDatabase();
