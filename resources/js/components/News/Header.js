import React from 'react';
import {BrowserRouter, Link, Route, Switch} from 'react-router-dom';
import {NewsList} from "./NewsList";
import { Home } from "../../indexx";

export class Header extends React.Component {

    render() {
        const link = {
            color: 'white'
        }

        const header = {
            display: 'flex',
            justifyContent: 'space-between',
            alignItems: 'center',
        }
        return (
            <header id="header">
                <div className="row">
                    <div className="col-lg-12 col-md-12 col-sm-12">
                        <div className="header_top" style={header}>
                            <div className="header_top_right">
                                <p>Friday, December 05, 2045</p>
                            </div>

                            <div>
                                <a href="/login" style={link}>Log In</a>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-12 col-md-12 col-sm-12">
                        <div className="header_bottom">
                            <div className="logo_area"><a href="../index.html" className="logo"><img src="../images/logo.jpg" alt="" /></a></div>
                            <div className="add_banner"><a href="#"><img src="../images/addbanner_728x90_V1.jpg" alt="" /></a></div>
                        </div>
                    </div>
                </div>
            </header>
        );
    }
}
