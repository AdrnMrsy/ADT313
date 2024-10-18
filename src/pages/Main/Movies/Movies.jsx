import React, { useEffect, useState } from 'react';
import axios from 'axios';
import './Movies.css';

const Movies = () => {
  const [movies, setMovies] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);
  const [newMovie, setNewMovie] = useState({
    title: '',
    overview: '',
    releaseDate: '',
    posterPath: '',
    voteAverage: '',
  });

  // Fetch movies from the API
  useEffect(() => {
    fetchMovies();
  }, []);

  const fetchMovies = async () => {
    setLoading(true);
    try {
      const response = await axios.get('http://localhost:3000/movies');
      setMovies(response.data);
      setLoading(false);
    } catch (error) {
      console.error("There was an error fetching the movies!", error);
      setError("Error fetching movies");
      setLoading(false);
    }
  };

  const handleInputChange = (e) => {
    const { name, value } = e.target;
    setNewMovie({ ...newMovie, [name]: value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      await axios.post('http://localhost:3000/movies', newMovie);
      fetchMovies(); // Refresh the movie list after adding a new movie
      setNewMovie({ title: '', overview: '', releaseDate: '', posterPath: '', voteAverage: '' }); // Clear form
    } catch (error) {
      console.error("Error adding movie:", error);
      setError("Error adding movie");
    }
  };

  if (loading) return <p>Loading movies...</p>;
  if (error) return <p>{error}</p>;

  return (
    <div>
      <h1>Movie List</h1>
      <div className="movie-grid">
        {movies.map((movie) => (
          <div key={movie.id} className="movie-card">
            <h2>{movie.title}</h2>
            <img
              src={`http://localhost:8000/${movie.posterPath}`}
              alt={movie.title}
              style={{ width: '200px', height: '300px' }}
            />
            <p>{movie.overview}</p>
            <p><strong>Release Date:</strong> {movie.releaseDate}</p>
            <p><strong>Vote Average:</strong> {movie.voteAverage}</p>
          </div>
        ))}
      </div>

      {/* Add Movie Form */}
      <h2>Add a New Movie</h2>
      <form onSubmit={handleSubmit}>
        <div>
          <label>Title:</label>
          <input
            type="text"
            name="title"
            value={newMovie.title}
            onChange={handleInputChange}
            required
          />
        </div>
        <div>
          <label>Overview:</label>
          <textarea
            name="overview"
            value={newMovie.overview}
            onChange={handleInputChange}
            required
          />
        </div>
        <div>
          <label>Release Date:</label>
          <input
            type="date"
            name="releaseDate"
            value={newMovie.releaseDate}
            onChange={handleInputChange}
            required
          />
        </div>
        <div>
          <label>Poster Path:</label>
          <input
            type="text"
            name="posterPath"
            value={newMovie.posterPath}
            onChange={handleInputChange}
            required
          />
        </div>
        <div>
          <label>Vote Average:</label>
          <input
            type="number"
            name="voteAverage"
            value={newMovie.voteAverage}
            onChange={handleInputChange}
            required
            step="0.1"
            min="0"
            max="10"
          />
        </div>
        <button type="submit">Add Movie</button>
      </form>
    </div>
  );
};

export default Movies;
