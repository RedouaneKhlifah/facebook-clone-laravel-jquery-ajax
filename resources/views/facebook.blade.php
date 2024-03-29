<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="{{url('css/style.css')}}" />

  </head>

  <body>
    <!--navbar-->
    <nav>
      <!--logo and search-->
      <div class="left-side">
        <div class="logo">
          <a href="/facebook"><img src="{{asset('img/icons/facebook.svg')}}" alt="" /></a>
        </div>

        <div class="search">
          <input type="text" placeholder="Search Facebook" name="" id="" />
        </div>
      </div>

      <!--tab icons-->
      <div class="tabs">
        <div class="tab-icon active">
          <div class="icon">
            <img src="{{asset('img/icons/home.svg')}}" alt="" />
          </div>
        </div>

        <div class="tab-icon">
          <div class="icon has-notification">
            <img src="{{asset('img/icons/calendar.svg')}}" alt="" />
          </div>
        </div>
      </div>

      <!--right side-->
      <div class="right-side">
        <div class="user">
          <div class="profile">
            <img src="{{asset('img/avatar/hero.png')}}" alt="" />
          </div>
          <h4  >{{ Auth::user()->name }}</h4>
          
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

        <!--icons-->
        <div  id="navbarDropdown"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre class="user-icons">
          <div class="icon">
            <img src="{{asset('img/icons/arrow.svg')}}" alt="" />
          </div>
        </div>
      </div>
    </nav>

    <!--content-->
    <div class="wrapper">
      <div class="shortcuts">
        <div class="second-col">
          <h6 class="title">Categories</h6>


        
          @foreach ($Categories as $category)
          <a href="/facebook/?category={{$category->name}}">
          <div class="menu-item">
            <div class="item-row">
              <div class="icon">
                <img src="{{asset('img/stories/st-1.jpeg')}}" alt="" />
              </div>
              <h4>{{$category->name}}</h4>
            </div>
          </div>
        </a>
          @endforeach

          

        </div>
      </div>

      <!--posts-->
      <div class="posts">
        <!-- stories -->

        <!--create post-->
        <div class="timeline">
          <div class="view create-post">
            <div class="input">
              <div class="user">
                <div class="profile">
                  <img src="{{asset('img/avatar/hero.png')}}" alt="" />
                </div>
              </div>
              <input
                type="text"
                placeholder="What on your mind, Anne?"
                name=""
                id="input_fire_modal"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                readonly
              />
            </div>
            <div class="media">
              <div class="category">
                <div class="option">
                  <div class="icon">
                    <img src="{{asset('img/icons/video-live.svg')}}" alt="" />
                  </div>
                  <span> video</span>
                </div>

                <div
                  id="model_image_togle"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  class="option"
                >
                  <div class="icon">
                    <img src="{{asset('img/icons/photos.svg')}}" alt="" />
                  </div>
                  <span>photo/video</span>
                </div>

                <div class="option">
                  <div class="icon">
                    <img src="{{asset('img/icons/smile.svg')}}" alt="" />
                  </div>
                  <span>feeling/activity</span>
                </div>
              </div>
            </div>
          </div>

          <!--      ////////////////////////////            Modal  section         /////////////////////////////////////////////        -->

          <!--      ///////////////////           add post Modal           /////////////////////////////////////        -->
          <form action="{{ url('facebook')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1
                    class="modal-title fs-5 text-center font-weight-bold w-100"
                    id="exampleModalLabel"
                  >
                    Create Post
                  </h1>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div class="user">
                    <div class="profile">
                      <img src="{{asset('img/avatar/hero.png')}}" alt="" />
                    </div>
                    <h4 class="user_form_name">Redouane Khlifah</h4>
                  </div>
                  <textarea
                    class="form-control border-0 taxtaraia shadow-none"
                    placeholder="What's on your mind? Redouane "
                    rows="5"
                    id="textaria"
                    name="Description"
                  ></textarea>
                 
                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">


                  <center>
                  <div class="form-check form-check-inline" >
                    <input name="category[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
                    <label class="form-check-label" for="inlineCheckbox1">Sport</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input name="category[]" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2">
                    <label class="form-check-label" for="inlineCheckbox2">Business</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input name="category[]" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3">
                    <label class="form-check-label" for="inlineCheckbox3">Health</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input name="category[]" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3">
                    <label class="form-check-label" for="inlineCheckbox3">Other</label>
                  </div>
                </center>

                  <div id="image-div"></div>
                  <div class="container add_to_post">
                    <div class="row">
                      <div class="col-6">
                        <p>add to your post</p>
                      </div>
                      <div class="col-2">
                        <div class="option">
                          <div class="icon">
                            <img  src="{{asset('img/icons/video-live.svg')}}" alt="" />
                          </div>
                        </div>
                      </div>
                      <div class="col-2" id="input_image_container">
                        <div class="option">
                          <div class="icon">
                            <label for="image">
                              <img
                            src="{{asset('img/icons/photos.svg')}}"
                            alt=""
                            class="imageclick"
                            />
                            </label>
                            {{-- <img
                            src="{{asset('img/icons/photos.svg')}}"
                            alt=""
                            class="imageclick"
                            /> --}}
                            <input name="image" id="image" class="imageinput" type="file"  hidden />
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="option">
                          <div class="icon">
                            <img
                              class="fellings_image"
                              src="{{asset('img/icons/smile.svg')}}"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer border-top-0 pt-0">
                  <button
                    type="submit"
                    id="post_btn"
                    class="btn btn-primary w-100 border-top-0"
                    name="post_btn"
                  >
                    Post
                  </button>
               
                </div>
              </div>
            </div>
          </div>
        </form>

          <!--      ///////////////////           end of add post Modal           /////////////////////////////////////        -->

          <!--      ///////////////////          comments modal         /////////////////////////////////////        -->
          <div
            class="modal fade"
            id="comments"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1
                    class="modal-title fs-5 text-center font-weight-bold w-100"
                    id="exampleModalLabel"
                  >
                    redouane khalifa's Post
                  </h1>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div class="user">
                    <div class="profile">
                      <img src="{{asset('img/avatar/hero.png')}}" alt="" />
                    </div>
                    <h4 class="user_form_name">Redouane Khlifah</h4>
                  </div>

                  <div class="desc">
                    <p class="desc_comments_modal" id="desc_comments_modal" >
                    </p>
                    
                  </div>
                  <div class="post-img cont_img_mod">
                    <img
                      class="desc_image_modal"
                      src=""
                      alt=""
                    />
                  </div>

                  <div class="actions_modal_container">
                    <div class="actions_modal">
                      <div class="action">
                        <div class="icon">
                          <img
                            class="like_modal_icon"
                            src="{{asset('img/icons/thumbs-up.svg')}}"
                            alt=""
                          />
                        </div>
                        <span> like </span>
                      </div>

                      <div
                        class="action"
                        data-bs-toggle="modal"
                        data-bs-target="#comments"
                        id="container_fire_Commants_modal"
                      >
                        <div class="icon">
                          <img
                            class="comment_modal_icon"
                            src="{{asset('img/icons/comment.svg')}}"
                            alt=""
                          />
                        </div>
                        <span> comment </span>
                      </div>

                      <div class="action">
                        <div class="icon">
                          <img
                            class="share_modal_icon"
                            src="{{asset('img/icons/share.svg')}}"
                            alt=""
                          />
                        </div>
                        <span> share </span>
                      </div>
                    </div>
                  </div>

                  



                  <form action="{{url('comments')}}" method="post" class="comments_form"  >
                    {!! csrf_field() !!}
                  <div id="write-comment" class="write-comment">
                    <div class="user">
                      <div class="profile">
                        <img src="{{asset('img/avatar/hero.png')}}" alt="" />
                      </div>
                    </div>
                    <div id="modal_comment_container" class="input">
                      <input
                        type="text"
                        placeholder="Write a comment"
                        name="description"
                        id="comment_input"
                      />

                      <input type="hidden" name="user_id" value="{{auth::user()->id}}">
                      <input id="post_id" type="hidden" name="posts_id" value="" >

                      <div id="media" class="media">
                        <div id="icon" class="icon">
                          <img id="icon_image" src="{{asset('img/icons/camera.svg')}}" alt="" />
                        </div>
    
                        <div id="icon" class="icon">
                          <img id="icon_image" src="{{asset('img/icons/image.svg')}}" alt="" />
                        </div>
    
                        <div id="icon" class="icon">
                          <img id="icon_image" src="{{asset('img/icons/smile-2.svg')}}" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>

                  
                  <div class="new_commentscontainer">

                  </div>
                  <div class="commentscontainer">

                   
                  </div>



                </div>
                <div class="modal-footer border-top-0 pt-0">
                  
                </div>
              </div>
            </div>
          </div>
          <!---->

          <!---->

          <!---->

          <!--post container-->
         
              
       @foreach ($posts as $post)
           
     
          <div class="view view-post-container smaller-margin">
            <div class="view-post">
              <div class="upper">
                <div class="d-flex">
                  <div class="user">
                    <div class="profile">
                      <img src="{{asset('img/avatar/5.jpg')}}" alt="" />
                    </div>
                  </div>
             
                  <div class="info">
                    <h6 class="name">{{ $post->user->name }}</h6>
                    <span class="time">1 hour ago</span>
                  </div>
                </div>

                <div class="dots">
                  <div class="dot"></div>
                </div>
              </div>

              <div class="desc">
                <p class="post_description">{{$post->Description}}</p>
              </div>
              
              @if($post->image != null)
              <div class="post-img">
                <img class="post_image" src="{{asset('img/'.$post->image)}}" alt="" />
              </div>
              @endif

              <div class="actions-container ">
                

                <div class="action">
                  
                  <form  action="{{url('likes')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="icon thumbs_up">
                      <input type="hidden" name="posts_id" value="{{$post->id}}">
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                      
                      @if($post->likes->liked)
                          <img class="thumbs-up_icon" src="{{asset('img/icons/thumps-up-red.svg')}}" alt="" style="margin-top: -9px" />
                      @else
                          <img class="thumbs-up_icon" src="{{asset('img/icons/thumbs-up.svg')}}" alt="" style="margin-top: -9px" />
                      @endif
                  </div>
                </form>
                <span class="likes_Count">{{$post->likes->count}}</span>
                  <span> like </span>
                </div>
             

                <div
                  class="action comment_icon"
                  data-bs-toggle="modal"
                  data-bs-target="#comments"
                  data-id="{{ $post->id }}"
                  id="container_fire_Commants_modal"
                >
                  <div class="icon">
                    <img src="{{asset('img/icons/comment.svg')}}" alt="" />
                  </div>
                  <span class="comments_Count">{{$post->comments->count}}</span>
                  <span> comment </span>
                </div>

                <div class="action">
                  <div class="icon">
                    <img src="{{asset('img/icons/share.svg')}}" alt="" />
                  </div>
                  <span> share </span>
                </div>
              </div>


              <div class="write-comment d-none">
                <div class="user">
                  <div class="profile">
                    <img src="{{asset('img/avatar/hero.png')}}" alt="" />
                  </div>
                </div>
                <div class="input">
                  <input
                    type="text"
                    placeholder="Write a comment"
                    name=""
                    id=""
                  />
                  <div class="media">
                    <div class="icon">
                      <img src="{{asset('img/icons/camera.svg')}}" alt="" />
                    </div>

                    <div class="icon">
                      <img src="{{asset('img/icons/image.svg')}}" alt="" />
                    </div>

                    <div class="icon">
                      <img src="{{asset('img/icons/smile-2.svg')}}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- end of post container -->

          <!--post container-->

          <!-- end of post container -->

          <!--people you may know-->
        </div>
      </div>

      <!--shortcuts 2 -events and chat- -->
      <div class="shortcuts shortcuts-2">
        <div class="second-col">
          <div class="online">
            <h6 class="title">contact</h6>

            <div class="user">
              <div class="profile">
                <img src="{{asset('img/avatar/1.jpg')}}" alt="" />
              </div>
              <h4>diana berry</h4>
            </div>

            <div class="user">
              <div class="profile">
                <img src="{{asset('img/avatar/4.jpg')}}" alt="" />
              </div>
              <h4>rosie pie</h4>
            </div>

            <div class="user">
              <div class="profile">
                <img src="{{asset('img/avatar/2.jpg')}}" alt="" />
              </div>
              <h4>samantha jones</h4>
            </div>

            <div class="user">
              <div class="profile">
                <img src="{{asset('img/avatar/3.jpg')}}" alt="" />
              </div>
              <h4>john doe</h4>
            </div>

            <div class="user">
              <div class="profile">
                <img src="{{asset('img/avatar/4.jpg')}}" alt="" />
              </div>
              <h4>stacy jr.</h4>
            </div>

            <div class="user">
              <div class="profile">
                <img src="{{asset('img/avatar/5.jpg')}}" alt="" />
              </div>
              <h4>christin sam</h4>
            </div>

            <div class="user">
              <div class="profile">
                <img src="{{asset('img/avatar/6.jpg')}}" alt="" />
              </div>
              <h4>kate simon</h4>
            </div>

            <div class="user">
              <div class="profile">
                <img src="{{asset('img/avatar/1.jpg')}}" alt="" />
              </div>
              <h4>diana berry</h4>
            </div>

            <div class="user">
              <div class="profile">
                <img src="{{asset('img/avatar/2.jpg')}}" alt="" />
              </div>
              <h4>sarah cerny</h4>
            </div>

            <div class="user">
              <div class="profile">
                <img src="{{asset('img/avatar/3.jpg')}}" alt="" />
              </div>
              <h4>josh doe</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>

    <script src="{{asset('js/script.js') }}"></script>


    <script>
      $(document).on('click', '.comment_icon', function() {
        var id = $(this).data('id');
        $.ajax({
          url: '/show/' + id,
          type: 'GET',
          // data:{student_id:id},
          success: function(response) {

            console.log(response);
            $('.new_commentscontainer').empty();
            $('.commentscontainer').empty();



            // Loop through comments and create HTML elements
            $.each(response.post.comments, function(index, comment) {
              console.log(comment);
              console.log(comment.description);
            var commentHtml =`<div class="comments_section">
                <div class="user user_modal">
                  <div class="profile">
                    <img src="{{asset('img/avatar/hero.png')}}" alt="" />
                  </div>
                  <div class="people_comment_container">
                    <h4 class="user_form_name userrr">${response.post.user.name}</h4>
                    <p class="user_comment_name">
                     ${comment.description}
                    </p>
                  </div>
                </div>
              </div>`



            // Append comment to container
            $('.commentscontainer').append(commentHtml);
            });


            $('.desc_comments_modal').html(response.post.Description);
            $('.desc_image_modal').attr('src', `{{ asset('img/${response.post.image}') }}`);
            $('#post_id').val(response.post.id);
            

          },
          error: function(xhr, status, error) {
            console.log(error);
          }
          });

      });
      
      </script> 

      <script>

