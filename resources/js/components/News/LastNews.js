// import React from 'react';
//
// export class LastNews extends React.Component {
//
//     constructor(props) {
//         super(props);
//
//         this.state = {
//             news: []
//         };
//     }
//
//     componentDidMount() {
//         fetch('/api/newsAp')
//             .then(res =>
//                 res.json()
//             )
//             .then((resp) => {
//                 console.log(resp)
//                 this.setState({
//                     news: resp
//                 })
//             })
//             .catch(error => {
//                 console.log(error)
//             })
//
//     }
//
//     render() {
//         const news1 = this.state.news;
//         const mystyle = {
//             width: '1729px',
//             left: '-493.81px'
//         };
//         return (
//             <div>
//                 <section id='newsSection'>
//                     <div className="row">
//                         <div className="col-lg-12 col-md-12">
//                             <div className="latest_newsarea"><span>Latest</span>
//                                 <div className="tickercontainer">
//                                     <div className="mask">
//                                         <ul id="ticker01" className="news_sticker newsticker" style={mystyle}>
//                                             {
//                                                 news1.map(e => (
//                                                     <li><a href=""><img src="images/news_thumbnail3.jpg" alt=""/>{e.title}</a></li>
//                                                 ))
//                                             }
//                                         </ul>
//                                     </div>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>
//
//                 </section>
//             </div>
//
//         )
//     }
// }
//
