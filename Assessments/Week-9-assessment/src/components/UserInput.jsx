import React, { Component } from 'react';

// Sorry :) 
class Input extends Component {
    constructor(){
        super()
        this.items = [];
        this.term = '';
       
    }
    state = { 
        items : [],
        term : ''

     }
    render() { 
        return (
            <div>
                <small>Please enter something :</small> <br/>
                <input onKeyUp={this.changeName()} type="text"/>
            </div>
          );
    }
    onChange=()=>{
        this.setState({
            term: '',
            items: [...this.state.items, this.state.term]
          });
        }
        changeName=(value)=>{
            this.state.items.push(value);        }
    }
 
export default Input ;