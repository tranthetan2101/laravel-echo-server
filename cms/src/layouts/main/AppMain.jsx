import {SidebarLayout} from "../sidebar/SidebarLayout";
import {Outlet, useNavigate} from "react-router-dom";
import {HeaderLayout} from "../header/HeaderLayout";

export function AppMain(){
    const navigated = useNavigate();
    return (
        <div style={{display: "flex",
            flexDirection: "column",
            flex: 1,
            height: '100vh'
        }}>
            <div className="header-layout">
                <HeaderLayout/>
            </div>
            <div className="main-layout" style={{display: "flex", flexDirection: "row", flex: 1}}>
                <SidebarLayout/>
                <div className="page-content">
                    <Outlet/>
                </div>
            </div>
        </div>
    )
}