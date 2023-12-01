import ReactDOM from "react-dom/client";
import { BrowserRouter, Routes, Route } from "react-router-dom";
export default function RoutesApp() {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" >
                    {/*<Route index element={<Layout />} />*/}
                    {/*<Route path="about" element={<About />} />*/}
                </Route>
            </Routes>
        </BrowserRouter>
    );
}