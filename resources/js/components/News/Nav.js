import React from 'react';
import {  Link } from 'react-router-dom';

export class Nav extends React.Component {

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
                console.log(resp);
                this.setState({
                    news: resp.data
                })
                console.log(news)
            })
            .catch(error => {
                console.log(error)
            })

    }


    render() {
        const news1 = this.state.news;

        return (
            <section id="navArea">
                <nav className="navbar navbar-inverse" role="navigation">
                    <div className="navbar-header">
                        <button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span className="sr-only">Toggle navigation</span> <span className="icon-bar" /> <span className="icon-bar" /> <span className="icon-bar" /> </button>
                    </div>
                    <div id="navbar" className="navbar-collapse collapse">
                        <ul className="nav navbar-nav main_nav">
                            {
                                news1.map(e => (
                                    <li key={e.id}><Link to={'/post/'+ e.id}>{e.name}</Link></li>
                                ))
                            }
                            </ul>
                    </div>
                </nav>
            </section>
        );
    }
}

