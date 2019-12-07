 const express = require('express');
const cors = require('cors');
const app = express();
//=============================================================================================//
app.use(cors());
app.use(express.json());
//======================================GET DATA===============================================//
app.get('/', (req, res) => {
  console.log("SERVER HEHE")
})

app.get('/data', (req, res) => {
  res.json(array);
});
//=====================================ADD DATA================================================//
app.post('/add', (req, res) => {
  console.log('ADD', 'ADD TASK');
  console.log('REQ', req)

  let newTask = {
    title: req.body.title,
    status: req.body.status,
    id: ++arrId,
    language: req.body.language
  }
  array.push(newTask);
  res.json(array);
})
//=====================================Edit DATA================================================//
app.get('/edit/:ID', (req, res) => {
  console.log(req.params.ID);
  let ID = parseInt(req.params.ID);
  array.map(arr => {
    if (arr.id === ID) {
      if (arr.status === 'Private') {
        arr.status = 'Public'
      } else {
        arr.status = 'Private'
      }
    }
    return arr
  })
  res.json(array)
})
//=====================================Delete DATA================================================//
app.delete('/delete/:ID', (req, res) => {
  let deleted = parseInt(req.params.ID);
  array = array.filter((elem, i) => {
    return deleted !== elem.id;
  })
  res.json(array)
})
//===================================PORT LISTENING================================================//
const PORT = 9000;
app.listen(PORT, () => console.log(`Server listening to ${PORT}`));
//=====================================DATABASE====================================================//
let array = [{
    id: 1,
    title: 'Array',
    status: 'Private',
    language: 'HTML',
  },
  {
    id: 2,
    title: 'Object',
    status: 'Public',
    language: 'JavaScript',
  },
  {
    id: 3,
    title: 'Sawsan',
    status: 'Public',
    language: 'hehe',
  },
  {
    id: 4,
    title: 'LOL',
    status: 'Private',
    language: 'xD',
  }
]
let arrId = array.length // for id 