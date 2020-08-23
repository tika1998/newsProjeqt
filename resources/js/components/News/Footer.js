import React from 'react';

export class Footer extends React.Component {
    render() {
        return (
            <footer id="footer">
                <div className="footer_top">
                    <div className="row">
                        <div className="col-lg-4 col-md-4 col-sm-4">
                            <div className="footer_widget wow fadeInLeftBig">
                                <h2>Flickr Images</h2>
                            </div>
                        </div>
                        <div className="col-lg-4 col-md-4 col-sm-4">
                            <div className="footer_widget wow fadeInDown">
                                <h2>Tag</h2>
                                <ul className="tag_nav">
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Life &amp; Style</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Photo</a></li>
                                    <li><a href="#">Slider</a></li>
                                </ul>
                            </div>
                        </div>
                        <div className="col-lg-4 col-md-4 col-sm-4">
                            <div className="footer_widget wow fadeInRightBig">
                                <h2>Contact</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <address>
                                    Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="footer_bottom">
                    <p className="copyright">Copyright © 2045 <a href="../index.html">NewsFeed</a></p>
                    <p className="developer">Developed By Wpfreeware</p>
                </div>
            </footer>
        );
    }
}

