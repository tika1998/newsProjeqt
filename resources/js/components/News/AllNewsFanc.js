import React, {useState, useEffect} from 'react';

export const AllNewsFan = props => {

    const [news, setNews] = useState([]);
    const [id, SetId] = useState(false);

    useEffect(() => {
        if (id !== props.match.params.id) {
            getNews();
        }
    });

    const getNews = () => {
        SetId(props.match.params.id);
        fetch('/api/post/' + props.match.params.id)
            .then(res =>
                res.json()
            )
            .then((news) => {
                setNews(news.data);
            })
            .catch(error => {
                console.log(error)
            })
    }

    const stDiv = {
        width: '100%'
    }
    console.log(news)

    return (
        <div className="col-lg-5 col-md-5 col-sm-5 float-right">
            <div className="left_content">
                {

                        <div className="single_post_content" key={news.id}>
                            <h2><span>{news.category}</span></h2>
                            <div className="single_post_content_left" style={stDiv}>
                                <ul className="business_catgnav  wow fadeInDown">
                                    <li>

                                        <figure className="bsbig_fig">
                                            <img style={stDiv} alt="" src={'/images/avatar/' + `${news.avatar}`}/> <span
                                            className="overlay"/>
                                            <span className="overlay"/>
                                            <p>{news.short_description}</p>
                                            <p>{news.long_description}</p>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>

                }
            </div>
        </div>
    );
}
