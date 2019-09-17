let mysql = require('mysql')

let connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "point_of_sale"
})

connection.connect()

module.exports = connection