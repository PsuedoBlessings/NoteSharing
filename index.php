<!DOCTYPE html>
<html lang="en">
<head>

    <!--heyo-->
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contentstyle.csswidth=device-width, initial-scale=1.0">
    <title>NoteSharing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <nav>
            <div class = "nav-left">
                <img src="Images/images/logo.png" class="logo">
            <ul>
                <li><img src="Images\images\notification.png" alt=""></li>
                <li><img src="Images\images\inbox.png" alt=""></li>
                <li><img src="Images\images\video.png" alt=""></li>
            </ul>
            </div>
            <div class = "nav-right">
                <div class="search-box">
                    <img src="Images\images\search.png">
                    <input type="text" placeholder="Search">
                </div>
                <div class="nav-user-icon online" onclick="SettingsMenuToggle()">
                    <img src="Images\images\profile-pic.png">
                </div>
            </div>
            <!--Settings Menu-->
            <div class="settings-menu">

                <div id="dark-btn">
                    <span></span>
                </div>

                <div class="settings-menu-inner">
                    <div class="user-profile">
                        <img src="Images/images/profile-pic.png">
                        <div>
                            <p>John Nicholson</p>
                            <a href="#">See your profile</a>
                        </div>
                    </div>
                    <hr>
                    <div class="user-profile">
                        <img src="Images/images/feedback.png">
                        <div>
                            <p>Give Feedback</p>
                            <a href="#">Help us to improve the new design</a>
                        </div>
                    </div>
                    <hr>
                    <div class="settings-links">
                        <img src="Images/images/setting.png" class="settings-icon">
                        <a href="#">Settings & Privacy <img src="Images/images/arrow.png" 
                            width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <img src="Images/images/help.png" class="settings-icon">
                        <a href="#">Help & Support <img src="Images/images/arrow.png" 
                            width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <img src="Images/images/display.png" class="settings-icon">
                        <a href="#">Display & Accessibility <img src="Images/images/arrow.png" 
                            width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <img src="Images/images/logout.png" class="settings-icon">
                        <a href="#">Logout <img src="Images/images/arrow.png" 
                            width="10px"></a>
                    </div>
                </div>
            </div>

        </nav>

        <div class="container">
            <!--Left Sidebar-->
            <div class="left-sidebar">
                <div class="imp-links">
                    <a href="#"><img src="Images/images/news.png"> Lastest News</a>
                    <a href="#"><img src="Images/images/friends.png"> Friends</a>
                    <a href="#"><img src="Images/images/group.png"> Group</a>
                    <a href="#"><img src="Images/images/marketplace.png"> Marketplace</a>
                    <a href="#"><img src="Images/images/watch.png"> Watch</a>
                </div>
            
                <div class="shortcut-links">
                    <p>Your Shortcuts</p>
                    <a href="#"><img src="Images/images/shortcut-1.png"> Web Developers</a>
                    <a href="#"><img src="Images/images/shortcut-2.png"> Web Design Course</a>
                    <a href="#"><img src="Images/images/shortcut-3.png"> Full Stack Development</a>
                    <a href="#"><img src="Images/images/shortcut-4.png"> Website Exoerts</a>
                </div>
            </div>
            <!--Main Sidebar-->
            <div class="main-content">

                <div class="story-gallery">
                    <div class="story story1">
                        <img src="Images/images/upload.png">
                        <p>Post Story</p>
                    </div>
                    <div class="story story2">
                        <img src="Images/images/member-1.png">
                        <p>Alison</p>
                    </div>
                    <div class="story story3">
                        <img src="Images/images/member-2.png">
                        <p>Jackson</p>
                    </div>
                    <div class="story story4">
                        <img src="Images/images/member-3.png">
                        <p>Samona</p>
                    </div>
                    <div class="story story5">
                        <img src="Images/images/member-4.png">
                        <p>John Doe</p>
                    </div>
                </div>


                <div class="write-post-container">
                    <div class="user-profile">
                        <img src="Images/images/profile-pic.png">
                        <div>
                            <p>John Nicholson</p>
                            <small>Public</small>
                        </div>
                    </div>

                    <div class="post-input-container">
                        <label for="post-text"></label>
                        <textarea id="post-text" name="post-text"
                        rows="3" placeholder="Title your photo or video (e.g 2/19/2022 CPTS 122 Lecture)"></textarea>
                        
                            <div class="post-upload">
                                <label for="video-input">
                                  <img src="Images/images/live-video.png"/> Video
                                </label>
                              
                                <input id="video-input" type="file" 
                                accept=".mov, .mp4, .wmv, .avi"/>

                             <label for="photo-input">
                                 <img src="Images/images/photo.png"/> Photo
                              </label>
                                
                             <input id="photo-input" type="file" 
                             accept=".jpg, .png"/>

                               <label for="file-input">
                                    <img src="Images/images/feeling.png"/> Difficulty
                               </label>
                                
                               <input id="file-input" type="file" />
                            </div>
                    </div>

                </div>


                <div class="post-container">
                    <div class="post-row">
                        <div class="user-profile">
                            <img src="Images/images/profile-pic.png">
                            <div>
                                <p>John Nicholson</p>
                                <span>June 24 2021, 13:40 pm</span>
                            </div>
                        </div>
                    </div>
                    
                    <p class="post-text">This webpage is inspired from the youtuber <span>@Easy Tutorials</span>
                    <a href="https://www.youtube.com/watch?v=NljIHlZRTTE&t=504s"> Youtube Video Tutorial</a>
                    <a href="https://www.youtube.com/channel/UCkjoHfkLEy7ZT4bA2myJ8xA">Easy Tutorials Youtube Channel</a></p>
                    <img src="Images/images/feed-image-1.png" class="post-img">

                        <div class="post-row">
                            <div class="activity-icons">
                                <div><input type="image" name="Like Button" src="Images/images/like-blue.png" onclick= "increaseLike()"> 
                                    <div id= "number"> 0 </div> </div>
                                <div><img src="Images/images/comments.png"> 45 </div>
                                <div><img src="Images/images/share.png"> 20 </div>
                                </div>
                            <div class="post-profile-icon">
                                <img src="Images/images/profile.png">
                            </div>
                        </div>
                        
                        <div class="post-container">
                            <div class="post-row">
                                <div class="user-profile">
                                    <img src="Images/images/profile-pic.png">
                                    <div>
                                        <p>John Nicholson</p>
                                        <span>June 24 2021, 13:40 pm</span>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="post-text">Here's a website called 
                                <span><a href="https://leetcode.com"> LeetCode</a></span> 
                                 where you can practice coding! Remember coding is a skill not just knowlegde! the faster you can code the better!</p>
                            <img src="Images/images/feed-image-2.png" class="post-img">
        
                                <div class="post-row">
                                    <div class="activity-icons">
                                        <div><img src="Images/images/like-blue.png"> 120 </div>
                                        <div><img src="Images/images/comments.png"> 45 </div>
                                        <div><img src="Images/images/share.png"> 20 </div>
                                        </div>
                                    <div class="post-profile-icon">
                                        <img src="Images/images/profile.png">
                                    </div>
                                </div>

                                <div class="post-container">
                                    <div class="post-row">
                                        <div class="user-profile">
                                            <img src="Images/images/profile-pic.png">
                                            <div>
                                                <p>John Nicholson</p>
                                                <span>June 24 2021, 13:40 pm</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <p class="post-text">Here's a website called 
                                        <span><a href="https://leetcode.com"> LeetCode</a></span> 
                                         where you can practice coding! Remember coding is a skill not just knowlegde! the faster you can code the better!</p>
                                    <img src="Images/images/feed-image-3.png" class="post-img">
                
                                        <div class="post-row">
                                            <div class="activity-icons">
                                                <div><img src="Images/images/like-blue.png"> 120 </div>
                                                <div><img src="Images/images/comments.png"> 45 </div>
                                                <div><img src="Images/images/share.png"> 20 </div>
                                                </div>
                                            <div class="post-profile-icon">
                                                <img src="Images/images/profile.png">
                                            </div>
                                        </div>

                                        <div class="post-container">
                                            <div class="post-row">
                                                <div class="user-profile">
                                                    <img src="Images/images/profile-pic.png">
                                                    <div>
                                                        <p>John Nicholson</p>
                                                        <span>June 24 2021, 13:40 pm</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <p class="post-text">Here's a website called 
                                                <span><a href="https://leetcode.com"> LeetCode</a></span> 
                                                 where you can practice coding! Remember coding is a skill not just knowlegde! the faster you can code the better!</p>
                                            <img src="Images/images/feed-image-4.png" class="post-img">
                        
                                                <div class="post-row">
                                                    <div class="activity-icons">
                                                        <div><img src="Images/images/like-blue.png"> 120 </div>
                                                        <div><img src="Images/images/comments.png"> 45 </div>
                                                        <div><img src="Images/images/share.png"> 20 </div>
                                                        </div>
                                                    <div class="post-profile-icon">
                                                        <img src="Images/images/profile.png">
                                                    </div>
                                                </div>

                                                <div class="post-container">
                                                    <div class="post-row">
                                                        <div class="user-profile">
                                                            <img src="Images/images/profile-pic.png">
                                                            <div>
                                                                <p>John Nicholson</p>
                                                                <span>June 24 2021, 13:40 pm</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="post-text">Here's a website called 
                                                        <span><a href="https://leetcode.com"> LeetCode</a></span> 
                                                         where you can practice coding! Remember coding is a skill not just knowlegde! the faster you can code the better!</p>
                                                    <img src="Images/images/feed-image-5.png" class="post-img">
                                
                                                        <div class="post-row">
                                                            <div class="activity-icons">
                                                                <div><img src="Images/images/like-blue.png"> 120 </div>
                                                                <div><img src="Images/images/comments.png"> 45 </div>
                                                                <div><img src="Images/images/share.png"> 20 </div>
                                                                </div>
                                                            <div class="post-profile-icon">
                                                                <img src="Images/images/profile.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            

                <button type="button" class="load-more-btn">Load More</button>

            <!--Right Sidebar-->
            <div class="right-sidebar">

                <div class="sidebar-title">
                    <h4>Events</h4>
                    <a href="#">See All</a>
                </div>

                <div class="event">
                    <div class="left-event">
                        <h3>18</h3>
                        <span>March</span>
                    </div>
                    <div class="right-event">
                        <h4>Social Media</h4>
                        <p>Willson Tech Park</p>
                        <a href="#">More Info</a>
                    </div>
                </div>
                <div class="event">
                    <div class="left-event">
                        <h3>23</h3>
                        <span>June</span>
                    </div>
                    <div class="right-event">
                        <h4>Mobile Marketing</h4>
                        <p>Willson Tech Park</p>
                        <a href="#">More Info</a>
                    </div>
                </div>
                <div class="sidebar-title">
                    <h4>Advertisement</h4>
                    <a href="#">Close</a>
                </div>
                <img src="Images/images/advertisement.png" class="sidebar-ads">

                <div class="sidebar-title">
                    <h4>Conversation</h4>
                    <a href="#">Hide Chat</a>
                </div>

                <div class="online-list">
                    <div class="online">
                        <img src="Images/images/member-1.png">
                    </div>
                    <p>Alison Mina</p>
                </div>
                
                <div class="online-list">
                    <div class="online">
                        <img src="Images/images/member-2.png">
                    </div>
                    <p>Jackson Aston</p>
                </div>

                <div class="online-list">
                    <div class="online">
                        <img src="Images/images/member-3.png">
                    </div>
                    <p>Samona Rose</p>
                </div>


            </div>
        </div>

<div class="footer">
    <p>NonCopyrighted</p>
</div>

    <!--connects them-->
    <script src="js/script.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>
</html>