import './Styles.css'
import { useEffect, useState } from 'react'
// import axios from 'axios';

function App() {
  const [name, setName] = useState('');
  const [mobile, setMobile] = useState('');
  const [email, setEmail] = useState('');
const [data, setData] = useState([]);
  const handleSubmit = () => {
    if (name.length === 0 || mobile.length === 0 || email.length === 0) {
      alert('All fields are required');
      return;
    } else {
      const url = "http://localhost:8080/info";

      const requestData = {
        name: name,
        mobile: mobile,
        email: email
      };

      console.log("Request Data:", requestData);

      fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(requestData)
      })
        .then(response => response.json())
        .then(data => {
          console.log("Response:", data);
          alert("Data saved successfully");
          getData();
        })
        .catch(error => {
          console.error("Error:", error);
          alert("An error occurred");
        });
    }
  }

  // get all data from database
  const getData = () => {
    const url = "http://localhost:8080/info";

    fetch(url, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json'
      },
    })
      .then(response => response.json())
      .then(data => {
        console.log("Response:", data);
        setData(data);
      })
      .catch(error => {
        console.error("Error:", error);
        alert("An error occurred");
      });
  }

  useEffect(() => {
    getData();
  }
    , []);
    console.log(data)
  return (
    <>
      <div className='container'>
        <label htmlFor="name">Name</label>
        <input type="text" name="name" id="name" value={name} onChange={(e) => setName(e.target.value)} required />
        <label htmlFor="mobile">Mobile</label>
        <input type="text" name="mobile" id="mobile" value={mobile} onChange={(e) => setMobile(e.target.value)} required />
        <label htmlFor="email">Email</label>
        <input type="email" name="email" id="email" value={email} onChange={(e) => setEmail(e.target.value)} required />
        <input onClick={handleSubmit} type="button" name="send" id="send" className='submit' value="SEND" />
      </div>
      <div className='info'>
        <h1>Previous info</h1>
        {
          data.map((item) => {
            console.log(item)
            return (
              <div key={item.id}>
                <h4>Name: {item.name}</h4>
                <p>Email: {item.email}</p>
                <p>Mobile:{item.mobile}</p>
                
                <hr />
                </div>
            )
          }
          )}
        
      </div>
    </>
  )
}

export default App;
