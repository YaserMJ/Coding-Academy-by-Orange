// Q4: Item Component (there are 3 mistakes)
import React, { Component } from 'react';
{/* WRITE || EDIT THE CODE UNDER THIS LINE */}
export default class Item extends Component {
  render() {
    return (
      <div>
        <h1>Item Component:</h1>
        {/* WRITE || EDIT THE CODE UNDER THIS LINE * 2 */}
        <p>
        {
          this.props.e
        }
        </p>
      </div>
    );
  }
}