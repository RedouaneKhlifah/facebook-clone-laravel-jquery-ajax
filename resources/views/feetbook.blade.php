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
    <link rel="stylesheet" href="{{url('css/style.css')}}" />

  </head>

  <body>
    <!--navbar-->
    <nav>
      <!--logo and search-->
      <div class="left-side">
        <div class="logo">
          <img src="{{asset('img/icons/facebook.svg')}}" alt="" />
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
          <h4>Redouane Khlifah</h4>
        </div>

        <!--icons-->
        <div class="user-icons">
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
          <div class="menu-item">
            <div class="item-row">
              <div class="icon">
                <img src="{{asset('img/stories/st-1.jpeg')}}" alt="" />
              </div>
              <h4>Designers house</h4>
            </div>
          </div>

          <div class="menu-item">
            <div class="item-row">
              <div class="icon">
                <img src="{{asset('img/stories/st-2.jpeg')}}" alt="" />
              </div>
              <h4>Script house</h4>
            </div>
            <div class="menu-item">
              <div class="item-row">
                <div class="icon">
                  <img src="{{asset('img/stories/page-1.jpg')}}" alt="" />
                </div>
                <h4>ui ux Designers workshop</h4>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-row">
                <div class="icon">
                  <img src="{{asset('img/stories/st-3.jpeg')}}" alt="" />
                </div>
                <h4>netflix movies recommends</h4>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-row">
                <div class="icon">
                  <img src="{{asset('img/stories/page-2.jpg')}}" alt="" />
                </div>
                <h4>the futur</h4>
              </div>
            </div>

            <div class="menu-item">
              <div class="item-row">
                <div class="icon">
                  <img src="{{asset('img/stories/page-3.jpeg')}}" alt="" />
                </div>
                <h4>aj smart</h4>
              </div>
            </div>
          </div>
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
                  ></textarea>
                  <input class="imageinput" type="file" hidden />

                  <div id="image-div"></div>
                  <div class="container add_to_post">
                    <div class="row">
                      <div class="col-6">
                        <p>add to your post</p>
                      </div>
                      <div class="col-2">
                        <div class="option">
                          <div class="icon">
                            <img src="{{asset('img/icons/video-live.svg')}}" alt="" />
                          </div>
                        </div>
                      </div>
                      <div class="col-2" id="input_image_container">
                        <div class="option">
                          <div class="icon">
                            <img
                              src="{{asset('img/icons/photos.svg')}}"
                              alt=""
                              class="imageclick"
                            />
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
                    type="button"
                    id="post_btn"
                    class="btn btn-primary w-100 border-top-0"
                  >
                    Post
                  </button>
                </div>
              </div>
            </div>
          </div>

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
                    <p class="desc_comments_modal">
                      redouane khalifa test 🙋‍♂🌈🌴
                    </p>
                  </div>
                  <div class="post-img cont_img_mod">
                    <img
                      class="desc_image_modal"
                      src="{{asset('img/posts/1.jpg')}}"
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

                  <div class="user user_modal">
                    <div class="profile">
                      <img src="{{asset('img/avatar/hero.png')}}" alt="" />
                    </div>
                    <div class="people_comment_container">
                      <h4 class="user_form_name userrr">Redouane Khlifah</h4>
                      <p class="user_comment_name">
                        Redouane Khlifah Redouane Khlifa
                      </p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer border-top-0 pt-0"></div>
              </div>
            </div>
          </div>
          <!---->

          <!---->

          <!---->

          <!--post container-->
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
                    <h6 class="name">diana barry</h6>
                    <span class="time">1 hour ago</span>
                  </div>
                </div>

                <div class="dots">
                  <div class="dot"></div>
                </div>
              </div>

              <div class="desc">
                <p>Travellimg to the future 🌟 , it's alraedy 2020 🙋‍♂🌈🌴</p>
              </div>

              <div class="post-img">
                <img src="{{asset('img/posts/1.jpg')}}" alt="" />
              </div>

              <div class="actions-container">
                <div class="action">
                  <div class="icon">
                    <img src="{{asset('img/icons/thumbs-up.svg')}}" alt="" />
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
                    <img src="{{asset('img/icons/comment.svg')}}" alt="" />
                  </div>
                  <span> comment </span>
                </div>

                <div class="action">
                  <div class="icon">
                    <img src="{{asset('img/icons/share.svg')}}" alt="" />
                  </div>
                  <span> share </span>
                </div>
              </div>

              <div class="write-comment">
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

          <!-- end of post container -->

          <!--post container-->
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
                    <h6 class="name">diana barry</h6>
                    <span class="time">1 hour ago</span>
                  </div>
                </div>

                <div class="dots">
                  <div class="dot"></div>
                </div>
              </div>

              <div class="desc">
                <p>redouane khalifa test 🙋‍♂🌈🌴</p>
              </div>

              <div class="post-img">
                <img src="{{asset('img/posts/1.jpg')}}" alt="" />
              </div>

              <div class="actions-container">
                <div class="action">
                  <div class="icon">
                    <img src="{{asset('img/icons/thumbs-up.svg')}}" alt="" />
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
                    <img src="{{asset('img/icons/comment.svg')}}" alt="" />
                  </div>
                  <span> comment </span>
                </div>

                <div class="action">
                  <div class="icon">
                    <img src="{{asset('img/icons/share.svg')}}" alt="" />
                  </div>
                  <span> share </span>
                </div>
              </div>

              <div class="write-comment">
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
    <script src="{{'js/script.js'}}"></script>
  </body>
</html>
