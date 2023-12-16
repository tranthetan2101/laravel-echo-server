import "../styles/btn.css"

const MainButton = (props) => {
    const handleClick = () => {
        props.action();
    }
  return (
    <div className='btn-action'>
        <button type="button" className={`btn ${props.customStyle}`} onClick={handleClick}>{props.text}</button>
    </div>
  )
}

export default MainButton