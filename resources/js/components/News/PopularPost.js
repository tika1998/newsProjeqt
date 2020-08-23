import React from 'react';

export class PopularPost extends React.Component {
    render() {
        return (
            <div className="col-lg-4 col-md-4 col-sm-4">
                <aside className="right_content">
                    <div className="single_sidebar">
                        <h2><span>Popular Post</span></h2>
                        <ul className="spost_nav">
                            <li>
                                <div className="media wow fadeInDown"><a href="pages/single_page.html"
                                                                         className="media-left"> <img alt=""
                                                                                                      src="images/post_img1.jpg"/>
                                </a>
                                    <div className="media-body"><a href="pages/single_page.html"
                                                                   className="catg_title"> Aliquam malesuada diam eget
                                        turpis varius 1</a></div>
                                </div>
                            </li>
                            <li>
                                <div className="media wow fadeInDown"><a href="pages/single_page.html"
                                                                         className="media-left"> <img alt=""
                                                                                                      src="images/post_img2.jpg"/>
                                </a>
                                    <div className="media-body"><a href="pages/single_page.html"
                                                                   className="catg_title"> Aliquam malesuada diam eget
                                        turpis varius 2</a></div>
                                </div>
                            </li>
                            <li>
                                <div className="media wow fadeInDown"><a href="pages/single_page.html"
                                                                         className="media-left"> <img alt=""
                                                                                                      src="images/post_img1.jpg"/>
                                </a>
                                    <div className="media-body"><a href="pages/single_page.html"
                                                                   className="catg_title"> Aliquam malesuada diam eget
                                        turpis varius 3</a></div>
                                </div>
                            </li>
                            <li>
                                <div className="media wow fadeInDown"><a href="pages/single_page.html"
                                                                         className="media-left"> <img alt=""
                                                                                                      src="images/post_img2.jpg"/>
                                </a>
                                    <div className="media-body"><a href="pages/single_page.html"
                                                                   className="catg_title"> Aliquam malesuada diam eget
                                        turpis varius 4</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        );
    }
}

