import { useState } from "react";
import "../styles/sidebar.css";
import { BiChevronLeft } from "react-icons/bi";
import ProfileOverview from "./ProfileOverview";
import { SIDEBAR_ITEMS } from "../contants/SideBarItem";

const SideBar = () => {
  const [toggle, setToggle] = useState(false);
  return (
    <div className={`${toggle ? "w-[5rem]" : "w-[20rem]"} sidebar-container`}>
      <ProfileOverview toggle={toggle} />
      <div className="nav-">
        <ul>
          {SIDEBAR_ITEMS.map((item) => {
            return (
              <li
                className={`${
                  toggle ? "last:w-[3.6rem]" : "last:w-[17rem]"
                } sidebar-item left-4 bottom-4`}
                key={item.text}
              >
                <a href={`/${item.path}`} className="flex">
                  <div className="mr-5 text-[1.5rem] text-brown">
                    {item.icon}
                  </div>
                  <div
                    className={`${
                      toggle ? "opacity-0 delay-200" : ""
                    } text-[1rem] text-brown whitespace-pre`}
                  >
                    {item.text}
                  </div>
                </a>
              </li>
            );
          })}
        </ul>
      </div>
      <div
        className="btn-toggle"
        onClick={() => {
          setToggle(!toggle);
        }}
      >
        <BiChevronLeft
          className={`${
            toggle ? "rotate-180" : ""
          } text-3xl transition-all duration-300`}
        />
      </div>
    </div>
  );
};
export default SideBar;
