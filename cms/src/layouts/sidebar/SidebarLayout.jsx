import {Menu} from "antd";

export function SidebarLayout(){
    return (
        <div className="sidebar-menu" style={{width: "20vh", borderRight: "1px #9BB8CD solid"}}>
            <Menu items={[
                {label: "Dashboard"},
                {label: "User"},
                {label: "Banner"},
                {label: "Setting"},
            ]}/>
        </div>
    )
}