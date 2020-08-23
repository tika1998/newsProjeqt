import React from 'react';


export class LastPost extends React.Component {
    render() {
        return (

            <div className="col-lg-4 col-md-4 col-sm-4">
                <div className="latest_post">
                    <h2><span>Latest post</span></h2>
                    <div className="latest_post_container">
                        <ul className="latest_postnav">
                            <li>
                                <div className="media"> <a href="pages/single_page.html" className="media-left"> <img alt="" src="images/post_img1.jpg" /> </a>
                                    <div className="media-body"> <a href="pages/single_page.html" className="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                                </div>
                            </li>

                            <li>
                                <div className="media"> <a href="pages/single_page.html" className="media-left"> <img alt="" src="images/post_img1.jpg" /> </a>
                                    <div className="media-body"> <a href="pages/single_page.html" className="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                </div>
                            </li>
                            <li>
                                <div className="media"> <a href="pages/single_page.html" className="media-left"> <img alt="" src="images/post_img1.jpg" /> </a>
                                    <div className="media-body"> <a href="pages/single_page.html" className="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                </div>
                            </li>
                            <li>
                                <div className="media"> <a href="pages/single_page.html" className="media-left"> <img alt="" src="images/post_img1.jpg" /> </a>
                                    <div className="media-body"> <a href="pages/single_page.html" className="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                </div>
                            </li>
                            <li>
                                <div className="media"> <a href="pages/single_page.html" className="media-left"> <img alt="" src="images/post_img1.jpg" /> </a>
                                    <div className="media-body"> <a href="pages/single_page.html" className="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        );
    }
}

