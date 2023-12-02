import { Outlet } from 'react-router-dom';
import Header from "../header/Header";

export default function AppMain(){
    return (
        <div className="mainApp">
            <Header />
            <Outlet />
        </div>
    )
}