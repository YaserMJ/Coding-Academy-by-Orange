import React, {
  Component
} from 'react';
import Add from './components/Add';
import Table from './components/Table';
import axios from 'axios';

// =========================================Imports===================================================//
export default class App extends Component {
  state = {
    repos: []
  };
  //========================================Mounting================================================//
  componentDidMount() {
    axios.get('http://localhost:9000/data')
      .then(({
        data
      }) => {
        console.log(data);
        this.setState({
          repos: data
        })
      })
      .catch(function (error) {
        console.log(error.message);
      })
  }
  //========================================Add function================================================//
  add = (title, language, status) => {
    axios.post('http://localhost:9000/add', {
        title,
        language,
        status
      })
      .then((response) => {
        this.setState({
          repos: response.data
        })
      })
      .catch(function (error) {
        console.log(error);
      });
    // to be added to repos array
    // const newRepo = {
    //   id: this.state.repos.length + 1,
    //   title: title,
    //   status: status,
    //   language: language
    // }
    // this.setState({
    //   repos: [...this.state.repos, newRepo]
    // })
    // console.log(this.state.repos)
  }
  //========================================Del function=================================================//
  del = id => {
    axios.delete(`http://localhost:9000/delete/${id}`)
      .then(({
        data
      }) => {
        // this.setState({
        // repos: [...this.state.repos.filter(rep => rep.id !== id)]
        this.setState({
          repos: data
        })
        // })

      })

  };
  //======================================Toggle Function================================================//
  handleToggle = ID => {
    axios.get(`http://localhost:9000/edit/${ID}`)
    .then((response)=>{
      this.setState({repos : response.data})
    })
  }
  //=====================================================================================================//
  render() {
    return ( 
      <div style = {{ border: 'black 1px solid'}}>
        <h1 style = {
         {textAlign: 'center'}}> Github List </h1>
        <Add add = {this.add}/>
        <Table toggle = {this.handleToggle} del = {this.del} repos = {this.state.repos}/> 
      </div>
    );
  }
}