import React from 'react';
import {  Link } from 'react-router-dom';

export class Category extends React.Component {

    constructor(props) {
        super(props)
        this.state = {
            news: []
        };
    }

    componentDidMount() {
        fetch('/api/newsAp')
            .then(res =>
                res.json()
            )
            .then((resp) => {
                this.setState({
                    news: resp.data
                })
            })
            .catch(error => {
                console.log(error)
            })
    }

    render() {
        const stDiv = {
            width: '100%'
        }

        const li = {
            marginLeft: '17px',
            width: '30%'
        }
        const ul = {
            display:'flex',
            flexWrap: 'wrap',
        }

        const news = this.state.news;
        return (
            <div className="col-lg-8 col-md-8 col-sm-8">
                <div className="left_content">
                    <div className="single_post_content">
                        <h2><span>All News</span></h2>
                        <div className="single_post_content_right" style={stDiv} >
                            <ul className="spost_nav" style={ul}>
                                {
                                    news.map(e => (
                                        <li style={li}>
                                            <div className="media wow fadeInDown">
                                                <img style={stDiv} alt="" src={'/images/avatar/' + `${e.avatar}`}/>
                                                <h5>{e.title}</h5>
                                                <p>{e.category}</p>
                                                <div className="media-body">
                                                    <Link href="#"  to={'/news/'+ e.id} className="catg_title">{e.short_description}</Link>
                                                </div>
                                            </div>
                                        </li>
                                    ))
                                }
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

