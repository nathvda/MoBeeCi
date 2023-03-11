import React from "react";
import "./Register.scss";

const Register = () => {
  return (
    <div className="register-page">
      <form action="">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />
        <label htmlFor="password">Password</label>
        <input type="password" id="password" name="password" />
        <label htmlFor="password_confirmation">Confirm password</label>
        <input
          type="password"
          id="password_confirmation"
          name="password_confirmation"
        />
        <button type="submit">
          <b>Confirm</b>
        </button>
      </form>
    </div>
  );
};

export default Register;
