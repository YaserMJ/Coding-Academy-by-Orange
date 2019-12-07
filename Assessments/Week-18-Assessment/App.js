// Q2: App Component (there are 7 mistakes)

// WRITE || EDIT THE CODE UNDER THIS LINE
import Tasks from './components/Tasks';
import React,{Component} from 'react';

export default class App extends Component {
  state = {
    title: 'ELIZABETH GREENE',
    todos: ['eat', 'eat eat', 'eat again']
  };
  changeTitle() {
    // WRITE || EDIT THE CODE UNDER THIS LINE
    this.setState({title : 'AGGREGOR ZOLDYCK'})
    // state.title = 'AGGREGOR ZOLDYCK'
  }
  render() {
    return (
      <div>
      {/* WRITE || EDIT THE CODE UNDER THIS LINE */}
      {/* WRITE || EDIT THE CODE UNDER THIS LINE */}
      <h1>App Component: {this.state.title}</h1>
      {/* WRITE || EDIT THE CODE UNDER THIS LINE */}
      <button onClick={this.changeTitle}>Change Title</button>
      {/* WRITE || EDIT THE CODE UNDER THIS LINE*2 */}
      <Tasks tasks={this.state.todos} changeTitleFromChild={this.changeTitle} />
      </div>
    )
  }
}
