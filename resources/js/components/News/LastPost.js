import React from 'react';


export class LastPost extends React.Component {

    constructor(props) {
        super(props)

        //console.log(this.props.match.params.id)
        this.state = {
            post: []
        };
    }

    componentDidMount() {
        fetch('/api/post')
            .then(res =>
                res.json()
            )
            .then((resp) => {
                console.log(resp)
                this.setState({
                    post: resp
                })
            })
            .catch(error => {
                console.log(error)
            })

    }
    render() {
        const post = this.state.post;

        return (

            <div className="col-lg-4 col-md-4 col-sm-4">
                <div className="latest_post">
                    <h2><span>Latest post</span></h2>
                    <div className="latest_post_container">
                        <ul className="latest_postnav">

                            {
                                post.map(e => (
                                    <li key={e.id}>
                                        <div className="media"> <a href="#" className="media-left">
                                            <img alt="" src={'/images/avatar/'+ `${e.avatar}`} /> </a>
                                            <div className="media-body"> <a href="pages/single_page.html" className="catg_title"> {e.short_description}</a> </div>
                                        </div>
                                    </li>
                                ))
                            }

                        </ul>
                    </div>
                </div>
            </div>
        );
    }
}

