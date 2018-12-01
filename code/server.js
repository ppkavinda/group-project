#!/usr/bin/env node
const express = require('express')
const bodyParser = require('body-parser')
const mysql = require('mysql')
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'prasad',
    password: 'hondaz',
    database: 'athwela'
})
const app = express()
const port = 3000

const redis = require('redis')
const client = redis.createClient()

app.use(bodyParser.json())
app.use(bodyParser.urlencoded({
    extended: true
}))

app.post('*', (req, res) => {
    console.log('hit')
})

app.post('/checkout/notify', (req, res) => {
    let sql1 = `INSERT INTO payments 
                    (id, amount, currency, status_code, order_id, created_at, updated_at)
                VALUES (?, ?, ?, ?, ?, ?, ?)`

    let sql2 = `UPDATE orders SET payment_id=?, status=1 WHERE id=?`

    let data = [req.body.payment_id, req.body.payhere_amount, req.body.payhere_currency, req.body.status_code, req.body.order_id, new Date(), new Date()]

    connection.query(sql1, data, function (err, result) {
        if (!err) {
            console.log('inserted', result)
        }
    })
    connection.query(sql2, [req.body.payment_id, req.body.order_id])

    res.sendStatus(200)
})

app.listen(port, function () {
    console.log('server started')
})
