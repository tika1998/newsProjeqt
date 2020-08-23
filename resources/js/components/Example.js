import React from 'react';
import ReactDOM from 'react-dom';
import {Link} from 'react-router-dom';
import {Header} from './News/Header';

export class Example extends React.Component {
    render() {
        return (
            <div>
                <Link to={'/news'}>Link</Link>
            </div>
        );
    }
}

