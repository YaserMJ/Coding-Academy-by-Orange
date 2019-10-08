import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import 'bootstrap/dist/css/bootstrap.css';
import UserInput from './components/UserInput';
import UserOutput from './components/UserOutput';

class App extends Component {
  state = { 
    username : 'Max'
   }
  render() { 
    return ( 
      <div className="App">
      <UserInput/>
      <UserOutput name="Yaser passed by props"/>
      <UserOutput/>

    </div>
     );
  }
  changeIt=()=>{
    const name= this.state.username;
    return name;
  }
}
 
export default App;