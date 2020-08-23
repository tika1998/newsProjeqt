import React from 'react';
import {Link} from 'react-router-dom';
export class ShowCategory extends React.Component {

    constructor(props) {
        super(props)
        console.log(props)
        //console.log(this.props.match.params.id)
        this.state = {
            newsCategory: []
        };
    }

    componentDidMount() {
        fetch('/api/news/' + this.props.match.params.id)
            .then(res =>
                res.json()
            )
            .then((resp) => {
                this.setState({
                    newsCategory: resp
                })
            })
            .catch(error => {
                console.log(error)
            })

    }

    render() {
        const newsCateg = this.state.newsCategory;
        const stDiv = {
            width: '100%'
        }
        return (
            <div className="col-lg-8 col-md-8 col-sm-8">
                <div className="left_content">
                    {
                        newsCateg.map(e => (
                            <div className="single_post_content" >

                                <h2><span>{e.category.name}</span></h2>
                                <div className="single_post_content_left" style={stDiv}>
                                    <ul className="business_catgnav  wow fadeInDown">
                                        <li>
                                            <figure className="bsbig_fig">
                                                <img style={stDiv} alt="" src={'/images/avatar/'+ `${e.avatar}`} /> <span className="overlay" />
                                                <span className="overlay"/>
                                                <h3>{e.title}</h3>
                                                <p>{e.short_description}</p>
                                                <p>{e.long_description}</p>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        ))
                    }
                </div>
            </div>
    );
    }
    }

