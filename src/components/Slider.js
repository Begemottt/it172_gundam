// Showcase.js
// A component for rendering and managing a rotating ad showcase on a commercial website
import anime from "animejs";
import React, { useState } from "react";

export default function Slider(){
    // State declaration for the ads, an array of objects to be mapped later
    const [ads, changeAds] = useState([
        {link:"zeta_gundam.php", image: "ad_zeta_revive.png"}, 
        {link:"unit_00.php", image: "ad_unit_00.png"}, 
        {link:"tallgeese.php", image: "ad_tallgeese.png"}
    ]);
    // Animations functions for bumping the buttons when they are clicked
    const bumpLeft = () => {
        anime({
            targets: "#left_button",
            left: '-=5',
            direction: "alternate",
            easing: 'linear',
            duration: 75
        })
    }
    const bumpRight = () => {
        anime({
            targets: "#right_button",
            right: '-=5',
            direction: "alternate",
            easing: 'linear',
            duration: 75
        })
    }
    // Animation functions for shift the showcase element when the button is clicked
    const shiftLeft = () => {
        anime({
            targets: '#showcase',
            translateX: [
                {value: "=-100vw", duration: 0},
                {value: 0, duration: 1000},
                {value: "-100vw", duration: 0, easing:"steps(1)"}
            ],
            easing: 'easeInOutQuint'
        })
    }
    const shiftRight = () => {
        anime({
            targets: '#showcase',
            translateX: [
                {value: "-100vw", duration: 0},
                {value: "-200vw", duration: 1000},
                {value: "-100vw", duration: 0, easing:"steps(1)"}
            ],
            easing: 'easeInOutQuint',
        })
    }
    // Functions for the buttons!
    const goLeft = () => {
        bumpLeft();
        shiftLeft();
        deactiveButtons();
        reset("left");
    }
    const goRight = () => {
        bumpRight();
        shiftRight();
        deactiveButtons();
        reset("right");
    }
    // Reset function to set new locations for ads, so it can loop!
    const reset = direction => {
        let current_left = ads[0];
        let current_center = ads[1];
        let current_right = ads[2];
        let newArray = [];
        if (direction === "left"){
            newArray = [current_right, current_left, current_center];
        } else if(direction === "right"){
            newArray = [current_center, current_right, current_left];
        }
        setTimeout(() => {
            changeAds(newArray);
            activateButtons();
        }, 999);
    }
    // State delcaration for the button deactivation function
    const [blurButtons, changeBlurButtons] = useState(false);
    const activateButtons = () => {
        changeBlurButtons(false);
        }
    const deactiveButtons = () => {
        changeBlurButtons(true);
    }
    return(
        <>
        <button disabled={blurButtons} id="left_button" onClick={()=>goLeft()}></button>
        <article id="showcase">
        {ads.map((ad, i)=>(
            <a key={i} href={ad.link}>
                <section>
                    <img src={"images/" + ad.image} />
                </section>
            </a>
        ))}
        </article>
        <button disabled={blurButtons} id="right_button" onClick={()=>goRight()}></button>
        </>
    )
}