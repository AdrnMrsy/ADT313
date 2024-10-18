import * as React from 'react';
import * as ReactDOM from 'react-dom/client';
import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import './index.css';
import Login from './pages/Public/Login/Login';
import Register from './pages/Public/Register/Register'; // Import the Register component
import Dashboard from './pages/Main/Dashboard/Dashboard';
import Main from './pages/Main/Main';
import Movies from './pages/Main/Movies/Movies';
import Users from './pages/Main/Users/Users';

const router = createBrowserRouter([
  {
    path: '/',
    element: <Login />,
  },
  {
    path: '/register', // Added route for registration
    element: <Register />,
  },
  {
    path: '/main',
    element: <Main />,
    children: [
      {
        path: '/main/dashboard',
        element: <Dashboard />,
      },
      {
        path: '/main/users',
        element: <Users />,
      },
      {
        path: '/main/movies',
        element: <Movies />,
      },
    ],
  },
]);

function App() {
  return (
    <div className='App'>
      <RouterProvider router={router} />
    </div>
  );
}

export default App;
