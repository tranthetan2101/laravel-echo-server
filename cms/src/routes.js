import {Routes, Route } from "react-router-dom";
import MainApp from "./layouts/MainApp"
import About from "./pages/about"
import User from "./pages/user";

export default function RoutesApp() {
    return (
        <Routes>
            <Route path="/" element={<MainApp />}>
                <Route path="/dashboard" element={<About />} />
                <Route path="/user" element={<User />} />
            </Route>
        </Routes>
    );
}