import React from "react";
import avt from "../assets/avt.jpeg";
const ProfileOverview = (props) => {
  return (
    <div
      className={`flex gap-5 items-center ${
        props.toggle
          ? "bg-none transition-all duration-300 delay-200"
          : "bg-white rounded-xl p-2"
      }`}
    >
      <img
        src={avt}
        className="min-w-[3.5rem] h-[3.5rem] rounded-full object-cover"
        alt="avatar-user-imgae"
      />
      <div className={`${props.toggle ? "opacity-0 delay-200" : ""}`}>
        <h3 className="text-xl">john tran</h3>
        <span className="text-[0.75rem] opacity-60">tantran@gmail.com</span>
      </div>
    </div>
  );
};

export default ProfileOverview;
