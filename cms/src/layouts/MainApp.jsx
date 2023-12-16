import { Outlet } from "react-router-dom";
import SideBar from "./SideBar";

const MainApp = () => {
  return (
    <div className="w-full h-screen object-cover flex">
        <SideBar />
        <div className="main-content w-full">
            <Outlet />
        </div>
    </div>
  );
};

export default MainApp;
