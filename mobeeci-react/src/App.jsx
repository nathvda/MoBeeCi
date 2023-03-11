import React from "react";
import Home from "./assets/pages/Home/Home.jsx";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Register from "./assets/pages/Register/Register.jsx";
import Login from "./assets/pages/Login/Login.jsx";

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/register" element={<Register />} />
          <Route path="/login" element={<Login />} />
          <Route path="*" element={<Home />} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
