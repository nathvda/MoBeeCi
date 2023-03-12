import React from "react";
import useFetch from "react-fetch-hook";
import "./Suggestions.scss";

const Suggestions = () => {
  const API_URL = "http://127.0.0.1:8000/suggestions";
  const { isLoading, data } = useFetch(API_URL);

  return (
    <div className="suggestions-page">
      {isLoading ? (
        <p>Loading...</p>
      ) : (
        <ul>
          {data.results.map((suggestion) => (
            <li>
              <p>{suggestion.description}</p>
            </li>
          ))}
        </ul>
      )}
    </div>
  );
};

export default Suggestions;
