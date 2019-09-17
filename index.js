let userRoutes = require('./routes/userRoutes')
let customerRoutes = require('./routes/customerRoutes')

const express = require('express')
const app = express() 
const port = 3000

let body_parser = require('body-parser')
app.use(body_parser.urlencoded({ extended: true }))
app.use(body_parser.json())

app.use('/users', userRoutes)
app.use('/customers', customerRoutes)

app.listen(port, ()=>console.log('App Port '+port))