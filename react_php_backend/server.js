const express = require('express');
const mysql = require('mysql');
const cors = require('cors');

const app = express();
app.use(cors());
app.use(express.json());

const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "react_php_backend"
});

// getting data from database

app.get('/info', (req, res) => {
    const sql = "SELECT * FROM info";

    db.query(sql, (err, result) => {
        if (err) {
            console.error(err);
            return res.json("Error");
        }
        return res.json(result);
    });
});

app.post('/info', (req, res) => {
    const { name, mobile, email } = req.body;

    if (!name || !mobile || !email) {
        return res.status(400).json({ error: "All fields are required." });
    }

    const sql = "INSERT INTO info (`name`, `mobile`, `email`) VALUES (?, ?, ?)";
    const values = [name, mobile, email];

    db.query(sql, values, (err, result) => {
        if (err) {
            console.error(err);
            return res.json("Error");
        }
        return res.json(result);
    });
});


app.listen(8080, () => {
    console.log("Server is running on port 8080");
});