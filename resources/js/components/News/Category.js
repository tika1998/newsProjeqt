import React from 'react';

export class Category extends React.Component {

    constructor(props) {
        super(props)
        this.state = {
            news: []
        };
    }

    componentDidMount() {
        fetch('/api/category')
            .then(res =>
                res.json()
            )
            .then((resp) => {
                this.setState({
                    news: resp
                })
            })
            .catch(error => {
                console.log(error)
            })

    }

    render() {
        return (
            <div className="col-lg-8 col-md-8 col-sm-8">
                <div className="left_content">
                    <div className="single_post_content">
                        <h2><span>Business</span></h2>
                        <div className="single_post_content_left">
                            <ul className="business_catgnav  wow fadeInDown">
                                <li>
                                    <figure className="bsbig_fig"> <a href="pages/single_page.html" className="featured_img"> <img alt="" src="images/featured_img1.jpg" /> <span className="overlay" /> </a>
                                        <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <div className="single_post_content_right">
                            <ul className="spost_nav">
                                <li>
                                    <div className="media wow fadeInDown"> <a href="pages/single_page.html" className="media-left"> <img alt="" src="images/post_img1.jpg" /> </a>
                                        <div className="media-body"> <a href="pages/single_page.html" className="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div className="media wow fadeInDown"> <a href="pages/single_page.html" className="media-left"> <img alt="" src="images/post_img2.jpg" /> </a>
                                        <div className="media-body"> <a href="pages/single_page.html" className="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div className="media wow fadeInDown"> <a href="pages/single_page.html" className="media-left"> <img alt="" src="images/post_img1.jpg" /> </a>
                                        <div className="media-body"> <a href="pages/single_page.html" className="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div className="media wow fadeInDown"> <a href="pages/single_page.html" className="media-left"> <img alt="" src="images/post_img2.jpg" /> </a>
                                        <div className="media-body"> <a href="pages/single_page.html" className="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

