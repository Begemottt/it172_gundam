import * as $ from 'jquery';
import '../scss/styles.scss';
import React from "react";
import ReactDOM from "react-dom";
import Slider from "./components/Slider";

const showcase_root = document.getElementById("showcase_wrapper");
ReactDOM.render(
    <React.StrictMode>
        <Slider />
    </React.StrictMode>,
    showcase_root
)

// A bit of code I found on stackoverflow that makes buttons unfocus after you press them. Handy!
document.addEventListener('click', function(e) { if(document.activeElement.toString() == '[object HTMLButtonElement]'){ document.activeElement.blur(); } });