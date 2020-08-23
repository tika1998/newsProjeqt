import React from 'react';

export class Slide extends React.Component {
    render() {
        return (

            <div className="col-lg-8 col-md-8 col-sm-8">
                <div className="slick_slider slick-initialized slick-slider">
                    <div className="slick-list draggable" tabIndex={0}><div className="slick-track" style={{opacity: 1, width: '4260px', transform: 'translate3d(-2130px, 0px, 0px)'}}><div className="single_iteam slick-slide slick-cloned" index={-1} style={{width: '710px'}}> <a href="pages/single_page.html"> <img src="images/slider_img1.jpg" alt="" /></a>
                        <div className="slider_article">
                            <h2><a className="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                        </div>
                    </div><div className="single_iteam slick-slide" index={0} style={{width: '710px'}}> <a href="pages/single_page.html"> <img src="https://filedn.com/ltOdFv1aqz1YIFhf4gTY8D7/ingus-info/BLOGS/Photography-stocks3/stock-photography-slider.jpg" alt="" /></a>
                        <div className="slider_article">
                            <h2><a className="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                        </div>
                    </div>
                        <div className="single_iteam slick-slide" index={1} style={{width: '710px'}}><a
                            href="pages/single_page.html"> <img src="images/slider_img2.jpg" alt=""/></a>
                            <div className="slider_article">
                                <h2><a className="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                    porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                        <div className="single_iteam slick-slide slick-active" index={2} style={{width: '710px'}}><a
                            href="pages/single_page.html"> <img src="images/slider_img3.jpg" alt=""/></a>
                            <div className="slider_article">
                                <h2><a className="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                    porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                        <div className="single_iteam slick-slide" index={3} style={{width: '710px'}}><a
                            href="pages/single_page.html"> <img src="images/slider_img1.jpg" alt=""/></a>
                            <div className="slider_article">
                                <h2><a className="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                    porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                        <div className="single_iteam slick-slide slick-cloned" index={4} style={{width: '710px'}}><a
                            href="pages/single_page.html"> <img src="images/slider_img4.jpg" alt=""/></a>
                            <div className="slider_article">
                                <h2><a className="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                    porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <button type="button" data-role="none" className="slick-prev" style={{display: 'block'}}>Previous</button>
                    <button type="button" data-role="none" className="slick-next" style={{display: 'block'}}>Next</button>
                    <ul className="slick-dots" style={{display: 'block'}}><li className="">
                        <button type="button" data-role="none">1</button></li><li className="">
                        <button type="button" data-role="none">2</button></li><li className="slick-active">
                        <button type="button" data-role="none">3</button></li><li className="">
                        <button type="button" data-role="none">4</button></li></ul></div>
            </div>
        );
    }
}

