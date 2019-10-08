import React, { Component } from 'react';

class UserOutput extends Component {
    state = { 
        username : 'hehe'
     }
    render() { 
        return (
            <div>
                <p>{this.props.name}</p>
                <p onChange={this.changeName}>I love food!</p>
            </div>
          );
    }
    onChange=()=>{
        this.setState({
            term: '',
            items: [...this.state.items, this.state.term]
          });
        }
}
 
export default UserOutput;
