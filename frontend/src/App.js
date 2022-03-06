import './App.css';
import Login from './pages/Login/index.jsx'
import Home from './pages/Home/index.jsx'
import Play from './pages/Play/index.jsx';
import {BrowserRouter, Route, Routes} from 'react-router-dom';


function App() {
  return (
    <div>
      <BrowserRouter>
          <Routes>
            <Route path="/login" element={<Login/>}/>
            <Route path="/" element={<Home/>}/>
            <Route path="/play" element={<Play/>}/>
          </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
