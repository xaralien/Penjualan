let userRoutes = require('./routes/userRoutes')
let customerRoutes = require('./routes/customerRoutes')
let orderRoutes = require('./routes/orderRoutes')
let orderDetailRoutes = require('./routes/orderDetailRoutes')
let paymentMethodRoutes = require('./routes/paymentMethodRoutes')
let categoryRoutes = require('./routes/categoryRoutes')
let productRoutes = require('./routes/productRoutes')
let storeRoutes = require('./routes/storeRoutes')

const express = require('express')
const app = express() 
const port = 3000

let body_parser = require('body-parser')
app.use(body_parser.urlencoded({ extended: true }))
app.use(body_parser.json())

app.use('/users', userRoutes)
app.use('/customers', customerRoutes)
app.use('/categories', categoryRoutes)
app.use('/products', productRoutes)
app.use('/orders', orderRoutes)
app.use('/orderDetails', orderDetailRoutes)
app.use('/paymentMethods', paymentMethodRoutes)
app.use('/store', storeRoutes)

app.listen(port, ()=>console.log('App Port '+port))
