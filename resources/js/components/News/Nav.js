import React from 'react';
import {  Link } from 'react-router-dom';

export class Nav extends React.Component {
    render() {
        return (
            <section id="navArea">
                <nav className="navbar navbar-inverse" role="navigation">
                    <div className="navbar-header">
                        <button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span className="sr-only">Toggle navigation</span> <span className="icon-bar" /> <span className="icon-bar" /> <span className="icon-bar" /> </button>
                    </div>
                    <div id="navbar" className="navbar-collapse collapse">
                        <ul className="nav navbar-nav main_nav">
                            <li className="active"><a href="../index.html"><span className="fa fa-home desktop-home" /><span className="mobile-show">Home</span></a></li>
                            <li><a href="#">Technology</a></li>
                            <li className="dropdown"> <a href="#" className="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>
                                <ul className="dropdown-menu" role="menu">
                                    <li><a href="#">Android</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Nokia</a></li>
                                    <li><a href="#">Walton Mobile</a></li>
                                    <li><a href="#">Sympony</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Tablets</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="404.html">404 Page</a></li>
                        </ul>
                    </div>
                </nav>
            </section>
        );
    }
}

