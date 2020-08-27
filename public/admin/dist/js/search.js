// $(document).ready(() => {
//     $('#search').on('click', () => {
//         let q = $('#val').val();
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
//         $.ajax(

//             {
//                 type: 'get',
//                 url: 'http://127.0.0.1:8000/news/search',
//                 data: {
//                     q: q,
//                 },
//                 success: function (res) {
//                     console.log(res)

//                     if (res && typeof res !== "string") {
//                         $('#card').html('');

//                         for (let i = 0; i < res.length; i++) {
//                             $('#card').append('<div class="card" style="width: 18rem;">'
//                                 + '<div class="card-body">'
//                                 + '<h5 class="card-title">'
//                                 + res[i]['title'] + '</h5>'
//                                 + '<p class="card-text">' + res[i]['short_description'] + '<p>'
//                                 + '<p class="card-text">' + res[i]['long_description'] + '<p>'
//                             // {{--+ '<a href="{{route('news.edit',$el->id)}}" class="btn btn-primary">Edit</a>'--}}
//                             // {{--+ '<a href="{{route('news.show',$el->id)}}" class="btn btn-success">View</a>'--}}
//                         )
//                         }
//                     } else {
//                         $('#card').html('<p style="color: white">' + res + '</p>');
//                     }
//                 }
//             }
//         )
//     })
// })
