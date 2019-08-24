import React from "react";
import logo from "./logo.svg";
import "./App.css";
import "bootstrap/dist/css/bootstrap.css";
import CardList from './components/card-list.component'
import Info from './components/info.component'
function App() {
  return (
    <div>
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
        </header>
      </div>
      <div className="container-fluid">
        <div className="row">
          <div className="col-sm-6">
            <CardList />
          </div>
          <div className="col-sm-6">
            <Info />
          </div>
        </div>
      </div>

    </div>
   
  );
}

export default App;
