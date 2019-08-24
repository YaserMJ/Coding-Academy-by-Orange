import React, { Component } from 'react';
import './App.css';
import List from './components/List.component';

export default class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      word: '',
      listItems: []
    };
  }

  onChange = (event) => {
    this.setState({ word: event.target.value });
  }

  onSubmit = (event) => {
    event.preventDefault();
    this.setState({
      word: '',
      listItems: [...this.state.listItems, this.state.word]
    });
  }

  render() {
    return (
      <center style={{margin : '250px'}}>
      <h1>To do list : </h1>
      <div>
        <form className="App" onSubmit={this.onSubmit}>
          <input value={this.state.word} onChange={this.onChange} />
          <button>Submit</button>
        </form>
        <List listItems={this.state.listItems} />
      </div>
      </center>
    );
  }
}