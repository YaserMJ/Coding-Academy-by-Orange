import React from "react";

const TodoItem = ({ todo, marking, del }) => {
  //==================================================Task Styles====================================================//
  const getStyle = () => {
    return {
      textDecoration: todo.isCompleted ? "line-through" : "none",
      backGround: "#f4f4f4",
      padding: "10px",
      borderBottom: "1px #ccc dotted",
      fontSize: "30px"
    };
  };
  //==================================================================================================================//
  const { id, title } = todo;
  return (
    <div style={getStyle()}>
      <p>
        <input type="checkbox" onChange={marking.bind(this, id)} /> {id}.{" "}
        {title}
        <button onClick={del.bind(this, id)} className="btnn">
          x
        </button>
      </p>
    </div>
  );
};

export default TodoItem;
