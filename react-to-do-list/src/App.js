import React, { Component } from "react";
import "./App.css";
//==========================================Components Import============================================//
import List from "./components/List.component";
import Add from "./components/Add.component";
//==========================================Main App Component==========================================//
class App extends Component {
  state = {
    todos: [
      {
        id: 1,
        title: "Buy Coffee",
        isCompleted: false
      },
      {
        id: 2,
        title: "Go to Academy",
        isCompleted: true
      },
      {
        id: 3,
        title: "Become sad",
        isCompleted: false
      }
    ]
  };
  //===================================CheckBox and strike toggle=======================================//
  markComplete = id => {
    this.setState({
      todos: this.state.todos.map(todo => {
        if (todo.id === id) {
          todo.isCompleted = !todo.isCompleted;
        }
        return todo;
      })
    });
  };
  //============================================Add method==============================================//
  add = title => {
    const task = {
      id: this.state.todos.length + 1,
      title: title,
      isCompleted: false
    };
    this.setState({ todos: [...this.state.todos, task] });
  };
  //=========================================Delete method==============================================//
  del = id => {
    this.setState({
      todos: [...this.state.todos.filter(todo => todo.id !== id)]
    });
  };
  //============================================Render==================================================//
  render() {
    return (
      <div className="App">
        <h1 className="header">React to do list</h1>
        <Add add={this.add} />
        <List
          todos={this.state.todos}
          markComplete={this.markComplete}
          del={this.del}
        />
      </div>
    );
  }
}

export default App;