$(document).on('click', '.thumbs_up', function() {
  let form = $(this).closest('form');
  let clikedelement  = $(this)
  let span_counter = form.parent().find('.likes_Count')
  let currentLikes  = parseInt(span_counter.html())
  let formData = form.serialize();
  clikedelement.prop('disabled', true);
  $.ajax({
    url: form.attr('action'),
    type: 'POST',
    data: formData,
   
    success: function(response) {

      console.log(response);
      
      

      currentLikes = currentLikes+1

      span_counter.html(currentLikes)
      console.log(currentLikes);
      
      clikedelement.find('.thumbs-up_icon').attr('src', `{{ asset('img/icons/thumps-up-red.svg') }}`);

      
      // handle success response here
    },
    error: function(xhr, status, error) {
      currentLikes = currentLikes -1
      span_counter.html(currentLikes)
      console.log(currentLikes);
    
      clikedelement.find('.thumbs-up_icon').attr('src', `{{ asset('img/icons/thumbs-up.svg') }}`);
      console.log( $(this).find('.thumbs-up_icon'));
    
  
    },complete: function() {
      // Re-enable the button
      clikedelement.prop('disabled', false);
    }
  });
  
  return false; // prevent default form submission
});


      </script>




      <script>



    $(document).on('submit', '.comments_form', function() {
        // var id = $(this).data('id');
        // console.log(this);
        var comments_Counter = parseInt($('.comments_Count').html())
        let formData = $(this).serialize();
        $.ajax({
          url: '/comments',
          type: 'post',
          data:formData,
          success: function(response) {

            comments_Counter++
            $('.comments_Count').html(comments_Counter)
            $('.new_commentscontainer').empty();
            $('#comment_input').val('');
           
            let html = `<div class="comments_section">
                <div class="user user_modal">
                  <div class="profile">
                    <img src="{{asset('img/avatar/hero.png')}}" alt="" />
                  </div>
                  <div class="people_comment_container">
                    <h4 class="user_form_name userrr">${response.post.user.name}</h4>
                    <p class="user_comment_name">
                     ${response.post.description}
                    </p>
                  </div>
                </div>
              </div>`;


              
              $('.new_commentscontainer').prepend(html);

            console.log(response);
            console.log(response.post.user.name);
            console.log(response.post.description);

          },
          error: function(xhr, status, error) {
            console.log(error);
          }
          // });
      
         
      });
      return false
    })
      </script>

  </body>
</html>
