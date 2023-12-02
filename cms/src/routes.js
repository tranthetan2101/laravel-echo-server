import {Routes, Route } from "react-router-dom";
import Login from "./pages/auth/Login"
import AppMain from "./containers/app/AppMain";
import Dashboard from "./pages/Dashboard";
import About from "./pages/About";
export default function RoutesApp() {
    return (
        <Routes>
            <Route path="/login" element={<Login />} />
            <Route path="/" element={<AppMain />}>
                <Route index element={<Dashboard />} />
                <Route path="/about" element={<About />} />
            </Route>
        </Routes>
    );
}