import React from "react";
import "./Home.scss";

const Home = () => {
  return (
    <div className="home">
      <a href="/login">
        <button className="login-home">
          <b>Login</b>
        </button>
      </a>

      <a href="/register">
        <button className="register-home">
          <b>Register</b>
        </button>
      </a>
    </div>
  );
};

export default Home;
