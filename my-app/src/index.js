import ReactDOM from "react-dom";
import { App } from "./App";

ReactDOM.render(  
    // 関数名をHTMLのように囲むことで「コンポーネント」として扱う
    <>
        <App />
    </>,
    document.getElementById("root") // public/index.html内のid"root"のdivタグを示す
);