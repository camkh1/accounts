<!-- ##### LEFT SIDEBARE ##### -->
                        <div id="sidebarl" class="sidebar sleft section">

                            <div class="navigation_left">

                                <ul class="main">
                                	<li><a href="#vdo" class="active"><span class="icom-videos"></span><span class="text">Media</span></a></li> 
                                    <li><a href="#media"><span class="icom-screen"></span><span class="text">TV pro.</span></a></li>
                                    <li><a href="#other"><span class="icom-happy"></span><span class="text">Comedy</span></a></li>
                                    
                                    <li><a href="#ui"><span class="icom-star1"></span><span class="text">Top tag</span></a></li>
                                    <li><a href="#mv"><span class="icom-youtube1"></span><span class="text">MV</span></a></li>
                                    <li><a href="#tables"><span class="icom-heart1"></span><span class="text">Watch later</span></a></li>
                                    <li><a href="#follow"><span class="icom-share1"></span><span class="text">Follow us</span></a></li>
                                    <li><a href="#samples"><span class="icom-box-add"></span><span class="text">Samples</span></a></li>
                                    
                                    <li style="display: block; background-color: #C14541; height: 217px; margin-right: 1px;border-top:1px solid #922420!important;">&nbsp;</li>
                                </ul>

                                <div class="control active"></div>        

                                <div class="submain">

                                    <div id="vdo">

                                        <ul class="fmenu">
                                            <div class="widget-fluid userInfo clearfix">
                                                <div style="text-align: center!important">
                                                    <div class="name">CATEGORIES</div>
                                                </div>
                                            </div>

											<?php 
												$segment = Request::segment ( 3 );
												$getMcate = new MCategory();
												$linkHome = Config::get('app.url');
												$getCate = $getMcate->getMainCategories();
											?>
                                            @if(!empty($getCate))
                                                @foreach($getCate->result as $tag)
                                                <li class="@if($segment == $tag->slug)active @endif">
                                                    <a href="{{Config::get('app.url')}}search/label/{{$tag->slug}}">{{$tag->name_lml}}</a>    
                                                    @if($segment == $tag->slug)                    
                                                    <span class="caption orange">-</span>
                                                    @endif
                                                    @if($segment != $tag->slug)                    
                                                    <span class="caption blue">+</span>
                                                    @endif
                                                    <ul>
                                                    </ul>
                                                </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        <div class="dr"><span></span></div>
                                        <?php
                                            // $getSubMainMenu = $getMcate->findCategoryBySlug($segment);
                                            // var_dump($getSubMainMenu);
                                        ?>
                                    </div>

                                    <div id="ui">                

                                        <ul class="fmenu">
                                            <li>
                                                <a href="#">Submenu level 22</a>                        
                                            </li>
                                            <li>
                                                <a href="#">Submenu level 22</a>
                                                <span class="caption blue">+</span>
                                                <ul>
                                                    <li><a href="#">Submenu level 33</a><span class="caption">1</span></li>
                                                    <li><a href="#">Submenu level 33</a><span class="caption red">2</span></li>
                                                    <li><a href="#">Submenu level 33</a><span class="caption green">3</span></li>
                                                    <li><a href="#">Submenu level 33</a><span class="caption orange">4</span></li>
                                                    <li><a href="#">Submenu level 33</a><span class="caption purple">5</span></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Submenu level 22</a>                        
                                            </li>                    
                                        </ul>
                                        <div class="dr"><span></span></div>               




                                    </div>            

                                    <div id="mv">    
                                    		<div class="widget-fluid userInfo clearfix">
                                                <div style="text-align: center!important">
                                                    <div class="name">Music video</div>
                                                </div>
                                            </div>                                            
                                        <div class="menu">
                                            <ul class="fmenu">
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/%23%20-%20Ramvong?&amp;max-results=12" target="_blank"># - Ramvong</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/%23%20New%20Year?&amp;max-results=12" target="_blank"># New Year</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/%23New%20Year?&amp;max-results=12" target="_blank">#New Year</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/%23Ramvong?&amp;max-results=12" target="_blank">#Ramvong</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/Hip%20Hop?&amp;max-results=12" target="_blank">Hip Hop</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/Bigman?&amp;max-results=12" target="_blank">Bigman</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20%5BM%5D?&amp;max-results=12" target="_blank">P -- [M]</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20Angkor%20Wat?&amp;max-results=12" target="_blank">P -- Angkor Wat</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20Bayon%20DVD?&amp;max-results=12" target="_blank">P -- Bayon DVD</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20BIGMAN?&amp;max-results=12" target="_blank">P -- BIGMAN</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20Bopha?&amp;max-results=12" target="_blank">P -- Bopha</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20Hang%20Meas?&amp;max-results=12" target="_blank">P -- Hang Meas</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20Moha%20Hang?&amp;max-results=12" target="_blank">P -- Moha Hang</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20Pkay%20Prek?&amp;max-results=12" target="_blank">P -- Pkay Prek</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20Rock%20Production?&amp;max-results=12" target="_blank">P -- Rock Production</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20SM%20%28Sameth%20Mai%29?&amp;max-results=12" target="_blank">P -- SM (Sameth Mai)</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20Spark%20Music?&amp;max-results=12" target="_blank">P -- Spark Music</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/P%20--%20Sunday?&amp;max-results=12" target="_blank">P -- Sunday</a></li>
											  <li><a dir="ltr" href="http://www.srouljet.com/search/label/Old%20Songs?&amp;max-results=12" target="_blank">Old Songs</a></li>
											</ul>

                                        </div>                                                                
                                        <div class="dr"><span></span></div>
                                        <div class="widget-fluid">
                                            <div class="row-form">
                                                <span>Text:</span>
                                                <input type="text" placeholder="Placeholder example" />
                                            </div>
                                            <div class="row-form">
                                                <input type="checkbox" checked="checked" value="1" />Checked 
                                                <input type="checkbox" value="2" />Unchecked                         
                                            </div>                    
                                            <div class="row-form">                        
                                                <select>
                                                    <option value="0" />0
                                                    <option value="1" />1
                                                    <option value="2" />2
                                                </select>
                                            </div>                    
                                            <div class="row-form">
                                                <span>Tags</span>
                                                <input class="tags" value="PHP,CSS" />
                                            </div>
                                            <div class="row-form">                        
                                                <textarea name="text"></textarea>
                                            </div>                    
                                            <div class="row-form TAR">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <div class="dr"><span></span></div>                
                                    </div>             

                                    <div id="tables">

                                        <div class="menu">
                                            <a href="./tables.html"><span class="icon-align-justify"></span> Default tables</a>
                                            <a href="./dynamic_tables.html"><span class="icon-ok-sign"></span> Dynamic tables</a>                          
                                        </div>                                                                
                                        <div class="dr"><span></span></div>                
                                        <div class="widget-fluid">
                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th width="30">ID</th>
                                                        <th>User</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>u-231</td>
                                                        <td><a href="#">Dmitry Ivaniuk</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>u-250</td>
                                                        <td><a href="#">Helen Symonchuk</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>u-256</td>
                                                        <td><a href="#">Olga Yukhimchuk</a></td>
                                                    </tr>                            
                                                    <tr>
                                                        <td>u-276</td>
                                                        <td><a href="#">Valentin Ratushev</a></td>
                                                    </tr>                                                        
                                                </tbody>
                                            </table>                    
                                        </div>
                                        <div class="dr"><span></span></div>                
                                        <div class="widget-fluid">
                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox" class="checkall" /></th>
                                                        <th width="25%">ID</th>
                                                        <th width="75%">User</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="checkbox" name="ch[]" /></td>
                                                        <td>u-231</td>
                                                        <td><a href="#">Dmitry Ivaniuk</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" name="ch[]" /></td>
                                                        <td>u-250</td>
                                                        <td><a href="#">Helen Symonchuk</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" name="ch[]" /></td>
                                                        <td>u-256</td>
                                                        <td><a href="#">Olga Yukhimchuk</a></td>
                                                    </tr>                            
                                                    <tr>
                                                        <td><input type="checkbox" name="ch[]" /></td>
                                                        <td>u-276</td>
                                                        <td><a href="#">Valentin Ratushev</a></td>
                                                    </tr>                                                        
                                                </tbody>
                                            </table>                    
                                        </div>  
                                        <div class="dr"><span></span></div>
                                    </div>  

                                    <div id="media">
                                    	<div class="widget-fluid userInfo clearfix">
                                                <div style="text-align: center!important">
                                                    <div class="name">TV programs</div>
                                                </div>
                                            </div>
                                        <ul class="fmenu">
                                            <li> <a href="{{Config::get('app.url')}}search/label/tvshow">TV Show</a></li>
											    <li> 
											    <a href="{{Config::get('app.url')}}search/label/hm">HM</a> <span class="caption blue">+</span>
											      <ul>
											        <li> <a href="{{Config::get('app.url')}}search/label/hm-tv">TV HM</a>
											        <span class="caption blue">+</span>
											          <ul>
											            <li> <a href="{{Config::get('app.url')}}search/label/vimean-soben">Vimean Soben</a>
											            </li>
											            <li> <a href="{{Config::get('app.url')}}search/label/teen-zone">Teen Zone</a>
											            </li>
											          </ul>
											        </li>
											      </ul>
											    </li>
											    <li> 
											    <a href="{{Config::get('app.url')}}search/label/my-tv">MYTV</a> 
											    <span class="caption blue">+</span>
											      <ul>
											        <li> 
											        <a href="{{Config::get('app.url')}}search/label/game-show">Game Show</a>
											        </li>
											        <li> 
											        <a href="{{Config::get('app.url')}}search/label/freshie-boy-girl">Freshie Boy - Girls</a>
											        </li>
											        <li> 
											        <a href="{{Config::get('app.url')}}search/label/penh-jet-ort">Penh Jet Ort</a>
											        </li>
											        <li> 
											        <a href="{{Config::get('app.url')}}search/label/teveda-wnner">Teveda Winner</a>
											        </li>
											        <li> 
											        <a href="{{Config::get('app.url')}}search/label/15000-award">15000$ Award</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/chumrum-dara">Chumrum Dara</a>
											        </li>
											        <li> 
											        <a href="{{Config::get('app.url')}}search/label/harm-serch">Ham Serch</a>
											        </li>
											        <li> 
											        <a href="{{Config::get('app.url')}}search/label/jumrum-kompol">Jumrum Kampoul Neak Broyuth</a>
											        </li>
											      </ul>
											    </li>
											    <li> 
											    <a href="{{Config::get('app.url')}}search/label/funny-show">Funny Show</a>
											    </li>
											    <li> 
											    <a href="{{Config::get('app.url')}}search/label/concert">Concert</a> <span class="caption blue">+</span>
											      <ul>
											        <li> 
											        <a href="{{Config::get('app.url')}}search/label/carabao-concert">Carabao Concert</a>
											        </li>
											        <li> 
											        <a href="{{Config::get('app.url')}}search/label/boom-boom-concert">Boom Boom Concert</a>
											        </li>
											        <li> 
											        <a href="{{Config::get('app.url')}}search/label/seatv-concert">SEATV Concert</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/ctn-concert">CTN Concert</a>
											        </li>
											      </ul>
											    </li>
											    <li> 
											    <a href="{{Config::get('app.url')}}search/label/tv3">TV3</a>
											    </li>
											    <li> 
											    <a href="{{Config::get('app.url')}}search/label/tv9">TV 9</a>
											    </li>
											    <li> 
											    <a href="{{Config::get('app.url')}}search/label/khmer-star-show">Khmer Star Show</a>
											    </li>
											    <li> 
											    <a href="{{Config::get('app.url')}}search/label/seatv">SEATV</a> <span class="caption blue">+</span>
											      <ul>
											        <li> <a href="{{Config::get('app.url')}}search/label/i-am-a-star">I am a Star</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/piphub-somnerch">Piphub Samnerch</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/music-tour">Music Tour</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/agriculture">Agriculture</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/kasekam">Kasekam</a>
											        </li>
											      </ul>
											    </li>
											    <li> <a href="{{Config::get('app.url')}}search/label/ctn-tv">CTN Show</a> <span class="caption blue">+</span>
											      <ul>
											        <li> <a href="{{Config::get('app.url')}}search/label/song-request">Song request</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/ctn-21">CTN 21</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/mun-snaeh-somneang">Mun Snae Somneang</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/loy9">Loy 9</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/sokea-leakena">Sokea Leakhena Big</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/somnerch-tarm-phumi">Samnech Tamphumi</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/you-will-become">You will become a Millionair</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/pteah-lokta">Pteah Lork​ Ta</a>
											        </li>
											      </ul>
											    </li>
											    <li> <a href="{{Config::get('app.url')}}search/label/bayon-tv">Bayon TV</a> <span class="caption blue">+</span>
											      <ul>
											        <li> <a href="{{Config::get('app.url')}}search/label/bayon-boxing">Bayon Boxing</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/dontrey-sroksraeh">Dantrey Srok Srae</a>
											        </li>
											        <li> <a href="{{Config::get('app.url')}}search/label/cha-cha-cha">Cha Cha Cha</a>
											        </li>
											      </ul>
											    </li>
                   
                                        </ul>        
                                        <div class="dr"><span></span></div>
                                    </div>                          

                                    <div id="follow">
										<div class="widget-fluid userInfo clearfix">
                                                <div style="text-align: center!important">
                                                    <div class="name">Get daily video</div>
                                                </div>
                                            </div>
                                        <div class="follower" id="getFBpage"><div class="loadPlaylist"></div></div>  
                                        <div class="dr"><span></span></div>
                                    </div>              

                                    <div id="samples">
                                        <div class="menu">
                                            <a href="./profile.html"><span class="icon-user"></span> User profile</a>
                                            <a href="./stream.html"><span class="icon-refresh"></span> Stream activity</a>
                                            <a href="./mailbox.html"><span class="icon-envelope"></span> Mailbox</a>
                                            <a href="./invoice.html"><span class="icon-list-alt"></span> Invoice</a>
                                            <a href="./gallery.html"><span class="icon-picture"></span> Gallery</a>
                                            <a href="./users.html"><span class="icon-align-justify"></span> Users list</a>
                                            <a href="./contacts.html"><span class="icon-book"></span> Contacts list</a>
                                            <a href="./faq.html"><span class="icon-question-sign"></span> FAQ</a>
                                        </div>                
                                        <div class="dr"><span></span></div>
                                    </div>

                                    <div id="other">
                                    	<div class="widget-fluid userInfo clearfix">
                                                <div style="text-align: center!important">
                                                    <div class="name">Comedy</div>
                                                </div>
                                            </div>
                                        <ul class="fmenu">
                                            <li> <a href="{{Config::get('app.url')}}label/comedy">Comedy</a> </li>
											<li> <a href="{{Config::get('app.url')}}label/khmer-comedy">Khmer Comedy</a> <span class="caption blue">+</span>
											  <ul style="display:block">
											    <li> <a href="{{Config::get('app.url')}}label/paekme">Paekme</a>
											    </li>
											    <li> <a href="{{Config::get('app.url')}}label/perkmy-group">Perkmy Group</a>
											    </li>
											    <li> <a href="{{Config::get('app.url')}}label/neay-koy">Neay Koy</a>
											    </li>
											    <li> <a href="{{Config::get('app.url')}}label/neay-krem">Neay Krem</a>
											    </li>
											  </ul>
											</li>
											<li> <a href="{{Config::get('app.url')}}label/ayai">Ayai Khmer</a> <span class="caption blue">+</span>
											  <ul style="display:block">
											    <li> <a href="{{Config::get('app.url')}}label/prummanh">Prum Manh</a>
											    </li>
											  </ul>
											</li>               
                                        </ul>
                                        <div class="dr"><span></span></div>
                                    </div>   
                                            <center>
                                                <div id="ad_2" class="ads-left" style="display: block"></div>
                                            </center>
                                        
                                </div>

                            </div>
                        </div>
                        <!-- ##### END LEFT SIDEBARE ##### -->