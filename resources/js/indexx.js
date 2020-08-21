import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Switch, Route } from 'react-router-dom';
import { Example } from './components/Example.js';
import { NewsList } from './components/News/NewsList.js';

ReactDOM.render((
    <BrowserRouter>
        <div>
            <Example />
            <Switch>
                <Route exact path='/posts' component={NewsList} />
            </Switch>
        </div>
    </BrowserRouter>

), document.getElementById('root'));
