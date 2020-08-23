import React from 'react';
import ReactDOM from 'react-dom';

import {Header} from './components/News/Header.js';
import {Nav} from './components/News/Nav.js';
import {LastNews} from './components/News/LastNews.js';
import {Slide} from './components/News/Slide';
import {LastPost} from './components/News/LastPost';
import {Category} from './components/News/Category';
import {PopularPost} from './components/News/PopularPost';
import {Footer} from './components/News/Footer';
import {NewsList} from "./components/News/NewsList";
import {BrowserRouter, Switch, Route} from 'react-router-dom';
import {Example} from './components/Example';
import {News} from "./News";

ReactDOM.render((
    <div className='container'>
       < News />
    </div>
), document.getElementById('root'));
