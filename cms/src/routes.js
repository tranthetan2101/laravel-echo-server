import {Routes, Route } from "react-router-dom";
import Login from "./pages/auth/Login"
import {AppMain} from "./layouts/main/AppMain";
export default function RoutesApp() {
    return (
        <Routes>
            <Route path="/login" element={<Login />} />
            <Route path="/" element={<AppMain />}>
            </Route>
        </Routes>
    );
}