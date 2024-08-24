import logo from './logo.svg';
import './App.css';

import Description from './component/UserInformation/Desc/Desc';
import Section from './component/UserInformation/Section/Section';
import Name from './component/UserInformation/Name/MyName';
import { useState } from 'react';
function App() {
  const [UserInformation,setUserInformation] = useState({firstName: "Adrian Morrissey",
    middleInitial:"F.",
    lastName:"Belo",
    section:"BSCS3A",
    description:"lowkey",})
    const [moon,setMoon] = useState('moon')


  function updateName(){
    UserInformation.firstName = 'Ady ';
    setUserInformation({...UserInformation})
    return UserInformation;
  }
   function moveMoon(){
    setMoon("moonMove")
   }
  return (
    <div className="App">
      <div className='App'>
        <Name
        firstName={UserInformation.firstName}
        middleInitial={UserInformation.middleInitial}
        lastName={UserInformation.lastName}
        />
        <Section
        section={UserInformation.section}
        />
        <Description
        description={UserInformation.description}
        />
        <div className={moon}>

        </div>
        <button type='button' onClick={updateName}>updateName</button>
        <button type='button' onClick={moveMoon}>move the moon</button>
      </div>
    </div>
  );
}

export default App;
