import { useEffect, useState } from 'react'
import './style.css'

export default function Play(){

  const [score, setScore] = useState(0)
  const [question, setQuestion] = useState('Carregando...')
  const [options, setOptions] = useState(['alo', 'teste', 'sim', 'não'])
  const [answer, setAnswer] = useState('sim')
  const [time, setTime] = useState(30)
  const [clickedOnAnswer, setclickedOnAnswer] = useState(undefined)

  const checkAnswer = (option) =>{
    if(option === answer){
      setTime(0)
      setScore(time*10);
      setclickedOnAnswer(true);
    } else{
      setTime(0)
      setScore(0);
      setclickedOnAnswer(false);
    }
  }


  useEffect(()=>{

  }, [score])

  return (
    <div className="main-page">
      <div className="score"> 
        <div className="score-text">Pontos: {score}</div>
      </div>
      <div className="game-container">
        <div className="game-header">
          <div className="game-question">
            {question}
          </div>
          <div className="game-timer">
            Tempo: {time}
          </div>
        </div>
        <div className="game-content">
          {options.map((option) => {
            return(
              <div className="game-options" onClick={()=>{checkAnswer(option)}} style={{'backgroundColor': (clickedOnAnswer && option === answer) || option != answer ? 'green' : 'red'}}>
                {option}
              </div>
            )
            })}
        </div>
      </div>
    </div>
  )
}