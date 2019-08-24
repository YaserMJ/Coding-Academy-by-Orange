import React from "react";

const List = props => (
  <ul style={{listStyleType : 'none'}}>
    {props.listItems.map((item, index) => (
      <li key={index}>{item}</li>
    ))}
  </ul>
);

export default List;
