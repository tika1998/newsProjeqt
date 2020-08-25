import React from 'react';

import {Header} from "./components/News/Header";
import {Nav} from "./components/News/Nav";
import {Slide} from "./components/News/Slide";
import {LastPost} from "./components/News/LastPost";
import {Category} from "./components/News/Category";
import {PopularPost} from "./components/News/PopularPost";
import {Footer} from "./components/News/Footer";
import {BrowserRouter, Switch, Route} from "react-router-dom";
import {ShowCategory} from "./components/News/ShowCategory";
import {AllNewsFan} from "./components/News/AllNewsFanc";

export class News extends React.Component {

    render() {
        return (
            <div>
                <Header/>

                <BrowserRouter>
                    <div>
                        <Nav/>
                            <Route exact path='/post/:id' component={ShowCategory} />
                    </div>
                </BrowserRouter>
                <section id="sliderSection">
                    <div className="row">
                        <Slide/>
                        <LastPost/>
                    </div>
                </section>

                <PopularPost/>
                <BrowserRouter>
                    <div>
                        <Category/>
                        <Route exact path='/news/:id' component={AllNewsFan} />
                    </div>
                </BrowserRouter>

                <Footer />
            </div>
        );
    }
}

