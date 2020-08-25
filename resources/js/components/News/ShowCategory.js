import React, {useState, useEffect} from 'react';

export const ShowCategory = props => {

    const [news, setNews] = useState([]);
    const [id, SetId] = useState(false);


    useEffect(() => {
        if (id !== props.match.params.id) {
            getNews();
        }
    });

    const getNews = () => {
        SetId(props.match.params.id);
        fetch('/api/news/' + props.match.params.id)
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
        <div className="col-lg-8 col-md-8 col-sm-8">
            <div className="left_content">
                {
                    news.map(e => (
                        <div className="single_post_content" key={e.id}>
                            <h2><span>{e.category}</span></h2>
                                        <figure className="bsbig_fig">
                                            <img style={stDiv} alt="" src={'/images/avatar/' + `${e.avatar}`}/> <span
                                            className="overlay"/>
                                            <span className="overlay"/>
                                            <h3>{e.title}</h3>
                                            <p>{e.short_description}</p>
                                            <p>{e.long_description}</p>
                                        </figure>
                        </div>
                    ))
                }
            </div>
        </div>
    );
}
