import React from "react";
import TodoItem from "./TodoItem.component";
const List = ({todos,del,markComplete}) => {
  return (
    <div>
      {todos.map(todo => (
        <TodoItem
          key={todo.id}
          todo={todo}
          marking={markComplete}
          del={del}
        />
      ))}
    </div>
  );
};

export default List;
