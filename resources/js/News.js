import React from 'react';
import ReactDOM from 'react-dom';
import {Link} from 'react-router-dom';
import {NewsList} from "./components/News/NewsList";
import {Header} from "./components/News/Header";
import {Nav} from "./components/News/Nav";
import {LastNews} from "./components/News/LastNews";
import {Slide} from "./components/News/Slide";
import {LastPost} from "./components/News/LastPost";
import {Category} from "./components/News/Category";
import {PopularPost} from "./components/News/PopularPost";
import {Footer} from "./components/News/Footer";


export class News extends React.Component {

    render() {
        return (
            <div>
                <Header/>
                <Nav/>
                <LastNews/>
                <section id="sliderSection">
                    <div className="row">
                        <Slide/>
                        <LastPost/>
                    </div>
                </section>
                <Category/>

                <PopularPost/>

                <Footer />
            </div>
        );
    }
}

