import React, { Component } from "react";

class Add extends Component {
  state = {
    title: ""
  };
  //================================Input Value function======================================//
  handleChange = e => {
    this.setState({ [e.target.name]: e.target.value });
  };
  //==============================Form Submition function=====================================//
  handleSubmit = e => {
    e.preventDefault();
    this.props.add(this.state.title);
    this.setState({ title: "" });
  };
  //==========================================================================================//
  render() {
    return (
      <form onSubmit={this.handleSubmit} >
        <input
          className="input"
          type="text"
          name="title"
          value={this.state.title}
          onChange={this.handleChange}
        />
        <button 
        className="input"
        type="submit">
          Add
        </button>
      </form>
    );
  }
}

export default Add;
