import React from "react";
import "./card.styles.css";
const Card = () => (
  <div class="container card w-50 toBot">
    <div class="row">
      <div class="col-sm-4 card-body ">
        <img
          src="http://coffeeshopjournal.com/wp-content/uploads/2011/02/Happy-Cat-150x150.jpg"
          alt=""
        />
      </div>
      <div class="col-sm-8">
        <h5 className="card-title toBot">
          <a href="/" className="noLine">
            The Happy Cat
          </a>
        </h5>
        <p className="card-text toBot">Meow Meow Meow Meow Meow Meow 🐱</p>
        <br />
        <a href="/" className="noLine" style={{ margin: "20px" }}>
          Like
        </a>
        <a className="noLine" href="/">
          Comment
        </a>
      </div>
    </div>
  </div>
);
export default Card;
