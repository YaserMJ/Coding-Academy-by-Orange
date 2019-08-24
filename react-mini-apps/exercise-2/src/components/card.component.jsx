import React from "react";

const Card = ({name,email,num,handleClick}) => (
  <div className="card" style={{ width: "18rem" }}>
    <div className="card-body">
      <h5 className="card-title">{name}</h5>
      <p className="card-text">{email}</p>
      <p className="card-text">{num}</p>
      <a href="/"
     
      className="btn btn-primary">
        Click to view details
      </a>
    </div>
  </div>
);
export default Card;
