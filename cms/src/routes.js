import {Routes, Route } from "react-router-dom";
import ChatList from "./pages/ChatList";

export default function RoutesApp() {
    return (
        <Routes>
            {/* <Route path="/" element={<MainApp />}>
                <Route path="/dashboard" element={<About />} />
                <Route path="/user" element={<User />} />
            </Route> */}
            <Route path="/chats" element={<ChatList />} />
        </Routes>
    );
}