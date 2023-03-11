import React from "react";
import "./Login.scss";

const Login = () => {
  return (
    <div className="login-page">
      <form action="">
        <label htmlFor="email">Email</label>
        <input className="email" type="email" name="email" id="email" />
        <label htmlFor="password">Password</label>
        <input
          className="password"
          type="password"
          name="password"
          id="password"
        />
        <button className="login" type="submit">
          <b>Login</b>
        </button>
      </form>
    </div>
  );
};

export default Login;
